<?php if ($site=="live" && $page!="thankyou") { ?>
 	
 	<?php if ($googleanalytics == "") {
 		echo "<h1 style='position:absolute;z-index:999999;color:#ff0000;background:#000000;'>GOOGLE ANALYTICS MISSING</h1>";
 	} else { ?>

	 	<?php /*WORKS ONLY IF NEW GOOGLE ANALYTICS CODE GTAG.JS IS AVAILABLE*/ ?>
	 	
	 	<?php if ($googleanalyticstype == "new" && $googleanalytics != "") { ?>
	 	<!-- Global site tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $googleanalytics; ?>"></script>
		<script>
		    window.dataLayer = window.dataLayer || [];
		    function gtag(){dataLayer.push(arguments);}
		    gtag('js', new Date());
		    gtag('config', '<?php echo $googleanalytics; ?>');/*Google Analytics (googleanalytics)*/
		    console.log('googleanalyticsnew');
		    <?php if ($googleadwords != "") { ?>
		    gtag('config', '<?php echo $googleadwords; ?>');/*Google AdWords (googleadwords)*/
			console.log('googleadwords');
			<?php } ?>
		    <?php if ($googleadwords != "" && $googleadwordslabelphone != "" && $googleadwordsphone != "") { ?>
		    gtag('config', '<?php echo $googleadwords; ?>/<?php echo $googleadwordslabelphone; ?>', { /*Google AdWords Label Phone (googleadwordslabelphone)*/
		        'phone_conversion_number': '<?php echo $googleadwordsphone; ?>'
		    });
		    console.log('googleadwordslabelphone');
			<?php } ?>
		</script>
		<!-- End Global site tag (gtag.js) -->
		<?php } ?>

		
		<?php /*WORKS ONLY IF OLD GOOGLE ANALYTICS CODE ANALYTICS.JS IS AVAILABLE*/ ?>

		<?php if ($googleanalyticstype == "old" && $googleanalytics != "") { ?>
	 	<!-- Analytics JS (analytics.js) -->
		<script async src='https://www.google-analytics.com/analytics.js'></script>
		<script>
			window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
			ga('create', '<?php echo $googleanalytics; ?>', 'auto');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');
			console.log('googleanalyticsold');
		</script>
		<!-- End Analytics JS (analytics.js) -->
			
			<?php /*WORKS ONLY IF OLD GOOGLE ANALYTICS CODE ANALYTICS.JS IS AVAILABLE AND ADWORDS IS AVAILBLE WITH GTAG.JS*/ ?>

			<?php if ($googleadwords != "") { ?>
			<!-- Global site tag (gtag.js) -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $googleadwords; ?>"></script>
			<script>
			    window.dataLayer = window.dataLayer || [];
			    function gtag(){dataLayer.push(arguments);}
			    gtag('js', new Date());
			    gtag('config', '<?php echo $googleadwords; ?>');/*Google AdWords (googleadwords)*/
				console.log('googleadwords');
			    <?php if ($googleadwords != "" && $googleadwordslabelphone != "" && $googleadwordsphone != "") { ?>
			    gtag('config', '<?php echo $googleadwords; ?>/<?php echo $googleadwordslabelphone; ?>', { /*Google AdWords Label Phone (googleadwordslabelphone)*/
			        'phone_conversion_number': '<?php echo $googleadwordsphone; ?>'
			    });
			    console.log('googleadwordslabelphone');
				<?php } ?>
			</script>
			<!-- End Global site tag (gtag.js) -->
			<?php } ?>
		<?php } ?>



		<?php if ($facebookpixelid != "") { ?>
		<!-- Facebook Pixel -->
		<script>
		    !function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window,document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '<?php echo $facebookpixelid; ?>'); /*Facebook Pixel Id (facebookpixelid)*/
			fbq('track', 'PageView');
			console.log('facebookpixelid PageView');
		</script>
		<noscript>
		 	<img height="1" width="1" src="https://www.facebook.com/tr?id=<?php echo $facebookpixelid; ?>&ev=PageView&noscript=1"/>
		</noscript>
		<!-- End Facebook Pixel -->
		<?php } ?>

		<?php if ($taboolaid != "") { ?>
		<!-- Taboola -->
		<script>
			window._tfa = window._tfa || [];
			window._tfa.push({notify: 'event', name: 'page_view', id: <?php echo $taboolaid; ?>}); /*Taboola Id (taboolaid)*/
			!function (t, f, a, x) {if (!document.getElementById(x)) {t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);}}(document.createElement('script'), document.getElementsByTagName('script')[0], '//cdn.taboola.com/libtrc/unip/<?php echo $taboolaid; ?>/tfa.js', 'tb_tfa_script');
			console.log('taboolaid');
		</script>
		<noscript>
			<img src='https://trc.taboola.com/<?php echo $taboolaid; ?>/log/3/unip?en=page_view' width='0' height='0' style='display:none'/>
		</noscript>
		<!-- End Taboola -->
		<?php } ?>
		
		<?php if ($colombiapixel != "") { ?>
		<!-- Colombia Pixel -->
		<script>
			(function(){
				var colombiaPixelURL = 'https://ade.clmbtech.com/cde/eventTracking.htm?pixelId=<?php echo $colombiapixel; ?>&_w=1&rd='+new Date().getTime();(new Image()).src = colombiaPixelURL;
				console.log('colombiapixel');
			})(); /*Colombia Pixel (colombiapixel)*/

		</script>
		<noscript>
			<img height='1' width='1' style='display:none' src='https://ade.clmbtech.com/cde/eventTracking.htm?pixelId=<?php echo $colombiapixel; ?>&_w=1'/>
		</noscript>
		<?php if ($colombiapixelphoneconv != "") { ?>
		<script type="text/javascript">
		    function phoneFunction() {
		        (function() {
		            var colombiaPixelURL = 'https://ade.clmbtech.com/cde/eventTracking.htm?pixelId=<?php echo $colombiapixelphoneconv; ?>&_w=1&rd=' + new Date().getTime(); /*Colombia Pixel Phone Conv (colombiapixelphoneconv)*/
		            (new Image()).src = colombiaPixelURL;
		            console.log('colombiapixelphoneconv');
		        })();
		    }
		</script>
		<?php } ?>
		<!-- End Colombia Pixel -->
		<?php } ?>
	<?php } ?>
