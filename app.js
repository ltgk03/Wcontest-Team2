const express = require('express');
const app = express();

const port = 3000;
 var isAdmin = false;

//Static Files

app.use(express.static('public'));
app.use('/css', express.static(__dirname + 'public/css'));
app.use('/js', express.static(__dirname + 'public/js'));
app.use('img', express.static(__dirname + 'public/img'));


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
    
app.get('/login', (req, res) => {
    res.render('adminLogin');
});


app.listen(port, () => console.info(`Listening on port: ${port}`));

