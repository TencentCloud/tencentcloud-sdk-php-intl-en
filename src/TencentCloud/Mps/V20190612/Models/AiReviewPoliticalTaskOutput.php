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
 * @method string getLabel() Obtain Video sensitive content result tag. The mapping between the LabelSet parameter in the content moderation template's visual sensitive content task control parameter (https://www.tencentcloud.com/document/api/862/37615?from_cn_redirect=1#AiReviewPoliticalTaskOutput) and the parameter value range of this parameter:
violation_photo:
<li>violation_photo: violation icon.</li>
Other (i.e., politician/entertainment/sport/entrepreneur/scholar/celebrity/military):
<li>politician: sensitive person.</li>
 * @method void setLabel(string $Label) Set Video sensitive content result tag. The mapping between the LabelSet parameter in the content moderation template's visual sensitive content task control parameter (https://www.tencentcloud.com/document/api/862/37615?from_cn_redirect=1#AiReviewPoliticalTaskOutput) and the parameter value range of this parameter:
violation_photo:
<li>violation_photo: violation icon.</li>
Other (i.e., politician/entertainment/sport/entrepreneur/scholar/celebrity/military):
<li>politician: sensitive person.</li>
 * @method array getSegmentSet() Obtain List of video segments suspected of containing sensitive content.
 * @method void setSegmentSet(array $SegmentSet) Set List of video segments suspected of containing sensitive content.
 */
class AiReviewPoliticalTaskOutput extends AbstractModel
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
     * @var string Video sensitive content result tag. The mapping between the LabelSet parameter in the content moderation template's visual sensitive content task control parameter (https://www.tencentcloud.com/document/api/862/37615?from_cn_redirect=1#AiReviewPoliticalTaskOutput) and the parameter value range of this parameter:
violation_photo:
<li>violation_photo: violation icon.</li>
Other (i.e., politician/entertainment/sport/entrepreneur/scholar/celebrity/military):
<li>politician: sensitive person.</li>
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
     * @param string $Label Video sensitive content result tag. The mapping between the LabelSet parameter in the content moderation template's visual sensitive content task control parameter (https://www.tencentcloud.com/document/api/862/37615?from_cn_redirect=1#AiReviewPoliticalTaskOutput) and the parameter value range of this parameter:
violation_photo:
<li>violation_photo: violation icon.</li>
Other (i.e., politician/entertainment/sport/entrepreneur/scholar/celebrity/military):
<li>politician: sensitive person.</li>
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
                $obj = new MediaContentReviewPoliticalSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }
    }
}
