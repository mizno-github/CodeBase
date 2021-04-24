$(function () {
  // init

  // Event
  $('.deleteId').on('click', function () {

    var url = $(this).data('delete');
    var title = $(this).data('title');

    $('.deleteUrl').attr('action', url);
    $('.modal-body').html('<p>' + title + '</p>');
  });

  // function
});
