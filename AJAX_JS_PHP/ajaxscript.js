let submit = document.getElementById('id_submit');
submit.addEventListener('click', addStudent);

function addStudent(e){
    e.preventDefault();

    let nm = document.getElementById('id_name').value;
    let cls = document.getElementById('id_class').value;
    let mrks = document.getElementById('id_marks').value;


    let xhr = new XMLHttpRequest(); // Initalizing xhr object

    xhr.open('POST', 'insert.php', true); // Setting Forms action=insert.php and method=post


    // Response Header
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