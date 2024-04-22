<?php
global $mk_options;

$mk_footer_class = $show_footer = $disable_mobile = $footer_status = '';

$post_id = global_get_post_id();
if($post_id) {
  $show_footer = get_post_meta($post_id, '_template', true );
  $cases = array('no-footer', 'no-header-footer', 'no-header-title-footer', 'no-footer-title');
  $footer_status = in_array($show_footer, $cases);
}

if($mk_options['disable_footer'] == 'false' || ( $footer_status )) {
  $mk_footer_class .= ' mk-footer-disable';
}

if($mk_options['footer_type'] == '2') {
  $mk_footer_class .= ' mk-footer-unfold';
}


$boxed_footer = (isset($mk_options['boxed_footer']) && !empty($mk_options['boxed_footer'])) ? $mk_options['boxed_footer'] : 'true';
$footer_grid_status = ($boxed_footer == 'true') ? ' mk-grid' : ' fullwidth-footer';
$disable_mobile = ($mk_options['footer_disable_mobile'] == 'true' ) ? $mk_footer_class .= ' disable-on-mobile'  :  ' ';

?>

<section id="mk-footer-unfold-spacer">
<p class='esi-link'><a href='https://www.eversparkinteractive.com/law-firm-seo/'> Law Firm SEO by EverSpark Interactive</a><br></p>
</section>

<section id="mk-footer" class="<?php echo $mk_footer_class; ?>" <?php echo get_schema_markup('footer'); ?>>
    <?php if($mk_options['disable_footer'] == 'true' && !$footer_status) : ?>
    <div class="footer-wrapper<?php echo $footer_grid_status;?>">
        <div class="mk-padding-wrapper">
            <?php mk_get_view('footer', 'widgets'); ?>
             
            <div class="clearboth"></div>
        </div>
    </div>
    <?php endif;?>
    <?php mk_get_view('footer', 'sub-footer', false, ['footer_status' => $footer_status, 'footer_grid_status' => $footer_grid_status]); ?>
</section>
</div>
<?php 
global $is_header_shortcode_added;
mk_get_header_view('holders', 'secondary-menu', ['header_shortcode_style' => $is_header_shortcode_added]); ?>
</div>

<div class="bottom-corner-btns js-bottom-corner-btns">
<?php
    mk_get_view('footer', 'navigate-top');
    mk_get_view('footer', 'quick-contact');
    do_action('add_to_cart_responsive');
?>
</div>


<?php
mk_get_header_view('global', 'full-screen-search');
?>


<footer id="mk_page_footer">
    <?php wp_footer(); ?>

<script type="text/javascript">
    jQuery("#custodialp").keyup(function() {
      var cp =0;
      cp =jQuery(this).val();
      if(cp==''){ cp=0;}
      var gross_in = 0;
      ncp =jQuery("#noncustodialp").val();
      gross_in = cp;
      if(ncp != ''){
        gross_in = parseInt(cp) + parseInt(ncp);
      }
      jQuery("#grossincome").val(formatMoney(gross_in));
      jQuery("#grossincome").attr("data-gross",gross_in);
      percentge(gross_in);
   });
    jQuery("#noncustodialp").keyup(function() {
      var ncp =0;
      ncp =jQuery(this).val();
      if(ncp==''){ ncp=0;}
      var gross_in = 0;
      cp =jQuery("#custodialp").val();
      gross_in = ncp;
      if(cp != ''){
        gross_in = parseInt(ncp) + parseInt(cp);
      }
      jQuery("#grossincome").val(formatMoney(gross_in));
      jQuery("#grossincome").attr("data-gross",gross_in);
      percentge(gross_in);
   });

    jQuery('#doyouhave').on('change',function(){
        var selctvl = jQuery(this).val();
        if(selctvl == "stdjntc"){
            jQuery("#worksheetdata").css("display", "block");
            jQuery("#worksheetdata-b").css("display", "none");
            jQuery(this).attr("selected","selected");
        }else if(selctvl == "shrdc"){
            jQuery("#worksheetdata").css("display", "none");
            jQuery("#worksheetdata-b").css("display", "block");
            clearfield();
        }
    });

  function formatMoney(number) {
     return number.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
  }

  function percentge(gross){
    var cp, ncp =0;
    cp =jQuery("#custodialp").val();
    ncp =jQuery("#noncustodialp").val();
    if (cp==''){cp=0; jQuery("#shareincomcp").val('0%');jQuery("#shareincomcp").attr("data-cp",0);}
    if (ncp==''){ncp=0; jQuery("#shareincomcp").val('0%');jQuery("#shareincomcp").attr("data-ncp",0);}
    if(cp != 0){
        var cpper= Math.round((cp/gross)*100); 
        jQuery("#shareincomcp").val(cpper+'%');
        jQuery("#shareincom-ncp").val('0%');
        jQuery("#shareincomcp").attr("data-cp",cpper);
    }if( ncp !=0){
        var ncpper= Math.round((ncp/gross)*100); 
        jQuery("#shareincom-ncp").val(ncpper+'%');
        jQuery("#shareincom-ncp").attr("data-ncp",ncpper);
    }
  }


