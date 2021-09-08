function formatValue(value) {
	var property_value = value;
	if(property_value!='') {
		property_value = property_value.replace(/[$,]/g, '');
		property_value = parseFloat(property_value);
	}
	else property_value = 0;	
	
    return formatNum( property_value );
}

function formatNum(str) {
	var num = '$'+str.toLocaleString();
	return num;
}

function co_same_as() {
    if( $("#co_same_as").prop("checked") ) {
        $('#co_street_number').val( $('#street_number').val() );
        $('#co_unit').val( $('#unit').val() );
        $('#co_street_name').val( $('#street_name').val() );
        $('#co_city').val( $('#city').val() );
        $('#co_province').val( $('#province').val() );
        $('#co_postal_code').val( $('#postal_code').val() );
    }
    else {
        $('#co_street_number, #co_unit, #co_street_name, #co_city, #co_province, #co_postal_code').val( '' );
    }
}

function same_as() {
    if( $("#same_as").prop("checked") ) {
        $('#property_street_number').val( $('#street_number').val() );
        $('#property_unit').val( $('#unit').val() );
        $('#property_street_name').val( $('#street_name').val() );
        $('#property_city').val( $('#city').val() );
        $('#property_province').val( $('#province').val() );
        $('#property_postal_code').val( $('#postal_code').val() );
    }
    else {
        $('#property_street_number, #property_unit, #property_street_name, #property_city, #property_province, #property_postal_code').val( '' );
    }
}

$(function() {

    // var data = $('#login-form').serialize();
    // $.ajax({
    //     url: "http://localhost/jindal/admin/login",
    //     method: 'post',
    //     data: data,
    //     success: function(data){
    //         console.log(data); 
    //         //return false;
    //         window.location.href = 'http://localhost/jindal/admin/';
    //     }
    // });

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');
            allPrevBtn = $('.prevBtn');

    allWells.hide();

    var application_type = $('#application_type').val();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allPrevBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");
            //nextStepWizard.removeAttr('disabled').trigger('click');

        if(application_type=='Eazy-Application') {
            if(curStepBtn=='step-7' && $("#radio7").prop("checked") ) {
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().prev().prev().children("a");
            }
        } else if(application_type=='Full-Application') {

            var applicant_time_at_residence_year = $('#applicant_time_at_residence_year').val();
            var co_applicant_time_at_residence_year = $('#co_applicant_time_at_residence_year').val();
            console.log(curStepBtn);
            
            if( curStepBtn=='step-3' && parseInt(applicant_time_at_residence_year) > 3 ) {
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().prev().children("a"); 
            }
            else if ( curStepBtn=='step-6' && $("#is_co_applicant1").prop("checked") ) {
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().prev().prev().children("a");
            }
            else if( curStepBtn=='step-6' && parseInt(co_applicant_time_at_residence_year) > 3 ) {
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().prev().children("a"); 
            }
            else if( curStepBtn=='step-8' && $("#is_co_applicant1").prop("checked") ) {
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().prev().children("a"); 
            }
        }
        
        nextStepWizard.removeAttr('disabled').trigger('click');
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='number'],input[type='date'],input[type='email'],input[type='radio'],select"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        $('html,body').animate({scrollTop: 0 }, 1000);
        
        if(application_type=='Eazy-Application') {
            co_same_as(); same_as();

            if(isValid && curStepBtn=='step-4' && $("#radio7").prop("checked")) {
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().next().next().children("a");
            }
        }
        else if(application_type=='Full-Application') {

            var applicant_time_at_residence_year = $('#applicant_time_at_residence_year').val();
            var co_applicant_time_at_residence_year = $('#co_applicant_time_at_residence_year').val();
            console.log(curStepBtn);
            
            if( curStepBtn=='step-1' && parseInt(applicant_time_at_residence_year) > 3 ) {
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().next().children("a"); 
            }
            else if ( curStepBtn=='step-3' && $("#is_co_applicant1").prop("checked") ) {
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().next().next().children("a");
            }
            else if( curStepBtn=='step-4' && parseInt(co_applicant_time_at_residence_year) > 3 ) {
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().next().children("a"); 
            }
            else if( curStepBtn=='step-6' && $("#is_co_applicant1").prop("checked") ) {
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().next().children("a"); 
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');

            
    });

    $("#co_same_as").click(function(){  co_same_as();   });
    $("#same_as").click(function(){ same_as(); });

    $('div.setup-panel div a.btn-primary').trigger('click');

    $('.apply_now').click(function(){
        $('.loading').show();
        var the = $(this);
        var data = $('#application_form').serialize();
        $.ajax({
            url: "http://localhost/jindal/eazy-application-form",
            method: 'post',
            data: data,
            success: function(data){
                //console.log(data);
                if(data.status=='Success') {
                    $('.alert-danger').hide();
                    $('.message').html('<div class="alert alert-success">'+data.message+'</div>');
                    $('#login_email').val(data.email);
                    $('#login_password').val(data.password);
                    //$('#login-form').submit();
                    //window.location.href = 'http://localhost/jindal/admin/';
                    var data = $('#login-form').serialize();
                    $.ajax({
                        url: "http://localhost/jindal/admin/login",
                        method: 'post',
                        data: data,
                        success: function(data){
                            console.log(data); 
                            //return false;
                            window.location.href = 'http://localhost/jindal/admin/';
                        }
                    });
                }
                else if(data.status=='Error') {
                    $('.alert-danger').html(data.message).show();
                    $('html,body').animate({scrollTop: 0 }, 1000);
                }
                else {
                    $('html,body').animate({scrollTop: 0 }, 1000);
                    $('.alert-danger').html('').show();
                    $.each(data.errors, function(key, value){
                        $('.alert-danger').append('<li>'+value+'</li>');
                    });
                }
                $('.loading').hide();
            }
        });
    });

    $('.full_apply_now').click(function(){
        $('.loading').show();
        var the = $(this);
        var data = $('#application_form').serialize();
        $.ajax({
            url: "http://localhost/jindal/full-application-form",
            method: 'post',
            data: data,
            success: function(data){
                console.log(data);
                if(data.status=='Success') {
                    $('.alert-danger').hide();
                    $('.message').html('<div class="alert alert-success">'+data.message+'</div>');
                    $('#login_email').val(data.email);
                    $('#login_password').val(data.password);
                    //$('#login-form').submit();
                    //window.location.href = 'http://localhost/jindal/admin/';
                    var data = $('#login-form').serialize();
                    $.ajax({
                        url: "http://localhost/jindal/admin/login",
                        method: 'post',
                        data: data,
                        success: function(data){
                            console.log(data); 
                            //return false;
                            window.location.href = 'http://localhost/jindal/admin/';
                        }
                    });
                }
                else if(data.status=='Error') {
                    $('.alert-danger').html(data.message).show();
                    $('html,body').animate({scrollTop: 0 }, 1000);
                }
                else {
                    $('.alert-danger').html('').show();
                    $.each(data.errors, function(key, value){
                        $('.alert-danger').append('<li>'+value+'</li>');
                    });
                    $('html,body').animate({scrollTop: 0 }, 1000);
                }
                $('.loading').hide();
            }
        });
    });
});