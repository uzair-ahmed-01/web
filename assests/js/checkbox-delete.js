

        $(document).ready(function () {
            $('#checkAll').click(function () {
                if (this.checked) {
                    $('.checkbox').each(function () {
                        this.checked = true;
                    });
                } else {
                    $('.checkbox').each(function () {
                        this.checked = false;
                    });
                }
            });


            /*$(".remove").click(function () {
             var id = $(this).parents("tr").attr("id");
             
             
             if (confirm('Are you sure to remove this record ?'))
             {
             $.ajax({
             url: '/delete.php',
             type: 'GET',
             data: {id: id},
             error: function () {
             alert('Something is wrong');
             },
             success: function (data) {
             $("#" + id).remove();
             alert("Record removed successfully");
             }
             });
             }
             });*/

            $('#delete').click(function () {
                var dataArr = new Array();
                if ($('input:checkbox:checked').length > 0) {
                    $('input:checkbox:checked').each(function () {
                        dataArr.push($(this).attr('id'));
                        $(this).closest('tr').remove();
                    });
                    sendResponse(dataArr)
                } else {
                    alert('No record selected ');
                }

            });


            function sendResponse(dataArr) {
                $.ajax({
                    type: 'post',
                    url: '../controllers/delete.php',
                    data: {'data': dataArr},
                    success: function (response) {
                        alert(response);
                    },
                    error: function (errResponse) {
                        alert(errResponse);
                    }
                });
            }

        });