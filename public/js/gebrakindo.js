$(document).ready(function(){
    
    $('#news').hide();
});

$('#portfolioModal1').on('show.bs.modal', function(e) {
    var title = $(e.relatedTarget).data('title');
    var content = $(e.relatedTarget).data('content');
    var test = $('#news').text();

    $(e.currentTarget).find('.modal-body h2').text(title);
    $(e.currentTarget).find('.modal-body p').text(content);
});