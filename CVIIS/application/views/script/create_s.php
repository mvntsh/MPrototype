    <script type="text/javascript">
        $(document).ready(function() {
            $("#btnCreate").click(function() {
                insert_v();
            });

            function insert_v(){
                $.ajax({
                    url: "Create/insert_c",
                    type: "POST",
                    data: $("#createForm").serialize(),
                    dataType: "json",
                    success: function(response) {
                        if (response.success) {
                            alert("User created successfully");
                            location.reload();
                        } else {
                            alert("Failed to create user");
                        }
                    }
                });
            }
        });
    </script>