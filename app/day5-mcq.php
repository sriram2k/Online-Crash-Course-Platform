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
<title>App - Day5 - MCQ</title>
</head>
<body>

<header>
<h3>App - Day5</h3>
  <small>Multiple Choice Quiz</small></header>
<div id="emc-score"></div>
<div class="wrap">
  <div class="row">
  <section data-quiz-item>
    <div class="question">1> Android Web Browser Is Based On</div>
    <div class="choices" data-choices='["Chrome","Open-source Webkit","Safari","Firefox","VDO.AI "]'>
    </div>
  </section>
  <section data-quiz-item>
    <div class="question">2> Which Media Format Is Not Supported By Android</div>
    <div class="choices" data-choices='["MP4","AVI","MIDI","MPEG"]'>
    </div>
  </section>
  </div>
  <div class="row">
  <section data-quiz-item>
    <div class="question">3> How Many Levels Of Securities Are In Android?</div>
    <div class="choices" data-choices='["Android Level Security","App And Kernel Level Security","Java Level Security","None Of The Above"]'>
    </div>
  </section>
   <section data-quiz-item>
     <div class="question">4> Which Of The Following Does Not Belong To Transitions ?</div>
    <div class="choices" data-choices='["ViewFlipper","ViewAnimator","ViewSwitcher","ViewSlider"]'>
    </div>
  </section>
  </div>
   <div class="row">
  <section data-quiz-item>
    <div class="question">5> View Pager Is Used For</div>
    <div class="choices" data-choices='["Swiping Activities","Swiping Fragments","Paging Down List Items","View Pager Is Not Supported By Android SDK"]'>
    </div>
  </section>
   <section data-quiz-item>
     <div class="question">6> Action Bar Can Be Associated To</div>
    <div class="choices" data-choices='["Only Fragments","Only Activities","Both Activities And Fragment","None Of The Above"]'>
    </div>
  </section>
  </div>
   <div class="row last">
  <section data-quiz-item>
    <div class="question">7> Adb Stands For</div>
    <div class="choices" data-choices='["Android Debug Bridge","Android Drive Bridge","Android Delete Bridge","Android Destroy Bridge"]'>
    </div>
  </section>

   <section data-quiz-item>
    <div class="question">8> What is an interface in android?</div>
    <div class="choices" data-choices='["interface is a class","Interface acts as a bridge between class and the outside world.","Interface is a layout file","All of the above"]'>
    </div>
  </section>


  <section data-quiz-item>
    <div class="question">9> While developing Android applications, developers can test their apps on</div>
    <div class="choices" data-choices='["Emulator included in Android SDK ","Physical Android phone ","Third-party Emulators (Youwave, etc.)","All three options will work"]'>
    </div>
  </section>


  <section data-quiz-item>
    <div class="question">10> Difference between android api and google api?</div>
    <div class="choices" data-choices='["The google API includes Google Maps and other Google-specific libraries. The Android one only includes core android libraries.","The google API one only includes core android libraries. The Android includes Google Maps and other Google-specific libraries","Both a&b","None of the above"]'>
    </div>
  </section>


  </div>
  <div class="submit">
  <button id="emc-submit">Submit Answers</button>
  </div>
</div>

<!-- partial -->
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
       xmlHttp.open("GET", "score-day5.php?score=" +score, true);
    xmlHttp.send(null);
    window.alert("You're Answers Are Submited !! Thank you So much");
    window.location.href = "../app.php";

    }

  }
}(jQuery));


$(document).emc({
  key: ["2","2","2","4","2","2","1","2","4","1",]
});



</script>
