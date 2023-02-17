$(function(){

    $("#countactForm input, #contactForm textarea").jqBootstrapValidation({
        preventSubmit : true,
        submitError : function ($form, event, errors){
            //additional error messages or events
        },
        submitSuccess:function($form, event) {}