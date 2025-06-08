$(function() {
    // Handle form submission
    $("#contactForm").on('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        var formData = $(this).serialize();
        
        // Disable submit button and show loading state
        var $submitBtn = $("#sendMessageButton");
        var originalText = $submitBtn.text();
        $submitBtn.prop('disabled', true).text('Sending...');
        
        // Clear previous messages
        $(".help-block").text('');
        
        // Send the form data
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    // Show success message
                    $("#success").html('<div class="alert alert-success">' + response.message + '</div>');
                    // Reset form
                    $("#contactForm")[0].reset();
                } else {
                    // Show error message
                    $("#success").html('<div class="alert alert-danger">' + response.message + '</div>');
                }
            },
            error: function(xhr, status, error) {
                // Show error message
                var errorMessage = 'An error occurred. Please try again later.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message;
                }
                $("#success").html('<div class="alert alert-danger">' + errorMessage + '</div>');
            },
            complete: function() {
                // Re-enable submit button
                $submitBtn.prop('disabled', false).text(originalText);
            }
        });
    });
    
    // Clear success message when form is modified
    $("#contactForm input, #contactForm textarea").on('input', function() {
        $("#success").html('');
    });
}); 