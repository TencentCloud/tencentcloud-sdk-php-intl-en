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
 * Ocr (Optical Character Recognition) text contains prohibited information
 *
 * @method float getConfidence() Obtain Ocr text involves prohibited content scoring, with a score ranging from 0 to 100.
 * @method void setConfidence(float $Confidence) Set Ocr text involves prohibited content scoring, with a score ranging from 0 to 100.
 * @method string getSuggestion() Obtain Ocr text prohibited content result suggestion, value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method void setSuggestion(string $Suggestion) Set Ocr text prohibited content result suggestion, value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method array getSegmentSet() Obtain Video segment list with Ocr text suspected of prohibition violations.
 * @method void setSegmentSet(array $SegmentSet) Set Video segment list with Ocr text suspected of prohibition violations.
 */
class AiReviewProhibitedOcrTaskOutput extends AbstractModel
{
    /**
     * @var float Ocr text involves prohibited content scoring, with a score ranging from 0 to 100.
     */
    public $Confidence;

    /**
     * @var string Ocr text prohibited content result suggestion, value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     */
    public $Suggestion;

    /**
     * @var array Video segment list with Ocr text suspected of prohibition violations.
     */
    public $SegmentSet;

    /**
     * @param float $Confidence Ocr text involves prohibited content scoring, with a score ranging from 0 to 100.
     * @param string $Suggestion Ocr text prohibited content result suggestion, value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     * @param array $SegmentSet Video segment list with Ocr text suspected of prohibition violations.
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

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new MediaContentReviewOcrTextSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }
    }
}
