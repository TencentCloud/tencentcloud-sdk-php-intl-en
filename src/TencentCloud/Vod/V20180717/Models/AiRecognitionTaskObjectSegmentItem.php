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
 * Object recognition result fragment.
 *
 * @method float getStartTimeOffset() Obtain Identifies the offset time of the beginning of the segment, in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Identifies the offset time of the beginning of the segment, in seconds.
 * @method float getEndTimeOffset() Obtain Offset time to identify the end of the segment, in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set Offset time to identify the end of the segment, in seconds.
 * @method float getConfidence() Obtain Identify segment confidence. Value: 0~100.
 * @method void setConfidence(float $Confidence) Set Identify segment confidence. Value: 0~100.
 * @method array getAreaCoordSet() Obtain The area coordinates of the recognition result. The array contains 4 elements [x1, y1, x2, y2], which in turn represent the horizontal and vertical coordinates of the upper left point and lower right point of the area.
 * @method void setAreaCoordSet(array $AreaCoordSet) Set The area coordinates of the recognition result. The array contains 4 elements [x1, y1, x2, y2], which in turn represent the horizontal and vertical coordinates of the upper left point and lower right point of the area.
 */
class AiRecognitionTaskObjectSegmentItem extends AbstractModel
{
    /**
     * @var float Identifies the offset time of the beginning of the segment, in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float Offset time to identify the end of the segment, in seconds.
     */
    public $EndTimeOffset;

    /**
     * @var float Identify segment confidence. Value: 0~100.
     */
    public $Confidence;

    /**
     * @var array The area coordinates of the recognition result. The array contains 4 elements [x1, y1, x2, y2], which in turn represent the horizontal and vertical coordinates of the upper left point and lower right point of the area.
     */
    public $AreaCoordSet;

    /**
     * @param float $StartTimeOffset Identifies the offset time of the beginning of the segment, in seconds.
     * @param float $EndTimeOffset Offset time to identify the end of the segment, in seconds.
     * @param float $Confidence Identify segment confidence. Value: 0~100.
     * @param array $AreaCoordSet The area coordinates of the recognition result. The array contains 4 elements [x1, y1, x2, y2], which in turn represent the horizontal and vertical coordinates of the upper left point and lower right point of the area.
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
        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }
    }
}