/*jQuery(".addnlcost1").click(function() {
      var cc=0;
      var cd=0;
      var gross_in=0;
      cc =jQuery(this).closest('tr').find('.addnlcost').val();
      if(cc==''){cc=0;}
      cd =jQuery("#childexp").val();
     gross_in = parseInt(cc)+parseInt(cd);
     //jQuery(this).closest('tr').find('.addcostrslt').val(parseInt(cc)+parseInt(cd));
      var tolcls =jQuery(".addcostrslt");
      if(cc != 0){
         for(i=0; i<tolcls.length;i++) {
            gross_in += parseInt(tolcls[i].value);
        }
      }else{
        jQuery(this).closest('tr').find('.addcostrslt').val(0);
         finalresult(gross_in);
        return;
      }
      jQuery(this).closest('tr').find('.addcostrslt').val(gross_in);
      //jQuery("#totalcarecst").val(gross_in);
      finalresult(gross_in);
   });*/

 jQuery("#carecost").keyup(function() {
      //jQuery(".fdsble").attr("disabled", 'disabled');
      var cc =0;
      cc =jQuery(this).val();
      if(cc==''){cc=0;}
      var cd = 0;
      cd =jQuery("#childexp").val();
      if(cc != ''){
        gross_in = parseInt(cc) + parseInt(cd);
        jQuery("#totalcarecst").val(gross_in)
      }else if(cc==0){ gross_in = parseInt(cc) + parseInt(cd);jQuery("#totalcarecst").val(0); }
      finalresult(gross_in);
   });

  jQuery("#healthinsurnce").keyup(function() {
     //jQuery(".fdsble, #carecost").attr("disabled", 'disabled');
      var hi =0;
      hi =jQuery(this).val();
      if(hi==''){hi=0;}
      var tc = 0;
      tc =jQuery("#totalcarecst").val();
      if(tc ==0){
        tc =jQuery("#childexp").val();
      }
      if(hi != '' && tc != ''){
        gross_in = parseInt(hi) + parseInt(tc);
        jQuery("#totalhinsurance").val(gross_in);
      }else if(hi==0){ gross_in = parseInt(hi) + parseInt(tc);jQuery("#totalhinsurance").val(0); }
       finalresult(gross_in);
   });

   jQuery("#medicalexpense").keyup(function() {
     //jQuery(".fdsble, #carecost, #healthinsurnce").attr("disabled", 'disabled');
      var mc =0;
      var tc = 0;
      mc =jQuery(this).val();
      if(mc==''){mc=0;}
      var tin = 0;
      tin =jQuery("#totalhinsurance").val();
      tc =jQuery("#totalcarecst").val();
      if(tin ==0 && tc ==0){
        tin =jQuery("#childexp").val();
      }//else if(tin ==0 && tc !=0){}
      else if(tin ==0){
        tin =jQuery("#totalcarecst").val()
      }
      if(mc != ''){
        gross_in = parseInt(mc) + parseInt(tin);
        jQuery("#totalmexpense").val(gross_in);
      }else if(mc==0){ gross_in = parseInt(mc) + parseInt(tin);jQuery("#totalmexpense").val(0); }
      
      finalresult(gross_in);;
   });

   jQuery("#extraexpense").keyup(function() {
    //jQuery(".fdsble, #carecost, #healthinsurnce, #medicalexpense").attr("disabled", 'disabled');
      var ee =0;
      ee =jQuery(this).val();
      if(ee==''){ee=0;}
      var thi = 0;
      var tm =jQuery("#totalmexpense").val();
      var tin =jQuery("#totalhinsurance").val();
      var tc =jQuery("#totalcarecst").val();
      if(tm ==0 && tin ==0 && tc ==0){
        tm =jQuery("#childexp").val();
      }else if(tm ==0 && tin !=0 && tc ==0){
        tm =jQuery("#totalhinsurance").val();
      }else if(tm ==0 && tin !=0 && tc !=0){
        tm =jQuery("#totalhinsurance").val();
      }else if(tm ==0 && tin ==0 && tc !=0){
        tm =jQuery("#totalcarecst").val();
      }else if(tm ==0){
        tm =jQuery("#totalmexpense").val()
      }
      if(ee != ''){
        gross_in = parseInt(ee) + parseInt(tm);
        jQuery("#tolextrexpense").val(gross_in);
      }else if(ee ==0){gross_in = parseInt(ee) + parseInt(tm);jQuery("#tolextrexpense").val(0);}
       finalresult(gross_in);
   });
  //var ajaxurll = '<?php //echo admin_url("admin-ajax.php", null); ?>';
  jQuery(document).ready(function(){
    jQuery('#numbrchild').on('change',function(){
        var child = jQuery(this).val();
        var childno = jQuery.trim(child);
        var gross = jQuery("#grossincome").val();
        var grossicome = jQuery("#grossincome").attr("data-gross");
        if(grossicome<950){
            jQuery("#childexp").val("100");
             finalresult(100);
            return;
        }
        if (childno !='' && grossicome !='') {
            var opt = { action: "childsupport", pchild: childno, gicome: grossicome};
            jQuery.ajax({
                url: ajaxurl,
                type: "POST",
                data: opt,
                success: function (e) {
                    jQuery("#childexp").val(e);
                    finalresult(e);

                },
            });
        }
    });    
});
function finalresult(result){
    var cpf = jQuery("#shareincomcp").attr("data-cp");
    var ncpf = jQuery("#shareincom-ncp").attr("data-ncp");
    if(cpf){
        var tolexp= Math.round((cpf/100)*result);
        jQuery('#suportoblig').val(tolexp);
    }
    if(ncpf){
        var tolexp= Math.round((ncpf/100)*result);
        jQuery('#suportoblig1').val(tolexp);
    }
    finalrecomded();
}
jQuery(document).on('click','#resetcal',function(){
    jQuery("input, select").val("");
    jQuery(".fdsble, #carecost, #healthinsurnce, #medicalexpense").removeAttr("disabled");
});
</script>



