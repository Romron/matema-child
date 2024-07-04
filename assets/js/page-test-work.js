const titles = document.querySelectorAll('.test-work-article__title');
const bodyes = document.querySelectorAll('.test-work-article__body');

console.log("titles = ", titles);
titles.forEach(title => {
   
   title.addEventListener('click', e => {

      bodyes.forEach(body => {
         body.classList.toggle('body-active');
      });


   });
})
