<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>CSGO Config by CuongLD</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<meta charset="UTF-8">

<style>
body {
    font-family: "Open Sans", sans-serif;
    font-size: 16px;
}
.main{

}
.main img{
    position: relative;
}
.btn-download{
    border: 1px solid;
    padding-bottom: 10px;
    padding-top: 10px;
    display: block;
    width: 100%;
    text-align: center;
    border-radius: 5px;
    margin-left: auto;
    margin-right: auto;
    background-color: #fff;
    color: #000;

}
.download-block{
    position: absolute;
    top: 10%;
    left: 10%;
    width: 300px;
}
.btn-download:hover{
    text-decoration: none;
}
.download-block #select_player{
    width: 100%;
}
.margin-top-20{
    margin-top: 20px;
}
</style>


</head>
<body>
    <div class="main">
        <img width="100%" src="assets/images/background/home_cover_1565432200750_90c106.jpg" alt="">
        <div class="download-block">
            <select id="select_player" class="btn btn-control">
                <option value="">--Chọn config--</option>
                <?php foreach($list_files as $file): ?>
                    <option value="<?=$file['name']?>"><?=$file['name']?></option>
                <?php endforeach; ?>


                <!-- <optgroup label="Idiot player">
                    <option value="cuongld">CuongLD</option>
                    <option value="hungqn">HungTD</option>
                </optgroup>
                <optgroup label="Pro player">
                    <option value="s1mple">S1mple</option>
                    <option value="woxic">Woxic</option>
                </optgroup>
                <optgroup label="Training config">
                    <option value="training">Training</option>
                </optgroup> -->
              
            </select>
            <a class="btn-download margin-top-20" href="storage/csgo_config_files/cuongld.cfg" download>
                <span class="btn-text">Tải xuống config</span>
                <span class="glyphicon glyphicon-download"></span>
            </a>
        </div>
    </div>
    <script>
        $('#select_player').change(function(){
            let data_download = $(this).val();

            if(data_download === '' || data_download == null || data_download === undefined){
                $('.btn-download').attr('href','storage/csgo_config_files/cuongld.cfg');
                $('.btn-download .btn-text').html('');
                $('.btn-download .btn-text').html('Tải cuongld config');
            }else{
                $('.btn-download').attr('href','storage/csgo_config_files/' + data_download + '.cfg');
                $('.btn-download .btn-text').html('');
                $('.btn-download .btn-text').html('Tải ' + data_download + ' config');
            }
           
        });
    </script>
</body>
</html>
