let btn = document.querySelector('.bi-eye');

btn.addEventListener('click', function() {
  
  let input = document.querySelector('#password');

  if(input.getAttribute('type') == 'password') {
    input.setAttribute('type', 'text');
  } else {
    input.setAttribute('type', 'password');
  } 

});