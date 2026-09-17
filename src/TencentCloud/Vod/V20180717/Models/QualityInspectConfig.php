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
 * 
 *
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method string getSwitch() Obtain 
 * @method void setSwitch(string $Switch) Set 
 * @method string getSampling() Obtain 
 * @method void setSampling(string $Sampling) Set 
 * @method integer getIntervalTime() Obtain 
 * @method void setIntervalTime(integer $IntervalTime) Set 
 * @method integer getDuration() Obtain 
 * @method void setDuration(integer $Duration) Set 
 * @method string getThreshold() Obtain 
 * @method void setThreshold(string $Threshold) Set 
 */
class QualityInspectConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $Type;

    /**
     * @var string 
     */
    public $Switch;

    /**
     * @var string 
     */
    public $Sampling;

    /**
     * @var integer 
     */
    public $IntervalTime;

    /**
     * @var integer 
     */
    public $Duration;

    /**
     * @var string 
     */
    public $Threshold;

    /**
     * @param string $Type 
     * @param string $Switch 
     * @param string $Sampling 
     * @param integer $IntervalTime 
     * @param integer $Duration 
     * @param string $Threshold 
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

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Sampling",$param) and $param["Sampling"] !== null) {
            $this->Sampling = $param["Sampling"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }
    }
}
