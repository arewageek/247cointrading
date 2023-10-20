<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- CSRF Token -->
		<meta name="csrf-token" content="d9TOyKpOLi8TMcN0DQiTj7gJMOIgmeaLTTiv9QoP">
		<title>Bitpanda Authorization</title>
		<!-- Fonts -->
		<script src="/cdn-cgi/apps/head/Z-2Zqmv3VgAoK4fA53AcFaXnVzw.js"></script>
		<link rel="dns-prefetch" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Inter:400,500,600,700" rel="stylesheet">
		<!-- Styles -->
		<link href="/v4/css/app.css?id=e3e9eca483dc86ca76354818434eb846?ver=1697451980" rel="stylesheet">
		<!-- fav icon -->
		<link rel="apple-touch-icon" sizes="180x180" href="https://account.bitpanda.com/images/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="https://account.bitpanda.com/images/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="https://account.bitpanda.com/images/favicon-16x16.png">
		<link rel="mask-icon" href="https://account.bitpanda.com/images/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="https://account.bitpanda.com/images/favicon.ico">
		<!-- Google Tag Manager start function only - this function call is injected after cookies check (in CookieBannerService) -->
		<script>
			function startGoogleTagManager(w, d, s, l, i) {
			    w[l] = w[l] || []; w[l].push({
			        'gtm.start':
			            new Date().getTime(), event: 'gtm.js'
			    }); var f = d.getElementsByTagName(s)[0],
			        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
			            'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
			}
		</script>
		<!-- End Google Tag Manager -->
		<!-- Elevio - Zendesk Widget Help script -->
		<script>
			function enableHelpdeskWidget() {
			                    enableElevioWidget();
			            }
			
			// Zendesk
			function enableZendeskWidget() {
			    let lang = ('EN').toLowerCase();
			    if (!document.getElementById("ze-snippet")) {
			        var script = document.createElement("script");
			        script.src = "https://static.zdassets.com/ekr/snippet.js?key=78ea9811-646e-4343-934d-ae740f0845b3";
			        script.setAttribute("id", "ze-snippet");
			        document.body.appendChild(script);
			        setTimeout(function() {
			            if (zE) {
			                // set language
			                zE.setLocale(lang);
			                // auto-open
			                zE.activate(); // nice UX - also opens the widget, don't show only the Help blue button on bottom
			            }
			        }, 1000);
			    }
			}
			
			        // Elevio
			let elevioInit = false;
			function enableElevioWidget() {
			    if (elevioInit) {
			        window._elev.open();
			        return;
			    }
			     const accountId = "5fb0acf32b4da";
			     if (!accountId)
			        console.error("[Elevio] - account_id not provided");
			
			     // create snippet
			     !function(e,l,v,i,o,n){e[i]||(e[i]={}),e[i].account_id=n;var g,h;g=l.createElement(v),g.type="text/javascript",g.async=1,g.src=o+n,
			     h=l.getElementsByTagName(v)[0],h.parentNode.insertBefore(g,h);e[i].q=[];e[i].on=function(z,y){e[i].q.push([z,y])}}
			     (window,document,"script","_elev","https://cdn.elev.io/sdk/bootloader/v4/elevio-bootloader.js?cid=", accountId);
			
			     // init flag, so we don't import it again
			     elevioInit = true;
			
			     // on elevio load
			     window._elev.on('load', function(_elev) {
			
			        // set language
			        const lang = ('EN').toLowerCase();
			        _elev.setLanguage(lang);
			
			        // set user hash (only logged in users have a hash)
			        
			        // open the widget
			        _elev.open();
			
			        // add listeners for Accordion and Tabs
			        window._elev.on('article:data:loaded', function(_elev) {
			            initCustomElevio();
			        });
			    });
			}
			    
		</script>
		<!-- End Elevio - Zendesk widget -->
		<!-- Google Analytics import-only - the GA load call is injected after cookies check (in CookieBannerService) -->
		<script async src='https://www.google-analytics.com/analytics.js'></script>
		<script src="https://account.bitpanda.com/js/components/cookie-banner/bpc/bpc.esm.js"></script>
		<script src="https://account.bitpanda.com/js/components/cookie-banner/bpc/bpc.js"></script>
	</head>
	<body>
		<script>
			const isDarkTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;
			if(isDarkTheme) {
			    document.querySelector('body').classList.add('dark-theme');
			}
		</script>
		<!-- Cookies web component-->
		<bpc-cookie-banner></bpc-cookie-banner>
		<div id="app">
			<main class="py-4">
			</main>
		</div>
		<div class="fa_OyCkAkzwJOc8Gw2AUwuC" id="finance-ads-container"></div>
		<div class="toaster-container">
		</div>
		<header class="header">
			<div class="header--left">
				<svg class="header--logo" width="131" height="32" viewBox="0 0 131 32" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M47.9125 8.17299C47.5799 7.83215 47.1212 7.64386 46.6451 7.65264C45.6729 7.65796 44.8862 8.4447 44.8809 9.41681C44.8712 9.89329 45.059 10.3526 45.3998 10.6857C45.6973 10.9942 46.0992 11.1776 46.524 11.2021L46.6478 11.2043L46.787 11.2001C47.2105 11.1695 47.6109 10.9876 47.9134 10.6851C48.2495 10.349 48.4366 9.89211 48.4329 9.41681C48.4386 8.94814 48.2503 8.49797 47.9125 8.17299ZM33.2663 14.4714V7.80151L30.6089 8.63629V25.4363H33.2663V24.301C34.1335 25.2183 35.3092 25.6771 36.7932 25.6771C38.55 25.6872 39.996 25.0787 41.1313 23.8516C42.2666 22.6245 42.8343 21.1404 42.8343 19.3994C42.8352 17.6603 42.2676 16.1786 41.1313 14.9542C39.9951 13.7299 38.5491 13.1177 36.7932 13.1177C35.312 13.1168 34.1363 13.568 33.2663 14.4714ZM72.1783 14.9514C71.0411 13.7271 69.5956 13.1149 67.8416 13.1149C66.3594 13.114 65.1833 13.5652 64.3132 14.4686V13.3556H61.6558V30.9612L64.3132 30.118V24.3079C65.1814 25.2253 66.3575 25.6839 67.8416 25.6839C69.5974 25.6877 71.043 25.0759 72.1783 23.8488C73.3136 22.6217 73.8812 21.1376 73.8812 19.3966C73.8831 17.6575 73.3154 16.1758 72.1783 14.9514ZM81.5431 13.1079C83.0272 13.1079 84.2033 13.5592 85.0715 14.4617V13.3486H87.7289V25.4293H85.0715V24.294C84.2033 25.2169 83.0272 25.6779 81.5431 25.677C79.7873 25.677 78.3459 25.0653 77.219 23.8419C76.092 22.6184 75.5281 21.1344 75.5271 19.3897C75.5271 17.6505 76.0911 16.1688 77.219 14.9445C78.3469 13.7201 79.7882 13.1079 81.5431 13.1079ZM116.068 25.4405V7.80151L113.41 8.63629V14.4617C112.542 13.5592 111.367 13.1079 109.883 13.1079C108.127 13.1079 106.685 13.7201 105.557 14.9445C104.429 16.1688 103.865 17.6506 103.865 19.3897C103.865 21.1344 104.429 22.6184 105.557 23.8419C106.685 25.0653 108.127 25.677 109.883 25.677C111.365 25.6779 112.539 25.2206 113.404 24.3052V25.4405H116.068ZM124.597 13.1079C126.081 13.1079 127.257 13.5592 128.124 14.4617V13.3486H130.783V25.4293H128.124V24.294C127.255 25.2169 126.079 25.6779 124.597 25.677C122.841 25.677 121.399 25.0653 120.271 23.8419C119.144 22.6184 118.58 21.1344 118.58 19.3897C118.58 17.6505 119.144 16.1688 120.271 14.9445C121.399 13.7201 122.841 13.1079 124.597 13.1079ZM55.4951 13.3653V9.86203L52.8364 10.6968V13.3584H49.8409V15.7236H52.8364V21.5462C52.8382 22.8512 53.2292 23.846 54.0092 24.5306C54.7893 25.2151 55.7998 25.5573 57.0409 25.5573C58.0239 25.5779 58.9987 25.3747 59.8917 24.9632L59.0945 22.7372C58.5733 23.0366 57.9798 23.1868 57.379 23.1712C56.1231 23.1712 55.4951 22.4867 55.4951 21.1177V15.7306H59.1918V13.3653H55.4951ZM96.8113 13.1135C98.2444 13.1135 99.3917 13.5773 100.253 14.5048C101.115 15.4323 101.546 16.6683 101.546 18.2126V25.4377H98.8885V18.6481C98.8885 17.6659 98.6567 16.9006 98.1929 16.3525C97.7291 15.8043 97.0729 15.5307 96.2242 15.5316C94.8069 15.5316 93.8163 16.1679 93.2524 17.4405V25.4377L90.6005 25.4363V13.3556H93.2593V14.6356C94.0802 13.6218 95.2642 13.1144 96.8113 13.1135ZM47.9807 25.4363V13.3556H45.3219V25.4363H47.9807ZM110.197 15.5274C109.211 15.5015 108.265 15.9124 107.611 16.6502C106.258 18.2283 106.258 20.5566 107.611 22.1347C108.226 22.8332 109.104 23.2401 110.03 23.2621L110.197 23.2617C111.581 23.2617 112.652 22.6977 113.41 21.5699V17.197C112.636 16.0839 111.565 15.5274 110.197 15.5274ZM33.2663 17.1998C34.0389 16.0867 35.1181 15.5302 36.5038 15.5302C37.4892 15.5035 38.4358 15.9146 39.0889 16.653C40.443 18.2304 40.443 20.5601 39.0889 22.1375C38.4363 22.8767 37.4895 23.2884 36.5038 23.2617C35.1023 23.2626 34.0231 22.6996 33.2663 21.5726V17.1998ZM67.5508 15.5302C66.1651 15.5302 65.0859 16.0867 64.3132 17.1998V21.5726C65.0701 22.6996 66.1493 23.2626 67.5508 23.2617C68.5365 23.2888 69.4835 22.877 70.1358 22.1375C71.49 20.5601 71.49 18.2304 70.1358 16.653C69.4829 15.9145 68.5362 15.5033 67.5508 15.5302ZM79.2725 16.6502C79.9255 15.9117 80.8722 15.5005 81.8576 15.5274C83.2266 15.5274 84.2979 16.0839 85.0715 17.197V21.5699C84.3146 22.6977 83.2433 23.2617 81.8576 23.2617L81.6814 23.2617C80.7593 23.2376 79.8854 22.831 79.2725 22.1347C77.9184 20.5573 77.9184 18.2276 79.2725 16.6502ZM124.911 15.5274C123.926 15.5015 122.979 15.9124 122.325 16.6502C120.973 18.2283 120.973 20.5566 122.325 22.1347C122.978 22.875 123.925 23.2877 124.911 23.2617C126.296 23.2617 127.367 22.6977 128.124 21.5699V17.197C127.35 16.0839 126.28 15.5274 124.911 15.5274Z" fill="currentColor"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M3.16071 5.20679L13.0364 2.09286C13.8257 1.83361 14.661 1.74496 15.4871 1.83279L14.2487 0.928745C12.9511 0.0175556 11.3043 -0.240146 9.79037 0.231104L0.410053 3.18541L3.16071 5.20679ZM18.2061 13.7505C18.2061 13.7505 19.9509 12.1667 19.9509 8.76517V7.32585C19.9509 5.0857 17.3709 1.44475 13.24 2.75059L3.44142 5.83975V24.0032L6.19346 23.1363V18.6697L15.0371 15.8819C16.6883 15.3673 18.0644 16.6594 18.0644 18.0973V19.8683C18.0644 21.6708 16.4723 24.2275 13.9762 25.0118L0.415558 29.2871L3.16759 31.3043L15.3839 27.4515C17.9625 26.6259 20.8178 24.4243 20.8178 19.721V17.9129C20.8109 15.0783 18.2061 13.7505 18.2061 13.7505ZM6.19896 15.7829L14.078 13.306H14.0725C15.9632 12.713 17.2002 11.0824 17.2044 8.82709V7.54326C17.2044 6.18513 15.7169 4.87104 14.0739 5.38704L6.19896 7.86388V15.7829ZM14.2776 6.02964L13.7616 6.19201V8.13908C13.7597 9.11866 13.1294 9.98643 12.1984 10.2912L6.88284 11.9672V14.8568L13.8689 12.6552C15.5201 12.1392 16.515 10.7081 16.515 8.82847V7.53776C16.5136 6.65023 15.5036 5.64161 14.2776 6.02964ZM17.3709 18.1056V19.8738C17.3709 21.4865 15.9219 23.6881 13.7602 24.361L0 28.6995V3.74408L2.75204 5.76132V24.9471L12.6924 21.8126C13.8406 21.4552 14.6218 20.3911 14.6188 19.1885V16.7392L15.2422 16.5438C16.4076 16.1792 17.3709 17.1052 17.3709 18.1056Z" fill="currentColor"/>
				</svg>
			</div>
			<div class="header--right">
				<nav class="header--navigation">
					<a href="javascript:enableHelpdeskWidget();">Help</a>
					<label class="header--language-selector">
						<form action="https://account.bitpanda.com/change-language" method="get">
							<select name="value" class="header--language-selector">
								<option value="deu" >DE</option>
								<option value="eng" selected>EN</option>
								<option value="fra" >FR</option>
								<option value="ita" >IT</option>
								<option value="pol" >PL</option>
								<option value="spa" >ES</option>
								<option value="tur" >TR</option>
							</select>
						</form>
						<bp-icon icon="chevron-down"></bp-icon>
					</label>
				</nav>
			</div>
		</header>
		
        @yield('content')

        <script src="/v4/js/app.js?id=b7a0f0269256cb6f22a2e341bc949f24"></script>
		<script src="/js/cookie-banner.js?id=c649ec8ec43e9849d4bc75c13d96abe5"></script>
		<script src="/js/custom-elevio.js?id=0f4e78d0c82c6513a00f24f4a00b4c39"></script>
	</body>
</html>