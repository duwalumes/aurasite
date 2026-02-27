// DARK MODE
function toggleDark(){
  document.body.classList.toggle("dark");
}

// COUNTDOWN
const eventDate = new Date("2026-06-01 09:00:00").getTime();
setInterval(function(){
  const now = new Date().getTime();
  const distance = eventDate - now;

  const d = Math.floor(distance/(1000*60*60*24));
  const h = Math.floor((distance%(1000*60*60*24))/(1000*60*60));
  const m = Math.floor((distance%(1000*60*60))/(1000*60));
  const s = Math.floor((distance%(1000*60))/1000);

  document.getElementById("countdown").innerHTML =
  d+"d "+h+"h "+m+"m "+s+"s ";
},1000);

// COUNTERS
const counters = document.querySelectorAll('.counter');
counters.forEach(counter=>{
  const update=()=>{
    const target=+counter.getAttribute('data-target');
    const c=+counter.innerText;
    const inc=target/200;
    if(c<target){
      counter.innerText=Math.ceil(c+inc);
      setTimeout(update,10);
    } else {
      counter.innerText=target;
    }
  };
  update();
});