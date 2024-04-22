<?php
/*
Template Name: CalculatorPage
*/


get_header(); ?>
<link rel="stylesheet" id="theme-styles-css"  href="<?=get_template_directory_uri()?>/assets/stylesheet/row-form.css" type="text/css" media="all" />
<style>
	.input-icon {
  position: relative;
}

.input-icon > i {
  position: absolute;
  display: block;
  transform: translate(0, -50%);
  top: 50%;
  pointer-events: none;
  width: 25px;
  text-align: center;
	font-style: normal;
	font-size:13px;
}

.input-icon > input {
  padding-left: 25px;
	padding-right: 0;
}

.input-icon-right > i {
  right: 0;
}

.input-icon-right > input {
  padding-left: 0;
  padding-right: 25px;
  text-align: right;
}
	td {
    vertical-align: middle !important;
}
	.form-group {
    margin: 10px 0px !important;
}
#fancy-title-3 {
    letter-spacing: 0px;
    text-transform: uppercase;
    font-size: 40px;
    color: #195775;
    text-align: left;
    font-style: inherit;
    font-weight: bold;
    padding-top: 0px;
    padding-bottom: 0px;
    font-family: inherit !important;
}
	#mk-footer, #mk-footer p {font-size: 14px;color: #808080;width: 100%;height: 63px;font-weight: 400;display: flex;} #sub-footer {background-color: #0e6088;display: inline-block;width: 100%;}
	p.esi-link {margin: 2em 24em;} #mk-footer-unfold-spacer{display: table-cell;}
	#worksheetdata input[type="number"],#worksheetdata-b input[type="number"] {height: 22px;width: 88%;}
	#carecostpa,#carecostpb, #healthinsurncepa, #healthinsurncepb, #medicalexpensepa, #medicalexpensepb, #extraexpensepa,#extraexpensepb,#carecost-b, #healthinsurnce-b, #medicalexpense-b, #extraexpense-b {width: auto;}
	#numbrchild,#numbrchild-b{width: 50%;}
	.resltrow{color: #fff;font-weight: 700;background: #0e6088 !important;}.resltrow input{font-weight: 800;}
	table tbody .form-group{text-align: center !!important;text-align: -webkit-center !important;}
	.disclmer{
/* 		margin-top: 7em; */
		font-size: 16px;}
	#mk-breadcrumbs .mk-breadcrumbs-inner.dark-skin,#mk-breadcrumbs .mk-breadcrumbs-inner.dark-skin a {color: #4d4d4d !important;}
	.disclmer{border-radius: 15px;border: 1px solid #ccc; padding: 1.2em 0.7em;}
	div#worksheetdata-b,div#worksheetdata {margin-top: 0.8em;margin-bottom: 1.5em;}
	@media (min-width: 1000px){
		h1#fancy-title-3 span p{text-align:center !important;}
		.doyhvetp, .doyhvetp label, .doyhvetp select{text-align:center;}
		.doyhvetp select{margin-left:27em;}
		.bigclmn{width: 40%;}
		.dollar{display:inline-block;position: relative;}
    .dollar input{padding-left:15px;}
    .dollar:before {position: absolute;content:"$";left:7px;top:8px;color: #7a7a7a;font-size:13px;}
    .dlrsmfield:before {left:48px !important;}
    .dlrtp:before{top: 9px !important;}
    .doyhvetp #doyouhave{width: 27%;margin-top: 0.7em;} .doyhvetp label{width: 90%;}
    .disclmer {
/* 		margin-top: 8em; */
		margin-bottom: 5em;}
    .bannerimg {margin-bottom: -8px;}
    h1#fancy-title-3{margin-top: 1em;}
	.Safari .form-control[disabled],.Safari .form-control[readonly],.Safari fieldset[disabled] .form-control{color: #0c0c0c !important;}
	}
	@media (max-width: 480px){
		body{overflow-x: auto;} form{margin-top: 1.5em !important;}
		 #mk-footer-unfold-spacer{display: none !important;} #grossincome{width: 100px;}
		 .form-group.col-xs-6 #grossincome,.form-group.col-xs-6 #grossincome-b{width: 100% !important;margin-left: -30px;}
		 #numbrchild, #numbrchild-b {width: 100%;}
		 #carecostpa, #carecostpb, #healthinsurncepa, #healthinsurncepb, #medicalexpense, #extraexpensepa, #extraexpensepb, #carecost-b, #healthinsurnce-b, #medicalexpense-b, #extraexpense-b{width: 80% !important;}
		 select#doyouhave {width: 70%;}
		 .col-xs-6 {width: 40% !important;}
		 #worksheetdata-b{margin-right: 0px !important;}
		 form label {font-size: 16px !important;font-weight: normal !important;}
		 .disclmer{font-size: 15px;margin-top: 9em;margin-bottom: 3em;padding: 1em 1em;display: inline-block;}
		 .dollar{display:inline-block;position: relative;}
    .dollar input{padding-left:15px;}
    .dollar:before {position: absolute;content:"$";left:20px;top:2px;color: #7a7a7a;font-size:13px;}
    .dollar:before {position: absolute;content:"$";left:20px;top:2px;color: #7a7a7a;font-size:13px;}
    .dlrtp1:before{top: 38px !important;}
    .bannerimg{height:auto !important;}
    #wprmenu_bar {margin-top: 0 !important;}
    html{padding-top: 0 !important;}
    .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control{color: #0c0c0c !important;}
    html.Safari, .Safari body{overflow-x: hidden !important;}
    .fntsze{font-size: 13px !important;}
  }
		@media (max-width: 385px){
			.col-xs-12.form-group{padding: 0 0 0 7px !important;}

		}
</style>
<?php the_content(); ?>
<?php if(wp_is_mobile()){?>
 <div class="bannerimg"><img src="https://johnsonfirmla.com/wp-content/uploads/2021/06/family-mobile-min.jpg" style="width: 100%;" alt="<?php the_title();?>" /></div>
<?php }else{?>
<div class="bannerimg"><img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width: 100%;" alt="<?php the_title();?>" /></div>
<?php } ?>
<div class="container">
	<h1 id="fancy-title-3" class="mk-fancy-title  simple-style  color-single">
	<span><p style="text-align: left;"><?php echo get_the_title(); ?></p></span></h1>
	<div class="row">
		<div class="col-md-12">
			<form class="col-md-12 col-xs-12">
				<div class="form-group doyhvetp">
					<label for=""><strong>Select Your Custody Plan Below to Calculate Your Child Support Payment:</strong></label>
					<select name="" id="doyouhave" class="form-control" required="required">
						
						<option value="stdjntc">Standard Joint Custody</option>
						<option value="shrdc">Shared Custody</option>
					</select>
				</div>
			</form>
			<?php if(wp_is_mobile()){?>


				<div id="worksheetdata" class="col-md-12 worksheetdata row">
							<form>
								<div class="row">
									<div class="col-xs-12 form-group">
										<div class="col-xs-12"><label class="form-group">Monthly Gross Income</label></div>
										<div class="form-group col-xs-6 dollar dlrtp1">
											<label for="" class="fntsze">Custodial Parent</label>
											<input type="number" name="custodialp" id="custodialp" class="form-control custodialp fdsble" value=""  required="required">
										</div>
										<div class="form-group col-xs-6 dollar dlrtp1">
											<label for="" class="fntsze">Non-Custodial Parent</label>
											<input type="number" name="noncustodialp" id="noncustodialp" class="form-control noncustodialp fdsble" value=""  required="required">
										</div>
									</div>
									<div class="col-xs-12 form-group">
										<div class="col-xs-12"><label class="form-group">Combined Monthly Adjusted Gross Income	</label></div>
										<div class="col-xs-3"></div>
										<div class="form-group col-xs-6">
											<input type="text" data-gross="" name="grossincome" id="grossincome" class="form-control grossincome" value="" readonly="" disabled="disabled">
										</div>
									</div>
									<div class="col-xs-12 form-group">
										<div class="col-xs-12"><label class="form-group">Percentage of Share of Income</label></div>
										<div class="form-group col-xs-6">
											<input type="text" name="shareincomcp" id="shareincomcp" class="form-control shareincomcp" value="" readonly="" disabled="disabled">
										</div>
										<div class="form-group col-xs-6">
											<input type="text" name="shareincom-ncp" id="shareincom-ncp" class="form-control shareincom-ncp" value="" readonly="" disabled="disabled">
										</div>
									</div>
									<div class="col-xs-12 form-group">
										<div class="col-xs-12"><label class="form-group">How many children do you have?</label></div>
										<div class="form-group col-xs-6">
											<select name="numbrchild" id="numbrchild" class="form-control clrselect numbrchild fdsble" required="required">
												<option value="">Select Child</option>
												<option value="child1">1</option>
												<option value="child2">2</option>
												<option value="child3">3</option>
												<option value="child4">4</option>
												<option value="child5">5</option>
												<option value="child6">6</option>
											</select>
										</div>
										<div class="form-group col-xs-6 dollar">
											<input type="text" name="childexp" id="childexp" class="form-control tolexpnse childexp" value="0" readonly="" disabled="disabled">
										</div>
									</div>

									<div class="col-xs-12 form-group">
										<div class="col-xs-12"><label class="form-group">Additional Costs:</label>
											<br><label for="">Child Care Costs</label></div>
										<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
											<input type="number" name="carecostpa" id="carecostpa" class="form-control addnlcost carecostpa hcarecostbth" value="">
										</div>
										<div class="form-group col-xs-6 dollar">
											 <input type="number" name="carecostpb" id="carecostpb" class="form-control addnlcost carecostpb hcarecostbth" value="">
										</div>
										<div class="col-xs-2"></div>
										<div class="form-group col-xs-6 dollar">
											<input type="text" name="totalcarecst" id="totalcarecst" class="form-control tolexpnse addcostrslt addcostrslt totalcarecst" value="0" readonly="" disabled="disabled">
										</div>
									</div>
									<div class="col-xs-12 form-group">
										<div class="col-xs-12"><label class="form-group">Child's Health Insurance Premium</label></div>
										<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
											<input type="number" name="healthinsurncepa" id="healthinsurncepa" class="form-control addnlcost healthinsurncepa" value="">
										</div>
										<div class="form-group col-xs-6 dollar">
											<input type="number" name="healthinsurncepb" id="healthinsurncepb" class="form-control addnlcost healthinsurncepb" value="">
										</div>
										<div class="col-xs-2"></div>
										<div class="form-group col-xs-6 dollar">
											<input type="text" name="totalhinsurance" id="totalhinsurance" class="form-control tolexpnse addcostrslt totalhinsurance" value="0" readonly="" disabled="disabled">
										</div>
									</div>
									<div class="col-xs-12 form-group">
										<div class="col-xs-12"><label class="form-group">Extra Medical Expenses (uninsured only)</label></div>
										<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
											<input type="number" name="medicalexpensepa" id="medicalexpensepa" class="form-control addnlcost medicalexpensepa" value="">
										</div>
										<div class="form-group col-xs-6 dollar">
											<input type="number" name="medicalexpensepb" id="medicalexpensepb" class="form-control addnlcost medicalexpensepb" value="">
										</div>
										<div class="col-xs-2"></div>
										<div class="form-group col-xs-6 dollar">
											<input type="text" name="totalmexpense" id="totalmexpense" class="form-control tolexpnse addcostrslt totalmexpense" value="0" readonly="" disabled="disabled">
										</div>
									</div>
									<div class="col-xs-12 form-group">
										<div class="col-xs-12"><label class="form-group">Extra Expenses (Agreed by parties or court)</label></div>
										<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
											<input type="number" name="extraexpensepa" id="extraexpensepa" class="form-control addnlcost extraexpensepa" value="">
										</div>
										<div class="form-group col-xs-6 dollar">
											<input type="number" name="extraexpensepb" id="extraexpensepb" class="form-control addnlcost extraexpensepb" value="">
										</div>
										<div class="col-xs-2"></div>
										<div class="form-group col-xs-6 dollar">
											<input type="text" name="tolextrexpense" id="tolextrexpense" class="form-control tolexpnse addcostrslt tolextrexpense" value="0" readonly="" disabled="disabled">
										</div>
									</div>
									<div class="col-xs-12 form-group">
										<div class="col-xs-12"><label class="form-group">Each Party's Support Obligation</label></div>
										<div class="form-group col-xs-6">
											<input type="number" name="suportoblig" id="suportoblig" class="form-control suportoblig" value="0" readonly="" disabled="disabled">
										</div>
										<div class="form-group col-xs-6">
											<input type="text" name="suportoblig1" id="suportoblig1" class="form-control suportoblig" value="0" readonly="" disabled="disabled">
										</div>
									</div>

									<div class="col-xs-12 form-group">
										<div class="col-xs-12"><label class="form-group">Direct payments made by the noncustodial parent on behalf of the child for child care costs, health insurance premiums, extraordinary medical expenses, or extraordinary expenses.</label></div>
										<div class="form-group col-xs-2"></div>
										<div class="form-group col-xs-6 dollar dlrtp">
												<input type="number" name="directpayment" id="directpayment" class="form-control directpayment" disabled="" readonly="" value="0">
										</div>
										
									</div>
									<div class="col-xs-12 form-group resltrow">
										<div class="col-xs-12"><label class="form-group">Recommended Child support order</label></div>
										<div class="form-group col-xs-1">
										</div>
										<div class="form-group col-xs-6">
											<input type="text" name="remchsprtodr1" id="remchsprtodr1" class="form-control remchsprtodr" value="0" readonly="" disabled="disabled">
										</div>
										<div class="form-group col-xs-2"><a class="btn btn-md btn-warning" id="resetcal">Reset</a></div>
									</div>
								</div>
								<!--<div class="form-group col-xs-12"><a class="btn btn-md btn-warning" id="resetcal">Reset</a></div>-->
							</form>
					</div>


				<div id="worksheetdata-b" class="col-md-12 worksheetdata-b row" style="display: none;">
					<form>
						<div class="row">
							<div class="col-xs-12 form-group">
								<div class="col-xs-12"><label class="form-group">Monthly Gross Income</label></div>
								<div class="form-group col-xs-6 dollar dlrtp1">
									<label for="">Petitioner</label>
									<input type="number" name="custodialp-b" id="custodialp-b" class="form-control custodialp-b fdsble-b" value=""  required="required">
								</div>
								<div class="form-group col-xs-6 dollar dlrtp1">
									<label for="">Defendant</label>
									<input type="number" name="noncustodialp-b" id="noncustodialp-b" class="form-control noncustodialp-b fdsble-b" value=""  required="required">
								</div>
							</div>
							<div class="col-xs-12 form-group">
								<div class="col-xs-12"><label class="form-group">Combined Monthly Adjusted Gross Income	</label></div>
								<div class="col-xs-3"></div>
								<div class="form-group col-xs-6">
									<input type="text" data-gross="" name="grossincome-b" id="grossincome-b" class="form-control grossincome-b" value="" readonly="" disabled="disabled">
								</div>
							</div>
							<div class="col-xs-12 form-group">
								<div class="col-xs-12"><label class="form-group">Percentage of Share of Income</label></div>
								<div class="form-group col-xs-6">
									<input type="text" name="shareincomcp-b" id="shareincomcp-b" class="form-control shareincomcp-b" value="" readonly="" disabled="disabled">
								</div>
								<div class="form-group col-xs-6">
									<input type="text" name="shareincom-ncp-b" id="shareincom-ncp-b" class="form-control shareincom-ncp-b" value="" readonly="" disabled="disabled">
								</div>
							</div>
							<div class="col-xs-12 form-group">
								<div class="col-xs-12"><label class="form-group">How many children do you have?</label></div>
								<div class="form-group col-xs-6">
									<select name="numbrchild-b" id="numbrchild-b" class="form-control numbrchild-b clrselect fdsble-b" required="required">
										<option value="">Select Child</option>
										<option value="child1">1</option>
										<option value="child2">2</option>
										<option value="child3">3</option>
										<option value="child4">4</option>
										<option value="child5">5</option>
										<option value="child6">6</option>
									</select>
								</div>
								<div class="form-group col-xs-6 dollar">
									<input type="text" name="childexp-b" id="childexp-b" class="form-control tolexpnse-b childexp-b" value="0" readonly="" disabled="disabled">
								</div>
							</div>

							<div class="col-xs-12 form-group">
								<div class="form-group col-xs-12">
									<label for="">Shared Custody Basic Obligation</label>
								</div>
								<div class="form-group col-xs-10">
									<input type="text" name="costybasicobg" id="costybasicobg" class="form-control tolexpnse-b addcostrslt-b costybasicobg" value="0" data-bbc="" readonly="" disabled="disabled">
								</div>
							</div>
							<div class="col-xs-12 form-group">
								<div class="col-xs-12"><label class="form-group">Each Party's Theoretical Child Support Obligation</label></div>
								<div class="form-group col-xs-6">
									<input type="text" name="tchildsuprt" data-tcs="" id="tchildsuprt" class="form-control tolexpnse-b addcostrslt-b tchildsuprt" value="0" readonly="" disabled="disabled">
								</div>
								<div class="form-group col-xs-6">
									<input type="text" name="tchildsuprt2" data-tcs2="" id="tchildsuprt2" class="form-control tolexpnse-b addcostrslt-b tchildsuprt2" value="0" readonly="" disabled="disabled">
								</div>
							</div>
							<div class="col-xs-12 form-group">
								<div class="col-xs-12"><label class="form-group">Actual Percentage of Time with Each Party</label></div>
								<div class="form-group col-xs-6">
									<div class="input-icon input-icon-right">
									   <input type="text" name="actualpctg" data-ap="" id="actualpctg" class="form-control tolexpnse-b addcostrslt-b actualpctg" value="" disabled="" readonly="">
										<i>%</i>
									</div>
								</div>
								<div class="form-group col-xs-6">
									<div class="input-icon input-icon-right">
										<input type="text" name="actualpctg2" data-ap2="" id="actualpctg2" class="form-control tolexpnse-b addcostrslt-b actualpctg2" value="" disabled="" readonly="">
										<i>%</i>
									</div>
								</div>
							</div>
							<div class="col-xs-12 form-group">
								<div class="col-xs-12"><label class="form-group">Basic Child Support Obligation for Time with Other Party</label></div>
								<div class="form-group col-xs-6">
									<input type="text" name="bchildsprtop" data-bcso="" id="bchildsprtop" class="form-control tolexpnse-b addcostrslt-b bchildsprtop" value="0" readonly="" disabled="disabled">
								</div>
								<div class="form-group col-xs-6">
									<input type="text" name="bchildsprtop2" data-bcso2="" id="bchildsprtop2" class="form-control tolexpnse-b addcostrslt-b bchildsprtop2" value="0" readonly="" disabled="disabled">
								</div>
							</div>
							<div class="col-xs-12 form-group">
								<div class="col-xs-12"><label class="form-group">Additional Costs:</label>
									<br><label for="">a. Child Care Costs</label></div>
								<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
									 <input type="number" name="carecost-b" id="carecost-b" class="form-control addnlcost carecost-b" value="">
								</div>
								<div class="form-group col-xs-6 dollar">
									 <input type="number" name="carecost-ba" id="carecost-ba" class="form-control addnlcost carecost-b" value="">
								</div>
								<div class="col-xs-2"></div>
								<div class="form-group col-xs-6 dollar">
									<input type="text" name="" data-bcso2="" id="carecost-btol" class="form-control " value="0" readonly="" disabled="disabled">
								</div>
							</div>
							<div class="col-xs-12 form-group">
								<div class="col-xs-12"><label class="form-group">b. Child's Health Insurance Premium</label></div>
								<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
										<input type="number" name="healthinsurnce-b" id="healthinsurnce-b" class="form-control addnlcost healthinsurnce-b" value="">
								</div>
								<div class="form-group col-xs-6 dollar">
									<input type="number" name="healthinsurnce-ba" id="healthinsurnce-ba" class="form-control addnlcost healthinsurnce-b" value="">
								</div>
								<div class="col-xs-2"></div>
								<div class="form-group col-xs-6 dollar">
									<input type="text" name="" data-bcso2="" id="healthinsurnce-btol" class="form-control " value="0" readonly="" disabled="disabled">
								</div>
							</div>
							<div class="col-xs-12 form-group">
								<div class="col-xs-12"><label class="form-group">c. Extra Medical Expenses (uninsured only)</label></div>
								<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
									<input type="number" name="medicalexpense-b" id="medicalexpense-b" class="form-control addnlcost medicalexpense-b" value="">
								</div>
								<div class="form-group col-xs-6 dollar">
									<input type="number" name="medicalexpense-ba" id="medicalexpense-ba" class="form-control addnlcost medicalexpense-b" value="">
								</div>
								<div class="col-xs-2"></div>
								<div class="form-group col-xs-6 dollar">
									<input type="text" name="" data-bcso2="" id="medicalexpense-btol" class="form-control " value="0" readonly="" disabled="disabled">
								</div>
							</div>
							<div class="col-xs-12 form-group">
								<div class="col-xs-12"><label class="form-group">d. Extra Expenses (Agreed by parties or court)</label></div>
								<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
									<input type="number" name="extraexpense-b" id="extraexpense-b" class="form-control addnlcost extraexpense-b" value="">
								</div>
								<div class="form-group col-xs-6 dollar">
									<input type="number" name="extraexpense-ba" id="extraexpense-ba" class="form-control addnlcost extraexpense-b" value="">
								</div>
								<div class="col-xs-2"></div>
								<div class="form-group col-xs-6 dollar">
									<input type="text" name="" data-bcso2="" id="extraexpense-btol" class="form-control " value="0" readonly="" disabled="disabled">
								</div>
							</div>
							<div class="col-xs-12 form-group">
								<div class="col-xs-12"><label class="form-group">d. Extra Expenses (Agreed by parties or court)</label></div>
								<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
									<input type="number" name="extraexpense-b" id="extraexpense-b" class="form-control addnlcost extraexpense-b" value="">
								</div>
								<div class="form-group col-xs-6 dollar">
									<input type="number" name="extraexpense-ba" id="extraexpense-ba" class="form-control addnlcost extraexpense-b" value="">
								</div>
								<div class="col-xs-2"></div>
								<div class="form-group col-xs-6 dollar">
									<input type="text" name="" data-bcso2="" id="extraexpense-btol" class="form-control " value="0" readonly="" disabled="disabled">
								</div>
							</div>
							<div class="col-xs-12 form-group">
								<div class="col-xs-12"><label class="form-group">e. Optional, Minus Extraordinary Expenses</label></div>
								<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
									<input type="number" name="childicome-b" id="childicome-b" class="form-control addnlcost childicome-b" value="">
								</div>
								<div class="form-group col-xs-6 dollar">
									<input type="number" name="childicome-ba" id="childicome-ba" class="form-control addnlcost childicome-b" value="">
								</div>
								<div class="col-xs-2"></div>
								<div class="form-group col-xs-6 dollar">
									<input type="text" name="" data-bcso2="" id="childicome-btol" class="form-control " value="0" readonly="" disabled="disabled">
								</div>
							</div>
						
							<div class="col-xs-12 form-group">
								<div class="col-xs-12"><label class="form-group">Total Expenses</label></div>
								<div class="form-group col-xs-10 dollar dlrsmfield dlrtp">
									<input type="text" name="totalexpense" data-txp="" id="totalexpense" class="form-control addnlcost totalexpense" value="0" readonly disabled="disabled">
								</div>
							</div>
							<div class="col-xs-12 form-group">
								<div class="col-xs-10"><label class="form-group">Each Party's Proportionate Share of Expenses</label></div>
								<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
									<input type="text" name="shareexpense" data-txp="" id="shareexpense" class="form-control addnlcost shareexpense" value="0" readonly disabled="disabled">
								</div>
								<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
									<input type="text" name="shareexpense2" data-txp="" id="shareexpense2" class="form-control addnlcost shareexpense2" value="0" readonly disabled="disabled">
								</div>
							</div>
								<div class="col-xs-12 form-group">
								<div class="col-xs-10"><label class="form-group">Direct Payments Made By Any Party on Behalf of Child</label></div>
								<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
									<input type="number" name="directpaymntb" data-pdirt="" id="directpaymntb" class="form-control addnlcost directpaymntb" disabled="" readonly="" value="">
								</div>
								<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
									<input type="number" name="directpaymntb2" data-pdirt="" id="directpaymntb2" class="form-control addnlcost directpaymntb2" value="" disabled="" readonly="">
								</div>
							</div>
								<div class="col-xs-12 form-group">
								<div class="col-xs-10"><label class="form-group">Each Party's Child Support Obligation</label></div>
								<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
									<input type="text" name="csobligation" data-txp="" id="csobligation" class="form-control addnlcost csobligation" value="" readonly disabled="disabled">
								</div>
								<div class="form-group col-xs-6 dollar dlrsmfield dlrtp"> 
									<input type="text" name="csobligation2" data-txp="" id="csobligation2" class="form-control addnlcost csobligation2" value="" readonly disabled="disabled">
								</div>
							</div>
							<div class="col-xs-12 form-group resltrow">
								<div class="col-xs-12"><label class="form-group">Recommended Child Support</label></div>
								<div class="form-group col-xs-1">
								</div>
								<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
									<input type="text" name="suportoblig1-b" id="suportoblig1-bold" class="form-control suportoblig-b" value="0" data-osb="" data-oval="" data-nval="" readonly="" disabled="disabled">
								</div>
								<div class="form-group col-xs-2">
									<a class="btn btn-md btn-warning resetcal" id="resetcal-b">Reset</a>
								</div>
							</div>
						</div>
						<!--<div class="form-group col-xs-12"></div>-->
					</form>
				</div>










					

			<?php }else{?>	
			<div id="worksheetdata" class="col-md-12 worksheetdata row" >
				<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th></th>
							<th>Custodial Parent</th>
							<th>Non-Custodial Parent</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Monthly Gross Income </td>
							<td>
								<div class="form-group dollar dlrtp">
									<input type="number" name="custodialp" id="custodialp" class="form-control custodialp fdsble" value=""  required="required">
								</div>
							</td>
							<td>
								<div class="form-group dollar dlrtp">
									<input type="number" name="noncustodialp" id="noncustodialp" class="form-control noncustodialp fdsble" value=""  required="required">
								</div>
							</td>
							<td></td>
						</tr>
						<tr>
							<td>Combined Monthly Adjusted Gross Income</td>
							<td></td>
							<td></td>
							<td>
								<div class="form-group">
									<input type="text" data-gross="" name="grossincome" id="grossincome" class="form-control grossincome" value="" readonly="" disabled="disabled">
								</div>
							</td>
						</tr>
						<tr>
							<td>Percentage of Share of Income</td>
							<td>
								<div class="form-group">
									<input type="text" name="shareincomcp" id="shareincomcp" class="form-control shareincomcp" value="" readonly="" disabled="disabled">
								</div>
							</td>
							<td>
								<div class="form-group">
									<input type="text" name="shareincom-ncp" id="shareincom-ncp" class="form-control shareincom-ncp" value="" readonly="" disabled="disabled">
								</div>
							</td>
							<td></td>
						</tr>
						<tr>
							<td>How many children do you have? </td>
							<td colspan="2">
								<div class="form-group">
									<select name="numbrchild" id="numbrchild" class="form-control clrselect numbrchild fdsble" required="required">
										<option value="">---Select Child---</option>
										<option value="child1">1</option>
										<option value="child2">2</option>
										<option value="child3">3</option>
										<option value="child4">4</option>
										<option value="child5">5</option>
										<option value="child6">6</option>
									</select>
								</div>
							</td>
							<td>
								<div class="form-group dollar">
									<input type="text" name="childexp" id="childexp" class="form-control tolexpnse childexp" value="0" readonly="" disabled="disabled">
								</div>
							</td>
						</tr>
						<tr>
							<td>Additional Costs: </td>
							<td colspan="2"></td>
							<td></td>
						</tr>
						<tr>
							<td>Child Care Costs</td>
							<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="carecostpa" id="carecostpa" class="form-control addnlcost carecostpa hcarecostbth" value="">
								</div>
							</td>
							<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="carecostpb" id="carecostpb" class="form-control addnlcost carecostpb hcarecostbth" value="">
								</div>
							</td>
							<td>
								<div class="form-group dollar">
									<input type="text" name="totalcarecst" id="totalcarecst" class="form-control tolexpnse addcostrslt addcostrslt totalcarecst" value="0" readonly="" disabled="disabled">
								</div>
							</td>
						</tr>
						<tr>
							<td>Child's Health Insurance Premium</td>
							<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="healthinsurncepa" id="healthinsurncepa" class="form-control addnlcost healthinsurncepa" value="">
								</div>
							</td>
							<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="healthinsurncepb" id="healthinsurncepb" class="form-control addnlcost healthinsurncepb" value="">
								</div>
							</td>
							<td>
								<div class="form-group dollar">
									<input type="text" name="totalhinsurance" id="totalhinsurance" class="form-control tolexpnse addcostrslt totalhinsurance" value="0" readonly="" disabled="disabled">
								</div>
							</td>
						</tr>
						<tr>
							<td>Extra Medical Expenses (uninsured only)</td>
							<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="medicalexpensepa" id="medicalexpensepa" class="form-control addnlcost medicalexpensepa" value="">
								</div>
							</td>
								<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="medicalexpensepb" id="medicalexpensepb" class="form-control addnlcost medicalexpensepb" value="">
								</div>
							</td>
							<td>
								<div class="form-group dollar">
									<input type="text" name="totalmexpense" id="totalmexpense" class="form-control tolexpnse addcostrslt totalmexpense" value="0" readonly="" disabled="disabled">
								</div>
							</td>
						</tr>
						<tr>
							<td>Extra Expenses (Agreed by parties or court)</td>
							<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="extraexpensepa" id="extraexpensepa" class="form-control addnlcost extraexpensepa" value="">
								</div>
							</td>
							<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="extraexpensepb" id="extraexpensepb" class="form-control addnlcost extraexpensepb" value="">
								</div>
							</td>
							<td>
								<div class="form-group dollar">
									<input type="text" name="tolextrexpense" id="tolextrexpense" class="form-control tolexpnse addcostrslt tolextrexpense" value="0" readonly="" disabled="disabled">
								</div>
							</td>
						</tr>
						<tr>
							<td>Each Party's Support Obligation</td>
							<td>
								<div class="form-group dollar">
									<input type="number" name="suportoblig" id="suportoblig" class="form-control suportoblig" value="0" readonly="" disabled="disabled">
								</div>
							</td>
							<td>
								<div class="form-group dollar">
									<input type="text" name="suportoblig1" id="suportoblig1" class="form-control suportoblig" value="0" readonly="" disabled="disabled">
								</div>
							</td>
							<td></td>
						</tr>
						<tr>
							<td class="bigclmn">Direct payments made by the noncustodial parent on behalf of the child for child care costs, health insurance premiums, extraordinary medical expenses, or extraordinary expenses.</td>
							<td></td>
							<td>
								<div class="form-group dollar">
									<input type="number" name="directpayment" id="directpayment" class="form-control directpayment" disabled="" readonly="" value="0">
								</div>
							</td>
							<td></td>
						</tr>
						<tr class="resltrow">
							<td class="last-ro">Recommended Child support order</td>
							<td>
								<div class="form-group">
									<!--<input type="text" name="remchsprtodr" id="remchsprtodr" class="form-control remchsprtodr" value="0" readonly="" disabled="disabled">-->
								</div>
							</td>
							<td>
								<div class="form-group">
									<input type="text" name="remchsprtodr1" id="remchsprtodr1" class="form-control remchsprtodr" value="0" readonly="" disabled="disabled">
								</div>
							</td>
							<td><a class="btn btn-md btn-warning" id="resetcal">Reset</a></td>
						</tr>
					</tbody>
			
				</table>
				</div>	
			</div>

			<div id="worksheetdata-b" class="col-md-12 worksheetdata-b row" style="display: none;">
			  <div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th></th>
							<th>Petitioner</th>
							<th>Defendant</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Monthly Gross Income </td>
							<td>
								<div class="form-group dollar dlrtp">
									<input type="number" name="custodialp-b" id="custodialp-b" class="form-control custodialp-b fdsble-b" value=""  required="required">
								</div>
							</td>
							<td>
								<div class="form-group dollar dlrtp">
									<input type="number" name="noncustodialp-b" id="noncustodialp-b" class="form-control noncustodialp-b fdsble-b" value=""  required="required">
								</div>
							</td>
							<td></td>
						</tr>
						<tr>
							<td>Combined Monthly Adjusted Gross Income</td>
							<td></td>
							<td></td>
							<td>
								<div class="form-group">
									<input type="text" data-gross="" name="grossincome-b" id="grossincome-b" class="form-control grossincome-b" value="" readonly="" disabled="disabled">
								</div>
							</td>
						</tr>
						<tr>
							<td>Percentage of Share of Income</td>
							<td>
								<div class="form-group">
									<input type="text" name="shareincomcp-b" id="shareincomcp-b" class="form-control shareincomcp-b" value="" readonly="" disabled="disabled">
								</div>
							</td>
							<td>
								<div class="form-group">
									<input type="text" name="shareincom-ncp-b" id="shareincom-ncp-b" class="form-control shareincom-ncp-b" value="" readonly="" disabled="disabled">
								</div>
							</td>
							<td></td>
						</tr>
						<tr>
							<td>How many children do you have? </td>
							<td colspan="2">
								<div class="form-group">
									<select name="numbrchild-b" id="numbrchild-b" class="form-control clrselect numbrchild-b fdsble-b" required="required">
										<option value="">---Select Child---</option>
										<option value="child1">1</option>
										<option value="child2">2</option>
										<option value="child3">3</option>
										<option value="child4">4</option>
										<option value="child5">5</option>
										<option value="child6">6</option>
									</select>
								</div>
							</td>
							<td>
								<div class="form-group dollar">
									<input type="text" name="childexp-b" id="childexp-b" class="form-control tolexpnse-b childexp-b" value="0" readonly="" disabled="disabled">
								</div>
							</td>
						</tr>
						<tr>
							<td>Shared Custody Basic Obligation</td>
							<td></td>
							<td></td>
							<td>
								<div class="form-group">
									<input type="text" name="costybasicobg" id="costybasicobg" class="form-control tolexpnse-b addcostrslt-b costybasicobg" value="0" data-bbc="" readonly="" disabled="disabled">
								</div>
							</td>
						</tr>
						<tr>
							<td>Each Party's Theoretical Child Support Obligation</td>
							<td>
								<div class="form-group">
									<input type="text" name="tchildsuprt" data-tcs="" id="tchildsuprt" class="form-control tolexpnse-b addcostrslt-b tchildsuprt" value="0" readonly="" disabled="disabled">
								</div>
							</td>
							<td>
								<div class="form-group">
									<input type="text" name="tchildsuprt2" data-tcs2="" id="tchildsuprt2" class="form-control tolexpnse-b addcostrslt-b tchildsuprt2" value="0" readonly="" disabled="disabled">
								</div>
								<td></td>
							</td>
						</tr>
						<tr>
							<td>Actual Percentage of Time with Each Party</td>
							<td>
								<div class="form-group">
									<div class="input-icon input-icon-right">
									<input type="text" name="actualpctg" data-ap="" id="actualpctg" class="form-control tolexpnse-b addcostrslt-b actualpctg" value="" disabled="" readonly="">
									 <i>%</i>
									</div>
								</div>
							</td>
							<td>
								<div class="form-group">
									<div class="input-icon input-icon-right">
									<input type="text" name="actualpctg2" data-ap2="" id="actualpctg2" class="form-control tolexpnse-b addcostrslt-b actualpctg2" value="" disabled="" readonly="">
										 <i>%</i>
									</div>
								</div>
								<td></td>
							</td>
						</tr>
					
						<tr>
						<tr>
							<td>Basic Child Support Obligation for Time with Other Party</td>
							<td>
								<div class="form-group">
									<input type="text" name="bchildsprtop" data-bcso="" id="bchildsprtop" class="form-control tolexpnse-b addcostrslt-b bchildsprtop" value="0" readonly="" disabled="disabled">
								</div>
							</td>
							<td>
								<div class="form-group">
									<input type="text" name="bchildsprtop2" data-bcso2="" id="bchildsprtop2" class="form-control tolexpnse-b addcostrslt-b bchildsprtop2" value="0" readonly="" disabled="disabled">
								</div>
								<td></td>
							</td>
						</tr>

						<tr>
							<td>Additional Costs </td>
							<td colspan="2"></td>
							<td></td>
						</tr>
						<tr>
							<td>a. Child Care Costs</td>
							<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="carecost-b" id="carecost-b" class="form-control addnlcost carecost-b" value="">
								</div>
							</td>
							<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="carecost-ba" id="carecost-ba" class="form-control addnlcost carecost-b" value="">
								</div>
							</td>	
							<td>
								<div class="form-group">
									<input type="text" name="" data-bcso2="" id="carecost-btol" class="form-control " value="0" readonly="" disabled="disabled">
								</div>
							<td>						
						</tr>
						<tr>
							<td>b. Child's Health Insurance Premium</td>
							<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="healthinsurnce-b" id="healthinsurnce-b" class="form-control addnlcost healthinsurnce-b" value="">
								</div>
							</td>
							<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="healthinsurnce-ba" id="healthinsurnce-ba" class="form-control addnlcost healthinsurnce-b" value="">
								</div>
							</td>
							<td>
								<div class="form-group">
									<input type="text" name="" data-bcso2="" id="healthinsurnce-btol" class="form-control " value="0" readonly="" disabled="disabled">
								</div>
							<td>	
						</tr>
						<tr>
							<td>c. Extra Medical Expenses (uninsured only)</td>
							<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="medicalexpense-b" id="medicalexpense-b" class="form-control addnlcost medicalexpense-b" value="">
								</div>
							</td>
							<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="medicalexpense-ba" id="medicalexpense-ba" class="form-control addnlcost medicalexpense-b" value="">
								</div>
							</td>
							<td>
								<div class="form-group">
									<input type="text" name="" data-bcso2="" id="medicalexpense-btol" class="form-control " value="0" readonly="" disabled="disabled">
								</div>
							<td>	
						</tr>
						<tr>
							<td>d. Extra Expenses (Agreed by parties or court)</td>
							<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="extraexpense-b" id="extraexpense-b" class="form-control addnlcost extraexpense-b" value="">
								</div>
							</td>
							<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="extraexpense-ba" id="extraexpense-ba" class="form-control addnlcost extraexpense-b" value="">
								</div>
							</td>
							<td>
								<div class="form-group">
									<input type="text" name="" data-bcso2="" id="extraexpense-btol" class="form-control " value="0" readonly="" disabled="disabled">
								</div>
							<td>	
						</tr>
						<tr>
							<td>e. Optional, Minus Extraordinary Expenses</td>
							<td>
								<div class="form-group dollar">
									<input type="number" name="childicome-b" id="childicome-b" class="form-control addnlcost childicome-b" value="">
								</div>
							</td>
							<td>
								<div class="form-group dollar">
									<input type="number" name="childicome-ba" id="childicome-ba" class="form-control addnlcost childicome-b" value="">
								</div>
							</td>
							<td>
								<div class="form-group">
									<input type="text" name="" data-bcso2="" id="childicome-btol" class="form-control " value="0" readonly="" disabled="disabled">
								</div>
							<td>	
						</tr> 

						<tr>
							<td>Total Expenses</td>
							<td  colspan="2"></td>
							<td>
								<div class="form-group">
									<input type="text" name="totalexpense" data-txp="" id="totalexpense" class="form-control addnlcost totalexpense" value="0" readonly disabled="disabled">
								</div>
							</td>
						</tr>

						<tr>
							<td>Each Party's Proportionate Share of Expenses</td>
							<td>
								<div class="form-group">
									<input type="text" name="shareexpense" data-txp="" id="shareexpense" class="form-control addnlcost shareexpense" value="0" readonly disabled="disabled">
								</div>
							</td>
							<td>
								<div class="form-group">
									<input type="text" name="shareexpense2" data-txp="" id="shareexpense2" class="form-control addnlcost shareexpense2" value="0" readonly disabled="disabled">
								</div>
							</td>
							<td></td>
						</tr>
						<tr>
							<td>Direct Payments Made By Any Party on Behalf of Child</td>
							<td>
								<div class="form-group dollar">
									<input type="number" name="directpaymntb" data-pdirt="" id="directpaymntb" class="form-control addnlcost directpaymntb" disabled="" readonly="" value="">
								</div>
							</td>
							<td>
								<div class="form-group dollar">
									<input type="number" name="directpaymntb2" data-pdirt="" id="directpaymntb2" class="form-control addnlcost directpaymntb2" value="" disabled="" readonly="">
								</div>
							</td>
							<td></td>
						</tr>
						

						<tr>
							<td>Each Party's Child Support Obligation</td>
							<td>
								<div class="form-group">
									<input type="text" name="csobligation" data-txp="" id="csobligation" class="form-control addnlcost csobligation" value="" readonly disabled="disabled">
								</div>
							</td>
							<td>
								<div class="form-group">
									<input type="text" name="csobligation2" data-txp="" id="csobligation2" class="form-control addnlcost csobligation2" value="" readonly disabled="disabled">
								</div>
							</td>
							<td></td>
						</tr>

						<tr class="resltrow">
							<td>Recommended Child Support</td>
							<td>
								<div class="form-group">
									<!--<input type="number" name="suportoblig-b" id="suportoblig-bold" class="form-control suportoblig-b" value="0" data-osb="" data-oval="" data-nval="" readonly="" disabled="disabled">-->
								</div>
							</td>
							<td>
								<div class="form-group">
									<input type="text" name="suportoblig1-b" id="suportoblig1-bold" class="form-control suportoblig-b" value="0" data-osb="" data-oval="" data-nval="" readonly="" disabled="disabled">
								</div>
							</td>
							<td><a class="btn btn-md btn-warning resetcal" id="resetcal-b">Reset</a></td>
						</tr>
					</tbody>
			
				</table>
				</div>	
			</div>		

			
		<?php } ?>
		</div>	
	</div>
	<br>
	
</div>
<div class="container">
	<div class="row">
	<div class="disclmer col-md-12">
		<b>DISCLAIMER:</b> Please note that the provided calculators are for instructional and educational purposes only. They are not intended to be used as legal advice.

Child support in Louisiana is calculated using the Louisiana Child Support Guidelines.  There are other factors used to determine income and also other factors that can impact the ultimate obligation ordered by the Court.  

This calculator is meant to assist, however, it should not be relied upon as indicative of what a Court will calculate or order.  Before you make any decisions about support, see an attorney for legal counsel.
	</div>
</div>
</div>
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
<!--<p class='esi-link'><a href='https://www.eversparkinteractive.com/law-firm-seo/'> Law Firm SEO by EverSpark Interactive</a><br></p>-->
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
    var cp, ncp = 0;
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
		jQuery("#shareincomp").val('0%');
        jQuery("#shareincom-ncp").attr("data-ncp",ncpper);
    }
  }

   jQuery("#carecostpa").keyup(function() {
      var cc =0;
      cc =jQuery(this).val();
      if(cc==''){cc=0;}
      var ccpb =jQuery("#carecostpb").val();
      if(ccpb==''){ccpb=0;}
      var hipa =jQuery("#healthinsurncepa").val();
      if(hipa==''){hipa=0;}
      var hipb =jQuery("#healthinsurncepb").val();
      if(hipb==''){hipb=0;}
      var mdepa =jQuery("#medicalexpensepa").val();
      if(mdepa==''){mdepa=0;}
      var mdepb =jQuery("#medicalexpensepb").val();
      if(mdepb==''){mdepb=0;}
      var cd = jQuery("#childexp").val();
      if(cd==''){cd=0;}
      var gross_in=0;

      gross_in = parseInt(cc) + parseInt(ccpb) + parseInt(hipa) + parseInt(hipb) + parseInt(mdepa) + parseInt(mdepb) + parseInt(cd);
      jQuery("#totalcarecst").val(gross_in)
      finalresult(gross_in,cc,ccpb);
   });

 jQuery("#carecostpb").keyup(function() {

      var cc =0;
      cc =jQuery(this).val();
      if(cc==''){cc=0;}
      var ccpa =jQuery("#carecostpa").val();
      if(ccpa==''){ccpa=0;}
      var hipa =jQuery("#healthinsurncepa").val();
      if(hipa==''){hipa=0;}
      var hipb =jQuery("#healthinsurncepb").val();
      if(hipb==''){hipb=0;}
      var mdepa =jQuery("#medicalexpensepa").val();
      if(mdepa==''){mdepa=0;}
      var mdepb =jQuery("#medicalexpensepb").val();
      if(mdepb==''){mdepb=0;}
      var cd = jQuery("#childexp").val();
      if(cd==''){cd=0;}
      var gross_in=0;
 
      gross_in = parseInt(cc) + parseInt(ccpa) + parseInt(hipa) + parseInt(hipb) + parseInt(mdepa) + parseInt(mdepb) + parseInt(cd);
      jQuery("#totalcarecst").val(gross_in)
      finalresult(gross_in,ccpa,cc);
   });

  jQuery("#healthinsurncepa").keyup(function() {
      var hi =0;
      hi =jQuery(this).val();
      if(hi==''){hi=0;}
      var hipb =jQuery("#healthinsurncepb").val();
      if(hipb==''){hipb=0;}
      var ccpa =jQuery("#carecostpa").val();
      if(ccpa==''){ccpa=0;}
      var ccpb =jQuery("#carecostpb").val();
      if(ccpb==''){ccpb=0;}
      var mdepa =jQuery("#medicalexpensepa").val();
      if(mdepa==''){mdepa=0;}
      var mdepb =jQuery("#medicalexpensepb").val();
      if(mdepb==''){mdepb=0;}
      var tc = jQuery("#childexp").val();
      var gross_in=0;

      gross_in = parseInt(hi) + parseInt(hipb) + parseInt(ccpa) + parseInt(ccpb) + parseInt(mdepa) + parseInt(mdepb) + parseInt(tc);
      jQuery("#totalhinsurance").val(gross_in);

       finalresult(gross_in,hi,hipb);
   });

  jQuery("#healthinsurncepb").keyup(function() {
     //jQuery(".fdsble, #carecost").attr("disabled", 'disabled');
      var hi =0;
      hi =jQuery(this).val();
      if(hi==''){hi=0;}
      var hipa =jQuery("#healthinsurncepa").val();
      if(hipa==''){hipa=0;}
      var ccpa =jQuery("#carecostpa").val();
      if(ccpa==''){ccpa=0;}
      var ccpb =jQuery("#carecostpb").val();
      if(ccpb==''){ccpb=0;}
      var mdepa =jQuery("#medicalexpensepa").val();
      if(mdepa==''){mdepa=0;}
      var mdepb =jQuery("#medicalexpensepb").val();
      if(mdepb==''){mdepb=0;}
      var tc = jQuery("#childexp").val();
      var gross_in=0;
      
      gross_in = parseInt(hi) + parseInt(hipa ) + parseInt(ccpa) + parseInt(ccpb) + parseInt(mdepa) + parseInt(mdepb) + parseInt(tc);
      jQuery("#totalhinsurance").val(gross_in);

       finalresult(gross_in,hipa,hi);
   });

   jQuery("#medicalexpensepa").keyup(function() {
     //jQuery(".fdsble, #carecost, #healthinsurnce").attr("disabled", 'disabled');
      var mc =jQuery(this).val();
      if(mc==''){mc=0;}
      var ccpa =jQuery("#carecostpa").val();
      if(ccpa==''){ccpa=0;}
      var ccpb =jQuery("#carecostpb").val();
      if(ccpb==''){ccpb=0;}
      var hipa =jQuery("#healthinsurncepa").val();
      if(hipa==''){hipa=0;}
      var hipb =jQuery("#healthinsurncepb").val();
      if(hipb==''){hipb=0;}
      var mdepb =jQuery("#medicalexpensepb").val();
      if(mdepb==''){mdepb=0;}
      var tc = jQuery("#childexp").val();
      var gross_in=0;


      gross_in = parseInt(mc) + parseInt(ccpa) + parseInt(ccpb) + parseInt(hipa) + parseInt(hipb) + parseInt(mdepb) + parseInt(tc);
      jQuery("#totalmexpense").val(gross_in);
      
      finalresult(gross_in,mc,mdepb);;
   });

   jQuery("#medicalexpensepb").keyup(function() {
    //jQuery(".fdsble, #carecost, #healthinsurnce, #medicalexpense").attr("disabled", 'disabled');
      var ee =0;
      ee =jQuery(this).val();
      if(ee==''){ee=0;}
      var ccpa =jQuery("#carecostpa").val();
      if(ccpa==''){ccpa=0;}
      var ccpb =jQuery("#carecostpb").val();
      if(ccpb==''){ccpb=0;}
      var hipa =jQuery("#healthinsurncepa").val();
      if(hipa==''){hipa=0;}
      var hipb =jQuery("#healthinsurncepb").val();
      if(hipb==''){hipb=0;}
      var mdepa =jQuery("#medicalexpensepa").val();
      if(mdepa==''){mdepa=0;}
      var tc = jQuery("#childexp").val();
      var gross_in=0;


      gross_in = parseInt(ee) + parseInt(ccpa) + parseInt(ccpb) + parseInt(hipa) + parseInt(hipb) + parseInt(mdepa) + parseInt(tc);
      
      jQuery("#totalmexpense").val(gross_in);
 			finalresult(gross_in,mdepa,ee);
   });

   jQuery("#extraexpensepa").keyup(function() {
    //jQuery(".fdsble, #carecost, #healthinsurnce, #medicalexpense").attr("disabled", 'disabled');
      var ee =0;
      ee =jQuery(this).val();
      if(ee==''){ee=0;}
      var ccpa =jQuery("#carecostpa").val();
      if(ccpa==''){ccpa=0;}
      var ccpb =jQuery("#carecostpb").val();
      if(ccpb==''){ccpb=0;}
      var hipa =jQuery("#healthinsurncepa").val();
      if(hipa==''){hipa=0;}
      var hipb =jQuery("#healthinsurncepb").val();
      if(hipb==''){hipb=0;}
      var mdepa =jQuery("#medicalexpensepa").val();
      if(mdepa==''){mdepa=0;}
      var mdepb =jQuery("#medicalexpensepb").val();
      if(mdepb==''){mdepb=0;}
      var expb =jQuery("#extraexpensepb").val();
      if(expb==''){expb=0;}
      var tc = jQuery("#childexp").val();
      var gross_in=0;


      gross_in = parseInt(ee) + parseInt(expb) + parseInt(ccpa) + parseInt(ccpb) + parseInt(hipa) + parseInt(hipb) + parseInt(mdepa) + parseInt(mdepb) + parseInt(tc);
      
      jQuery("#tolextrexpense").val(gross_in);
 			finalresult(gross_in,ee,expb);

   });

    jQuery("#extraexpensepb").keyup(function() {
    //jQuery(".fdsble, #carecost, #healthinsurnce, #medicalexpense").attr("disabled", 'disabled');
      var ee =0;
      ee =jQuery(this).val();
      if(ee==''){ee=0;}
      var ccpa =jQuery("#carecostpa").val();
      if(ccpa==''){ccpa=0;}
      var ccpb =jQuery("#carecostpb").val();
      if(ccpb==''){ccpb=0;}
      var hipa =jQuery("#healthinsurncepa").val();
      if(hipa==''){hipa=0;}
      var hipb =jQuery("#healthinsurncepb").val();
      if(hipb==''){hipb=0;}
      var mdepa =jQuery("#medicalexpensepa").val();
      if(mdepa==''){mdepa=0;}
      var mdepb =jQuery("#medicalexpensepb").val();
      if(mdepb==''){mdepb=0;}
      var expa =jQuery("#extraexpensepa").val();
      if(expa==''){expa=0;}
      var tc = jQuery("#childexp").val();
      var gross_in=0;


      gross_in = parseInt(ee) + parseInt(expa) + parseInt(ccpa) + parseInt(ccpb) + parseInt(hipa) + parseInt(hipb) + parseInt(mdepa) + parseInt(mdepb) + parseInt(tc);
      
      jQuery("#tolextrexpense").val(gross_in);
 			finalresult(gross_in,expa,ee);

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
					if(e=='fail'){e=0;}
                    jQuery("#childexp").val(e);
                    finalresult(e);

                },
            });
        }
    });    
});
function finalresult(result,prnta,prntb){
	  if(prnta=='' || prnta==undefined){ prnta=0; }
	  if(prntb=='' || prntb==undefined){ prntb=0; }
    var cpf = jQuery("#shareincomcp").attr("data-cp");
    var ncpf = jQuery("#shareincom-ncp").attr("data-ncp");
    var cvala=parseInt(prnta);
    var cvalb=parseInt(prntb);
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
    jQuery(".fdsble, #carecostpa, #carecostpb, #healthinsurnce, #medicalexpense").removeAttr("disabled");
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
					if(e=='fail'){e=0;}
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
    actualprctg();
    //actualpercentge(tolcbb);
}
function actualprctg(){
	    jQuery("#actualpctg").val(50);
      jQuery("#actualpctg2").val(50);
      var cp =50;
       var tol_ap=0;
       var tcs = jQuery("#tchildsuprt2").attr("data-tcs2");
       if(tcs !=''){
         tol_ap = (parseInt(cp)/100)*parseInt(tcs);
          jQuery("#bchildsprtop2").val(formatMoney_b(tol_ap));
          jQuery("#bchildsprtop2").attr("data-bcso",tol_ap);
       }
      var tcs2 = jQuery("#tchildsuprt").attr("data-tcs");
      if(tcs2 !=''){
        tol_ap = (parseInt(cp)/100)*parseInt(tcs2);
          jQuery("#bchildsprtop").val(formatMoney_b(tol_ap));
          jQuery("#bchildsprtop").attr("data-bcso2",tol_ap);
       }
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
      var ccb =jQuery("#carecost-ba").val();
      if(ccb==''){ccb=0;}
      jQuery("#carecost-btol").val(parseInt(cc) + parseInt(ccb));
      totalexpseb(cc,ccb);
   });

  jQuery("#carecost-ba").keyup(function() {
      var cc =0;
      cc =jQuery(this).val();
      if(cc==''){cc=0;}
      var ccb =jQuery("#carecost-b").val();
      if(ccb==''){ccb=0;}
      jQuery("#carecost-btol").val(parseInt(cc) + parseInt(ccb));
      totalexpseb(cc,ccb);
   });

  jQuery("#healthinsurnce-b").keyup(function() {
     //jQuery("#carecost-b").attr("disabled", 'disabled');
      var hi =jQuery(this).val();
      if(hi==''){hi=0;}
      var hib =jQuery("#healthinsurnce-ba").val();
      if(hib==''){hib=0;}
      jQuery("#healthinsurnce-btol").val(parseInt(hi) + parseInt(hib));
      totalexpseb(hi,hib);
   });

  jQuery("#healthinsurnce-ba").keyup(function() {
     //jQuery("#carecost-b").attr("disabled", 'disabled');
      var hi =jQuery(this).val();
      if(hi==''){hi=0;}
      var hib =jQuery("#healthinsurnce-b").val();
      if(hib==''){hib=0;}
      jQuery("#healthinsurnce-btol").val(parseInt(hi) + parseInt(hib));
      totalexpseb(hi,hib);
   });
  	
   jQuery("#medicalexpense-b").keyup(function() {
     //jQuery("#carecost-b, #healthinsurnce-b").attr("disabled", 'disabled');
      var mc =jQuery(this).val();
      if(mc==''){mc=0;}
      var mcb =jQuery("#medicalexpense-ba").val();
      if(mcb==''){mcb=0;}
     jQuery("#medicalexpense-btol").val(parseInt(mc) + parseInt(mcb));
     totalexpseb(mc,mcb);

   });

    jQuery("#medicalexpense-ba").keyup(function() {
      var mc =jQuery(this).val();
      if(mc==''){mc=0;}
      var mcb =jQuery("#medicalexpense-b").val();
      if(mcb==''){mcb=0;}
     jQuery("#medicalexpense-btol").val(parseInt(mc) + parseInt(mcb));
      totalexpseb(mc,mcb);

   });

   jQuery("#extraexpense-b").keyup(function() {
    var ext =jQuery(this).val();
    if(ext==''){ext=0;}
    var extb =jQuery("#extraexpense-ba").val();
    if(extb==''){extb=0;}
    jQuery("#extraexpense-btol").val(parseInt(ext) + parseInt(extb));
    totalexpseb(ext,extb);
   });

   jQuery("#extraexpense-ba").keyup(function() {
    var ext =jQuery(this).val();
    if(ext==''){ext=0;}
    var extb =jQuery("#extraexpense-b").val();
    if(extb==''){extb=0;}
    jQuery("#extraexpense-btol").val(parseInt(ext) + parseInt(extb));
    totalexpseb(ext,extb);
   });

    jQuery("#childicome-b").keyup(function() {
      //jQuery("#carecost-b, #healthinsurnce-b, #medicalexpense-b,#extraexpense-b").attr("disabled", 'disabled');
			var ch =jQuery(this).val();
			if(ch==''){ch=0;}
			var chb =jQuery("#childicome-ba").val();
			if(chb==''){chb=0;}
			jQuery("#childicome-btol").val(parseInt(ch) + parseInt(chb));
			totalexpseb(ch,chb);
  });

   jQuery("#childicome-ba").keyup(function() {
			var ch =jQuery(this).val();
			if(ch==''){ch=0;}
			var chb =jQuery("#childicome-b").val();
			if(chb==''){chb=0;}
			jQuery("#childicome-btol").val(parseInt(ch) + parseInt(chb));
			totalexpseb(ch,chb);
  });
    
