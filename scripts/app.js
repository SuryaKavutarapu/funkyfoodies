//instagram
var feed = new Instafeed({
   get: 'user',
   userId: 786131894,
   accessToken: '786131894.1677ed0.b7c892bddaab42b392ed889d98c2bb56',
   target: 'instagram',
   resolution: 'thumbnail',
   limit : '12',
   after: function() {
     var el = document.getElementById('instagram');
     if (el.classList)
       el.classList.add('show');
     else
       el.className += ' ' + 'show';
   }
});

$(document).ready(function(){
          // to run intagram api
         	feed.run();
           //nav bar for mobile
             $("nav").on("click",function(){
                  $("nav .wrapper ul").toggleClass("is-showing");
              });
});