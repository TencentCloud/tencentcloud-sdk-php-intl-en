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
 * Detection policy for media quality inspection.
 *
 * @method integer getCheckDuration() Obtain Duration of each loop detection, in seconds. Value range:

 - Minimum value: 10.
 - Maximum value: 86400.

 * @method void setCheckDuration(integer $CheckDuration) Set Duration of each loop detection, in seconds. Value range:

 - Minimum value: 10.
 - Maximum value: 86400.

 * @method integer getCheckInterval() Obtain Detection interval, in seconds. It indicates the duration after a detection is completed and before the next detection is conducted. Value range:
 - Minimum value: 10.
 - Maximum value: 3600.
 * @method void setCheckInterval(integer $CheckInterval) Set Detection interval, in seconds. It indicates the duration after a detection is completed and before the next detection is conducted. Value range:
 - Minimum value: 10.
 - Maximum value: 3600.
 * @method integer getSkipDuration() Obtain Skipped opening duration, in seconds. Value range:
 - Minimum value: 1.
 - Maximum value: 1800.
 * @method void setSkipDuration(integer $SkipDuration) Set Skipped opening duration, in seconds. Value range:
 - Minimum value: 1.
 - Maximum value: 1800.
 * @method integer getCirclesNumber() Obtain Number of loops. Value range:
 - Minimum value: 0.
 - Maximum value: 1000.

If the value is 0 or not specified, it indicates that loops are executed until the video ends.
 * @method void setCirclesNumber(integer $CirclesNumber) Set Number of loops. Value range:
 - Minimum value: 0.
 - Maximum value: 1000.

If the value is 0 or not specified, it indicates that loops are executed until the video ends.
 */
class TimeSpotCheck extends AbstractModel
{
    /**
     * @var integer Duration of each loop detection, in seconds. Value range:

 - Minimum value: 10.
 - Maximum value: 86400.

     */
    public $CheckDuration;

    /**
     * @var integer Detection interval, in seconds. It indicates the duration after a detection is completed and before the next detection is conducted. Value range:
 - Minimum value: 10.
 - Maximum value: 3600.
     */
    public $CheckInterval;

    /**
     * @var integer Skipped opening duration, in seconds. Value range:
 - Minimum value: 1.
 - Maximum value: 1800.
     */
    public $SkipDuration;

    /**
     * @var integer Number of loops. Value range:
 - Minimum value: 0.
 - Maximum value: 1000.

If the value is 0 or not specified, it indicates that loops are executed until the video ends.
     */
    public $CirclesNumber;

    /**
     * @param integer $CheckDuration Duration of each loop detection, in seconds. Value range:

 - Minimum value: 10.
 - Maximum value: 86400.

     * @param integer $CheckInterval Detection interval, in seconds. It indicates the duration after a detection is completed and before the next detection is conducted. Value range:
 - Minimum value: 10.
 - Maximum value: 3600.
     * @param integer $SkipDuration Skipped opening duration, in seconds. Value range:
 - Minimum value: 1.
 - Maximum value: 1800.
     * @param integer $CirclesNumber Number of loops. Value range:
 - Minimum value: 0.
 - Maximum value: 1000.

If the value is 0 or not specified, it indicates that loops are executed until the video ends.
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
