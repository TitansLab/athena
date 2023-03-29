	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon" />
	<!-- Map CSS -->
	<!--	<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" />-->
	<!-- Libs CSS -->
	<link rel="stylesheet" href="assets/css/libs.bundle.css" />
	<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<link rel="stylesheet" id="theme" href="assets/css/theme.bundle.css" />

	<!-- <link rel="text/html" href="/institute_dashboard/context.html" id="context-sel"> -->
	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/vendor/bootstrap-icons/font/bootstrap-icons.css">
	<link rel="stylesheet" href="assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>

	<!-- CSS Front Template -->
	<!-- Title -->
	<title>LMS by Titanslab</title>
	<style>
		.card-img-top {
			width: 100%;
			height: 15vw;
			object-fit: cover;
		}

		body {
			scrollbar-width: thin;
			/* "auto" or "thin" */
			scrollbar-color: blue orange;
			/* scroll thumb and track */
		}

		/* Works on Firefox */
		* {
			scrollbar-width: thin;
			scrollbar-color: blue orange;
		}

		/* Works on Chrome, Edge, and Safari */
		*::-webkit-scrollbar {
			width: 8px;
		}

		*::-webkit-scrollbar-track {}

		*::-webkit-scrollbar-thumb {
			border-radius: 10px;
			-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
			background-color: #1A68D1;
		}

		.vertical {
			border-left: 5px solid black;
			height: 200px;
		}

		.btn-back-to-top {
			position: fixed;
			bottom: 20px;
			right: 20px;
			display: block;
			z-index: 999;
		}
	</style>
	<?php
	error_reporting(E_ALL ^ E_ALL);
	?>
	<button id="btntheme" onclick=" toggleTheme()" type="button" class="btn btn-dark btn-floating btn-lg btn-back-to-top">
		<i class="fe uil-moon"></i>
	</button>
	<script>
		// check for saved 'darkMode' in localStorage
		let darkMode = localStorage.getItem('darkMode');

		const darkModeToggle = document.querySelector('#btntheme');

		const enableDarkMode = () => {
			theme.setAttribute('href', '../assets/css/theme-dark.bundle.css');
			let btn = document.getElementById('btntheme');
			btn.className = 'btn btn-info btn-floating btn-lg btn-back-to-top';
			btn.innerHTML = '<i class="fe uil-sun"></i>';
			// 2. Update darkMode in localStorage
			localStorage.setItem('darkMode', 'enabled');
			// context-sel.setAttribute('href', 'context-dark.html');
		}

		const disableDarkMode = () => {
			theme.setAttribute('href', '../assets/css/theme.bundle.css');
			let btn = document.getElementById('btntheme');
			btn.className = 'btn btn-dark btn-floating btn-lg btn-back-to-top';
			btn.innerHTML = '<i class="fe uil-moon"></i>';
			// 2. Update darkMode in localStorage
			localStorage.setItem('darkMode', null);
			// context-sel.setAttribute('href', 'context.html');

		}

		// If the user already visited and enabled darkMode
		// start things off with it on
		if (darkMode === 'enabled') {
			enableDarkMode();
		}
		// When someone clicks the button
		btntheme.addEventListener('click', () => {
			// get their darkMode setting
			darkMode = localStorage.getItem('darkMode');
			// if it not current enabled, enable it
			if (darkMode != 'enabled') {
				enableDarkMode();
				// if it has been enabled, turn it off
			} else {
				disableDarkMode();
			}
		});
	</script>
	<script>
		window.hs_config = {
			"autopath": "@@autopath",
			"deleteLine": "hs-builder:delete",
			"deleteLine:build": "hs-builder:build-delete",
			"deleteLine:dist": "hs-builder:dist-delete",
			"previewMode": false,
			"startPath": "/index.html",
			"vars": {
				"themeFont": "https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap",
				"version": "?v=1.0"
			},
			"layoutBuilder": {
				"extend": {
					"switcherSupport": true
				},
				"header": {
					"layoutMode": "default",
					"containerMode": "container-fluid"
				},
				"sidebarLayout": "default"
			},
			"themeAppearance": {
				"layoutSkin": "default",
				"sidebarSkin": "default",
				"styles": {
					"colors": {
						"primary": "#377dff",
						"transparent": "transparent",
						"white": "#fff",
						"dark": "132144",
						"gray": {
							"100": "#f9fafc",
							"900": "#1e2022"
						}
					},
					"font": "Inter"
				}
			},
			"languageDirection": {
				"lang": "en"
			},
			"skipFilesFromBundle": {
				"dist": ["assets/js/hs.theme-appearance.js", "assets/js/hs.theme-appearance-charts.js", "assets/js/demo.js"],
				"build": ["assets/css/theme.css", "assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js", "assets/js/demo.js", "assets/css/theme-dark.css", "assets/css/docs.css", "assets/vendor/icon-set/style.css", "assets/js/hs.theme-appearance.js", "assets/js/hs.theme-appearance-charts.js", "node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js", "assets/js/demo.js"]
			},
			"minifyCSSFiles": ["assets/css/theme.css", "assets/css/theme-dark.css"],
			"copyDependencies": {
				"dist": {
					"*assets/js/theme-custom.js": ""
				},
				"build": {
					"*assets/js/theme-custom.js": "",
					"node_modules/bootstrap-icons/font/*fonts/**": "assets/css"
				}
			},
			"buildFolder": "",
			"replacePathsToCDN": {},
			"directoryNames": {
				"src": "./src",
				"dist": "./dist",
				"build": "./build"
			},
			"fileNames": {
				"dist": {
					"js": "theme.min.js",
					"css": "theme.min.css"
				},
				"build": {
					"css": "theme.min.css",
					"js": "theme.min.js",
					"vendorCSS": "vendor.min.css",
					"vendorJS": "vendor.min.js"
				}
			},
			"fileTypes": "jpg|png|svg|mp4|webm|ogv|json"
		}
		window.hs_config.gulpRGBA = (p1) => {
			const options = p1.split(',')
			const hex = options[0].toString()
			const transparent = options[1].toString()

			var c;
			if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {
				c = hex.substring(1).split('');
				if (c.length == 3) {
					c = [c[0], c[0], c[1], c[1], c[2], c[2]];
				}
				c = '0x' + c.join('');
				return 'rgba(' + [(c >> 16) & 255, (c >> 8) & 255, c & 255].join(',') + ',' + transparent + ')';
			}
			throw new Error('Bad Hex');
		}
		window.hs_config.gulpDarken = (p1) => {
			const options = p1.split(',')

			let col = options[0].toString()
			let amt = -parseInt(options[1])
			var usePound = false

			if (col[0] == "#") {
				col = col.slice(1)
				usePound = true
			}
			var num = parseInt(col, 16)
			var r = (num >> 16) + amt
			if (r > 255) {
				r = 255
			} else if (r < 0) {
				r = 0
			}
			var b = ((num >> 8) & 0x00FF) + amt
			if (b > 255) {
				b = 255
			} else if (b < 0) {
				b = 0
			}
			var g = (num & 0x0000FF) + amt
			if (g > 255) {
				g = 255
			} else if (g < 0) {
				g = 0
			}
			return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
		}
		window.hs_config.gulpLighten = (p1) => {
			const options = p1.split(',')

			let col = options[0].toString()
			let amt = parseInt(options[1])
			var usePound = false

			if (col[0] == "#") {
				col = col.slice(1)
				usePound = true
			}
			var num = parseInt(col, 16)
			var r = (num >> 16) + amt
			if (r > 255) {
				r = 255
			} else if (r < 0) {
				r = 0
			}
			var b = ((num >> 8) & 0x00FF) + amt
			if (b > 255) {
				b = 255
			} else if (b < 0) {
				b = 0
			}
			var g = (num & 0x0000FF) + amt
			if (g > 255) {
				g = 255
			} else if (g < 0) {
				g = 0
			}
			return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
		}
	</script>
	<?php include_once 'context.html'; ?>