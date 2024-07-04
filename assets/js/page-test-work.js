const sections = document.querySelectorAll('.test-work-section');

sections.forEach(section => {
   section.addEventListener('click', e => {
      let target = e.target;
      if (target.classList.contains('test-work-article__title')) {
         section.querySelectorAll('.test-work-article__body').forEach(body => {
            body.classList.toggle('body-active');
         });;
      }
   });
})
