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
 * Intelligent highlight collection segments.
 *
 * @method float getConfidence() Obtain Confidence degree.
 * @method void setConfidence(float $Confidence) Set Confidence degree.
 * @method float getStartTimeOffset() Obtain Segment start time offset.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Segment start time offset.
 * @method float getEndTimeOffset() Obtain End time offset of the recording clip.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of the recording clip.
 * @method array getSegmentTags() Obtain 
 * @method void setSegmentTags(array $SegmentTags) Set 
 * @method string getBeginTime() Obtain The start time of a live streaming segment, in the ISO date format.	
 * @method void setBeginTime(string $BeginTime) Set The start time of a live streaming segment, in the ISO date format.	
 * @method string getEndTime() Obtain The end time of a live streaming segment, in the ISO date format.	
 * @method void setEndTime(string $EndTime) Set The end time of a live streaming segment, in the ISO date format.	
 * @method string getTitle() Obtain Highlight title.
 * @method void setTitle(string $Title) Set Highlight title.
 * @method string getSummary() Obtain Highlight overview.
 * @method void setSummary(string $Summary) Set Highlight overview.
 */
class HighlightSegmentItem extends AbstractModel
{
    /**
     * @var float Confidence degree.
     */
    public $Confidence;

    /**
     * @var float Segment start time offset.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of the recording clip.
     */
    public $EndTimeOffset;

    /**
     * @var array 
     */
    public $SegmentTags;

    /**
     * @var string The start time of a live streaming segment, in the ISO date format.	
     */
    public $BeginTime;

    /**
     * @var string The end time of a live streaming segment, in the ISO date format.	
     */
    public $EndTime;

    /**
     * @var string Highlight title.
     */
    public $Title;

    /**
     * @var string Highlight overview.
     */
    public $Summary;

    /**
     * @param float $Confidence Confidence degree.
     * @param float $StartTimeOffset Segment start time offset.
     * @param float $EndTimeOffset End time offset of the recording clip.
     * @param array $SegmentTags 
     * @param string $BeginTime The start time of a live streaming segment, in the ISO date format.	
     * @param string $EndTime The end time of a live streaming segment, in the ISO date format.	
     * @param string $Title Highlight title.
     * @param string $Summary Highlight overview.
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

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }
    }
}
