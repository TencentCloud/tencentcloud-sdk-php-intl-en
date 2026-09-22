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
 * Audio and video quality inspection spot check policy.
 *
 * @method integer getCheckDuration() Obtain <p>Duration of each loop detection.</p><p>Value range: [10, 86400]</p><p>Unit: seconds.</p>
 * @method void setCheckDuration(integer $CheckDuration) Set <p>Duration of each loop detection.</p><p>Value range: [10, 86400]</p><p>Unit: seconds.</p>
 * @method integer getCheckInterval() Obtain <p>Detection interval, which indicates the duration after a detection is completed and before the next detection is conducted</p><p>Value range: [10, 3600]</p><p>Unit: seconds.</p>
 * @method void setCheckInterval(integer $CheckInterval) Set <p>Detection interval, which indicates the duration after a detection is completed and before the next detection is conducted</p><p>Value range: [10, 3600]</p><p>Unit: seconds.</p>
 * @method integer getSkipDuration() Obtain <p>Skipped opening duration.</p><p>Value range: [1, 1800]</p><p>Unit: seconds.</p>
 * @method void setSkipDuration(integer $SkipDuration) Set <p>Skipped opening duration.</p><p>Value range: [1, 1800]</p><p>Unit: seconds.</p>
 * @method integer getCirclesNumber() Obtain <p>Number of loops.</p><p>Value range: [0, 1000]</p>
 * @method void setCirclesNumber(integer $CirclesNumber) Set <p>Number of loops.</p><p>Value range: [0, 1000]</p>
 */
class QualityInspectTimeSpotCheck extends AbstractModel
{
    /**
     * @var integer <p>Duration of each loop detection.</p><p>Value range: [10, 86400]</p><p>Unit: seconds.</p>
     */
    public $CheckDuration;

    /**
     * @var integer <p>Detection interval, which indicates the duration after a detection is completed and before the next detection is conducted</p><p>Value range: [10, 3600]</p><p>Unit: seconds.</p>
     */
    public $CheckInterval;

    /**
     * @var integer <p>Skipped opening duration.</p><p>Value range: [1, 1800]</p><p>Unit: seconds.</p>
     */
    public $SkipDuration;

    /**
     * @var integer <p>Number of loops.</p><p>Value range: [0, 1000]</p>
     */
    public $CirclesNumber;

    /**
     * @param integer $CheckDuration <p>Duration of each loop detection.</p><p>Value range: [10, 86400]</p><p>Unit: seconds.</p>
     * @param integer $CheckInterval <p>Detection interval, which indicates the duration after a detection is completed and before the next detection is conducted</p><p>Value range: [10, 3600]</p><p>Unit: seconds.</p>
     * @param integer $SkipDuration <p>Skipped opening duration.</p><p>Value range: [1, 1800]</p><p>Unit: seconds.</p>
     * @param integer $CirclesNumber <p>Number of loops.</p><p>Value range: [0, 1000]</p>
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
        if (array_key_exists("CheckDuration",$param) and $param["CheckDuration"] !== null) {
            $this->CheckDuration = $param["CheckDuration"];
        }

        if (array_key_exists("CheckInterval",$param) and $param["CheckInterval"] !== null) {
            $this->CheckInterval = $param["CheckInterval"];
        }

        if (array_key_exists("SkipDuration",$param) and $param["SkipDuration"] !== null) {
            $this->SkipDuration = $param["SkipDuration"];
        }

        if (array_key_exists("CirclesNumber",$param) and $param["CirclesNumber"] !== null) {
            $this->CirclesNumber = $param["CirclesNumber"];
        }
    }
}
