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
 * Abnormal segment information of media quality inspection.
 *
 * @method float getStartTimeOffset() Obtain Offset time of abnormal segment start, in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Offset time of abnormal segment start, in seconds.
 * @method float getEndTimeOffset() Obtain End time offset of an abnormal fragment, in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of an abnormal fragment, in seconds.
 * @method array getAreaCoordSet() Obtain Detected abnormal area coordinates. The array contains 4 elements [x1,y1,x2,y2], sequentially representing the horizontal and vertical coordinates of the top-left corner and bottom-right point.
<font color=red>Note:</font> This field is valid only when the Type value is one of the following:
<li>BlackWhiteEdge: black and white edges.</li>
<li>Mosaic: mosaic.</li>
<li>QRCode: QR code.</li>
<li>AppletCode: mini program code.</li>
<li>BarCode: barcode.</li>
 * @method void setAreaCoordSet(array $AreaCoordSet) Set Detected abnormal area coordinates. The array contains 4 elements [x1,y1,x2,y2], sequentially representing the horizontal and vertical coordinates of the top-left corner and bottom-right point.
<font color=red>Note:</font> This field is valid only when the Type value is one of the following:
<li>BlackWhiteEdge: black and white edges.</li>
<li>Mosaic: mosaic.</li>
<li>QRCode: QR code.</li>
<li>AppletCode: mini program code.</li>
<li>BarCode: barcode.</li>
 * @method integer getConfidence() Obtain Confidence degree, value ranges from 0 to 100.
<font color=red>Note:</font> This field is valid only when the Type value is one of the following:
<li>Mosaic: mosaic.</li>
<li>QRCode: QR code.</li>
<li>AppletCode: mini program code.</li>
<li>BarCode: barcode.</li>
 * @method void setConfidence(integer $Confidence) Set Confidence degree, value ranges from 0 to 100.
<font color=red>Note:</font> This field is valid only when the Type value is one of the following:
<li>Mosaic: mosaic.</li>
<li>QRCode: QR code.</li>
<li>AppletCode: mini program code.</li>
<li>BarCode: barcode.</li>
 */
class QualityInspectItem extends AbstractModel
{
    /**
     * @var float Offset time of abnormal segment start, in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of an abnormal fragment, in seconds.
     */
    public $EndTimeOffset;

    /**
     * @var array Detected abnormal area coordinates. The array contains 4 elements [x1,y1,x2,y2], sequentially representing the horizontal and vertical coordinates of the top-left corner and bottom-right point.
<font color=red>Note:</font> This field is valid only when the Type value is one of the following:
<li>BlackWhiteEdge: black and white edges.</li>
<li>Mosaic: mosaic.</li>
<li>QRCode: QR code.</li>
<li>AppletCode: mini program code.</li>
<li>BarCode: barcode.</li>
     */
    public $AreaCoordSet;

    /**
     * @var integer Confidence degree, value ranges from 0 to 100.
<font color=red>Note:</font> This field is valid only when the Type value is one of the following:
<li>Mosaic: mosaic.</li>
<li>QRCode: QR code.</li>
<li>AppletCode: mini program code.</li>
<li>BarCode: barcode.</li>
     */
    public $Confidence;

    /**
     * @param float $StartTimeOffset Offset time of abnormal segment start, in seconds.
     * @param float $EndTimeOffset End time offset of an abnormal fragment, in seconds.
     * @param array $AreaCoordSet Detected abnormal area coordinates. The array contains 4 elements [x1,y1,x2,y2], sequentially representing the horizontal and vertical coordinates of the top-left corner and bottom-right point.
<font color=red>Note:</font> This field is valid only when the Type value is one of the following:
<li>BlackWhiteEdge: black and white edges.</li>
<li>Mosaic: mosaic.</li>
<li>QRCode: QR code.</li>
<li>AppletCode: mini program code.</li>
<li>BarCode: barcode.</li>
     * @param integer $Confidence Confidence degree, value ranges from 0 to 100.
<font color=red>Note:</font> This field is valid only when the Type value is one of the following:
<li>Mosaic: mosaic.</li>
<li>QRCode: QR code.</li>
<li>AppletCode: mini program code.</li>
<li>BarCode: barcode.</li>
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
