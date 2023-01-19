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
 * The moderation result for terrorist content in an image.
 *
 * @method float getConfidence() Obtain The confidence score for the moderation result. Value range: 0-100.
 * @method void setConfidence(float $Confidence) Set The confidence score for the moderation result. Value range: 0-100.
 * @method string getSuggestion() Obtain The suggestion for handling the detected terrorist content. Valid values:
<li>pass/li>
<li>review</li>
<li>block</li>
 * @method void setSuggestion(string $Suggestion) Set The suggestion for handling the detected terrorist content. Valid values:
<li>pass/li>
<li>review</li>
<li>block</li>
 * @method string getLabel() Obtain The label for the detected terrorist content. Valid values:
<li>`guns`</li>
<li>`crowd`</li>
<li>`police`</li>
<li>`bloody`</li>
<li>`banners`</li>
<li>`explosion`</li>
<li>`scenario` (terrorist scenes) </li>
 * @method void setLabel(string $Label) Set The label for the detected terrorist content. Valid values:
<li>`guns`</li>
<li>`crowd`</li>
<li>`police`</li>
<li>`bloody`</li>
<li>`banners`</li>
<li>`explosion`</li>
<li>`scenario` (terrorist scenes) </li>
 */
class TerrorismImageResult extends AbstractModel
{
    /**
     * @var float The confidence score for the moderation result. Value range: 0-100.
     */
    public $Confidence;

    /**
     * @var string The suggestion for handling the detected terrorist content. Valid values:
<li>pass/li>
<li>review</li>
<li>block</li>
     */
    public $Suggestion;

    /**
     * @var string The label for the detected terrorist content. Valid values:
<li>`guns`</li>
<li>`crowd`</li>
<li>`police`</li>
<li>`bloody`</li>
<li>`banners`</li>
<li>`explosion`</li>
<li>`scenario` (terrorist scenes) </li>
     */
    public $Label;

    /**
     * @param float $Confidence The confidence score for the moderation result. Value range: 0-100.
     * @param string $Suggestion The suggestion for handling the detected terrorist content. Valid values:
<li>pass/li>
<li>review</li>
<li>block</li>
     * @param string $Label The label for the detected terrorist content. Valid values:
<li>`guns`</li>
<li>`crowd`</li>
<li>`police`</li>
<li>`bloody`</li>
<li>`banners`</li>
<li>`explosion`</li>
<li>`scenario` (terrorist scenes) </li>
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
