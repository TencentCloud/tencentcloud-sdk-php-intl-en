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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Frame capture template.
 *
 * @method string getName() Obtain Name of frame capture template, limited to uppercase and lowercase letters and numbers, with a length between 1 and 20 characters.
 * @method void setName(string $Name) Set Name of frame capture template, limited to uppercase and lowercase letters and numbers, with a length between 1 and 20 characters.
 * @method integer getWidth() Obtain Width of frame capture, optional, input range is from 0 to 3000, must be a multiple of 2.
 * @method void setWidth(integer $Width) Set Width of frame capture, optional, input range is from 0 to 3000, must be a multiple of 2.
 * @method integer getHeight() Obtain Height of frame capture, optional, input range is from 0 to 3000, must be a multiple of 2.
 * @method void setHeight(integer $Height) Set Height of frame capture, optional, input range is from 0 to 3000, must be a multiple of 2.
 * @method integer getCaptureInterval() Obtain Interval of frame capture, an integer between 1 and 3600.
 * @method void setCaptureInterval(integer $CaptureInterval) Set Interval of frame capture, an integer between 1 and 3600.
 * @method string getCaptureIntervalUnits() Obtain Interval units of frame capture, only supports SECONDS.
 * @method void setCaptureIntervalUnits(string $CaptureIntervalUnits) Set Interval units of frame capture, only supports SECONDS.
 * @method string getScalingBehavior() Obtain Scaling behavior of frame capture, supports DEFAULT or STRETCH_TO_OUTPUT, with DEFAULT being the default option.
 * @method void setScalingBehavior(string $ScalingBehavior) Set Scaling behavior of frame capture, supports DEFAULT or STRETCH_TO_OUTPUT, with DEFAULT being the default option.
 * @method integer getSharpness() Obtain Sharpness, an integer between 0 and 100.
 * @method void setSharpness(integer $Sharpness) Set Sharpness, an integer between 0 and 100.
 */
class FrameCaptureTemplate extends AbstractModel
{
    /**
     * @var string Name of frame capture template, limited to uppercase and lowercase letters and numbers, with a length between 1 and 20 characters.
     */
    public $Name;

    /**
     * @var integer Width of frame capture, optional, input range is from 0 to 3000, must be a multiple of 2.
     */
    public $Width;

    /**
     * @var integer Height of frame capture, optional, input range is from 0 to 3000, must be a multiple of 2.
     */
    public $Height;

    /**
     * @var integer Interval of frame capture, an integer between 1 and 3600.
     */
    public $CaptureInterval;

    /**
     * @var string Interval units of frame capture, only supports SECONDS.
     */
    public $CaptureIntervalUnits;

    /**
     * @var string Scaling behavior of frame capture, supports DEFAULT or STRETCH_TO_OUTPUT, with DEFAULT being the default option.
     */
    public $ScalingBehavior;

    /**
     * @var integer Sharpness, an integer between 0 and 100.
     */
    public $Sharpness;

    /**
     * @param string $Name Name of frame capture template, limited to uppercase and lowercase letters and numbers, with a length between 1 and 20 characters.
     * @param integer $Width Width of frame capture, optional, input range is from 0 to 3000, must be a multiple of 2.
     * @param integer $Height Height of frame capture, optional, input range is from 0 to 3000, must be a multiple of 2.
     * @param integer $CaptureInterval Interval of frame capture, an integer between 1 and 3600.
     * @param string $CaptureIntervalUnits Interval units of frame capture, only supports SECONDS.
     * @param string $ScalingBehavior Scaling behavior of frame capture, supports DEFAULT or STRETCH_TO_OUTPUT, with DEFAULT being the default option.
     * @param integer $Sharpness Sharpness, an integer between 0 and 100.
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
