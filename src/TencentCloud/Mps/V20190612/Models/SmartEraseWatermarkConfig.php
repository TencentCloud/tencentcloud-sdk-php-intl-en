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
 * Watermark removal configuration for the smart erasing template.
 *
 * @method string getWatermarkEraseMethod() Obtain Watermark removal method.
**Automatic erasing:** Video watermarks are automatically recognized using an AI model and are erased to generate a new video. It applies to dynamic watermarks.
When using automatic erasing, if AutoAreas is not specified, the full-screen video image area will be erased automatically. If AutoAreas is specified, the specified area will be erased automatically.
**Specified area erasure:** For static watermarks with a relatively fixed position, we recommend you directly specify the area to erase.
When you choose specified area erasure, import at least a specified region.

-. auto: automatic removal
- custom: specified area erasing.
 * @method void setWatermarkEraseMethod(string $WatermarkEraseMethod) Set Watermark removal method.
**Automatic erasing:** Video watermarks are automatically recognized using an AI model and are erased to generate a new video. It applies to dynamic watermarks.
When using automatic erasing, if AutoAreas is not specified, the full-screen video image area will be erased automatically. If AutoAreas is specified, the specified area will be erased automatically.
**Specified area erasure:** For static watermarks with a relatively fixed position, we recommend you directly specify the area to erase.
When you choose specified area erasure, import at least a specified region.

-. auto: automatic removal
- custom: specified area erasing.
 * @method string getWatermarkModel() Obtain Watermark removal model.
Basic Edition: Provides average effects and high cost performance. Suitable for animations or videos with clean backgrounds.
Advanced edition: Better effectiveness, suitable for reality style videos such as short drama.
-.
- advanced: Advanced Edition.
 * @method void setWatermarkModel(string $WatermarkModel) Set Watermark removal model.
Basic Edition: Provides average effects and high cost performance. Suitable for animations or videos with clean backgrounds.
Advanced edition: Better effectiveness, suitable for reality style videos such as short drama.
-.
- advanced: Advanced Edition.
 * @method array getAutoAreas() Obtain Custom area for automatic erasing.
For the specified area, AI models are used to automatically detect and erase the target objects.
Note: When the erasing method is set to custom, this parameter is invalid. When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
 * @method void setAutoAreas(array $AutoAreas) Set Custom area for automatic erasing.
For the specified area, AI models are used to automatically detect and erase the target objects.
Note: When the erasing method is set to custom, this parameter is invalid. When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
 * @method array getCustomAreas() Obtain Specify the custom region for erasing.
For the specified area, erase the target objects directly without detection and recognition within a selected time period.
Note: When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
 * @method void setCustomAreas(array $CustomAreas) Set Specify the custom region for erasing.
For the specified area, erase the target objects directly without detection and recognition within a selected time period.
Note: When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
 */
class SmartEraseWatermarkConfig extends AbstractModel
{
    /**
     * @var string Watermark removal method.
**Automatic erasing:** Video watermarks are automatically recognized using an AI model and are erased to generate a new video. It applies to dynamic watermarks.
When using automatic erasing, if AutoAreas is not specified, the full-screen video image area will be erased automatically. If AutoAreas is specified, the specified area will be erased automatically.
**Specified area erasure:** For static watermarks with a relatively fixed position, we recommend you directly specify the area to erase.
When you choose specified area erasure, import at least a specified region.

-. auto: automatic removal
- custom: specified area erasing.
     */
    public $WatermarkEraseMethod;

    /**
     * @var string Watermark removal model.
Basic Edition: Provides average effects and high cost performance. Suitable for animations or videos with clean backgrounds.
Advanced edition: Better effectiveness, suitable for reality style videos such as short drama.
-.
- advanced: Advanced Edition.
     */
    public $WatermarkModel;

    /**
     * @var array Custom area for automatic erasing.
For the specified area, AI models are used to automatically detect and erase the target objects.
Note: When the erasing method is set to custom, this parameter is invalid. When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
     */
    public $AutoAreas;

    /**
     * @var array Specify the custom region for erasing.
For the specified area, erase the target objects directly without detection and recognition within a selected time period.
Note: When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
     */
    public $CustomAreas;

    /**
     * @param string $WatermarkEraseMethod Watermark removal method.
**Automatic erasing:** Video watermarks are automatically recognized using an AI model and are erased to generate a new video. It applies to dynamic watermarks.
When using automatic erasing, if AutoAreas is not specified, the full-screen video image area will be erased automatically. If AutoAreas is specified, the specified area will be erased automatically.
**Specified area erasure:** For static watermarks with a relatively fixed position, we recommend you directly specify the area to erase.
When you choose specified area erasure, import at least a specified region.

-. auto: automatic removal
- custom: specified area erasing.
     * @param string $WatermarkModel Watermark removal model.
Basic Edition: Provides average effects and high cost performance. Suitable for animations or videos with clean backgrounds.
Advanced edition: Better effectiveness, suitable for reality style videos such as short drama.
-.
- advanced: Advanced Edition.
     * @param array $AutoAreas Custom area for automatic erasing.
For the specified area, AI models are used to automatically detect and erase the target objects.
Note: When the erasing method is set to custom, this parameter is invalid. When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
     * @param array $CustomAreas Specify the custom region for erasing.
For the specified area, erase the target objects directly without detection and recognition within a selected time period.
Note: When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
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
                $obj = new EraseArea();
                $obj->deserialize($value);
                array_push($this->AutoAreas, $obj);
            }
        }

        if (array_key_exists("CustomAreas",$param) and $param["CustomAreas"] !== null) {
            $this->CustomAreas = [];
            foreach ($param["CustomAreas"] as $key => $value){
                $obj = new EraseTimeArea();
                $obj->deserialize($value);
                array_push($this->CustomAreas, $obj);
            }
        }
    }
}
