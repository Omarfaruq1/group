

 <!-- All MDL Reports -->

 <div class="modal  fade" id="mdl_All_reports" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true" style="margin-top: 3%">
 <div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title" id="exampleModalLabel"> Report</h4>
      <!-- <button type="button" class="btn-close"
      style="background-color: white; cursor: pointer; position: absolute;" data-bs-dismiss="modal"
      aria-label="Close"></button> -->

      <button type="button" class="close" style="margin-right: 75%;" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <!-- <button type="button" class="btn btn-success btn-sm" id="btn_prt_dt_rpt">PRINT</button> -->
      <button type="button" class="btn btn-primary btn-md" id="btn_prt_dt_rpt">PRINT</button>
    </div>

    <div class="modal-body">
      <div class="row">

        <div class="col-md-12">
          <form id="rpt_show_PRINT">
            <div class="col-md-12">
              <center>
                <img src="assets/img/l.png" class="img img-fluid "
                style="width: 100%; height: 130px; margin-top: -2%;">
              </center>
            </div>
            <div class="col-md-12">
              <div id="rpt_show"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- All MDL Reports -->


<!-- -----------MDL DELETE------------ -->
<div style="position: absolute">
  <div class="modal fade" id="mdl_delete_all" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content" style="top: 150px;">
        <div class="model-header bg-primary p-15">
          <h4 class="modal-title text-center"
          style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #fff;">
        Delete Record</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12 text-center">
            <h6 style="font-size: 12px; text-align: center;color: primary;"><strong>Are you sure you
            want to delete this record?</strong></h6><br>
            <h1 style="font-family: impact; font-size: 20px; text-align: center; color: blue; "></h1>
          </div>
        </div>
        <div class="col-md-12 text-center ">
          <button type="submit" class="btn btn-danger btn-sm btn-circle "
          id="yes_d_btn"><span>YES</span></button>
          <button type="button" class="btn btn-primary btn-sm m-l-80" data-dismiss="modal"><span
            id="spm_deld_Faculty">NO</span></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END MDL DELETE -->






<div class="modal fade" id="mdl_address" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Address Modal</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="address_alert"></div>
    <div class="modal-body">

     <form id="frm_address" class="" method="post">
      <div class="row">

        <div class="col-md-12">
          <input type="hidden" name="address_proc" value="address_proc">
          <input type="hidden" name="add_no" id="add_no">
        </div>

        <div class="col-md-6 mb-3">
          <label  class="form-label">District</label>
          <input type="text" id="add_destrict" class="form-control" name="add_destrict" placeholder="Enter District" />
          
        </div>

        <div class="col-md-6 mb-3">
          <label  class="form-label">Village</label>
          <input type="text" id="add_village" class="form-control" name="add_village" placeholder="Enter Village" />
        </div>

        <div class="col-md-6 mb-3">
          <label  class="form-label">Zone</label>
          <input type="text" id="add_zone" class="form-control" name="add_zone" placeholder="Enter Area" />
        </div>



      </div>
    </form>
  </div>
  <div class="modal-footer bg-whitesmoke br">
    <button type="button" name="submit" class="btn btn-primary" id="btn_save_address">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_address">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!-- address -->

<!-- registration -->
<div class="modal fade" id="mdl_registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">registration Modal</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="registration_alert"></div>
    <div class="modal-body">

     <form id="frm_registration" class="">
      <div class="row">

        <div class="col-md-12">
          <input type="hidden" name="registration_proc" value="registration_proc">
          <input type="hidden" name="id" id="id">
        </div>

        <div class="col-md-6 mb-3">
          <label  class="form-label">Name</label>
          <input type="text" id="reg_name" class="form-control" name="reg_name" placeholder="Enter District" />
        </div>
       
        <div class="col-md-6 mb-3">
          <label  class="form-label">tell</label>

          <input type="number" id="reg_tell" class="form-control" name="reg_tell" placeholder="Enter Village" />
       
        </div>

        <div class="col-md-6 mt-0">
          <label for="form-label">Address</label>
          <?php $co->fillCombo("select add_no, zone from address where add_no order by add_no", "cbm_reg_address_print", "Select Address"); ?>
        </div>

       

        

        <div class="col-md-6 mt-0">
          <label for="form-label">Option</label>
          <?php $co->fillCombo("select op_id, option_name from options where op_id order by op_id", "cbm_reg_option_print", "Select Option"); ?>
        </div>



      </div>
    </form>
  </div>
  <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_registration">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_registration">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!-- registration -->


<!-- category -->

