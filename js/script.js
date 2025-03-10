var countDownDate = new Date("Feb 30, 2025 17:36:00").getTime();

  var x = setInterval(function() {
    var counter = document.querySelector("#countdown") ;
  var now = new Date().getTime();
  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  counter.innerHTML = days + "يوم " + hours + "ساعه "
  + minutes + "دقيقه " + seconds + "ثانيه ";

  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "لقد وصلت متاخرا";
  }
}, 1000);


 


 