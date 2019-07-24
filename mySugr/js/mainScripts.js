$(document).ready(function(){
  $('.phone_us').mask('(000) 000-0000');

  if ($('select').val() === '') {
    $('select').css({
      'color': '#9a9b9c',
      'font-style': 'italic',
      'font-weight': 'bold'
    });
  }
  /*$('select').change(function() {
    if ($('select').val() !== '') {
      $('select').css({
        'color': '#3a3a3a',
        'font-style': 'normal',
        'font-weight': 'normal'
      });
    } else {
      $('select').css({
        'color': '#9a9b9c',
        'font-style': 'italic',
        'font-weight': 'bold'
      });
    }
  });*/
});

function defaulter(e) {
  console.log(e);
  if ($(e).val() !== '') {
    $(e).css({
      'color': '#3a3a3a',
      'font-style': 'normal',
      'font-weight': 'normal'
    });
  } else {
    $(e).css({
      'color': '#9a9b9c',
      'font-style': 'italic',
      'font-weight': 'bold'
    });
  }
}