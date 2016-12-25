var express = require('express');
var app = express();
var nodemailer = require('nodemailer');
var bodyParser = require('body-parser');
app.set('port', (process.env.PORT || 8080));
var cors = require('cors'); 
app.use(cors());
app.use(bodyParser.urlencoded({ extended: false }))
 
// parse application/json 
app.use(bodyParser.json())

app.post('/', function(request, response) {
    var origin = request.get('origin');
    console.log(request.body);
    console.log(origin);
    if(origin=="http://tedx.msit.in/register.php" || origin=="https://tedx.msit.in/register.php" || origin == "tedx.msit.in/register.php") {
    // create reusable transporter object using the default SMTP transport 
    var transporter = nodemailer.createTransport('smtps://id:password@smtp.gmail.com');
     
    // setup e-mail data with unicode symbols 
    var mailOptions = {
        from: '"'+request.body.username+'" <'+request.body.email+'>',// sender address 
        to: 'tedxmsit@gmail.com', // list of receivers 
        text: "There is a new response in the registration form. Go check it out at http://tedx.msit.in/responses.php", // plaintext body  
        subject: 'New response in registration form : ✔' // Subject line 
    };
    //TODO : decide later whether to include answers submitted by users in the mail itself or not.
    // send mail with defined transport object 
    transporter.sendMail(mailOptions, function(error, info){
        if(error){
            return console.log(error);
        }
        console.log('Message sent: ' + info.response);
    });

    response.json({'success': 1});
    }
    else {
        response.json({'success' : 0, 'reason': 'Invalid Origin'});
    }
});

app.listen(app.get('port'), function() {
  console.log('Node app is running on port', app.get('port'));
});


