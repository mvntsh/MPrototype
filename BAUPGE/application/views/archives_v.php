
    <style type="text/css">
        @media screen{
            .form-control{
                border-radius: 0px;
                background-color: rgb(247, 223, 223, .8);
                border-color: rgb(247, 223, 223, .8);
            }
        }
    </style>
    <script type="text/javascript">
        var tableToExcel = (function() {
        var uri = 'data:application/vnd.ms-excel;base64,'
            , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><body><table>{table}</table></body></html>'
            , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
            , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
            return function(table, name) {
                if (!table.nodeType) table = document.getElementById(table)
                var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
                window.location.href = uri + base64(format(template, ctx))
            }
        })()
    </script>
    <div class="row">
        <div class="col-12">
            <div class="card" style="border-radius: 0px; border-color: transparent; background-color: rgb(8, 8, 8, .6);">
                <div class="card-body">
                    <h1 class="text-center" style="letter-spacing: -1px; text-transform: uppercase; color: #e3e3e3;"><i class="fa-solid fa-box-archive" style="color: rgb(156, 12, 12);"></i> Online Archives</h1>
                    <div class="row">
                        <div class="col-md-8">
                            <div style="margin: .5em;">
                                <button id="btnDownload" class="btn btn-success" style="color: #e3e3e3; border-radius: 0px; height: 3.2em;">
                                    <span class="badge text-bg-warning"><i class="fa-solid fa-download" style="color: #e01102;"></i></span>
                                    Download as XLS
                                </button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="form-floating mb-3">
                                    <input type="search" name="txtnmSearch" class="form-control" id="idnmSearch" placeholder="name@example.com" autocomplete="off">
                                    <label for="idnmSearch"><i class="fa-solid fa-1" style="color: rgb(156, 12, 12);"></i> Search</label>
                                </div>
                                <i id="btnSearch" class="fa-solid fa-magnifying-glass" style="color: #d1d1d1; font-size: 20pt; margin: .6em;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="overflow-y: scroll; height: 450px; scrollbar-width: thin; scrollbar-color: #828282 #e6e8e6; border-radius: 0px; border-color: black; background-color: rgb(209, 209, 209, .6); box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
                        <table id="idtblArchives" class="table table-dark table-hover table-striped" style="border-color: #828282; border-radius: 0px; zoom: 80%;">
                            <thead style="position: sticky; top: 0; height: 7em;">
                                <tr>
                                    <td style="width: 10%; text-transform: uppercase; vertical-align: middle; text-align: center; font-weight: bold;" rowspan="2">Request #</td>
                                    <td style="width: 15%; text-transform: uppercase; vertical-align: middle; text-align: center; font-weight: bold;" rowspan="2">Name</td>
                                    <td style="width: 10%; text-transform: uppercase; vertical-align: middle; text-align: center; font-weight: bold;" rowspan="2">Account #</td>
                                    <td style="width: 10%; text-transform: uppercase; vertical-align: middle; text-align: center; font-weight: bold;" rowspan="2">Voucher Date</td>
                                    <td colspan="2" style="text-align: center; font-weight: bold;">
                                        SETTLEMENT AMOUNT
                                    </td>
                                    <td style="width: 15%; text-transform: uppercase; vertical-align: middle; text-align: center; font-weight: bold;" rowspan="2">Description</td>
                                    <td style="text-transform: uppercase; vertical-align: middle; text-align: center; font-weight: bold;" rowspan="2">Status</td>
                                </tr>
                                <tr style="position: sticky; top: 0; height: 3.5em; vertical-align: middle; text-align: center;">
                                    <td style="width: 10%; text-transform: uppercase;">To BPI</td>
                                    <td style="width: 10%; text-transform: uppercase;">To Other</td>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            viewdataArchive_v();
            function viewdataArchive_v(){
                $.ajax({
                    method: "post",
                    url: "<?php echo base_url('archives/viewdataArchive_c'); ?>",
                    dataType: "json",
                    success: function(response){
                        if(response.success){
                            var tbody = 'No data found';

                            response.data.forEach(function(query){
                                tbody += `
                                    <tr style="height: 3.5em;">
                                        <td style="text-align: center; vertical-align: middle;">${query.request_no}</td>
                                        <td style="vertical-align: middle;">${query.account_name}</td>
                                        <td style="text-align: center; vertical-align: middle;">${query.account_no}</td>
                                        <td style="text-align: center; vertical-align: middle;">${query.voucher_date}</td>
                                        <td style="text-align: right; vertical-align: middle;">${query.tobpi}</td>
                                        <td style="text-align: right; vertical-align: middle;">${query.toothers}</td>
                                        <td style="vertical-align: middle;">${query.description}</td>
                                        <td style="text-align: center; vertical-align: middle;"><span class="badge bg-secondary">${query.transaction_status}</span></td>
                                    </tr>
                                `;
                            })
                            $("#idtblArchives tbody").html(tbody);
                            $("#idnmSearch").focus();
                        }
                    }
                })
            }

            $(document).on("click","#btnSearch",function(e){
                e.preventDefault();
                var idnmSearch = $("#idnmSearch").val();

                if(idnmSearch === ""){
                    viewdataArchive_v();
                }else{
                    searchdataArchive_v();
                }
            })

            function searchdataArchive_v(){
                $.ajax({
                    method: "post",
                    url: "<?php echo base_url('archives/searchdataArchive_c'); ?>",
                    data: $("#idnmSearch").serialize(),
                    dataType: "json",
                    success: function(response){
                        if(response.success){
                            var tbody = 'No data found';

                            response.data.forEach(function(query){
                                tbody += `
                                    <tr style="height: 3.5em;">
                                        <td style="text-align: center; vertical-align: middle;">${query.request_no}</td>
                                        <td style="vertical-align: middle;">${query.account_name}</td>
                                        <td style="text-align: center; vertical-align: middle;">${query.account_no}</td>
                                        <td style="text-align: center; vertical-align: middle;">${query.voucher_date}</td>
                                        <td style="text-align: right; vertical-align: middle;">${query.tobpi}</td>
                                        <td style="text-align: right; vertical-align: middle;">${query.toothers}</td>
                                        <td style="vertical-align: middle;">${query.description}</td>
                                        <td style="text-align: center; vertical-align: middle;"><span class="badge bg-secondary">${query.transaction_status}</span></td>
                                    </tr>
                                `;
                            })
                            $("#idtblArchives tbody").html(tbody);
                        }else{
                            $("#idtblArchives tbody").html('No data found');
                        }
                    }
                })
            }

            $("#btnDownload").click(function(){
                tableToExcel("idtblArchives");
            })
        });
    </script>