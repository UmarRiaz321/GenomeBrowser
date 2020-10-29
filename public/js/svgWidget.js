function createSVGWidget ({ browser, $saveModal }) {

  const input_default_value = 'igv-app.svg';

  let $input = $saveModal.find('input');

  $saveModal.on('show.bs.modal', (e) => {
      $input.val(input_default_value);
  });

  $saveModal.on('hidden.bs.modal', (e) => {
      $input.val(input_default_value);
  });

  let okHandler = () => {

      let fn = $input.val();
      const extensions = new Set(['svg']);

      if (undefined === fn || '' === fn) {

          fn = $input.attr('placeholder');
      } else if (false === extensions.has( igv.getExtension({ url: fn } ) )) {

          fn = fn + '.svg';
      }

      // dismiss modal
      $saveModal.modal('hide');
      browser.saveSVGtoFile({ filename: fn });
  };

  // ok - button
  let $ok = $saveModal.find('#saveSVG');

  $ok.on('click', okHandler);

  $input.on('keyup', (e) => {
      if (13 === e.keyCode) {
          okHandler();
      }
  });

  // upper dismiss - x - button
  let $dismiss = $saveModal.find('.modal-header button:nth-child(1)');
  $dismiss.on('click', function () {
      $saveModal.modal('hide');
  });

  // lower dismiss - close - button
  $dismiss = $saveModal.find('.modal-footer button:nth-child(1)');
  $dismiss.on('click', function () {
      $saveModal.modal('hide');
  });

}

export { createSVGWidget }