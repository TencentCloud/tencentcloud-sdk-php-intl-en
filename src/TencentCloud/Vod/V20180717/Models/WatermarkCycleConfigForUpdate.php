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
 * Watermark cycle configuration.
 *
 * @method float getStartTime() Obtain Playback time point in seconds when a watermark appears in a video for the first time.
 * @method void setStartTime(float $StartTime) Set Playback time point in seconds when a watermark appears in a video for the first time.
 * @method float getDisplayDuration() Obtain Display duration of a watermark in a watermark cycle in seconds.
 * @method void setDisplayDuration(float $DisplayDuration) Set Display duration of a watermark in a watermark cycle in seconds.
 * @method float getCycleDuration() Obtain Duration of a watermark cycle in seconds.
If 0 is entered, a watermark will last for only one cycle (i.e., visible for `DisplayDuration` seconds throughout the video).
 * @method void setCycleDuration(float $CycleDuration) Set Duration of a watermark cycle in seconds.
If 0 is entered, a watermark will last for only one cycle (i.e., visible for `DisplayDuration` seconds throughout the video).
 */
class WatermarkCycleConfigForUpdate extends AbstractModel
{
    /**
     * @var float Playback time point in seconds when a watermark appears in a video for the first time.
     */
    public $StartTime;

    /**
     * @var float Display duration of a watermark in a watermark cycle in seconds.
     */
    public $DisplayDuration;

    /**
     * @var float Duration of a watermark cycle in seconds.
If 0 is entered, a watermark will last for only one cycle (i.e., visible for `DisplayDuration` seconds throughout the video).
     */
    public $CycleDuration;

    /**
     * @param float $StartTime Playback time point in seconds when a watermark appears in a video for the first time.
     * @param float $DisplayDuration Display duration of a watermark in a watermark cycle in seconds.
     * @param float $CycleDuration Duration of a watermark cycle in seconds.
If 0 is entered, a watermark will last for only one cycle (i.e., visible for `DisplayDuration` seconds throughout the video).
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
