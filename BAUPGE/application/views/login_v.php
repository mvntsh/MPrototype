    <div class="row" style="margin: .3em; cursor: default;">
        <div class="col-md-12">
            <!-- <div class="card" style="position: block; background-image: url('../logo/Diamante.png'); background-size: cover; background-position: center; width: 100%; height: 130%; border-color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;"> -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card" style="position: block; background-color: rgb(250, 255, 255, 0.6); margin-top: 14.5em; box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;">
                            <div class="card-body">
                                <h3 class="card-title" style="letter-spacing: -3px;"><strong style="color: red;">B</strong>atch <strong style="color: red;">U</strong>pload <strong style="color: red;">G</strong>enerator.<strong style="color: red;">sys</strong>.ml</h3>
                                <p class="card-text">Please enter your credentials to <strong style="color: red; font-style: italic;">log in</strong>.</p>
                                <div class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true" id="liveToast">
                                    <div class="d-flex">
                                        <div class="toast-body" id="toastMessage">
                                        Hello, world! This is a toast message.
                                        </div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                                <form id="loginForm" style="padding-top: 3em;">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="nmIdno" class="form-control" id="idIDNumber" placeholder="1" style="background-color: #fce9c7; border-color: transparent;">
                                        <label for="idIDNumber" style="letter-spacing: -2px;"><i class="fa-solid fa-1" style="color: rgb(156, 12, 12);"></i>ID Number.</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" name="nmPassword" class="form-control" id="idPassword" placeholder="2" style="background-color: #fce9c7; border-color: transparent;">
                                        <label for="idPassword" style="letter-spacing: -2px;"><i class="fa-solid fa-2" style="color: rgb(156, 12, 12);"></i>Password.</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <span>Don't have an account? </span><a href="Signupform" style="color: #870101; font-weight: bolder;">Sign up here.</a>
                                        </div>
                                        <div class="col-md-4 d-grid">
                                            <button id="btnLogin" class="btn btn-danger" style="letter-spacing: -1px; text-transform: uppercase; border-radius: 0px;"><i class="fa-solid fa-arrow-right-from-bracket fa-beat" style="color: rgb(255, 212, 59);"></i> Proceed.</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#idIDNumber").focus();
            $("#btnLogin").click(function(e){
                e.preventDefault();
                loginValidation_c();
            })

            function loginValidation_c(){
                $.ajax({
                    url:"loginform/loginValidation_c",
                    method:"post",
                    data:$("#loginForm").serialize(),
                    dataType:"JSON",
                    success:function(data){
                        if(data.success == true) {
                            $("#liveToast").removeClass("text-bg-danger");
                            logIn_c();
                        }else{
                            $("#toastMessage").text("Invalid credentials. Please try again.");
                            $('#liveToast').toast('show');
                            $("#liveToast").addClass("text-bg-danger");
                        }
                    }
                });
            }

            function logIn_c(){
                $.ajax({
                    url:"loginform/logIn_c",
                    method:"post",
                    data:$("#loginForm").serialize(),
                    dataType:"json",
                    success:function(response){
                        if(response.success) {
                            $("#liveToast").addClass("text-bg-success");
                            $("#toastMessage").text("Login successfully.");
                            $('#liveToast').toast('show');
                            window.location.href = "Dashboard";
                        }else{
                            $("#toastMessage").text("Invalid credentials. Please try again.");
                            $('#liveToast').toast('show');
                        }
                    }
                });
            }
        });
    </script>