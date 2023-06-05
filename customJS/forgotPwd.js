const form = document.querySelector('#forgotPwdForm')
const email = document.querySelector('#email')
const requestBtn = document.querySelector('#forgotPwdSubmit')

function requestSubmit(e) {
  e.preventDefault()
  requestBtn.innerHTML = `<div class="spinner-border" role="status">
  <span class="visually-hidden">Loading...</span>
</div>`
  $.post(
    'php/users/resetRequest.inc.php',
    { resetRequestSubmit: 'action', email: email.value },
    function (data) {
      if (data !== 'Success') {
        feedBack(data, 'error')
        requestBtn.innerHTML = 'Send Email'
      } else {
        feedBack('Verify your email for the link!', 'success')
        requestBtn.innerHTML = 'Send Email'
      }
    }
  )
}

//Event Listeners
form.addEventListener('submit', requestSubmit)

//UI functions
function feedBack(message, type) {
  if (type === 'error' || type === 'success') {
    Swal.fire('feedBack', message, type)
  } else {
    Swal.fire('feedBack', 'Type error in feddback!', 'error')
  }
}