<script type="text/javascript">
    jQuery("#custodialp-b").keyup(function() {
      var cp =0;
      cp =jQuery(this).val();
      var gross_in = 0;
      ncp =jQuery("#actualpctg2").val();
      gross_in = cp;
      if(ncp != ''){
        gross_in = parseInt(cp) + parseInt(ncp);
      }
      jQuery("#grossincome-b").val(formatMoney_b(gross_in));
      jQuery("#grossincome-b").attr("data-gross",gross_in);
      percentge_b(gross_in);
   });
    jQuery("#noncustodialp-b").keyup(function() {
      var ncp =0;
      ncp =jQuery(this).val();
      var gross_in = 0;
      cp =jQuery("#custodialp-b").val();
      gross_in = ncp;
      if(cp != ''){
        gross_in = parseInt(ncp) + parseInt(cp);
      }
      jQuery("#grossincome-b").val(formatMoney_b(gross_in));
      jQuery("#grossincome-b").attr("data-gross",gross_in);
      percentge_b(gross_in);
   });

  function formatMoney_b(number) {
     return number.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
  }

  function percentge_b(gross){
    var cp, ncp =0;
    cp =jQuery("#custodialp-b").val();
    ncp =jQuery("#noncustodialp-b").val();
    if(cp != 0){
        var cpper= Math.round((cp/gross)*100); 
        jQuery("#shareincomcp-b").val(cpper+'%');
        jQuery("#shareincom-ncp-b").val('0%');
        jQuery("#shareincomcp-b").attr("data-cp",cpper);
    }if( ncp !=0){
        var ncpper= Math.round((ncp/gross)*100); 
        jQuery("#shareincom-ncp-b").val(ncpper+'%');
        jQuery("#shareincom-ncp-b").attr("data-ncp",ncpper);
    }
  }

  jQuery(document).ready(function(){
    jQuery('#numbrchild-b').on('change',function(){
        var child = jQuery(this).val();
        var childno = jQuery.trim(child);
        var gross = jQuery("#grossincome-b").val();
        var grossicome = jQuery("#grossincome-b").attr("data-gross");
        if(grossicome<950){
            jQuery("#childexp-b").val("100");
             sharecostybasic();
            return;
        }
        if (childno !='' && grossicome !='') {
            var opt = { action: "childsupport", pchild: childno, gicome: grossicome};
            jQuery.ajax({
                url: ajaxurl,
                type: "POST",
                data: opt,
                success: function (e) {
                    jQuery("#childexp-b").val(e);
                    finalresult_b(e);
                    sharecostybasic();
                },
            });
        }
    });    
});

