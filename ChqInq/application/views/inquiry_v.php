    <video autoplay muted loop id="myVideo">
        <source src="../background/halloween.1920x1080.mp4" type="video/mp4">
    </video>
    <div class="card" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px; margin: 1em; border-radius: 0em; color: white; background-color: rgb(10, 10, 10, .8);">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-floating">
                        <select class="form-select" id="inputnmInquiry" aria-label="Floating label select example" style="background-color: #9c9b9a; border-color: #9c9b9a;">
                            <option selected>Inquiry</option>
                            <option value="Received">Received</option>
                            <option value="Cheque">Cheques</option>
                            <option value="Voucher">Vouchers</option>
                        </select>
                        <label for="inputnmInquiry">Works with selects</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="text-center" style="font-weight: bolder; letter-spacing: 2px; color: #c45025; font-family: 'Irish Grover', system-ui;"><span id="inquiryTitle"></span> Data</h1>
                </div>
                <div class="col-md-3">
                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input type="search" class="form-control" id="inputnmSearch" placeholder="Search" name="txtnmSearch" autocomplete="off" style="background-color: #9c9b9a; border-color: #9c9b9a;">
                            <label for="inputnmSearch">Search</label>
                        </div>
                        <button class="btn btn-dark" type="button" id="btnSearch">Go</button>
                    </div>
                </div>
            </div>
            <div class="card" style="border-radius: 0em; border-color: transparent; background-color: transparent; height: 590px; overflow-y: scroll; scrollbar-width: thin; scrollbar-color: #0f0f0f #919090;">
                <table class="table table-dark table-hover table-bordered" style="color: white; zoom: 75%;" id="tblData">
                    <thead>
                        <tr style="height: 3em; vertical-align: middle; text-transform: uppercase; font-size: 13pt; position: sticky; top: 0; z-index: 1; text-align: center;">
                            <th style="width: 8%; background-color: #c45025; color: #141414;">Request No.</th>
                            <th style="width: 15%; background-color: #c45025; color: #141414;">Payee</th>
                            <th style="width: 8%; background-color: #c45025; color: #141414;">Date Received</th>
                            <th style="width: 8%; background-color: #c45025; color: #141414;">Check No.</th>
                            <th style="width: 8%; background-color: #c45025; color: #141414;">Check Date</th>
                            <th style="width: 8%; background-color: #c45025; color: #141414;">Voucher No.</th>
                            <th style="width: 8%; background-color: #c45025; color: #141414;">Voucher Date</th>
                            <th style="width: 10%; background-color: #c45025; color: #141414;">Amount</th>
                            <th style="width: 15%; background-color: #c45025; color: #141414;">Description</th>
                            <th style="width: 8%; background-color: #c45025; color: #141414;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="10" style="text-align: center; height: 10em; vertical-align: middle;">PLEASE SELECT A SEARCH CRITERIA. . . .</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#btnSearch").click(function(e){
                e.preventDefault();
                indetifyInquiry();
            })

            function indetifyInquiry(){
                var inputnmInquiry = $("#inputnmInquiry").val();

                $("#inquiryTitle").text(inputnmInquiry);

                if(inputnmInquiry=="Received"){
                    viewReceived_v();
                }else if(inputnmInquiry=="Cheque"){
                    viewCheques_v();
                }else if(inputnmInquiry=="Voucher"){
                    viewVouchers_v();
                }
            }

            function viewReceived_v(){
                $.ajax({
                    url: "Inquiry/viewReceived_c",
                    type: "post",
                    data:$("#inputnmSearch").serialize(),
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(d){
                                tbody += `
                                    <tr style="height: 5em;">
                                        <td style="vertical-align: middle;">${d.rfpno}</td>
                                        <td>${d.payee}</td>
                                        <td style="vertical-align: middle; text-align: center;">${d.datareceived}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="vertical-align: middle;text-align: right;">${d.amount}</td>
                                        <td>${d.description}</td>
                                        <td style="vertical-align: middle; text-align: center; color: ${d.colorStatus}; font-weight: bolder;">${d.receivestatus}</td>
                                    </tr>
                                `;
                            })
                            $("#tblData tbody").html(tbody);
                        }else{
                            $("#tblData tbody").html('<tr><td colspan="10" style="text-align: center; height: 10em; vertical-align: middle;">NO DATA FOUND. . . .</td></tr>');
                            $("#inputnmSearch").val("");
                        }
                    }
                })
            }

            function viewCheques_v(){
                $.ajax({
                    url: "Inquiry/viewCheques_c",
                    type: "post",
                    data:$("#inputnmSearch").serialize(),
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(d){
                                tbody += `
                                    <tr style="height: 5em;">
                                        <td style="vertical-align: middle;">${d.rfpno}</td>
                                        <td>${d.payee}</td>
                                        <td style="vertical-align: middle; text-align: center;">${d.daterequest}</td>
                                        <td style="vertical-align: middle; text-align: center;">${d.checkno}</td>
                                        <td style="vertical-align: middle; text-align: center;">${d.checkdate}</td>
                                        <td style="vertical-align: middle; text-align: center;">${d.checkvoucherno}</td>
                                        <td style="vertical-align: middle; text-align: center;">${d.voucherdate}</td>
                                        <td style="vertical-align: middle;text-align: right;">${d.amount}</td>
                                        <td style="vertical-align: middle;">${d.checkdescription}</td>
                                        <td style="vertical-align: middle; text-align: center; font-weight: bolder; color: ${d.statusColor}; text-transform: uppercase; font-size: 9pt; letter-spacing: -1px;">${d.status}</td>
                                    </tr>
                                `;
                            })
                            $("#tblData tbody").html(tbody);
                        }else{
                            $("#tblData tbody").html('<tr><td colspan="10" style="text-align: center; height: 10em; vertical-align: middle;">NO DATA FOUND. . . .</td></tr>');
                            $("#inputnmSearch").val("");
                        }
                    }
                })
            }

            function viewVouchers_v(){
                $.ajax({
                    url: "Inquiry/viewVouchers_c",
                    type: "post",
                    data:$("#inputnmSearch").serialize(),
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(d){
                                tbody += `
                                    <tr style="height: 5em;">
                                        <td style="vertical-align: middle;">${d.rfpno}</td>
                                        <td>${d.payee}</td>
                                        <td style="vertical-align: middle; text-align: center;">${d.daterequested}</td>
                                        <td style="vertical-align: middle; text-align: center;"></td>
                                        <td style="vertical-align: middle; text-align: center;"></td>
                                        <td style="vertical-align: middle; text-align: center;">${d.voucherno}</td>
                                        <td style="vertical-align: middle; text-align: center;">${d.voucherdate}</td>
                                        <td style="vertical-align: middle;text-align: right;">${d.amount}</td>
                                        <td style="vertical-align: middle;">${d.description}</td>
                                        <td style="vertical-align: middle; text-align: center; font-weight: bolder; color: ${d.statusColor}; text-transform: uppercase; font-size: 9pt; letter-spacing: -1px;">${d.status}</td>
                                    </tr>
                                `;
                            })
                            $("#tblData tbody").html(tbody);
                        }else{
                            $("#tblData tbody").html('<tr><td colspan="10" style="text-align: center; height: 10em; vertical-align: middle;">NO DATA FOUND. . . .</td></tr>');
                            $("#inputnmSearch").val("");
                        }
                    }
                })
            }
        })
    </script>