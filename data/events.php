<script >
	SYD_ALL("mdl_catagories","select * from catagories where cat_no=","");
	SYD_ALL("mdl_address","select * from address where add_no=","");
	SYD_ALL("mdl_registration","select * from registration where id=","");
	SYD_ALL("mdl_account","select * from account where acc_no=","");
	SYD_ALL("mdl_author","select * from author where auth_no=","");
	SYD_ALL("mdl_books","select * from books where book_no=","");
	SYD_ALL("mdl_expenses","select * from expenses where exp_no=","");
	SYD_ALL("mdl_expense_charge","select * from expense_charge ec where ec.ch_no=","");
	SYD_ALL("mdl_purchase","select * from purchase  where por_no=","");
	SYD_ALL("mdl_purchase_return","select * from purchase_return  where pur_ret_no=","");
	SYD_ALL("mdl_payments","select * from payments  where pay_no=","");
	SYD_ALL("mdl_receipt","select * from receipt  where rec_no=","");
	SYD_ALL("mdl_qabasho","select * from qabasho where rec_no=","");
	
SYD_ALL("mdl_users","select * from users  where id=","");
SYD_ALL("mdl_lacag_bixin","select * from lacag_bixin  where pay_no=","");
SYD_ALL("mdl_qaadasho","select * from qaadasho  where am_no=","");
SYD_ALL("mdl_dalacaad","select * from dalacaad  where ch_no=","");
// SYD_ALL("mdl_expence_payment","select * from expence_payment  where exp_pay=","");

	$(".btn_all_book").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call all_book()";
		$.post("config/SYD_Table.php","qry="+qry,function(data){
 		// alert(qry);
			$("#rpt_show").html(data);
		});
	})

	// amaah
	$(".btn_amaah_all").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call qaadasho_rep()";
		$.post("config/SYD_Table.php","qry="+qry,function(data){
 		// alert(qry);
			$("#rpt_show").html(data);
		});
	})
	// end amaah
	// inventory
	$(".btn_inventory_all").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call inventory()";
		$.post("config/SYD_Table.php","qry="+qry,function(data){
 		// alert(qry);
			$("#rpt_show").html(data);
		});
	})
	// end inventory

	// net
$(".btn_net_all").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call net()";
		$.post("config/SYD_Table.php","qry="+qry,function(data){
 		// alert(qry);
			$("#rpt_show").html(data);
		});
	})
	// end net
	
// 	$(".btn_customers_single").click(function(){
// 		$("#mdl_All_reports").modal("show");
// 		var qry="select acc_no ID, acc_name 'Account Name', c.name 'Customer Name', balance Balance, acc_date Date  from customers c , accounts a where a.cus_no=c.cus_no and acc_no="+$("#cbm_customers_sin_print").val();
// 		$.post("config/SYD_Table.php","qry="+qry,function(data){
// 			$("#rpt_show").html(data);
// 		});
// 	})

// 	$(".btn_customers_between").click(function () {
//   //  alert();
//     $("#mdl_All_reports").modal("show");
//     var qry = "call customers_bet('" + $("#wcus_date1").val() + "','" + $("#cus_date2").val() + "');";
//     $.post("config/SYD_Table.php", "qry=" + qry, function (data) {
//         // alert(qry);
//         $("#rpt_show").html(data);
//     });
// });
</script>
mdl_qabasho

mdl_users
mdl_lacag_bixin

