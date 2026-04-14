        <style tyle="text/css">
            @media screen{
                .form-control{
                    border-color: #f78981;
                }
            }
        </style>
        <div class="row" id="screenArea" style="margin: .3em; cursor: default;">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card" style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px; background-color: #f78981;">
                    <div class="card-body">
                        <h1 class="card-title" style="color: #590c0c; letter-spacing: -4px; text-transform: uppercase;">Sign Up</h1>
                        <p class="card-text" style="color: #590c0c">Please fill in the form below to create an account.</p>
                        <div class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true" id="liveToast">
                            <div class="d-flex">
                                <div class="toast-body" id="toastMessage">
                                Hello, world! This is a toast message.
                                </div>
                                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="card" style="border-radius: 0px; background-color: #bd8a8a; box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset; margin-top: 5em;">
                            <div class="card-body">
                                <form id="signupForm">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="nmFirstname" class="form-control" id="idFirstname" placeholder="1">
                                        <label for="idFirstname" style="letter-spacing: -2px;"><i class="fa-solid fa-1" style="color: rgb(156, 12, 12);"></i>First Name.</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="nmLastname" class="form-control" id="idLastname" placeholder="2">
                                        <label for="idLastname" style="letter-spacing: -2px;"><i class="fa-solid fa-2" style="color: rgb(156, 12, 12);"></i>Last Name.</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="nmIdno" class="form-control" id="idIDNumber" placeholder="3">
                                        <label for="idIDNumber" style="letter-spacing: -2px;"><i class="fa-solid fa-3" style="color: rgb(156, 12, 12);"></i>ID Number.</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" name="nmPassword" class="form-control" id="idPassword" placeholder="4">
                                        <label for="idPassword"><i class="fa-solid fa-4" style="color: rgb(156, 12, 12);"></i>Password.</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" name="nmConfirmPassword" class="form-control" id="idConfirmPassword" placeholder="5">
                                        <label for="idConfirmPassword" style="letter-spacing: -2px;"><i class="fa-solid fa-5" style="color: rgb(156, 12, 12);"></i>Confirm Password.</label>
                                    </div>
                                    <input type="text" id="idStatus" name="nmStatus" value="1" placeholder="6" hidden>
                                </form>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p style="font-size: 12pt; margin-top: 1em;">You have an account? <a href="Loginform" style="color: #870101; font-weight: bolder;">Log in here.</a></p>
                                    </div>
                                    <div class="col-md-4 d-grid">
                                        <button id="btnSave" class="btn btn-danger" style="text-transform: uppercase; letter-spacing: -1px;">Save Data.</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#idFirstname").focus();

                $('#idIDNumber').keypress(function(e){    
        
                    var charCode = (e.which) ? e.which : event.keyCode    
                    if (String.fromCharCode(charCode).match(/[^0-9]/g))
                    return false;                        

                });

                $("#btnSave").click(function(e){
                    e.preventDefault();
                    validateUsers_v();
                })
                
                function validateUsers_v(){
                    $.ajax({
                        url:"signupform/validateUsers_c",
                        type:"post",
                        data:$("#signupForm").serialize(),
                        dataType:"json",
                        success:function(response){
                            if(response.success){
                                $("#liveToast").removeClass("text-bg-danger");
                                saveUsers_v();
                            }else{
                                $("#toastMessage").text("Validation failed. Please check your inputs.");
						        $('#liveToast').toast('show');
                                $("#liveToast").addClass("text-bg-danger");
                            }
                        }
                    })
                }

                function saveUsers_v(){
                    $.ajax({
                        type:"post",
                        url:"signupform/saveUsers_c",
                        data:$("#signupForm").serialize(),
                        dataType:"json",
                        success:function(response){
                            if(response.success){
                                $("#liveToast").addClass("text-bg-success");
                                $("#toastMessage").text("Data saved successfully.");
						        $('#liveToast').toast('show');
                                $("#signupForm")[0].reset();
                            }else{
                                console.log("Failed to save data.");
                            }
                        }
                    })
                }
            });
        </script>