<?php } ?>



<?php if ($site=="live" && $page=="thankyou") { ?>
	<?php if ($googleanalytics != "") { ?>
	<!-- Global site tag (gtag.js) Conv -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $googleanalytics; ?>"></script>
	<script>
	    window.dataLayer = window.dataLayer || [];
	    function gtag(){dataLayer.push(arguments);}
	    gtag('js', new Date());
	    gtag('config', '<?php echo $googleanalytics; ?>');/*Google Analytics (googleanalytics)*/
	    console.log('googleanalytics');
	    <?php if ($googleadwords != "") { ?>
	    gtag('config', '<?php echo $googleadwords; ?>');/*Google AdWords (googleadwords)*/
		<?php } ?>
		console.log('googleadwords');
		<?php if ($googleadwords != "" && $googleadwordslabelconv != "") { ?>
	    gtag('event', 'conversion', {
	        'send_to': '<?php echo $googleadwords; ?>/<?php echo $googleadwordslabelconv; ?>'/*Google AdWords Label Conv (googleadwordslabelconv)*/
	    });
	    console.log('googleadwordslabelconv');
		<?php } ?>
	</script>
	<!-- End Global site tag (gtag.js) Conv -->
	<?php } ?>


	<?php if ($facebookpixelid != "") { ?>
	<!-- Facebook Pixel Conv -->
	<script>
	    !function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window,document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '<?php echo $facebookpixelid; ?>'); /*Facebook Pixel Id (facebookpixelid)*/
		fbq('track', 'PageView');
		fbq('track', 'Lead');
		console.log('facebookpixelid Lead');
	</script>
	<noscript>
	 	<img height="1" width="1" src="https://www.facebook.com/tr?id=<?php echo $facebookpixelid; ?>&ev=Lead&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Conv -->
	<?php } ?>

	<?php if ($colombiapixelconv != "") { ?>
	<!-- Colombia Pixel Conv -->
	<script>
		(function(){var colombiaPixelURL = 'https://ade.clmbtech.com/cde/eventTracking.htm?pixelId=<?php echo $colombiapixelconv; ?>&_w=1&rd='+new Date().getTime();(new Image()).src = colombiaPixelURL;
			console.log('colombiapixelconv');
		})(); /*Colombia Pixel Conv (colombiapixelconv)*/
	</script>
	<noscript>
		<img height='1' width='1' style='display:none' src='https://ade.clmbtech.com/cde/eventTracking.htm?pixelId=<?php echo $colombiapixelconv; ?>&_w=1'/>
	</noscript>
	<!-- End Colombia Pixel Conv -->
	<?php } ?>
<?php } ?>