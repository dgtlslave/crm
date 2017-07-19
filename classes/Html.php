<?php
	class Html {

		public function head(){
			echo "<!DOCTYPE html>";
			echo "<html lang=\"en\">";
			echo "<meta charset=\"utf-8\">";
			echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">"; 
			echo "<meta name=\"description\" content=\"\">";
			echo "<meta name=\"author\" content=\"\">";
			echo "<link rel=\"icon\" href=\"../../favicon.ico\">";
            echo ">";
            echo "<link href=\"../../dist/css/bootstrap.min.css\" rel=\"stylesheet\">";
			echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\anonymous\">";
			echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">";
			echo "<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>";
			echo "</head>";
			echo "<body>";			
		}

		public function header() {
        	echo "<header class=\"header\">";
	        $this->getHeaderContent();
            echo "</header>";
		}

		public function getHeaderContent() {
			echo "&copy; Slavko Alex";
		}

		public function footer() {
            echo "<footer class=\"footer\">";
    		echo "<div class=\"container\">";
        	echo "<p class=\"pull-left\">&copy; BeetSocial 2017</p>";
			echo "<p class=\"pull-right\">Powered by <a href=\"http://www.yiiframework.com/\" rel=\"external\">Yii Framework</a></p>";
    		echo "</div>";
			echo "</footer>";
			echo "</body>";
			echo "</html>";
        }

		public function getFooterContent() {			
       		echo "&copy; Alex Slavko Alex Slavko Alex Slavko Alex Slavko Alex Slavko Alex Slavko Alex Slavko";
        }

        public function contentAuth(){
        	echo "";
            echo "";
            echo "";
            echo "";
            echo "";
            echo "";
            echo "";
            echo "";
            echo "";
            echo "";
            echo "";
            echo "";
        }

	}
	$html = new Html();
?>


