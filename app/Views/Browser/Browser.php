<?= $this->extend('layout/base') ?>
<?= $this->section('content') ?>
<!-- Query Builder -->
<div class="row queryContainer mb-2">
    <div class="col">
        <div class="row card-header mb-2">
            <h4 class="col-12 text-center">Query Builder</h4>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="row p-1">
                    <div class="col-md-12 col-sm-12 col-12 pt-1"> <label for="gender" class="outerlabel">Gender:</label> </div>
                    <div class="col-md-12 col-sm-12 col-12">
                        <span>
                            <label for="genmale">Male</label>
                            <input type="radio" class="rttradio" name="gender" id="genmale" value="genmale">
                        </span>
                        <span>
                            <label for="genfemale">Female</label>
                            <input type="radio" class="rttradio" name="gender" id="genfemale" value="genfemale">
                        </span>
                        <span>
                            <label for="genany">Any</label>
                            <input type="radio" class="rttradio" name="gender" id="genany" checked>
                        </span>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mb-2 p-2">
            <div class="col">
                <div class="row">
                    <div class="col-12">
                        <label for="regionList" class="outerlabel">Selected Regions:</label>
                    </div>
                    <div class="col-12">
                        <select type="text" class="form-control" name="regionList" id="regionList" multiple="multiple" aria-required="true">
                        </select>
                    </div>
                </div>
            
            </div>
        </div>
        <div class="row mb-2 p-2">
            <div class="col">
                <div class="row">
                    <div class="col-12">
                        <label for="genlist" class="outerlabel">Selected Genes:</label>
                    </div>
                    <div class="col-12">
                        <select type="text" class="form-control" name="genlist" id="genlist" multiple="multiple" aria-required="true">
                        </select>
                    </div>
                </div>
            
            </div>
        </div>
        <div class="row float-right p-1">
            <button class="btn btn-primary"> Build Query</button>
        </div>
    </div>
</div>
<!-- Browser -->
<div class="row">
    <div class="col">
        <div id="igv-app-container"></div>
    </div>
</div>
<?= $this->endSection() ?>