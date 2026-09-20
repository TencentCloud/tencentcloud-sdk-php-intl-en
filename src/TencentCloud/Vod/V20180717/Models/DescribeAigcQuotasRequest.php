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
 * @method integer getSubAppId() Obtain <p><strong>VOD application ID. For customers who activate VOD services on or after December 25, 2023, when accessing resources in VOD applications (whether the default application or a newly created application), this field must be filled in with the app ID.</strong></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><strong>VOD application ID. For customers who activate VOD services on or after December 25, 2023, when accessing resources in VOD applications (whether the default application or a newly created application), this field must be filled in with the app ID.</strong></p>
 * @method string getQuotaType() Obtain <p>Quota type</p><p>Enumeration values:</p><ul><li>Image: AIGC image task</li><li>Video: AIGC video task</li><li>Text: AIGC text task</li></ul>
 * @method void setQuotaType(string $QuotaType) Set <p>Quota type</p><p>Enumeration values:</p><ul><li>Image: AIGC image task</li><li>Video: AIGC video task</li><li>Text: AIGC text task</li></ul>
 * @method string getApiToken() Obtain <p>Valid only when QuotaType is Text. Used to select the ApiToken for quota limit</p>
 * @method void setApiToken(string $ApiToken) Set <p>Valid only when QuotaType is Text. Used to select the ApiToken for quota limit</p>
 * @method integer getLimit() Obtain <p>Number of records returned in pages, from the Offset-th to the (Offset+Limit-1)-th record.</p><p>Value range: [1, 100]</p><p>Default value: 10</p>
 * @method void setLimit(integer $Limit) Set <p>Number of records returned in pages, from the Offset-th to the (Offset+Limit-1)-th record.</p><p>Value range: [1, 100]</p><p>Default value: 10</p>
 * @method integer getOffset() Obtain <p>Starting offset amount for pagination return. Default value: 0. It returns records from Offset to Offset + Limit - 1.</p><p>Default value: 0</p>
 * @method void setOffset(integer $Offset) Set <p>Starting offset amount for pagination return. Default value: 0. It returns records from Offset to Offset + Limit - 1.</p><p>Default value: 0</p>
 */
class DescribeAigcQuotasRequest extends AbstractModel
{
    /**
     * @var integer <p><strong>VOD application ID. For customers who activate VOD services on or after December 25, 2023, when accessing resources in VOD applications (whether the default application or a newly created application), this field must be filled in with the app ID.</strong></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Quota type</p><p>Enumeration values:</p><ul><li>Image: AIGC image task</li><li>Video: AIGC video task</li><li>Text: AIGC text task</li></ul>
     */
    public $QuotaType;

    /**
     * @var string <p>Valid only when QuotaType is Text. Used to select the ApiToken for quota limit</p>
     */
    public $ApiToken;

    /**
     * @var integer <p>Number of records returned in pages, from the Offset-th to the (Offset+Limit-1)-th record.</p><p>Value range: [1, 100]</p><p>Default value: 10</p>
     */
    public $Limit;

    /**
     * @var integer <p>Starting offset amount for pagination return. Default value: 0. It returns records from Offset to Offset + Limit - 1.</p><p>Default value: 0</p>
     */
    public $Offset;

    /**
     * @param integer $SubAppId <p><strong>VOD application ID. For customers who activate VOD services on or after December 25, 2023, when accessing resources in VOD applications (whether the default application or a newly created application), this field must be filled in with the app ID.</strong></p>
     * @param string $QuotaType <p>Quota type</p><p>Enumeration values:</p><ul><li>Image: AIGC image task</li><li>Video: AIGC video task</li><li>Text: AIGC text task</li></ul>
     * @param string $ApiToken <p>Valid only when QuotaType is Text. Used to select the ApiToken for quota limit</p>
     * @param integer $Limit <p>Number of records returned in pages, from the Offset-th to the (Offset+Limit-1)-th record.</p><p>Value range: [1, 100]</p><p>Default value: 10</p>
     * @param integer $Offset <p>Starting offset amount for pagination return. Default value: 0. It returns records from Offset to Offset + Limit - 1.</p><p>Default value: 0</p>
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
