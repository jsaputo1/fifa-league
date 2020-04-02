(function($) {
  console.log('main 1 working');

  $('.standings').hide();
  $('.fixture-page').hide();

  $('select').on('change', function(e) {
    (team1 = $('.select-1').val()), (team2 = $('.select-2').val());

    let draw = 'draw';

    // const $authorToAdd = $('#author-form').val();

    $('#submit').on('click', function(e) {
      $.ajax({
        method: 'GET',
        url:
          red_vars.rest_url +
          'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1'
      }).done(function(data) {
        $.each(data, function(index, value) {
          //   console.log(value);

          let teamName = value.title.rendered;

          //   console.log('from wordpress', teamName);

          const team1Score = $('#gf-1').val();
          const team2Score = $('#gf-2').val();

          console.log(team1, ':', team1Score);
          console.log(team2, ':', team2Score);

          if (team1Score > team2Score) {
            winner = team1;
          } else {
            winner = team2;
          }

          if (team1Score === team2Score) {
            winner = draw;
          }
          console.log('Winner:', winner);

          $('.result').append(winner);
        }); // closing for each
      }); // closing done
    }); // closing submit
  }); // closing on change

  // submit scores

  $('select').on('change', function(e) {
    ($name1ToUpdate = $('#team-name-1').val()),
      ($name2ToUpdate = $('#team-name-2').val());

    $('#submit').on('click', function(event) {
      event.preventDefault();
      // console.log('test');

      let $name1ToUpdate = $('#team-name-1').val();
      let $name2ToUpdate = $('#team-name-2').val();
      console.log('ID:', $name1ToUpdate);

      let team2Score = $('#gf-2').val();
      let $team1Score = $('#gf-1').val();

      console.log('Team:', $name1ToUpdate);

      $.ajax({
        method: 'POST',
        url: red_vars.rest_url + 'wp/v2/posts/' + $name1ToUpdate,

        data: {
          //   content: $name1ToUpdate
        },
        beforeSend: function(xhr) {
          xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
        }
      })
        .done(function(response) {
          {
            alert('Success!');
          }
        })
        .fail(function(err) {
          alert(
            'Please check if the name of the author and the quote were filled correctly'
          );
        });
    }); // Closing .event listener (generate quote)
  }); // closing on change

  $('.menu-click-a').on('click', function(event) {
    $('.menu-click-a').attr('id', 'selectedGroup');
    $('.menu-click-b').attr('id', '');
    $('.group-b-fixtures').hide();
    $('.group-a-fixtures').css('display', 'block');
  });

  $('.menu-click-b').on('click', function(event) {
    $('.menu-click-b').attr('id', 'selectedGroup');
    $('.menu-click-a').attr('id', '');
    $('.group-a-fixtures').css('display', 'none');
    $('.group-b-fixtures').css('display', 'block');
  });

  $('.fixtures-menu').on('click', function(event) {
    $('.standings').hide();
    $('.knockout-stage').hide();
    $('.fixture-page').show();

    $('.menu-click-a').attr('id', 'selectedGroup');
    $('.menu-click-b').attr('id', '');
    $('.groups-menu').attr('id', '');
    $('.knockout-menu').attr('id', '');
    $('.fixtures-menu').attr('id', 'on-page');
  });

  $('.groups-menu').on('click', function(event) {
    $('.fixture-page').hide();
    $('.knockout-stage').hide();
    $('.standings').show();

    $('.menu-click-a').attr('id', 'selectedGroup');
    $('.menu-click-b').attr('id', '');
    $('.groups-menu').attr('id', 'on-page');
    $('.fixtures-menu').attr('id', '');
    $('.knockout-menu').attr('id', '');
  });

  $('.knockout-menu').on('click', function(event) {
    $('.standings').hide();
    $('.fixture-page').hide();
    $('.knockout-stage').show();

    $('.menu-click-a').attr('id', 'selectedGroup');
    $('.menu-click-b').attr('id', '');
    $('.groups-menu').attr('id', '');
    $('.fixtures-menu').attr('id', '');
    $('.knockout-menu').attr('id', 'on-page');
  });

  // $('.highlights-menu').on('click', function(event) {
  //   $('.groups-menu').attr('id', '');
  //   $('.fixtures-menu').attr('id', '');
  //   $('.highlights-menu').attr('id', 'on-page');
  // });

  $(window).on('scroll', function() {
    if (window.pageYOffset > 100) {
      $('.fixture-menu').addClass('fixture-menu2');
      $('.group-a-fixtures').css('padding-top', '5px');
    } else {
      $('.fixture-menu').removeClass('fixture-menu2');
      $('.group-a-fixtures').css('padding-top', '');
    }
  });
})(jQuery);
