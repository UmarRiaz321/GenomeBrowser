<?php

/**
 * @author Umar Riaz
 * Created at 01/07/2020
 * This is the master layout for Hdrmetada
 */
?>
<!DOCTYPE html>
<html lang="en" class="igv-app-html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv=“Pragma” content=”no-cache”>
    <meta http-equiv=“Expires” content=”-1″>
    <meta http-equiv=“CACHE-CONTROL” content=”NO-CACHE”>

    <title>Brookes Lab Genome Browser</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href='css/fontawesome/all.css'>

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.20/sl-1.3.1/datatables.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/file-load-widget.css">
    <link rel="stylesheet" href="css/igv-widgets-alert-dialog.css">

    <link rel="stylesheet" href="css/app.css">


    <!-- IGV JS-->
    <!--    <script src="https://cdn.jsdelivr.net/npm/igv@2.6.5/dist/igv.min.js"></script>-->
    <!-- <script src="https://igv.org/web/snapshot/dist/igv.js"></script> -->
    <!--    <script src="./node_modules/igv/dist/igv.js"></script>-->

    <!-- Dropbox Chooser API-->
    <script id="dropboxjs" src="https://www.dropbox.com/static/api/2/dropins.js" data-app-key="8glijwyao9fq8we"></script>

    <!-- Bootstrap 4 and Dependancies -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script>

    <!-- Datatables JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/sl-1.3.1/datatables.min.js"></script>

    <!-- Google Platform JS -->
    <script src="https://apis.google.com/js/platform.js"></script>

    <!-- select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css">


    <!-- Twitter -->
    <script src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/igvwebConfig.js"></script>
    <script type="module" src="js/browser.js"></script>
    <script type="module" src="js/tags.js"></script>
    <script type="module" src="js/querybuilder.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>

<body class="hold-transition d-flex flex-column h-100">

    <header>
        <?= $this->include('nav/nav') ?>
    </header>

    <main id="igv-main" role="main" class="p-2" >

        <!-- App container -->
        <section class="content">
        <?= $this->renderSection('content') ?>
        </section>

        <!-- Share URL Modal -->
        <div id="igv-app-share-modal" class="modal fade">

            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">
                        <div id="igv-app-share-input-modal-close-button" class="modal-title">Share</div>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">

                            <!-- copy url -->
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input id="igv-app-share-input" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <button id="igv-app-copy-link-button" type="button" class="btn btn-sm btn-default">
                                        COPY
                                    </button>
                                </div>
                            </div>

                            <!-- social buttons -->
                            <div class="igv-app-social-button-container">

                                <div id="igv-app-tweet-button-container">
                                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">TWEET</a>
                                </div>

                                <div>
                                    <a id="igv-app-email-button" href="mailto:?body=https://aidenlab.org/juicebox">EMAIL</a>
                                </div>

                                <div id="igv-app-embed-button">EMBED</div>

                                <div id="igv-app-qrcode-button">QR CODE</div>

                            </div>

                            <!-- qr code image -->
                            <div class="row justify-content-center">
                                <div id="igv-app-qrcode-image" class="col-4"></div>
                            </div>

                            <!-- embed widget -->
                            <div id="igv-app-embed-container" class="row">
                                <div class="col-sm-9 form-group">
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                                <div class="col-sm-3">
                                    <button type="button" class="btn btn-default">COPY</button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- SVG save -->
        <div id="igv-app-svg-save-modal" class="modal fade igv-app-file-save-modal">

            <div class="modal-dialog modal-lg">

                <div class="modal-content">

                    <div class="modal-header">

                        <div id="igv-app-svg-save-modal-label" class="modal-title">
                            <div>
                                Save SVG File
                            </div>
                        </div>

                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <input class="form-control" type="text" placeholder="igv-app.svg">

                        <div>
                            Enter filename and press save button.
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" id="saveSVG" class="btn btn-sm btn-outline-secondary">Save</button>
                    </div>

                </div>

            </div>

        </div>

        <!-- Help - About - Modal -->
        <div id="igv-app-help-about-modal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">About IGV-Web</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="igv-app-version"></div>
                        <div id="igv-igvjs-version"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>

</html>