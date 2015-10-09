Drupal.behaviors.imageViewer = {
    attach: function(context, settings) {
        var $ = jQuery.noConflict();
        // Generated by CoffeeScript 1.6.3
        (function() {
            var busy, caman, changed, filters, presetBusy, presetCaman, render, renderPreset, cropSection, renderCanvas, renderCrop, dkrm, saveIt,
                __hasProp = {}.hasOwnProperty;
            var image = new Image();
            caman = null;
            dkrm = null;

            // presetCaman = null;

            filters = {};

            busy = false;

            changed = false;

            render = _.throttle(function() {
                var filter, value;
                if (busy) {
                    changed = true;
                    return;
                } else {
                    changed = false;
                }
                busy = true;
                caman.revert(false);
                for (filter in filters) {
                    if (!__hasProp.call(filters, filter)) continue;
                    value = filters[filter];
                    value = parseFloat(value, 10);
                    if (value === 0) {
                        continue;
                    }
                    caman[filter](value);
                }
                return caman.render(function() {
                    busy = false;
                    if (changed) {
                        return render();
                    }
                });
            }, 300);

            cropSection = function() {
                // console.log(caman.canvas.toDataURL());

                image.id = "example"
                    // image.src = "/images/example2_600.jpg"
                image.src = caman.canvas.toDataURL();
                $('#holder').html(image);
                $("#Filters").addClass("hidden");
                renderCrop();
            }


            renderCanvas = function() {
                if (!($("#holder img").length > 0)) {
                    return;
                }
                caman = null;
                caman = Caman('#holder img');
                // presetCaman = Caman('#preset-example');
                $('.FilterSetting input').each(function() {
                    var filter;
                    filter = $(this).data('filter');
                    return filters[filter] = $(this).val();
                });
                $('#Filters').on('change', '.FilterSetting input', function() {
                    var filter, value;
                    filter = $(this).data('filter');
                    value = $(this).val();
                    filters[filter] = value;
                    $(this).find('~ .FilterValue').html(value);
                    return render();
                });
                // return $('#PresetFilters').on('click', 'a', function() {
                //   return renderPreset($(this).data('preset'));
                // });

            }


            renderCrop = function() {
                dkrm = null;
                dkrm = new Darkroom('#example', {
                    // Size options
                    minWidth: 100,
                    minHeight: 100,
                    maxWidth: 600,
                    maxHeight: 500,
                    ratio: 4 / 3,
                    backgroundColor: '#000',
                    // rotate: 1,

                    // Plugins options
                    plugins: {
                        //save: false,
                        crop: {
                            quickCropKey: 67, //key "c"
                            //minHeight: 50,
                            //minWidth: 50,
                            //ratio: 4/3
                        }
                    },

                    // Post initialize script
                    initialize: function() {
                        var cropPlugin = this.plugins['crop'];
                        // cropPlugin.selectZone(170, 25, 300, 300);
                        cropPlugin.requireFocus();
                        bindEvent();
                    }
                });
                // window.crop = dkrm;
                // var $save = $('xlink:href="#save"');
                // $save.on("click",function(e){

                // });
                var bindEvent = function() {
                    $('.darkroom-toolbar .darkroom-button-group:last-child button').on('click', function(e) {
                        $("#edit").toggleClass("hidden");
                        // console.log("before");
                        setTimeout(function() {
                            saveIt($('#holder img').attr('src'));
                        }, 1000);
                        // console.log("after");
                        // saveIt( $('#holder img').attr('src') );
                    });
                }

            }


            $(document).ready(function() {
                renderCanvas();
                var $saveb = $("#saveIt");
                $("#crop").on("click", function() {
                    $(this).toggleClass("hidden");
                    //$("#edit").toggleClass("hidden");
                    $saveb.toggleClass("hidden");
                    cropSection();
                })
                $("#edit").on("click", function() {
                    $(this).toggleClass("hidden");
                    $("#crop").toggleClass("hidden");
                    $saveb.toggleClass("hidden");
                    $("#Filters").removeClass("hidden");
                    $('.FilterSetting input').each(function() {
                        $(this).val(0).trigger('change');
                        // var filter;
                        // filter = $(this).data('filter');
                        // return filters[filter] = $(this).val();
                    });
                    renderCanvas();
                })

                // $("#holder").on("DOMSubtreeModified", function() {
                //   var editButton =$("#edit");
                //   console.log($(this).find('img').length) ;
                //   ($(this).find('img').length)? editButton.removeClass('hidden') : editButton.addClass('hidden');


                // });

                $saveb.on("click", function(e) {
                    saveIt(caman.canvas.toDataURL());
                })

                saveIt = function(imageData) {
                    console.log(imageData);
                    $.ajax({
                        type: "POST",
                        url: Drupal.settings.basePath + "image_upload",
                        data: {
                            imagedata: imageData
                        }
                    }).done(function(data) {
                        alert('Image Saved');
                        // If you want the file to be visible in the browser
                        // - please modify the callback in javascript. All you
                        // need is to return the url to the file, you just saved
                        // and than put the image in your browser.
                    });

                };

            });

        }).call(this);
		$("#edit, #saveIt").on("click", function(e1) {
			e1.preventDefault();
			$(".FilterSetting").hide();
		});
		$(".settings-icon-xs a").on("click", function(e2) {
			e2.preventDefault();
			$("#holder").toggleClass("pad-img");
			$(".filter-button-row").slideToggle(100);
			if($(".filter-button-row").is(":visible"))
				$(".input-row .FilterSetting").hide();
		});
        $(".FilterName a").on("click", function(e3) {
			e3.preventDefault();
			$(this).parent().parent().siblings().find("a").removeClass("active");
			$(this).toggleClass("active");
			$(this).toggleClass("rotate");
            var $buttonSet = $(this).attr('data-set');
			$('.input-row .FilterSetting').each(function(i, obj) {
				if($(this).attr('id') == $buttonSet) {
					$(this).slideToggle(100);
					$(this).siblings().hide();
				}
			});
			
			
			
			

            /* if ($buttonSet == $buttonFilterSetting) {
                //$filter.find('.FilterSetting').show();
                //$filter.siblings('.Filter').find('.FilterSetting').hide();
                //$filter.parent().siblings('.filter-button-row').find('.Filter .FilterSetting').hide();
            } */
        });


    }
};
