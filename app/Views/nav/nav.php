<nav class="navbar navbar-expand-lg navbar-light  py-0 fixed-top justify-content-between">
        <a class="navbar-brand text-light" href="#">BrookesLab</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#igv-app-navbar-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="igv-app-navbar-navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto text-dark">

                <!-- Genome -->
                <li class="nav-item px-3">
                    <div class="dropdown">

                        <a id="igv-app-genome-dropdown-button" class="dropdown-toggle" href="#" data-toggle="dropdown">
                            Genome
                        </a>

                        <div id="igv-app-genome-dropdown-menu" class="dropdown-menu">

                            <div id="igv-app-genome-dropdown-divider" class="dropdown-divider"></div>

                            <!-- local file -->
                            <label class="dropdown-item btn btn-default btn-file">
                                <div class="igv-app-dropdown-item-cloud-storage">
                                    <div>
                                        Local File ...
                                    </div>
                                    <div>
                                        <input id="igv-app-dropdown-local-genome-file-input" type="file" name="file" multiple style="display: none;">
                                    </div>
                                </div>
                            </label>

                            <!-- Dropbox -->
                            <div class="dropdown-item">

                                <div id="igv-app-dropdown-dropbox-genome-file-button" class="igv-app-dropdown-item-cloud-storage">

                                    <div>Dropbox</div>
                                    <div><img id="igv-app-genome-dropbox-button-image" width="18" height="18"></div>
                                    <div>...</div>

                                </div>

                            </div>

                            <!-- Google Drive -->
                            <div class="dropdown-item">
                                <div id="igv-app-dropdown-google-drive-genome-file-button" class="igv-app-dropdown-item-cloud-storage">
                                    <div>Google Drive</div>
                                    <div><img id="igv-app-genome-google-drive-button-image" width="18" height="18"></div>
                                    <div>...</div>
                                </div>
                            </div>

                            <!-- URL -->
                            <button class="dropdown-item" type="button" data-toggle="modal" data-target="#igv-app-genome-from-url-modal">URL ...
                            </button>

                        </div>

                    </div>
                </li>

                <!-- Tracks -->
                <li class="nav-item px-3">
                    <div id="igv-app-track-dropdown" class="dropdown">

                        <a id="igv-track-dropdown-button" class="dropdown-toggle" href="#" data-toggle="dropdown">
                            Tracks
                        </a>

                        <div id="igv-app-track-dropdown-menu" class="dropdown-menu">

                            <!-- local file -->
                            <label class="dropdown-item btn btn-default btn-file">
                                <div class="igv-app-dropdown-item-cloud-storage">
                                    <div>
                                        Local File ...
                                    </div>
                                    <div>
                                        <input id="igv-app-dropdown-local-track-file-input" type="file" name="file" multiple style="display: none;">
                                    </div>
                                </div>
                            </label>

                            <!-- Dropbox -->
                            <div class="dropdown-item">
                                <div id="igv-app-dropdown-dropbox-track-file-button" class="igv-app-dropdown-item-cloud-storage">
                                    <div>Dropbox</div>
                                    <div><img id="igv-app-track-dropbox-button-image" width="18" height="18"></div>
                                    <div>...</div>
                                </div>
                            </div>

                            <!-- Google Drive -->
                            <div class="dropdown-item">
                                <div id="igv-app-dropdown-google-drive-track-file-button" class="igv-app-dropdown-item-cloud-storage">
                                    <div>Google Drive</div>
                                    <div><img id="igv-app-track-google-drive-button-image" width="18" height="18"></div>
                                    <div>...</div>
                                </div>
                            </div>

                            <!-- URL -->
                            <button class="dropdown-item" type="button" data-toggle="modal" data-target="#igv-app-track-from-url-modal">
                                URL ...
                            </button>

                            <div id="igv-app-annotations-section" class="dropdown-divider">
                            </div>

                        </div>
                    </div>
                </li>
                <!-- <-- Save SVG --> 
                <li class="nav-item px-3">
                    <div>
                        <a id="igv-app-save-svg-button" href="#" data-toggle="modal" data-target="#igv-app-svg-save-modal">
                            Save SVG
                        </a>
                    </div>
                </li>

                <!-- Help Menu -->
            </ul>
        </div>

    </nav>