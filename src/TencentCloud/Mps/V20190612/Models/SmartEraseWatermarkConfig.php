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
 * smart erasure template watermark configuration.
 *
 * @method string getWatermarkEraseMethod() Obtain Specifies the watermark removal method.
**Auto-Removal:** automatically identifies watermarks in the video using model a and generates a new video after removal. suitable for dynamic watermarks.
When using automated removal, if you do not specify AutoAreas, the full-screen video will be erased automatically. if AutoAreas is specified, it will change to erase the designated areas.
**Specified area erasure:** for static watermarks with fixed locations, we recommend you directly specify the erasure area.
When you choose specified area erasure, import at least one specified region.

-Automated removal.
-Specifies the custom specified area erasure.
 * @method void setWatermarkEraseMethod(string $WatermarkEraseMethod) Set Specifies the watermark removal method.
**Auto-Removal:** automatically identifies watermarks in the video using model a and generates a new video after removal. suitable for dynamic watermarks.
When using automated removal, if you do not specify AutoAreas, the full-screen video will be erased automatically. if AutoAreas is specified, it will change to erase the designated areas.
**Specified area erasure:** for static watermarks with fixed locations, we recommend you directly specify the erasure area.
When you choose specified area erasure, import at least one specified region.

-Automated removal.
-Specifies the custom specified area erasure.
 * @method string getWatermarkModel() Obtain Specifies the watermark removal model.
Basic version: average effect, cost-effective, suitable for videos with clean backgrounds or animations.
Advanced edition: better effectiveness, suitable for mini-drama and reality style video.
**Supported values**:
- basic
- advanced
 * @method void setWatermarkModel(string $WatermarkModel) Set Specifies the watermark removal model.
Basic version: average effect, cost-effective, suitable for videos with clean backgrounds or animations.
Advanced edition: better effectiveness, suitable for mini-drama and reality style video.
**Supported values**:
- basic
- advanced
 * @method array getAutoAreas() Obtain Specifies automatic removal of a custom region.
Specifies the use of an AI model to automatically detect and erase existing targets in the specified region.
Note that this parameter will not take effect when the removal method is custom.
 * @method void setAutoAreas(array $AutoAreas) Set Specifies automatic removal of a custom region.
Specifies the use of an AI model to automatically detect and erase existing targets in the specified region.
Note that this parameter will not take effect when the removal method is custom.
 * @method array getCustomAreas() Obtain Specifies erasure of a custom region.
Detects and directly performs removal within a specified time range for the selected region.
 * @method void setCustomAreas(array $CustomAreas) Set Specifies erasure of a custom region.
Detects and directly performs removal within a specified time range for the selected region.
 */
class SmartEraseWatermarkConfig extends AbstractModel
{
    /**
     * @var string Specifies the watermark removal method.
**Auto-Removal:** automatically identifies watermarks in the video using model a and generates a new video after removal. suitable for dynamic watermarks.
When using automated removal, if you do not specify AutoAreas, the full-screen video will be erased automatically. if AutoAreas is specified, it will change to erase the designated areas.
**Specified area erasure:** for static watermarks with fixed locations, we recommend you directly specify the erasure area.
When you choose specified area erasure, import at least one specified region.

-Automated removal.
-Specifies the custom specified area erasure.
     */
    public $WatermarkEraseMethod;

    /**
     * @var string Specifies the watermark removal model.
Basic version: average effect, cost-effective, suitable for videos with clean backgrounds or animations.
Advanced edition: better effectiveness, suitable for mini-drama and reality style video.
**Supported values**:
- basic
- advanced
     */
    public $WatermarkModel;

    /**
     * @var array Specifies automatic removal of a custom region.
Specifies the use of an AI model to automatically detect and erase existing targets in the specified region.
Note that this parameter will not take effect when the removal method is custom.
     */
    public $AutoAreas;

    /**
     * @var array Specifies erasure of a custom region.
Detects and directly performs removal within a specified time range for the selected region.
     */
    public $CustomAreas;

    /**
     * @param string $WatermarkEraseMethod Specifies the watermark removal method.
**Auto-Removal:** automatically identifies watermarks in the video using model a and generates a new video after removal. suitable for dynamic watermarks.
When using automated removal, if you do not specify AutoAreas, the full-screen video will be erased automatically. if AutoAreas is specified, it will change to erase the designated areas.
**Specified area erasure:** for static watermarks with fixed locations, we recommend you directly specify the erasure area.
When you choose specified area erasure, import at least one specified region.

-Automated removal.
-Specifies the custom specified area erasure.
     * @param string $WatermarkModel Specifies the watermark removal model.
Basic version: average effect, cost-effective, suitable for videos with clean backgrounds or animations.
Advanced edition: better effectiveness, suitable for mini-drama and reality style video.
**Supported values**:
- basic
- advanced
     * @param array $AutoAreas Specifies automatic removal of a custom region.
Specifies the use of an AI model to automatically detect and erase existing targets in the specified region.
Note that this parameter will not take effect when the removal method is custom.
     * @param array $CustomAreas Specifies erasure of a custom region.
Detects and directly performs removal within a specified time range for the selected region.
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
