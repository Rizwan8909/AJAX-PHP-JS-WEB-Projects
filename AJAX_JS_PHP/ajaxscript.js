// Ajax Request for retrieving the data
let tbody = document.getElementById('tbody');

function showStudent(){
    tbody.innerHTML="";
    const xhr = new XMLHttpRequest();

    // Initializing the xhr object
    xhr.open('GET', 'retrieve.php', true);

    // Converting json to js object
    xhr.responseType = "json";

    // Handling the response
    xhr.onload = () =>{
        if(xhr.status == 200){
            // Success Response
            if(xhr.response){
                x= xhr.response     //To use responseType we have to convert responseText to response
            }
            else{
                x = "";
            }

            for(i=0; i<x.length; i++){
                tbody.innerHTML += `<tr>
                                    <td>`+x[i].ID+`</td>
                                    <td>`+x[i].name+`</td>
                                    <td>`+x[i].class+`</td>
                                    <td>`+x[i].marks+`</td>
                                  </tr>`;
            }
           
        }
        else{
            console.log("Something went wrong");
        }
    }

    xhr.send();
}

// Calling showStudent
showStudent();



// Ajax Request for inseting the data
let submit = document.getElementById('id_submit');
submit.addEventListener('click', addStudent);

function addStudent(e){
    e.preventDefault();

    let nm = document.getElementById('id_name').value;
    let cls = document.getElementById('id_class').value;
    let mrks = document.getElementById('id_marks').value;


    const xhr = new XMLHttpRequest(); // Initalizing xhr object

    xhr.open('POST', 'insert.php', true); // Setting Forms action=insert.php and method=post

    // Response Header (Only need for POSt request)
    xhr.setRequestHeader("Content-Type", "application/json");

    // Handling the response
    xhr.onload = ()=>{
        if(xhr.status == 200){
            // After getting Success Response from insert.php

            let stu_alert = document.getElementById('stu_alert');

            stu_alert.innerHTML = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>`+xhr.responseText+`
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>`;
            
            // Reseting the form
            document.getElementById('student_form').reset();
            showStudent();
        }
        else{
            console.log("Some problem occured");
        }
    }

    // Creating object of Data
    let mydata = {name: nm , class: cls, marks: mrks};

    // converting object into JSON
    let data = JSON.stringify(mydata);

    xhr.send(data);
   
}