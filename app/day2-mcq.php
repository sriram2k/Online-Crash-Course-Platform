
<?php

session_start();
if ($_SESSION['log-app']!="allow") {
    header("Location:../index.php");
}
unset($_SESSION['log-web']);
unset($_SESSION['log-py']);

$name = $_SESSION['username'];
?> <!--
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <script src="modenizer.js" type="text/javascript"></script>

<link rel="stylesheet" href="normalize.css">
<link rel="stylesheet" href="../assets/css/mcq.css">
<meta name="viewport" content="width=device-width, initial-scale=0.5">
<title>App - Day2 - MCQ</title>

</head>
<body>

<header>
<h3>App - Day2</h3>
  <small>Multiple Choice Quiz</small></header>
<div id="emc-score"></div>
<div class="wrap">
  <div class="row">
  <section data-quiz-item>
    <div class="question">1> Android Is Developed By</div>
    <div class="choices" data-choices='["Apple","Microsoft","Google","Android Inc"]'>
    </div>
  </section>
  <section data-quiz-item>
    <div class="question">2> In Which Directory XML Layout Files Are Stored</div>
    <div class="choices" data-choices='["/assets","/src","/res/values","/res/layout"]'>
    </div>
  </section>
  </div>
  <div class="row">
  <section data-quiz-item>
    <div class="question">3> Which Programming Language Is Used For Android Application Development?</div>
    <div class="choices" data-choices='["NodeJs","PHP","JSX","Java"]'>
    </div>
  </section>
   <section data-quiz-item>
     <div class="question">4> Android Is Based On Which Kernel</div>
    <div class="choices" data-choices='["Linux","Windows","Mac","Redhat"]'>
    </div>
  </section>
  </div>
   <div class="row">
  <section data-quiz-item>
    <div class="question">5> Layouts in android?</div>
    <div class="choices" data-choices='["Frame Layout","Linear Layout","Relative Layout","All of the above"]'>
    </div>
  </section>
   <section data-quiz-item>
     <div class="question">6> What file is responsible for glueing everything together, explaining what the application consists of, what its main building blocks are, ext?</div>
    <div class="choices" data-choices='["Layout file ","Strings XML","R file","Manifest file"]'>
    </div>
  </section>
  </div>
   <div class="row last">
  <section data-quiz-item>
    <div class="question">7> Creating a UI (User Interface) in Android requires careful use of</div>
    <div class="choices" data-choices='["Java and SQL ","XML and Java ","XML and C++ ","Dream weaver"]'>
    </div>
  </section>
   <section data-quiz-item>
    <div class="question">8> Intents</div>
    <div class="choices" data-choices='["are messages that are sent among major building blocks","trigger activities to being,services to start or stop, or broadcast","are asynchronous","all of those"]'>
    </div>
  </section>
  <section data-quiz-item>
    <div class="question">9>An activity can be thought of as corresponding to what?</div>
    <div class="choices" data-choices='["A Java project","A Java class","A method call","An object field"]'>
    </div>
  </section>
  <section data-quiz-item>
    <div class="question">10> Which method is used to load link in webview?</div>
    <div class="choices" data-choices='[".loadurl()",".loadlink()",".loaddata() ",".load()"]'>
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
       xmlHttp.open("GET", "score-day2.php?score=" +score, true);
    xmlHttp.send(null);
    window.alert("You're Answers Are Submited !! Thank you So much");
    window.location.href = "../app.php";

    }

  }
}(jQuery));


$(document).emc({
  key: ["4","4","4","1","4","4","2","4","2","1",]
});



</script>


-->