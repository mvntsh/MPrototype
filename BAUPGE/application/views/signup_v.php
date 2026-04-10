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
                        <div class="card" style="border-radius: 0px; background-color: #bd8a8a; box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset; margin-top: 5em;">
                            <div class="card-body">
                                <form id="signupForm">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="idFirstname" placeholder="1">
                                        <label for="floatingInput"><i class="fa-solid fa-1" style="color: rgb(156, 12, 12);"></i>First Name.</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="idLastname" placeholder="2">
                                        <label for="floatingInput"><i class="fa-solid fa-2" style="color: rgb(156, 12, 12);"></i>Last Name.</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="idIDNumber" placeholder="3">
                                        <label for="floatingInput"><i class="fa-solid fa-3" style="color: rgb(156, 12, 12);"></i>ID Number.</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="idPassword" placeholder="4">
                                        <label for="floatingInput"><i class="fa-solid fa-4" style="color: rgb(156, 12, 12);"></i>Password.</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="idConfirmPassword" placeholder="5">
                                        <label for="floatingInput"><i class="fa-solid fa-5" style="color: rgb(156, 12, 12);"></i>Confirm Password.</label>
                                    </div>
                                </form>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p style="font-size: 12pt; margin-top: 1em;">You have an account? <a href="#" style="color: #870101; font-weight: bolder;">Log in here.</a></p>
                                    </div>
                                    <div class="col-md-4 d-grid">
                                        <button type="submit" class="btn btn-danger btn-lg btn-block" style="text-transform: uppercase; letter-spacing: -1px;">Save Data.</button>
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
                console.log("Hello World.");
            });
        </script>