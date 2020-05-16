<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maps</title>
    <link rel="stylesheet" href="assets/css/css.css<?= "?v=" . rand(99,999999)?>"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
     />
     <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   ></script>
    <script src="assets/js/main.js"></script>
</head>
<body>
    <div class="main">
        <div class="head">
            <input type="text" id="search" placeholder="دنبال کجا میگردی؟"/>
        </div>
    <div class="mapContainer">
        <div id="map" style="width: 100%; height: 700px"></div>
    </div>
    </div>

    <div class="modal-overlay" style="display:none;">
        <div class="modal">
            <span class="close">x</span>
            <h3 class="modal-title">ثبت لوکیشن</h3>
            <div class="modal-content">
                <form action="<?= baseurl('proccess/addLocation.php')?>" method="post" >
                    <div class="field-row">
                        <div class="field-title">مختصات</div>
                        <div class="field-content">
                            <input type="text" name="lat" readonly id="lat-display" style="width: 160px;text-align: center">
                            <input type="text" name="lng" readonly id="lng-display" style="width: 160px;text-align: center">
                        </div>
                        <div class="field-row"></div>
                            <div class="field-title">نام مکان</div>
                            <div class="field-content">
                                <input type="text" name="title" placeholder="مثلا دفتر مرکزی">
                            </div>
                            <div class="field-row">
                                <div class="field-title">نوع</div>
                                <div class="field-content">
                                    <select name="type" id="">
                                        <?php foreach(locationTypes as $key=>$value): ?>
                                                <option value="<?= $key?>" ><?= $value?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="field-row">
                                <div class="field-title">ذخیره نهایی</div>
                                <div class="field-content">
                                    <input type="submit" value="ثبت">
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/script.js<?= "?v=" . rand(99,999999)?>"></script>
    <script>
        $(document).ready(function(){
            $('.modal-overlay .close').click(function(){
                $('.modal-overlay').fadeOut();
            });
        });
    </script>
</body>
</html>