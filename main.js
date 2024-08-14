 function confirmDelete(form) {
            if (confirm("Are you sure you want to delete this record?")) {
                form.submit();
            } else {
                return false;
            }
        }

        function editRecord(id, first_name, last_name, email, phone_number) {
            document.getElementById('action').value = 'update';
            document.getElementById('id').value = id;
            document.getElementById('first_name').value = first_name;
            document.getElementById('last_name').value = last_name;
            document.getElementById('email').value = email;
            document.getElementById('phone_number').value = phone_number;
        }
