const _token = $('meta[name="csrf-token"]').attr('content');

const translateDelete = (id) => {
    
    swal({
        title: "Diqqət!",
        text: "Silinən informasiyalar geri qaytarılmır, yenidən əlavə edilməlidir!",
        icon: "warning",
        buttons: ['İmtina et','Sil'],
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          location.href = `/translations/delete/${id}`;
        } else {
          swal("İmtina edildi!");
        }
      });
}

const translateView = (id) => {
  
  $.ajax({
    type: "POST",
    url: "/translations/view",
    data: {
      _token,
      id
    },
    success: function (response) {
      
      document.getElementById('view_contents').innerHTML = response.contents;
      $('#viewModal').modal('show')

    }
  });

}