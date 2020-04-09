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
 * Animated image generating task type
 *
 * @method integer getDefinition() Obtain Animated image generating template ID
 * @method void setDefinition(integer $Definition) Set Animated image generating template ID
 * @method float getStartTimeOffset() Obtain Start time of animated image in video in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time of animated image in video in seconds.
 * @method float getEndTimeOffset() Obtain End time of animated image in video in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time of animated image in video in seconds.
 */
class AnimatedGraphicTaskInput extends AbstractModel
{
    /**
     * @var integer Animated image generating template ID
     */
    public $Definition;

    /**
     * @var float Start time of animated image in video in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float End time of animated image in video in seconds.
     */
    public $EndTimeOffset;

    /**
     * @param integer $Definition Animated image generating template ID
     * @param float $StartTimeOffset Start time of animated image in video in seconds.
     * @param float $EndTimeOffset End time of animated image in video in seconds.
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
