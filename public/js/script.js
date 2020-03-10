let button=document.getElementById('btn_check');
let login=document.getElementById('login');

button.onclick=function (e) {
    $.ajax({
          type: "GET",
          url: "check.php?login="+login.value,
          data: login.value,
          datatype: "text",
          beforeSend: function (xh) {
              xh.setRequestHeader("Ajax-reguest","true");

          },
          success:function (response) {
              if(parseInt(response)) login.style.background="red";else login.style.background="green";
          },
          error: function (e) {
              console.log("errors");
          }
        }

    );
}