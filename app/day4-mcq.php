
<?php

session_start();
if ($_SESSION['log-app']!="allow") {
    header("Location:../index.php");
}
unset($_SESSION['log-web']);
unset($_SESSION['log-py']);

$name = $_SESSION['username'];
?>
<!--
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <script src="modenizer.js" type="text/javascript"></script>

<link rel="stylesheet" href="normalize.css">
<link rel="stylesheet" href="../assets/css/mcq.css">
<meta name="viewport" content="width=device-width, initial-scale=0.5">
<title>App - Day4 - MCQ</title>

</head>
<body>

<header>
  <h3>App - Day4</h3>
  <small>Multiple Choice Quiz</small>
</header>
<div id="emc-score"></div>
<div class="wrap">
  <div class="row">
  <section data-quiz-item>
    <div class="question">1> Firebase is owned by</code></div>
    <div class="choices" data-choices='["Microsoft","Google","Apple","Amazon"]'>
    </div>
  </section>
  <section data-quiz-item>
    <div class="question">2> Which of the following is not the feature of firebase?</div>
    <div class="choices" data-choices='["Authentication","Relational Database","Storage","Map integartion","Cloud firestore"]'>
    </div>
  </section>
  </div>
  <div class="row">
  <section data-quiz-item>
    <div class="question">3> What are the available authentications in firebase?</div>
    <div class="choices" data-choices='["Phone number signup","Email id signup","Google signup","Twitter signup","All the above"]'>
    </div>
  </section>
   <section data-quiz-item>
     <div class="question">4> Directory to access firebase in android studio</div>
    <div class="choices" data-choices='["Tools->Firebase","File->tools->firebase","Edit->tools->firebase","View->firebase"]'>
    </div>
  </section>
  </div>
   <div class="row">
  <section data-quiz-item>
    <div class="question">5> Firebase is a _________ database</div>
    <div class="choices" data-choices='["Sql database","Nosql database","Both a&b","None of the above"]'>
    </div>
  </section>
   <section data-quiz-item>
     <div class="question">6> which of the following method is used to set value for the variable in firebase database while writing?</div>
    <div class="choices" data-choices='[".setValue()",".setContent()",".setText()",".Setvalue()"]'>
    </div>
  </section>
  </div>
   <div class="row last">
  <section data-quiz-item>
    <div class="question">7> Which of the following method is used to get value from  the variable in firebase database while reading?</div>
    <div class="choices" data-choices='[".getValue()",".getContent()",".getText()",".Getvalue()"]'>
    </div>
  </section>
   <section data-quiz-item>
    <div class="question">8>  what is the difference between GCM and FCM?</div>
    <div class="choices" data-choices='["GCM is an abbreviation to the term Google Cloud Messaging","FCM is an abbreviation to the term Firebase Cloud Messaging","FCM is basically the recent version of Google Cloud Messaging ( GCM ). FCM has the core infrastructure of GCM, making it easier for cloud messaging development.","All of the above"]'>
    </div>
  </section>
  <section data-quiz-item>
    <div class="question">9>  What are the limits to Real-time database in Firebase?</div>
    <div class="choices" data-choices='["A database of size 1 MegaByte ( 1 MB ) triggers a function. ","100000 connections are added as simultaneous.","1000 responses are sent per second simultaneously through a single database","Both a&b","A,B &C is correct"]'>
    </div>
  </section>
  <section data-quiz-item>
    <div class="question">10> What is not the advantages of Firebase?</div>
    <div class="choices" data-choices='["It offers simple control dashboard","Number of useful services to choose","Here, the data is not real time which means that every change will have to be updated manually ","sIt is user friendly and simple"]'>
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
       xmlHttp.open("GET", "score-day4.php?score=" +score, true);
    xmlHttp.send(null);
    window.alert("You're Answers Are Submited !! Thank you So much");
    window.location.href = "../app.php";

    }

  }
}(jQuery));


$(document).emc({
  key: ["2","4","5","1","2","1","1","4","1","3"]
});



</script>
-->