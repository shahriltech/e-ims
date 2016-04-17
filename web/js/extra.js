$(function(){
	 if($('#productUpdate').hasClass('ims-product/update')){
		//$('ul li#product').addClass('active');
       	$('li#product').addClass('active');
    }
    if($('#productCreate').hasClass('ims-product/create')){
    $('li#inventory').addClass('active');
        $('li > ul > li#product').addClass('active');
    }
    if($('#categoryUpdate').hasClass('ims-category/update')){
		$('li#setting').addClass('active');
       	$('li > ul > li#category').addClass('active');
    }
    if($('#categoryCreate').hasClass('ims-category/create')){
    $('li#setting').addClass('active');
        $('li > ul > li#category').addClass('active');
    }
    if($('#categoryView').hasClass('ims-category/view')){
		$('li#setting').addClass('active');
       	$('li > ul > li#category').addClass('active');
    }
    if($('#userView').hasClass('ims-user/view')){
		$('li#setting').addClass('active');
       	$('li > ul > li#user').addClass('active');
    }
    if($('#userCreate').hasClass('ims-user/create')){
    $('li#setting').addClass('active');
        $('li > ul > li#user').addClass('active');
    }
    if($('#userUpdate').hasClass('ims-user/update')){
		$('li#setting').addClass('active');
       	$('li > ul > li#user').addClass('active');
    }
    if($('#supplierUpdate').hasClass('ims-supplier/update')){
		$('li#setting').addClass('active');
       	$('li > ul > li#supplier').addClass('active');
    }
    if($('#supplierView').hasClass('ims-supplier/view')){
		$('li#setting').addClass('active');
       	$('li > ul > li#supplier').addClass('active');
    }
    if($('#supplyCreate').hasClass('ims-supplier/create')){
      $('li#setting').addClass('active');
          $('li > ul > li#supplier').addClass('active');
    }
});