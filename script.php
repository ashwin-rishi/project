<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script type="text/javascript">
  function submitData(action){
    $(document).ready(function(){

      if(action == 'register'){
        if(name() && name1() && name2() && age() && phoneNumber() && address() && postal() && chkbox()){
          var data = {
          action: action,
          firstName: $("#firstName").val(),
          secondName: $("#secondName").val(),
          parentName: $("#parentName").val(),
          age: $("#age").val(),
          reason: $("#reason").val(),
          phoneNumber: $("#phoneNumber").val(),
          address: $("#address").val(),
          postalCode: $("#postalCode").val(),
          termsCondition: $("#termsCondition").is(":checked"),
          
        };
        ajax(data,'index.html');
        } 
      }
      if(action == 'registerEdit'){
        // if(phoneNumber()){
          var data = {
          action: action,
          id:$("#id").val(),
          firstName: $("#firstName").val(),
          secondName: $("#secondName").val(),
          parentName: $("#parentName").val(),
          age: $("#age").val(),
          reason: $("#reason").val(),
          phoneNumber: $("#phoneNumber").val(),
          address: $("#address").val(),
          postalCode: $("#postalCode").val(),
          termsCondition: $("#termsCondition").is(":checked"),
        };
        
        // } 
        ajax(data,'registeredUsersList.php');

      }
      
      if(action == 'donateEdit'){
        // if(phoneNumber()){
          var data = {
          id:$("#id").val(),
          action: action,
          donarName: $("#donarName").val(),
          gender: $("#gender").val(),
          designation: $("#designation").val(),
          contactNumber: $("#contactNumber").val(),
          email: $("#email").val(),
          termsCondition: $("#termsCondition").is(":checked"),
          type: $('input[name="type"]:checked').val(),

        };
        
        // } 
        ajax(data,"donatedUsersList.php");

      }
      if(action == 'donate'){
        if(email() && Dname() && Dname1() && gender() && contactNumber()  && chkbox() && type()){
          var data = {
          action: action,
          donarName: $("#donarName").val(),
          gender: $("#gender").val(),
          designation: $("#designation").val(),
          contactNumber: $("#contactNumber").val(),
          email: $("#email").val(),
          termsCondition: $("#termsCondition").is(":checked"),
          type: $('input[name="type"]:checked').val(),
        };
        ajax(data,'index.html');
        }
      }
  console.log(data)
    });
  }
function deleteData(action,id){
  if(action == "registerDelete" ){
    var data = {
    action:action,
    id:id
  };
  ajax(data,'registeredUsersList.php');
  }
  if(action == "donateDelete"){
    var data = {
    action:action,
    id:id
  };
  ajax(data,"donatedUsersList.php");
  }
  
}
  function ajax(data,redirect){
    $.ajax({
            url: 'function.php',
            type: 'post',
            data: data,
            success:function(response){
              alert(response);
              window.location = '/project/'+redirect;
              if(response == "Deleted Successfully"){
                $("#"+action).css("display", "none");
              }
            }
          });

  }
