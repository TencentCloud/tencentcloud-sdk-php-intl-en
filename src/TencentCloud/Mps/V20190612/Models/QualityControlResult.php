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
 * Quality inspection exception item.
 *
 * @method string getType() Obtain Exception type. Valid values:
Jitter: jitter.
Blur: blurry.
LowLighting: low light.
HighLighting: overexposure.
CrashScreen: screen glitch.
BlackWhiteEdge: Black and white edges
SolidColorScreen: solid color screen.
Noise: noise.
Mosaic: Mosaic
QRCode: QR code.
AppletCode: Mini program code.
BarCode: barcode.
LowVoice: bass.
HighVoice: high voice detection.
NoVoice: mute.
LowEvaluation: The video no-reference score (MOS) is below the threshold.
AudioEvaluation: The audio no-reference scoring (MOS) is below the threshold.
AudioNoise: Audio noise.
 * @method void setType(string $Type) Set Exception type. Valid values:
Jitter: jitter.
Blur: blurry.
LowLighting: low light.
HighLighting: overexposure.
CrashScreen: screen glitch.
BlackWhiteEdge: Black and white edges
SolidColorScreen: solid color screen.
Noise: noise.
Mosaic: Mosaic
QRCode: QR code.
AppletCode: Mini program code.
BarCode: barcode.
LowVoice: bass.
HighVoice: high voice detection.
NoVoice: mute.
LowEvaluation: The video no-reference score (MOS) is below the threshold.
AudioEvaluation: The audio no-reference scoring (MOS) is below the threshold.
AudioNoise: Audio noise.
 * @method array getQualityControlItems() Obtain Quality inspection result item.
 * @method void setQualityControlItems(array $QualityControlItems) Set Quality inspection result item.
 */
class QualityControlResult extends AbstractModel
{
    /**
     * @var string Exception type. Valid values:
Jitter: jitter.
Blur: blurry.
LowLighting: low light.
HighLighting: overexposure.
CrashScreen: screen glitch.
BlackWhiteEdge: Black and white edges
SolidColorScreen: solid color screen.
Noise: noise.
Mosaic: Mosaic
QRCode: QR code.
AppletCode: Mini program code.
BarCode: barcode.
LowVoice: bass.
HighVoice: high voice detection.
NoVoice: mute.
LowEvaluation: The video no-reference score (MOS) is below the threshold.
AudioEvaluation: The audio no-reference scoring (MOS) is below the threshold.
AudioNoise: Audio noise.
     */
    public $Type;

    /**
     * @var array Quality inspection result item.
     */
    public $QualityControlItems;

    /**
     * @param string $Type Exception type. Valid values:
Jitter: jitter.
Blur: blurry.
LowLighting: low light.
HighLighting: overexposure.
CrashScreen: screen glitch.
BlackWhiteEdge: Black and white edges
SolidColorScreen: solid color screen.
Noise: noise.
Mosaic: Mosaic
QRCode: QR code.
AppletCode: Mini program code.
BarCode: barcode.
LowVoice: bass.
HighVoice: high voice detection.
NoVoice: mute.
LowEvaluation: The video no-reference score (MOS) is below the threshold.
AudioEvaluation: The audio no-reference scoring (MOS) is below the threshold.
AudioNoise: Audio noise.
     * @param array $QualityControlItems Quality inspection result item.
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
