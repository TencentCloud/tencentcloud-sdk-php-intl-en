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
 * Watermark period configuration.
 *
 * @method float getStartTime() Obtain Playback time point of the first occurrence of the watermark in the video. Measurement unit: second.
 * @method void setStartTime(float $StartTime) Set Playback time point of the first occurrence of the watermark in the video. Measurement unit: second.
 * @method float getDisplayDuration() Obtain Duration of watermark display in a watermark cycle, in seconds.
 * @method void setDisplayDuration(float $DisplayDuration) Set Duration of watermark display in a watermark cycle, in seconds.
 * @method float getCycleDuration() Obtain Duration of a watermark cycle, in seconds.
Set to 0, a watermark will last only one watermark cycle (displayed for DisplayDuration seconds in the entire video).
 * @method void setCycleDuration(float $CycleDuration) Set Duration of a watermark cycle, in seconds.
Set to 0, a watermark will last only one watermark cycle (displayed for DisplayDuration seconds in the entire video).
 */
class WatermarkCycleConfigForUpdate extends AbstractModel
{
    /**
     * @var float Playback time point of the first occurrence of the watermark in the video. Measurement unit: second.
     */
    public $StartTime;

    /**
     * @var float Duration of watermark display in a watermark cycle, in seconds.
     */
    public $DisplayDuration;

    /**
     * @var float Duration of a watermark cycle, in seconds.
Set to 0, a watermark will last only one watermark cycle (displayed for DisplayDuration seconds in the entire video).
     */
    public $CycleDuration;

    /**
     * @param float $StartTime Playback time point of the first occurrence of the watermark in the video. Measurement unit: second.
     * @param float $DisplayDuration Duration of watermark display in a watermark cycle, in seconds.
     * @param float $CycleDuration Duration of a watermark cycle, in seconds.
Set to 0, a watermark will last only one watermark cycle (displayed for DisplayDuration seconds in the entire video).
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("DisplayDuration",$param) and $param["DisplayDuration"] !== null) {
            $this->DisplayDuration = $param["DisplayDuration"];
        }

        if (array_key_exists("CycleDuration",$param) and $param["CycleDuration"] !== null) {
            $this->CycleDuration = $param["CycleDuration"];
        }
    }
}