</script>
<script>
function type() {
 
 let name = $('input[name="type"]:checked').val();

 if(name == "" || name == undefined)
 { $('#err9').show();
   $('#err9').html("This field is Required ");
   $('#err9').focus();
   $('#err9').css("color","red");       
   return false;
 }     
 else
 {
     $('#err9').hide();
     return true;
 }
}


   function gender() {
 
 let name = $("#gender").val();

 if(name == "" || name == undefined)
 { $('#err4').show();
   $('#err4').html("This field is Required ");
   $('#err4').focus();
   $('#err4').css("color","red");       
   return false;
 }     
 else
 {
     $('#err4').hide();
     return true;
 }
}
  
  function name() {
 
    let name = $("#firstName").val();

    if(name == "" || name == undefined)
    { $('#err1').show();
      $('#err1').html("This field is Required ");
      $('#err1').focus();
      $('#err1').css("color","red");       
      return false;
    }     
    else
    {
        $('#err1').hide();
        return true;
    }
}
function Dname() {
 
 let name = $("#donarName").val();

 if(name == "" || name == undefined)
 { $('#err1').show();
   $('#err1').html("This field is Required ");
   $('#err1').focus();
   $('#err1').css("color","red");       
   return false;
 }     
 else
 {
     $('#err1').hide();
     return true;
 }
}
function Dname1() {
 
 let name = $("#designation").val();

 if(name == "" || name == undefined)
 { $('#err2').show();
   $('#err2').html("This field is Required ");
   $('#err2').focus();
   $('#err2').css("color","red");       
   return false;
 }     
 else
 {
     $('#err2').hide();
     return true;
 }
}
function name1() {
 
 let name = $("#secondName").val();

 if(name == "" || name == undefined)
 { $('#err2').show();
   $('#err2').html("This field is Required ");
   $('#err2').focus();
   $('#err2').css("color","red");       
   return false;
 }     
 else
 {
     $('#err2').hide();
     return true;
 }
}
function name2() {
 
 let name = $("#parentName").val();

 if(name == "" || name == undefined)
 { $('#err3').show();
   $('#err3').html("This field is Required ");
   $('#err3').focus();
   $('#err3').css("color","red");       
   return false;
 }     
 else
 {
     $('#err3').hide();
     return true;
 }
}
function age() {
 
 let name = $("#age").val();

 if(name == "" || name == undefined)
 { $('#err4').show();
   $('#err4').html("This field is Required ");
   $('#err4').focus();
   $('#err4').css("color","red");       
   return false;
 }     
 else
 {
     $('#err4').hide();
     return true;
 }
}
function email(){ 
  let email = $("#email").val();
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  
  if( email== null || email == '' || email == 'undefined')
  {
      $('#err5').show();
      $('#err5').html("pls enter email");
      $('#err5').focus();
      $('#err5').css("color","red");
      return false;
  }
 
  else{
    if($("#email").val().match(mailformat))
      {
        $('#err5').hide();
          return true;
      }
      else{
        $('#err5').show();
        $('#err5').html("pls enter valid email");
        $('#err5').focus();
        $('#err5').css("color","red");
        return false;
      }
      
  }
}
function phoneNumber(){
  let phoneNumber = $("#phoneNumber").val();
  if(phoneNumber == null || phoneNumber == '' || phoneNumber == 'undefined')
  {
      $('#err5').show();
      $('#err5').html("This field is Required ");
      $('#err5').focus();
      $('#err5').css("color","red");
      return false;
  }
 
  else{
      $('#err5').hide();
      return true;
  }
}
function address(){
  let phoneNumber = $("#address").val();
  if(phoneNumber == null || phoneNumber == '' || phoneNumber == 'undefined')
  {
      $('#err6').show();
      $('#err6').html("This field is Required ");
      $('#err6').focus();
      $('#err6').css("color","red");
      return false;
  }
 
  else{
      $('#err6').hide();
      return true;
  }
}
function postal(){
  let phoneNumber = $("#postalCode").val();
  if(phoneNumber == null || phoneNumber == '' || phoneNumber == 'undefined')
  {
      $('#err7').show();
      $('#err7').html("This field is Required ");
      $('#err7').focus();
      $('#err7').css("color","red");
      return false;
  }
 
  else{
      $('#err7').hide();
      return true;
  }
}
function chkbox(){
  let no = $("#termsCondition").is(":checked");

  if(no == false) 
  {
      $('#err8').show();
      $('#err8').html("pls check the checkbox");
      $('#err8').focus();
      $('#err8').css("color","red");
      return false;
  }
 
  else{
      $('#err8').hide();
      return true;
  }
}
function contactNumber(){
  let contactNumber = $("#contactNumber").val();
  if(contactNumber == null || contactNumber == '' || contactNumber == 'undefined')
  {
      $('#err3').show();
      $('#err3').html("This field is Required ");
      $('#err3').focus();
      $('#err3').css("color","red");
      return false;
  }
 
  else{
      $('#err3').hide();
      return true;
  }
}
function password(){
  let password = $("#password").val();
  if(password == null || password == '' || password == 'undefined')
  {
      $('#err4').show();
      $('#err4').html("pls fill the password");
      $('#err4').focus();
      $('#err4').css("color","red");
      return false;
  }
 
  else{
      $('#err4').hide();
      return true;
  }
}
</script>
