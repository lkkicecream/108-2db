<?php
    require_once("connect.php");
    $con = create_connection();
    //組合查詢字串
    $sql = "SELECT imagesights.filepic , sights.sname, sights.sstars, sights.slocation 
            FROM imagesights, sights 
            WHERE imagesights.filename = sights.sname and sights.sstars >= 4";
    //
    $cur = execute_sql($con,"test", $sql);
    //取出資料
    $i = 0;
    while($data = mysqli_fetch_array( $cur )) {
        $img[$i] = "data:image/jpeg;base64,".$data[0];
        $name[$i] = $data[1];
        $stars[$i] = $data[2];
        $location[$i] = $data[3];
        $i++;
    }
    $i = 0;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/66a625edde.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>首頁</title>
    <style>
        body {
            background-color: #DEFFFF;
        }

        .Icon {
            width: 50px;
            height: 50px;
        }

        .Home {
            /* navbar距離 */
            width: 150px;
        }

        .bg-green {
            background-color: #466673;
            box-shadow: 0 3px 8px 0 #000;
        }

        .text {
            width: 100%;
        }

        .text select {
            width: 500px;
            height: 50px;
            line-height: 55px;
            font-size: 1.0rem;
            border: 1px solid #000;
            color: #5f5f5f;
        }

        .form-search {
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .input-search {
            height: 50px;
        }
    </style>
</head>

<body>
    <div id="navbar">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-center bg-green">
            <a class="navbar-brand Home titleb " href="#" style="font-size: 25px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active Home">
                        <a class="nav-link titleb" href="home.php" style=" font-size: 17px;"><i class="fas fa-home"></i>
                            首頁 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active Home">
                        <a class="nav-link titleb" href="signup.php" style="font-size: 17px;"><i class="fas fa-file-alt"></i>
                            登入 <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div align="center">
        <table style="margin-top: 7em">
            <tr>
                <form class="form-inline my-2 my-lg-0 form-search" align="center">
                    <th>
                        <input class="form-control mr-sm-2 input-search" align="left" type="search" placeholder="Search" aria-label="Search" style="width: 400px">
                    </th>
                    <td>
                        <div class="text" align="left">
                            <select class="text-select">
                                <option>不選擇</option>
                                <option>中區</option>
                                <option>東區</option>
                                <option>西區</option>
                                <option>南區</option>
                                <option>北區</option>
                                <option>西屯區</option>
                                <option>南屯區</option>
                                <option>北屯區</option>
                                <option>豐原區</option>
                                <option>大里區</option>
                                <option>太平區</option>
                                <option>清水區</option>
                                <option>沙鹿區</option>
                                <option>大甲區</option>
                                <option>東勢區</option>
                                <option>梧棲區</option>
                                <option>烏日區</option>
                                <option>神岡區</option>
                                <option>大肚區</option>
                                <option>大雅區</option>
                                <option>后里區</option>
                                <option>霧峰區</option>
                                <option>潭子區</option>
                                <option>龍井區</option>
                                <option>外埔區</option>
                                <option>和平區</option>
                                <option>石岡區</option>
                                <option>大安區</option>
                                <option>新社區</option>
                            </select>
                        </div>
                    </td>
            </tr>
            <tr>
                <th>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">搜尋</button>
                </th>
                <td>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="reset">重設</button>
                </td>
            </tr>
            </form>

        </table>
    </div>
    <table style="margin-left: 15em;">
        <?php 
            for($i = 0; $i < 10; $i ++) {
                echo "
                <tr>
                    <td>
                    <img src=\"$img[$i] \" alt=\"\" style=\"height: 200px; width: 200px\">
                    </td>
                    <td width=\"100\">$name[$i]</td>
                    <td width=\"100\">$stars[$i]</td>
                    <td width=\"100\">$location[$i]</td>
                </tr>
                ";
            }
        ?>
        
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>