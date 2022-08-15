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

//Categories
$('#addCategory').on('click', function () {
    $('#submit_category').val("add-Category");
    $('#categoryForm').trigger("reset");
    $('#categoriesModalLabel').html("Add Category");
    $('#categoriesModal').modal('show');
});
$('#categoryForm').on('submit', function (e) {
    e.preventDefault();
    true;
    true;
    "";
    var cat_form = document.getElementById("categoryForm");

    $.ajax({
        processData: false,
        contentType: false,
        cache: false,
        url: "/addcategory",
        type: "POST",
        data: new FormData(cat_form),

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

//Expenses
$('#addExpense').on('click', function () {
    $('#submit_expense').val("add-Expense");
    $('#expenseForm').trigger("reset");
    $('#expenseModalLabel').html("Add Expense");
    $('#expenseModal').modal('show');
});
$('#expenseForm').on('submit', function (e) {
    e.preventDefault();
    true;
    true;
    "";
    var exp_form = document.getElementById("expenseForm");

    $.ajax({
        processData: false,
        contentType: false,
        cache: false,
        url: "/addexpense",
        type: "POST",
        data: new FormData(exp_form),

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