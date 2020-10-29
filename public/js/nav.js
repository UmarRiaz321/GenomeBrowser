import {NavbarManager} from './navmanger.js';
import {ChromosomeSelectWidget,ZoomWidget} from './navChild.js';
import igv from '/assets/node_modules/igv/dist/igv.esm.js';
function createStandardControls(browser) {
    var $div, $igv_nav_bar_left_container, $igv_nav_bar_right_container, $genomic_location, $locus_size_group, $toggle_button_container, logoDiv, logoSvg, $controls, $navigation, $searchContainer;
    $controls = $('<div>', {
      class: 'igvControlDiv'
    });
    $navigation = $('<div>', {
      class: 'igv-navbar'
    });
    $controls.append($navigation);
    browser.$navigation = $navigation;
    browser.navbarManager = new NavbarManager(browser);
    $igv_nav_bar_left_container = $('<div>', {
      class: 'igv-nav-bar-left-container'
    });
    $navigation.append($igv_nav_bar_left_container); // IGV logo

    logoDiv = $('<div>', {
      class: 'igv-logo'
    });
    //logoSvg = logo();
    // logoSvg.css("width", "34px");
    // logoSvg.css("height", "32px");
    // logoDiv.append(logoSvg);
    // $igv_nav_bar_left_container.append(logoDiv); // current genome

    browser.$current_genome = $('<div>', {
      class: 'igv-current-genome'
    });
    $igv_nav_bar_left_container.append(browser.$current_genome);
    browser.$current_genome.text(''); //

    $genomic_location = $('<div>', {
      class: 'igv-nav-bar-genomic-location'
    });
    $igv_nav_bar_left_container.append($genomic_location); // chromosome select widget

    browser.chromosomeSelectWidget =  ChromosomeSelectWidget(browser, $genomic_location);

    if (undefined === config.showChromosomeWidget) {
      config.showChromosomeWidget = true; // Default to true
    }

    if (true === config.showChromosomeWidget) {
      browser.chromosomeSelectWidget.$container.show();
    } else {
      browser.chromosomeSelectWidget.$container.hide();
    }

    $locus_size_group = $('<div>', {
      class: 'igv-locus-size-group'
    });
    $genomic_location.append($locus_size_group); // locus goto widget container

    $searchContainer = $('<div>', {
      class: 'igv-search-container'
    });
    $locus_size_group.append($searchContainer); // locus goto input

    browser.$searchInput = $('<input type="text" placeholder="Locus Search">');
    $searchContainer.append(browser.$searchInput);
    browser.$searchInput.change(function (e) {
      browser.search($(this).val()).catch(function (error) {
        browser.presentAlert(error);
      });
    }); // search icon container

    $div = $('<div>');
    $searchContainer.append($div); // search icon svg

    $div.append(createIcon("search"));
    $div.click(function () {
      browser.search(browser.$searchInput.val());
    });
     // $searchContainer.append($faSearch);
    // TODO: Currently not used
    // search results presented in table
    // browser.$searchResults = $('<div class="igv-search-results">');
    // $searchContainer.append(browser.$searchResults.get(0));
    // browser.$searchResultsTable = $('<table>');
    // browser.$searchResults.append(browser.$searchResultsTable.get(0));
    // browser.$searchResults.hide();
    // window size display

    browser.windowSizePanel = new WindowSizePanel($locus_size_group, browser); // cursor guide | center guide | track labels

    $igv_nav_bar_right_container = $('<div class="igv-nav-bar-right-container">');
    $navigation.append($igv_nav_bar_right_container);
    $toggle_button_container = $('<div class="igv-nav-bar-toggle-button-container">');
    $igv_nav_bar_right_container.append($toggle_button_container);
    browser.$toggle_button_container = $toggle_button_container; // cursor guide
    // browser.cursorGuide = new CursorGuide($(browser.trackContainerDiv), $toggle_button_container, config, browser);

    browser.cursorGuide = new CursorGuide(browser.$content, $toggle_button_container, config, browser); // center guide

    browser.centerGuide = new CenterGuide($(browser.trackContainerDiv), $toggle_button_container, config, browser); // toggle track labels

    if (true === config.showTrackLabelButton) {
      browser.trackLabelControl = new TrackLabelControl($toggle_button_container, browser);
    } // SVG save button


    if (config.showSVGButton) {
      browser.svgSaveControl = new SVGSaveControl($toggle_button_container, browser);
    } // zoom widget


    browser.zoomWidget = new ZoomWidget(browser, $igv_nav_bar_right_container);

    if (false === config.showNavigation) {
      browser.$navigation.show();
    }

    return $controls.get(0);
  }

  export { createStandardControls }