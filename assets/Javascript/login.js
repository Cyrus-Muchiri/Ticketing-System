window.onload = function ()
{
    const formData = document.getElementById('formData');
    formData.addEventListener('submit',loginUser);
}
// var response;
// var request = new XMLHttpRequest();
// request.open("POST", 'http://kukodiapp.herokuapp.com/api/v1/landlord/login');
function loginUser(event)
{
    event.preventDefault();

    let email = document.getElementById('email').value
    let password = document.getElementById('password').value
    //Var response;
    var request = new XMLHttpRequest();
    request.open("POST", 'http://kukodiapp.herokuapp.com/api/v1/landlord/login');
    let data = JSON.stringify({
        "email": email,
        "password": password
});
request.send(data);
request.onreadystatechange = (e) => {
    response = JSON.parse(request.responseText);
    console.log(response);
if (response.status === 200) {
    localStorage.setItem('token',data.token)
                window.location.href = ".../templates/dashboard.html";
} else {
    window.alert(response.message);
}
    fetch(login, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({email,password})
    })
    .then((response) => response.json())
    .then((data =>
        {
            if (data.status === 200){
                localStorage.setItem('token',data.token)
                window.location.href = ".../templates/dashboard.html";
            }
            else {
                window.alert(data.message);
            }
        }))
}