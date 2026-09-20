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
 * ModifyAigcQuota request structure.
 *
 * @method integer getSubAppId() Obtain <p><strong>VOD application ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</strong></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><strong>VOD application ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</strong></p>
 * @method string getQuotaType() Obtain <p>Quota type</p><p>Enumeration values:</p><ul><li>Image: AIGC image task</li><li>Video: AIGC video task</li><li>Text: AIGC text task</li></ul>
 * @method void setQuotaType(string $QuotaType) Set <p>Quota type</p><p>Enumeration values:</p><ul><li>Image: AIGC image task</li><li>Video: AIGC video task</li><li>Text: AIGC text task</li></ul>
 * @method integer getQuotaLimit() Obtain <p>Quota quantity of the task.</p><p>Unit: images/second/tokens.</p><ul><li>When QuotaType is Image, the unit is images;</li><li>When QuotaType is Video, the unit is seconds;</li><li>When QuotaType is Text, the unit is tokens.</li></ul>
 * @method void setQuotaLimit(integer $QuotaLimit) Set <p>Quota quantity of the task.</p><p>Unit: images/second/tokens.</p><ul><li>When QuotaType is Image, the unit is images;</li><li>When QuotaType is Video, the unit is seconds;</li><li>When QuotaType is Text, the unit is tokens.</li></ul>
 * @method string getApiToken() Obtain <p>Valid only when QuotaType=Text. Used to select the ApiToken that needs a quota limit.</p>
 * @method void setApiToken(string $ApiToken) Set <p>Valid only when QuotaType=Text. Used to select the ApiToken that needs a quota limit.</p>
 */
class ModifyAigcQuotaRequest extends AbstractModel
{
    /**
     * @var integer <p><strong>VOD application ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</strong></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Quota type</p><p>Enumeration values:</p><ul><li>Image: AIGC image task</li><li>Video: AIGC video task</li><li>Text: AIGC text task</li></ul>
     */
    public $QuotaType;

    /**
     * @var integer <p>Quota quantity of the task.</p><p>Unit: images/second/tokens.</p><ul><li>When QuotaType is Image, the unit is images;</li><li>When QuotaType is Video, the unit is seconds;</li><li>When QuotaType is Text, the unit is tokens.</li></ul>
     */
    public $QuotaLimit;

    /**
     * @var string <p>Valid only when QuotaType=Text. Used to select the ApiToken that needs a quota limit.</p>
     */
    public $ApiToken;

    /**
     * @param integer $SubAppId <p><strong>VOD application ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</strong></p>
     * @param string $QuotaType <p>Quota type</p><p>Enumeration values:</p><ul><li>Image: AIGC image task</li><li>Video: AIGC video task</li><li>Text: AIGC text task</li></ul>
     * @param integer $QuotaLimit <p>Quota quantity of the task.</p><p>Unit: images/second/tokens.</p><ul><li>When QuotaType is Image, the unit is images;</li><li>When QuotaType is Video, the unit is seconds;</li><li>When QuotaType is Text, the unit is tokens.</li></ul>
     * @param string $ApiToken <p>Valid only when QuotaType=Text. Used to select the ApiToken that needs a quota limit.</p>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("QuotaLimit",$param) and $param["QuotaLimit"] !== null) {
            $this->QuotaLimit = $param["QuotaLimit"];
        }

        if (array_key_exists("ApiToken",$param) and $param["ApiToken"] !== null) {
            $this->ApiToken = $param["ApiToken"];
        }
    }
}
