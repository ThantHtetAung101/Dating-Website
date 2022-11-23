const openEye = document.querySelector(".fa-eye")
const closeEye = document.querySelector(".fa-eye-slash")
const password = document.querySelector(".password")
const profileUpload = document.querySelector("#profileUpload")
const profileForm = document.querySelector("#profile")
const form = document.querySelector("#profileFormUpload")
const checkedProfile = document.querySelector("#checkedProfile")
const maleBtn = document.querySelector("#maleBtn")
const femaleBtn = document.querySelector("#femaleBtn")
const firstContainer = document.querySelector(".firstContainer")
const firstBtn = document.querySelector("#firstBtn")
const secondContainer = document.querySelector(".secondContainer")
function eyeOpen() {
    password.type = "password"
    openEye.classList.add("d-none")
    closeEye.classList.remove("d-none")
}
function eyeClose() {
    password.type = "text"
    closeEye.classList.add("d-none")
    openEye.classList.remove("d-none")
}
$("#firstForm").on("submit", (e)=>{
    e.preventDefault()
    let dataString = "email=" + document.getElementById("emailInput").value + "&password=" + document.getElementById("passwordInput").value
    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token
        }
    });
    $.ajax({
        type: 'POST',
        url: '/register/create',
        data: dataString,
        dataType: 'json',
    }).done(function(response){
        console.log("Done");
    });
    console.log(dataString)
    return false;
})
profileUpload.addEventListener("click", ()=> {
    profileForm.click()
    profileForm.onchange = function () {
        var input = this.files[0];
        if (input) {
            profileUpload.classList.add("fadeOut")
            profileUpload.classList.add("d-none")
            checkedProfile.classList.add("fadeIn")
            checkedProfile.classList.remove("d-none")
        } else {
            console.log("Please select a file.");
        }
    };
})
maleBtn.addEventListener("click", (e)=> {
    // e.preventDefault();
    if(femaleBtn.classList.contains("btn-danger")) {
        console.log("does have")
        femaleBtn.classList.remove("btn-danger")
    }
    maleBtn.classList.add("btn-primary")
    document.forms[0].submit();
    document.forms[1].submit();
})
femaleBtn.addEventListener("click", (e)=> {
    // e.preventDefault();
    if(maleBtn.classList.contains("btn-primary")) {
        maleBtn.classList.remove("btn-primary")
    }
    femaleBtn.classList.add("btn-danger")
    document.forms[0].submit();
    document.forms[1].submit();
})

firstBtn.addEventListener("click", (e) => {
    firstContainer.classList.add("fadeOut")
    firstContainer.classList.add("d-none")
    secondContainer.classList.remove("d-none")
    secondContainer.classList.add("fadeIn")
})
