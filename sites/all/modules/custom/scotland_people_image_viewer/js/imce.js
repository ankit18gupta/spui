Drupal.behaviors.imce = {
  attach: function (context, settings) {
    $("#edit-selected-image", context).change(function(){
      $("#scotland-people-website-image-editor").submit();
    });
  }
};



function openFileBrowser() {
  window.open(Drupal.settings.basePath+'imce?app=myApp|url@edit-selected-image', '', 'width=760,height=560,resizable=1');
}
