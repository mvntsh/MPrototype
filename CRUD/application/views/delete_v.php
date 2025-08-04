    <div class="row" style="margin-top: 1em;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card">
                <table class="table table-hover" id="tblRequest">
                    <thead>
                        <tr style="text-align: center; vertical-align: middle;">
                            <th>Request ID</th>
                            <th>Account Name</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            function viewRequest_v(){
                $.ajax({
                    url:"",
                    type:"",
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(x){
                                tbody += `
                                    <tr style="vertical-align: middle;">
                                        <td style="text-align: center;">123456</td>
                                        <td>Marvin B. Batitay</td>
                                        <td style="text-align: right;">1,000.00</td>
                                        <td style="text-align: center;">
                                            <button class="btn btn-danger">Remove</button>
                                        </td>
                                    </tr>
                                `;
                            })
                            $("#tblRequest tbody").html(tbody);
                        }
                    }
                })
            }
        })
    </script>