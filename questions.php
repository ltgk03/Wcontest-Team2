<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha384-/LjQZzcpTzaYn7qWqRIWYC5l8FWEZ2bIHIz0D73Uzba4pShEcdLdZyZkI4Kv676E" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container"></div>
    <div class="panel-group">

        <div class="panel panel-primary">
            <div class="panel-heading">Làm bài thi trắc nghiệm</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <button type="button" name="button" class="btn btn-success" id="btnStart"> Start</button>
                    </div>

                </div>
                <div id="questions"></div>

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <button type="button" name="button" class="btn btn-warning" id="btnFinish">Nộp bài</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h4 id="mark" class ="text-info"></h4>
                    </div>
                </div>
                <!-- <div class="row" style="margin-left:10px;">


                    <h5 style="font-weight:bold;">Quest</h5>
                    <div class="radio col-md-12">
                        <label><input type="radio" name="optradio" class="rdOptionA">A</label>
                    </div>
                    <div class="radio col-md-12">
                        <label><input type="radio" name="optradio" class="rdOptionB">b</label>
                    </div>
                    <div class="radio col-md-12">
                        <label><input type="radio" name="optradio" class="rdOptionC">c</label>
                    </div>
                    <div class="radio col-md-12">
                        <label><input type="radio" name="optradio" class="rdOptionD">d</label>
                    </div>

                </div> -->
            </div>
        </div>


    </div>




</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        $('#btnFinish').hide();
    });
    $('#btnStart').click(function() {
        GetQuestions();
        $('#btnFinish').show();
    });
    var questions;
    let index = 1;
    function sum(a, b){
    return a + b;
}
    $('#btnFinish').click(function(){
        $(this).hide();
        $('#btnStart').show();
        CheckResult();
    })

    function CheckResult(){
        let mark = 0;
        $('#questions div.row').each(function(k,v) {
            
            // Bước 1: lấy đáp án đúng của câu hỏi
            let id = $(v).find('h5').attr('id');
    
            let question = questions.find(x=>x.id == id);
            let answer = question['ranswer'];
            
            

            //Bước 2: lấy từ người dùng
            let da = $(v).find('fieldset input[type = "radio"]:checked').attr('class');
            //da: đáp án của người dùng
            let choice = '';
            switch (da) {
                case 'rdOptionA':
                    choice = "answer1";
                break;
                case 'rdOptionB':
                    choice = "answer2";
                    
                break;
                case 'rdOptionC':
                    choice = "answer3";
                break;
                case 'rdOptionD':
                    choice = "answer4";
                break;
            }
            if (choice == answer) {
                mark++;
            } else {
            }
             // Bước 3: đánh dấu câu hỏi nào đúng, câu nào sai
        
        $('#question_'+id+' >fieldset>div>label.'+answer).css('background-color','yellow');
        });
        console.log('Điểm của bạn là: ' + mark + '/' + sum(index,-1));
        $('#mark').text('Điểm của bạn là: ' + mark + '/' + sum(index,-1));
       
        
    };



    $('#btnStart').click(function() {
        GetQuestions();
    });

    function GetQuestions() {
        $.ajax({
            url: 'renderQ.php',
            type: 'get',
            success: function(data) {
                questions = jQuery.parseJSON( data);
                
                index = 1;
                let d  = '';
                $.each(questions,function(k,v) {
                  
                    
            d +=        '<div class="row" style="margin-left:10px;" id = "question_' + v['id']+'"> ';
            d +=        '<h5 style="font-weight:bold;" id ='+v['id']+'> <span class = "text-danger">Câu ' + index +': </span>' + v['quest'] +'</h5>';
            d +=         '<fieldset id = "group'+index+'">';
            d +=        '<div class="radio col-md-12">';
            d +=        '    <label  class = "answer1"><input type="radio" class="rdOptionA" name = "group'+index+'"><span class = "text-danger">A: </span> '+v['answer1']+' </label>';
            d +=        '</div>';
            d +=        '<div class="radio col-md-12">';
            d +=        '    <label class = "answer2"><input type="radio" class="rdOptionB" name = "group'+index+'"><span class = "text-danger">B: </span> '+v['answer2']+'</label>';
            d +=        '</div>';
            d +=        '<div class="radio col-md-12">';
            d +=        '    <label class = "answer3"><input type="radio" class="rdOptionC" name = "group'+index+'"><span class = "text-danger">C: </span> '+v['answer3']+'</label>';
            d +=        '</div>';
            d +=        '<div class="radio col-md-12">';
            d +=        '    <label class = "answer4"><input type="radio" class="rdOptionD" name = "group'+index+'"><span class = "text-danger">D: </span> '+v['answer4']+'</label>';
            d +=        '</div>';
            d +=         '</fieldset>';
            d +=        '</div>';
            index++;

                });

            $('#questions').html(d);
            }
        });
    }
</script>