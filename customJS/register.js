const form = document.querySelector("#registerForm")
const userName = document.querySelector("#username")
const email = document.querySelector("#email")
const pwd = document.querySelector("#pwd")
const confirmPwd = document.querySelector("#confirmPwd")
const registerSubmit = document.querySelector('#registerSubmit')


function registerSbmtFunction(e) {
    e.preventDefault()
    registerSubmit.innerHTML = `<div class="spinner-border" role="status">
  <span class="visually-hidden">Loading...</span>
</div>`
    if (pwd.value.length < 8) {
        feedBack("Password must have at least 8 characters!", "error");
         registerSubmit.innerHTML = `Sign Up`
    } else if (pwd.value !== confirmPwd.value) {
         feedBack('Passwords not matching!', 'error')
         registerSubmit.innerHTML = `Sign Up`
    } else {
        $.post("php/users/register.inc.php",
            {
                registerSubmit: "action",
                username: userName.value,
                email: email.value,
                pwd: pwd.value,
        
            }, function (data) {
                if (data !== "Success") {
                    feedBack(data, "error");
                     registerSubmit.innerHTML = `Sign Up`
                } else {
                    feedBack("User Created!", "success")
                    registerSubmit.innerHTML = `Sign Up`
                }
            })
    }
    
    
}




//Event Listeners

form.addEventListener("submit", registerSbmtFunction)







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