<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php include 'header-url.php'; ?>
</head>

<?php include 'header.php'; ?>

<div class="wrapper">
  <!-- login-modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="dialog-wrap-w login_to_go">
            <div class="kv"></div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
            <dl class="login-panel">
              <dt>Please login to continue</dt>
              <dd><input id="loginBoxLoginName" type="text" placeholder="Username"></dd>
              <dd><input id="loginBoxPassword" type="password" placeholder="Password"></dd>
              <dd class="valid-code" style="display: block"><input id="loginBoxValidCode" type="text" placeholder="Validation Code" maxlength="4"><img id="loginBoxAuthenticateImage" src="https://www.skyexch.art/verifycode.gr?v=1695887927899"></dd>
              <dd><input id="loginBoxValid" name="valid" type="hidden" value="23b44bce-8089-420c-b1e9-7ee314ca24e5" maxlength="4">
              </dd>
              <dd><a id="loginBoxLoginBtn"style="cursor: pointer" class="btn-send">Login <i class="fa fa-sign-out exit-icon" aria-hidden="true"></i></a>
              </dd>
              <dd id="loginBoxErrorMsg" class="error"></dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>


  <main>
    <!-- banner -->
    <section class="home_banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12 p-2 pt-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assets/bnr1.jpg" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                  <img src="assets/bn2.jpg" class="d-block w-100" alt="..." />
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- games section -->
    <section class="all-games">
      <div class="container">
        <div class="row">
          <div class="col-md-6 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" src="assets/banner_sports.png" class="img-fluid" />
              <dl class="entrance-title">
                <dt>Sports</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-6 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" src="assets/banner_skyexchangeBlog.png" class="img-fluid" />
            </div>
          </div>
          <div class="col-md-6 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_virtualsports.png" />
              <dl class="entrance-title">
                <dt>Virtual Cricket</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_evo-half.png" />
              <dl class="entrance-title">
                <dt>Evo</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_ezugi-half.png" />
              <dl class="entrance-title">
                <dt>Ezugi</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>

          <div class="col-md-6 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_royalgaming.png" />
              <dl class="entrance-title">
                <dt>Royal Gaming</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_casino-half.png" />
              <dl class="entrance-title">
                <dt>Live Casino</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_blackjack-half.png" />
              <dl class="entrance-title">
                <dt>Black Jack</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>

          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_7up7down-half.png" />
              <dl class="entrance-title">
                <dt>7 Up Down</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_andarBaharVR-half.png" />
              <dl class="entrance-title">
                <dt>Andar Bahar VR</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_supernowa-half.png" />
              <dl class="entrance-title">
                <dt>Supernowa</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_7mojos-half.png" />
              <dl class="entrance-title">
                <dt>7 Mojos</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>

          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_horsebook-half.png" />
              <dl class="entrance-title">
                <dt>Hosrse Book</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_minesweeper-half.png" />
              <dl class="entrance-title">
                <dt>Minesweeper</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_skytrader-half.png" />
              <dl class="entrance-title">
                <dt>Sky Trader</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_teenPatti-half.png" />
              <dl class="entrance-title">
                <dt>Teen Patti</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>

          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_superOverVR-half.png" />
              <dl class="entrance-title">
                <dt>Super Over VR</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_TeenPatti2020-half.png" />
              <dl class="entrance-title">
                <dt>Teen Patti 20-20</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_NumberKing-half.png" />
              <dl class="entrance-title">
                <dt>Number King</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_BigSmall-half.png" />
              <dl class="entrance-title">
                <dt>Big Small</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>

          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_TeenPattiJoker-half.png" />
              <dl class="entrance-title">
                <dt>TeenPatti Joker</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_7up7down-half (1).png" />
              <dl class="entrance-title">
                <dt>7Up 7Down</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_DragonNTiger-half.png" />
              <dl class="entrance-title">
                <dt>Dragon & Tiger</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_autoRoulette-half.png" />
              <dl class="entrance-title">
                <dt>Auto Roulette</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>

          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_DusKaDumVR-half.png" />
              <dl class="entrance-title">
                <dt>Dus Ka Dum (Cards) VR</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_CallbreakQuick-half.png" />
              <dl class="entrance-title">
                <dt>Callbreak Quick</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_SicBo-Jili-half.png" />
              <dl class="entrance-title">
                <dt>Sic Bo</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_Baccarat-half.png" />
              <dl class="entrance-title">
                <dt>Baccarat</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>

          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_BonusDice-half.png" />
              <dl class="entrance-title">
                <dt>Bonus Dice</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_Heist-half.png" />
              <dl class="entrance-title">
                <dt>Heist</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_5CardPoker-half.png" />
              <dl class="entrance-title">
                <dt>5 Card Poker</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_ColorGame-half.png" />
              <dl class="entrance-title">
                <dt>Color Game</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>

          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_32card-half.png" />
              <dl class="entrance-title">
                <dt>32 Cards</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_rummy-half.png" />
              <dl class="entrance-title">
                <dt>Rummy</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_dragonTiger-half.png" />
              <dl class="entrance-title">
                <dt>Dragon & Tiger</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_worliMatkaVR-half.png" />
              <dl class="entrance-title">
                <dt>Worli Matka VR</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>

          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_betgames-half.png" />
              <dl class="entrance-title">
                <dt>Bet Games</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_andarBahar-half.png" />
              <dl class="entrance-title">
                <dt>Andar Bahar</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_sicbo-half.png" />
              <dl class="entrance-title">
                <dt>SicBo</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_sevenUpDown-half.png" />
              <dl class="entrance-title">
                <dt>7 UP 7 Down</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>

          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_CoinToss-half.png" />
              <dl class="entrance-title">
                <dt>Coin Toss</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_teenPatti-half (1).png" />
              <dl class="entrance-title">
                <dt>Teen Patti</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_cardMatka-half.png" />
              <dl class="entrance-title">
                <dt>Card Matka</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_numberMatka-half.png" />
              <dl class="entrance-title">
                <dt>Number Matka</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>

          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_binary-half.png" />
              <dl class="entrance-title">
                <dt>Binary</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
          <div class="col-md-3 p-2">
            <div class="game-box" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img alt="" class="img-fluid" src="assets/banner_bpoker-half.png" />
              <dl class="entrance-title">
                <dt>Bpoker</dt>
                <dd>Play Now</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php include 'footer.php'; ?>