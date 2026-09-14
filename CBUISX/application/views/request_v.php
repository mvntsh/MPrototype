    <style>
        @import url('https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&display=swap');

        table {
            font-family: "Maven Pro", sans-serif;
        }
    </style>
    <div class="row">
        <div class="col-md-4">
           <div class="card">
            <div class="card-body">
                <h1 class="card-title">Request Form</h1>
                <form id="frmInputs">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control input-box" id="inputnmRequestid" placeholder="Request id">
                        <label for="inputnmRequestid">Request ID</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control input-box" id="inputnmName" placeholder="Name">
                        <label for="inputnmName">Requestor Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control input-box" id="inputnmDate" placeholder="Date">
                        <label for="inputnmDate">Request Date</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control input-box" id="inputnmAmount" placeholder="Amount">
                        <label for="inputnmAmount">Amount</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control input-box" placeholder="Description" id="inputnmDescription" style="height: 150px"></textarea>
                        <label for="inputnmDescription">Description</label>
                    </div>

                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
           </div>
        </div>
        <div class="col-md-8">
            <div class="card" style="height: 589px; overflow-y: auto;">
                <div class="card-body">
                    <h1 class="card-title">Request List</h1>
                    <table class="table table-striped table-success">
                        <thead>
                            <tr style="text-align: center;">
                                <th style="width: 10%;">Request ID</th>
                                <th style="width: 30%;">Name</th>
                                <th style="width: 15%;">Date</th>
                                <th style="width: 15%;">Amount</th>
                                <th style="width: 30%;">Description</th>
                            </tr>
                        </thead>
                        <tbody id="requestList" style="font-size: 10pt;">
                            <tr>
                                <td>500123</td>
                                <td>Marvin Batitay - AKA Sharky</td>
                                <td>2023-10-01</td>
                                <td>1000.00</td>
                                <td>Request for new equipment</td>
                            </tr>
                        </tbody>
                </div>
            </div>
        </div>
    </div> 