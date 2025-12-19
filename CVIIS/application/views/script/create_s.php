    
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
                            $("#liveToast").css("background-color", "#edd41a");
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
                            $("#liveToast").css("background-color", "#ed1a1a");
                            $("#liveToast").css("color", "#edd41a");
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
                            $("#liveToast").css("background-color", "#0e9e0e");
                            $("#toastMessage").text("User created successfully.");
                            $("#createForm")[0].reset();
                        } else {
                            alert("Failed to create user");
                        }
                    },error:function(response){
                        alert("Error line 21");
                    }
                });
            }

            const toastTrigger = document.getElementById('btnCreate')
            const toastLiveExample = document.getElementById('liveToast')

            if (toastTrigger) {
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
            toastTrigger.addEventListener('click', () => {
                toastBootstrap.show()
            })
            }
        });
    </script>