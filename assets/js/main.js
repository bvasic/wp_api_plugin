$( document ).ready(function() {

    console.log("There it is!");

        $('#usersList').DataTable( {
            ajax: {
                url: 'http://localhost/inpsyde/fetch.php',
                dataSrc: ''
            },
            columns: [ 
                        { data: 'name' },
                        { data: 'email' },
                        { data: 'address.street' },
                        { data: 'address.zipcode'}
                    ]
        } );

});