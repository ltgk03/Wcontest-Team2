const express = require('express');
const mysql = require('mysql');

const app = express();

var port = 3000;
var isAdmin = false;

//Static Files

app.use(express.static('public'));
app.use('/css', express.static(__dirname + 'public/css'));
app.use('/js', express.static(__dirname + 'public/js'));
app.use('img', express.static(__dirname + 'public/img'));


// Set Views
app.set('views', './views');
app.set('view engine', 'ejs');

// Connect database

const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'password',
    database: 'my_db'
});


// API
app.get('/', (req, res) => {
    res.render('index');
});

app.get('/admin', (req, res) => {
    if (isAdmin) {
        res.render('adminUI');
    } else {
        res.send("You don't have permission!");
    }
})
    
app.get('/login', (req, res) => {
    const protocol = req.protocol;
    const host = req.hostname;
    const reqUrl = req.originalUrl;
    const url = new URL(`${protocol}://${host}:${port}${reqUrl}`);
    if (Array.from(url.searchParams).length == 0) {
        res.render('adminLogin');
    } else {
        const acc = url.searchParams.get('admin-acc');
        const pass = url.searchParams.get('admin-password');
        const sql = `SELECT * FROM adminAccounts WHERE username='${acc}' AND userpassword='${pass}'`; 
        connection.query(sql, function (err, result) {
            if (err) throw err;
            if (result.length > 0) {
                isAdmin = true;
                res.redirect('/admin');
            } else {
                res.redirect('/login');
            }
        });
    }
});

app.listen(port, () => console.info(`Listening on port: ${port}`));
