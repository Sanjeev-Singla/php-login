$(document).ready(function(){
	$('#addMoreDiv').hide();
	$("#addmoreservice").click(function(){
		$("#addservice").append("<div class='row'><div class='col-md-11'><input type='text' class='form-control' placeholder='Enter Service' name='service[]'></div></div>");
	});
	$("#removeservice").click(function(){
		$("#removediv").remove();
	});

	$("input[name='name']").blur(function(){
		var name = $(this).val();
		var regname = /^[a-zA-Z ]*$/;
		if (name=="") {
			$("#nameError").text("This field is required");
		}else if(!regname.test(name)){
			$("#nameError").text("Only alpha character are allowed");
		}else if(name.length < 3){
			$("#nameError").text("Name must be greater than 3 characters");
		}else{
			$("#nameError").text(" ");
		}
	});

	$("input[name='email']").blur(function(){
		var email = $(this).val();
		var regemail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
		if (email=="") {
			$("#emailError").text("This field is required");
		}else if(!regemail.test(email)){
			$("#emailError").text("Please Enter valid Email");
		}else{
			$("#emailError").text(" ");
		}
	});

	$("input[name='phone']").blur(function(){
		var phone = $(this).val();
		var regphone = /^[0-9]*$/;
		if (phone=="") {
			$("#phoneError").text("This field is required");
		}else if(!regphone.test(phone)){
			$("#phoneError").text("Only Numerics are allowed");
		}else if((phone.length < 10) || (phone.length > 10)){
			$("#phoneError").text("Phone number length must be 10")
		}else{
			$("#phoneError").text(" ");
		}
	});

	$("input[name='service[]']").blur(function(){
		var service = $(this).val();
		if (service=="") {
			$("#serviceError").text("This field is required");
		}else if(service.length < 3){
			$("#serviceError").text("service number length must be greater 3")
		}else{
			$("#serviceError").text(" ");
		}
	});

    $('#example').DataTable();

    $("input[name='username']").blur(function(){
		var username = $(this).val();
		if (username=="") {
			$("#usernameError").text("This field is required");
		}else{
			$("#usernameError").text(" ");
		}
	});

	$("input[name='password']").blur(function(){
		var password = $(this).val();
		if (password=="") {
			$("#passwordError").text("This field is required");
		}else{
			$("#passwordError").text(" ");
		}
	});
});