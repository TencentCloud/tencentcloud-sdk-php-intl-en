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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Video scene configuration (reservation)
 *
 * @method integer getInterval() Obtain <p>Analysis interval (seconds): trigger an analysis every few seconds (sliding step length)</p>
 * @method void setInterval(integer $Interval) Set <p>Analysis interval (seconds): trigger an analysis every few seconds (sliding step length)</p>
 * @method integer getDuration() Obtain <p>Analysis segment duration (seconds): length of the video window fed into the model at a time, range [5, 12800]</p>
 * @method void setDuration(integer $Duration) Set <p>Analysis segment duration (seconds): length of the video window fed into the model at a time, range [5, 12800]</p>
 * @method float getFps() Obtain <p>Frame sampling rate. Default value: 1. Value range: [0.1, 1]. One frame is sampled every 1/Fps seconds and sent to the model.</p>
 * @method void setFps(float $Fps) Set <p>Frame sampling rate. Default value: 1. Value range: [0.1, 1]. One frame is sampled every 1/Fps seconds and sent to the model.</p>
 */
class VideoSceneInfo extends AbstractModel
{
    /**
     * @var integer <p>Analysis interval (seconds): trigger an analysis every few seconds (sliding step length)</p>
     */
    public $Interval;

    /**
     * @var integer <p>Analysis segment duration (seconds): length of the video window fed into the model at a time, range [5, 12800]</p>
     */
    public $Duration;

    /**
     * @var float <p>Frame sampling rate. Default value: 1. Value range: [0.1, 1]. One frame is sampled every 1/Fps seconds and sent to the model.</p>
     */
    public $Fps;

    /**
     * @param integer $Interval <p>Analysis interval (seconds): trigger an analysis every few seconds (sliding step length)</p>
     * @param integer $Duration <p>Analysis segment duration (seconds): length of the video window fed into the model at a time, range [5, 12800]</p>
     * @param float $Fps <p>Frame sampling rate. Default value: 1. Value range: [0.1, 1]. One frame is sampled every 1/Fps seconds and sent to the model.</p>
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
        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }
    }
}
