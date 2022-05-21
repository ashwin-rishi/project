<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script type="text/javascript">
  function submitData(action){
    $(document).ready(function(){

      if(action == 'register'){
        if(phoneNumber()){
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
        };
        
        // } 
        ajax(data,"donatedUsersList.php");

      }
      if(action == 'donate'){
        if(contactNumber()){
          var data = {
          action: action,
          donarName: $("#donarName").val(),
          gender: $("#gender").val(),
          designation: $("#designation").val(),
          contactNumber: $("#contactNumber").val(),
          email: $("#email").val(),
          termsCondition: $("#termsCondition").is(":checked"),
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
  function name() {
 
    let name = $("#name").val();
    let phoneNumber = $("#phoneNumber").val();

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
function email(){ 
  let email = $("#email").val();
  if( email== null || email == '' || email == 'undefined')
  {
      $('#err2').show();
      $('#err2').html("pls enter email");
      $('#err2').focus();
      $('#err2').css("color","red");
      return false;
  }
 
  else{
      $('#err2').hide();
      return true;
  }
}
function phoneNumber(){
  let phoneNumber = $("#phoneNumber").val();
  if(phoneNumber == null || phoneNumber == '' || phoneNumber == 'undefined')
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
