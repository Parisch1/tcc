var myTimeout;

function f() {
  document.getElementsByClassName('dropdown')[0].classList.toggle('down');
  document.getElementsByClassName('arrow')[0].classList.toggle('gone');
  if (document.getElementsByClassName('dropdown')[0].classList.contains('down')) {
    myTimeout = setTimeout(function() {
      document.getElementsByClassName('dropdown')[0].style.overflow = 'visible'
    }, 500)
  } else {
    clearTimeout(myTimeout);
    document.getElementsByClassName('dropdown')[0].style.overflow = 'hidden'
  }
}