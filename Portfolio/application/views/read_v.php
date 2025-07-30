    <div class="card" style="margin: 2em; zoom: 70%; background-color: #87ad7d;">
        <div class="card-body">
            <div class="row" style="margin-bottom: 2em;">
                <div class="col-md-6">
                    <h1 style="letter-spacing: 2px; font-size: 35pt; font-weight: bolder;"><?php echo $title; ?></h1>
                </div>
                <div class="col-md-3">
                    <select name="" class="form-control" id="" style="height: 2.5em; font-size: 18pt;">
                        <option value="Request">Request</option>
                        <option value="Receive">Receive</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Search..." style="height: 2.5em; font-size: 18pt;">
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <table id="tblRequest" class="table table-striped table-success" style="width:100%;">
                        <thead>
                            <tr style="height: 3.5em; vertical-align: middle; font-size: 18px; text-align: center;">
                                <th style="background-color: #37692b; color: #cce8c5;">Request ID</th>
                                <th style="background-color: #37692b; color: #cce8c5;">Account Name</th>
                                <th style="background-color: #37692b; color: #cce8c5;">Request Date</th>
                                <th style="background-color: #37692b; color: #cce8c5;">Transaction Type</th>
                                <th style="background-color: #37692b; color: #cce8c5;">Status</th>
                                <th style="background-color: #37692b; color: #cce8c5;">Description</th>
                                <th style="background-color: #37692b; color: #cce8c5;">Amount</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            viewData_v();
            function viewData_v(){
                $.ajax({
                    url: "Read/viewData_c",
                    type: "POST",
                    dataType: "json",
                    success: function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(x){
                                tbody += `
                                    <tr style="height: 2.5em; vertical-align: middle; font-size: 16px;">
                                        <td style="text-align: center;">123456</td>
                                        <td style="font-weight: bolder;">Marvin B. Batitay</td>
                                        <td style="text-align: center;">2025-07-30</td>
                                        <td>Funding</td>
                                        <td style="text-align: center;">Request</td>
                                        <td>Funding for July 30, 2025.</td>
                                        <td style="text-align: right;">100.00</td>
                                `;
                            })
                            $('#tblRequest tbody').html(tbody);
                        } else {
                            alert("No data found.");
                        }
                    },
                    error: function(xhr, status, error){
                        console.error("Error fetching data: " + error);
                    }
                });
            }
        })
    </script>