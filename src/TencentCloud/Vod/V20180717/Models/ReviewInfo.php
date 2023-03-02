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
 * Moderation details.
 *
 * @method integer getDefinition() Obtain The moderation template ID.
 * @method void setDefinition(integer $Definition) Set The moderation template ID.
 * @method string getSuggestion() Obtain The suggestion. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method void setSuggestion(string $Suggestion) Set The suggestion. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method array getTypeSet() Obtain The moderation type in the format of `Form.Label`. This parameter is valid if `Suggestion` is `review` or `block`.
`Form` indicates the type of inappropriate content detected. Valid values:
<li>`Image` (people or icons in images)</li>
<li>`OCR` (text in images)</li>
<li>`ASR` (speech)</li>
<li>`Voice`</li>
`Label` indicates the violation label. Valid values:
<li>`Porn` (pornographic content)</li>
<li>`Terror` (terrorist content)</li>
<li>`Polity` (politically sensitive content)</li>
<li>`Ad` (advertisement)</li>
<li>`Illegal` (illegal content)</li>
<li>`Abuse`</li>
<li>`Moan`</li>
 * @method void setTypeSet(array $TypeSet) Set The moderation type in the format of `Form.Label`. This parameter is valid if `Suggestion` is `review` or `block`.
`Form` indicates the type of inappropriate content detected. Valid values:
<li>`Image` (people or icons in images)</li>
<li>`OCR` (text in images)</li>
<li>`ASR` (speech)</li>
<li>`Voice`</li>
`Label` indicates the violation label. Valid values:
<li>`Porn` (pornographic content)</li>
<li>`Terror` (terrorist content)</li>
<li>`Polity` (politically sensitive content)</li>
<li>`Ad` (advertisement)</li>
<li>`Illegal` (illegal content)</li>
<li>`Abuse`</li>
<li>`Moan`</li>
 * @method string getReviewTime() Obtain The moderation time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setReviewTime(string $ReviewTime) Set The moderation time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class ReviewInfo extends AbstractModel
{
    /**
     * @var integer The moderation template ID.
     */
    public $Definition;

    /**
     * @var string The suggestion. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
     */
    public $Suggestion;

    /**
     * @var array The moderation type in the format of `Form.Label`. This parameter is valid if `Suggestion` is `review` or `block`.
`Form` indicates the type of inappropriate content detected. Valid values:
<li>`Image` (people or icons in images)</li>
<li>`OCR` (text in images)</li>
<li>`ASR` (speech)</li>
<li>`Voice`</li>
`Label` indicates the violation label. Valid values:
<li>`Porn` (pornographic content)</li>
<li>`Terror` (terrorist content)</li>
<li>`Polity` (politically sensitive content)</li>
<li>`Ad` (advertisement)</li>
<li>`Illegal` (illegal content)</li>
<li>`Abuse`</li>
<li>`Moan`</li>
     */
    public $TypeSet;

    /**
     * @var string The moderation time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $ReviewTime;

    /**
     * @param integer $Definition The moderation template ID.
     * @param string $Suggestion The suggestion. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
     * @param array $TypeSet The moderation type in the format of `Form.Label`. This parameter is valid if `Suggestion` is `review` or `block`.
`Form` indicates the type of inappropriate content detected. Valid values:
<li>`Image` (people or icons in images)</li>
<li>`OCR` (text in images)</li>
<li>`ASR` (speech)</li>
<li>`Voice`</li>
`Label` indicates the violation label. Valid values:
<li>`Porn` (pornographic content)</li>
<li>`Terror` (terrorist content)</li>
<li>`Polity` (politically sensitive content)</li>
<li>`Ad` (advertisement)</li>
<li>`Illegal` (illegal content)</li>
<li>`Abuse`</li>
<li>`Moan`</li>
     * @param string $ReviewTime The moderation time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("TypeSet",$param) and $param["TypeSet"] !== null) {
            $this->TypeSet = $param["TypeSet"];
        }

        if (array_key_exists("ReviewTime",$param) and $param["ReviewTime"] !== null) {
            $this->ReviewTime = $param["ReviewTime"];
        }
    }
}
