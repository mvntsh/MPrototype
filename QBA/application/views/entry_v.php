    <style type="text/css">
        @media screen{
            .card{
                border-radius: 0px;
            }

            body{
                overflow:hidden;
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
    <div class="row" style="zoom: 95%; cursor: default;">
        <div class="col-md-3">
            <div class="card" style="background-color: #1c1c1b; margin: .3em;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="card-title" style="color: #bfbdbd;"><svg style="color: #960303;" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-vector-pen" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z"/>
                                <path fill-rule="evenodd" d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086z"/>
                                </svg> Create
                            </h2>
                        </div>
                        <div class="col-md-6">
                            <img src="../icons/Diamante.png" alt="" width="40" height="40" style="float: right;">
                        </div>
                    </div>
                    <form style="margin-top: 2em;" id="frmInputs">
                        <div class="form-floating">
                            <select class="form-select" name="txtnmBankname" id="inputnmBankname" aria-label="Floating label select example" style="background-color: #a80707; border-color: #a80707; color: white; font-weight: bolder;">
                                <option selected>Open this select bank</option>
                                <option value="BDO">BDO</option>
                                <option value="BPI">BPI</option>
                                <option value="PNB">PNB</option>
                                <option value="MBTC">MBTC</option>
                                <option value="UCPB">UCPB</option>
                                <option value="BOC">BOC</option>
                                <option value="RCBC">RCBC</option>
                                <option value="LBP">LBP</option>
                                <option value="CBC">CBC</option>
                            </select>
                            <label for="inputnmBankname" style="color: white;">Bank Name</label>
                        </div>
                        <div style="margin-top: 1em;">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <div hidden>
                                        <input type="text" name="txtnmAccountid" id="inputnmAccountid">
                                        <input type="text" name="txtnmOnlineviewing" value="No" id="inputnmOnlineviewing">
                                        <input type="text" name="txtnmSignatory" value="Ronniel Bacus" id="inputnmSignatory">
                                        <input type="text" name="txtnmAccountstatus" value="Active" id="inputnmAccountstatus">
                                    </div>
                                    <input type="text" name="txtnmAccountno" class="form-control form-control-sm text-center" id="inputnmAccountno" placeholder="Account No." style="background-color: #7a7a7a; border-color: #7a7a7a; border-radius: 0px; color: white;">
                                    <input type="text" name="txtnmAccountname" class="form-control form-control-sm text-center" id="inputnmAccountname" placeholder="Account Name" style="background-color: #7a7a7a; border-color: #7a7a7a; border-radius: 0px; color: white; margin-top: .5em;">
                                    <textarea name="txtnmBankaddress" class="form-control form-control-sm text-center" id="inputnmBankaddress" placeholder="Bank Address" style="margin-top: .5em; background-color: #7a7a7a; border-color: #7a7a7a; border-radius: 0px; color: white;" cols="30" rows="5"></textarea>
                                    <input type="text" name="txtnmRegion" class="form-control form-control-sm text-center" id="inputnmRegion" placeholder="Region Name" style="background-color: #7a7a7a; border-color: #7a7a7a; border-radius: 0px; color: white; margin-top: 2em;">
                                    <input type="text" name="txtnmArea" class="form-control form-control-sm text-center" id="inputnmArea" placeholder="Area Name" style="background-color: #7a7a7a; border-color: #7a7a7a; border-radius: 0px; color: white; margin-top: .5em;">
                                    <select name="txtnmZone" class="form-control form-control-sm text-center" id="inputnmZone" style="text-align: center; margin-top: .5em; background-color: #7a7a7a; border-color: #7a7a7a; border-radius: 0px; color: white;">
                                        <option value="" selected>Zone</option>    
                                        <option value="Luzon">Luzon</option>
                                        <option value="Vismin">Vismin</option>
                                    </select>
                                    <input type="text" name="txtnmBranchname" class="form-control form-control-sm text-center" id="inputnmBranchname" placeholder="Branch Name" style="background-color: #7a7a7a; border-color: #7a7a7a; border-radius: 0px; color: white; margin-top: .5em;">
                                    <textarea name="txtnmBranchaddress" class="form-control form-control-sm text-center" id="" placeholder="Branch Address" style="margin-top: .5em; background-color: #7a7a7a; border-color: #7a7a7a; border-radius: 0px; color: white;" cols="30" rows="5"></textarea>
                                    <select name="txtnmCurrency" class="form-control form-control-sm text-center" id="inputnmCurrency" style="text-align: center; margin-top: .5em; background-color: #7a7a7a; border-color: #7a7a7a; border-radius: 0px; color: white;">
                                        <option value="" selected>Currency</option>    
                                        <option value="Dollar">Dollar</option>
                                        <option value="Peso">Peso</option>
                                    </select>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                    </form>
                    <div class="d-grid" style="margin-top: 1em;">
                        <button class="btn btn-dark" style="border-radius: 0px; height: 3em;" id="btnSave">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card" style="margin: .3em; background-color: #5c5c5c;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h2 style="color: #bfbdbd;">
                                <svg style="color: #ab9b09;" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-view-list" viewBox="0 0 16 16">
                                    <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2m0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14"/>
                                </svg>
                                List of Accounts.
                            </h2>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="search" name="txtnmSearch" class="form-control" id="inputnmSearch" placeholder="Search" style="background-color: #a80707; border-color: #a80707; border-radius: 0px; color: white;" autocomplete="off">
                                <label for="inputnmSearch" style="color: white; font-weight: bolder;">Search</label>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="margin-top: 1.5em; background-color: transparent; border-color: transparent; overflow-y: scroll; height: 665px; scrollbar-width: thin; scrollbar-color: #2e2e2e #6b6a6a;">
                        <table id="tblAccounts" class="table table-bordered table-dark table-hover" style="width: 100%; zoom: 75%;">
                            <thead>
                                <tr>
                                    <td>
                                        <select class="form-select" name="txtnmSelectstatus" id="inputnmSelectstatus">
                                            <option value="Active">Active</option>
                                            <option value="In-active">Inactive</option>
                                            <option value="Closed">Closed</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button class="btn btn-success" id="btnDownload" type="button" style="border-radius: 0px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                                            </svg>
                                            Download
                                        </button>
                                    </td>
                                    <td colspan="4"></td>
                                </tr>
                                <tr>
                                    <th colspan="2" style="text-align: center; font-size: 18pt;">Business Data</th>
                                    <th colspan="4" style="text-align: center; font-size: 18pt;">Bank Data</th>
                                </tr>
                                <tr style="position: sticky; top: 0; height: 4em; vertical-align: middle; text-transform: uppercase;">
                                    <th style="width: 15%;">Branch Name</th>
                                    <th>Signatories</th>
                                    <th style="width: 20%;">Bank & Account No.</th>
                                    <th style="width: 8%;">Currency</th>
                                    <th style="width: 8%;">Status</th>
                                    <th style="width: 15%;">Last Modified</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Signatory</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frmSignatory">
                    <div class="input-group">
                        <input type="text" name="txtnmSignatoryusername" class="form-control" id="inputnmSignatoryusername" placeholder="Signatory Name" aria-label="Signatory Name" aria-describedby="basic-addon1" style="border-radius: 0px;">
                        <button class="btn btn-success" id="btnAddsignatory" type="button" style="border-radius: 0px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                                <path d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer" hidden>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
            </div>
        </div>
    </div>
    <table id="tblAccountsxls" hidden>
        <thead>
            <tr>
                <th>Bank</th>
                <th>Account No.</th>
                <th>Branch Name</th>
                <th>Currency</th>
                <th>Status</th>
                <th>Last Modified</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    <script type="text/javascript">
        $(document).ready(function(){
            viewAccount_v();
            function viewAccount_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'Entry/viewAccount_c',
                    data:$("#frmInputs").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(sqldata){
                                tbody += `
                                    <tr style="height: 3em; vertical-align: middle;">
                                        <td>
                                            <svg data-accountid="${sqldata.account_id}" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16" style="color: ${sqldata.online_award};" id="btnOnlineviewing">
                                                <path fill-rule="evenodd" d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.48 1.48 0 0 1 0-2.098z"/>
                                            </svg>
                                        ${sqldata.branch_name}</td>
                                        <td data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-accountid="${sqldata.account_id}" id="btnSignatory">${sqldata.signatory}</td>
                                        <td>
                                            <svg data-accountid="${sqldata.account_id}" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16" style="color: ${sqldata.online_access_color};" id="btnBankonlineaccess">
                                                <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                                            </svg> ${sqldata.bank_name} & ${sqldata.account_no}
                                        </td>
                                        <td>${sqldata.currency}</td>
                                        <td style="background-color: ${sqldata.account_status_color};">
                                            <select class="form-select form-select-sm" style="font-weight: bolder; background-color: ${sqldata.account_status_color}; border-color: ${sqldata.account_status_color};" id="inputnmSelectStatus" data-accountid="${sqldata.account_id}">
                                                <option value="${sqldata.account_status}" selected disabled>${sqldata.account_status}</option>
                                                <option value="Active">Active</option>
                                                <option value="In-active">In-active</option>
                                                <option value="Closed">Closed</option>                                            
                                            </select>
                                        </td>
                                        <td>${sqldata.update_status}</td>
                                    </tr>
                                `;
                            })
                            $("#tblAccounts tbody").html(tbody);
                        }
                    }
                })
            }

            $(document).on("click","#btnSave",function(e){
                e.preventDefault();

                entry_v();
            })

            function entry_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'Entry/entry_c',
                    data:$("#frmInputs").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            $("#frmInputs")[0].reset();
                            $("#inputnmBankname").focus();
                            viewAccount_v();
                        } else {
                            alert("Failed to Save!");
                        }
                    }
                })
            }

            $(document).on("keyup","#inputnmSearch",function(){
                var search = $(this).val();

                if(search != ""){
                    searchBranch_v();
                } else {
                    viewAccount_v();
                }
            })

            function searchBranch_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'Entry/searchBranch_c',
                    data:$("#inputnmSearch").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(sqldata){
                                tbody += `
                                    <tr style="height: 3em; vertical-align: middle;">
                                        <td>
                                            <svg data-accountid="${sqldata.account_id}" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16" style="color: ${sqldata.online_award};" id="btnOnlineviewing">
                                                <path fill-rule="evenodd" d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.48 1.48 0 0 1 0-2.098z"/>
                                            </svg>
                                        ${sqldata.branch_name}</td>
                                        <td data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-accountid="${sqldata.account_id}" id="btnSignatory">${sqldata.signatory}</td>
                                        <td>
                                            <svg data-accountid="${sqldata.account_id}" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16" style="color: ${sqldata.online_access_color};" id="btnBankonlineaccess">
                                                <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                                            </svg> ${sqldata.bank_name} & ${sqldata.account_no}
                                        </td>
                                        <td>${sqldata.currency}</td>
                                        <td style="background-color: ${sqldata.account_status_color};">
                                            <select class="form-select form-select-sm" style="font-weight: bolder; background-color: ${sqldata.account_status_color}; border-color: ${sqldata.account_status_color};" id="inputnmSelectStatus" data-accountid="${sqldata.account_id}">
                                                <option value="${sqldata.account_status}" selected disabled>${sqldata.account_status}</option>
                                                <option value="Active">Active</option>
                                                <option value="In-active">In-active</option>
                                                <option value="Closed">Closed</option>                                            
                                            </select>
                                        </td>
                                        <td>${sqldata.update_status}</td>
                                    </tr>
                                `;
                            })
                            $("#tblAccounts tbody").html(tbody);
                        }
                    }
                })
            }

            $(document).on("click","#btnOnlineviewing",function(){
                $("#inputnmAccountid").val($(this).attr("data-accountid"));
                if(confirm("Are you sure this account has online viewing access?")){
                    inputnmOnlineviewing.value = "Yes";
                    updateOnlineviewingyes_v();
                }else{
                    inputnmOnlineviewing.value = "No";
                    alert("Change to no online viewing access.");
                    updateOnlineviewingno_v();
                }
            })

            function updateOnlineviewingyes_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'Entry/updateOnlineviewing_c',
                    data:$("#frmInputs").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            viewAccount_v();
                        } else {
                            alert("Failed to Update Online Viewing Access!");
                        }
                    }
                })
            }

            function updateOnlineviewingno_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'Entry/updateOnlineviewing_c',
                    data:$("#frmInputs").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            viewAccount_v();
                        } else {
                            alert("Failed to Update Online Viewing Access!");
                        }
                    }
                })
            }

            $(document).on("change","#inputnmSelectStatus",function(){
                var accountid = $(this).attr("data-accountid");
                var accountstatus = $(this).val();
                $("#inputnmAccountstatus").val(accountstatus);
                $("#inputnmAccountid").val(accountid);
                

                if(confirm("Are you sure this account to be set as "+accountstatus+"?")){
                    updateAccountstatus_v();
                }else{
                    alert("No changes made to account status.");
                }
            })

            function updateAccountstatus_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'Entry/updateAccountstatus_c',
                    data:$("#frmInputs").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            viewAccount_v();
                        } else {
                            alert("Failed to Update Account Status!");
                        }
                    }
                })
            }

            $(document).on("click","#btnSignatory",function(e){
                e.preventDefault();
                var accountid = $(this).attr("data-accountid");

                $("#inputnmAccountid").val(accountid);
                $("#inputnmSignatoryusername").focus();
            })

            $(document).on("click","#btnAddsignatory",function(e){
                e.preventDefault();
                var signatoryname = $("#inputnmSignatoryusername").val();

                if(signatoryname != ""){
                    updateSignatory_v();
                } else {
                    alert("Please enter signatory name.");
                }
            })

            function updateSignatory_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'Entry/updateSignatory_c',
                    data:$("#inputnmAccountid,#frmSignatory").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            $("#inputnmSignatoryusername").val("");
                            $("#staticBackdrop").modal('hide');
                            viewAccount_v();
                        } else {
                            alert("Failed to Update Signatory!");
                        }
                    }
                })
            }

            $(document).on("click","#btnBankonlineaccess",function(){
                $("#inputnmAccountid").val($(this).attr("data-accountid"));
                if(confirm("Are you sure this account has online banking access?")){
                    inputnmOnlineviewing.value = "Yes";
                    updateOnlinebanking_v();
                }else{
                    inputnmOnlineviewing.value = "No";
                    alert("Change to no online banking access.");
                    updateOnlinebanking_v();
                }
            })

            function updateOnlinebanking_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'Entry/updateOnlinebanking_c',
                    data:$("#frmInputs").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            viewAccount_v();
                        } else {
                            alert("Failed to Update Online Banking Access!");
                        }
                    }
                })
            }

            $(document).on("click","#btnDownload",function(){
                downloadFile_v();
            })

            function downloadFile_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'Entry/downloadFile_c',
                    data:$("#inputnmSelectstatus").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(sqldata){
                                tbody += `
                                    <tr>
                                        <td>${sqldata.bank_name}</td>
                                        <td>'${sqldata.account_no}</td>
                                        <td>${sqldata.branch_name}</td>
                                        <td>${sqldata.currency}</td>
                                        <td>${sqldata.account_status}</td>
                                        <td>${sqldata.update_status}</td>
                                    </tr>
                                `;
                            })
                            $("#tblAccountsxls tbody").html(tbody);
                            tableToExcel("tblAccountsxls");
                        }
                    }
                })
            }
        })
    </script>