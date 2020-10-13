jQuery("#wpmonitorDasboard li a").click(function(){
   var click =  jQuery(this);
   var id = click.attr('id');

    
    if(id === 'monedas'){
        console.log('estoy en monedas')
        click.addClass('current');

    }else {
        jQuery("#monedas").removeClass("current")
   
    }
    if(id === 'setting'){
        console.log('estoy en setting')
        click.addClass('current');

    }else {
        jQuery("#setting").removeClass("current")
    }
    if(id === 'cambios'){
        console.log('estoy en cambios')
        jQuery("#changewpmonitor").removeClass("hidden")
        
        click.addClass('current');

    }else {
        jQuery("#cambios").removeClass("current")
        jQuery("#changewpmonitor").addClass("hidden")
    }
    if(id === 'registro'){
        console.log('estoy en registro')
        jQuery("#selectregistro").css("display", "block")
        click.addClass('current');
        jQuery("#selectregistro").removeClass("hidden")

    }else {
        jQuery("#registro").removeClass("current")
    
        jQuery("#selectregistro").addClass("hidden");
    }
    if(id === 'Api'){
        console.log('estoy en Api')
        click.addClass('current');
        
    }else {
        jQuery("#Api").removeClass("current")
    }
    // console.log(href)
})


jQuery("#wpmonitorClose").click(function(){
 
    jQuery('.chageWpmonitor').removeClass('hidden');
    jQuery('#chageWpmonitor').addClass('hidden');
})

jQuery(".chageWpmonitor").click(function(){
 
    jQuery('#chageWpmonitor').removeClass('hidden');
    jQuery('.chageWpmonitor').addClass('hidden');
})