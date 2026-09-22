<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Watermark removal configuration for the smart erasing template.
 *
 * @method string getWatermarkEraseMethod() Obtain <p>Watermark removal method. <strong>Auto removal:</strong> Model A automatically recognizes watermarks in the video and generates a new video after removal. Suitable for dynamic watermarks. When using auto removal, if you do not specify AutoAreas, auto removal will be performed on the full screen of the video; if AutoAreas is specified, auto removal will be performed on your specified areas instead. <strong>Specified area removal:</strong> For static watermarks with relatively fixed positions, it is recommended to directly specify the removal area. When you choose specified area removal, at least one specified area must be provided. - auto: auto removal - custom: specified area removal</p>
 * @method void setWatermarkEraseMethod(string $WatermarkEraseMethod) Set <p>Watermark removal method. <strong>Auto removal:</strong> Model A automatically recognizes watermarks in the video and generates a new video after removal. Suitable for dynamic watermarks. When using auto removal, if you do not specify AutoAreas, auto removal will be performed on the full screen of the video; if AutoAreas is specified, auto removal will be performed on your specified areas instead. <strong>Specified area removal:</strong> For static watermarks with relatively fixed positions, it is recommended to directly specify the removal area. When you choose specified area removal, at least one specified area must be provided. - auto: auto removal - custom: specified area removal</p>
 * @method string getWatermarkModel() Obtain <p>Watermark removal model. Basic Edition: provides average effects and high cost performance. It applies to animations or videos with clean backgrounds. Advanced Edition: provides better effectiveness and is suitable for realistic-style videos such as mini-dramas. - basic edition - advanced edition</p>
 * @method void setWatermarkModel(string $WatermarkModel) Set <p>Watermark removal model. Basic Edition: provides average effects and high cost performance. It applies to animations or videos with clean backgrounds. Advanced Edition: provides better effectiveness and is suitable for realistic-style videos such as mini-dramas. - basic edition - advanced edition</p>
 * @method array getAutoAreas() Obtain <p>Automatically erase custom regions. For selected regions, use the AI model to automatically detect and erase existing targets. Note: When the erase method is set to custom, this parameter will not take effect. Input [] for region cleanup. If not provided, the template region information remains unchanged.</p>
 * @method void setAutoAreas(array $AutoAreas) Set <p>Automatically erase custom regions. For selected regions, use the AI model to automatically detect and erase existing targets. Note: When the erase method is set to custom, this parameter will not take effect. Input [] for region cleanup. If not provided, the template region information remains unchanged.</p>
 * @method array getCustomAreas() Obtain <p>Designate the removal of custom regions. For specified regions, directly perform erasure without detection and recognition within a selected time range. Note: Import [] to clear regions. The template region information remains unchanged if not imported.</p>
 * @method void setCustomAreas(array $CustomAreas) Set <p>Designate the removal of custom regions. For specified regions, directly perform erasure without detection and recognition within a selected time range. Note: Import [] to clear regions. The template region information remains unchanged if not imported.</p>
 */
class MPSSmartEraseWatermarkConfig extends AbstractModel
{
    /**
     * @var string <p>Watermark removal method. <strong>Auto removal:</strong> Model A automatically recognizes watermarks in the video and generates a new video after removal. Suitable for dynamic watermarks. When using auto removal, if you do not specify AutoAreas, auto removal will be performed on the full screen of the video; if AutoAreas is specified, auto removal will be performed on your specified areas instead. <strong>Specified area removal:</strong> For static watermarks with relatively fixed positions, it is recommended to directly specify the removal area. When you choose specified area removal, at least one specified area must be provided. - auto: auto removal - custom: specified area removal</p>
     */
    public $WatermarkEraseMethod;

    /**
     * @var string <p>Watermark removal model. Basic Edition: provides average effects and high cost performance. It applies to animations or videos with clean backgrounds. Advanced Edition: provides better effectiveness and is suitable for realistic-style videos such as mini-dramas. - basic edition - advanced edition</p>
     */
    public $WatermarkModel;

    /**
     * @var array <p>Automatically erase custom regions. For selected regions, use the AI model to automatically detect and erase existing targets. Note: When the erase method is set to custom, this parameter will not take effect. Input [] for region cleanup. If not provided, the template region information remains unchanged.</p>
     */
    public $AutoAreas;

    /**
     * @var array <p>Designate the removal of custom regions. For specified regions, directly perform erasure without detection and recognition within a selected time range. Note: Import [] to clear regions. The template region information remains unchanged if not imported.</p>
     */
    public $CustomAreas;

    /**
     * @param string $WatermarkEraseMethod <p>Watermark removal method. <strong>Auto removal:</strong> Model A automatically recognizes watermarks in the video and generates a new video after removal. Suitable for dynamic watermarks. When using auto removal, if you do not specify AutoAreas, auto removal will be performed on the full screen of the video; if AutoAreas is specified, auto removal will be performed on your specified areas instead. <strong>Specified area removal:</strong> For static watermarks with relatively fixed positions, it is recommended to directly specify the removal area. When you choose specified area removal, at least one specified area must be provided. - auto: auto removal - custom: specified area removal</p>
     * @param string $WatermarkModel <p>Watermark removal model. Basic Edition: provides average effects and high cost performance. It applies to animations or videos with clean backgrounds. Advanced Edition: provides better effectiveness and is suitable for realistic-style videos such as mini-dramas. - basic edition - advanced edition</p>
     * @param array $AutoAreas <p>Automatically erase custom regions. For selected regions, use the AI model to automatically detect and erase existing targets. Note: When the erase method is set to custom, this parameter will not take effect. Input [] for region cleanup. If not provided, the template region information remains unchanged.</p>
     * @param array $CustomAreas <p>Designate the removal of custom regions. For specified regions, directly perform erasure without detection and recognition within a selected time range. Note: Import [] to clear regions. The template region information remains unchanged if not imported.</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("WatermarkEraseMethod",$param) and $param["WatermarkEraseMethod"] !== null) {
            $this->WatermarkEraseMethod = $param["WatermarkEraseMethod"];
        }

        if (array_key_exists("WatermarkModel",$param) and $param["WatermarkModel"] !== null) {
            $this->WatermarkModel = $param["WatermarkModel"];
        }

        if (array_key_exists("AutoAreas",$param) and $param["AutoAreas"] !== null) {
            $this->AutoAreas = [];
            foreach ($param["AutoAreas"] as $key => $value){
                $obj = new MPSEraseArea();
                $obj->deserialize($value);
                array_push($this->AutoAreas, $obj);
            }
        }

        if (array_key_exists("CustomAreas",$param) and $param["CustomAreas"] !== null) {
            $this->CustomAreas = [];
            foreach ($param["CustomAreas"] as $key => $value){
                $obj = new MPSEraseTimeArea();
                $obj->deserialize($value);
                array_push($this->CustomAreas, $obj);
            }
        }
    }
}
