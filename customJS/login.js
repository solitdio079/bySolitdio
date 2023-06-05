const form = document.querySelector("#loginForm")
const email = document.querySelector("#email")
const pwd = document.querySelector("#pwd")
const loginSubmit = document.querySelector("#loginSubmit")



function loginSnmtFunction(e) {
    e.preventDefault()
      loginSubmit.innerHTML = `<div class="spinner-border" role="status">
  <span class="visually-hidden">Loading...</span>
</div>`
    if (pwd.value.length < 8) {
        feedBack("Password too short!", "error");
        loginSubmit.innerHTML = `Login Now`
    } else {
        $.post("php/users/login.inc.php", { loginSubmit: "action", email: email.value, pwd: pwd.value }, function (data) {
            if (data !== "Success") {
                feedBack(data, "error")
                 loginSubmit.innerHTML = `Login Now`
            } else {
                 feedBack("Logged In!", 'success')
                loginSubmit.innerHTML = `Login Now`
                setTimeout(()=> {window.location.href ="admin.php"}, 3000)
            }
        })
    }
    
}

//Event Listeners
form.addEventListener("submit", loginSnmtFunction)



//UI Functions 
function feedBack(message, type) {
  if (type === 'error' || type === 'success') {
    Swal.fire('feedBack', message, type)
  } else {
    Swal.fire('feedBack', 'Type error in feddback!', 'error')
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