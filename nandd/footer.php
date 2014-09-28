			<small>This page is powered by <a href="http://anchorcms.com" title="Anchor CMS Homepage">Anchor CMS</a> and a leprechaun in a hamster wheel.<br />License: <a class ="CClogo" rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/4.0/80x15.png" /></a> © 2014 Jan Miller</small>
			<!--
			Alternately, powered by Anchor CMS and:
			-  the tears of orphaned baby deer.
			-  composted rainbows.
			-  the zero-point energy generated by a toaster.
			-  the power of positive thinking!!!
			-->
		</footer>
		
	</body>
	
    <script>
    
    /**
    * Day/night theme switcher
    *
    *@author Avaq <aldwin.vlasblom@gmail.com>
    */
    
    $(function(){
        $('button').on('click', function(e){
            e.preventDefault();
            var $html = $('html');
			
            if($html.hasClass('night')){
                $html.removeClass('night');
                if(window.localStorage){
                    window.localStorage.removeItem('night');
                }
                
            }
			
            else{
                $html.addClass('night');
                if(window.localStorage){
                    window.localStorage.setItem('night', '1');
                }
                
            }
            
        });
        

        if(window.localStorage && window.localStorage.getItem('night') == '1'){
            $('html').addClass('night');
        }
        
    });
    </script>

</html>