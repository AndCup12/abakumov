function openForm() {
  const form = document.querySelector('.hidden-form');
  const btn = document.querySelector(".open-form");
  const items = form?.querySelectorAll(".doctors-doctors__form-label");

  if(window.innerWidth >= 991.8) return;

  btn?.addEventListener('click', ()=>{
    form.classList.toggle('active')

    if(form.classList.contains('active')){
      btn.textContent = 'Закрыть фильтр';
    }else{
      btn.textContent = "Открыть фильтр";
    }
  })

  items?.forEach(item => item?.addEventListener('click', ()=>{
    form.classList.remove("active");
  }))
}

document.addEventListener("DOMContentLoaded", () => openForm());