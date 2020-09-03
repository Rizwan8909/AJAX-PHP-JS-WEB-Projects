console.log("Welcome to fetchApi");

function getData() {
    url = 'http://dummy.restapiexample.com/api/v1/employees';

    // fetch(url).then(function(response){
    //     return response.text();
    // }).then(function(data){
    //     console.log(data);
    // });


    fetch(url).then(response => response.json())
    .then(data => console.log(data));
}

function postData(){
    url = 'http://dummy.restapiexample.com/api/v1/create';
    data = '{"name":"testdfdfd","salary":"123","age":"23"}';
    params = {
        method: 'post',
        headers: {
            'Content-Type': 'application/json'
        },
        body: data
    }
    fetch(url, params).then(response => response.json())
    .then(data => console.log(data));
}
getData();
postData();