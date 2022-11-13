ClassicEditor
      .create( document.querySelector('#content' ),{
        fontSize: {
            options: [
                9,
                11,
                13,
                'default',
                17,
                19,
                21, 
                23,
            ]
        },
        fontFamily: {
            options: [
                'default',
                'Ubuntu', 'Arial', 'sans-serif',
                'Ubuntu Mono', 'Courier New', 'Courier', 'monospace'
            ]
        },
        alignment: {
            options: [ 'left','center', 'right' ]
        },
          ckfinder: {
              uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
          },
          toolbar: ['imageUpload','fontFamily', '|', 'heading', 'fontSize','|', 'alignment', 'bold', 'italic', '|', 'undo', 'redo', 'ckfinder', ]
      } )
      .catch( function( error ) {
          console.error( error );
      } );

      ClassicEditor
      .create( document.querySelector('#content_en' ),{
        fontSize: {
            options: [
                9,
                11,
                13,
                'default',
                17,
                19,
                21, 
                23,
            ]
        },
        fontFamily: {
            options: [
                'default',
                'Ubuntu', 'Arial', 'sans-serif',
                'Ubuntu Mono', 'Courier New', 'Courier', 'monospace'
            ]
        },
        alignment: {
            options: [ 'left','center', 'right' ]
        },
          ckfinder: {
              uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
          },
          toolbar: ['imageUpload','fontFamily', '|', 'heading', 'fontSize','|', 'alignment', 'bold', 'italic', '|', 'undo', 'redo', 'ckfinder', ]
      } )
      .catch( function( error ) {
          console.error( error );
      } );

      ClassicEditor
      .create( document.querySelector('#content_ru' ),{
        fontSize: {
            options: [
                9,
                11,
                13,
                'default',
                17,
                19,
                21, 
                23,
            ]
        },
        fontFamily: {
            options: [
                'default',
                'Ubuntu', 'Arial', 'sans-serif',
                'Ubuntu Mono', 'Courier New', 'Courier', 'monospace'
            ]
        },
        alignment: {
            options: [ 'left','center', 'right' ]
        },
          ckfinder: {
              uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
          },
          toolbar: ['imageUpload','fontFamily', '|', 'heading', 'fontSize','|', 'alignment', 'bold', 'italic', '|', 'undo', 'redo', 'ckfinder', ]
      } )
      .catch( function( error ) {
          console.error( error );
      } );
