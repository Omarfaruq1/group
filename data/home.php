<div class="tab-pane fade show active" id="dash" >
  <div class="row ">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="card">
        <div class="card-statistic-4">
          <div class="align-items-center justify-content-between">
            <div class="row ">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                  <h5 class="font-15">Books</h5>
                  <h2 class="mb-3 font-18"><?php total(); ?></h2>
                  <p class="mb-0"><span class="col-green">10%</span> Increase</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                <div class="banner-img">
                  <img src="assets/img/banner/b11.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="card">
        <div class="card-statistic-4">
          <div class="align-items-center justify-content-between">
            <div class="row ">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                  <h5 class="font-15"> Amaah</h5>
                  <h2 class="mb-3 font-18"><?php sum() ?></h2>
                  <p class="mb-0"><span class="col-orange">09%</span> Decrease</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                <div class="banner-img">
                  <img src="assets/img/banner/b2.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="card">
        <div class="card-statistic-4">
          <div class="align-items-center justify-content-between">
            <div class="row ">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                  <h5 class="font-15">Receipts</h5>
                  <h2 class="mb-3 font-18">$ <?php sum1() ?></h2>
                  <p class="mb-0"><span class="col-green">18%</span>
                  Increase</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                <div class="banner-img">
                  <img src="assets/img/banner/b33.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="card">
        <div class="card-statistic-4">
          <div class="align-items-center justify-content-between">
            <div class="row ">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                  <h5 class="font-15">Users</h5>
                  <h2 class="mb-3 font-18"><?php sum2() ?></h2>
                  <p class="mb-0"><span class="col-green">42%</span> Increase</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                <div class="banner-img">
                  <img src="assets/img/banner/b4.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="tab-pane fade" id="b" role="tabpanel" aria-labelledby="profile-tab">
 <div class="col-12 col-sm-6 col-lg-12">
  <div class="card">
    <div class="card-header">
      <h4>Address Table</h4>
    </div>
    <div class="card-body">
     <!--  <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
          aria-controls="home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
          aria-controls="profile" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
          aria-controls="contact" aria-selected="false">Contact</a>
        </li>
      </ul> -->
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <button type="button" class="btn btn-primary mb-2 btn_new_address" data-toggle="modal" data-target="#mdl_address">Add New
          </button>
        </div>

        <div class="col-md-12">
          <div id="tbl_id_address" class="tbl_cls_address">
            <?php $co->Table("call address_view()","dt_address","n") ?>
          </div>
        </div>

        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          Sed sed metus vel lacus hendrerit tempus. Sed efficitur velit tortor, ac efficitur est lobortis
          quis. Nullam lacinia metus erat, sed fermentum justo rutrum ultrices. Proin quis iaculis tellus.
          Etiam ac vehicula eros, pharetra consectetur dui. Aliquam convallis neque eget tellus efficitur,
          eget maximus massa imperdiet. Morbi a mattis velit. Donec hendrerit venenatis justo, eget
          scelerisque tellus pharetra a.
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          Vestibulum imperdiet odio sed neque ultricies, ut dapibus mi maximus. Proin ligula massa,
          gravida in lacinia efficitur, hendrerit eget mauris. Pellentesque fermentum, sem interdum
          molestie finibus, nulla diam varius leo, nec varius lectus elit id dolor. Nam malesuada orci non
          ornare vulputate. Ut ut sollicitudin magna. Vestibulum eget ligula ut ipsum venenatis ultrices.
          Proin bibendum bibendum augue ut luctus.
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- people -->
<div class="tab-pane fade" id="people" role="tabpanel" aria-labelledby="contact-tab">
  <button type="button" class="btn btn-primary mb-2 btn_new_registration" data-toggle="modal" data-target="#mdl_registration">Add New
  </button>


  <div class="col-md-12">
    <div id="tbl_id_registration" class="tbl_cls_registration">
      <?php $co->Table("call registration_view()","dt_registration","n") ?>
    </div>
  </div>
</div>
<!-- end people -->

<!-- Address -->
<div class="tab-pane fade" id="Ad" role="tabpanel" aria-labelledby="contact-tab">
  <button type="button" class="btn btn-primary mb-2 btn_new_address" data-toggle="modal" data-target="#mdl_address">Add New
  </button>


  <div class="col-md-12">
    <div id="tbl_id_address" class="tbl_cls_address">
      <?php $co->Table("call address_view()","dt_address","n") ?>
    </div>
  </div>
