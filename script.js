window.onscroll = () => {
    let header = document.querySelector('header')
    header.classList.toggle('sticky', window.scrollY > 100);
}

$(window).scroll(function () {
    if($(window).scrollTop() > 150) {
      $('#navigation-panel').css('position', 'fixed');
      $('#navigation-panel').css('top', 0);
    } else {
    $('#navigation-panel').css('position', '');
      $('#navigation-panel').css('top', '-100%');
    }
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }
        else {
            entry.target.classList.remove('show')
        }
    });
  });

  const hiddenElements = document.querySelectorAll('.hidden')
  hiddenElements.forEach((el) => observer.observe(el));