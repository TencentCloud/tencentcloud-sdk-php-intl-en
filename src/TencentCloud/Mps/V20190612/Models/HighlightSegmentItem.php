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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of a highlight segment.
 *
 * @method float getConfidence() Obtain The confidence score.
 * @method void setConfidence(float $Confidence) Set The confidence score.
 * @method float getStartTimeOffset() Obtain The start time offset of the segment.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set The start time offset of the segment.
 * @method float getEndTimeOffset() Obtain The end time offset of the segment.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set The end time offset of the segment.
 * @method array getSegmentTags() Obtain Segment tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSegmentTags(array $SegmentTags) Set Segment tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBeginTime() Obtain The live streaming segment corresponds to the live start time point, in the ISO date format.	
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBeginTime(string $BeginTime) Set The live streaming segment corresponds to the live start time point, in the ISO date format.	
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEndTime() Obtain The live streaming segment corresponds to the live streaming end time, in the ISO date format.	
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEndTime(string $EndTime) Set The live streaming segment corresponds to the live streaming end time, in the ISO date format.	
Note: This field may return null, indicating that no valid value can be obtained.
 */
class HighlightSegmentItem extends AbstractModel
{
    /**
     * @var float The confidence score.
     */
    public $Confidence;

    /**
     * @var float The start time offset of the segment.
     */
    public $StartTimeOffset;

    /**
     * @var float The end time offset of the segment.
     */
    public $EndTimeOffset;

    /**
     * @var array Segment tag.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SegmentTags;

    /**
     * @var string The live streaming segment corresponds to the live start time point, in the ISO date format.	
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BeginTime;

    /**
     * @var string The live streaming segment corresponds to the live streaming end time, in the ISO date format.	
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EndTime;

    /**
     * @param float $Confidence The confidence score.
     * @param float $StartTimeOffset The start time offset of the segment.
     * @param float $EndTimeOffset The end time offset of the segment.
     * @param array $SegmentTags Segment tag.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BeginTime The live streaming segment corresponds to the live start time point, in the ISO date format.	
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $EndTime The live streaming segment corresponds to the live streaming end time, in the ISO date format.	
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("SegmentTags",$param) and $param["SegmentTags"] !== null) {
            $this->SegmentTags = $param["SegmentTags"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
