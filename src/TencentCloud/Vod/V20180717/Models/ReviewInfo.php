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
 * Moderation information.
 *
 * @method integer getDefinition() Obtain Content review template ID.
 * @method void setDefinition(integer $Definition) Set Content review template ID.
 * @method string getSuggestion() Obtain Review result suggestion. Valid values:
<li>pass: it is recommended to pass;</li>
<li>review: suggest re-examination;</li>
<li>block: suggest banning.</li>
 * @method void setSuggestion(string $Suggestion) Set Review result suggestion. Valid values:
<li>pass: it is recommended to pass;</li>
<li>review: suggest re-examination;</li>
<li>block: suggest banning.</li>
 * @method array getTypeSet() Obtain Moderation type. Valid when `Suggestion` is `review` or `block`. Format: `Form.Label`.
Form refers to prohibited forms. Value range:
<li>Image: people or icons in the image;</li>
<li>OCR: text on the screen;</li>
<li>ASR: text in speech.</li>
<li>Voice: sound.</li>
Label indicates prohibited tags. Value range:
<li>Porn: Pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Ad: advertisement;</li>
<li>Illegal: illegal;</li>
<li>Abuse: abusive language;</li>
<li>Moan: panting.</li>
 * @method void setTypeSet(array $TypeSet) Set Moderation type. Valid when `Suggestion` is `review` or `block`. Format: `Form.Label`.
Form refers to prohibited forms. Value range:
<li>Image: people or icons in the image;</li>
<li>OCR: text on the screen;</li>
<li>ASR: text in speech.</li>
<li>Voice: sound.</li>
Label indicates prohibited tags. Value range:
<li>Porn: Pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Ad: advertisement;</li>
<li>Illegal: illegal;</li>
<li>Abuse: abusive language;</li>
<li>Moan: panting.</li>
 * @method string getReviewTime() Obtain Moderation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setReviewTime(string $ReviewTime) Set Moderation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class ReviewInfo extends AbstractModel
{
    /**
     * @var integer Content review template ID.
     */
    public $Definition;

    /**
     * @var string Review result suggestion. Valid values:
<li>pass: it is recommended to pass;</li>
<li>review: suggest re-examination;</li>
<li>block: suggest banning.</li>
     */
    public $Suggestion;

    /**
     * @var array Moderation type. Valid when `Suggestion` is `review` or `block`. Format: `Form.Label`.
Form refers to prohibited forms. Value range:
<li>Image: people or icons in the image;</li>
<li>OCR: text on the screen;</li>
<li>ASR: text in speech.</li>
<li>Voice: sound.</li>
Label indicates prohibited tags. Value range:
<li>Porn: Pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Ad: advertisement;</li>
<li>Illegal: illegal;</li>
<li>Abuse: abusive language;</li>
<li>Moan: panting.</li>
     */
    public $TypeSet;

    /**
     * @var string Moderation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $ReviewTime;

    /**
     * @param integer $Definition Content review template ID.
     * @param string $Suggestion Review result suggestion. Valid values:
<li>pass: it is recommended to pass;</li>
<li>review: suggest re-examination;</li>
<li>block: suggest banning.</li>
     * @param array $TypeSet Moderation type. Valid when `Suggestion` is `review` or `block`. Format: `Form.Label`.
Form refers to prohibited forms. Value range:
<li>Image: people or icons in the image;</li>
<li>OCR: text on the screen;</li>
<li>ASR: text in speech.</li>
<li>Voice: sound.</li>
Label indicates prohibited tags. Value range:
<li>Porn: Pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Ad: advertisement;</li>
<li>Illegal: illegal;</li>
<li>Abuse: abusive language;</li>
<li>Moan: panting.</li>
     * @param string $ReviewTime Moderation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