function sharecostybasic() {
    var cbb =0;
    var cbb = jQuery("#childexp-b").val();
    tol_cbb =0;
    if(cbb != 0){
    tol_cbb = 1.5 * parseInt(cbb);
    }
    jQuery("#costybasicobg").val(formatMoney_b(tol_cbb));
    jQuery("#costybasicobg").attr("data-bbc",tol_cbb);
    therychildsuprt(tol_cbb);
}
function therychildsuprt(tolcbb) {
    var cpf = jQuery("#shareincomcp-b").attr("data-cp");
    var ncpf = jQuery("#shareincom-ncp-b").attr("data-ncp");
    tol_tcs =0;
    if(cpf != ''){
      tol_tcs = (parseInt(cpf) *tolcbb)/100;
      jQuery("#tchildsuprt").val(formatMoney_b(tol_tcs));
      jQuery("#tchildsuprt").attr("data-tcs",tol_tcs);
    }
    if(ncpf != ''){
      tol_tcs = (parseInt(ncpf) *tolcbb)/100;
      jQuery("#tchildsuprt2").val(formatMoney_b(tol_tcs));
      jQuery("#tchildsuprt2").attr("data-tcs2",tol_tcs);
    }
    //actualpercentge(tolcbb);
}

/*function actualpercentge(tolcbb){
    var tcs = jQuery("#tchildsuprt").attr("data-tcs");
    var tcs2 = jQuery("#tchildsuprt2").attr("data-tcs2");
    var tol_ap=0;
    if(tcs !=''){
        tol_ap = Math.round((parseInt(tcs)/tolcbb)*100);
        jQuery("#actualpctg").val(tol_ap+'%');
        jQuery("#actualpctg").attr("data-ap",tol_ap);
    }
    if(tcs2 !=''){
        tol_ap = Math.round((parseInt(tcs2)/tolcbb)*100);
        jQuery("#actualpctg2").val(tol_ap+'%');
        jQuery("#actualpctg2").attr("data-ap2",tol_ap);
    }
    bchildsuprtoprty(tcs,tcs2);
}*/
 jQuery("#actualpctg").keyup(function() {
      var cp =0;
      cp =jQuery(this).val();
       var tol_ap=0;
       var tcs = jQuery("#tchildsuprt2").attr("data-tcs2");
       if(tcs !=''){
         tol_ap = (parseInt(cp)/100)*parseInt(tcs);
       }
      jQuery("#bchildsprtop2").val(formatMoney_b(tol_ap));
      jQuery("#bchildsprtop2").attr("data-bcso",tol_ap);
   });
    jQuery("#actualpctg2").keyup(function() {
      var ncp =0;
      ncp =jQuery(this).val();
      tol_ap=0;
      var tcs2 = jQuery("#tchildsuprt").attr("data-tcs");
      if(tcs2 !=''){
        tol_ap = (parseInt(ncp)/100)*parseInt(tcs2);
       }
      jQuery("#bchildsprtop").val(formatMoney_b(tol_ap));
      jQuery("#bchildsprtop").attr("data-bcso2",tol_ap);
   });

  jQuery("#carecost-b").keyup(function() {
      var cc =0;
      cc =jQuery(this).val();
      if(cc==''){cc=0;}
      if(cc != ''){
        gross_in = parseInt(cc);
        jQuery("#totalexpense").val(formatMoney_b(gross_in));
        jQuery("#totalexpense").attr("data-txp",gross_in);
      }else if(cc==0){ jQuery("#totalexpense").attr("data-txp",0);jQuery("#totalexpense").val(0); }
     
       shareexpense();
   });

  jQuery("#healthinsurnce-b").keyup(function() {
     //jQuery("#carecost-b").attr("disabled", 'disabled');
      var hi =0;
      hi =jQuery(this).val();
      var tc = 0;
      tc =jQuery("#carecost-b").val();
      if(tc ==''){
         jQuery("#totalexpense").val(formatMoney_b(hi));
          jQuery("#totalexpense").attr("data-txp",hi);
      }
      gross_in=0;
      if(hi != '' && tc != ''){
        gross_in = parseInt(hi) + parseInt(tc);
        jQuery("#totalexpense").val(formatMoney_b(gross_in));
        jQuery("#totalexpense").attr("data-txp",gross_in);
      }
      shareexpense()
   });

   jQuery("#medicalexpense-b").keyup(function() {
     //jQuery("#carecost-b, #healthinsurnce-b").attr("disabled", 'disabled');
      var mc =0;
      var tc = 0;
      mc =jQuery(this).val();
      var tin = 0;
      tin =jQuery("#healthinsurnce-b").val();
      tc =jQuery("#carecost-b").val();
      gross_in=0;
      if(tin =='' && tc ==''){
        jQuery("#totalexpense").val(formatMoney_b(mc));
         jQuery("#totalexpense").attr("data-txp",mc);
      }else if(tin =='' && tc !=''){
         gross_in = parseInt(tc) + parseInt(mc);
         jQuery("#totalexpense").val(formatMoney_b(gross_in));
          jQuery("#totalexpense").attr("data-txp",gross_in);
      }else if(tin !='' && tc ==''){
        gross_in = parseInt(tin) + parseInt(mc);
        jQuery("#totalexpense").val(formatMoney_b(gross_in));
         jQuery("#totalexpense").attr("data-txp",gross_in);
      }else if(tin !='' && tc !=''){
        gross_in = parseInt(tin) + parseInt(mc) + parseInt(tc);
        jQuery("#totalexpense").val(formatMoney_b(gross_in));
         jQuery("#totalexpense").attr("data-txp",gross_in);
      }
      shareexpense();
   });

   jQuery("#extraexpense-b").keyup(function() {
    //jQuery("#carecost-b, #healthinsurnce-b, #medicalexpense-b").attr("disabled", 'disabled');
      var ee =0;
      ee =jQuery(this).val();
      var thi = 0;
      var tm =jQuery("#medicalexpense-b").val();
      tin =jQuery("#healthinsurnce-b").val();
      tc =jQuery("#carecost-b").val();
      if(tm =='' && tin =='' && tc ==''){
        jQuery("#totalexpense").val(formatMoney_b(ee));
         jQuery("#totalexpense").attr("data-txp",ee);
      }else if(tm =='' && tin !='' && tc ==''){
        gross_in = parseInt(ee) + parseInt(tin);
        jQuery("#totalexpense").val(formatMoney_b(gross_in));
         jQuery("#totalexpense").attr("data-txp",gross_in);
      }else if(tm =='' && tin !='' && tc !=''){
        gross_in = parseInt(ee) + parseInt(tin) + parseInt(tc);
        jQuery("#totalexpense").val(formatMoney_b(gross_in));
         jQuery("#totalexpense").attr("data-txp",gross_in);
      }else if(tm =='' && tin =='' && tc !=''){
        gross_in = parseInt(ee) + parseInt(tc);
        jQuery("#totalexpense").val(formatMoney_b(gross_in));
         jQuery("#totalexpense").attr("data-txp",gross_in);
      }else if(tm !='' && tin =='' && tc ==''){
        gross_in = parseInt(ee) + parseInt(tm);
        jQuery("#totalexpense").val(formatMoney_b(gross_in));
         jQuery("#totalexpense").attr("data-txp",gross_in);
      }else if(tm !='' && tin !='' && tc !=''){
        gross_in = parseInt(ee) + parseInt(tm) + parseInt(tin) + parseInt(tc);
        jQuery("#totalexpense").val(formatMoney_b(gross_in));
         jQuery("#totalexpense").attr("data-txp",gross_in);
      }else if(tm !='' && tin =='' && tc !=''){
        gross_in = parseInt(ee) + parseInt(tm) + parseInt(tc);
        jQuery("#totalexpense").val(formatMoney_b(gross_in));
         jQuery("#totalexpense").attr("data-txp",gross_in);
      }
      shareexpense();
   });
    jQuery("#childicome").keyup(function() {
      //jQuery("#carecost-b, #healthinsurnce-b, #medicalexpense-b,#extraexpense-b").attr("disabled", 'disabled');

      var minss =jQuery(this).val();
      var carecost =jQuery('#carecost-b').val();
      var healthinsurnce =jQuery('#healthinsurnce-b').val();
      var medicalexpense =jQuery('#medicalexpense-b').val();
      var extraexpense =jQuery('#extraexpense-b').val();
      if(carecost==''){carecost=0;}
      if(healthinsurnce==''){healthinsurnce=0;}
      if(medicalexpense==''){medicalexpense=0;}
      if(extraexpense==''){extraexpense=0;}
      if(minss){
        gross_in = (parseInt(carecost)+parseInt(healthinsurnce)+parseInt(medicalexpense)+ parseInt(extraexpense)) - parseInt(minss);
        jQuery("#totalexpense").val(formatMoney_b(gross_in));
         jQuery("#totalexpense").attr("data-txp",gross_in);
         shareexpense();
      }
  });

