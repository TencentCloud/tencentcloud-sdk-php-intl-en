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
 * Pornographic information in Asr text
 *
 * @method float getConfidence() Obtain Porn score of the Asr text. The score ranges from 0 to 100.
 * @method void setConfidence(float $Confidence) Set Porn score of the Asr text. The score ranges from 0 to 100.
 * @method string getSuggestion() Obtain Asr text porn detection result suggestion. Value ranges from pass to review to block.
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method void setSuggestion(string $Suggestion) Set Asr text porn detection result suggestion. Value ranges from pass to review to block.
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method array getSegmentSet() Obtain List of video segments whose Asr text is suspected of involving pornography.
 * @method void setSegmentSet(array $SegmentSet) Set List of video segments whose Asr text is suspected of involving pornography.
 */
class AiReviewPornAsrTaskOutput extends AbstractModel
{
    /**
     * @var float Porn score of the Asr text. The score ranges from 0 to 100.
     */
    public $Confidence;

    /**
     * @var string Asr text porn detection result suggestion. Value ranges from pass to review to block.
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     */
    public $Suggestion;

    /**
     * @var array List of video segments whose Asr text is suspected of involving pornography.
     */
    public $SegmentSet;

    /**
     * @param float $Confidence Porn score of the Asr text. The score ranges from 0 to 100.
     * @param string $Suggestion Asr text porn detection result suggestion. Value ranges from pass to review to block.
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     * @param array $SegmentSet List of video segments whose Asr text is suspected of involving pornography.
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
                $obj = new MediaContentReviewAsrTextSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }
    }
}
