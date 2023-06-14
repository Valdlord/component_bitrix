document.addEventListener('DOMContentLoaded', () => {
  const plusminuses = document.querySelectorAll('.plusminus');
  const buttons = document.querySelectorAll('.btn-title');

  buttons.forEach((el, index) => {
    el.addEventListener('click', () => {
      const isActive = plusminuses[index].classList.contains('active');
      plusminuses.forEach((elem) => elem.classList.remove('active'));
      if (!isActive) {
        plusminuses[index].classList.add('active');
      }
    });
  });
});