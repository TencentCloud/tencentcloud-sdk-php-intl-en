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
 * Live stream AI content moderation pornographic result of sound
 *
 * @method float getStartPtsTime() Obtain Start PTS time of a suspected segment, in seconds.
 * @method void setStartPtsTime(float $StartPtsTime) Set Start PTS time of a suspected segment, in seconds.
 * @method float getEndPtsTime() Obtain End PTS time of a suspected segment, in seconds.
 * @method void setEndPtsTime(float $EndPtsTime) Set End PTS time of a suspected segment, in seconds.
 * @method float getConfidence() Obtain Porn score of the suspected segment.
 * @method void setConfidence(float $Confidence) Set Porn score of the suspected segment.
 * @method string getSuggestion() Obtain Porn detection result suggestion for the suspected segment. Value range:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method void setSuggestion(string $Suggestion) Set Porn detection result suggestion for the suspected segment. Value range:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method string getLabel() Obtain Porn information detection result tag. Value range:
<li>sexual_moan: moan.</li>
 * @method void setLabel(string $Label) Set Porn information detection result tag. Value range:
<li>sexual_moan: moan.</li>
 */
class LiveStreamAiReviewVoicePornResult extends AbstractModel
{
    /**
     * @var float Start PTS time of a suspected segment, in seconds.
     */
    public $StartPtsTime;

    /**
     * @var float End PTS time of a suspected segment, in seconds.
     */
    public $EndPtsTime;

    /**
     * @var float Porn score of the suspected segment.
     */
    public $Confidence;

    /**
     * @var string Porn detection result suggestion for the suspected segment. Value range:
<li>pass</li>
<li>review</li>
<li>block</li>
     */
    public $Suggestion;

    /**
     * @var string Porn information detection result tag. Value range:
<li>sexual_moan: moan.</li>
     */
    public $Label;

    /**
     * @param float $StartPtsTime Start PTS time of a suspected segment, in seconds.
     * @param float $EndPtsTime End PTS time of a suspected segment, in seconds.
     * @param float $Confidence Porn score of the suspected segment.
     * @param string $Suggestion Porn detection result suggestion for the suspected segment. Value range:
<li>pass</li>
<li>review</li>
<li>block</li>
     * @param string $Label Porn information detection result tag. Value range:
<li>sexual_moan: moan.</li>
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
        if (array_key_exists("StartPtsTime",$param) and $param["StartPtsTime"] !== null) {
            $this->StartPtsTime = $param["StartPtsTime"];
        }

        if (array_key_exists("EndPtsTime",$param) and $param["EndPtsTime"] !== null) {
            $this->EndPtsTime = $param["EndPtsTime"];
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
    }
}
