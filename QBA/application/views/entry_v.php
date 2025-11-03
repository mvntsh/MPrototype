    <style type="text/css">
        @media screen{
            .card{
                border-radius: 0px;
            }
        }
    </style>
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
                                    <input type="text" name="txtnmAccountstatus" value="Active" id="inputnmAccountstatus" hidden>
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
                                <input type="search" name="txtnmSearch" class="form-control" id="inputnmSearch" placeholder="Search" style="background-color: #878786; border-color: #878786; border-radius: 0px;" autocomplete="off">
                                <label for="inputnmSearch">Search</label>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="margin-top: 1.5em; background-color: transparent; border-color: transparent; overflow-y: scroll; height: 665px; scrollbar-width: thin; scrollbar-color: #2e2e2e #6b6a6a;">
                        <table id="tblAccounts" class="table table-bordered table-dark" style="width: 100%; zoom: 70%;">
                            <thead>
                                <tr style="position: sticky; top: 0; height: 4em; vertical-align: middle; text-transform: uppercase;">
                                    <th>Branch Name</th>
                                    <th>Branch Address</th>
                                    <th>Signatories</th>
                                    <th style="width: 15%;">Bank & Account No.</th>
                                    <th style="width: 8%;">Currency</th>
                                    <th style="width: 8%;">Status</th>
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
                                            <svg data-accountid="${sqldata.account_id}" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16" style="color: ${sqldata.online_award};" id="btnOnlineviewing">
                                                <path fill-rule="evenodd" d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.48 1.48 0 0 1 0-2.098z"/>
                                            </svg>
                                        ${sqldata.branch_name}</td>
                                        <td>${sqldata.branch_address}</td>
                                        <td>Ronniel Bacus</td>
                                        <td>${sqldata.bank_name} & ${sqldata.account_no}</td>
                                        <td>${sqldata.currency}</td>
                                        <td><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg> ${sqldata.account_status}</td>
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
                            alert("Successfully Saved!");
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
                                            <svg data-accountid="${sqldata.account_id}" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16" style="color: ${sqldata.online_award};" id="btnOnlineviewing">
                                                <path fill-rule="evenodd" d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.48 1.48 0 0 1 0-2.098z"/>
                                            </svg>
                                        ${sqldata.branch_name}</td>
                                        <td>${sqldata.branch_address}</td>
                                        <td>Ronniel Bacus</td>
                                        <td>${sqldata.bank_name} & ${sqldata.account_no}</td>
                                        <td>${sqldata.currency}</td>
                                        <td>${sqldata.account_status}</td>
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
        })
    </script>