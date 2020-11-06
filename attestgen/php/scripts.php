           
    <script>
 
    $(document).on('change', 'input:checkbox', function() {
        $('input:checkbox').not(this).prop('checked', false);  
    });
   
        
</script>
    