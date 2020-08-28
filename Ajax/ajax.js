console.log("Welcome to Ajax Practice");


// Calling the button from HTML
let fetchBtn = document.getElementById("fetchBtn");
fetchBtn.addEventListener("click", fecthcHandler);

// function
function fecthcHandler() {
    console.log("You have clicked the fetch button");

    // Instanciate the xhr
    const xhr = new XMLHttpRequest();

    // open the file
    // xhr.open('GET', 'copy.txt', true);
    // xhr.open('GET', 'http://dummy.restapiexample.com/api/v1/employees', true);
    xhr.open('POST', 'http://dummy.restapiexample.com/api/v1/create', true);
    // xhr.getResponseHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.getResponseHeader('Content-type', 'application/json');

    // what to do in the progress
    xhr.onprogress = function () {
        console.log("Loading.....");
    }

    // What to do after the data is loaded
    xhr.onload = function () {
        if (this.status === 200) {
            console.log(this.responseText);
        }
        else {
            console.log("something went wrong");
        }
    }

    // sending the actual request
    params = `{"name":"test","salary":"123","age":"23"}`;
    xhr.send(params);
    // xhr.send(params); For get


}


let PopBtn = document.getElementById("popBtn");
PopBtn.addEventListener("click", popHandler);

function popHandler() {
    console.log("You are in pop handler function");

    const xhr = new XMLHttpRequest();

    xhr.open('GET', 'http://dummy.restapiexample.com/api/v1/employees', true);

    xhr.onload = function () {
        if (this.status === 200) {
            let obj = JSON.parse(this.responseText);
            console.log(obj);

            let list = document.getElementById("list");
            str = "";
            for (key in obj) {
                str += `<li> ${obj[key]} </li>`;
            }
            list.innerHTML = str;
        }
        else{
            console.log("Some thing went wrong");
        }
    }

    xhr.send();
}




