const titles = document.querySelectorAll('.test-work-article__title');

console.log("titles = ", titles);
titles.forEach(title => {
   
   title.addEventListener('click', e => {
      // e.target

      console.log("e.target = ");

      e.target.closest('.test-work-article').querySelector('.test-work-article__body').classList.toggle('.body-active');

   });
})
