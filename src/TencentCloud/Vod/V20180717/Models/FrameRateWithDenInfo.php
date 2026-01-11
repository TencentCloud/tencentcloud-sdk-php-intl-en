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
 * Frame interpolation configuration, which supports fractional frame rates.
 *
 * @method string getSwitch() Obtain Capability configuration switch. Valid values:
<li>ON: enabled.</li>
<li>OFF: disabled.</li>
Default value: OFF.
 * @method void setSwitch(string $Switch) Set Capability configuration switch. Valid values:
<li>ON: enabled.</li>
<li>OFF: disabled.</li>
Default value: OFF.
 * @method integer getFpsNum() Obtain Frame rate numerator. Value range: non-negative number, which should be less than 100 when divided by the denominator, and in the unit of Hz. The default value is 0. Note: For transcoding, this parameter will overwrite the Fps in the VideoTemplate.
 * @method void setFpsNum(integer $FpsNum) Set Frame rate numerator. Value range: non-negative number, which should be less than 100 when divided by the denominator, and in the unit of Hz. The default value is 0. Note: For transcoding, this parameter will overwrite the Fps in the VideoTemplate.
 * @method integer getFpsDen() Obtain Frame rate denominator.Value range: numbers equal to or greater than 1. The default value is 1. Note: For transcoding, this parameter will overwrite the FpsDenominator in the VideoTemplate.
 * @method void setFpsDen(integer $FpsDen) Set Frame rate denominator.Value range: numbers equal to or greater than 1. The default value is 1. Note: For transcoding, this parameter will overwrite the FpsDenominator in the VideoTemplate.
 */
class FrameRateWithDenInfo extends AbstractModel
{
    /**
     * @var string Capability configuration switch. Valid values:
<li>ON: enabled.</li>
<li>OFF: disabled.</li>
Default value: OFF.
     */
    public $Switch;

    /**
     * @var integer Frame rate numerator. Value range: non-negative number, which should be less than 100 when divided by the denominator, and in the unit of Hz. The default value is 0. Note: For transcoding, this parameter will overwrite the Fps in the VideoTemplate.
     */
    public $FpsNum;

    /**
     * @var integer Frame rate denominator.Value range: numbers equal to or greater than 1. The default value is 1. Note: For transcoding, this parameter will overwrite the FpsDenominator in the VideoTemplate.
     */
    public $FpsDen;

    /**
     * @param string $Switch Capability configuration switch. Valid values:
<li>ON: enabled.</li>
<li>OFF: disabled.</li>
Default value: OFF.
     * @param integer $FpsNum Frame rate numerator. Value range: non-negative number, which should be less than 100 when divided by the denominator, and in the unit of Hz. The default value is 0. Note: For transcoding, this parameter will overwrite the Fps in the VideoTemplate.
     * @param integer $FpsDen Frame rate denominator.Value range: numbers equal to or greater than 1. The default value is 1. Note: For transcoding, this parameter will overwrite the FpsDenominator in the VideoTemplate.
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

        if (array_key_exists("FpsNum",$param) and $param["FpsNum"] !== null) {
            $this->FpsNum = $param["FpsNum"];
        }

        if (array_key_exists("FpsDen",$param) and $param["FpsDen"] !== null) {
            $this->FpsDen = $param["FpsDen"];
        }
    }
}
