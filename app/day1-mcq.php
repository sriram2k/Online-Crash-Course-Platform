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

<link rel="stylesheet" href="normalise.css">
<link rel="stylesheet" href="../assets/css/mcq.css">
<link rel="stylesheet" type="text/css" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=0.5">
<title>App - Day1 - MCQ</title>

</head>
<body>

<header>
  <h3>App - Day 1 </h3>
  <small>Multiple Choice Quiz </small>
</header>
<div id="emc-score"></div>
<div class="wrap">
  <section data-quiz-item>
    <div class="question">1> In java,the word true is </div>
    <div class="choices" data-choices='["A Java keyword","A Boolean literal","Same as value 1","Same as value 0"]'>
    </div>
  </section>
  <section data-quiz-item>
    <div class="question">2> The object is created with <code>new</code> keyword  have an affect on an inline element?</div>
    <div class="choices" data-choices='["At Compile-time","At run-time","Depends on the code","None of these"]'>
    </div>
  </section>


  <section data-quiz-item>
    <div class="question">3> A package is a collection of</div>
    <div class="choices" data-choices='["Classes","Interfaces","Editing tools","Classes and Interfaces","Editing tools and Interfaces"]'>
    </div>
  </section>
   <section data-quiz-item>
     <div class="question">4> In Java arrays are?</div>
    <div class="choices" data-choices='["objects","object references","primitive data type","None of the above"]'>
    </div>
  </section>


  <section data-quiz-item>
    <div class="question">5> What will be output?<br><br><code>String S1 = "S1 ="+ "123"+"456";<br>&ensp;String S2 = "S2 ="+(123+456);</code></div>
    <div class="choices" data-choices='["S1=123456, S2=579","S1=123456,S2=123456","S1=579,S2=579","None of This"]'>
    </div>
  </section>
   <section data-quiz-item>
     <div class="question">6> What will be the output?<br><br><code>if(1 + 1 + 1 + 1 + 1 == 5){<br>&ensp;&emsp;System.out.print("TRUE");<br>&ensp;}else{<br>&emsp;&ensp;System.out.print("FLASE");<br>&ensp;}</code></div>
    <div class="choices" data-choices='["TRUE","FALSE","Compiler Error","None of these"]'>
    </div>
  </section>


  <section data-quiz-item>
    <div class="question">7> What will be the return type of a method that not returns any value ?</div>
    <div class="choices" data-choices='["void","int","double","None of the above"]'>
    </div>
  </section>
   <section data-quiz-item>
    <div class="question">8> The main method should be static for the reason</div>
    <div class="choices" data-choices='["It can be accessed easily by the class loader.","It can be accessed by every method or variable without any hindrance.","It can be executed without creating any instance of the class.","None of the above"]'>
    </div>
  </section>

  <section data-quiz-item>
    <div class="question">9> Guess the output ?<br><code>public class Test{<br>&ensp;public static void main(String args[]){<br>&ensp;&emsp;System.out.print(""=="");<br>&ensp;&emsp;System.out.print(" ");<br>&ensp;&emsp;System.out.print("A"=="A");<br>&ensp;&emsp;System.out.print(" ");<br>&ensp;&emsp;System.out.print("a==A");<br>&ensp;}}</code></div>
    <div class="choices" data-choices='["\"==\" A\"==\"A a==A","true true false","true true a==A","Compilation Fails","None of the above"]'>
    </div>
  </section>

  <section data-quiz-item>
    <div class="question">10> What would be the output of the following fraction of code ?<br><br> <code>int Integer = 34 ;<br>&ensp;char String = 'S';<br>&ensp;System.out.print( Integer );<br>&ensp;System.out.print( String );</code></div>
    <div class="choices" data-choices='["Does not compile as Integer and String are API class names","Throws exception","34","S","34 S"]'>
    </div>
  </section>

  <div class="submit">
  <button id="emc-submit">Submit Answers</button>
  </div>
</div>


  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script>
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
$(document).ready(function() {


  });

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
       xmlHttp.open("GET", "score-day1.php?score=" +score, true);
    xmlHttp.send(null);
    window.alert("You're Answers Are Submited !! Thank you So much");
    window.location.href = "../app.php";


      }

  }
}(jQuery));


$(document).emc({
  key: ["2","2","4","1","1","1","1","3","3","5"]
});


  </script>
    <script type="text/javascript" src="modenizer.js"></script>

</body>
</html>
-->