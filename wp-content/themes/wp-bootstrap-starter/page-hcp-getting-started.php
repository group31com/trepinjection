<?php
/*
Template Name: HCP Getting Started
*/
?>
<?php

get_header();
?>
<div id="trep-injection">
	<div class="row top-bar">
		<div class="col-lg-12">
			<p>FOR HEALTHCARE PROFESSIONALS</p>
		</div>
	</div>
	<div class="row show-xs">
		<div class="col-xs-12 custom-nav">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>/">Patient Site&nbsp;&nbsp;|&nbsp;</a>
			<a href="<?php echo get_template_directory_uri() . '/assets/prescribing-information.pdf'; ?>" target="_blank">Prescribing Information&nbsp;&nbsp;|&nbsp;</a>
			<a href="#isi">Important Safety Information&nbsp;&nbsp;|&nbsp;</a>
			<a href="<?php echo get_template_directory_uri() . '/assets/hcp-referral-form.pdf'; ?>" target="_blank">Referral Form&nbsp;</a>
		</div>
	</div>
	<div class="row show-xs">
		<div class="col-xs-4 now-available-wrap tiny-show">
			<img src="<?php echo get_template_directory_uri() . '/images/now-available.png'; ?>" class="now-available" />
		</div>
		<div class="col-xs-4 inline-header tiny-center">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>/hcp/"><img src="<?php echo get_template_directory_uri() . '/images/trep-logo.png'; ?>" class="trep-logo" /></a>
		</div>
		<div class="col-xs-4 inline-header now-available-wrap tiny-hidden">
			<img src="<?php echo get_template_directory_uri() . '/images/now-available.png'; ?>" class="now-available" />
		</div>
	</div>
	<div class="row header-row hidden-xs">
		<div class="col-3 trep-logo-wrap">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>/hcp/"><img src="<?php echo get_template_directory_uri() . '/images/trep-logo.png'; ?>" class="trep-logo" /></a>
		</div>
		<div class="col-6 custom-nav">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>/">Patient Site&nbsp;&nbsp;|&nbsp;</a>
			<a href="<?php echo get_template_directory_uri() . '/assets/prescribing-information.pdf'; ?>" target="_blank">Prescribing Information&nbsp;&nbsp;|&nbsp;</a>
			<a href="#isi">Important Safety Information&nbsp;&nbsp;|&nbsp;</a>
			<a href="<?php echo get_template_directory_uri() . '/assets/hcp-referral-form.pdf'; ?>" target="_blank">Referral Form&nbsp;</a>
		</div>
		<div class="col-3 now-available-wrap">
			<img src="<?php echo get_template_directory_uri() . '/images/now-available.png'; ?>" class="now-available" />
		</div>
	</div>
	<div class="row secondary-nav">
		<div class="col-lg blue-nav trep-injection-nav hcp-blue-nav">
			<div class="hcp-started-arrow-down"></div>
			<div class="referral-nav hidden-md"><a href="<?php echo get_template_directory_uri() . '/assets/hcp-referral-form.pdf'; ?>" target="_blank">Download the referral form.</a></div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>/hcp/">About Treprostinil Injection&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>/hcp-getting-started/" class="trep-link">Getting Started</a>
		</div>
	</div>
	<div class="row mobile-download show-md">
		<div class="col-xs-12">
			<div class="referral-nav-mobile"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/hcp-referral-form/">Download the referral form.</a></div>		
		</div>
	</div>
	<div class="row body-head">
		<div class="col-lg">
			<h1>Getting Started</h1>
			<div class="orange-line"></div>
		</div>
	</div>
	<div class="row body-copy-ti">
		<div class="col-12">
			<h3>Specialty pharmacy service providers you know and trust</h3>
			<p>You and your patients will be in familiar and capable hands with access to specialty pharmacy (SP) providers with years of experience servicing patients who have been prescribed Remodulin<sup>&reg;</sup> (treprostinil) Injection.</p>
			<h3>The SP that provides Treprostinil Injection can provide</h3>
			<div class="list-padding">
				<p><span style="color: #22647e;">&bull;</span> A familiar and established PAH care team</p>
				<p><span style="color: #22647e;">&bull;</span> Support for generic substitution in accordance with applicable law and prescriber’s instructions</p>
				<p><span style="color: #22647e;">&bull;</span> Benefits investigation research to help patients understand their insurance and out-of-pocket costs</p>
				<p><span style="color: #22647e;">&bull;</span> Consultations to support medication initiation and titration, and injection site management and care</p>
				<br>
			</div>
			<h3>Your patients can receive support through</h3>
			<div class="list-padding">
				<p><span style="color: #22647e;">&bull;</span> In-home training on the safe and effective use of Treprostinil Injection and associated pumps and supplies</p>
				<p><span style="color: #22647e;">&bull;</span> Ongoing clinical counseling and education from licensed pharmacists and nurses</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 no-padding-left">
			<div class="hcp-left-half-round-cta">
				<h3>Accredo Health Group, Inc.</h3>
				<p>Phone <a href="tel:18663444874" style="color: #ffffff; font-weight: 700;">1-866-344-4874</a></p>
				<p>Fax <a href="tel:18007113526" style="color: #ffffff; font-weight: 700;">1-800-711-3526</a></p>
				<br>
				<h3>CVS Specialty<sup>&trade;</sup></h3>
				<p>Phone <a href="tel:18772422738" style="color: #ffffff; font-weight: 700;">1-877-242-2738</a></p>
				<p>Fax <a href="tel:18779431000" style="color: #ffffff; font-weight: 700;">1-877-943-1000</a></p>
			</div>
		</div>		
	</div>
	<div class="row">
		<div class="col-lg-7">
			<h3>Financial assistance for your patients</h3>
			<p>Treprostinil Injection co-payment assistance may be available for patients who qualify.* Your patients may pay as little as $5 per prescription filled for Treprostinil Injection, <b>with up to $8000 in annual co-pay assistance.</b></p>
			<p><a id="modal-trial-link" href="javascript:void(0);" style="color: #22647e; text-decoration: underline;">Get more information</a> about how to help your patients receive co-payment support or financial assistance that may be available.</p>
		</div>
		<div class="col-lg-5">
			<img src="<?php echo get_template_directory_uri() . '/images/trep-sc.png'; ?>" class="hcp-sc" />
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 smaller">
			<p style="color: #22647e; margin-bottom: 0;" class="move-left">*Treprostinil Injection Savings Program Eligibility</p>
			<p>The Treprostinil Injection Savings Program provides up to $8,000 in annual support for patient cost-sharing for prescriptions filled with Sandoz Treprostinil Injection. Your commercially insured patients may pay a co-pay as low as $5 out-of-pocket per Treprostinil Injection prescription filled.  Your patient pays the first $5 for their Treprostinil Injection and Sandoz will pay the balance of their cost-sharing up to $8,000 per year. This program is not health insurance. This program is for commercially-insured patients only; uninsured cash-paying patients are not eligible. Patients are not eligible if prescriptions are paid, in whole or in part, by any state or federally funded programs, including but not limited to Medicare (including Part D, even in the coverage gap) or Medicaid, Medigap, VA, DOD, or TriCare, or private indemnity, or HMO insurance plans that reimburse your patient for the entire cost of their prescription drugs, or where prohibited by law. Card may not be combined with any other rebate, coupon, or offer. Card has no cash value. Sandoz reserves the right to rescind, revoke, or amend this offer without further notice.</p>
			<br>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 sp-list">
			<h3>Get started with Treprostinil Injection</h3>
			<h4>Completing the referral for Treprostinil Injection is a straightforward process.</h4>
			<p>Simply collect the necessary clinical information, complete the referral form, and fax the form and supporting documentation to your selected SP. <a href="<?php echo get_template_directory_uri() . '/assets/hcp-referral-form.pdf'; ?>" target="_blank" style="color: #22647e; text-decoration: underline;">Download the referral form</a>, or talk with your sales representative.</p>
			<div class="gray-cta cta hcp-gray-cta">
				<a href="<?php echo get_template_directory_uri() . '/assets/trep-patient-brochure.pdf'; ?>" target="_blank"><p class="bigger">Download a brochure for patients<br>about Treprostinil Injection.</p></a>
			</div>
		</div>
		<div class="col-lg-5 offset-lg-1 no-padding-right">
			<div class="right-half-round-cta">
				<p class="bigger blue">Remind your patients to answer the phone at initiation and throughout treatment.</p>
				<p class="bigger"><b>Delays can occur if the SP has trouble reaching the patient.</b></p>
			</div>
		</div>
	</div>
	<div class="row isi mobile-padding">
		<div class="col-lg-12">
			<h3>INDICATION</h3>
			<p style="margin-bottom: 0;">Treprostinil Injection is a prostacyclin vasodilator indicated for</p>
			<div class="warning-bullets">
				<table>
					<tr>
						<td style="vertical-align: top; color: #22647e;">&bull;&nbsp;</td>
						<td> Treatment of pulmonary arterial hypertension (PAH), World Health Organization (WHO) Group 1, to diminish symptoms associated with exercise. Studies establishing effectiveness included patients with
						New York Heart Association (NYHA) Functional Class II-IV symptoms and etiologies of idiopathic or heritable PAH (58%), PAH associated with congenital systemic-to-pulmonary shunts (23%), or PAH associated with connective tissue diseases (19%).</td>
					</tr>
					<tr>
						<td style="vertical-align: top; color: #22647e;">&bull;&nbsp;</td>
						<td> Patients who require transition from epoprostenol to reduce the rate of clinical deterioration. The risks and benefits of each drug should be carefully considered prior to transition.</td>
					</tr>
				</table>
			</div>
			<h3 id="isi">IMPORTANT SAFETY INFORMATION</h3>
			<h4>CONTRAINDICATIONS</h4>
			<p>None.</p>
			<h4>WARNINGS AND PRECAUTIONS</h4>
			<div class="warning-bullets">
				<table>
					<tr>
						<td style="vertical-align: top; color: #22647e;">&bull;&nbsp;</td>
						<td> Chronic intravenous (IV) infusions delivered using an external infusion pump with an indwelling central venous catheter are associated with the risk of bloodstream infections (BSIs) and sepsis, which may be fatal. Therefore, continuous subcutaneous (SC) infusion is the preferred mode of administration.</td>
					</tr>
					<tr>
						<td style="vertical-align: top; color: #22647e;">&bull;&nbsp;</td>
						<td> Do not abruptly lower the dose or withdraw dosing.</td>
					</tr>
					<tr>
						<td style="vertical-align: top; color: #22647e;">&bull;&nbsp;</td>
						<td> Treprostinil Injection may cause symptomatic hypotension.</td>
					</tr>
					<tr>
						<td style="vertical-align: top; color: #22647e;">&bull;&nbsp;</td>
						<td> Titrate slowly in patients with hepatic or renal insufficiency because such patients will likely be exposed to greater systemic concentrations relative to patients with normal hepatic or renal function.</td>
					</tr>
					<tr>
						<td style="vertical-align: top; color: #22647e;">&bull;&nbsp;</td>
						<td> Treprostinil Injection inhibits platelet aggregation and increases the risk of bleeding.</td>
					</tr>
				</table>
			</div>
			<h4>ADVERSE REACTIONS</h4>
			<p>During clinical trials with SC infusion of treprostinil, infusion site pain and infusion site reaction (eg, erythema, induration, or rash) were the most common adverse events and occurred in majority of those treated with treprostinil. Infusion site reactions were sometimes severe and led to discontinuation of treatment. Rash and hypotension (14% and 4%, respectively) were also commonly reported with SC infusion of treprostinil. Other common adverse events (&ge;9% of patients in the treprostinil arm) included headache, diarrhea, jaw pain, edema, vasodilatation, and nausea, and these are generally considered to be related to the pharmacologic effects of treprostinil, whether administered subcutaneously or intravenously. The adverse reactions reported with treprostinil IV included bloodstream infections, arm swelling, paresthesias, hematoma, and pain.</p>
			<h4>DRUG INTERACTIONS</h4>
			<p>Treprostinil Injection dosage adjustment may be necessary if inhibitors or inducers of CYP2C8 are added or withdrawn.</p>
			<h4>USE IN SPECIFIC POPULATIONS</h4>
			<div class="warning-bullets">
				<table>
					<tr>
						<td style="vertical-align: top; color: #22647e;">&bull;&nbsp;</td>
						<td> Safety and effectiveness of Treprostinil Injection in pediatric patients have not been established.</td>
					</tr>
					<tr>
						<td style="vertical-align: top; color: #22647e;">&bull;&nbsp;</td>
						<td> It is unknown if geriatric patients respond differently than younger patients. Caution should be used when selecting a dose for geriatric patients.</td>
					</tr>
					<tr>
						<td style="vertical-align: top; color: #22647e;">&bull;&nbsp;</td>
						<td> There are no adequate and well-controlled studies with Treprostinil Injection in pregnant women.</td>
					</tr>
					<tr>
						<td style="vertical-align: top; color: #22647e;">&bull;&nbsp;</td>
						<td> It is not known whether Treprostinil Injection is excreted in human milk.</td>
					</tr>
				</table>
			</div>
			<h4>Please see <a href="<?php echo get_template_directory_uri() . '/assets/prescribing-information.pdf'; ?>" target="_blank" style="color: #22647e; text-decoration: underline;">full Prescribing Information</a> for Treprostinil Injection.</h4>
		</div>
	</div>
	<div class="row logo-row mobile-center">
		<div class="col-md-2 col-sm-12 mobile-center">
			<a href="https://www.raregenllc.com/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/raregen-logo.png'; ?>" class="raregen-logo mobile-center" alt="RareGen Logo"></a>
		</div>
		<div class="col-md-3 offset-md-7 col-sm-12 mobile-center">
			<a href="https://www.us.sandoz.com/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/sandoz-logo.png'; ?>" class="sandoz-logo mobile-padding mobile-center" alt="Sandoz Logo"></a>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 legal">
			<p>Treprostinil Injection is manufactured and distributed by Sandoz, a Novartis Division.<br>
				Remodulin<sup>&reg;</sup> is a registered trademark of United Therapeutics Corporation. CVS Specialty<sup>&trade;</sup> is a trademark of CVS Pharmacy, Inc. and/or one of its affiliates.<br>All other third party trademarks are the property of the respective owner.<br>
			&copy; 2019 Sandoz Inc., a Novartis Division. All Rights Reserved. S-PSI-1370327 02/2019</p>
		</div>
	</div>
	<div class="row custom-footer">
		<div class="col-lg-2">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>/hcp-site-map">Site Map</a>
		</div>
		<div class="col-lg-2">
			<a id="modal-privacy-link" href="javascript:void(0);">Privacy</a>
		</div>
		<div class="col-lg-2">
			<a id="modal-terms-link" href="javascript:void(0);">Terms of Use</a>
		</div>
		<div class="col-lg-2">
			<a id="modal-contact-link" href="javascript:void(0);">Contact Us</a>
		</div>
		<div class="col-lg-2">
			<a id="modal-sandoz-link" href="javascript:void(0);">Sandoz</a>
		</div>
		<div class="col-lg-2">
			<a id="modal-raregen-link" href="javascript:void(0);">RareGen</a>
		</div>
	</div>
	<div id="stickyisi" class="row isi sticky-isi sticky-bottom">
		<div class="col-lg-12">
			<br>
			<h3>IMPORTANT SAFETY INFORMATION</h3>
			<h4>CONTRAINDICATIONS</h4>
			<p>None.</p>
			<h4>WARNINGS AND PRECAUTIONS</h4>
			<div class="warning-bullets">
				<table>
					<tr>
						<td style="vertical-align: top; color: #22647e;">&bull;&nbsp;</td>
						<td> Chronic intravenous (IV) infusions delivered using an external infusion pump with an indwelling central venous catheter are associated with the risk of bloodstream infections (BSIs) and sepsis, which may be fatal. Therefore, continuous subcutaneous (SC) infusion is the preferred mode of administration.</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div id="modal-fda" class="modal modal-wrap" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-content-inner modal-orange">
			<div class="modal-body">
				<h2>You are leaving TrepInjection.com.</h2>
				<div class="orange-line-modal"></div>
				<p>The site you are about to visit is maintained by a third party who is solely responsibility for its contents.</p>
				<p>Click <b>Continue</b> to proceed or <span class="bold blue">Cancel</span> to return to TrepInjection.com.</p>
			</div>
			<div class="modal-footer">
				<a href="https://www.fda.gov/medwatch" role="button" class="btn btn-secondary continue-button">Continue</a>
				<button type="button" class="btn btn-primary cancel-button" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