jQuery("#directpayment").keyup(function() {
    var spt = parseInt(jQuery("#suportoblig").val());
    var spt1 = parseInt(jQuery("#suportoblig1").val());
    var ee =jQuery(this).val();
    var rslt =  spt1-parseInt(ee);
    if(rslt){
        jQuery("#remchsprtodr1").val('$'+rslt);
        jQuery("#remchsprtodr").val('$'+spt);
    }else{
        jQuery("#remchsprtodr").val('$'+spt);
        jQuery("#remchsprtodr1").val('$'+spt1);
    }

});

jQuery("#directpaymntb").keyup(function() {
     var bchlsp = parseInt(jQuery("#bchildsprtop").attr('data-bcso2'));
     var chsprtval = parseInt(jQuery("#csobligation2").val());
     var shrexp = parseInt(jQuery("#shareexpense").val());
     var curntval = jQuery("#csobligation").attr('data-txp');
     var tolbth= bchlsp+shrexp;
     var ee =jQuery(this).val();
     var rslt=0;
     if(ee){
       rslt =  tolbth-parseInt(ee);
       jQuery("#csobligation").val(rslt);
     }else{
        if(ee==''){ ee=0;}
        rslt =  tolbth+ee;
        jQuery("#csobligation").val(curntval);
     }
     jQuery('#suportoblig-bold').val('');
     jQuery('#suportoblig1-bold').val('');
     if(chsprtval>rslt){
        var tol=chsprtval-rslt;
        jQuery('#suportoblig1-bold').val(tol);
        jQuery("#suportoblig1-bold").attr('data-nval',tol);
    }else if(chsprtval<rslt){
        var tol=rslt-chsprtval;
        jQuery('#suportoblig-bold').val(tol);
        jQuery("#suportoblig-bold").attr('data-nval',tol);
    }
     //recommendchildsp(drtpy1,rslt); 
});

