<!--
<?php

session_start();
if ($_SESSION['log-app']!="allow") {
    header("Location:../index.php");
}
unset($_SESSION['log-web']);
unset($_SESSION['log-py']);

$name = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <script src="modenizer.js" type="text/javascript"></script>

<link rel="stylesheet" href="normalize.css">
<link rel="stylesheet" href="../assets/css/mcq.css">
<meta name="viewport" content="width=device-width, initial-scale=0.5">
<title>App - Day3 - MCQ</title>

</head>
<body>

<header>
<h3>App - Day3</h3>
  <small>Multiple Choice Quiz</small></header>
<div id="emc-score"></div>
<div class="wrap">
  <div class="row">
  <section data-quiz-item>
    <div class="question">1.With Jsoup we are able to:</div>
    <div class="choices" data-choices='["Scrape and parse HTML from a URL, file, or string","Find and extract data, using DOM traversal or CSS selectors","Manipulate the HTML elements, attributes and text","All the above"]'>
    </div>
  </section>
  <section data-quiz-item>
    <div class="question">2. To use jsoup in your Gradle build, add the following dependency “compile 'org.jsoup:jsoup:1.10.2'” in which file?</div>
    <div class="choices" data-choices='["grade.buildapp","grade.build.app","grade.buildfile","grade.file"]'>
    </div>
  </section>
  </div>
  <div class="row">
  <section data-quiz-item>
    <div class="question">3.which method parses the HTML string that returns an HTML document </div>
    <div class="choices" data-choices='["parse()","Title()","String()","Parses()"]'>
    </div>
  </section>
   <section data-quiz-item>
     <div class="question">4.The document's ______ method gets the string contents of the document's title element</div>
    <div class="choices" data-choices='["title()","header()","string()","footer()"]'>
    </div>
  </section>
  </div>
   <div class="row">
  <section data-quiz-item>
    <div class="question">5. The document's body() method returns the body element; its ________ method gets the text of the element.</div>
    <div class="choices" data-choices='["title()","head()","text()","string()"]'>
    </div>
  </section>
   <section data-quiz-item>
     <div class="question">6. We parse the HTML file with the ___________ method.</div>
    <div class="choices" data-choices='["Jsoup.connect()","Jsoup.get()","Jsoup.parse()","Jsoup.set()"]'>
    </div>
  </section>
  </div>
   <div class="row last">
  <section data-quiz-item>
    <div class="question">7. With the documents__________   method, we get the element by its ID</div>
    <div class="choices" data-choices='["getElementById()","getElementId()","Getelementbyid()","GetId()"]'>
    </div>
  </section>
   <section data-quiz-item>
    <div class="question">8. The Jsoup's___________method creates a connection to the given URL. The _________________ method executes a GET request and parses the result; it returns an HTML document</div>
    <div class="choices" data-choices='["Connect(),Gets()","connect(),get()","Connects(),gEts()","Connect(),set()"]'>
    </div>
  </section>
  <section data-quiz-item>
    <div class="question">9.The ____________ method returns the HTML of an element; in our case the HTML source of the whole document
</div>
    <div class="choices" data-choices='["HTML()","html()","HTML.get()","HTML.connect()"]'>
    </div>
  </section>
  <section data-quiz-item>
    <div class="question">10. The document's select() method finds elements that match the given query. The first() method returns the first matched element. With the attr() method, we get the value of the content attribute.<br></div>
    <div class="choices" data-choices='["First(),select(),attribute()","select(),first(),attr()","SELECT(),FIRST(),ATTR().","Selected(),first(),attribute()"]'>
    </div>
  </section>
  </div>
  <div class="submit">
  <button id="emc-submit">Submit Answers</button>
  </div>
</div>




  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="script.js"></script>

</body>
</html>
<script type="text/javascript">
 var xmlHttp = createXmlHttpRequestObject();

function createXmlHttpRequestObject() {
    var xmlHttp;
    if (window.ActiveXObject) {
        try {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");

        } catch (e) {
            xmlHttp = false;
        }
    } else {
        try {
            xmlHttp = new XMLHttpRequest();
        } catch (e) {
            xmlHttp = false;
        }
    }
    if (!xmlHttp) {
        alert("can't create that object");
    } else {
        return xmlHttp;
    }
}

(function($) {
  $.fn.emc = function(options) {
    
    var defaults = {
      key: [],
      scoring: "normal",
      progress: true
    },
    settings = $.extend(defaults,options),
    $quizItems = $('[data-quiz-item]'),
    $choices = $('[data-choices]'),
    itemCount = $quizItems.length,
    chosen = [],
    $option = null,
    $label = null;
    
   emcInit();
    
   if (settings.progress) {
      var $bar = $('#emc-progress'),
          $inner = $('<div id="emc-progress_inner"></div>'),
          $perc = $('<span id="emc-progress_ind">0/'+itemCount+'</span>');
      $bar.append($inner).prepend($perc);
    }
    
    function emcInit() {
      $quizItems.each( function(index,value) {
      var $this = $(this),
          $choiceEl = $this.find('.choices'),
          choices = $choiceEl.data('choices');
        for (var i = 0; i < choices.length; i++) {
          $option = $('<input name="'+index+'" id="'+index+'_'+i+'" type="radio">');
          $label = $('<label for="'+index+'_'+i+'">'+choices[i]+'</label>');
          $choiceEl.append($option).append($label);
          
          $option.on( 'change', function() {
            return getChosen();
          }); 
        }
      });
    }
    
    function getChosen() {
      chosen = [];
      $choices.each( function() {
        var $inputs = $(this).find('input[type="radio"]');
        $inputs.each( function(index,value) {
          if($(this).is(':checked')) {
            chosen.push(index + 1);
          }
        });
      });
      getProgress();
    }
    
    function getProgress() {
      var prog = (chosen.length / itemCount) * 100 + "%",
          $submit = $('#emc-submit');
      if (settings.progress) {
        $perc.text(chosen.length+'/'+itemCount);  
        $inner.css({height: prog});
      }
      if (chosen.length === itemCount) {
        $submit.addClass('ready-show');
        $submit.click( function(){
          return scoreNormal();
        });
      }
    }
    
    function scoreNormal() {
      var wrong = [],
          score = null,
          $scoreEl = $('#emc-score');
      for (var i = 0; i < itemCount; i++) {
        if (chosen[i] != settings.key[i]) {
          wrong.push(i);
        }
      }
      $quizItems.each( function(index) {
        var $this = $(this);
        if ($.inArray(index, wrong) !== -1 ) {
          $this.removeClass('item-correct').addClass('item-incorrect');
        } else {
          $this.removeClass('item-incorrect').addClass('item-correct');
        }
      });
      
      score = Math.floor(((itemCount - wrong.length)).toFixed(2));
      $('html,body').animate({scrollTop: 0}, 50);
       xmlHttp.open("GET", "score-day3.php?score=" +score, true);
    xmlHttp.send(null);
    window.alert("You're Answers Are Submited !! Thank you So much");
    window.location.href = "../app.php";

    }
 
  }
}(jQuery));


$(document).emc({
  key: ["4","3","1","1","3","3","1", "2","2","2"]
});



</script>
-->