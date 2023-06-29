if(document.getElementById('team-table')){

    $(function () {
        $("#team-table").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false, "ordering":false
          //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        })
        //.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        /*
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
          */
        
      });
}

if(document.getElementById('appointments-table')){

  $(function () {
      $("#appointments-table").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false, "ordering":false
        //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      })
      //.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

      /*
      $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
        */
      
    });
}

if(document.getElementById('my-appointments-table')){

  $(function () {
      $("#my-appointments-table").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false, "ordering":false
        //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      })
      //.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

      /*
      $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
        */
      
    });
}

if(document.getElementById('task-widget')){

  $(function () {
      $("#task-widget").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false, "ordering":false
        //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      })
      //.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

      /*
      $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
        */
      
    });
}