jQuery("#directpaymntb2").keyup(function() {
    var bchlsp = parseInt(jQuery("#bchildsprtop2").attr('data-bcso'));
    var chsprtval = parseInt(jQuery("#csobligation").val());
    var shrexp = parseInt(jQuery("#shareexpense2").val());
    var curntval = jQuery("#csobligation2").attr('data-txp');
    var tolbth= bchlsp+shrexp;

    var ee =jQuery(this).val();
    var rslt=0;
    if(ee){
       rslt =  tolbth-parseInt(ee);
       jQuery("#csobligation2").val(rslt);
    }else{
        if(ee==''){ ee=0;}
        rslt =  tolbth+ee;
        jQuery("#csobligation2").val(curntval);
        //var oldvl = jQuery("#suportoblig1-bold").attr('data-nval');
        //jQuery("#suportoblig1-bold").val(oldvl);
        //return;
     }
    jQuery('#suportoblig-bold').val('');
     jQuery('#suportoblig1-bold').val('');
     if(chsprtval>rslt){
        var tol=chsprtval-rslt;
        jQuery('#suportoblig-bold').val(tol);
        jQuery("#suportoblig-bold").attr('data-osb',tol);
    }else if(chsprtval<rslt){
        var tol=rslt-chsprtval;
        jQuery('#suportoblig1-bold').val(tol);
        jQuery("#suportoblig1-bold").attr('data-osb',tol);
    }
    //recommendchildsp(drtpy1,rslt); 
});

