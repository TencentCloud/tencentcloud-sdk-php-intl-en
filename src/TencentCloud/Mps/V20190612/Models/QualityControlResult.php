<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * The issues detected by quality control.
 *
 * @method string getType() Obtain The issue type. Valid values:
`Jitter`
`Blur`
`LowLighting`
`HighLighting` (overexposure)
`CrashScreen` (video corruption)
`BlackWhiteEdge`
`SolidColorScreen` (blank screen)
`Noise`
`Mosaic` (pixelation)
`QRCode`
`AppletCode` (Weixin Mini Program code)
`BarCode`
`LowVoice`
`HighVoice`
`NoVoice`
`LowEvaluation` (low no-reference video quality score)
 * @method void setType(string $Type) Set The issue type. Valid values:
`Jitter`
`Blur`
`LowLighting`
`HighLighting` (overexposure)
`CrashScreen` (video corruption)
`BlackWhiteEdge`
`SolidColorScreen` (blank screen)
`Noise`
`Mosaic` (pixelation)
`QRCode`
`AppletCode` (Weixin Mini Program code)
`BarCode`
`LowVoice`
`HighVoice`
`NoVoice`
`LowEvaluation` (low no-reference video quality score)
 * @method array getQualityControlItems() Obtain The information of a checked segment in quality control.
 * @method void setQualityControlItems(array $QualityControlItems) Set The information of a checked segment in quality control.
 */
class QualityControlResult extends AbstractModel
{
    /**
     * @var string The issue type. Valid values:
`Jitter`
`Blur`
`LowLighting`
`HighLighting` (overexposure)
`CrashScreen` (video corruption)
`BlackWhiteEdge`
`SolidColorScreen` (blank screen)
`Noise`
`Mosaic` (pixelation)
`QRCode`
`AppletCode` (Weixin Mini Program code)
`BarCode`
`LowVoice`
`HighVoice`
`NoVoice`
`LowEvaluation` (low no-reference video quality score)
     */
    public $Type;

    /**
     * @var array The information of a checked segment in quality control.
     */
    public $QualityControlItems;

    /**
     * @param string $Type The issue type. Valid values:
`Jitter`
`Blur`
`LowLighting`
`HighLighting` (overexposure)
`CrashScreen` (video corruption)
`BlackWhiteEdge`
`SolidColorScreen` (blank screen)
`Noise`
`Mosaic` (pixelation)
`QRCode`
`AppletCode` (Weixin Mini Program code)
`BarCode`
`LowVoice`
`HighVoice`
`NoVoice`
`LowEvaluation` (low no-reference video quality score)
     * @param array $QualityControlItems The information of a checked segment in quality control.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("QualityControlItems",$param) and $param["QualityControlItems"] !== null) {
            $this->QualityControlItems = [];
            foreach ($param["QualityControlItems"] as $key => $value){
                $obj = new QualityControlItem();
                $obj->deserialize($value);
                array_push($this->QualityControlItems, $obj);
            }
        }
    }
}
