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