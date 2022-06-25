function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#blah')
              .attr('src', e.target.result)
              .width(200)
              .height(250);
      };

      reader.readAsDataURL(input.files[0]);
  }
}