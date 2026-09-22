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
 * Mini Program Audio and Video review overview meta information
 *
 * @method string getType() Obtain Audio and video moderation type. 
<li>Porn: The visual involves offensive content,</li>
<li>Porn.Ocr: The text involves offensive content,</li>
<li>Porn.Asr: Sound involves offensive content,</li>
<li>Terrorism: The visual involves unsafe information,</li>
<li>Political: The visual involves inappropriate information,</li>
<li>Political.Ocr: The text involves inappropriate information,</li>
<li>Political.Asr: The sound involves inappropriate information.</li>
 * @method void setType(string $Type) Set Audio and video moderation type. 
<li>Porn: The visual involves offensive content,</li>
<li>Porn.Ocr: The text involves offensive content,</li>
<li>Porn.Asr: Sound involves offensive content,</li>
<li>Terrorism: The visual involves unsafe information,</li>
<li>Political: The visual involves inappropriate information,</li>
<li>Political.Ocr: The text involves inappropriate information,</li>
<li>Political.Asr: The sound involves inappropriate information.</li>
 * @method string getSuggestion() Obtain Audio/video moderation feedback.
<li>pass: confirm normal,</li>
<li>block: confirmed violation,</li>
<li>review: suspected violation.</li>
 * @method void setSuggestion(string $Suggestion) Set Audio/video moderation feedback.
<li>pass: confirm normal,</li>
<li>block: confirmed violation,</li>
<li>review: suspected violation.</li>
 * @method float getConfidence() Obtain Confidence of the audio/video moderation result. Value range: 0-100.
 * @method void setConfidence(float $Confidence) Set Confidence of the audio/video moderation result. Value range: 0-100.
 */
class MediaMiniProgramReviewElem extends AbstractModel
{
    /**
     * @var string Audio and video moderation type. 
<li>Porn: The visual involves offensive content,</li>
<li>Porn.Ocr: The text involves offensive content,</li>
<li>Porn.Asr: Sound involves offensive content,</li>
<li>Terrorism: The visual involves unsafe information,</li>
<li>Political: The visual involves inappropriate information,</li>
<li>Political.Ocr: The text involves inappropriate information,</li>
<li>Political.Asr: The sound involves inappropriate information.</li>
     */
    public $Type;

    /**
     * @var string Audio/video moderation feedback.
<li>pass: confirm normal,</li>
<li>block: confirmed violation,</li>
<li>review: suspected violation.</li>
     */
    public $Suggestion;

    /**
     * @var float Confidence of the audio/video moderation result. Value range: 0-100.
     */
    public $Confidence;

    /**
     * @param string $Type Audio and video moderation type. 
<li>Porn: The visual involves offensive content,</li>
<li>Porn.Ocr: The text involves offensive content,</li>
<li>Porn.Asr: Sound involves offensive content,</li>
<li>Terrorism: The visual involves unsafe information,</li>
<li>Political: The visual involves inappropriate information,</li>
<li>Political.Ocr: The text involves inappropriate information,</li>
<li>Political.Asr: The sound involves inappropriate information.</li>
     * @param string $Suggestion Audio/video moderation feedback.
<li>pass: confirm normal,</li>
<li>block: confirmed violation,</li>
<li>review: suspected violation.</li>
     * @param float $Confidence Confidence of the audio/video moderation result. Value range: 0-100.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
