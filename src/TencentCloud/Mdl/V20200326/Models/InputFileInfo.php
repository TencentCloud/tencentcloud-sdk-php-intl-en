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
 * InputFileInfo
 *
 * @method integer getSegmentDuration() Obtain Segment duration, in milliseconds, ranging from 1000-10000, must be a multiple of 1000. The input video duration should be between SegmentDuration * 90 and SegmentDuration * 180
 * @method void setSegmentDuration(integer $SegmentDuration) Set Segment duration, in milliseconds, ranging from 1000-10000, must be a multiple of 1000. The input video duration should be between SegmentDuration * 90 and SegmentDuration * 180
 */
class InputFileInfo extends AbstractModel
{
    /**
     * @var integer Segment duration, in milliseconds, ranging from 1000-10000, must be a multiple of 1000. The input video duration should be between SegmentDuration * 90 and SegmentDuration * 180
     */
    public $SegmentDuration;

    /**
     * @param integer $SegmentDuration Segment duration, in milliseconds, ranging from 1000-10000, must be a multiple of 1000. The input video duration should be between SegmentDuration * 90 and SegmentDuration * 180
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
        if (array_key_exists("SegmentDuration",$param) and $param["SegmentDuration"] !== null) {
            $this->SegmentDuration = $param["SegmentDuration"];
        }
    }
}
