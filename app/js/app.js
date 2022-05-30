document.addEventListener('DOMContentLoaded', function () {
  // scroll off
  document.querySelector('#burger').addEventListener('change', function () {
    document.body.style.overflow = this.checked === true ? 'hidden' : 'visible';
  });
});
