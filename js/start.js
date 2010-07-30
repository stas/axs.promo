		window.onload = function()
		{
			sir = new swfir();
			sir.specify("border-width", "10");
			sir.specify("border-radius", "7");
			sir.specify("border-color", "fff");
			sir.specify("shadow-color", "096e03");
			sir.specify("rotate","-5");
			sir.specify("shadow-blur", "10");
			sir.specify("background-color", "fff");
			sir.specify('src', '/wp-content/themes/axs.promo/js/swifr/swfir.swf');
			sir.swap("#continut img");
		}
		
		var euphorig = {
		    src: '/wp-content/themes/axs.promo/js/sifr/font.swf'
		  };

		  sIFR.debugMode = true;
		  sIFR.delayCSS  = true;
		  // sIFR.domains = ['novemberborn.net'] // Don't check for domains in this demo
		  sIFR.activate(euphorig);
		  
		  sIFR.replace({
		    selector: 'h2'
		    ,src: '/wp-content/themes/axs.promo/js/sifr/font.swf'
		    ,wmode: 'transparent'
		    ,css: {
		      '.sIFR-root': { 'color': '#096e03', 'letter-spacing': -1.5, 'text-transform': 'capitalize', 'font-size': '40px' }
		      ,'a': { 'text-decoration': 'underline', 'color': '#096e03' }
		      ,'a:hover': { 'text-decoration': 'none', 'color': '#096e03' }
		    }
		    ,filters: {
		      DropShadow: {
			knockout: false
			,distance: 1
			,color: '#096e03'
			,strength: 1
		      }
		    }
		  });
		  
		  
		sIFR.replace({
		    selector: 'h1'
		    ,src: '/wp-content/themes/axs.promo/js/sifr/font.swf'
		    ,wmode: 'transparent'
		    ,css: {
		      '.sIFR-root': { 'color': '#096e03', 'letter-spacing': -1.5, 'font-size': '50px' }
		      ,'a': { 'text-decoration': 'underline', 'color': '#096e03' }
		      ,'a:hover': { 'text-decoration': 'none', 'color': '#096e03' }
		    }
		    ,filters: {
		      DropShadow: {
			knockout: false
			,distance: 1
			,color: '#096e03'
			,strength: 1
		      }
		    }
		  });
