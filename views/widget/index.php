<form id="language-form" method="POST">
<?php
 echo Form::select('language_dropdown', $lang, $langs);?>    
</form>
<script>
$(function() {
        $('#form_language_dropdown').change(function() {
                var  val = $(this).val(); 
                $.ajax({
                        type: "POST",
                        url: $('#language-form').attr('action'),
                        data: { 'language_dropdown' : val },
                        success: function(){
                                location.reload();
                        },
                        error: function(){
                                alert("There is some problem, please try again later");
                        }
                }); 
        });
});
</script>