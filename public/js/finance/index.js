$(function () {
    $(document).on('click', '._QuicklyClick', function (e) {
        var start = $('._screenStart').val();
        var end = $('._screenEnd').val();
        var moneySum = $('._moneySum').html();
        // confirm()
        $('#myModal .modal-body').html('是否快速结清时间 <span class="text-primary">' + start + '</span> 至 <span class="text-primary">' + end + '</span> 所有用户的所有未结清账单 <span class="text-primary">'+moneySum+'</span> ￥')
    })
    $(document).on('click', '._Quickly', function (e) {
        var start = $('._screenStart').val();
        var end = $('._screenEnd').val();
      })
})