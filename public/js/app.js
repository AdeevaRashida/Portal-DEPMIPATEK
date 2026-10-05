document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.faq__item').forEach(function (item) {
    var question = item.querySelector('.faq__question');
    var answer = item.querySelector('.faq__answer');

    question.addEventListener('click', function () {
      var isOpen = item.getAttribute('data-open') === 'true';
      item.setAttribute('data-open', String(!isOpen));
      answer.style.maxHeight = !isOpen ? answer.scrollHeight + 'px' : '0px';
    });
  });

  var slider = document.querySelector('[data-misi-slider]');
  if (!slider) {
    return;
  }

  var track = slider.querySelector('[data-misi-track]');
  var slides = Array.prototype.slice.call(track.children);
  var dotsWrap = slider.querySelector('[data-misi-dots]');
  var prevBtn = slider.querySelector('[data-misi-prev]');
  var nextBtn = slider.querySelector('[data-misi-next]');
  var current = 0;

  slides.forEach(function (_, index) {
    var dot = document.createElement('button');
    dot.type = 'button';
    dot.className = 'misi-dot';
    dot.setAttribute('aria-label', 'Ke slide ' + (index + 1));
    dot.addEventListener('click', function () {
      goTo(index);
    });
    dotsWrap.appendChild(dot);
  });

  var dots = Array.prototype.slice.call(dotsWrap.children);

  function update() {
    track.style.transform = 'translateX(-' + (current * 100) + '%)';
    dots.forEach(function (dot, index) {
      dot.setAttribute('aria-current', String(index === current));
    });
  }

  function goTo(index) {
    current = (index + slides.length) % slides.length;
    update();
  }

  prevBtn.addEventListener('click', function () {
    goTo(current - 1);
  });

  nextBtn.addEventListener('click', function () {
    goTo(current + 1);
  });

  update();
});
