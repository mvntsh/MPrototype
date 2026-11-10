<style type="text/css">
    #loginCard{
        border-radius: 0px;
        margin-top: 100px;
        background-color: rgb(15, 15, 15, 0.8);
        box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
    }

    .form-control{
        height: 3em;
        background-color: #7deffa;
        border-color: #7deffa;
    }

    .form-control:focus{
        background-color: #7deffa;
        border-color: #7deffa;
        box-shadow: none;
        border-radius: 10px;
        font-weight: bolder;
    }

    body{
        background-color: #7deffa;
    }
</style>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card" id="loginCard">
            <div class="card-body">
                <h2 class="card-title text-center" style="color: #7deffa;">Check Inquiry - Login</h2>
                <form id="frmLogin" style="margin-top: 5em;">
                    <div class="form-floating mb-3">
                        <input type="text" name="txtnmUsername" class="form-control" id="inputnmUsername" placeholder="Username" autocomplete="off" required>
                        <label for="inputnmUsername">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="txtnmPassword" class="form-control" id="inputnmPassword" placeholder="Password" autocomplete="off" required>
                        <label for="inputnmPassword">Password</label>
                    </div>
                </form>
                <div class="d-grid" style="margin-top: 1em;">
                    <button class="btn btn-dark" id="btnLogin">Login</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on("click","#btnLogin",function(){
            loginaccount_v();
        });

        function loginaccount_v(){
			$.ajax({
				type:'ajax',
				method:'POST',
				url:'Login/loginaccount_c',
				data:$("#frmLogin").serialize(),
				dataType:'json',
				success:function(response){
					if(response.success){
						location.replace("Inquiry");
                        console.log("Login Successful");
					}else{
                        alert("Invalid Username or Password");
                    }
				}
			})
		}
    });
</script>