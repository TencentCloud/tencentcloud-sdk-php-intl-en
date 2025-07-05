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
 * The information about the sensitive content detected.
 *
 * @method float getConfidence() Obtain The confidence score for the detection of sensitive information. Value range: 0-100.
 * @method void setConfidence(float $Confidence) Set The confidence score for the detection of sensitive information. Value range: 0-100.
 * @method string getSuggestion() Obtain The suggestion for handling the sensitive information detected. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method void setSuggestion(string $Suggestion) Set The suggestion for handling the sensitive information detected. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method string getLabel() Obtain The labels for the detected sensitive content. Valid values:
<li>guns</li>
<li>crowd</li>
<li>police</li>
<li>bloody</li>
<li>banners (sensitive flags)</li>
<li>militant</li>
<li>explosion</li>
<li>terrorists</li>
<li>scenario (sensitive scenes) </li>
 * @method void setLabel(string $Label) Set The labels for the detected sensitive content. Valid values:
<li>guns</li>
<li>crowd</li>
<li>police</li>
<li>bloody</li>
<li>banners (sensitive flags)</li>
<li>militant</li>
<li>explosion</li>
<li>terrorists</li>
<li>scenario (sensitive scenes) </li>
 * @method array getSegmentSet() Obtain The video segments that contain sensitive information.
 * @method void setSegmentSet(array $SegmentSet) Set The video segments that contain sensitive information.
 */
class AiReviewTerrorismTaskOutput extends AbstractModel
{
    /**
     * @var float The confidence score for the detection of sensitive information. Value range: 0-100.
     */
    public $Confidence;

    /**
     * @var string The suggestion for handling the sensitive information detected. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
     */
    public $Suggestion;

    /**
     * @var string The labels for the detected sensitive content. Valid values:
<li>guns</li>
<li>crowd</li>
<li>police</li>
<li>bloody</li>
<li>banners (sensitive flags)</li>
<li>militant</li>
<li>explosion</li>
<li>terrorists</li>
<li>scenario (sensitive scenes) </li>
     */
    public $Label;

    /**
     * @var array The video segments that contain sensitive information.
     */
    public $SegmentSet;

    /**
     * @param float $Confidence The confidence score for the detection of sensitive information. Value range: 0-100.
     * @param string $Suggestion The suggestion for handling the sensitive information detected. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
     * @param string $Label The labels for the detected sensitive content. Valid values:
<li>guns</li>
<li>crowd</li>
<li>police</li>
<li>bloody</li>
<li>banners (sensitive flags)</li>
<li>militant</li>
<li>explosion</li>
<li>terrorists</li>
<li>scenario (sensitive scenes) </li>
     * @param array $SegmentSet The video segments that contain sensitive information.
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

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new MediaContentReviewSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }
    }
}
