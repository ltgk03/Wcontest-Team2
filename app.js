const express = require('express');
const mysql = require('mysql');
const app = express();

const port = 3000;
var isAdmin = false;

//Static Files

app.use(express.static('public'));
app.use('/css', express.static(__dirname + 'public/css'));
app.use('/js', express.static(__dirname + 'public/js'));
app.use('img', express.static(__dirname + 'public/img'));

var con = mysql.createConnection({
    host: "localhost",
    user: "root", // ten user, chac moi nguoi dat la root het
    password: "password", // password tu dien
    database: "wdb" // ten database co the thay doi
  });

// Set Views
app.set('views', './views');
app.set('view engine', 'ejs');

app.get('/', (req, res) => {
    res.render('index');
});

app.get('/admin', (req, res) => {
    if (isAdmin) {res.render('adminUI')}
    else {
        res.send("You don't have permission!");
    }
});

function checkAdmin(acc, pass) { // 0 la ko ton tai acc, 1 la user, 2 la admin
    var sql = "SELECT isAdmin FROM accountadmin WHERE username = \"" + acc + "\" AND password = \"" + pass + "\""; // ten table la accountadmin, ten 2 cot la username va password
    let check = 0;
    con.query(sql, function(err, results) {
        if (err) throw err;
        // console.log(results);
        // console.log(results[0]['isAdmin']);
        if (results[0] == null) check = 0;
        else {
            check = results[0]['isAdmin'] + 1;
        }
        // res.send(results);
      });
    return check;
}
    
app.get('/login', (req, res) => {
    // console.log(window.location.href);
    // console.log(req.url);
    if (req.url.length > 7) {
        let str = req.url;
        let pos = [];
        let n = 0;
        for (let i = 0; i < str.length ; i++) {
            if (str[i] == '=') {
                pos[n] = i;
                n++;
            }
        }
        let admin_acc = "";
        pos[0]++;
        while (pos[0] < str.length && str[pos[0]] != '&') {
            admin_acc = admin_acc + str[pos[0]];
            pos[0]++;
        }
        let admin_pass = "";
        pos[1]++;
        while (pos[1] < str.length) {
            admin_pass = admin_pass + str[pos[1]];
            pos[1]++;
        }
        let check = checkAdmin(admin_acc, admin_pass);
        console.log(admin_acc);
        console.log(admin_pass);
        console.log(check);
        // app.get('/admin');
        // if (check == 2) {
        //     req.url = '/admin';
        // } else if (check == 1) {
        //     req.url = '/admin';
        // } else {
        //     req.url = '/login';
        // }
    } else {
        res.render('adminLogin');
    }
});

app.listen(port, () => console.info(`Listening on port: ${port}`));

