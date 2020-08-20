let lang = document.getElementById('langs');
lang.addEventListener('click', mylang(this.value));

function mylang(data){
    xhr = new XMLHttpRequest();

    xhr.open('GET', 'http://localhost/dependend_dropbox/get_data.php?select_value='+data, true);
    xhr.send();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            document.getElementById('frameworks')
        }
    }
}

