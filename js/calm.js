$( document ).ready(function() {
  new WOW().init();
});

  (function () {
    let form = document.getElementById('subcribeNow');
    let condition = document.getElementById('condition');
    let submit = document.getElementById('submitBtn');
    let email = document.getElementById('email');
    function success(){
      debugger
      let user = 1;
      function replacer() {

    condition.classList.replace('d-none', 'd-block');
        form.classList.replace('d-block','d-none');

        setTimeout(() => {
    condition.classList.replace('d-block', 'd-none');
          condition.classList.replace('d-none', 'd-block');
        }, 3000);

      }
      let raw = {
    "title": "Subcribtion for CalmDown newsletter Successful",
        "body": "We say big thank from member of CalmDown App Team and  welcome to the world of futuristic App right in the present",
        "user_unique_id": {user}
    }
      let domain = "https://notification.micoapi.dev"
        let requestOptions = {
    method: 'POST',
          body: JSON.stringify(raw),
          redirect: 'follow'
        };
          fetch("{{ domain }}/api/notification/new", requestOptions)
          .then(response => response.text())
          .then(result => alert('A Confirmation mail has been sent to your mail. thanks.'))
          .catch(error => console.log('error', error));

          user++;
          console.log('done');
      }
    submit.addEventListener('click', success);

  })();
