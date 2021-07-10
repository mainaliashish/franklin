            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#contact-form').on('submit', function (event) {
                event.preventDefault();
                $('#name-error').text('');
                $('#email-error').text('');
                $('#phone').text('');
                $('#message-error').text('');

                name = $('#name').val();
                email = $('#email').val();
                phone = $('#phone').val();
                message = $('#message').val();

                $.ajax({
                    url: "{{ route('contact.form') }}",
                    type: "POST",
                    data: {
                        name: name,
                        email: email,
                        phone: phone,
                        message: message,
                    },
                    success: function (response) {
                        console.log(response);
                        if (response) {
                            $('#success-message').text(response.success);
                            $("#contact-form")[0].reset();
                        }
                    },
                    error: function (response) {
                        $('#name-error').text(response.responseJSON.errors.name);
                        $('#email-error').text(response.responseJSON.errors.email);
                        $('#phone-error').text(response.responseJSON.errors.phone);
                        $('#message-error').text(response.responseJSON.errors.message);
                    }
                });
            });
