jQuery(document).ready(function ($) {
  /*Video Youtube Viemo*/
  if ($('[data-video-widget]').length) {
    $('[data-video-widget]').each(function () {
      var videoUrl = $(this).attr('data-video');
      var type = $(this).attr('data-type');
      var avoidBgVideo = $(this).attr('data-avoid-bg') !== undefined;
      var widget = $(this);
      var target = $(this).attr('data-video-widget');

      if (!avoidBgVideo) 
      {
        switch (type) {
          case 'youtube':
            widget.css({
              'background-image': 'url(http://img.youtube.com/vi/' + videoUrl + '/0.jpg)'
            });
            break;
          case 'vimeo':
            $.ajax({
              type: 'GET',
              url: 'http://vimeo.com/api/v2/video/' + videoUrl + '.json',
              jsonp: 'callback',
              dataType: 'jsonp',
              success: function (data) {
                var thumbnail_src = data[0].thumbnail_large;
                widget.css({
                  'background-image': 'url(' + thumbnail_src + ')'
                })
              }
            });
            break;
          default: /* nothing to do to avoid loading of video */
            break;
        }
      }
    });
  }

  $('[data-video-widget] .btn-play-video').click(function () {

    var widget = $(this).closest('[data-video-widget]');
    if(widget.length == 0) {
      return;
    }

    var target = widget.attr('data-video-widget');
    var type = widget.attr('data-type');
    var videoUrl = widget.attr('data-video');

    target = $(target);
    target.addClass('show');
    target.find('.video-wrapper').empty();

    switch (type) {
      case 'youtube':
        target.find('.video-wrapper').html('<iframe src="https://www.youtube.com/embed/' + videoUrl + '?autoplay=1&rel=0" frameborder="0" allowfullscreen></iframe>');
        break;
      case 'vimeo':
        target.find('.video-wrapper').html('<iframe src="https://player.vimeo.com/video/' + videoUrl + '?autoplay=1&byline=0&portrait=0"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
        break;
      default:
        target.find('.video-wrapper').append('<video src="'+videoUrl+'" width="100%" class="video-local" autoplay="autoplay" controls></video>');
        playFileVideo($(this).parent());
        break;
    }
  });

  /* Play/pause for file video type  */
  // $('.wrap-video').on('click', 'video', function(e) {
  //   e.preventDefault();
  //   var type = $(this).closest('.wrap-video').attr('type');
  //   if(type == 'file') {
  //     togglePlayback(this);
  //   }
  // });

  function playFileVideo(parent) {
    parent.find('video').get(0).play();
  }

  // Remove any playing of videos when a video modal is closed
  $('.video-modal').click(function(e) {
    if( $(e.target).closest('.modal-content').length == 0 ) {
        $(e.target).closest('.video-modal').find('.video-wrapper').empty();
    }
  });

});