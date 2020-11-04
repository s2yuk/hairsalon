<?php
// include 'userMenu.php';
include 'navbar.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>About us</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <style>
      /* navbar with bootstrap */
      .menu-container, .header-center ul{
        position: fixed;
        top: 0;
      }
    
      /* ---------------------------------- */
      body{
        margin-top:150px;
        background-image: url(asset/logo1.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center center;
        background-size :cover ;
      }
      .title{
        background-color: rgba(255, 255, 255, 0.8);
      }
      #title{
        font-family: 'Oleo Script', cursive;
      }
      h5{
        font-size: 18px;
        padding: 10px;
      }
      .title-p{
        padding: 0 15px;
      }
      .media{
        display: flex;
      }
      .media p {
        color: gray;
        padding: 0 10px;
      }
      .d-flex{
          margin-left: 30px;
      } /*  */
      footer{
        position: relative;
        bottom: 0;
        width: 100%;
      }
      @media(max-width:1000px){
        .header-center ul{
          position: fixed;
          top: 80px;
          left:50px;
          margin-left:0px;
        }
        /* ------------------- */
      }
      @media(max-width:670px){
        .media{
          flex-direction: column;
          text-align: left;
          margin-top: 80px;
        }
        .media img{
          width: 100%;
        }
        .media p {
          font-size: 12px;
        }
        .d-flex{
          margin-left: 0px;
        }
      }
    </style>
</head>
  <body>
    <div class="container mx-auto title text-center">
      <h1 class="display-4 p-3" id="title">About us</h1>
      <!-- <div class="float-right text-right">
        <a href="aboutUs.php" class="btn btn-secondary">English</a>
      </div> -->
    </div>

    <div class="container bg-white rounded text-center">
        <h3 class="text-monospace text-center p-3">ご来店のお客様へ</h3>
        <p class="title-p">ご縁があり出会えた大切なお客様。1回きりのご来店ではなく、１年後も３年後も通いたくなる、そんなサロンを目指して、日々お客様と向き合っています。ヘアスタイル、ヘアデザインを通して、お客様の「生涯の美のパートナー」となることが我々Smileスタッフにとっての使命であり、最高の喜びです。</p><br>
    </div>

    <div class="container title text-center mt-5 p-3">
      <h2>お約束</h2>
    </div>

    <div class="container bg-white mt-3 mb-5 rounded">
        <br>
        <div class="media mt-3">
            <img class="d-flex align-self-start mr-3" src="asset/comit1.jpg" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="">幅広い年齢層のお客様にご来店頂いております</h5>
                <p>
                老若男女、様々なお客様にご来店頂いております。お客様おひとりおひとりに合わせたオーダーメイドのヘアスタイルを提供致します。お悩み、ご相談など、どうぞ遠慮なく申しつけください。</p>
            </div>
        </div>

        <div class="media mt-3">
            <img class="d-flex align-self-start mr-3" src="asset/comit2.jpg" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">お客様の髪を守ることが最優先事項です!</h5>
                <p>髪質、ダメージ度合い、施術履歴によっては難しいデザイン、施術もあります。そのような場合、できない旨をきちんとお伝えした上で、他に可能なヘアスタイルをご提案させて頂きます。大切なお客さまの髪を守る為、無理な施術はしないよう努めさせて頂きます。ご理解頂けますと幸いです。</p>
            </div>
        </div>

       

        <div class="media mt-3">
            <img class="d-flex align-self-start mr-3" src="asset/comit3.jpg" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">是非ご指名でのご予約をオススメ致します</h5>
                <p>それぞれ強み、得意分野を持ったスタイリストが在籍しております。ヘアスタイルやスタイリストページなどをご覧になった上で気になるスタイリストがおりましたら、遠慮なくご指名下さい！</p>
                <p>※指名料が発生するスタイリストもおりますので、事前にご確認下さいませ。</p>            
                </div>
        </div>

        <div class="media mt-3">
            <img class="d-flex align-self-start mr-3" src="asset/comit4.jpg" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">ご希望のヘアスタイルがありましたら、遠慮なくヘアスタイルの写真をご提示ください</h5>
                <p>この写真はモデルさんがかわいいから、、」「写真を見せるのは恥ずかしい、、」そんなことはありません！気に入ったスタイルややってみたいスタイルがありましたら、是非担当スタイリストにお見せ下さい！ヘアスタイル写真はお客様とのヘアデザインや、お好きなテイストを共有できる最高のツールです。ご遠慮なくご提示して頂ければと思います。</p>
            </div>
        </div>

        <div class="media mt-3">
            <img class="d-flex align-self-start mr-3" src="asset/comit5.jpg" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">明朗会計を心がけております</h5>
                <p>お客様おひとりおひとりに合わせたオーダーメイドの施術のため、お会計は施術メニューや内容によって一括りにすることが難しい場合もあります。施術前にきちんと料金を説明した上で施術に入るよう徹底致しております。ご不明な点がありましたら遠慮なく申しつけ下さいませ。</p>
            </div>
        </div>

        <div class="media mt-3">
            <img class="d-flex align-self-start mr-3" src="asset/comit6.jpg" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">アフターケアもしっかりとさせて頂きます</h5>
                <p>「思った色と違う」「パーマのかかりが弱い」そのような場合には遠慮なくご相談下さい。一度状態を見させて頂いて、お直しなどの対応を取らせて頂きます。当初のオーダーからかけ離れたもの（当初ボブのオーダーだったのにやっぱりショートにしたい）、ハイトーンカラーの色落ちなどはお直しの対象にはなりませんのでご了承ください。</p>
            </div>
        </div>

        <div class="media mt-3">
            <img class="d-flex align-self-start mr-3" src="asset/comit7.jpg" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">初めてのご来店は、お時間に余裕をもったご予約をして頂けますと幸いです</h5>
                <p>カウンセリングを大切にしております。きちんとお客様のご要望を汲み取った上で、髪質や状態に合わせた施術をさせて頂きますので、初めてのご来店時のカウンセリングは少しお時間を頂く場合がございます。初めてのご来店は、お時間に少し余裕を持ったご予約をして頂けますと幸いです。</p>
            </div>
        </div>
        <div class="media mt-3">
            <img class="d-flex align-self-start mr-3" src="asset/comit8.jpg" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">末長くお付き合いさせて頂けるサロンを目指して</h5>
                <p>
                また来たくなる、ずっと通いたくなる、Smileに来てSmileに出会えてよかった。そんなサロンを目指して、スタッフ一丸となり、あくなき技術の向上、お客さまへの心からのおもてなし、居心地の良いお店作りに励んで参ります！ご一読頂きありがとうございます。どうぞよろしくお願い致します！</p>
                <br>
                <br>
            </div>
        </div>
    <br>
    </div>
</div>


   <!-- footer -->
   <footer class="">
      <ul>
        <li>
          <a href="dashboard.php">Home</a>
        </li>
        <li>
          <p>Copyright@ Yuka Matsumoto</p>
        </li>
        <li>
          <a href="contactpage.php">Contact</a>
        </li>
      </ul>
    </footer>
    

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>