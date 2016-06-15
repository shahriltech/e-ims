$(function(){
    if($('#indexReceiveorder').hasClass('ims-receive-product/index')){
        $('li#inventory').addClass('active');
        $('li > a > span').addClass('open');
        $('li > ul > li#product').addClass('active');

    }

    // menu inventory/order
    if($('#neworder').hasClass('ims-purchase-order/neworder')){
        $('li#inventoryManagement').addClass('active');
        $('li#inventoryManagement > a > span').addClass('open');
        $('li > ul > li#order').addClass('active');

    }
    if($('#invoice1').hasClass('ims-purchase-order/invoice_1')){
        $('li#inventoryManagement').addClass('active');
        $('li#inventoryManagement > a > span').addClass('open');
        $('li > ul > li#order').addClass('active');

    }

    if($('#purchaseCreate').hasClass('ims-purchase-order/create')){
        $('li#inventoryManagement').addClass('active');
        $('li#inventoryManagement > a > span').addClass('open');
        $('li > ul > li#order').addClass('active'); //KIV

    }
    if($('#AdminpurchaseCreate').hasClass('ims-purchase-order/adminorder')){
        $('li#inventoryManagement').addClass('active');
        $('li#inventoryManagement > a > span').addClass('open');
        $('li > ul > li#order').addClass('active'); //KIV

    }
    if($('#adminorderconfirm').hasClass('ims-purchase-order/adminconfirmorder')){
        $('li#inventoryManagement').addClass('active');
        $('li#inventoryManagement > a > span').addClass('open');
        $('li > ul > li#order').addClass('active'); //KIV

    }

    if($('#historyorderlist').hasClass('ims-purchase-order/historyorder')){
        $('li#inventoryManagement').addClass('active');
        $('li#inventoryManagement > a > span').addClass('open');
        $('li > ul > li#historyorder').addClass('active');
    }

    if($('#historyinvoice').hasClass('ims-purchase-order/history_invoice')){
        $('li#inventoryManagement').addClass('active');
        $('li#inventoryManagement > a > span').addClass('open');
        $('li > ul > li#historyorder').addClass('active');
    }

    // menu inventory/management (employee page)
    if($('#inventoryMenu').hasClass('ims-product/menubox')){
        $('li#inventory').addClass('active');
        $('li > a > span').addClass('open');
        $('li > ul > li#product').addClass('active');
    } 
    if($('#purchaseCreate').hasClass('ims-purchase-order/create')){
        $('li#inventory').addClass('active');
        $('li#inventory > a > span').addClass('open');
        $('li > ul > li#product').addClass('active'); //KIV

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
    
    if($('#invoice').hasClass('ims-purchase-order/invoice')){
        $('li#inventory').addClass('active');
        $('li > a > span').addClass('open');
        $('li > ul > li#product').addClass('active');

    }

    if($('#invoice').hasClass('ims-purchase-order/invoice')){
        $('li#inventoryManagement').addClass('active');
        $('li > a > span').addClass('open');
        $('li > ul > li#order').addClass('active');

    }
    // menu inventory/product
    if($('#indexsproduct').hasClass('ims-product/index')){
        $('li#inventoryManagement').addClass('active');
        $('li#inventoryManagement > a > span').addClass('open');
        $('li > ul > li#prodStorage').addClass('active');
    }
	 if($('#productUpdate').hasClass('ims-product/update')){
		$('li#inventoryManagement').addClass('active');
        $('li#inventoryManagement > a > span').addClass('open');
        $('li > ul > li#prodStorage').addClass('active');

    }
    if($('#productCreate').hasClass('ims-product/create')){
        $('li#inventoryManagement').addClass('active');
        $('li#inventoryManagement > a > span').addClass('open');
        $('li > ul > li#prodStorage').addClass('active');
    }
    if($('#productView').hasClass('ims-product/view')){
        $('li#inventoryManagement').addClass('active');
        $('li#inventoryManagement > a > span').addClass('open');
        $('li > ul > li#prodStorage').addClass('active');
    }
    
    // menu setting/user
    if($('#indexsuser').hasClass('ims-user/index')){
        $('li#setting').addClass('active');
        $('li#setting > a > span').addClass('open');
        $('li > ul > li#user').addClass('active');
    }
    if($('#userView').hasClass('ims-user/view')){
		$('li#setting').addClass('active');
        $('li#setting > a > span').addClass('open');
       	$('li > ul > li#user').addClass('active');
    }
    if($('#userCreate').hasClass('ims-user/create')){
        $('li#setting').addClass('active');
        $('li#setting > a > span').addClass('open');
        $('li > ul > li#user').addClass('active');
    }
    if($('#userUpdate').hasClass('ims-user/update')){
		$('li#setting').addClass('active');
        $('li#setting > a > span').addClass('open');
       	$('li > ul > li#user').addClass('active');
    }
    // menu setting/category
    if($('#indexscategory').hasClass('ims-category/index')){
        $('li#setting').addClass('active');
        $('li#setting > a > span').addClass('open');
        $('li > ul > li#category').addClass('active');
    }
    if($('#categoryUpdate').hasClass('ims-category/update')){
        $('li#setting').addClass('active');
        $('li#setting > a > span').addClass('open');
        $('li > ul > li#category').addClass('active');
    }
    if($('#categoryCreate').hasClass('ims-category/create')){
        $('li#setting').addClass('active');
        $('li#setting > a > span').addClass('open');
        $('li > ul > li#category').addClass('active');
    }
    if($('#categoryView').hasClass('ims-category/view')){
        $('li#setting').addClass('active');
        $('li#setting > a > span').addClass('open');
        $('li > ul > li#category').addClass('active');
    }
    // menu setting/supplier
    if($('#supplierUpdate').hasClass('ims-supplier/update')){
		$('li#setting').addClass('active');
        $('li#setting > a > span').addClass('open');
       	$('li > ul > li#supplier').addClass('active');
    }
    if($('#supplierView').hasClass('ims-supplier/view')){
		$('li#setting').addClass('active');
        $('li#setting > a > span').addClass('open');
       	$('li > ul > li#supplier').addClass('active');
    }
    if($('#supplyCreate').hasClass('ims-supplier/create')){
        $('li#setting').addClass('active');
        $('li#setting > a > span').addClass('open');
        $('li > ul > li#supplier').addClass('active');
    }

    if($('#indexsupply').hasClass('ims-supplier/index')){
        $('li#setting').addClass('active');
        $('li#setting > a > span').addClass('open');
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





