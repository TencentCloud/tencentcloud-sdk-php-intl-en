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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Abnormal segment information of media quality inspection.
 *
 * @method float getStartTimeOffset() Obtain Abnormal segment start offset time, unit: seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Abnormal segment start offset time, unit: seconds.
 * @method float getEndTimeOffset() Obtain Abnormal segment termination's offset time, unit: seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set Abnormal segment termination's offset time, unit: seconds.
 * @method array getAreaCoordSet() Obtain Detect abnormality in the area coordinates. The array contains 4 elements [x1, y1, x2, y2], which indicate the horizontal and vertical coordinates of the upper left and lower right points of the area in sequence. <font color=red>Pay attention to:</font> The value of this field is valid only when Type is one of the following: <li>BlackWhiteEdge: black and white edge;</li> <li>Mosaic: mosaic;</li> <li>QRCode: QR code;</li> <li>AppletCode: Mini Program code;</li> <li>BarCode: bar code.</li>
 * @method void setAreaCoordSet(array $AreaCoordSet) Set Detect abnormality in the area coordinates. The array contains 4 elements [x1, y1, x2, y2], which indicate the horizontal and vertical coordinates of the upper left and lower right points of the area in sequence. <font color=red>Pay attention to:</font> The value of this field is valid only when Type is one of the following: <li>BlackWhiteEdge: black and white edge;</li> <li>Mosaic: mosaic;</li> <li>QRCode: QR code;</li> <li>AppletCode: Mini Program code;</li> <li>BarCode: bar code.</li>
 * @method integer getConfidence() Obtain Confidence threshold, range: [0, 100]. <font color=red>Pay attention to:</font> This field is valid only when Type has one of the following values: <li>Mosaic: Mosaic;</li> <li>QRCode: QR code;</li> <li>AppletCode: Mini Program code;</li> <li>BarCode: Bar code.</li>
 * @method void setConfidence(integer $Confidence) Set Confidence threshold, range: [0, 100]. <font color=red>Pay attention to:</font> This field is valid only when Type has one of the following values: <li>Mosaic: Mosaic;</li> <li>QRCode: QR code;</li> <li>AppletCode: Mini Program code;</li> <li>BarCode: Bar code.</li>
 */
class QualityInspectItem extends AbstractModel
{
    /**
     * @var float Abnormal segment start offset time, unit: seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float Abnormal segment termination's offset time, unit: seconds.
     */
    public $EndTimeOffset;

    /**
     * @var array Detect abnormality in the area coordinates. The array contains 4 elements [x1, y1, x2, y2], which indicate the horizontal and vertical coordinates of the upper left and lower right points of the area in sequence. <font color=red>Pay attention to:</font> The value of this field is valid only when Type is one of the following: <li>BlackWhiteEdge: black and white edge;</li> <li>Mosaic: mosaic;</li> <li>QRCode: QR code;</li> <li>AppletCode: Mini Program code;</li> <li>BarCode: bar code.</li>
     */
    public $AreaCoordSet;

    /**
     * @var integer Confidence threshold, range: [0, 100]. <font color=red>Pay attention to:</font> This field is valid only when Type has one of the following values: <li>Mosaic: Mosaic;</li> <li>QRCode: QR code;</li> <li>AppletCode: Mini Program code;</li> <li>BarCode: Bar code.</li>
     */
    public $Confidence;

    /**
     * @param float $StartTimeOffset Abnormal segment start offset time, unit: seconds.
     * @param float $EndTimeOffset Abnormal segment termination's offset time, unit: seconds.
     * @param array $AreaCoordSet Detect abnormality in the area coordinates. The array contains 4 elements [x1, y1, x2, y2], which indicate the horizontal and vertical coordinates of the upper left and lower right points of the area in sequence. <font color=red>Pay attention to:</font> The value of this field is valid only when Type is one of the following: <li>BlackWhiteEdge: black and white edge;</li> <li>Mosaic: mosaic;</li> <li>QRCode: QR code;</li> <li>AppletCode: Mini Program code;</li> <li>BarCode: bar code.</li>
     * @param integer $Confidence Confidence threshold, range: [0, 100]. <font color=red>Pay attention to:</font> This field is valid only when Type has one of the following values: <li>Mosaic: Mosaic;</li> <li>QRCode: QR code;</li> <li>AppletCode: Mini Program code;</li> <li>BarCode: Bar code.</li>
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
        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
