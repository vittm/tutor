$(function(){
  var currencies = [
    { id: "T",
      value: "Toan"
    },
    { id: "KTTKNT",
      value: "Kiến trúc/Thiết kế nội thất"
    }
  ];

  // setup autocomplete function pulling from currencies[] array
  $('#subject-find').autocomplete({
    lookup: currencies,
    onSelect: function (suggestion) {
      var thehtml = suggestion.value;
      $('#subject-find').attr('value',thehtml);
    }
  });


$.urlParam = function(name){
  var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
  return results[1] || 0;
}
    // for (var i = 0; i < currencies.length ; i++) {
    //   if($.urlParam('valueSubject') == currencies[i].id){
    //     $('#field').attr('value',currencies[i].value);
    //   }
    // }
});