<div id="modal-privacy" class="modal modal-wrap" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-content-inner modal-orange">
			<div class="modal-body">
				<h2>You are leaving TrepInjection.com.</h2>
				<div class="orange-line-modal"></div>
				<p>The site you are about to visit is maintained by a third party who is solely responsibility for its contents.</p>
				<p>Click <b>Continue</b> to proceed or <span class="bold blue">Cancel</span> to return to TrepInjection.com.</p>
			</div>
			<div class="modal-footer">
				<a href="https://www.us.sandoz.com/privacy-policy" role="button" class="btn btn-secondary continue-button">Continue</a>
				<button type="button" class="btn btn-primary cancel-button" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
<div id="modal-terms" class="modal modal-wrap" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-content-inner modal-orange">
			<div class="modal-body">
				<h2>You are leaving TrepInjection.com.</h2>
				<div class="orange-line-modal"></div>
				<p>The site you are about to visit is maintained by a third party who is solely responsibility for its contents.</p>
				<p>Click <b>Continue</b> to proceed or <span class="bold blue">Cancel</span> to return to TrepInjection.com.</p>
			</div>
			<div class="modal-footer">
				<a href="https://www.us.sandoz.com/terms-use-and-conditions" role="button" class="btn btn-secondary continue-button">Continue</a>
				<button type="button" class="btn btn-primary cancel-button" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
