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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Suspected segment of Asr text in audio/video moderation
 *
 * @method float getStartTimeOffset() Obtain Start time offset of a suspected segment, in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of a suspected segment, in seconds.
 * @method float getEndTimeOffset() Obtain End time offset of a suspected segment, in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of a suspected segment, in seconds.
 * @method float getConfidence() Obtain Confidence degree of the suspected segment.
 * @method void setConfidence(float $Confidence) Set Confidence degree of the suspected segment.
 * @method string getSuggestion() Obtain Result suggestion for moderation of suspected audio and video segments. Permissible range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method void setSuggestion(string $Suggestion) Set Result suggestion for moderation of suspected audio and video segments. Permissible range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method array getKeywordSet() Obtain List of suspicious keywords.
 * @method void setKeywordSet(array $KeywordSet) Set List of suspicious keywords.
 */
class MediaContentReviewAsrTextSegmentItem extends AbstractModel
{
    /**
     * @var float Start time offset of a suspected segment, in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of a suspected segment, in seconds.
     */
    public $EndTimeOffset;

    /**
     * @var float Confidence degree of the suspected segment.
     */
    public $Confidence;

    /**
     * @var string Result suggestion for moderation of suspected audio and video segments. Permissible range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     */
    public $Suggestion;

    /**
     * @var array List of suspicious keywords.
     */
    public $KeywordSet;

    /**
     * @param float $StartTimeOffset Start time offset of a suspected segment, in seconds.
     * @param float $EndTimeOffset End time offset of a suspected segment, in seconds.
     * @param float $Confidence Confidence degree of the suspected segment.
     * @param string $Suggestion Result suggestion for moderation of suspected audio and video segments. Permissible range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     * @param array $KeywordSet List of suspicious keywords.
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
        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("KeywordSet",$param) and $param["KeywordSet"] !== null) {
            $this->KeywordSet = $param["KeywordSet"];
        }
    }
}