<div class="modal fade" id="mdl_catagories" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Category Modal</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="catagories_alert"></div>
    <div class="modal-body">

     <form id="frm_catagories" class="">
      <div class="row">

        <div class="col-md-12">
          <input type="hidden" name="cat_pro" value="cat_pro">
          <input type="hidden" name="cat_no" id="cat_no">
        </div>

        <div class="col-md-6 mb-3">
          <label  class="form-label">cat_name</label>
          <input type="text" id="cat_name" class="form-control" name="cat_name" placeholder="Enter District" />
        </div>

        <div class="col-md-6 mb-3">
          <label  class="form-label">desc</label>
          <input type="text" id="dec" class="form-control" name="des" placeholder="Enter Village" />
        </div>





      </div>
    </form>
  </div>
  <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_catagories">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_catagories">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>

<!-- category -->

<!-- Account -->
<div class="modal fade" id="mdl_account" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">account Modal</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="account_alert"></div>
    <div class="modal-body">

     <form id="frm_account" class="">
      <div class="row">

        <div class="col-md-12">
          <input type="hidden" name="account_proc" value="account_proc">
          <input type="hidden" name="acc_no" id="acc_no">
        </div>

        <div class="col-md-6 mb-3">
          <label  class="form-label">Magac-Bankiga</label>
          <input type="text" id="a_acc_name" class="form-control" name="a_acc_name" placeholder="Enter bank-name" />
        </div>

        <div class="col-md-6 mb-3">
          <label  class="form-label">institution</label>
          <input type="text" id="a_institution" class="form-control" name="a_institution" placeholder="Enter institution" />
        </div>
        <div class="col-md-6 mb-3">
          <label  class="form-label">balance</label>
          <input type="text" id="a_balance" class="form-control" name="a_balance" placeholder="Enter balance" />
        </div>




      </div>
    </form>
  </div>
  <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_account">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_account">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!-- end Account -->

<!-- Author -->
<div class="modal fade" id="mdl_author" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Category Modal</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="author_alert"></div>
    <div class="modal-body">

     <form id="frm_author" class="">
      <div class="row">

        <div class="col-md-12">
          <input type="hidden" name="Author_proc" value="Author_proc">
          <input type="hidden" name="auth_no" id="auth_no">
        </div>

        <div class="col-md-6 mb-3">
          <label  class="form-label">Magac-Qoraaga</label>
          <input type="text" id="a_auth_name" class="form-control" name="a_auth_name" placeholder="Magaca-Qoraaga" />
        </div>

        <div class="col-md-6 mb-3">
          <label  class="form-label">Jinsi</label>
          <input type="text" id="a_sex" class="form-control" name="a_sex" placeholder="Jinsi" />
        </div>
        <div class="col-md-6 mb-3">
          <label  class="form-label">Description</label>
          <input type="text" id="a_Description" class="form-control" name="a_Description" placeholder="Faah-faahin" />
        </div>




      </div>
    </form>
  </div>
  <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_author">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_author">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!-- End Author -->


<!-- book -->
<div class="modal fade" id="mdl_books" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Book Modal</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="books_alert"></div>
    <div class="modal-body">

     <form id="frm_books" class="">
      <div class="row">

        <div class="col-md-12">
          <input type="hidden" name="books_pro" value="books_pro">
          <input type="hidden" name="book_no" id="book_no">
        </div>
        <div class="col-md-6 mt-0">
          <label for="form-label">Category</label>
          <?php $co->fillCombo("select cat_no, cat_name from catagories where cat_no order by cat_no", "cbm_b_catagories_print", "Select catagories"); ?>
        </div>
        <div class="col-md-6 mb-3">
          <label  class="form-label">Magaca-Book</label>
          <input type="text" id="b_title" class="form-control" name="b_title" placeholder="Enter Magaca-buuga" />
        </div>

        

        <div class="col-md-6 mb-3">
          <label  class="form-label">ISB</label>
          <input type="text" id="b_books" class="form-control" name="b_books" placeholder="Enter ISB-NUMBER" />
        </div>

        <div class="col-md-6 mt-0">
          <label for="form-label">Author_Name</label>
          <?php $co->fillCombo("select auth_no, auth_name from author where auth_no order by auth_no", "cbm_b_author_print", "Select author"); ?>
        </div>

        

        <div class="col-md-6 mb-3">
          <label  class="form-label">Faahfaahin</label>
          <input type="text" id="b_Description" class="form-control" name="b_Description" placeholder="Faah-faahin" />
        </div>

        



      </div>
    </form>
  </div>
  <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_books">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_books">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!-- end book -->
