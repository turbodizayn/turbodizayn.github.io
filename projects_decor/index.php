<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Turbodizayn</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="c��������������/ ������/ �������������/ ������������ � �������/ ��������� � ���������/ ������� �������/ 3D ������������/ ������������ ����������/ ������� �������/ ������ ���������� � ������/ ��������� ������/ ������������/ �������"/>
        <meta name="keywords" content="Turbodizayn, ������ ������� ���, ����������� ������ ���, ������� �������� ���������, ������� ����������� ��������, ������ ����������, ������ ���������, �������� ���������, ��������, ������-������ ���������, ������� ������, 3D, �������, ��������, ������ �������, ������������ ����������, ������������ ����������, ����������� ��������, �������� ��������, �������� ����, ������ � ����, ������ ��������� �������, ������ � ������ �������, ������ ��������, ��������������, �����-���������"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
    </head>
    <style>
        span.reference{
            position:fixed;
            left:10px;
            bottom:0px;
            font-size:9px;
        }
        span.reference a{
            color:#aaa;
            text-decoration:none;
        }
        span.reference a:hover{
            color:#F59200;
            
        }

    </style>
    <body>
        <div class="albumbar">
                        <div id="albumSelect" class="albumSelect">
                <ul>
                    <?php
                    $firstAlbum = '';
                    $i=0;
                    if(file_exists('images')) {
                        $files = array_slice(scandir('images'), 2);
                        if(count($files)) {
                            natcasesort($files);
                            foreach($files as $file) {
                                if($file != '.' && $file != '..') {
                                    if($i===0)
                                        $firstAlbum = $file;
                                    else
                                        echo "<li><a>$file</a></li>";
                                    ++$i;
                                }
                            }
                        }
                    }
                    ?>
                </ul>
                <div class="title down"><?php echo $firstAlbum;?></div>
            </div>
        </div>
        <div id="loading"></div>
        <div id="preview">
            <div id="imageWrapper">               
            </div>  
        </div>
        <div id="thumbsWrapper">
        </div>
        <div class="infobar">
            <span id="description"></span>
            <span class="reference">
                <a href="http://www.turbodizayn.com"> <<< TURBODIZAYN</a>
            </span>
        </div>
        <!-- The JavaScript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="jquery.gallery.js"></script>
    </body>
</html>