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
 * DescribeAigcQuotas request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b></p>
 * @method string getQuotaType() Obtain <p>Quota type</p><p>Enumeration value:</p><ul><li>Image: AIGC image generation task</li><li>Video: AIGC video generation task</li><li>Text: AIGC text generation task</li></ul>
 * @method void setQuotaType(string $QuotaType) Set <p>Quota type</p><p>Enumeration value:</p><ul><li>Image: AIGC image generation task</li><li>Video: AIGC video generation task</li><li>Text: AIGC text generation task</li></ul>
 * @method string getApiToken() Obtain <p>Valid only when QuotaLimit=Text, used to select the ApiToken that needs quota limit</p>
 * @method void setApiToken(string $ApiToken) Set <p>Valid only when QuotaLimit=Text, used to select the ApiToken that needs quota limit</p>
 * @method integer getLimit() Obtain <p>Number of records returned in pages, displaying entries from Offset to Offset+Limit-1.</p><p>Value ranges from 1 to 100.</p><p>Default value: 10.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of records returned in pages, displaying entries from Offset to Offset+Limit-1.</p><p>Value ranges from 1 to 100.</p><p>Default value: 10.</p>
 * @method integer getOffset() Obtain <p>Starting offset amount for pagination return. Default value: 0. Returns entries from Offset to Offset + Limit - 1.</p><p>Default value: 0</p>
 * @method void setOffset(integer $Offset) Set <p>Starting offset amount for pagination return. Default value: 0. Returns entries from Offset to Offset + Limit - 1.</p><p>Default value: 0</p>
 */
class DescribeAigcQuotasRequest extends AbstractModel
{
    /**
     * @var integer <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Quota type</p><p>Enumeration value:</p><ul><li>Image: AIGC image generation task</li><li>Video: AIGC video generation task</li><li>Text: AIGC text generation task</li></ul>
     */
    public $QuotaType;

    /**
     * @var string <p>Valid only when QuotaLimit=Text, used to select the ApiToken that needs quota limit</p>
     */
    public $ApiToken;

    /**
     * @var integer <p>Number of records returned in pages, displaying entries from Offset to Offset+Limit-1.</p><p>Value ranges from 1 to 100.</p><p>Default value: 10.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Starting offset amount for pagination return. Default value: 0. Returns entries from Offset to Offset + Limit - 1.</p><p>Default value: 0</p>
     */
    public $Offset;

    /**
     * @param integer $SubAppId <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b></p>
     * @param string $QuotaType <p>Quota type</p><p>Enumeration value:</p><ul><li>Image: AIGC image generation task</li><li>Video: AIGC video generation task</li><li>Text: AIGC text generation task</li></ul>
     * @param string $ApiToken <p>Valid only when QuotaLimit=Text, used to select the ApiToken that needs quota limit</p>
     * @param integer $Limit <p>Number of records returned in pages, displaying entries from Offset to Offset+Limit-1.</p><p>Value ranges from 1 to 100.</p><p>Default value: 10.</p>
     * @param integer $Offset <p>Starting offset amount for pagination return. Default value: 0. Returns entries from Offset to Offset + Limit - 1.</p><p>Default value: 0</p>
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

        if (array_key_exists("ApiToken",$param) and $param["ApiToken"] !== null) {
            $this->ApiToken = $param["ApiToken"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
