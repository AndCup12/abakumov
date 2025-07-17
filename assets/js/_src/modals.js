// Изменение заголовка и инпут from в попапе, по нажатию на кнопку в item

const btns = document.querySelectorAll('.change-popup');
btns?.forEach(btn => {
  btn.addEventListener('click', function(){

    const id = btn.href.split('#')[1];
    const modal = document.getElementById(id);
    const modalFrom = modal.querySelector('[name="from"]')
    const modalBtn = modal.querySelector(".form-btn");
    const modalTitle = modal.querySelector("h2");
    const textBtn = btn.textContent;
    

    const startTextBtn = "Заполните форму ниже, чтобы ";
    modalFrom.value = startTextBtn + textBtn.trim().toLowerCase();
    modalTitle ? modalTitle.textContent = startTextBtn + textBtn.trim().toLowerCase() : null;
    modalBtn ? modalBtn.textContent = textBtn.trim() : null;
    
  })
})