<!-- amaah -->
<div class="modal fade" id="mdl_qaadasho" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Amaah Modal</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="qaadasho_alert"></div>
    <div class="modal-body">

     <form id="frm_qaadasho" class="">
      <div class="row">

        <div class="col-md-12">
          <input type="hidden" name="qaadasho_book" value="qaadasho_book">
          <input type="hidden" name="am_no" id="am_no">
        </div>
        
        <div class="col-md-6 mt-0">
          <label for="form-label">Book_Name</label>
          <?php $co->fillCombo("select book_no, title from books where book_no order by book_no", "cbm_b_book_no_print", "Select Book"); ?>
        </div>

        <div class="col-md-6 mt-0">
          <label for="form-label">Qofka</label>
          <?php $co->fillCombo("select id, name from registration where id order by id", "cbm_b_id_print", "Select name"); ?>
        </div>

        <div class="col-md-6 mb-3">
          <label  class="form-label">meeqa_xabo</label>
          <input type="number" id="q_qty" class="form-control" name="q_qty" placeholder="Enter qty" />
        </div>

        <div class="col-md-6 mb-3">
          <label  class="form-label">qiimahoda</label>
          <input type="number" id="q_price" class="form-control" name="q_price" placeholder="qiimaha" />
        </div>

        <div class="col-md-6 mb-3">
          <label  class="form-label">first_date</label>
          <input type="date" id="q_first_date" class="form-control" name="q_first_date" placeholder="date first" />
        </div>

        <div class="col-md-6 mb-3">
          <label  class="form-label">last</label>
          <input type="date" id="q_last_date" class="form-control" name="q_last_date" placeholder="last date" />
        </div>

      </div>
    </form>
  </div>
  <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_qaadasho">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_qaadasho">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!-- end amaah -->

<!-- section 2 -->

<!-- expence -->
<div class="modal fade" id="mdl_expenses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Book Modal</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="expenses_alert"></div>
    <div class="modal-body">

     <form id="frm_expenses" class="">
      <div class="row">

        <div class="col-md-12">
          <input type="hidden" name="expence_proc" value="expence_proc">
          <input type="hidden" name="num" id="num">
        </div>
        
        <div class="col-md-6 mb-3">
          <label  class="form-label">Magaca-Qarashka</label>
          <input type="text" id="e_exp_name" class="form-control" name="e_exp_name" placeholder="Enter Magaca-buuga" />
        </div>

      </div>
    </form>
  </div>
  <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_expenses">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_expenses">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!-- end expence -->

<!-- expence-charge  -->
<div class="modal fade" id="mdl_expense_charge" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Book Modal</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="expense_charge_alert"></div>
    <div class="modal-body">

     <form id="frm_expense_charge" class="">
      <div class="row">

        <div class="col-md-12">
          <input type="hidden" name="expense_charge_p" value="expense_charge_p">
          <input type="hidden" name="ch_no" id="ch_no">
        </div>
        
        <div class="col-md-6 mt-0">
          <label for="form-label">Expence_Name</label>
          <?php $co->fillCombo("select exp_no, exp_name from expenses where exp_no order by exp_no", "cbm_b_exp_no_print", "Select expenses"); ?>
        </div>

        <div class="col-md-6 mb-3">
          <label  class="form-label">Amount</label>
          <input type="text" id="ec_amount" class="form-control" name="ec_amount" placeholder="Enter amount" />
        </div>

        <div class="col-md-6 mb-3">
          <label  class="form-label">faah-faahin</label>
          <input type="text" id="ec_description" class="form-control" name="ec_description" placeholder="Enter Faah-faahin" />
        </div>

      </div>
    </form>
  </div>
  <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_expense_charge">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_expense_charge">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!-- expence-charge  -->

<!-- charge -->

<!-- end charge -->
<!-- end section 2 -->


<!-- section 3 -->

<!-- purchase -->
<div class="modal fade" id="mdl_purchase" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">purchase Modal</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="purchase_alert"></div>
    <div class="modal-body">

     <form id="frm_purchase" class="">
      <div class="row">

        <div class="col-md-12">
          <input type="hidden" name="pur_proc" value="pur_proc">
          <input type="hidden" name="por_no" id="por_no">
        </div>
        <div class="col-md-6 mt-0">
          <label for="form-label">Book</label>
          <?php $co->fillCombo("select book_no, title from books where book_no order by book_no", "cbm_b_books_print", "Select books"); ?>
        </div>
        <div class="col-md-6 mb-3">
          <label  class="form-label">Quantity</label>
          <input type="text" id="p_Quantity" class="form-control" name="p_Quantity" placeholder="meeqa xabo" />
        </div>

        

        <div class="col-md-6 mb-3">
          <label  class="form-label">qiimaha</label>
          <input type="text" id="p_cost" class="form-control" name="p_cost" placeholder="Qiimaha" />
        </div>

        

        

        <div class="col-md-6 mb-3">
          <label  class="form-label">Discount</label>
          <input type="text" id="p_discount" class="form-control" name="p_discount" placeholder="Discount" />
        </div>

        
