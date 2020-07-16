$( document ).ready(function() {
  new WOW().init();
});
(function () {
    let submit = document.getElementById('success');
    let submit1 = document.getElementById('success1');
   
    function mailUp() {
      let upmail = document.getElementById('searchBar').value;
      Email.send({
        SecureToken: "1d7bce67-f036-4658-83f4-ab678d510233",
        To: upmail,
        From: "calmdownapplication@gmail.com",
        Subject: "Subcribe Sucessful",
        Body: "Thank you for your subcribtion to our newsletter, we at calmdown application are happy to welcome to experience futuristic app right here in the present"
      }).then(
        message => alert(`Sucessful: ${message}`)
      )
    }

    function maildown(){
     let downMail = document.getElementById('dEmail').value;
      Email.send({
        SecureToken: "1d7bce67-f036-4658-83f4-ab678d510233",
        To: downMail,
        From: "calmdownapplication@gmail.com",
        Subject: "Subcribe Sucessful",
        Body: "Thank you for your subcribtion to our newsletter, we at calmdown application are happy to welcome to experience futuristic app right here in the present"
      }).then(
        message => alert(`Sucessful: ${message}`)
      )
    }
    
    submit.addEventListener('click', maildown);
    submit1.addEventListener('click', mailUp)

  })();
