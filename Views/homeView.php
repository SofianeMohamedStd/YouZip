<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3>Welcome</h3>
                <p>YouZip</p>
                <p>reliable file sending service<p>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">YouZip</h3>
                     <form method="POST" id="contactform" class="form-signin" enctype="multipart/form-data">
                        <div class="row register-form">
                          
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="mail_exp" class="form-control" placeholder="<?= $emptyExp ?>" /> 
                                    <?= $displayDivErrorSender ?>
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" name="mail_dest" class="form-control" placeholder="<?= $emptyDest ?>"  />
                                    <div class="rouge">
                                    <?= $displayDivErrorExp ?>
                                </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                                    <input class="form-control" type="file" id="zip"  name="zip[]" multiple/>
                                    <span class="max-file-size">2Mo Max</span>
                                    <?= $displayDivErrorV ?>
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="sujet" class="form-control" placeholder="Sujet" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="3"></textarea>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block form-control" type="submit" name="uploadform">Send</button>
                            </div>
                             <!--On affiche le résultat du traitement-->
                             <?=$displayDivError?>
                             
                             <!--On affiche le résultat du traitement-->
                        </div>
                     </form> 
                    </div>
                   
                </div>
            </div>
        </div>

    </div>
</body>
</html>



