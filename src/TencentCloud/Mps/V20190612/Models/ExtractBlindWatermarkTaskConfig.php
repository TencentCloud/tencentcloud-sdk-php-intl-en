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
 * Extracts the digital watermark task configuration for video transcoding.
 *
 * @method integer getSegmentDuration() Obtain Valid when the watermark type is blind-abseq. specifies the segment duration of the input video. unit: ms.
Segment duration is 5 seconds by default if left empty.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSegmentDuration(integer $SegmentDuration) Set Valid when the watermark type is blind-abseq. specifies the segment duration of the input video. unit: ms.
Segment duration is 5 seconds by default if left empty.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class ExtractBlindWatermarkTaskConfig extends AbstractModel
{
    /**
     * @var integer Valid when the watermark type is blind-abseq. specifies the segment duration of the input video. unit: ms.
Segment duration is 5 seconds by default if left empty.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SegmentDuration;

    /**
     * @param integer $SegmentDuration Valid when the watermark type is blind-abseq. specifies the segment duration of the input video. unit: ms.
Segment duration is 5 seconds by default if left empty.
Note: This field may return null, indicating that no valid value can be obtained.
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
