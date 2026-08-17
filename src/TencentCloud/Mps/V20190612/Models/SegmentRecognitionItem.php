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
 * Intelligent video splitting recording clip.
 *
 * @method float getConfidence() Obtain Confidence degree.
 * @method void setConfidence(float $Confidence) Set Confidence degree.
 * @method float getStartTimeOffset() Obtain Start time offset of a recording clip.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of a recording clip.
 * @method float getEndTimeOffset() Obtain End time offset of the recording clip.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of the recording clip.
 * @method string getSegmentUrl() Obtain Split segment URL.
 * @method void setSegmentUrl(string $SegmentUrl) Set Split segment URL.
 * @method string getCovImgUrl() Obtain Segment cover.
 * @method void setCovImgUrl(string $CovImgUrl) Set Segment cover.
 * @method string getTitle() Obtain Segment title.
 * @method void setTitle(string $Title) Set Segment title.
 * @method string getSummary() Obtain Segment summary.
 * @method void setSummary(string $Summary) Set Segment summary.
 * @method array getKeywords() Obtain Segmentation keywords.
 * @method void setKeywords(array $Keywords) Set Segmentation keywords.
 * @method string getBeginTime() Obtain The start time of a live streaming segment, in the ISO date format.
 * @method void setBeginTime(string $BeginTime) Set The start time of a live streaming segment, in the ISO date format.
 * @method string getEndTime() Obtain The end time of a live streaming segment, in the ISO date format.
 * @method void setEndTime(string $EndTime) Set The end time of a live streaming segment, in the ISO date format.
 * @method string getPersonId() Obtain Specify the figure ID.
 * @method void setPersonId(string $PersonId) Set Specify the figure ID.
 */
class SegmentRecognitionItem extends AbstractModel
{
    /**
     * @var float Confidence degree.
     */
    public $Confidence;

    /**
     * @var float Start time offset of a recording clip.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of the recording clip.
     */
    public $EndTimeOffset;

    /**
     * @var string Split segment URL.
     */
    public $SegmentUrl;

    /**
     * @var string Segment cover.
     */
    public $CovImgUrl;

    /**
     * @var string Segment title.
     */
    public $Title;

    /**
     * @var string Segment summary.
     */
    public $Summary;

    /**
     * @var array Segmentation keywords.
     */
    public $Keywords;

    /**
     * @var string The start time of a live streaming segment, in the ISO date format.
     */
    public $BeginTime;

    /**
     * @var string The end time of a live streaming segment, in the ISO date format.
     */
    public $EndTime;

    /**
     * @var string Specify the figure ID.
     */
    public $PersonId;

    /**
     * @param float $Confidence Confidence degree.
     * @param float $StartTimeOffset Start time offset of a recording clip.
     * @param float $EndTimeOffset End time offset of the recording clip.
     * @param string $SegmentUrl Split segment URL.
     * @param string $CovImgUrl Segment cover.
     * @param string $Title Segment title.
     * @param string $Summary Segment summary.
     * @param array $Keywords Segmentation keywords.
     * @param string $BeginTime The start time of a live streaming segment, in the ISO date format.
     * @param string $EndTime The end time of a live streaming segment, in the ISO date format.
     * @param string $PersonId Specify the figure ID.
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
