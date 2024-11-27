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
 * 
 *
 * @method float getConfidence() Obtain 
 * @method void setConfidence(float $Confidence) Set 
 * @method float getStartTimeOffset() Obtain 
 * @method void setStartTimeOffset(float $StartTimeOffset) Set 
 * @method float getEndTimeOffset() Obtain 
 * @method void setEndTimeOffset(float $EndTimeOffset) Set 
 * @method string getSegmentUrl() Obtain 
 * @method void setSegmentUrl(string $SegmentUrl) Set 
 * @method string getTitle() Obtain Segment title.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTitle(string $Title) Set Segment title.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSummary() Obtain Segment summary.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSummary(string $Summary) Set Segment summary.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SegmentRecognitionItem extends AbstractModel
{
    /**
     * @var float 
     */
    public $Confidence;

    /**
     * @var float 
     */
    public $StartTimeOffset;

    /**
     * @var float 
     */
    public $EndTimeOffset;

    /**
     * @var string 
     */
    public $SegmentUrl;

    /**
     * @var string Segment title.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Title;

    /**
     * @var string Segment summary.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Summary;

    /**
     * @param float $Confidence 
     * @param float $StartTimeOffset 
     * @param float $EndTimeOffset 
     * @param string $SegmentUrl 
     * @param string $Title Segment title.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Summary Segment summary.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("SegmentUrl",$param) and $param["SegmentUrl"] !== null) {
            $this->SegmentUrl = $param["SegmentUrl"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }
    }
}