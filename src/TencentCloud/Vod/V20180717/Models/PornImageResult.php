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
 * Task result type of image moderation involving offensive content
 *
 * @method float getConfidence() Obtain Score of authentication involving offensive content. Value range: 0–100.
 * @method void setConfidence(float $Confidence) Set Score of authentication involving offensive content. Value range: 0–100.
 * @method string getSuggestion() Obtain Result suggestions for authenticating offensive content. Value range:
<li>pass;</li>
<li>review;</li>
<li>block.</li>
 * @method void setSuggestion(string $Suggestion) Set Result suggestions for authenticating offensive content. Value range:
<li>pass;</li>
<li>review;</li>
<li>block.</li>
 * @method string getLabel() Obtain Result tag for authenticating offensive content. Value range:
<li>porn: pornography;</li>
<li>sexy: sexy;</li>
<li>vulgar: Vulgar;</li>
<li>intimacy: intimate behavior.</li>
 * @method void setLabel(string $Label) Set Result tag for authenticating offensive content. Value range:
<li>porn: pornography;</li>
<li>sexy: sexy;</li>
<li>vulgar: Vulgar;</li>
<li>intimacy: intimate behavior.</li>
 */
class PornImageResult extends AbstractModel
{
    /**
     * @var float Score of authentication involving offensive content. Value range: 0–100.
     */
    public $Confidence;

    /**
     * @var string Result suggestions for authenticating offensive content. Value range:
<li>pass;</li>
<li>review;</li>
<li>block.</li>
     */
    public $Suggestion;

    /**
     * @var string Result tag for authenticating offensive content. Value range:
<li>porn: pornography;</li>
<li>sexy: sexy;</li>
<li>vulgar: Vulgar;</li>
<li>intimacy: intimate behavior.</li>
     */
    public $Label;

    /**
     * @param float $Confidence Score of authentication involving offensive content. Value range: 0–100.
     * @param string $Suggestion Result suggestions for authenticating offensive content. Value range:
<li>pass;</li>
<li>review;</li>
<li>block.</li>
     * @param string $Label Result tag for authenticating offensive content. Value range:
<li>porn: pornography;</li>
<li>sexy: sexy;</li>
<li>vulgar: Vulgar;</li>
<li>intimacy: intimate behavior.</li>
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
