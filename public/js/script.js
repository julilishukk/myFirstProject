let button=document.getElementById('btn_check');
let login=document.getElementById('login');
let password=document.getElementById('password');
button.onclick=function (e) {
    $.ajax({
          type: "GET",
          url: "check.php?login="+login.value+"password="+password.value,
          data: login.value,
          datatype: "text",
          beforeSend: function (xh) {
              xh.setRequestHeader("Ajax-reguest","true");

          },
          success:function (response) {
              if(parseInt(response)) {}
              else {}
          },
          error: function (e) {
              console.log("errors");
          }
        }

    );
}