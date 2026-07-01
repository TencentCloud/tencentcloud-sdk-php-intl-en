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
 * AIGC quota
 *
 * @method string getQuotaType() Obtain <p>Quota type</p><p>Enumeration value:</p><ul><li>Image: AIGC image generation task</li><li>Video: AIGC video generation task</li><li>Text: AIGC text generation task</li></ul>
 * @method void setQuotaType(string $QuotaType) Set <p>Quota type</p><p>Enumeration value:</p><ul><li>Image: AIGC image generation task</li><li>Video: AIGC video generation task</li><li>Text: AIGC text generation task</li></ul>
 * @method string getApiToken() Obtain <p>Valid only when QuotaLimit=Text, used to select the ApiToken that needs quota limit</p>
 * @method void setApiToken(string $ApiToken) Set <p>Valid only when QuotaLimit=Text, used to select the ApiToken that needs quota limit</p>
 * @method integer getQuotaLimit() Obtain <p>Number of task quotas</p><p>Unit:</p><ul><li>When QuotaLimit=Image, unit: piece</li><li>When QuotaLimit=Video, unit: seconds</li><li>When QuotaLimit=Text, unit: token</li></ul>
 * @method void setQuotaLimit(integer $QuotaLimit) Set <p>Number of task quotas</p><p>Unit:</p><ul><li>When QuotaLimit=Image, unit: piece</li><li>When QuotaLimit=Video, unit: seconds</li><li>When QuotaLimit=Text, unit: token</li></ul>
 * @method integer getUsage() Obtain <p>Amount already used</p><p>Unit:</p><ul><li>When QuotaLimit=Image, unit: piece</li><li>When QuotaLimit=Video, unit: seconds</li><li>When QuotaLimit=Text, unit: token</li></ul>
 * @method void setUsage(integer $Usage) Set <p>Amount already used</p><p>Unit:</p><ul><li>When QuotaLimit=Image, unit: piece</li><li>When QuotaLimit=Video, unit: seconds</li><li>When QuotaLimit=Text, unit: token</li></ul>
 */
class AigcQuotaItem extends AbstractModel
{
    /**
     * @var string <p>Quota type</p><p>Enumeration value:</p><ul><li>Image: AIGC image generation task</li><li>Video: AIGC video generation task</li><li>Text: AIGC text generation task</li></ul>
     */
    public $QuotaType;

    /**
     * @var string <p>Valid only when QuotaLimit=Text, used to select the ApiToken that needs quota limit</p>
     */
    public $ApiToken;

    /**
     * @var integer <p>Number of task quotas</p><p>Unit:</p><ul><li>When QuotaLimit=Image, unit: piece</li><li>When QuotaLimit=Video, unit: seconds</li><li>When QuotaLimit=Text, unit: token</li></ul>
     */
    public $QuotaLimit;

    /**
     * @var integer <p>Amount already used</p><p>Unit:</p><ul><li>When QuotaLimit=Image, unit: piece</li><li>When QuotaLimit=Video, unit: seconds</li><li>When QuotaLimit=Text, unit: token</li></ul>
     */
    public $Usage;

    /**
     * @param string $QuotaType <p>Quota type</p><p>Enumeration value:</p><ul><li>Image: AIGC image generation task</li><li>Video: AIGC video generation task</li><li>Text: AIGC text generation task</li></ul>
     * @param string $ApiToken <p>Valid only when QuotaLimit=Text, used to select the ApiToken that needs quota limit</p>
     * @param integer $QuotaLimit <p>Number of task quotas</p><p>Unit:</p><ul><li>When QuotaLimit=Image, unit: piece</li><li>When QuotaLimit=Video, unit: seconds</li><li>When QuotaLimit=Text, unit: token</li></ul>
     * @param integer $Usage <p>Amount already used</p><p>Unit:</p><ul><li>When QuotaLimit=Image, unit: piece</li><li>When QuotaLimit=Video, unit: seconds</li><li>When QuotaLimit=Text, unit: token</li></ul>
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
        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("ApiToken",$param) and $param["ApiToken"] !== null) {
            $this->ApiToken = $param["ApiToken"];
        }

        if (array_key_exists("QuotaLimit",$param) and $param["QuotaLimit"] !== null) {
            $this->QuotaLimit = $param["QuotaLimit"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }
    }
}
