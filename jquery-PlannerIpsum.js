(function( $ ){

  $.fn.PlannerIpsum = function( options ) {  

    var settings = $.extend( {
      'type' : 'planning-and-filler',
      'start_with_lorem' : true,
      'paras' : 3,
      'sentences' : 0
    }, options);

    return this.each(function() {        

      var $this = $(this);

      $.getJSON('http://ruthmiller.net/planner-ipsum/api/?callback=?', 
        { 
          'type':settings.type, 
          'start-with-lorem':settings.start_with_lorem ? 1 : 0, 
          'paras':settings.paras, 
          'sentences':settings.sentences 
        }, function(plannerGoodness)
      {
        if (plannerGoodness && plannerGoodness.length > 0)
        {
          for (var i = 0; i < plannerGoodness.length; i++)
            $this.append('<p>' + plannerGoodness[i] + '</p>');
        }
      });

    });

  };
})( jQuery );
