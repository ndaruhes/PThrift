tinymce.init({
    selector: 'textarea.description',
    height: 200,
    setup: function (editor) {
        editor.on('change', function () {
            tinymce.triggerSave();
        });
    },
    browser_spellcheck: true
});

// Get the HTML contents of the currently active editor
tinymce.activeEditor.getContent();

// Get the raw contents of the currently active editor
tinymce.activeEditor.getContent({ format: 'raw' });

// Get content of a specific editor:
tinymce.get('textarea.description').getContent()