function totalexpseb(){
  		var tc = jQuery("#carecost-btol").val();
  		var thb = jQuery("#healthinsurnce-btol").val();
  		var tmb = jQuery("#medicalexpense-btol").val();
  		var teb = jQuery("#extraexpense-btol").val();
  		var tcb = jQuery("#childicome-btol").val();
      if(tc==''){tc=0;}
      if(thb==''){thb=0;}
      if(tmb==''){tmb=0;}
      if(teb==''){teb=0;}
      if(tcb==''){tcb=0;}
  		gross_in=0;
  		gross_in = parseInt(tc)+parseInt(thb)+ parseInt(tmb)+parseInt(teb)+parseInt(tcb);
      jQuery("#totalexpense").val(formatMoney_b(gross_in));
      jQuery("#totalexpense").attr("data-txp",gross_in);
      shareexpense()
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
    directpayauto(); 
}

function directpayauto(){
	  var tc = jQuery("#carecost-b").val();
		var thb = jQuery("#healthinsurnce-b").val();
		var tmb = jQuery("#medicalexpense-b").val();
		var teb = jQuery("#extraexpense-b").val();
		var tcb = jQuery("#childicome-b").val();
    if(tc==''){tc=0;} if(thb==''){thb=0;} if(tmb==''){tmb=0;} if(teb==''){teb=0;} if(tcb==''){tcb=0;}

    var tca = jQuery("#carecost-ba").val();
		var thba = jQuery("#healthinsurnce-ba").val();
		var tmba = jQuery("#medicalexpense-ba").val();
		var teba = jQuery("#extraexpense-ba").val();
		var tcba = jQuery("#childicome-ba").val();
    if(tca==''){tca=0;} if(thba==''){thba=0;} if(tmba==''){tmba=0;} if(teba==''){teba=0;} if(tcba==''){tcba=0;}

    var totalexp = 0;
    var ncf = jQuery("#shareincomcp-b").attr("data-cp");
    var ncpf = jQuery("#shareincom-ncp-b").attr("data-ncp");
    if(ncf){
    	  totalexp=parseInt(tc)+parseInt(thb)+ parseInt(tmb)+parseInt(teb)+parseInt(tcb);
        var tolexp= Math.round((ncf/100)*totalexp);
        jQuery('#directpaymntb').val(tolexp);
    }
    if(ncpf){
    	  totalexp=parseInt(tca)+parseInt(thba)+ parseInt(tmba)+parseInt(teba)+parseInt(tcba);
        var tolexp= Math.round((ncpf/100)*totalexp);
        jQuery('#directpaymntb2').val(tolexp);
    }   
    childsuprtoblgtion(); 
}

 function childsuprtoblgtion(){
    var chldsprt1 = jQuery("#bchildsprtop").attr("data-bcso2");
    var chldsprt2 = jQuery("#bchildsprtop2").attr("data-bcso");
    var dtpy2 = jQuery("#directpaymntb").val();
    var dtpyb2 = jQuery("#directpaymntb2").val();
    var shrexpse1 = jQuery("#shareexpense").val();
    var shrexpse2 = jQuery("#shareexpense2").val();
    
    if(chldsprt1 && shrexpse1){
        var tolexp1= (parseInt(chldsprt1)+parseInt(shrexpse1))-parseInt(dtpy2);
        jQuery('#csobligation').val(tolexp1);
        jQuery('#csobligation').attr('data-txp', tolexp1);
    }
   if(chldsprt2 && shrexpse2){
         var tolexp2= (parseInt(chldsprt2)+parseInt(shrexpse2))-parseInt(dtpyb2);
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
		var ccpb =jQuery("#carecostpb").val();
		if(ccpb==''){ccpb=0;}
		var hipb =jQuery("#healthinsurncepb").val();
		if(hipb==''){hipb=0;}
		var mdepb =jQuery("#medicalexpensepb").val();
		if(mdepb==''){mdepb=0;}
		var extpnse =jQuery("#extraexpensepb").val();
		if(extpnse==''){extpnse=0;}
		var tolexp=parseInt(ccpb)+parseInt(hipb)+parseInt(mdepb)+parseInt(extpnse);
		jQuery("#directpayment").val(tolexp);
    //var spt = parseInt(jQuery("#suportoblig").val());
    var spt1 = parseInt(jQuery("#suportoblig1").val());
    var dpay = parseInt(jQuery("#directpayment").val());
    //jQuery("#remchsprtodr").val('$'+spt);
    var frslt= spt1-dpay;
    jQuery("#remchsprtodr1").val('$'+frslt);
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