</div>
<!-- end Address -->

<!-- Account -->
<div class="tab-pane fade" id="Ac" role="tabpanel" aria-labelledby="contact-tab">
  <button type="button" class="btn btn-primary mb-2 btn_new_account" data-toggle="modal" data-target="#mdl_account">Add New
  </button>


  <div class="col-md-12">
    <div id="tbl_id_account" class="tbl_cls_account">
      <?php $co->Table("call account_view()","dt_account","n") ?>
    </div>
  </div>
</div>
<!-- end Account -->

<!-- category -->

<div class="tab-pane fade" id="cat" role="tabpanel" aria-labelledby="contact-tab">
  <button type="button" class="btn btn-primary mb-2 btn_new_catagories" data-toggle="modal" data-target="#mdl_catagories">Add New
  </button>



  <div class="col-md-12">
    <div id="tbl_id_catagories" class="tbl_cls_catagories">
      <?php $co->Table("call category_view()","dt_catagories","n") ?>
    </div>
  </div>
</div>
<!-- end category -->


<!-- Author -->

<div class="tab-pane fade" id="Au" role="tabpanel" aria-labelledby="contact-tab">
  <button type="button" class="btn btn-primary mb-2 btn_new_author" data-toggle="modal" data-target="#mdl_author">Add New
  </button>



  <div class="col-md-12">
    <div id="tbl_id_author" class="tbl_cls_author">
      <?php $co->Table("call author_view()","dt_author","n") ?>
    </div>
  </div>
</div>

<!-- End Author -->

<!-- books -->
<div class="tab-pane fade" id="book" role="tabpanel" aria-labelledby="contact-tab">
  <button type="button" class="btn btn-primary mb-2 btn_new_books" data-toggle="modal" data-target="#mdl_books">Add New
  </button>



  <div class="col-md-12">
    <div id="tbl_id_books" class="tbl_cls_books">
      <?php $co->Table("call book_view()","dt_books","n") ?>
    </div>
  </div>
</div>
<!-- end books -->
<!-- amaah -->
<div class="tab-pane fade" id="am" role="tabpanel" aria-labelledby="contact-tab">
  <button type="button" class="btn btn-primary mb-2 btn_new_qaadasho" data-toggle="modal" data-target="#mdl_qaadasho">Add New
  </button>



  <div class="col-md-12">
    <div id="tbl_id_qaadasho" class="tbl_cls_qaadasho">
      <?php $co->Table("call qaadasho_vw()","dt_qaadasho","n") ?>
    </div>
  </div>
</div>
<!-- end amaah -->
<!-- start section 2 -->


<!-- expence -->
<div class="tab-pane fade" id="Ex" role="tabpanel" aria-labelledby="contact-tab">
  <button type="button" class="btn btn-primary mb-2 btn_new_expenses" data-toggle="modal" data-target="#mdl_expenses">Add New
  </button>



  <div class="col-md-12">
    <div id="tbl_id_expenses" class="tbl_cls_expenses">
      <?php $co->Table("call expenses_view()","dt_expenses","n") ?>
    </div>
  </div>
</div>
<!-- end expence -->


<!-- expense_charge -->

<div class="tab-pane fade" id="ex" role="tabpanel" aria-labelledby="contact-tab">
  <button type="button" class="btn btn-primary mb-2 btn_new_expense_charge" data-toggle="modal" data-target="#mdl_expense_charge">Add New
  </button>



  <div class="col-md-12">
    <div id="tbl_id_expense_charge" class="tbl_cls_expense_charge">
      <?php $co->Table("call expense_charge_view()","dt_expense_charge","n") ?>
    </div>
  </div>
</div>

<!-- end expense_charge_ -->

<!-- charge -->
<div class="tab-pane fade" id="ch" role="tabpanel" aria-labelledby="contact-tab">
  <button type="button" class="btn btn-primary mb-2 btn_new_dalacaad" data-toggle="modal" data-target="#mdl_dalacaad">Add New
  </button>



  <div class="col-md-12">
    <div id="tbl_id_dalacaad" class="tbl_cls_dalacaad">
      <?php $co->Table("call dalaacad_view()","dt_dalacaad","n") ?>
    </div>
  </div>
</div>

<!-- end charge -->
<!-- end section 2 -->

