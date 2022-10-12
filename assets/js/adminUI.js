const workplace = document.querySelector('#workplace');
const ALLEXAM = () => {
    const table = document.createElement('table');
    table.setAttribute('class', 'table');
    const thead = document.createElement('thead');
    const titlerow = document.createElement('tr');
    titlerow.innerHTML = '<th scope="col">Exam ID</th>'
                       + '<th scope="col">Exam name</th>'
                       + '<th scope="col">Due date</th>'
                       + '<th scope="col">Status</th>'
                       + '<th scope="col">Average test time</th>';
    thead.appendChild(titlerow);
    // table.appendChild(thead);
    // var x = document.getElementById("item-workspace");
    // titlerow.innerHTML = "<?php"
    // + "$result = $conn->query($sql);"
    // + "if ($result->num_rows > 0) {"
    //     + "$dem = 0;"
    //     + "while ($row = $result->fetch_assoc()) {"
    // + "?>"
    //     + "<tr>"
    //         + "<th scope = \"col\" > <?php echo $row['examid'] ?> </th>"
    //         + "<th scope = \"col\" > <?php echo $row['examname'] ?> </th>"
    //         + "<th scope = \"col\" > <?php echo $row['examdate'] ?> </th>"
    //         + "<th scope = \"col\" > <?php echo $row['examstatus'] ?> </th>"
    //         + "<th scope = \"col\" > <?php echo $row['examaveragetime'] ?> </th>"
    //     + "</tr>"
    // + "<?php"
    //     + "$dem = 0; }} ?>";
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


function updateAllExam() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("item-workspace").innerHTML = this.responseText;
        }
    };        
    xhttp.open("GET", "allExams.php", true);
    xhttp.send();
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
    thead = document.createElement('thead');
                            
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

// ALLEXAM();
// updateAllExam();
document.querySelector('#allexam-btn').onclick = function() {
    currentState = 'All exam';
    // ALLEXAM();
    updateAllExam();
    // $("div").load('allExams.php');
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

/*
document.querySelector('#add-button').onclick = function() {
    const createExamForm = document.createElement('form');
    const part1 = document.createElement('div');

    const testNameLabel = document.createElement('label');
    testNameLabel.setAttribute('clas', 'form-label')
    testNameLabel.innerText = 'Test name (ex: Demo Test)';
    
    const testNameInput = document.createElement('input');
    testNameInput.setAttribute('type', 'text');
    testNameInput.required = true;
    testNameInput.setAttribute('id', 'test-name');
    testNameInput.setAttribute('class', 'form-control');

    part1.appendChild(testNameLabel);
    part1.appendChild(testNameInput);

    createExamForm.appendChild(part1);
    
    
    const part2 = document.createElement('div');
    const passwordLabel = document.createElement('label');
    passwordLabel.innerText = 'Choose a password';
    passwordLabel.setAttribute('class', 'form-label');
    
    const passwordInput = document.createElement('input');
    passwordInput.setAttribute('type', 'password');
    passwordInput.required = true;
    passwordInput.setAttribute('id', 'test-password');
    passwordInput.setAttribute('class', 'form-control');
    part2.appendChild(passwordLabel);
    part2.appendChild(passwordInput);

    createExamForm.appendChild(part2);

    const part3 = document.createElement('div');
    const confirmPasswordLabel = document.createElement('label');
    confirmPasswordLabel.innerText = 'Retype your password';
    confirmPasswordLabel.setAttribute('class', 'form-label');

    const confirmPasswordInput = document.createElement('input');
    confirmPasswordInput.setAttribute('type', 'password');
    confirmPasswordInput.required = true;
    confirmPasswordInput.setAttribute('id', 'confirm-test-password');
    confirmPasswordInput.setAttribute('class', 'form-control');
    part3.appendChild(confirmPasswordLabel);
    part3.appendChild(confirmPasswordInput);

    createExamForm.appendChild(part3);

    const submitButton = document.createElement('button');
    submitButton.setAttribute('type', 'submit');
    submitButton.innerText = 'Create Test';
    submitButton.setAttribute('class', 'btn control-btn');
    submitButton.setAttribute('style', 'margin-top: 2%');

    createExamForm.appendChild(submitButton);

    document.body.appendChild(createExamForm);
    createExamForm.setAttribute('z-index', '1000000000');
    createExamForm.setAttribute('style', `
    background: #25408f;
    color: #F7F7F7; 
    border-radius: 6px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 1% 1% 1%;
    text-align: center`);
} 

*/