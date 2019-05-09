require([
    "jquery"
], function($){
    $(document).ready(function(){
        $('.row_faq .title').click(function(){
            $(this).parent('li').toggleClass("open");
        });
    });
});