function finalrecomded(){
    var spt = parseInt(jQuery("#suportoblig").val());
    var spt1 = parseInt(jQuery("#suportoblig1").val());
    jQuery("#remchsprtodr").val('$'+spt);
    jQuery("#remchsprtodr1").val('$'+spt1);
}

 function shareexpense(){
    var totalexp = jQuery("#totalexpense").attr("data-txp");
    var ncf = jQuery("#shareincomcp-b").attr("data-cp");
    var ncpf = jQuery("#shareincom-ncp-b").attr("data-ncp");
    if(ncf){
        var tolexp= Math.round((ncf/100)*totalexp);
        jQuery('#shareexpense').val(tolexp);
    }
    if(ncpf){
        var tolexp= Math.round((ncpf/100)*totalexp);
        jQuery('#shareexpense2').val(tolexp);
    }   
    childsuprtoblgtion(); 
}

 function childsuprtoblgtion(){
    var chldsprt1 = jQuery("#bchildsprtop").attr("data-bcso2");
    var chldsprt2 = jQuery("#bchildsprtop2").attr("data-bcso");
    var shrexpse1 = jQuery("#shareexpense").val();
    var shrexpse2 = jQuery("#shareexpense2").val();
    if(shrexpse1==0 && shrexpse2==0){
        jQuery('#suportoblig-bold').val(0);
        jQuery('#suportoblig1-bold').val(0);
        jQuery("#suportoblig1-bold").attr('data-oval',0);
        jQuery("#suportoblig-bold").attr('data-oval',0);
        jQuery('#csobligation').val(0)
        jQuery('#csobligation').attr('data-txp', 0);
        jQuery('#csobligation2').val(0);
        jQuery('#csobligation2').attr('data-txp', 0);
        return;
    }
    var tolexp1=0;
    var tolexp2 =0;
    if(chldsprt1 && shrexpse1){
        var tolexp1= parseInt(chldsprt1)+parseInt(shrexpse1);
        jQuery('#csobligation').val(tolexp1);
        jQuery('#csobligation').attr('data-txp', tolexp1);
    }
   if(chldsprt2 && shrexpse2){
         var tolexp2= parseInt(chldsprt2)+parseInt(shrexpse2);
        jQuery('#csobligation2').val(tolexp2);
        jQuery('#csobligation2').attr('data-txp', tolexp2);
    } 
    recommendchildsp(tolexp1,tolexp2);   
}

