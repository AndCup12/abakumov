if (document.querySelectorAll(".quiz-block, #quiz-modal")) {
  const quizes = document.querySelectorAll(".quiz-block, #quiz-modal");
  quizes.forEach((quiz) => {
    const line = quiz.querySelector(".line");
    const lineWrapper = quiz.querySelector(".progress-bar");
    const progressText = quiz.querySelector(".progress-text");
    const steps = quiz.querySelectorAll(".step");
    const btnNext = quiz.querySelectorAll(".next-step");
    const btnPrev = quiz.querySelectorAll(".prev-step");
    const variants = quiz.querySelectorAll(".variant");

    const resultBlock = document.querySelector(".result-block");
    const resultImg = resultBlock.querySelector(".step-img");
    const resultNum = resultBlock.querySelector(".step-num");

    const lineShow = 100 / steps.length - 1;

    let count = 0;

    variants.forEach((btn) => btn.addEventListener("change", nextStep));
    btnNext.forEach((btn) => btn.addEventListener("click", nextStep));
    btnPrev.forEach((btn) => btn.addEventListener("click", prevStep));

    function nextStep() {
      const modalFooterText = steps[count].querySelector(".quiz-needs-select");

      // проверяем нажат ли инпут
      if (validateInputs(steps, count)) {
        // переключаем на следующий шаг
        changeStep(steps, count, "increase");
        // меняем текст на линии прогресса
        changeProgressText(progressText, "increase");
        // меняем линию прогресса
        changeLine(line, "increase");

        changeResultBlock(resultImg, resultNum, "increase");
        // отключаем всплывающее окно
        modalFooterText.style.display = "none";
        count++;
      } else {
        // если не нажат, то всплывает подсказка
        modalFooterText.style.display = "block";
      }
    }

    function prevStep() {
      const modalFooterText = steps[count].querySelector(".quiz-needs-select");

      // отключаем всплывающее окно
      modalFooterText.style.display = "none";

      // оннулируем инпуты
      reversalInputs(steps, count);
      // переключаем на предыдущий шаг
      changeStep(steps, count, "decrease");
      // меняем текст на линии прогресса
      changeProgressText(progressText, "decrease");
      // меняем линию прогресса
      changeLine(line, "decrease");

      changeResultBlock(resultImg, resultNum, "decrease");
      count--;
    }

    function changeStep(steps, index, value) {
      if (value == "increase") {
        if (steps[index].classList.contains("active")) {
          steps[index].classList.remove("active");
          if (index != steps.length - 1)
            steps[index + 1].classList.add("active");
        }
      }

      if (value == "decrease") {
        if (steps[index].classList.contains("active")) {
          steps[index].classList.remove("active");
          if (index != 0) steps[index - 1].classList.add("active");
        }
      }
    }

    function changeProgressText(progText, value) {
      const num = progText.querySelector(".current-step");
      const text = progText.querySelector(".rp-rule__span");
      const firstWord = progText.querySelector(".progress-text__first-word");

      let numInt = Number(num.textContent);
      if (value == "increase") {
        num.textContent = numInt - 1;
        numInt = Number(num.textContent);
      }
      if (value == "decrease") {
        num.textContent = numInt + 1;
        numInt = Number(num.textContent);
      }
      if (numInt == 0) {
        progText.innerHTML = `
<span>Заполните форму ниже для получения результатов</span>
`;
        progText.classList.add("active");
      }
      if (numInt == 1) {
        firstWord.textContent = "Остался";
        text.textContent = "вопрос";
      }
      if (numInt >= 2 && numInt <= 4) text.textContent = "вопроса";
      if (numInt == 5) text.textContent = "вопросов";
    }
    function changeLine(line, value) {
      const num = progressText.querySelector(".current-step");
      const s = line.dataset.left;
      if (value == "increase") {
        line.style.left = "-" + (parseFloat(s) - lineShow) + "%";
        line.dataset.left = parseFloat(s) - lineShow;
      }
      if (value == "decrease") {
        line.style.left = "-" + (parseFloat(s) + lineShow) + "%";
        line.dataset.left = parseFloat(s) + lineShow;
      }
      if (!num) lineWrapper.style.display = "none";
    }
    function validateInputs(steps, index) {
      const inputs = [
        ...steps[index].querySelectorAll(
          ".radio-input, select, input[type='text'], .form-control"
        ),
      ];
      const assessment = steps[index].querySelector(".assessment__comment");
      const checkInp = inputs.some(function (input) {
        if (input.tagName === "SELECT" && input.value != "Выбрать отрасль") {
          return true;
        }
        if (
          input.classList.contains("form-control") &&
          input.value != "Введите свое значение"
        ) {
          return true;
        }
        if (input.getAttribute("type") == "text" && input.value != "") {
          return true;
        }
        if (input.checked) {
          return true;
        }
        return;
        false;
      });
      return assessment || checkInp;
    }
    function reversalInputs(steps, index) {
      const inputs = [...steps[index].querySelectorAll(".radio-input")];
      if (steps[index - 1].querySelectorAll(".radio-input")) {
        inputs.push(...steps[index - 1].querySelectorAll(".radio-input"));
      }
      if (inputs) {
        inputs.forEach((input) => {
          if (input.checked) input.checked = false;
        });
      }
    }
    function changeResultBlock(resultImg, resultNum, value) {
      let step = count + 2;
      const lastStep = steps.length;

      if (value == "increase" && step !== lastStep) {
        resultNum.textContent = step;
        resultImg.src = `images/step-${step + 1}.webp`;
      }
      if (value == "decrease" && step !== lastStep) {
        resultNum.textContent = step - 2;
        resultImg.src = `images/step-${step - 1}.webp`;
      }

      if (step === lastStep) {
        const innerBlock = document.querySelector(".result-block__inner");
        const finishBlock = document.querySelector(
          ".result-block__finish-block"
        );
        const stepsTitles = quiz.querySelectorAll(".step__title");
        const stepsChecked = quiz.querySelectorAll(".radio-input:checked");

        const resultArray = Array.from(stepsTitles)
          .slice(0, -1)
          .map((titleElement, index) => {
            return {
              title: titleElement.textContent.trim(),
              input: stepsChecked[index] ? stepsChecked[index].value : "", 
            };
          });

        innerBlock.style.display = "none";
        resultImg.style.display = "none";
        finishBlock.classList.add("active");
        finishBlock.innerHTML = renderFinishList(resultArray);
      }
    }

    function renderFinishList(arr) {
      return `
      <h2 class="result-block__finish-title">
        Вы выбрали следующие параметры макета:
        </h2>
        <ul class="result-block__finish-list">
      ${arr.map((item) => {
        return `
        <li class="result-block__finish-point">${item.title}: <span>${item.input}</span></li>
        `;
      }).join('')}
      </ul>
      `;
    }
  });
}
