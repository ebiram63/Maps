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
    <!-- head tag search -->
    <div class="main">
    <div class="head">
        <div class="search-box">
        <input type="text" id="search" placeholder="دنبال کجا می گردی؟">
        <div class="clear"></div>
        <div class="search-results" style="display: none;width: 400px"></div>
        </div>
        </div>

        <!-- end head tag for search -->
    <div class="mapContainer">
        <div id="map" style="width: 100%; height: 700px"></div>
    </div>
    <img src="assets/img/current.png" class="currentLoc">
</div>

    <div class="modal-overlay" style="display:none;">
        <div class="modal">
            <span class="close">x</span>
            <h3 class="modal-title">ثبت لوکیشن</h3>
            <div class="modal-content">
                <form id="addLocationForm" action="<?= baseurl('proccess/addLocation.php')?>" method="POST" >
                    <div class="field-row">
                        <div class="field-title">مختصات</div>
                        <div class="field-content">
                            <input type="text" name="lat" readonly id="lat-display" style="width: 160px;text-align: center">
                            <input type="text" name="lng" readonly id="lng-display" style="width: 160px;text-align: center">
                        </div>
                        <div class="field-row"></div>
                            <div class="field-title">نام مکان</div>
                            <div class="field-content">
                                <input type="text" id="l-title" name="title" placeholder="مثلا دفتر مرکزی">
                            </div>
                            <div class="field-row">
                                <div class="field-title">نوع</div>
                                <div class="field-content">
                                    <select name="type" id="l-type">
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
                    <div class="ajax-result"></div>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/script.js<?= "?v=" . rand(99,999999)?>"></script>
    <script>
        // for open location in your map by eye icon in panel
        <?php if($location): ?>
                L.marker([<?=$location->lat ?>,<?= $location->lng?>]).addTo(map).bindPopup("<?= $location->title?>").openPopup();
        <?php endif;?>   

        //for show user location by click icon in map 
        $(document).ready(function(){
            $('img.currentLoc').click(function(){
                locate();
            });
            $('#search').keyup(function(){
                const input = $(this);
                const saerchResult = $('.search-results');

            $.ajax({
                url: '<?= SITE_URL . 'proccess/search.php'?>',
                method: 'POST',
                data:{keyword:input.val()},
                success: function(response){
                    saerchResult.slideDown().html(response);
                         }

                });
            })
        });

    ;</script>
</body>
</html>