function recommendchildsp(tolexp1,tolexp2){
    if(tolexp1>tolexp2){
        var tol=tolexp1-tolexp2;
        jQuery('#suportoblig-bold').val(tol);
        jQuery("#suportoblig-bold").attr('data-oval',tol);
    }else if(tolexp1<tolexp2){
        var tol=tolexp2-tolexp1;
        jQuery('#suportoblig1-bold').val(tol);
        jQuery("#suportoblig1-bold").attr('data-oval',tol);
    }
}
// notused
function bchildsuprtoprty(tcs,tcs2){
    var ap = jQuery("#actualpctg").attr("data-ap");
    var ap2 = jQuery("#actualpctg2").attr("data-ap2");
    var tol_ap=0;
    if(tcs !=''){
        tol_ap = (parseInt(tcs)*parseInt(ap))/100;
        jQuery("#bchildsprtop").val(formatMoney_b(tol_ap));
        jQuery("#bchildsprtop").attr("data-bcso",tol_ap);
    }
    if(tcs2 !=''){
        tol_ap = (parseInt(tcs2)*parseInt(ap2))/100;
        jQuery("#bchildsprtop2").val(formatMoney_b(tol_ap));
        jQuery("#bchildsprtop2").attr("data-bcso2",tol_ap);
    }
}
function finalresult_b(result){
    var cpf = jQuery("#shareincomcp-b").attr("data-cp");
    var ncpf = jQuery("#shareincom-ncp-b").attr("data-ncp");
    if(cpf){
        var tolexp= Math.round((cpf/100)*result);
        jQuery('#suportoblig-b').val(tolexp);
    }
    if(ncpf){
        var tolexp= Math.round((ncpf/100)*result);
        jQuery('#suportoblig1-b').val(tolexp);
    }    
}
jQuery(document).on('click','#resetcal-b',function(){
    jQuery("input, select").val("");
    jQuery(".fdsble-b, #carecost-b, #healthinsurnce-b, #medicalexpense-b").removeAttr("disabled");
});
function clearfield(){
    jQuery("input, select.clrselect").val("");
    jQuery(".fdsble, #carecost, #healthinsurnce, #medicalexpense").removeAttr("disabled");
    jQuery(".fdsble-b, #carecost-b, #healthinsurnce-b, #medicalexpense-b").removeAttr("disabled");
}
</script>
</footer>  
</body>
</html>