$('#submit').on('click', function(event) {
  event.preventDefault();
  // console.log('test');

  const $authorToAdd = $('#author-form').val();
  const $quoteToAdd = $('#quote-form').val();
  const $sourceToAdd = $('#source-form').val();
  const $sourceUrlToAdd = $('#url-form').val();

  $.ajax({
    method: 'POST',
    url: red_vars.rest_url + 'wp/v2/posts',
    data: {
      content: $quoteToAdd,
      title: $authorToAdd,
      _qod_quote_source: $sourceToAdd,
      _qod_quote_source_url: $sourceUrlToAdd
    },
    beforeSend: function(xhr) {
      xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
    }
  })
    .done(function(response) {
      if ($authorToAdd === '' || $quoteToAdd === '') {
        alert(
          'Please check if the name of the author and the quote were filled correctly'
        );
      } else {
        alert('Success! Your quote has been submitted.');
        $('#author-form').val('');
        $('#quote-form').val('');
        $('#source-form').val('');
        $('#url-form').val('');
      }
    })
    .fail(function(err) {
      alert(
        'Please check if the name of the author and the quote were filled correctly'
      );
    });
}); // Closing .event listener (generate quote)

$(function() {
  $('#groups').tablesorter({
    sortList: [[3, 1]]
  });
});

$(function() {
  $('#groups-b').tablesorter({
    sortList: [[3, 1]]
  });
});
