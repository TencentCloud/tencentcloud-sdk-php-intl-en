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
 * @method string getWatermarkEraseMethod() Obtain <p>Watermark removal method.<br> <strong>Auto removal:</strong> Automatically recognize watermarks in videos through Model A and generate new videos after removal. Suitable for dynamic watermarks. When using auto removal, if you do not specify AutoAreas, it will perform auto removal on the full-screen video; if you specify AutoAreas, it will change to auto removal on your designated regions.<br><strong>Specified area removal:</strong> For static watermarks with fixed positions, it is recommended to directly specify the removal area. When you choose specified area removal, import at least one designated region. - auto Auto removal - custom Specified area removal</p>
 * @method void setWatermarkEraseMethod(string $WatermarkEraseMethod) Set <p>Watermark removal method.<br> <strong>Auto removal:</strong> Automatically recognize watermarks in videos through Model A and generate new videos after removal. Suitable for dynamic watermarks. When using auto removal, if you do not specify AutoAreas, it will perform auto removal on the full-screen video; if you specify AutoAreas, it will change to auto removal on your designated regions.<br><strong>Specified area removal:</strong> For static watermarks with fixed positions, it is recommended to directly specify the removal area. When you choose specified area removal, import at least one designated region. - auto Auto removal - custom Specified area removal</p>
 * @method string getWatermarkModel() Obtain <p>Watermark removal model. basic Edition: provides average effects and high cost performance. It applies to animations or videos with clean backgrounds. advanced Edition: offers better effectiveness and is suitable for mini-dramas or reality-style videos.</p><ul><li>basic Edition</li><li>advanced Edition</li></ul>
 * @method void setWatermarkModel(string $WatermarkModel) Set <p>Watermark removal model. basic Edition: provides average effects and high cost performance. It applies to animations or videos with clean backgrounds. advanced Edition: offers better effectiveness and is suitable for mini-dramas or reality-style videos.</p><ul><li>basic Edition</li><li>advanced Edition</li></ul>
 * @method array getAutoAreas() Obtain <p>Automatically erase custom regions. For selected regions, use the AI model to automatically detect and erase existing targets. Note: When the erase method is set to custom, this parameter will not take effect. To clear regions, input []. If not provided, the template region information remains unchanged.</p>
 * @method void setAutoAreas(array $AutoAreas) Set <p>Automatically erase custom regions. For selected regions, use the AI model to automatically detect and erase existing targets. Note: When the erase method is set to custom, this parameter will not take effect. To clear regions, input []. If not provided, the template region information remains unchanged.</p>
 * @method array getCustomAreas() Obtain <p>Specify the removal of custom regions. For specified regions, directly perform erasure without detection and recognition within a selected time range. Note: Import [] to clear regions. The template region information remains unchanged if not imported.</p>
 * @method void setCustomAreas(array $CustomAreas) Set <p>Specify the removal of custom regions. For specified regions, directly perform erasure without detection and recognition within a selected time range. Note: Import [] to clear regions. The template region information remains unchanged if not imported.</p>
 */
class MPSUpdateSmartEraseWatermarkConfig extends AbstractModel
{
    /**
     * @var string <p>Watermark removal method.<br> <strong>Auto removal:</strong> Automatically recognize watermarks in videos through Model A and generate new videos after removal. Suitable for dynamic watermarks. When using auto removal, if you do not specify AutoAreas, it will perform auto removal on the full-screen video; if you specify AutoAreas, it will change to auto removal on your designated regions.<br><strong>Specified area removal:</strong> For static watermarks with fixed positions, it is recommended to directly specify the removal area. When you choose specified area removal, import at least one designated region. - auto Auto removal - custom Specified area removal</p>
     */
    public $WatermarkEraseMethod;

    /**
     * @var string <p>Watermark removal model. basic Edition: provides average effects and high cost performance. It applies to animations or videos with clean backgrounds. advanced Edition: offers better effectiveness and is suitable for mini-dramas or reality-style videos.</p><ul><li>basic Edition</li><li>advanced Edition</li></ul>
     */
    public $WatermarkModel;

    /**
     * @var array <p>Automatically erase custom regions. For selected regions, use the AI model to automatically detect and erase existing targets. Note: When the erase method is set to custom, this parameter will not take effect. To clear regions, input []. If not provided, the template region information remains unchanged.</p>
     */
    public $AutoAreas;

    /**
     * @var array <p>Specify the removal of custom regions. For specified regions, directly perform erasure without detection and recognition within a selected time range. Note: Import [] to clear regions. The template region information remains unchanged if not imported.</p>
     */
    public $CustomAreas;

    /**
     * @param string $WatermarkEraseMethod <p>Watermark removal method.<br> <strong>Auto removal:</strong> Automatically recognize watermarks in videos through Model A and generate new videos after removal. Suitable for dynamic watermarks. When using auto removal, if you do not specify AutoAreas, it will perform auto removal on the full-screen video; if you specify AutoAreas, it will change to auto removal on your designated regions.<br><strong>Specified area removal:</strong> For static watermarks with fixed positions, it is recommended to directly specify the removal area. When you choose specified area removal, import at least one designated region. - auto Auto removal - custom Specified area removal</p>
     * @param string $WatermarkModel <p>Watermark removal model. basic Edition: provides average effects and high cost performance. It applies to animations or videos with clean backgrounds. advanced Edition: offers better effectiveness and is suitable for mini-dramas or reality-style videos.</p><ul><li>basic Edition</li><li>advanced Edition</li></ul>
     * @param array $AutoAreas <p>Automatically erase custom regions. For selected regions, use the AI model to automatically detect and erase existing targets. Note: When the erase method is set to custom, this parameter will not take effect. To clear regions, input []. If not provided, the template region information remains unchanged.</p>
     * @param array $CustomAreas <p>Specify the removal of custom regions. For specified regions, directly perform erasure without detection and recognition within a selected time range. Note: Import [] to clear regions. The template region information remains unchanged if not imported.</p>
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
