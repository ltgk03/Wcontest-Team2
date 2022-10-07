const fs = require('fs');

fs.readFile('./assets/alo.txt', 'utf-8', (err,data) => {
    console.log(data)
})

let string = "Hello World";
fs.writeFile('./assets/output.txt', string, 'utf-8', (err) => {
    console.log('Ghi file thanh cong')
})