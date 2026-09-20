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
 * Rotation image task type
 *
 * @method integer getDefinition() Obtain Video-to-GIF conversion template ID.
 * @method void setDefinition(integer $Definition) Set Video-to-GIF conversion template ID.
 * @method float getStartTimeOffset() Obtain Start time offset of the GIF in the video, in seconds.
<li>If not set or set to 0, it starts from the beginning of the video.</li>
<li>When the value is greater than 0 (assuming n), it means starting from the nth second of the video;</li>
<li>When the value is less than 0 (assuming -n), it means starting from the position n seconds before the video ends.</li>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of the GIF in the video, in seconds.
<li>If not set or set to 0, it starts from the beginning of the video.</li>
<li>When the value is greater than 0 (assuming n), it means starting from the nth second of the video;</li>
<li>When the value is less than 0 (assuming -n), it means starting from the position n seconds before the video ends.</li>
 * @method float getEndTimeOffset() Obtain Termination time offset of the GIF in the video, in seconds.
<li>If not set or set to 0, it will last until the end of a video.</li>
<li>When the value is greater than 0 (assuming n), it means to terminate at the nth second of the video;</li>
<li>When the value is less than 0 (assuming -n), it means the video will terminate n seconds before the end.</li>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set Termination time offset of the GIF in the video, in seconds.
<li>If not set or set to 0, it will last until the end of a video.</li>
<li>When the value is greater than 0 (assuming n), it means to terminate at the nth second of the video;</li>
<li>When the value is less than 0 (assuming -n), it means the video will terminate n seconds before the end.</li>
 */
class AnimatedGraphicTaskInput extends AbstractModel
{
    /**
     * @var integer Video-to-GIF conversion template ID.
     */
    public $Definition;

    /**
     * @var float Start time offset of the GIF in the video, in seconds.
<li>If not set or set to 0, it starts from the beginning of the video.</li>
<li>When the value is greater than 0 (assuming n), it means starting from the nth second of the video;</li>
<li>When the value is less than 0 (assuming -n), it means starting from the position n seconds before the video ends.</li>
     */
    public $StartTimeOffset;

    /**
     * @var float Termination time offset of the GIF in the video, in seconds.
<li>If not set or set to 0, it will last until the end of a video.</li>
<li>When the value is greater than 0 (assuming n), it means to terminate at the nth second of the video;</li>
<li>When the value is less than 0 (assuming -n), it means the video will terminate n seconds before the end.</li>
     */
    public $EndTimeOffset;

    /**
     * @param integer $Definition Video-to-GIF conversion template ID.
     * @param float $StartTimeOffset Start time offset of the GIF in the video, in seconds.
<li>If not set or set to 0, it starts from the beginning of the video.</li>
<li>When the value is greater than 0 (assuming n), it means starting from the nth second of the video;</li>
<li>When the value is less than 0 (assuming -n), it means starting from the position n seconds before the video ends.</li>
     * @param float $EndTimeOffset Termination time offset of the GIF in the video, in seconds.
<li>If not set or set to 0, it will last until the end of a video.</li>
<li>When the value is greater than 0 (assuming n), it means to terminate at the nth second of the video;</li>
<li>When the value is less than 0 (assuming -n), it means the video will terminate n seconds before the end.</li>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}
