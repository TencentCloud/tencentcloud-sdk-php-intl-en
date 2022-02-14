<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 *  
 *
 * @method string getType() Obtain Audit type. 
<li>Porn: porn image,</li>
<li>Porn.Ocr: porn text,</li>
<li>Porn.Asr: porn speech,</li>
<li>Terrorism: terrorism image,</li>
<li>Political: politically sensitive image,</li>
<li>Political.Ocr: politically sensitive text</li>
<li>Political.Asr: politically sensitive speech</li>
 * @method void setType(string $Type) Set Audit type. 
<li>Porn: porn image,</li>
<li>Porn.Ocr: porn text,</li>
<li>Porn.Asr: porn speech,</li>
<li>Terrorism: terrorism image,</li>
<li>Political: politically sensitive image,</li>
<li>Political.Ocr: politically sensitive text</li>
<li>Political.Asr: politically sensitive speech</li>
 * @method string getSuggestion() Obtain Audit suggestion.
<li>pass: normal,</li>
<li>block: violating,</li>
<li>review: suspected of violation.</li>
 * @method void setSuggestion(string $Suggestion) Set Audit suggestion.
<li>pass: normal,</li>
<li>block: violating,</li>
<li>review: suspected of violation.</li>
 * @method float getConfidence() Obtain Confidence of audit result between 0 and 100.
 * @method void setConfidence(float $Confidence) Set Confidence of audit result between 0 and 100.
 */
class MediaMiniProgramReviewElem extends AbstractModel
{
    /**
     * @var string Audit type. 
<li>Porn: porn image,</li>
<li>Porn.Ocr: porn text,</li>
<li>Porn.Asr: porn speech,</li>
<li>Terrorism: terrorism image,</li>
<li>Political: politically sensitive image,</li>
<li>Political.Ocr: politically sensitive text</li>
<li>Political.Asr: politically sensitive speech</li>
     */
    public $Type;

    /**
     * @var string Audit suggestion.
<li>pass: normal,</li>
<li>block: violating,</li>
<li>review: suspected of violation.</li>
     */
    public $Suggestion;

    /**
     * @var float Confidence of audit result between 0 and 100.
     */
    public $Confidence;

    /**
     * @param string $Type Audit type. 
<li>Porn: porn image,</li>
<li>Porn.Ocr: porn text,</li>
<li>Porn.Asr: porn speech,</li>
<li>Terrorism: terrorism image,</li>
<li>Political: politically sensitive image,</li>
<li>Political.Ocr: politically sensitive text</li>
<li>Political.Asr: politically sensitive speech</li>
     * @param string $Suggestion Audit suggestion.
<li>pass: normal,</li>
<li>block: violating,</li>
<li>review: suspected of violation.</li>
     * @param float $Confidence Confidence of audit result between 0 and 100.
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