<div id="modal-contact" class="modal modal-wrap" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-content-inner modal-orange">
			<div class="modal-body">
				<h2>You are leaving TrepInjection.com.</h2>
				<div class="orange-line-modal"></div>
				<p>The site you are about to visit is maintained by a third party who is solely responsibility for its contents.</p>
				<p>Click <b>Continue</b> to proceed or <span class="bold blue">Cancel</span> to return to TrepInjection.com.</p>
			</div>
			<div class="modal-footer">
				<a href="https://www.us.sandoz.com/about-us/contact-us" role="button" class="btn btn-secondary continue-button">Continue</a>
				<button type="button" class="btn btn-primary cancel-button" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
<div id="modal-sandoz" class="modal modal-wrap" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-content-inner modal-orange">
			<div class="modal-body">
				<h2>You are leaving TrepInjection.com.</h2>
				<div class="orange-line-modal"></div>
				<p>The site you are about to visit is maintained by a third party who is solely responsibility for its contents.</p>
				<p>Click <b>Continue</b> to proceed or <span class="bold blue">Cancel</span> to return to TrepInjection.com.</p>
			</div>
			<div class="modal-footer">
				<a href="https://www.us.sandoz.com/" role="button" class="btn btn-secondary continue-button">Continue</a>
				<button type="button" class="btn btn-primary cancel-button" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
