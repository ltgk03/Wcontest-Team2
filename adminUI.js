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

document.querySelector('#add-button').onclick = function() {
    const createExamForm = document.createElement('form');
    const part1 = document.createElement('div');

    const testNameLabel = document.createElement('label');
    testNameLabel.innerText = 'Test name (ex: Demo Test)';
    
    const testNameInput = document.createElement('input');
    testNameInput.setAttribute('type', 'text');
    testNameInput.required = true;
    testNameInput.setAttribute('id', 'test-name');

    part1.appendChild(testNameLabel);
    part1.appendChild(testNameInput);

    createExamForm.appendChild(part1);
    
    const part2 = document.createElement('div');

    const leftPart = document.createElement('div');
    const passwordLabel = document.createElement('label');
    passwordLabel.innerText = 'Choose a password';
    
    const passwordInput = document.createElement('input');
    passwordInput.setAttribute('type', 'password');
    passwordInput.required = true;
    passwordInput.setAttribute('id', 'test-password');
    leftPart.appendChild(passwordLabel);
    leftPart.appendChild(passwordInput);

    const rightPart = document.createElement('div');
    const confirmPasswordLabel = document.createElement('label');
    confirmPasswordLabel.innerText = 'Retype your password';
    
    const confirmPasswordInput = document.createElement('input');
    confirmPasswordInput.setAttribute('type', 'password');
    confirmPasswordInput.required = true;
    confirmPasswordInput.setAttribute('id', 'confirm-test-password');
    rightPart.appendChild(confirmPasswordLabel);
    rightPart.appendChild(confirmPasswordInput);

    part2.appendChild(leftPart);
    part2.appendChild(rightPart);

    createExamForm.appendChild(part2);
    document.body.appendChild(createExamForm);

} 




