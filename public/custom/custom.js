$(document).ready(function () {
//modals
    //Customers
    $('#addCustomer').on('click', function () {
        $('#submit_customer').val("add-Customer");
        $('#customer').trigger("reset");
        $('#customerModalLabel').html("Add Customer");
        $('#customerModal').modal('show');
    });
    $('#customer').on('submit', function (e) {
        e.preventDefault();
        true;
        true;
        "";
        var cust_form = document.getElementById("customer");

        $.ajax({
            processData: false,
            contentType: false,
            cache: false,
            url: "/addcustomer",
            type: "POST",
            data: new FormData(cust_form),

            beforeSend: function () {
                Swal.fire({
                    icon: 'info',
                    title: 'Submit!',
                    text: 'Submitting...'
                });
            },
            success: function (data) {
                if (data === "Success") {
                    Swal.fire({
                        icon: 'success',
                        title: 'SAVED!',
                        showConfirmButton: false,
                        timer: 1000
                    }).then(function () {
                        window.location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Error processing request! Please try again.'
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        })
    })
})