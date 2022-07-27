const express = require('express')
const nodemailer = require('nodemailer')
const app = express()

const port = 3000

const user = "victoraugusto9918@gmail.com"
const pass = "@0206Vict"

app.get('/', (req,res) => res.send('hello world'))

app.get('/send', (req, res) => {

    const transporter = nodemailer.createTransport({
        service: 'gmail',

        auth: {
            user: user,
            pass: pass
        }
    })

    const mailOptions = {
        from: user, // Email usado para fazer a ligação entre cliente e servidor
        to: user, // E-mail receptor
        replyTo: "victorteste@gmail.com", // E-mail do cliente //
        subject: 'Subject of your email', // Objetivo do e-mail
        text: 'obrigado por se cadastrar na nossa plataforma '// Texto do e-mail
      };

      transporter.sendMail(mailOptions, (err, info) => {
        if(err)
          console.log(err)
        else
          console.log(info);
     });
} )

app.listen(port, () => console.log(`running on port ${port}!`) )
