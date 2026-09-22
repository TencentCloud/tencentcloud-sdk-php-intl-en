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
 * Task result type for unsafe information involved in image moderation
 *
 * @method float getConfidence() Obtain Authentication involves scoring unsafe information, with a score from 0 to 100.
 * @method void setConfidence(float $Confidence) Set Authentication involves scoring unsafe information, with a score from 0 to 100.
 * @method string getSuggestion() Obtain Authentication result suggestions involving unsafe information. Value range:
<li>pass;</li>
<li>review;</li>
<li>block.</li>
 * @method void setSuggestion(string $Suggestion) Set Authentication result suggestions involving unsafe information. Value range:
<li>pass;</li>
<li>review;</li>
<li>block.</li>
 * @method string getLabel() Obtain Tag of the authentication result involving unsafe information. Value range:
<li>guns: weapons and firearms;</li>
<li>crowd: crowd gathering;</li>
<li>police: police force;</li>
<li>bloody: graphic violence;</li>
<li>banners: violent and terrorist flags;</li>
<li>explosion: explosions and fires;</li>
<li>scenario: Violent and terrorist visuals.</li>
 * @method void setLabel(string $Label) Set Tag of the authentication result involving unsafe information. Value range:
<li>guns: weapons and firearms;</li>
<li>crowd: crowd gathering;</li>
<li>police: police force;</li>
<li>bloody: graphic violence;</li>
<li>banners: violent and terrorist flags;</li>
<li>explosion: explosions and fires;</li>
<li>scenario: Violent and terrorist visuals.</li>
 */
class TerrorismImageResult extends AbstractModel
{
    /**
     * @var float Authentication involves scoring unsafe information, with a score from 0 to 100.
     */
    public $Confidence;

    /**
     * @var string Authentication result suggestions involving unsafe information. Value range:
<li>pass;</li>
<li>review;</li>
<li>block.</li>
     */
    public $Suggestion;

    /**
     * @var string Tag of the authentication result involving unsafe information. Value range:
<li>guns: weapons and firearms;</li>
<li>crowd: crowd gathering;</li>
<li>police: police force;</li>
<li>bloody: graphic violence;</li>
<li>banners: violent and terrorist flags;</li>
<li>explosion: explosions and fires;</li>
<li>scenario: Violent and terrorist visuals.</li>
     */
    public $Label;

    /**
     * @param float $Confidence Authentication involves scoring unsafe information, with a score from 0 to 100.
     * @param string $Suggestion Authentication result suggestions involving unsafe information. Value range:
<li>pass;</li>
<li>review;</li>
<li>block.</li>
     * @param string $Label Tag of the authentication result involving unsafe information. Value range:
<li>guns: weapons and firearms;</li>
<li>crowd: crowd gathering;</li>
<li>police: police force;</li>
<li>bloody: graphic violence;</li>
<li>banners: violent and terrorist flags;</li>
<li>explosion: explosions and fires;</li>
<li>scenario: Violent and terrorist visuals.</li>
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
    }
}
