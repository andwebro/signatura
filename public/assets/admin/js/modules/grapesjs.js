document.addEventListener("DOMContentLoaded", function() {
  var editor = grapesjs.init({
    container: '#gjs',
    plugins: [
      'gjs-blocks-basic',
      'grapesjs-preset-webpage',
      'grapesjs-plugin-forms'
    ],
    pluginsOpts: {
      'gjs-blocks-basic': {},
    },
  });

  
// Define the custom block
var layoutHeadlineBlock = {
  id: 'layout-headline',
  label:'Layout Headline',
  media:'<svg viewBox="0 0 24 24"><path d="M6 18h12v-2H6v2zm0-5h12v-2H6v2zm0-5h12V6H6v2zm-4 7h2v-2H2v2zm0-5h2V6H2v2zm0-5h2V1H2v2zm18 0h2V1h-2v2zm0 5h2V6h-2v2zm0 5h2v-2h-2v2z"/></svg>',
  content: '<h2>Text</h2>',
  category: {
    label: 'Layout',
    icon: '<svg viewBox="0 0 24 24"><path d="M6 18h12v-2H6v2zm0-5h12v-2H6v2zm0-5h12V6H6v2zm-4 7h2v-2H2v2zm0-5h2V6H2v2zm0-5h2V1H2v2zm18 0h2V1h-2v2zm0 5h2V6h-2v2zm0 5h2v-2h-2v2z"/></svg>',
  },
  attributes: {
    'data-section': 'layout'
  },
  contentParsed: function (el) {
    // Retrieve the content of the <h2> tag
    return {
      text: el.textContent.trim()
    };
  },
  render: function ({model, el}) {
    // Set the text of the <h2> tag to the value of the "text" attribute
    el.innerHTML = `<h2>${model.get('text')}</h2>`;
    return this;
  }
};

// Add the custom block to the block manager
editor.BlockManager.add(layoutHeadlineBlock);


  

});