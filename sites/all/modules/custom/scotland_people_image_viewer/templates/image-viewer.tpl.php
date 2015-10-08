<!-- Content -->
<div class="container">
    <div class="row">
        <div id="Filters" class="show col-sm-12">
			<div class="row filter-settings-row">
				<div class = "col-sm-4 col-xs-10">
					<h2><span class = "img-filter-icon"></span> Filters</h2>
				</div>
                <div class="col-xs-2 visible-xs text-right settings-icon-xs">
                    <a href="#" role = "button" class = "btn btn-default"><span class="glyphicon glyphicon-option-vertical filter-settings-icon" aria-hidden="true"></span></a>
                </div>
			</div>
            <div class="row filter-button-row">
                <div class="Filter col-sm-2">
                    <div class="FilterName">
                        <a title = "Brightness" class="btn btn-default" role="button" href="#" data-set="brightness"><span class = "filter-icon brightness-icon"></span><p>Brightness</p></a>
                    </div>
                </div>
				
                <div class="Filter col-sm-2">
                    <div class="FilterName">
                        <a title = "Contrast" class="btn btn-default" role="button" href="#" data-set="contrast"><span class = "filter-icon contrast-icon"></span><p>Contrast</p></a>
                    </div> 
                    
                </div>

                <div class="Filter col-sm-2">
                    <div class="FilterName">
                        <a title = "Saturation" class="btn btn-default" role="button" href="#" data-set="saturation"><span class = "filter-icon saturation-icon"></span><p>Saturation</p></a>
                    </div>
                    
                </div>
                <div class="Filter col-sm-2">
                    <div class="FilterName">
                        <a title = "Vibrance" class="btn btn-default" role="button" href="#" data-set="vibrance"><span class = "filter-icon vibrance-icon"></span><p>Vibrance</p></a>
                    </div>
                    
                </div>

                <div class="Filter col-sm-2">
                    <div class="FilterName">
						<a title = "Exposure" class="btn btn-default" role="button" href="#" data-set="exposure"><span class = "filter-icon exposure-icon"></span><p>Exposure</p></a>
                    </div>
                    
                </div>
                <div class="Filter col-sm-2">
                    <div class="FilterName">
                        <a title = "Sharpen" class="btn btn-default" role="button" href="#" data-set="sharpen"><span class = "filter-icon sharpen-icon"></span><p>Sharpen</p></a>
                    </div>
                    
                </div>
            </div>
			<div class="row input-row">
				<div class="FilterSetting" id="brightness">
					<h5 class = "text-center setting-label">Brightness</h5>
					<input
						type="range"
						min="-100"
						max="100"
						step="1"
						value="0"
						data-filter="brightness"
						>
					<span class="FilterValue">0</span>
				</div>
				<div class="FilterSetting" id="contrast">
					<h5 class = "text-center setting-label">Contrast</h5>
					<input
						type="range"
						min="-100"
						max="100"
						step="1"
						value="0"
						data-filter="contrast"
						>
					<span class="FilterValue">0</span>
                </div>
				<div class="FilterSetting" id="saturation">
					<h5 class = "text-center setting-label">Saturation</h5>
					<input
						type="range"
						min="-100"
						max="100"
						step="1"
						value="0"
						data-filter="saturation"
						>
					<span class="FilterValue">0</span>
                </div>
				<div class="FilterSetting" id="vibrance">
					<h5 class = "text-center setting-label">Vibrance</h5>
					<input
						type="range"
						min="-100"
						max="100"
						step="1"
						value="0"
						data-filter="vibrance"
						>
					<span class="FilterValue">0</span>
                </div>
				<div class="FilterSetting" id="exposure">
					<h5 class = "text-center setting-label">Exposure</h5>
					<input
						type="range"
						min="-100"
						max="100"
						step="1"
						value="0"
						data-filter="exposure"
						>
					<span class="FilterValue">0</span>
                </div>
				<div class="FilterSetting" id="sharpen">
					<h5 class = "text-center setting-label">Sharpen</h5>
					<input
						type="range"
						min="0"
						max="100"
						step="1"
						value="0"
						data-filter="sharpen"
						>
					<span class="FilterValue">0</span>
                </div>
			</div>
            <!-- <div class="row filter-button-row">
                <div class="Filter col-sm-2">
                    <div class="FilterName">
                        <button class="btn btn-default" data-set="sepia">Sepia</button>
                    </div>
                    <div class="FilterSetting" id="sepia">
                        <input
                            type="range"
                            min="0"
                            max="100"
                            step="1"
                            value="0"
                            data-filter="sepia"
                            >
                        <span class="FilterValue">0</span>
                    </div>
                </div>
                <div class="Filter col-sm-2">
                    <div class="FilterName">
                        <button class="btn btn-default" data-set="gamma">Gamma</button>
                    </div>
                    <div class="FilterSetting" id="gamma">
                        <input
                            type="range"
                            min="0"
                            max="10"
                            step="0.1"
                            value="0"
                            data-filter="gamma"
                            >
                        <span class="FilterValue">0</span>
                    </div>
                </div>
                <div class="Filter col-sm-2">
                    <div class="FilterName">
                        <button class="btn btn-default" data-set="noise">Noise</button>
                    </div>
                    <div class="FilterSetting" id="noise">
                        <input
                            type="range"
                            min="0"
                            max="100"
                            step="1"
                            value="0"
                            data-filter="noise"
                            >
                        <span class="FilterValue">0</span>
                    </div>
                </div>
                <div class="Filter col-sm-2">
                    <div class="FilterName">
                        <button class="btn btn-default" data-set="clip">Clip</button>
                    </div>
                    <div class="FilterSetting" id="clip">
                        <input
                            type="range"
                            min="0"
                            max="100"
                            step="1"
                            value="0"
                            data-filter="clip"
                            >
                        <span class="FilterValue">0</span>
                    </div>
                </div>
				<div class="Filter col-sm-2">
                    <div class="FilterName">
                        <button class="btn btn-default" data-set="hue">Hue</button>
                    </div>
                    <div class="FilterSetting" id="hue">
                        <input
                            type="range"
                            min="0"
                            max="100"
                            step="1"
                            value="0"
                            data-filter="hue"
                            >
                        <span class="FilterValue">0</span>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    
    <div class="row text-center">
		<div class="col-sm-12">
			<div id="holder">
				<img class="img-responsive"
					id="example"
					src="<?php echo $image_path; ?>"
					>
			</div>
		</div>
    </div>
	<div class="row text-center">
		<div class = "col-sm-12 img-btn">
			<a href = "#" title = "Crop" role = "button" id="crop" class="btn btn-default"><span class = "filter-icon crop-icon"></span><p>Crop</p></a>
			<a href = "#" title = "Back" role = "button" id="edit" class="hidden btn btn-default"><span class = "filter-icon back-icon"></span><p>Back</p></a>
			<a href = "#" title = "Save" role = "button" class="btn btn-default" id="saveIt" ><span class = "filter-icon save-icon"></span><p>Save</p></a>
		</div>
	</div>
</div>