<?php
// Получаем все страницы
$pages = get_posts([
    'post_type' => 'page',
    'posts_per_page' => -1,
    'post_status' => 'any', // Проверяем все статусы, включая черновики
]);

if (empty($pages)) {
    die('No pages found');
}

$template_blocks = [];

foreach ($pages as $page) {
    $page_id = $page->ID;
    $template = get_page_template_slug($page_id) ?: 'default';

    // Инициализируем массив для шаблона, если еще не существует
    if (!isset($template_blocks[$template])) {
        $template_blocks[$template] = [
            'template_name' => $template,
            'unique_blocks' => [],
            'pages_count' => 0
        ];
    }

    $template_blocks[$template]['pages_count']++;

    // Собираем блоки для текущей страницы
    $page_blocks = [];

    // Проверяем наличие блоков через have_rows (стандартный способ ACF)
    if (function_exists('have_rows') && have_rows('blocksSingleCheckup', $page_id)) {
        while (have_rows('blocksSingleCheckup', $page_id)) {
            the_row();
            $block_type = get_sub_field('block_type');
            if ($block_type && !in_array($block_type, $page_blocks)) {
                $page_blocks[] = $block_type;
            }
        }
    }
    // Альтернативная проверка, если блоки хранятся как массив
    elseif ($acf_blocks = get_field('blocksSingleCheckup', $page_id)) {
        foreach ($acf_blocks as $block) {
            if (isset($block['block_type']) && !in_array($block['block_type'], $page_blocks)) {
                $page_blocks[] = $block['block_type'];
            }
        }
    }

    // Добавляем уникальные блоки страницы в шаблон
    foreach ($page_blocks as $block_type) {
        if (!in_array($block_type, $template_blocks[$template]['unique_blocks'])) {
            $template_blocks[$template]['unique_blocks'][] = $block_type;
        }
    }
}

// Сортируем шаблоны по количеству страниц
uasort($template_blocks, function($a, $b) {
    return $b['pages_count'] - $a['pages_count'];
});

// Сортируем блоки в каждом шаблоне по алфавиту
foreach ($template_blocks as &$template) {
    sort($template['unique_blocks']);
    unset($template);
}

// Функция для форматированного вывода статистики
function formatBlockStats($templates_data, $total_pages, $templates_count) {
    echo '<div style="font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto;">';
    echo "<h1 style='color: #333;'>Статистика блоков по шаблонам</h1>";
    echo "<p style='margin-bottom: 30px;'><strong>Всего страниц:</strong> {$total_pages} | <strong>Шаблонов:</strong> {$templates_count}</p>";

    foreach ($templates_data as $template_data) {
        $block_count = count($template_data['unique_blocks']);
        echo "<div style='background: #f5f5f5; padding: 15px; margin-bottom: 20px; border-radius: 5px;'>";
        echo "<h2 style='margin-top: 0; color: #2c3e50;'>Шаблон: <code>{$template_data['template_name']}</code></h2>";
        echo "<p><strong>Страниц:</strong> {$template_data['pages_count']} | <strong>Уникальных блоков:</strong> {$block_count}</p>";

        if ($block_count > 0) {
            echo "<h3 style='margin-bottom: 5px;'>Используемые блоки:</h3>";
            echo "<ul style='columns: 3; column-gap: 20px; margin-top: 5px;'>";
            foreach ($template_data['unique_blocks'] as $block) {
                echo "<li style='margin-bottom: 3px;'><code>{$block}</code></li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Нет блоков в этом шаблоне</p>";
        }
        echo "</div>";
    }
    echo '</div>';
}

// Фильтруем только шаблоны с блоками
$templates_with_blocks = array_filter($template_blocks, fn($t) => !empty($t['unique_blocks']));

// Выводим результаты
formatBlockStats($template_blocks, count($pages), count($template_blocks));
?>
