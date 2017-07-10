$(function(){
  var currencies = [
    {
    value: "Tin học văn phòng"
  },
    {
    value: "Thiết kế "
  },
    {
    value: "Lập trình"
    },
    {
    value: "Front end"
    },
    {
    value: "Back end"
    },
    {
    value: "Full stack"
    },
    {
    value: "Kế toán"
    },
    {
    value: "Marketing - Truyền thông"
    },
    {
    value: "Digital Marketing"
    },
    {
    value: "SEO"
    },
    {
    value: "Facebook Ads"
    },
    {
    value: "Kế toán Excel"
    },
    {
    value: "Kế toán thực hành"
    },
    {
    value: "Tiếng Anh chuyên ngành kế toán"
    },
    {
    value: "Kế toán tổng hợp"
    },
    {
    value: "Kế toán thuế"
    },
    {
    value: "Báo cáo thuế thực hành"
    },
    {
    value: "Kế toán trưởng"
    },
    {
    value: "Piano"
    },
    {
    value: "Organ"
    },
    {
    value: "Guitar"
    },
    {
    value: "Đàn tranh"
    },
    {
    value: "Ukulele"
    },
    {
    value: "Toán Học"
    },
    {
    value: "Vật Lý"
    },
    {
    value: "Hoá Học"
    },
    {
    value: "Ngữ Văn"
    },
    {
    value: "Sinh Học"
    },
    {
    value: "Kiến Trúc"
    },
    {
    value: "Luyện chữ đẹp"
    },
    {
    value: "Tiếng Việt"
    },
    {
    value: "Báo Bài"
    },
    {
    value: "Tiếng Anh"
    },
    {
    value: "Tiếng Trung"
    },
    {
    value: "Tiếng Nhật"
    },
    {
    value: "Tiếng Hàn"
    },
    {
    value: "Tiếng Thái"
    },
    {
    value: "Tiếng Đức"
    },
    {
    value: "Tiếng Pháp"
    },
    {
    value: "Tiếng Đài Loan"
    },
    {
    value: "Tiếng Nga"
    }
  ];
var addressFind = [
  {
    value: "Hà Nội"
  },
  {
    value: "Hồ Chí Minh"
  },
  {
    value: "ĐBSCL"
  },
  {
    value: "An Giang"
  },
  {
    value: "Bà Rịa - Vũng Tàu"
  },
  {
    value: "Bắc Kạn"
  },
  {
    value: "Bắc Giang"
  },
  {
    value: "Bạc Liêu"
  },
  {
    value: "Bắc Ninh"
  },
  {
    value: "Bến Tre"
  },
  {
    value: "Biên Hoà"
  },
  {
    value: "Bình Định"
  },
  {
    value: "Bình Dương"
  },
  {
    value: "Bình Phước"
  },
  {
    value: "Bình Thuận"
  },
  {
    value: "Cà Mau"
  },
  {
    value: "Cần Thơ"
  },
  {
    value: "Cao Bằng"
  },
  {
    value: "Đà Nẵng"
  },
  {
    value: "Đăk Lăk"
  },
  {
    value: "Điện Biên"
  },
  {
    value: "Đồng Nai"
  },
  {
    value: "Đồng Tháp"
  },
  {
    value: "Gia Lai"
  },
  {
    value: "Hà Giang"
  },
  {
    value: "Hà Nam"
  },
  {
    value: "Hà Tây"
  },
  {
    value: "Hà Tĩnh"
  },
  {
    value: "Hải Dương"
  },
  {
    value: "Hải Phòng"
  },
  {
    value: "Hoà Bình"
  },
  {
    value: "Huế"
  },
  {
    value: "Hưng Yên"
  },
  {
    value: "Khánh Hoà"
  },
  {
    value: "Kon Tum"
  },
  {
    value: "Lai Châu"
  },
  {
    value: "Lâm Đồng"
  },
  {
    value: "Lạng Sơn"
  },
  {
    value: "Lào Cai"
  },
  {
    value: "Nam Định"
  },
  {
    value: "Nghệ An"
  },
  {
    value: "Ninh Bình"
  },
  {
    value: "Ninh Thuận"
  },
  {
    value: "Phú Thọ"
  },
  {
    value: "Phú Yên"
  },
  {
    value: "Quảng Bình"
  },
  {
    value: "Quảng Nam"
  },
  {
    value: "Quảng Ngãi’"
  },
  {
    value: "Quảng Ninh"
  },
  {
    value: "Quảng TrịTrị"
  },
  {
    value: "Sóc Trăng"
  },
  {
    value: "Sơn La"
  },
  {
    value: "Tây Ninh"
  },
  {
    value: "Thái Bình"
  },
  {
    value: "Thái Nguyên"
  },
  {
    value: "Thanh Hoá"
  },
  {
    value: "Thừa Thiên - Huế"
  },
  {
    value: "Tiền Giang"
  },
  {
    value: "Trà Vinh"
  },
  {
    value: "Tuyên Quang"
  },
  {
    value: "Kiên Giang"
  },
  {
    value: "Vĩnh Long"
  },
  {
    value: "Vĩnh Phúc"
  },
  {
    value: "Yên Bái"
  },
  {
    value: "Hậu Giang"
  },
  {
    value: "Đăk Nông"
  },
  {
    value: "Long An"
  },
  {
    value: "Quốc tế"
  },
  {
    value: "Khác"
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
  $('#subject-find2').autocomplete({
    lookup: currencies,
    onSelect: function (suggestion) {
      var thehtml = suggestion.value;
      $('#subject-find2').attr('value',thehtml);
    }
  });
  $('#address-find').autocomplete({
    lookup: addressFind,
    onSelect: function (suggestion) {
      var thehtml = suggestion.value;
      $('#address-find').attr('value',thehtml);
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
