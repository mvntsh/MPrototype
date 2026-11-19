<script class="text/javascript">
    $(document).ready(function(){
        view_c();

        $(document).on("click","#btnSubmit",function(e){
            e.preventDefault();
            dateStaled_v();
            validation_entry();
        })

        function dateStaled_v(){
            $.ajax({
                url:"processing/dateStaled_c",
                method:"POST",
                data:$("#nmCheckDate").serialize(),
                dataType:"json",
                success:function(response){
                    var div = '';
                    response.data.forEach(function(sdata){
                        div += `
                            <input type="date" name="txtDatestaled" id="nmDatestaled" value="${sdata.getStaled}">
                            <input type="text" name="txtStatus" id="nmStatus" value="On-hand">
                        `;
                    })
                    $("#divStaled").html(div);
                }
            })
        }

        function validation_entry(){
            $.ajax({
                url: "processing/validation_entry_c",
                method: "POST",
                data: $("#frmEntry").serialize(),
                dataType: "json",
                success: function(response){
                    if(response.success){
                        insert_v();
                    }else{
                        $("#toastMessage").text("Please fill out all required fields.");
                        toastMessage();
                    }
                }
            })
        }

        function insert_v(){
            $.ajax({
                url: "processing/insert_c",
                method: "POST",
                data: $("#frmEntry").serialize(),
                dataType: "json",
                success: function(response){
                    if(response.success){
                        $("#frmEntry")[0].reset();
                        $("#toastMessage").text("Successfully submitted.");
                        toastMessage();
                        search_v();
                    }else{
                        
                    }
                }
            })
        }

        function view_c(){
            $.ajax({
                url: "processing/view_c",
                method: "POST",
                dataType: "json",
                success: function(response){
                    if(response.success){
                        var tbody =''; 

                        response.data.forEach(function(sdata){
                            tbody += `
                                <tr>
                                    <td style="text-align: center;">${sdata.rfpno}</td>
                                    <td>${sdata.payee}</td>
                                    <td style="text-align: center;">${sdata.checkno}</td>
                                    <td style="text-align: center;">${sdata.voucher_date}</td>
                                    <td style="text-align: right;">${sdata.payable_amount}</td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <button class="btn btn-primary">View</button>
                                        <button class="btn btn-danger">Update</button>
                                        <button data-checkno="${sdata.checkno}" data-voucherdate="${sdata.voucher_date}" data-checkdate="${sdata.check_date}" data-payableamount="${sdata.payable_amount}" class="btn btn-dark" id="btnPrint">Print</button>
                                    </td>
                                </tr>
                            `;
                        })
                        $("#tblArchives tbody").html(tbody);
                    }else{
                        
                    }
                }
            })
        }

        $(document).on("click","#btnSearch",function(e){
            e.preventDefault();
            search_v();
        })

        function search_v(){
            $.ajax({
                url: "processing/search_c",
                method: "POST",
                data: $("#nmSearch").serialize(),
                dataType: "json",
                success: function(response){
                    if(response.success){
                        var tbody =''; 

                        response.data.forEach(function(sdata){
                            tbody += `
                                <tr>
                                    <td>${sdata.rfpno}</td>
                                    <td>${sdata.payee}</td>
                                    <td>${sdata.checkno}</td>
                                    <td>${sdata.voucher_date}</td>
                                    <td>${sdata.payable_amount}</td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <button class="btn btn-primary">View</button>
                                        <button class="btn btn-danger">Update</button>
                                        <button data-checkno="${sdata.checkno}" data-voucherdate="${sdata.voucher_date}" data-checkdate="${sdata.check_date}" data-payableamount="${sdata.payable_amount}" class="btn btn-dark" id="btnPrint">Print</button>
                                    </td>
                                </tr>
                            `;
                        })
                        $("#tblArchives tbody").html(tbody);
                    }else{
                        $("#toastMessage").text("No data found.");
                        toastMessage();
                    }
                }
            })
        }

        $(document).on("click","#btnPrint",function(e){
            e.preventDefault();
            $("#nmSearch").val($(this).data("checkno"));
            $("#nmVoucherDate").val($(this).data("voucherdate"));
            $("#nmCheckDate").val($(this).data("checkdate"));
            $("#nmAmount").val($(this).data("payableamount"));
            setprint_v();
        })

        function setprint_v(){
            $.ajax({
                url: "processing/search_c",
                method: "POST",
                data: $("#nmSearch").serialize(),
                dataType: "json",
                success: function(response){
                    if(response.success){
                        var div =''; 

                        response.data.forEach(function(sdata){
                            div += `
                                <table style="width: 100%">
                                    <tbody>
                                        <tr>
                                            <td colspan="6" style="text-align: center;">FD-CTRL-${sdata.voucher_id}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" style="height: 3em;"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%;"></td>
                                            <td id="tdVoucherDate">${sdata.voucher_date}</td>
                                            <td style="width: 40%;"></td>
                                            <td>${sdata.cost_center}</td>
                                            <td style="width: 15%;"></td>
                                            <td id="tdCheckDate">${sdata.check_date}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table style="width: 100%">
                                    <tbody>
                                        <tr>
                                            <td colspan="4" style="height: 1em;"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%;"></td>
                                            <td style="width: 50%; text-transform: uppercase;">${sdata.payee}</td>
                                            <td style="text-align: right; width: 37%;">${sdata.payable_amount}</td>
                                            <td style=" width: 8%;"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" style="height: .3em;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table style="width:100%;">
                                    <tbody>
                                        <tr>
                                            <td style="width: 15%;"></td>
                                            <td style="font-size: 10pt;" id="tdAmountInWordstop">one hundred twenty-three million one hundred twenty-three thousand four hundred fifty-six and seventy-eight</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="height: .3em;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table style="width: 100%">
                                    <tbody>
                                        <tr>
                                            <td style="width: 5%;"></td>
                                            <td>BPI JONES</td>
                                            <td style="width: 40%;"></td>
                                            <td>${sdata.account_no}</td>
                                            <td style="width: 15%;"></td>
                                            <td>${sdata.checkno}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" style="height: 3.5em;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table style="width: 100%">
                                    <tbody>
                                        <tr>
                                            <td style="width: 60%; font-size: 10pt;">${sdata.description}</td>
                                            <td style="width: 32%; text-align: right;">${sdata.payable_amount}</td>
                                            <td style=" width: 8%;"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="height: 3em;"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 60%;">Amount</td>
                                            <td style="width: 32%; text-align: right;">${sdata.samount}</td>
                                            <td style=" width: 8%;"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 60%;">VAT</td>
                                            <td style="width: 32%; text-align: right;">${sdata.vat}</td>
                                            <td style=" width: 8%;"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 60%;">WTAX</td>
                                            <td style="width: 32%; text-align: right;">${sdata.wtax}</td>
                                            <td style=" width: 8%;"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 60%;">Total</td>
                                            <td style="width: 32%; text-align: right;">${sdata.payable_amount}</td>
                                            <td style=" width: 8%;"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="height: 3em;"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="text-align: center;">RFP#${sdata.rfpno}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="height: 6em;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table style="width: 100%">
                                    <tbody>
                                        <tr>
                                            <td style="width:30%;">MARVIN B. BATITAY</td>
                                            <td style="width:5%;"></td>
                                            <td style="width:30%;">FLORISA P. CONDRILLON</td>
                                            <td style="width:5%;"></td>
                                            <td style="width:30%;">SHEILA LYNN CORDERO</td>
                                        </tr>
                                        <tr>
                                            <td style="width:30%; font-size: 8pt;">Finance Staff</td>
                                            <td style="width:5%;"></td>
                                            <td style="width:30%; font-size: 8pt;">Department Manager</td>
                                            <td style="width:5%;"></td>
                                            <td style="width:30%; font-size: 8pt;">Asst. to the Chief Finance Officer</td>
                                            
                                        </tr>
                                        <tr>
                                        <td style="height: 2.5em;" colspan="5"></td> 
                                        </tr>
                                        <tr>
                                            <td colspan="5">MICHEL&/OR MICHAEL/MICHAEL JAMES LHUILLIER</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" style="font-size: 8pt;">Chairman/President & CEO/CFO</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style="height:3.3em;" colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 74%;"></td>
                                            <td style="letter-spacing: 14px;" id="tdCheckdatep">11192029</td>
                                            <td style="width: 5%;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style="height: .5em;" colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 6%;"></td>
                                            <td style="width: 65%; text-align: center; font-weight: bold; text-transform: uppercase;">${sdata.payee}</td>
                                            <td style="width: 24%; font-weight: bolder;">${sdata.payable_amount}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="height: .5em;"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 6%;"></td>
                                            <td colspan="2" style="font-size: 10pt;" id="tdAmountInWordsbottom">one hundred thousand pesos only</td>
                                        </tr>
                                    </tbody>
                                </table>
                            `;
                        })
                        $("#printArea").html(div);
                        dateFormat_c();
                        dateStaled_v();
                    }else{
                        $("#toastMessage").text("No data found.");
                        toastMessage();
                    }
                }
            })
        }

        function dateFormat_c(){
            $.ajax({
                url: "processing/dateFormat_c",
                method: "POST",
                data: $("#nmVoucherDate,#nmCheckDate").serialize(),
                dataType: "json",
                success: function(response){
                    if(response.success){
                        response.data.forEach(function(sdata){
                            $("#tdVoucherDate").html(sdata.spellVoucherdate);
                            $("#tdCheckDate").html(sdata.spellCheckdate);
                            $("#tdCheckdatep").html(sdata.spellCheckdatep);
                        })
                        verifyAmount_v();
                    }else{
                        
                    }
                }
            })
        }

        function verifyAmount_v(){
            $.ajax({
                url: "processing/verifyAmount_c",
                method: "POST",
                data: $("#nmSearch").serialize(),
                dataType: "json",
                success: function(response){
                    if(response.success){
                        trueArgument();
                    }else{
                        falseArgument();
                    }
                }
            })
        }

        function trueArgument(){
			var number = parseFloat($("#nmAmount").val().replace(/[\, ]/g, ''));
			var Inwords = toWordsconver(number);
			$("#tdAmountInWordstop,#tdAmountInWordsbottom").text(Inwords+ "ONLY");
            print();
            $("#frmEntry")[0].reset();
		}

		function falseArgument(){
			var number = $("#nmAmount").val();
			var Inwords = toWordsconver(number);
			$("#tdAmountInWordstop,#tdAmountInWordsbottom").text(Inwords+ "/100 ONLY");
            print();
            $("#frmEntry")[0].reset();
		}

        // System for American Numbering 
		var th_val = ['', 'THOUSAND', 'MILLION', 'BILLION', 'TRILLION'];
		// System for uncomment this line for Number of English 
		// var th_val = ['','thousand','million', 'milliard','billion'];
		// var cents = ['','1','2','3','4','5','6','7','8','9'];
		 
		var dg_val = ['ZERO', 'ONE', 'TWO', 'THREE', 'FOUR', 'FIVE', 'SIX', 'SEVEN', 'EIGHT', 'NINE'];
		var tn_val = ['TEN', 'ELEVEN', 'TWELVE', 'THIRTEEN', 'FOURTEEN', 'FIFTEEN', 'SIXTEEN', 'SEVENTEEN', 'EIGHTEEN', 'NINETEEN'];
		var tw_val = ['TWENTY', 'THIRTY', 'FORTY', 'FIFTY', 'SIXTY', 'SEVENTY', 'EIGHTY', 'NINETY'];
		var cents = ['0','1','2','3','4','5','6','7','8','9'];
		function toWordsconver(s) {
		  s = s.toString();
		    s = s.replace(/[\, ]/g, '');
		    if (s != parseFloat(s))
		        return 'not a number ';
		    var x_val = s.indexOf('.');
		    if (x_val == -1)
		        x_val = s.length;
		    if (x_val > 15)
		        return 'too big';
		    var n_val = s.split('');
		    var str_val = '';
		    var sk_val = 0;
		    for (var i = 0; i < x_val; i++) {
		        if ((x_val - i) % 3 == 2) {
		            if (n_val[i] == '1') {
		                str_val += tn_val[Number(n_val[i + 1])] + ' ';
		                i++;
		                sk_val = 1;
		            } else if (n_val[i] != 0) {
		                str_val += tw_val[n_val[i] - 2] + ' ';
		                sk_val = 1;
		            }
		        } else if (n_val[i] != 0) {
		            str_val += dg_val[n_val[i]] + ' ';
		            if ((x_val - i) % 3 == 0)
		                str_val += 'HUNDRED ';
		            sk_val = 1;
		        }
		        if ((x_val - i) % 3 == 1) {
		            if (sk_val)
		                str_val += th_val[(x_val - i - 1) / 3] + ' ';
		            sk_val = 0;
		        }
		    }
		    if (x_val != s.length) {
		        var y_val = s.length;
		        str_val += '& ';
		        for (var i = x_val + 1; i < y_val; i++)
		        str_val += cents[n_val[i]] + '';  
		    }

		    return str_val.replace(/\s+/g, ' ');
		}

        $(document).on("click","#btnSamount",function(e){
            e.preventDefault();

            var nmGivenamount = $("#nmGivenamount").val().replace(/,/g,'');

            sum = nmGivenamount/1.12;

            $("#nmSamount").val(sum.toFixed(2));
        })


        $(document).on("click","#btnVat",function(e){
            e.preventDefault();

            var nmSamount = $("#nmSamount").val();

            sum = nmSamount*0.12;

            $("#nmVat").val(sum.toFixed(2));
        })

        $(document).on("click","#btnWtax",function(e){
            e.preventDefault();

            var nmSamount = $("#nmSamount").val();
            var nmWtax = $("#nmWtax").val();

            sum = nmSamount*nmWtax;

            $("#nmWtax").val(sum.toFixed(2));
        })
        
        $(document).on("click","#btnAmountrequest",function(e){
            var nmGivenamount = $("#nmGivenamount").val();
            var nmWtax = $("#nmWtax").val();
            var nmAmountRequest = $("#nmAmountRequest").val();

            sum = nmGivenamount - nmWtax;

            $("#nmAmountRequest").val(sum.toFixed(2));

            $("#nmGivenamount,#nmSamount,#nmVat,#nmWtax,#nmAmountRequest").val(function(index,value){
            		value = value.replace(/,/g,'');
            		return insertComma(value);
            });

            function insertComma(x){
            	var parts = x.toString().split(".");
            	parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g,",");
            	return parts.join(".");
            }
        })

        $(document).on("keyup","#nmRequestAmount,#nmAmount",function(e){
			e.preventDefault();

			$(this).val(function(index,value){
            		value = value.replace(/,/g,'');
            		return insertComma(value);
            });

            function insertComma(x){
            	var parts = x.toString().split(".");
            	parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g,",");
            	return parts.join(".");
            }
		})
    })
</script>