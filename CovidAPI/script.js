function fetch() {
    $.get('https://api.covid19api.com/summary', function(data) {

        console.log(data['Countries'].length);
        let table = document.getElementById('table');

        for (let i = 1; i < (data['Countries'].length); i++) {
            let x = table.insertRow();

            x.insertCell(0);
            table.rows[i].cells[0].innerHTML = data['Countries'][i - 1]['Country'];

            x.insertCell(1);
            table.rows[i].cells[1].innerHTML = data['Countries'][i - 1]['NewConfirmed'];

            x.insertCell(2);
            table.rows[i].cells[2].innerHTML = data['Countries'][i - 1]['TotalConfirmed'];

            x.insertCell(3);
            table.rows[i].cells[3].innerHTML = data['Countries'][i - 1]['NewDeaths'];

            x.insertCell(4);
            table.rows[i].cells[4].innerHTML = data['Countries'][i - 1]['TotalDeaths'];

            x.insertCell(5);
            table.rows[i].cells[5].innerHTML = data['Countries'][i - 1]['NewRecovered'];

            x.insertCell(6);
            table.rows[i].cells[6].innerHTML = data['Countries'][i - 1]['TotalRecovered'];
        }
    });
}