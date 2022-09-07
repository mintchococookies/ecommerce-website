function validateForm(){
    var selected_date = new Date(document.getElementById('delivery_date').value);
    var current_date = new Date();
    if (selected_date < current_date) {
        alert('Delivery date cannot be before today.');
        return (false);
    }

    var contact_number = document.getElementById('contact_number').value;
    if (contact_number.length < 10 || contact_number.length > 11) {
        alert('Invalid contact number.');
        return (false);
    }
}
