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
 * Live stream AI content review sound pornographic result
 *
 * @method float getStartPtsTime() Obtain Start PTS time of a suspected segment, in seconds.
 * @method void setStartPtsTime(float $StartPtsTime) Set Start PTS time of a suspected segment, in seconds.
 * @method float getEndPtsTime() Obtain End PTS time of a suspected segment, in seconds.
 * @method void setEndPtsTime(float $EndPtsTime) Set End PTS time of a suspected segment, in seconds.
 * @method float getConfidence() Obtain Suspected segment porn score.
 * @method void setConfidence(float $Confidence) Set Suspected segment porn score.
 * @method string getSuggestion() Obtain Pornographic result suggestion for suspected segment, value ranges from...to...
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method void setSuggestion(string $Suggestion) Set Pornographic result suggestion for suspected segment, value ranges from...to...
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method string getLabel() Obtain Video porn detection result tag, value ranges from...to...
<li>sexual_moan: Moan.</li>
 * @method void setLabel(string $Label) Set Video porn detection result tag, value ranges from...to...
<li>sexual_moan: Moan.</li>
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
     * @var float Suspected segment porn score.
     */
    public $Confidence;

    /**
     * @var string Pornographic result suggestion for suspected segment, value ranges from...to...
<li>pass</li>
<li>review</li>
<li>block</li>
     */
    public $Suggestion;

    /**
     * @var string Video porn detection result tag, value ranges from...to...
<li>sexual_moan: Moan.</li>
     */
    public $Label;

    /**
     * @param float $StartPtsTime Start PTS time of a suspected segment, in seconds.
     * @param float $EndPtsTime End PTS time of a suspected segment, in seconds.
     * @param float $Confidence Suspected segment porn score.
     * @param string $Suggestion Pornographic result suggestion for suspected segment, value ranges from...to...
<li>pass</li>
<li>review</li>
<li>block</li>
     * @param string $Label Video porn detection result tag, value ranges from...to...
<li>sexual_moan: Moan.</li>
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
