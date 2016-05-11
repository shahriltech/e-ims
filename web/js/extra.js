$(function(){
    if($('#indexReceiveorder').hasClass('ims-receive-product/index')){
        $('li#inventory').addClass('active');
        $('li > a > span').addClass('open');
        $('li > ul > li#product').addClass('active');

    }
    if($('#historyOrder').hasClass('ims-purchase-order/index')){
        $('li#inventory').addClass('active');
        $('li > a > span').addClass('open');
        $('li > ul > li#product').addClass('active');

    }

    if($('#receiveCreate').hasClass('ims-receive-product/create')){
        $('li#inventory').addClass('active');
        $('li > a > span').addClass('open');
        $('li > ul > li#product').addClass('active');

    }
    if($('#purchaseCreate').hasClass('ims-purchase-order/create')){
        $('li#inventory').addClass('active');
        $('li > a > span').addClass('open');
        $('li > ul > li#product').addClass('active');

    }
    if($('#invoice').hasClass('ims-purchase-order/invoice')){
        $('li#inventory').addClass('active');
        $('li > a > span').addClass('open');
        $('li > ul > li#product').addClass('active');

    }
	 if($('#productUpdate').hasClass('ims-product/update')){
		$('li#inventory').addClass('active');
        $('li > ul > li#product').addClass('active');

    }
    if($('#productCreate').hasClass('ims-product/create')){
    $('li#inventory').addClass('active');
        $('li > ul > li#product').addClass('active');
    }
    if($('#inventoryMenu').hasClass('ims-product/menubox')){
        $('li#inventory').addClass('active');
        $('li > a > span').addClass('open');
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

    
    $("#addmorewife").click(function(){
        var clone = $("#wife").clone();
        clone.find("input[type=text]").val("");
        clone.appendTo(".adddivwife");
        $('div#del').not(':first').show();
        $('.horizontal').not(':first').show(500);
        
    });

    $(".adddivwife").on("click", "#remove", function(e) {
        e.preventDefault();
        $(this).fadeOut("slow", function(){ 
            $(this).closest("#wife").remove();
            $(this).closest(".horizontal").remove();  
        });
    });

//add item purchase order
    $("#addmoreorder").click(function(){
        var clone = $("#itemorder").clone();
        clone.find("input[type=text]").val("");
        clone.appendTo(".adddivorder");
        $('div#del').not(':first').show();
        $('.horizontal').not(':first').show(500);
        
    });

    $(".adddivorder").on("click", "#removeorder", function(e) {
        e.preventDefault();
        $(this).fadeOut("slow", function(){ 
            $(this).closest("#itemorder").remove();
            $(this).closest(".horizontal").remove();  
        });
    });
    
    $(".date-picker").datepicker(); //date
    $('.modalInvoiceedititem').click(function (){ //modal UI
        jQuery('#updateItem').modal('show')
            .find('#modalC')
            .load($(this).attr('value'));
    });
    $('.modalInvoicedeleteitem').click(function (){ //modal UI
        jQuery('#deleteItem').modal('show')
            .find('#modaldelete')
            .load($(this).attr('value'));
    });
});





