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
 * Sensitive information
 *
 * @method float getConfidence() Obtain Video sensitive content score, ranging from 0 to 100.
 * @method void setConfidence(float $Confidence) Set Video sensitive content score, ranging from 0 to 100.
 * @method string getSuggestion() Obtain Result Suggestions for sensitive content, value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method void setSuggestion(string $Suggestion) Set Result Suggestions for sensitive content, value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method string getLabel() Obtain Video sensitive content detection result tag, permissible range:
<li>guns: weapons and firearms.</li>
<li>crowd: crowd gathering.</li>
<li>police: police force.</li>
<li>bloody: graphic violence.</li>
<li>banners: sensitive flags.</li>
<li>militant: militant.</li>
<li>explosion: explosions and fires.</li>
<li>terrorists: sensitive persons.</li>
<li>scenario: Sensitive content.</li>
 * @method void setLabel(string $Label) Set Video sensitive content detection result tag, permissible range:
<li>guns: weapons and firearms.</li>
<li>crowd: crowd gathering.</li>
<li>police: police force.</li>
<li>bloody: graphic violence.</li>
<li>banners: sensitive flags.</li>
<li>militant: militant.</li>
<li>explosion: explosions and fires.</li>
<li>terrorists: sensitive persons.</li>
<li>scenario: Sensitive content.</li>
 * @method array getSegmentSet() Obtain List of video segments suspected of containing sensitive content.
 * @method void setSegmentSet(array $SegmentSet) Set List of video segments suspected of containing sensitive content.
 */
class AiReviewTerrorismTaskOutput extends AbstractModel
{
    /**
     * @var float Video sensitive content score, ranging from 0 to 100.
     */
    public $Confidence;

    /**
     * @var string Result Suggestions for sensitive content, value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     */
    public $Suggestion;

    /**
     * @var string Video sensitive content detection result tag, permissible range:
<li>guns: weapons and firearms.</li>
<li>crowd: crowd gathering.</li>
<li>police: police force.</li>
<li>bloody: graphic violence.</li>
<li>banners: sensitive flags.</li>
<li>militant: militant.</li>
<li>explosion: explosions and fires.</li>
<li>terrorists: sensitive persons.</li>
<li>scenario: Sensitive content.</li>
     */
    public $Label;

    /**
     * @var array List of video segments suspected of containing sensitive content.
     */
    public $SegmentSet;

    /**
     * @param float $Confidence Video sensitive content score, ranging from 0 to 100.
     * @param string $Suggestion Result Suggestions for sensitive content, value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     * @param string $Label Video sensitive content detection result tag, permissible range:
<li>guns: weapons and firearms.</li>
<li>crowd: crowd gathering.</li>
<li>police: police force.</li>
<li>bloody: graphic violence.</li>
<li>banners: sensitive flags.</li>
<li>militant: militant.</li>
<li>explosion: explosions and fires.</li>
<li>terrorists: sensitive persons.</li>
<li>scenario: Sensitive content.</li>
     * @param array $SegmentSet List of video segments suspected of containing sensitive content.
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
