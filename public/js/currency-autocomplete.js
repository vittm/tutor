$(function(){
  var currencies = [
    { id: "XD",
      value: "Xây dựng"
    },
    { id: "KTTKNT",
      value: "Kiến trúc/Thiết kế nội thất"
    },
    { id: "BDS",
      value: "Bất động sản "
    },
    { id: "VT",
      value: "Viễn Thông "
    },
    { id: "THTHBC",
      value: "Truyền hình/Truyền thông/Báo chí "
    },
    { id: "MY",
      value: "Mỹ Thuật/Nghệ Thuật/Thiết Kế "
    },
    { id: "QCKMDN",
      value: "Quảng cáo/Khuyến mãi/Đối ngoại "
    },
    { id: "IN",
      value: "Internet/Online Media"
    },
    { id: "INXB",
      value: "In ấn/ Xuất bản"
    },
    { id: "NT",
      value: "Ngân hàng"
    },
    { id: "KT",
      value: "Kiểm toán"
    },
    { id: "TCDT",
      value: "Tài chính/Đầu tư"
    },
    { id: "BH",
      value: "Bảo hiểm "
    },
    { id: "HTD",
      value: "Hàng tiêu dùng "
    },
    { id: "HGD",
      value: "Hàng gia dụng"
    },
    { id: "BD",
      value: "Bán lẻ/Bán sỉ"
    },
    { id: "TPDU",
      value: "Thực phẩm & Đồ uống"
    },
    { id: "TT",
      value: "Thời trang "
    },
    { id: "HCC",
      value: "Hàng cao cấp"
    },
    { id: "HKDL",
      value: "Hàng không/Du lịch"
    },
    { id: "NHKS",
      value: "Nhà hàng/Khách sạn"
    },
    { id: "DDT",
      value: "Điện/Điện tử"
    },
    { id: "CK",
      value: "Cơ khí"
    },
    { id: "HHHH",
      value: "Hóa học/Hóa sinh "
    },
    { id: "MTXLCT",
      value: "Môi trường/Xử lý chất thải "
    },
    { id: "DTNL",
      value: "Điện lạnh/Nhiệt lạnh "
    },
    { id: "SX",
      value: "Sản xuất"
    },
    { id: "DK",
      value: "Dầu khí"
    },
    { id: "DMDG",
      value: "Dệt may/Da giày"
    },
    { id: "DPCNSH",
      value: "Dược Phẩm/Công nghệ sinh học "
    },
    { id: "TDHOT",value:'Tự động hóa/Ô tô '},

    { id: "NNLN",value:'Nông nghiệp/Lâm nghiệp '},

    { id: "SPCN",value:'Sản phẩm công nghiệp '},

    { id: "CNC",value:'Công nghệ cao '},

    { id: "DCKS",value:'Địa chất/Khoáng sản'},

    { id: "YT",value:'Y tế'},

    { id: "YTCSSK",value:'Y tế/Chăm sóc sức khỏe '},
    { id: "BS",value:'Bác sĩ '},
    { id: "YSHL",value:'Y sĩ/Hộ lý '},
    { id: "DS",value:'Dược sĩ '},

    { id: "TDV",value:'Trình dược viên '},

    { id: "DV",value:'Dịch vụ'},

    { id: "PCPPLN",value:'Phi chính phủ/Phi lợi nhuận'},

    { id: "GDDT",value:'Giáo dục/Đào tạo '},

    { id: "TVV",value:'Tư vấn '},

    { id: "VTAI",value:'Vận tải'},

    { id: "VCGN",value:'Vận chuyển/Giao nhận '},

    { id: "KV",value:'Kho vận' },

    { id: "HH",value:'Hàng hải '},

    { id: "GDKH",value:'Giao Dịch Khách Hàng'},

    { id: "MAK",value:'Marketing' },

    { id: "BH",value:'Bán hàng '},

    { id: "DVKH",value:'Dịch vụ khách hàng' },
    { id: "BHKT",value:'Bán hàng kỹ thuật '},

    { id: "BPHT",value:'Bộ Phận Hỗ trợ'},

    { id: "HCTK",value:'Hành chánh/Thư ký' },

    { id: "KT",value:'Kế toán '},

    { id: "NS",value:'Nhân sự '},

    { id: "BPD",value:'Biên phiên dịch' },

    { id: "PL",value:'Pháp lý '},

    { id: "KTCN",value:'Kỹ thuật - Công nghệ'},

    { id: "HTSX",value:'Hỗ trợ sản xuất'},

    { id: "XN",value:'Xuất nhập '},

    { id: "QAQC",value:'QA/QC '},

    { id: "SX",value:'Sản Xuất'},

    { id: "TMVTCV",value:'Thu Mua/Vật Tư/Cung Vận'},

    { id: "ATLD",value:'An toàn lao động'},

    { id: "BTSC",value:'Bảo trì/Sửa chữa'},

    { id: "HDDA",value:'Hoạch định/Dự án'},

    { id: "CNTT",value:'Công Nghệ Thông Tin'},
    { id: "THH",value:'Tiểu Học'},
    { id: "THCS",value:'THCS'},
    { id: "THPT",value:'THPT'},
    { id: "DH",value:'Đại Học'},
  ];
  
  // setup autocomplete function pulling from currencies[] array
  $('#field-find').autocomplete({
    lookup: currencies,
    onSelect: function (suggestion) {
      var thehtml = suggestion.value;
      $('#field-find').attr('value',thehtml);
    }
  });
  

$.urlParam = function(name){
  var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
  return results[1] || 0;
}
    for (var i = 0; i < currencies.length ; i++) {
  if($.urlParam('valueField') == currencies[i].id){
    $('#field').attr('value',currencies[i].value);
  }
}
});


