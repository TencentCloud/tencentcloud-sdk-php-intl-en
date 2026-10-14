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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Icon erasing configuration.
 *
 * @method string getSwitch() Obtain <p>Capability configuration switch. Available values: </p><li>ON: Enable;</li><li>OFF: Disable.</li>Default value: ON.
 * @method void setSwitch(string $Switch) Set <p>Capability configuration switch. Available values: </p><li>ON: Enable;</li><li>OFF: Disable.</li>Default value: ON.
 * @method array getImageAreaBoxes() Obtain <p>Multiple box selection regions to erase, with up to 16 regions enabled.<br>Note: This field may return null, indicating that no valid value can be obtained.</p>
 * @method void setImageAreaBoxes(array $ImageAreaBoxes) Set <p>Multiple box selection regions to erase, with up to 16 regions enabled.<br>Note: This field may return null, indicating that no valid value can be obtained.</p>
 * @method string getEraseStrength() Obtain <p>Watermark removal capacity gear selection. Available values:</p><p>Enumeration values:</p><ul><li>low: quick removal gear</li><li>mid: balanced removal effect and speed gear</li><li>high: advanced removal effect gear</li></ul><p>Note: Select the corresponding removal gear based on the complexity of the removal scenario.</p>
 * @method void setEraseStrength(string $EraseStrength) Set <p>Watermark removal capacity gear selection. Available values:</p><p>Enumeration values:</p><ul><li>low: quick removal gear</li><li>mid: balanced removal effect and speed gear</li><li>high: advanced removal effect gear</li></ul><p>Note: Select the corresponding removal gear based on the complexity of the removal scenario.</p>
 * @method string getWatermarkType() Obtain <p>When erasing image watermarks, select a specific watermark type. Available values:</p><p>Enumeration values:</p><ul><li>corner_watermark: Erase a normal fixed-location watermark</li><li>tiled_watermark: Erase a tile watermark across the entire image</li><li>auto_detect_type: Automatically identify the watermark type and erase it</li><li>selected_watermark: Skip automatic removal and perform watermark removal at a specified position</li></ul>
 * @method void setWatermarkType(string $WatermarkType) Set <p>When erasing image watermarks, select a specific watermark type. Available values:</p><p>Enumeration values:</p><ul><li>corner_watermark: Erase a normal fixed-location watermark</li><li>tiled_watermark: Erase a tile watermark across the entire image</li><li>auto_detect_type: Automatically identify the watermark type and erase it</li><li>selected_watermark: Skip automatic removal and perform watermark removal at a specified position</li></ul>
 */
class ImageEraseLogoConfig extends AbstractModel
{
    /**
     * @var string <p>Capability configuration switch. Available values: </p><li>ON: Enable;</li><li>OFF: Disable.</li>Default value: ON.
     */
    public $Switch;

    /**
     * @var array <p>Multiple box selection regions to erase, with up to 16 regions enabled.<br>Note: This field may return null, indicating that no valid value can be obtained.</p>
     */
    public $ImageAreaBoxes;

    /**
     * @var string <p>Watermark removal capacity gear selection. Available values:</p><p>Enumeration values:</p><ul><li>low: quick removal gear</li><li>mid: balanced removal effect and speed gear</li><li>high: advanced removal effect gear</li></ul><p>Note: Select the corresponding removal gear based on the complexity of the removal scenario.</p>
     */
    public $EraseStrength;

    /**
     * @var string <p>When erasing image watermarks, select a specific watermark type. Available values:</p><p>Enumeration values:</p><ul><li>corner_watermark: Erase a normal fixed-location watermark</li><li>tiled_watermark: Erase a tile watermark across the entire image</li><li>auto_detect_type: Automatically identify the watermark type and erase it</li><li>selected_watermark: Skip automatic removal and perform watermark removal at a specified position</li></ul>
     */
    public $WatermarkType;

    /**
     * @param string $Switch <p>Capability configuration switch. Available values: </p><li>ON: Enable;</li><li>OFF: Disable.</li>Default value: ON.
     * @param array $ImageAreaBoxes <p>Multiple box selection regions to erase, with up to 16 regions enabled.<br>Note: This field may return null, indicating that no valid value can be obtained.</p>
     * @param string $EraseStrength <p>Watermark removal capacity gear selection. Available values:</p><p>Enumeration values:</p><ul><li>low: quick removal gear</li><li>mid: balanced removal effect and speed gear</li><li>high: advanced removal effect gear</li></ul><p>Note: Select the corresponding removal gear based on the complexity of the removal scenario.</p>
     * @param string $WatermarkType <p>When erasing image watermarks, select a specific watermark type. Available values:</p><p>Enumeration values:</p><ul><li>corner_watermark: Erase a normal fixed-location watermark</li><li>tiled_watermark: Erase a tile watermark across the entire image</li><li>auto_detect_type: Automatically identify the watermark type and erase it</li><li>selected_watermark: Skip automatic removal and perform watermark removal at a specified position</li></ul>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("ImageAreaBoxes",$param) and $param["ImageAreaBoxes"] !== null) {
            $this->ImageAreaBoxes = [];
            foreach ($param["ImageAreaBoxes"] as $key => $value){
                $obj = new ImageAreaBoxInfo();
                $obj->deserialize($value);
                array_push($this->ImageAreaBoxes, $obj);
            }
        }

        if (array_key_exists("EraseStrength",$param) and $param["EraseStrength"] !== null) {
            $this->EraseStrength = $param["EraseStrength"];
        }

        if (array_key_exists("WatermarkType",$param) and $param["WatermarkType"] !== null) {
            $this->WatermarkType = $param["WatermarkType"];
        }
    }
}
