$('document').ready(function () {
  showContainer();
});

function showContainer() {
  $('.signin a').click(function () {
    var linkPath = $(this).attr('href');
    var titleName = [];

    if (linkPath === '#signin') {
      titleName = 'Sign In';
    }

    $(linkPath).dialog({
      title: titleName,
      autoOpen: true,
      dialogClass: 'fixed-dialog',
      draggable: true,
      modal: true,
      resizable: false,
      width: 'auto'
    }); // end dialog
  }); // end click
} // end showContainer
