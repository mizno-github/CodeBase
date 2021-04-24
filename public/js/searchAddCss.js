$(function () {
  // init

  // Event

  $('.searchMark').each(function () {
    var txt = e($(this).text());
    $(this).html(txt.replace(searchWord, '<span class="bg-warning">' +searchWord + '</span>'));
  });

  // function
  function e(str) {
    // 一文字づつエスケープ処理をしている
    str = str.replace(/&/g, '&amp;');
    str = str.replace(/</g, '&lt;');
    str = str.replace(/>/g, '&gt;');
    str = str.replace(/"/g, '&quot;');
    str = str.replace(/'/g, '&#39;');
    str = str.replace(/&lt;code&gt;/g, '<pre class="prettyprint" style="white-space: pre;">');
    str = str.replace(/&lt;!code&gt;/g, '</pre>');
    return str;
  }
});
