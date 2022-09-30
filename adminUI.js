const workplace = document.querySelector('#workplace');
const ALLEXAM = () => {
    const table = document.createElement('table');
    table.setAttribute('class', 'table');
    const thead = document.createElement('thead');
    const titlerow = document.createElement('tr');
    titlerow.innerHTML = '<th scope="col">Exam</th>'
                       + '<th scope="col">View exam</th>'
                       + '<th scope="col">Due date</th>'
                       + '<th scope="col">Status</th>'
                       + '<th scope="col">Average test time</th>'
                       + '<th scope="col">Exam control</th>';
    thead.appendChild(titlerow);
    table.appendChild(thead);               
                            
    const tbody = document.createElement('tbody');

    // getData into an object array rows.
/*
    let rows = [];
    for (let i = 0; i < rows.length; i++) {
        const row = document.createElement('tr');
        Object.keys(rows[i]).forEach(function (key) {
            const col = document.createElement('td');
            if (key == 'exam') {
                col.setAttribute('scop', 'row');
                col.innerText = rows[i][key];
            } else {
                col.innerText = rows[i][key];
            }
            row.appendChild(col);
        });
        tbody.appendChild(row);
    }
*/
    table.appendChild(tbody);
    while (workplace.lastElementChild) {
        workplace.removeChild(workplace.lastElementChild);
    }
    workplace.appendChild(table);
}

const RESULT = () => {
    const table = document.createElement('table');
    table.setAttribute('class', 'table');
    const thead = document.createElement('thead');
    const titlerow = document.createElement('tr');
    titlerow.innerHTML = '<th scope="col">Exam</th>'
                       + '<th scope="col">Due date</th>'
                       + '<th scope="col">Result</th>'
    thead.appendChild(titlerow);
    table.appendChild(thead);               
                            
    const tbody = document.createElement('tbody');

    // getData into an object array rows.
/*
    let rows = [];
    for (let i = 0; i < rows.length; i++) {
        const row = document.createElement('tr');
        Object.keys(rows[i]).forEach(function (key) {
            const col = document.createElement('td');
            if (key == 'exam') {
                col.setAttribute('scop', 'row');
                col.innerText = rows[i][key];
            } else {
                col.innerText = rows[i][key];
            }
            row.appendChild(col);
        });
        tbody.appendChild(row);
    }
*/
    table.appendChild(tbody);
    while (workplace.lastElementChild) {
        workplace.removeChild(workplace.lastElementChild);
    }
    workplace.appendChild(table);
}

const REPORT = () => {

}

const SETTING = () => {

}

const SIGNOUT = () => {

}

ALLEXAM();
document.querySelector('#allexam-btn').onclick = function() {
    currentState = 'All exam';
    ALLEXAM();
}
document.querySelector('#result-btn').onclick = function() {
    currentState = 'Results';
    RESULT();
}
document.querySelector('#report-btn').onclick = function() {
    currentState = 'Report';
    REPORT();
}
document.querySelector('#setting-btn').onclick = function() {
    currentState = 'Setting';
    SETTING();
}
document.querySelector('#signout-btn').onclick = function() {
    currentState = 'Sign out';
    SIGNOUT();
}




