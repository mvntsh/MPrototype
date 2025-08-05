    
    <div class="row" style="margin-top: 1em;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card" style="background-color: #4eb562;">
                <div class="card-body">
                    <div class="row" style="margin-bottom: .5em;">
                        <div class="col-md-9">
                            <h3 style="font-weight: bolder; text-transform: uppercase; font-size: 25pt; color: #e0fcd9;"><?php echo $title ?></h3>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control form-control-lg" placeholder="Search . . .">
                            <input type="text" name="txtnmRequestno" id="inputnmRequestno" hidden>
                        </div>
                    </div>
                    <div class="card" style="overflow-y: scroll; height: 500px; scrollbar-width: thin; scrollbar-color: #27990b #b8d9b0; border-radius:0px;">
                        <table class="table table-hover table-warning table-striped" id="tblRequest" style="zoom: 80%;">
                            <thead>
                                <tr style="text-align: center; vertical-align: middle;">
                                    <th style="background-color: #046b12; color: #e0fcd9; width: 10%;">Request ID</th>
                                    <th style="background-color: #046b12; color: #e0fcd9; width: 20%;">Account Name</th>
                                    <th style="background-color: #046b12; color: #e0fcd9; width: 15%;">Amount</th>
                                    <th style="background-color: #046b12; color: #e0fcd9;">Description</th>
                                    <th style="background-color: #046b12; color: #e0fcd9; width: 10%;">Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            viewRequest_v();
            function viewRequest_v(){
                $.ajax({
                    url:"Delete/viewRequest_c",
                    type:"POST",
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(x){
                                tbody += `
                                    <tr style="vertical-align: middle;">
                                        <td style="text-align: center;">${x.request_id}</td>
                                        <td>${x.accountname}</td>
                                        <td style="text-align: right;">${x.amount}</td>
                                        <td>${x.description}</td>
                                        <td style="text-align: center;">
                                            <button data-requestno="${x.request_no}" class="btn btn-danger" id="btnRemove" style="border-radius: 0px;">Remove</button>
                                        </td>
                                    </tr>
                                `;
                            })
                            $("#tblRequest tbody").html(tbody);
                        }
                    }
                })
            }

            $(document).on("click","#btnRemove",function(e){
                e.preventDefault();
                $("#inputnmRequestno").val($(this).data("requestno"));

                if(confirm('Are you sure you want to delete this request?')){
                    $.ajax({
                        url:"Delete/removeData_c",
                        type:"POST",
                        data:$("#inputnmRequestno").serialize(),
                        dataType:"json",
                        success:function(response){
                            countRequest_v();
                            alert("Successfully deleted.");
                            viewRequest_v();
                        }
                    })
                }
            })

            function countRequest_v(){
                $.ajax({
                    url:"Update/countRequest_c",
                    type:"POST",
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            var count = response.data[0].countRequest;
                            $("#requestBadge").text(count > 99 ? "99+" : count); // Display 99+ if count exceeds 99
                        } else {
                            $("#requestBadge").text("0"); // Default to 0 if no data found
                        }
                    }
                })
            }
        })
    </script>