<div class="col-md-6 mb-3">
          <label  class="form-label">Taariikh</label>
          <input type="date" id="p_taariikh" class="form-control" name="p_taariikh" placeholder="Taariikh" />
        </div>


      </div>
    </form>
  </div>
  <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_purchase">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_purchase">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!-- end purchase -->

<!-- purchase-return -->
<div class="modal fade" id="mdl_purchase_return" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">purchase Modal</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="purchase_return_alert"></div>
    <div class="modal-body">

     <form id="frm_purchase_return" class="">
      <div class="row">

        <div class="col-md-12">
          <input type="hidden" name="pur_r_proc" value="pur_r_proc">
          <input type="hidden" name="pur_ret_no" id="pur_ret_no">
        </div>
        <div class="col-md-6 mt-0">
          <label for="form-label">Book</label>
          <?php $co->fillCombo("select book_no, title from books where book_no order by book_no", "cbm_b_books_print", "Select books"); ?>
        </div>
        <div class="col-md-6 mb-3">
          <label  class="form-label">Quantity</label>
          <input type="text" id="p_qty" class="form-control" name="p_qty" placeholder="meeqa xabo" />
        </div>

        <div class="col-md-6 mb-3">
          <label  class="form-label">Reason</label>
          <input type="text" id="p_reason" class="form-control" name="p_reason" placeholder="meeqa xabo" />
        </div>
        
<div class="col-md-6 mb-3">
          <label  class="form-label">Taariikh</label>
          <input type="date" id="p_return_Date" class="form-control" name="p_return_Date" placeholder="Taariikh" />
        </div>


      </div>
    </form>
  </div>
  <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_purchase_return">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_purchase_return">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!-- end  purchase-return-->

<!-- payments -->
<div class="modal fade" id="mdl_lacag_bixin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">payments Modal</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="lacag_bixin_alert"></div>
    <div class="modal-body">

     <form id="frm_lacag_bixin" class="">
      <div class="row">

        <div class="col-md-12">
          <input type="hidden" name="lacag_bixin_pro" value="lacag_bixin_pro">
          <input type="hidden" name="pay_no" id="pay_no">
        </div>
        <div class="col-md-6 mt-0">
          <label for="form-label">Book</label>
          <?php $co->fillCombo("select por_no,title from purchase  p,books b where b.book_no=p.book_no and por_no order by por_no", "cbm_b_purchase_print", "Select purchase"); ?>
        </div>
        <div class="col-md-6 mb-3">
          <label  class="form-label">Amount</label>
          <input type="text" id="p_amount" class="form-control" name="p_amount" placeholder="meeqa lacag" />
        </div>

        <div class="col-md-6 mt-0">
          <label for="form-label">Account</label>
          <?php $co->fillCombo("select acc_no,acc_name from account where  acc_no order by acc_no", "cbm_b_account_print", "Select account"); ?>
        </div>

        
        
<div class="col-md-6 mb-3">
          <label  class="form-label">Taariikh</label>
          <input type="date" id="p_pay_date" class="form-control" name="p_pay_date" placeholder="Taariikh" />
        </div>


      </div>
    </form>
  </div>
  <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_lacag_bixin">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_lacag_bixin">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!-- end payments -->
<!-- end section 3-->

<!-- section 4 -->
<!-- receipts -->
<div class="modal fade" id="mdl_qabasho" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Receipts Modal</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="qabasho_alert"></div>
    <div class="modal-body">

     <form id="frm_qabasho" class="">
      <div class="row">

        <div class="col-md-12">
          <input type="hidden" name="qab_proc" value="qab_proc">
          <input type="hidden" name="rec_no" id="rec_no">
        </div>
         <div class="col-md-6 mt-0">
          <label for="form-label">name-of-person</label>
          <?php $co->fillCombo("select ch_no,name from registration r,dalacaad d,qaadasho q where r.id=q.id and q.am_no=d.am_no  and ch_no order by ch_no", "cbm_b_ch_no_print", "Select charge"); ?>
        </div>
        
        <div class="col-md-6 mb-3">
          <label  class="form-label">Amount</label>
          <input type="number" minlength="0"  id="q_Amount" class="form-control" name="q_Amount" placeholder="Enter amount" />
        </div>

        
