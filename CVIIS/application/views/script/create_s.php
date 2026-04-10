    
    <script type="text/javascript">
        $(document).ready(function() {
            $("#btnCreate").click(function() {
                validate_idno_v();
            });

            function validate_idno_v(){
                $.ajax({
                    url:"Create/validate_idno_c",
                    type:"POST",
                    data:$("#createForm").serialize(),
                    dataType:"json",
                    success:function(response){
                        if(response.exists){
                            // alert("ID No. already exists.");
                            $("#toastMessage").text("ID No. already exists.");
                        }else{
                            insert_validation_v();
                        }
                    }
                })
            }

            function insert_validation_v(){
                $.ajax({
                    url:"Create/insert_validation_c",
                    type:"POST",
                    data:$("#createForm").serialize(),
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            insert_v();
                        }else{
                            $("#toastMessage").text("Please input all required fields correctly.");
                            // alert("Please input all required fields correctly.");
                        }
                    }
                })
            }

            function insert_v(){
                $.ajax({
                    url: "Create/insert_c",
                    type: "POST",
                    data: $("#createForm").serialize(),
                    dataType: "json",
                    success: function(response) {
                        if (response.success) {
                            $("#createForm")[0].reset();
                        } else {
                            alert("Failed to create user");
                        }
                    },error:function(response){
                        alert("Error line 21");
                    }
                });
            }

            $("#btnLogin").click(function(e) {
                e.preventDefault();
                authenticate_v();
            });

            function authenticate_v(){
                $.ajax({
                    url:"Create/authenticate_c",
                    type:"POST",
                    data:$("#loginForm").serialize(),
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            $("#toastMessage").text("Login Successfully.");
                        }else{
                            $("#liveToast").css("background-color", "#ed1a1a");
                            $("#liveToast").css("color", "#edd41a");
                            $("#toastMessage").text("Invalid Username or Password.");
                        }
                    },error:function(response){
                        alert("Error line 87");
                    }
                })
            }

            const toastCreate = document.getElementById('btnCreate')
            const toastMessageCreate = document.getElementById('liveToast')

            if (toastCreate) {
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastMessageCreate)
                toastCreate.addEventListener('click', () => {
                    toastBootstrap.show()
                })
            }

            const toastLogin = document.getElementById('btnLogin')
            const toastMessageLogin = document.getElementById('liveToast')

            if (toastLogin) {
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastMessageLogin)
                toastLogin.addEventListener('click', () => {
                    toastBootstrap.show()
                })
            }
        });
    </script>