<!-- section 3 -->
<!-- purchase -->
<div class="tab-pane fade" id="pur" role="tabpanel" aria-labelledby="contact-tab">

  <button type="button" class="btn btn-primary mb-2 btn_new_purchase" data-toggle="modal" data-target="#mdl_purchase">Add New
  </button>



  <div class="col-md-12">
    <div id="tbl_id_purchase" class="tbl_cls_purchase">
      <?php $co->Table("call purchase_view()","dt_purchase","n") ?>
    </div>
  </div>

</div>
<!-- end purche -->

<!-- purchase_return -->
<div class="tab-pane fade" id="pr" role="tabpanel" aria-labelledby="contact-tab">

  <button type="button" class="btn btn-primary mb-2 btn_new_purchase_return" data-toggle="modal" data-target="#mdl_purchase_return">Add New
  </button>



  <div class="col-md-12">
    <div id="tbl_id_purchase_return" class="tbl_cls_purchase_return">
      <?php $co->Table("call pr_view()","dt_purchase_return","n") ?>
    </div>
  </div>

</div>
<!-- end purchase_return -->


<!-- payments -->

<div class="tab-pane fade" id="py" role="tabpanel" aria-labelledby="contact-tab">

  <button type="button" class="btn btn-primary mb-2 btn_new_lacag_bixin" data-toggle="modal" data-target="#mdl_lacag_bixin">Add New
  </button>



  <div class="col-md-12">
    <div id="tbl_id_lacag_bixin" class="tbl_cls_lacag_bixin">
      <?php $co->Table("call lacag_view()","dt_lacag_bixin","n") ?>
    </div>
  </div>

</div>

<!-- end payments -->

<!-- ep -->
<!-- <div class="tab-pane fade" id="ep" role="tabpanel" aria-labelledby="contact-tab">

  <button type="button" class="btn btn-primary mb-2 btn_new_expence_payment" data-toggle="modal" data-target="#mdl_expence_payment">Add New
  </button>



  <div class="col-md-12">
    <div id="tbl_id_expence_payment" class="tbl_cls_expence_payment">
      
    </div>
  </div>

</div> 

<!-- end ep -->

<!-- end section 3-->


<!-- section 4 -->
<!-- receipts -->
<div class="tab-pane fade" id="r" role="tabpanel" aria-labelledby="contact-tab">

  <button type="button" class="btn btn-primary mb-2 btn_new_qabasho" data-toggle="modal" data-target="#mdl_qabasho">Add New
  </button>



  <div class="col-md-12">
    <div id="tbl_id_qabasho" class="tbl_cls_qabasho">
      <?php $co->Table("call qabasho_views()","dt_qabasho","n") ?>
    </div>
  </div>

</div>

<!-- receipts -->

<!-- all users -->
<div class="tab-pane fade" id="user" role="tabpanel" aria-labelledby="contact-tab">

  <button type="button" class="btn btn-primary mb-2 btn_new_users" data-toggle="modal" data-target="#mdl_users">Add New
  </button>



  <div class="col-md-12">
    <div id="tbl_id_users" class="tbl_cls_users">
      <?php $co->Table("call user_view1()","dt_users","n") ?>
    </div>
  </div>

</div>


<!-- all users -->
<!-- end section 4 -->


<!-- report -->
<!-- all books -->
<div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="contact-tab">

  <div class="col-md-6">

    <button class="btn btn-sm btn-primary btn_all_book">Books All</button>

  </div>

</div>
<!-- end books -->
<!-- amaah-books -->
<div class="tab-pane fade" id="ar" role="tabpanel" aria-labelledby="contact-tab">

  <div class="col-md-6">

    <button class="btn btn-sm btn-primary btn_amaah_all">Amaah Books</button>

  </div>


</div>
<!-- end amaah-books -->

<!-- inventory -->
<div class="tab-pane fade" id="in" role="tabpanel" aria-labelledby="contact-tab">

  <div class="col-md-6">

    <button class="btn btn-sm btn-primary btn_inventory_all">Inventory Books</button>

  </div>


</div>
<!-- end inventory -->

<!-- net -->
<div class="tab-pane fade" id="net" role="tabpanel" aria-labelledby="contact-tab">

  <div class="col-md-6">

    <button class="btn btn-sm btn-primary btn_net_all">net-income</button>

  </div>


</div>
<!-- end net -->
<!-- end report -->