<div class="col-md-6 mt-0">
          <label for="form-label">Account</label>
          <?php $co->fillCombo("select acc_no,acc_name from account  where  acc_no order by acc_no", "cbm_b_acc_no_print", "Select account"); ?>
        </div>
       

        

        <div class="col-md-6 mb-3">
          <label  class="form-label">date-receipt</label>
          <input type="date" id="q_rec_date" class="form-control" name="q_rec_date" placeholder="Date" />
        </div>


        



      </div>
    </form>
  </div>
  <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_qabasho">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_qabasho">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>

<!-- end receipts -->
<!-- end section 4 -->

<!-- charges -->
<div class="modal fade" id="mdl_dalacaad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">charge Modal</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="dalacaad_alert"></div>
    <div class="modal-body">

     <form id="frm_dalacaad" class="">
      <div class="row">

        <div class="col-md-12">
          <input type="hidden" name="dl_proc" value="dl_proc">
          <input type="hidden" name="num" id="num">
        </div>
         <div class="col-md-6 mt-0">
          <label for="form-label">name-of-person</label>
          <?php $co->fillCombo("select am_no, name from registration r,qaadasho q where r.id=q.id and am_no order by am_no", "cbm_b_am_no_print", "Select qaadasho"); ?>
        </div>

        <div class="col-md-6 mt-0">
          <label for="form-label">lacagta-ganaaxa</label>
          <?php $co->fillCombo("select week_no, concat(week_name,', ',price)charged from weeklly_charged WHERE week_no order by week_no", "cbm_b_week_no_print", "Select weakly_charged"); ?>
        </div>
        
        <div class="col-md-6 mb-3">
          <label  class="form-label">taariikhda</label>
          <input type="date" id="ch_date_charge" class="form-control" name="ch_date_charge" placeholder="Enter taariikh" />
        </div>


      </div>
    </form>
  </div>
  <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_dalacaad">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_dalacaad">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!-- end charge -->
<!-- users -->
<div class="modal fade" id="mdl_users" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Users Modal</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="users_alert"></div>
    <div class="modal-body">

     <form id="frm_users" class="">
      <div class="row">

        <div class="col-md-12">
          <input type="hidden" name="user_proc" value="user_proc">
          <input type="hidden" name="id" id="id">
        </div>
         
        
        <div class="col-md-6 mb-3">
          <label  class="form-label">user-name</label>
          <input type="text" id="u_username" class="form-control" name="u_username" placeholder="Enter user-name" />
        </div>

        

       

        

        <div class="col-md-6 mb-3">
          <label  class="form-label">password</label>
          <input type="password" minlength="8" id="u_password" class="form-control" name="u_password" placeholder="******" />
        </div>
<div class="col-md-6 mb-3">
          <label  class="form-label">E-mail</label>
          <input type="text" id="u_email" class="form-control" name="u_email" placeholder="@gmail.com" />
        </div>

        

<div class="col-md-6 mt-0">
          <label for="form-label">user-type</label>
          <?php $co->fillCombo("select user_id, type from user_type u where  user_id order by user_id", "cbm_b_user_id_print", "Select user_type"); ?>
        </div>

      </div>
    </form>
  </div>
  <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_users">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_users">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!-- end user -->

<!-- ep -->
<!-- <div class="modal fade" id="mdl_expence_payment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">payments Modal</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="expence_payment_alert"></div>
    <div class="modal-body">

     <form id="frm_expence_payment" class="">
      <div class="row">

        <div class="col-md-12">
          <input type="hidden" name="expence_payment" value="expence_payment">
          <input type="hidden" name="num" id="num">
        </div>
        <div class="col-md-6 mt-0">
          <label for="form-label">expence_charge_name</label>
          <?php $co->fillCombo("select ch_no,exp_name from expenses  e, expense_charge ep where e.exp_no=ep.exp_no and ch_no order by ch_no", "cbm_b_exp_no_print", "Select expence"); ?>
        </div>
        <div class="col-md-6 mb-3">
          <label  class="form-label">Amount</label>
          <input type="text" id="ep_amount" class="form-control" name="ep_amount" placeholder="meeqa lacag" />
        </div>

        <div class="col-md-6 mt-0">
          <label for="form-label">Account</label>
          <?php $co->fillCombo("select acc_no,acc_name from account where  acc_no order by acc_no", "cbm_b_acc_no_print", "Select account"); ?>
        </div>

        
        
<div class="col-md-6 mb-3">
          <label  class="form-label">Taariikh</label>
          <input type="date" id="ex_pay_date" class="form-control" name="ex_pay_date" placeholder="Taariikh" />
        </div>


      </div>
    </form>
  </div>
  <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_expence_payment">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_expence_payment">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div> -->

<!-- end ep -->



