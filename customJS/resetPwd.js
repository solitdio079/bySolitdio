
const form = document.querySelector("#resetPwdForm")
const selector = document.querySelector("#selector")
const validator = document.querySelector("#validator")
const pwd = document.querySelector("#resetPwd")
const pwdRepeat = document.querySelector('#resetPwd-repeat')
const resetPwdSubmit = document.querySelector('#resetPwdSubmit')

function resetFunction(e) {
    e.preventDefault()
      resetPwdSubmit.innerHTML = `<div class="spinner-border" role="status">
  <span class="visually-hidden">Loading...</span>
</div>`
    
     if (pwd.value.length < 8) {
         feedBack("Password must have at least 8 characters", "error")
          resetPwdSubmit.innerHTML = `Reset Password`
     } else if (pwd.value !== pwdRepeat.value) {
         feedBack('Passwords not matching!')
         resetPwdSubmit.innerHTML = `Reset Password`
     } else {
       $.post(
         'php/users/resetPassword.inc.php',
         {
           resetPasswordSubmit: 'action',
           selector: selector,
           validator: validator,
           pwd: pwd,
           pwdRepeat: pwdRepeat,
         },
         function (data) {
           if (data !== 'Success') {
             feedBack(data, 'error')
             resetPwdSubmit.innerHTML = `Reset Password`
           } else {
                 feedBack('New Password has been set with success!', 'success')
                 resetPwdSubmit.innerHTML = `Reset Password`
           }
         }
       )
     }


}

form.addEventListener("submit", resetFunction)

$('#resetPwdForm').submit(function (e) {
  e.preventDefault()
  $('#popup').show()
  $('#overlay').show()
  var selector = $('#selector').val()
  var validator = $('#validator').val()
  var pwd = $('#resetPwd').val()
  var pwdRepeat = $('#resetPwd-repeat').val()
  if (pwd.length < 8) {
    showErrorMessage('Mot de passe doit etre au moins 8 characteres!')
  } else if (pwd != pwdRepeat) {
    showErrorMessage('Mots de passes ne correspondent pas!!')
  } else {
    $.post(
      'php/reset_password.inc.php',
      {
        resetPasswordSubmit: 'action',
        selector: selector,
        validator: validator,
        pwd: pwd,
        pwdRepeat: pwdRepeat,
      },
      function (data) {
        if (data == 'Success!') {
          showSuccessMessage('Mot de passe change avec success')
          window.location.href = 'index.php'
        } else {
          showErrorMessage(data)
        }
      }
    )
  }
})




//UI Functions

function feedBack(message, type) {
  if (type === 'error' || type === 'success') {
      Swal.fire('feedBack',message, type)
  } else {
     Swal.fire('feedBack','Type error in feddback!', 'error')
  }
}
function isJson(item) {
  item = typeof item !== 'string' ? JSON.stringify(item) : item

  try {
    item = JSON.parse(item)
  } catch (e) {
    return false
  }

  if (typeof item === 'object' && item !== null) {
    return true
  }

  return false
}