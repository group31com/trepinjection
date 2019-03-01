
<?php
/*
Template Name: HCP Site Map
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
			<div class="referral-nav hidden-xs"><a href="<?php echo get_template_directory_uri() . '/assets/hcp-referral-form.pdf'; ?>" target="_blank">Download the referral form.</a></div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>/hcp/">About Treprostinil Injection&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>/hcp-getting-started/">Getting Started</a>
		</div>
	</div>
	<div class="row mobile-download show-xs">
		<div class="col-xs-12">
			<div class="referral-nav-mobile"><a href="">Download the referral form.</a></div>		
		</div>
	</div>
	<div class="row body-copy-ti">
		<div class="col-xs-12 site-map body-head">
			<h1>Site Map</h1>
			<h3>Patient Site</h3>
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Treprostinil Injection</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/getting-started/">Getting Started</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/site-map/">Site Map</a></li>
			</ul>
			<h3>HCP Site</h3>
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/hcp/">About Treprostinil Injection</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/hcp-getting-started/">Getting Started</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/hcp-site-map/">Site Map</a></li>
			</ul>
			<br>
		</div>
	</div>
	<div class="row isi">
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
	<div class="row logo-row">
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
