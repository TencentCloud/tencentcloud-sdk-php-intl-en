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
 * @method string getCovImgUrl() Obtain Segment cover.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCovImgUrl(string $CovImgUrl) Set Segment cover.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTitle() Obtain Segment title.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTitle(string $Title) Set Segment title.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSummary() Obtain Segment summary.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSummary(string $Summary) Set Segment summary.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getKeywords() Obtain Segmentation keywords.
 * @method void setKeywords(array $Keywords) Set Segmentation keywords.
 * @method string getBeginTime() Obtain The start time of a live streaming segment, in the ISO date format.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBeginTime(string $BeginTime) Set The start time of a live streaming segment, in the ISO date format.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEndTime() Obtain The end time of a live streaming segment, in the ISO date format.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEndTime(string $EndTime) Set The end time of a live streaming segment, in the ISO date format.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getPersonId() Obtain Specifies the character ID.
 * @method void setPersonId(string $PersonId) Set Specifies the character ID.
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
     * @var string Segment cover.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CovImgUrl;

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
     * @var array Segmentation keywords.
     */
    public $Keywords;

    /**
     * @var string The start time of a live streaming segment, in the ISO date format.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BeginTime;

    /**
     * @var string The end time of a live streaming segment, in the ISO date format.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EndTime;

    /**
     * @var string Specifies the character ID.
     */
    public $PersonId;

    /**
     * @param float $Confidence 
     * @param float $StartTimeOffset 
     * @param float $EndTimeOffset 
     * @param string $SegmentUrl 
     * @param string $CovImgUrl Segment cover.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Title Segment title.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Summary Segment summary.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Keywords Segmentation keywords.
     * @param string $BeginTime The start time of a live streaming segment, in the ISO date format.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $EndTime The end time of a live streaming segment, in the ISO date format.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $PersonId Specifies the character ID.
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

        if (array_key_exists("CovImgUrl",$param) and $param["CovImgUrl"] !== null) {
            $this->CovImgUrl = $param["CovImgUrl"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }
    }
}
