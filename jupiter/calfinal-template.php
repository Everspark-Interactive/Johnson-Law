<?php
/*
Template Name: CalFpage
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
	#mk-footer, #mk-footer p {font-size: 14px;color: #808080;width: 100%;height: 63px;font-weight: 400;display: flex;} #sub-footer {background-color: #0e6088;display: inline-block;width: 100%;}
	p.esi-link {margin: 2em 24em;} #mk-footer-unfold-spacer{display: table-cell;}
	#worksheetdata input[type="number"],#worksheetdata-b input[type="number"] {height: 22px;width: 88%;}
	#carecost, #healthinsurnce, #medicalexpense, #extraexpense,#carecost-b, #healthinsurnce-b, #medicalexpense-b, #extraexpense-b {width: auto;}
	#numbrchild,#numbrchild-b{width: 50%;}
	.resltrow{color: #fff;font-weight: 700;background: #0e6088 !important;}.resltrow input{font-weight: 800;}
	table tbody .form-group{text-align: center !!important;text-align: -webkit-center !important;}
	.disclmer{margin-top: 7em;font-size: 16px;}
	#mk-breadcrumbs .mk-breadcrumbs-inner.dark-skin,#mk-breadcrumbs .mk-breadcrumbs-inner.dark-skin a {color: #4d4d4d !important;}
	@media (min-width: 1000px){
		.bigclmn{width: 40%;}
		.dollar{display:inline-block;position: relative;}
    .dollar input{padding-left:15px;}
    .dollar:before {position: absolute;content:"$";left:7px;top:8px;color: #7a7a7a;font-size:13px;}
    .dlrsmfield:before {left:48px !important;}
    .dlrtp:before{top: 9px !important;}
	}
	@media (max-width: 480px){
		body{overflow-x: auto;} form{margin-top: 1.5em !important;}
		 #mk-footer-unfold-spacer{display: none !important;} #grossincome{width: 100px;}
		 .form-group.col-xs-6 #grossincome,.form-group.col-xs-6 #grossincome-b{width: 100% !important;margin-left: -30px;}
		 #numbrchild, #numbrchild-b {width: 100%;}
		 #carecost, #healthinsurnce, #medicalexpense, #extraexpense, #carecost-b, #healthinsurnce-b, #medicalexpense-b, #extraexpense-b{width: 80% !important;}
		 select#doyouhave {width: 70%;}
		 .col-xs-6 {width: 40% !important;}
		 #worksheetdata-b{margin-right: 0px !important;}
		 form label {font-size: 16px !important;font-weight: normal !important;}
		 .disclmer{font-size: 15px;}
		 .dollar{display:inline-block;position: relative;}
    .dollar input{padding-left:15px;}
    .dollar:before {position: absolute;content:"$";left:20px;top:2px;color: #7a7a7a;font-size:13px;}
    .dollar:before {position: absolute;content:"$";left:20px;top:2px;color: #7a7a7a;font-size:13px;}
    .dlrtp1:before{top: 38px !important;}
	}
		@media (max-width: 385px){
			.col-xs-12.form-group{padding: 0 0 0 7px !important;}

		}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form class="col-md-4 col-xs-12">
				<div class="form-group">
					<label for=""><strong>Do you have:</strong></label>
					<select name="" id="doyouhave" class="form-control" required="required">
						<option value="">---Select Worksheet---</option>
						<option value="stdjntc">Standard Joint Custody</option>
						<option value="shrdc">Shared Custody</option>
					</select>
				</div>
			</form>
			<?php if(wp_is_mobile()){?>

						<div id="worksheetdata" class="col-md-12 worksheetdata row" style="display: none;">
							<form>
								<div class="row">
									<div class="col-xs-12 form-group">
										<div class="col-xs-12"><label class="form-group">Monthly Gross Income</label></div>
										<div class="form-group col-xs-6 dollar dlrtp1">
											<label for="">Parent A</label>
											<input type="number" name="custodialp" id="custodialp" class="form-control custodialp fdsble" value=""  required="required">
										</div>
										<div class="form-group col-xs-6 dollar dlrtp1">
											<label for="">Parent B</label>
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
										<div class="col-xs-12"><label class="form-group">How many children do they have?</label></div>
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
											<input type="number" name="carecost" id="carecost" class="form-control addnlcost carecost" value="">
										</div>
										<div class="form-group col-xs-6 dollar">
											<input type="text" name="totalcarecst" id="totalcarecst" class="form-control tolexpnse addcostrslt addcostrslt totalcarecst" value="0" readonly="" disabled="disabled">
										</div>
									</div>
									<div class="col-xs-12 form-group">
										<div class="col-xs-12"><label class="form-group">Child's Health Insurance Premium</label></div>
										<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
											<input type="number" name="healthinsurnce" id="healthinsurnce" class="form-control addnlcost healthinsurnce" value="">
										</div>
										<div class="form-group col-xs-6 dollar">
											<input type="text" name="totalhinsurance" id="totalhinsurance" class="form-control tolexpnse addcostrslt totalhinsurance" value="0" readonly="" disabled="disabled">
										</div>
									</div>
									<div class="col-xs-12 form-group">
										<div class="col-xs-12"><label class="form-group">Extra Medical Expenses (uninsured only)</label></div>
										<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
											<input type="number" name="medicalexpense" id="medicalexpense" class="form-control addnlcost medicalexpense" value="">
										</div>
										<div class="form-group col-xs-6 dollar">
											<input type="text" name="totalmexpense" id="totalmexpense" class="form-control tolexpnse addcostrslt totalmexpense" value="0" readonly="" disabled="disabled">
										</div>
									</div>
									<div class="col-xs-12 form-group">
										<div class="col-xs-12"><label class="form-group">Extra Expenses (Agreed by parties or court)</label></div>
										<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
											<input type="number" name="extraexpense" id="extraexpense" class="form-control addnlcost extraexpense" value="">
										</div>
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
										<div class="form-group col-xs-2">
										</div>
										<div class="form-group col-xs-6 dollar dlrtp">
											<input type="number" name="directpayment" id="directpayment" class="form-control directpayment" value="">
										</div>
										
									</div>
									<div class="col-xs-12 form-group">
										<div class="col-xs-12"><label class="form-group">Recommended Child support order</label></div>
										<div class="form-group col-xs-6">
											<input type="text" name="remchsprtodr" id="remchsprtodr" class="form-control remchsprtodr" value="0" readonly="" disabled="disabled">
										</div>
										<div class="form-group col-xs-6">
											<input type="text" name="remchsprtodr1" id="remchsprtodr1" class="form-control remchsprtodr" value="0" readonly="" disabled="disabled">
										</div>
										
									</div>
								</div>
								<div class="form-group col-xs-12"><a class="btn btn-md btn-warning" id="resetcal">Reset</a></div>
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
										<div class="col-xs-12"><label class="form-group">How many children do they have?</label></div>
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
												<input type="text" name="actualpctg" data-ap="" id="actualpctg" class="form-control tolexpnse-b addcostrslt-b actualpctg" value="">
												<i>%</i>
											</div>
										</div>
										<div class="form-group col-xs-6">
											<div class="input-icon input-icon-right">
												<input type="text" name="actualpctg2" data-ap2="" id="actualpctg2" class="form-control tolexpnse-b addcostrslt-b actualpctg2" value="" >
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
										<div class="col-xs-12"><label class="form-group">Additional Costs:</label></div>
										<div class="form-group col-xs-10 dollar dlrsmfield dlrtp1">
											<label for="">a. Child Care Costs</label>
											<input type="number" name="carecost-b" id="carecost-b" class="form-control addnlcost carecost-b" value="">
										</div>
									</div>
									<div class="col-xs-12 form-group ">
										<div class="col-xs-10"><label class="form-group">b. Child's Health Insurance Premium</label></div>
										<div class="form-group col-xs-10 dollar dlrsmfield dlrtp">
											<input type="number" name="healthinsurnce-b" id="healthinsurnce-b" class="form-control addnlcost healthinsurnce-b" value="">
										</div>
									</div>
									<div class="col-xs-12 form-group">
										<div class="col-xs-10"><label class="form-group">c. Extra Medical Expenses (uninsured only)</label></div>
										<div class="form-group col-xs-10 dollar dlrsmfield dlrtp">
											<input type="number" name="medicalexpense-b" id="medicalexpense-b" class="form-control addnlcost medicalexpense-b" value="">
										</div>
									</div>
									<div class="col-xs-12 form-group">
										<div class="col-xs-10"><label class="form-group">d. Extra Expenses (Agreed by parties or court)</label></div>
										<div class="form-group col-xs-10 dollar dlrsmfield dlrtp">
											<input type="number" name="extraexpense-b" id="extraexpense-b" class="form-control addnlcost extraexpense-b" value="">
										</div>
									</div>
									<div class="col-xs-12 form-group">
										<div class="col-xs-10"><label class="form-group">e. Optional, Minus Extraordinary Expenses</label></div>
										<div class="form-group col-xs-10 dollar dlrsmfield dlrtp">
											<input type="number" name="childicome" id="childicome" class="form-control addnlcost childicome" value="">
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
											<input type="number" name="directpaymntb" data-txp="" id="directpaymntb" class="form-control addnlcost directpaymntb" value="">
										</div>
										<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
											<input type="number" name="directpaymntb2" data-txp="" id="directpaymntb2" class="form-control addnlcost directpaymntb2" value="">
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
									<div class="col-xs-12 form-group">
										<div class="col-xs-12"><label class="form-group">Recommended Child Support</label></div>
										<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
											<input type="number" name="suportoblig-b" id="suportoblig-bold" class="form-control suportoblig-b" value="0" readonly="" disabled="disabled">
										</div>
										<div class="form-group col-xs-6 dollar dlrsmfield dlrtp">
											<input type="text" name="suportoblig1-b" id="suportoblig1-bold" class="form-control suportoblig-b" value="0" readonly="" disabled="disabled">
										</div>
									</div>
								</div>
								<div class="form-group col-xs-12"><a class="btn btn-md btn-warning resetcal" id="resetcal-b">Reset</a></div>
							</form>
					</div>

			<?php }else{?>	
			<div id="worksheetdata" class="col-md-12 worksheetdata row" style="display: none;">
				<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th></th>
							<th>Parent A</th>
							<th>Parent B</th>
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
							<td>How many children do they have? </td>
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
							<td colspan="2">
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="carecost" id="carecost" class="form-control addnlcost carecost" value="">
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
							<td colspan="2">
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="healthinsurnce" id="healthinsurnce" class="form-control addnlcost healthinsurnce" value="">
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
							<td colspan="2">
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="medicalexpense" id="medicalexpense" class="form-control addnlcost medicalexpense" value="">
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
							<td colspan="2">
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="extraexpense" id="extraexpense" class="form-control addnlcost extraexpense" value="">
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
									<input type="number" name="directpayment" id="directpayment" class="form-control directpayment" value="">
								</div>
							</td>
							<td></td>
						</tr>
						<tr class="resltrow">
							<td class="last-ro">Recommended Child support order</td>
							<td>
								<div class="form-group">
									<input type="text" name="remchsprtodr" id="remchsprtodr" class="form-control remchsprtodr" value="0" readonly="" disabled="disabled">
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
							<td>How many children do they have? </td>
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
									<input type="text" name="actualpctg" data-ap="" id="actualpctg" class="form-control tolexpnse-b addcostrslt-b actualpctg" value="">
									 <i>%</i>
									</div>
								</div>
							</td>
							<td>
								<div class="form-group">
									<div class="input-icon input-icon-right">
									<input type="text" name="actualpctg2" data-ap2="" id="actualpctg2" class="form-control tolexpnse-b addcostrslt-b actualpctg2" value="" >
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
							<td  colspan="2"></td>
							<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="carecost-b" id="carecost-b" class="form-control addnlcost carecost-b" value="">
								</div>
							</td>							
						</tr>
						<tr>
							<td>b. Child's Health Insurance Premium</td>
							<td  colspan="2"></td>
							<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="healthinsurnce-b" id="healthinsurnce-b" class="form-control addnlcost healthinsurnce-b" value="">
								</div>
							</td>
						</tr>
						<tr>
							<td>c. Extra Medical Expenses (uninsured only)</td>
							<td  colspan="2"></td>
							<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="medicalexpense-b" id="medicalexpense-b" class="form-control addnlcost medicalexpense-b" value="">
								</div>
							</td>
						</tr>
						<tr>
							<td>d. Extra Expenses (Agreed by parties or court)</td>
							<td  colspan="2"></td>
							<td>
								<div class="form-group dollar dlrsmfield-old dlrtp">
									<input type="number" name="extraexpense-b" id="extraexpense-b" class="form-control addnlcost extraexpense-b" value="">
								</div>
							</td>
						</tr>
						<tr>
							<td>e. Optional, Minus Extraordinary Expenses</td>
							<td  colspan="2"></td>
							<td>
								<div class="form-group dollar">
									<input type="number" name="childicome" id="childicome" class="form-control addnlcost childicome" value="">
								</div>
							</td>
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
									<input type="number" name="directpaymntb" data-pdirt="" id="directpaymntb" class="form-control addnlcost directpaymntb" value="">
								</div>
							</td>
							<td>
								<div class="form-group dollar">
									<input type="number" name="directpaymntb2" data-pdirt="" id="directpaymntb2" class="form-control addnlcost directpaymntb2" value="">
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
									<input type="number" name="suportoblig-b" id="suportoblig-bold" class="form-control suportoblig-b" value="0" data-osb="" data-oval="" data-nval="" readonly="" disabled="disabled">
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
	<p class="disclmer">
		<b>DISCLAIMER:</b> Please note that the provided calculators are for instructional and educational reasons only. They are not intended to be used as legal advice.

		Judges in each state use their own set of rules to determine the non-custodial parent's monthly child support payment.

		The estimated cost is for base child support only. In addition to standard support, you may need to pay additional expenses (such as medical and dental) as well as job-related childcare costs. Check your court order for the division of expenditures. 

		The amount of child support a court will order in any given case may differ from the one advertised by the calculator. The calculator is using past cases, state calculation models, and external data to calculate an average estimate of child support.

		The calculators do not account for any possible adjustments that state governments may make, such as mandatory retirement or Medicare benefits, or the cost of supporting children from other relationships.

		Finally, because these calculators are based on previous state standards and methods, they may not reflect tax revenue consequences or recent modifications to any state calculation techniques. Check with your state's regulations to ensure you're up to date.

		Before you make any decisions about support, see an attorney for legal counsel.
	</p>
</div>

<?php get_footer('cal');