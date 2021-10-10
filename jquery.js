
//   $(window).scroll(function () {
//     var top = $(window).scrollTop();
//     alert(top);
//   });

// $(function() {
    
//     $('.key').keydown(function(){
        
//     });
// })
////////////////////////////////////////////
///var btn=document.getElementById("btn");

// $("#btn").click((e)=>{
//     e.preventDefault();
//     let dados = {
//       username: $("username").val(),
//       password: $("#password").val(),
//     }
//     $.get("lista.php",dados,function(res,sta) {
//         console.log(sta);
//         console.log(res);
//     });
// });

// console.log("s");
var div=document.createElement("div");
div.id="main";

var p=document.createElement("p");
p.innerHTML="ola meu";


//div.innerHTML = p.textContent;

document.body.appendChild(div);

var div_add=document.getElementById("main");
div_add.appendChild(p);

window.parent.appendChild(div);