<div id="modal-raregen" class="modal modal-wrap" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-content-inner modal-orange">
			<div class="modal-body">
				<h2>You are leaving TrepInjection.com.</h2>
				<div class="orange-line-modal"></div>
				<p>The site you are about to visit is maintained by a third party who is solely responsibility for its contents.</p>
				<p>Click <b>Continue</b> to proceed or <span class="bold blue">Cancel</span> to return to TrepInjection.com.</p>
			</div>
			<div class="modal-footer">
				<a href="https://www.raregenllc.com/" role="button" class="btn btn-secondary continue-button">Continue</a>
				<button type="button" class="btn btn-primary cancel-button" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
<div id="modal-trial" class="modal modal-wrap" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-content-inner modal-orange">
			<div class="modal-body">
				<h2>You are leaving TrepInjection.com.</h2>
				<div class="orange-line-modal"></div>
				<p>The site you are about to visit is maintained by a third party who is solely responsibility for its contents.</p>
				<p>Click <b>Continue</b> to proceed or <span class="bold blue">Cancel</span> to return to TrepInjection.com.</p>
			</div>
			<div class="modal-footer">
				<a href="https://www.qv.Trialcard.com/Treprostinil" role="button" class="btn btn-secondary continue-button">Continue</a>
				<button type="button" class="btn btn-primary cancel-button" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>






