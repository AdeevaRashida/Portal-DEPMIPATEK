document.addEventListener('DOMContentLoaded', function () {
  initFaq();
  initMisiSlider();
  initLogin();
});

function initFaq() {
  var items = document.querySelectorAll('.faq-item');

  items.forEach(function (item) {
    var question = item.querySelector('.faq-question');
    var answer = item.querySelector('.faq-answer');

    question.addEventListener('click', function () {
      var open = item.getAttribute('data-open') !== 'true';
      item.setAttribute('data-open', String(open));
      question.setAttribute('aria-expanded', String(open));
      answer.style.maxHeight = open ? answer.scrollHeight + 'px' : '0px';
    });
  });

  window.addEventListener('resize', function () {
    items.forEach(function (item) {
      if (item.getAttribute('data-open') === 'true') {
        var answer = item.querySelector('.faq-answer');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });

  var more = document.querySelector('[data-faq-more]');
  if (!more) {
    return;
  }

  var extras = document.querySelectorAll('[data-faq-extra]');
  var label = more.querySelector('span');
  var collapsedLabel = label.textContent;

  more.addEventListener('click', function () {
    var expanded = more.getAttribute('aria-expanded') !== 'true';

    extras.forEach(function (item) {
      item.hidden = !expanded;
    });

    more.setAttribute('aria-expanded', String(expanded));
    label.textContent = expanded ? 'Tampilkan lebih sedikit' : collapsedLabel;
  });
}

function initMisiSlider() {
  var slider = document.querySelector('[data-misi-slider]');
  if (!slider) {
    return;
  }

  var track = slider.querySelector('[data-misi-track]');
  var wrap = slider.querySelector('.misi-track-wrap');
  var slides = Array.prototype.slice.call(track.children);
  var dotsWrap = slider.querySelector('[data-misi-dots]');
  var prevBtn = slider.querySelector('[data-misi-prev]');
  var nextBtn = slider.querySelector('[data-misi-next]');
  var current = 0;
  var touchStartX = null;

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

  function fitHeight() {
    wrap.style.height = slides[current].offsetHeight + 'px';
  }

  function update() {
    track.style.transform = 'translateX(-' + (current * 100) + '%)';
    fitHeight();
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

  slider.addEventListener('touchstart', function (event) {
    touchStartX = event.changedTouches[0].clientX;
  }, { passive: true });

  slider.addEventListener('touchend', function (event) {
    if (touchStartX === null) {
      return;
    }

    var deltaX = event.changedTouches[0].clientX - touchStartX;
    touchStartX = null;

    if (Math.abs(deltaX) > 50) {
      goTo(deltaX < 0 ? current + 1 : current - 1);
    }
  }, { passive: true });

  window.addEventListener('resize', fitHeight);
  window.addEventListener('load', fitHeight);

  update();
}

function initLogin() {
  var form = document.getElementById('login-form');
  if (!form) {
    return;
  }

  var alertBox = document.getElementById('login-alert');
  var alertText = document.getElementById('login-alert-text');
  var fields = [
    {
      input: document.getElementById('username'),
      error: document.getElementById('username-error')
    },
    {
      input: document.getElementById('password'),
      error: document.getElementById('password-error')
    }
  ];

  function setFieldError(field, show) {
    field.error.hidden = !show;

    if (show) {
      field.input.setAttribute('aria-invalid', 'true');
    } else {
      field.input.removeAttribute('aria-invalid');
    }
  }

  fields.forEach(function (field) {
    field.input.addEventListener('input', function () {
      setFieldError(field, false);
      alertBox.hidden = true;
    });
  });

  form.addEventListener('submit', function (event) {
    event.preventDefault();
    alertBox.hidden = true;

    var firstInvalid = null;

    fields.forEach(function (field) {
      var empty = field.input.value.trim() === '';
      setFieldError(field, empty);

      if (empty && !firstInvalid) {
        firstInvalid = field.input;
      }
    });

    if (firstInvalid) {
      firstInvalid.focus();
      return;
    }

    var username = fields[0].input.value;
    var password = fields[1].input.value;

    if (username === 'user' && password === '12345') {
      window.location.href = form.getAttribute('data-redirect');
    } else {
      alertText.textContent = 'Username atau password salah. Silakan coba lagi.';
      alertBox.hidden = false;
      fields[1].input.value = '';
      fields[1].input.focus();
    }
  });
}