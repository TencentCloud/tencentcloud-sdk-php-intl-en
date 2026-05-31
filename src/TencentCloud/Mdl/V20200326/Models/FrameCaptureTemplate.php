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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Chart template.
 *
 * @method string getName() Obtain Screenshot template name. Limited to uppercase and lowercase letters and digits. Length [1, 20].
 * @method void setName(string $Name) Set Screenshot template name. Limited to uppercase and lowercase letters and digits. Length [1, 20].
 * @method integer getWidth() Obtain Screenshot width. Optional. The input range is [0, 3000] and must be a multiple of 2.
 * @method void setWidth(integer $Width) Set Screenshot width. Optional. The input range is [0, 3000] and must be a multiple of 2.
 * @method integer getHeight() Obtain Screenshot height, optional, input range [0, 3000], must be a multiple of 2
 * @method void setHeight(integer $Height) Set Screenshot height, optional, input range [0, 3000], must be a multiple of 2
 * @method integer getCaptureInterval() Obtain Screenshot interval, an integer between 1 and 3600.
 * @method void setCaptureInterval(integer $CaptureInterval) Set Screenshot interval, an integer between 1 and 3600.
 * @method string getCaptureIntervalUnits() Obtain Screenshot measurement unit, supports only SECONDS.
 * @method void setCaptureIntervalUnits(string $CaptureIntervalUnits) Set Screenshot measurement unit, supports only SECONDS.
 * @method string getScalingBehavior() Obtain Stretch behavior, supports [DEFAULT|STRETCH_TO_OUTPUT], default is DEFAULT.
 * @method void setScalingBehavior(string $ScalingBehavior) Set Stretch behavior, supports [DEFAULT|STRETCH_TO_OUTPUT], default is DEFAULT.
 * @method integer getSharpness() Obtain Sharpening degree, an integer between 0 and 100.
 * @method void setSharpness(integer $Sharpness) Set Sharpening degree, an integer between 0 and 100.
 */
class FrameCaptureTemplate extends AbstractModel
{
    /**
     * @var string Screenshot template name. Limited to uppercase and lowercase letters and digits. Length [1, 20].
     */
    public $Name;

    /**
     * @var integer Screenshot width. Optional. The input range is [0, 3000] and must be a multiple of 2.
     */
    public $Width;

    /**
     * @var integer Screenshot height, optional, input range [0, 3000], must be a multiple of 2
     */
    public $Height;

    /**
     * @var integer Screenshot interval, an integer between 1 and 3600.
     */
    public $CaptureInterval;

    /**
     * @var string Screenshot measurement unit, supports only SECONDS.
     */
    public $CaptureIntervalUnits;

    /**
     * @var string Stretch behavior, supports [DEFAULT|STRETCH_TO_OUTPUT], default is DEFAULT.
     */
    public $ScalingBehavior;

    /**
     * @var integer Sharpening degree, an integer between 0 and 100.
     */
    public $Sharpness;

    /**
     * @param string $Name Screenshot template name. Limited to uppercase and lowercase letters and digits. Length [1, 20].
     * @param integer $Width Screenshot width. Optional. The input range is [0, 3000] and must be a multiple of 2.
     * @param integer $Height Screenshot height, optional, input range [0, 3000], must be a multiple of 2
     * @param integer $CaptureInterval Screenshot interval, an integer between 1 and 3600.
     * @param string $CaptureIntervalUnits Screenshot measurement unit, supports only SECONDS.
     * @param string $ScalingBehavior Stretch behavior, supports [DEFAULT|STRETCH_TO_OUTPUT], default is DEFAULT.
     * @param integer $Sharpness Sharpening degree, an integer between 0 and 100.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("CaptureInterval",$param) and $param["CaptureInterval"] !== null) {
            $this->CaptureInterval = $param["CaptureInterval"];
        }

        if (array_key_exists("CaptureIntervalUnits",$param) and $param["CaptureIntervalUnits"] !== null) {
            $this->CaptureIntervalUnits = $param["CaptureIntervalUnits"];
        }

        if (array_key_exists("ScalingBehavior",$param) and $param["ScalingBehavior"] !== null) {
            $this->ScalingBehavior = $param["ScalingBehavior"];
        }

        if (array_key_exists("Sharpness",$param) and $param["Sharpness"] !== null) {
            $this->Sharpness = $param["Sharpness"];
        }
    }
}
