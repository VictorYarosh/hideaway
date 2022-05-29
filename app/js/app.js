// // Import vendor jQuery plugin example
// import '~/app/libs/mmenu/dist/mmenu.js'

// const navMobile = document.querySelector('.nav-mobile'),
//   burgerInput = document.querySelector('.burger-input');

// let initialPoint, finalPoint;

// document.addEventListener('touchstart', function (event) {
//   initialPoint = event.changedTouches[0];
// });

// document.addEventListener('touchend', function (event) {
//   finalPoint = event.changedTouches[0];

//   let xAbs = Math.abs(initialPoint.pageX - finalPoint.pageX),
//     yAbs = Math.abs(initialPoint.pageY - finalPoint.pageY);

//   if (xAbs > 120 || yAbs > 120) {
//     // 120 - SWIPE WIDTH
//     if (xAbs > yAbs) {
//       if (finalPoint.pageX < initialPoint.pageX) {
//         // SWIPE LEFT
//         navMobile.classList.remove('.burger-input:checked');
//       } else {
//         // SWIPE RIGTH
//         navMobile.classList.add('.burger-input:checked');
//       }
//     } else {
//       if (finalPoint.pageY < initialPoint.pageY) {
//         // SWIPE UP
//       } else {
//         // SWIPE DOWN
//       }
//     }
//   }
// });

// document.addEventListener('click', function (event) {
//   const target = event.target.closest('.burger');
//   if (target && target == burgerInput) {
//     navMobile.classList.toggle('.burger-input:checked');
//   } else if (event.target !== burgerInput && event.target !== navMobile) {
//     if (navMobile.classList.contains('.burger-input:checked')) {
//       navMobile.classList.remove('.burger-input:checked');
//     }
//   }
// });

// navMobile.querySelectorAll('a').forEach(function (element) {
//   element.addEventListener('click', function (event) {
//     const anchor_href = event.currentTarget.getAttribute('href');
//     if (anchor_href.charAt(0) === '#') {
//       event.preventDefault();
//       if (anchor_href.length > 1) {
//         // if #hash is not empty
//         const scroll_to_node = document.querySelector(event.currentTarget.hash);
//         if (scroll_to_node) {
//           SmoothScrollTo(scroll_to_node);
//         }
//       }
//     }
//   });
// });

// function SmoothScrollTo(element) {
//   if (element) {
//     element.scrollIntoView({
//       behavior: 'smooth',
//     });
//   }
// }

// document.querySelector('#menu-checkbox').addEventListener('change', function (e) {
//   document.body.style.overflow = e.target.checked === true ? 'hidden' : '';
// });

document.addEventListener('DOMContentLoaded', function () {
  const request = document.getElementById('request');
  request.addEventListener('submit', requestSend);

  async function requestSend(e) {
    e.preventDefault();

    let error = requestValidate(request);
  }

  function requestValidate(request) {
    let error = 0;
    let requestReq = document.querySelectorAll('-req');

    for (let index = 0; index < requestReq.length; index++) {
      const input = requestReq[index];
    }
  }

  function requestAddError(input) {
    input.parentElement.classList.add('-error');
    input.parentElement.classList.add('-error');
  }
  function requestRemoveError(input) {}
});
