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
          $returnt = $('#emc-ttelevate')


          $('#emc-ttelevate').click(function(){
             window.location.href='contact.php';
          })

      if (settings.progress) {
        $perc.text(chosen.length+'/'+itemCount);
        $inner.css({height: prog});
      }
      if (chosen.length === itemCount) {
        $submit.addClass('ready-show');



        $submit.click( function(){
          var result = "http://www.google.com/";
          $('#emc-ttelevate').attr('href', result);
          $returnt.addClass('ready-show');
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

      score = ((itemCount - wrong.length) / itemCount).toFixed(2) * 100 + "%";
      $scoreEl.text("You knew "+score+" of the questions. Write this score down! Tech Team's Elevate teachers use this score to help evaluate how we can assist you later!").addClass('new-score');
      $('html,body').animate({scrollTop: 0}, 50);
    }

  }
}(jQuery));


$(document).emc({
  key: ["1","1","1","1","1","1","1", "1"]
});
