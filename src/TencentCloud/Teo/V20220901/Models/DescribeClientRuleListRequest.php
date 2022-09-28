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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClientRuleList request structure.
 *
 * @method string getZoneId() Obtain The ID of the site to be queried.
 * @method void setZoneId(string $ZoneId) Set The ID of the site to be queried.
 * @method string getDomain() Obtain The subdomain name to be queried.
 * @method void setDomain(string $Domain) Set The subdomain name to be queried.
 * @method string getRuleType() Obtain Rule type. Values:
<li>`acl`: Custom rules;</li>
<li>`rate`: Rate limiting rules.</li>All rules will be queried if this field is not specified.
 * @method void setRuleType(string $RuleType) Set Rule type. Values:
<li>`acl`: Custom rules;</li>
<li>`rate`: Rate limiting rules.</li>All rules will be queried if this field is not specified.
 * @method integer getRuleId() Obtain The rule ID.
 * @method void setRuleId(integer $RuleId) Set The rule ID.
 * @method string getSourceClientIp() Obtain The client IP.
 * @method void setSourceClientIp(string $SourceClientIp) Set The client IP.
 * @method integer getLimit() Obtain Limit on paginated queries. Default value: 20. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Default value: 20. Maximum value: 1000.
 * @method integer getOffset() Obtain The page offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set The page offset. Default value: 0.
 * @method string getArea() Obtain Data storage region. Values:
<li>`overseas`: Global (outside the Chinese mainland);</li>
<li>`mainland`: Chinese mainland.</li>If this field is not specified, the data storage region will be determined based on the user’s location.
 * @method void setArea(string $Area) Set Data storage region. Values:
<li>`overseas`: Global (outside the Chinese mainland);</li>
<li>`mainland`: Chinese mainland.</li>If this field is not specified, the data storage region will be determined based on the user’s location.
 */
class DescribeClientRuleListRequest extends AbstractModel
{
    /**
     * @var string The ID of the site to be queried.
     */
    public $ZoneId;

    /**
     * @var string The subdomain name to be queried.
     */
    public $Domain;

    /**
     * @var string Rule type. Values:
<li>`acl`: Custom rules;</li>
<li>`rate`: Rate limiting rules.</li>All rules will be queried if this field is not specified.
     */
    public $RuleType;

    /**
     * @var integer The rule ID.
     */
    public $RuleId;

    /**
     * @var string The client IP.
     */
    public $SourceClientIp;

    /**
     * @var integer Limit on paginated queries. Default value: 20. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @var integer The page offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var string Data storage region. Values:
<li>`overseas`: Global (outside the Chinese mainland);</li>
<li>`mainland`: Chinese mainland.</li>If this field is not specified, the data storage region will be determined based on the user’s location.
     */
    public $Area;

    /**
     * @param string $ZoneId The ID of the site to be queried.
     * @param string $Domain The subdomain name to be queried.
     * @param string $RuleType Rule type. Values:
<li>`acl`: Custom rules;</li>
<li>`rate`: Rate limiting rules.</li>All rules will be queried if this field is not specified.
     * @param integer $RuleId The rule ID.
     * @param string $SourceClientIp The client IP.
     * @param integer $Limit Limit on paginated queries. Default value: 20. Maximum value: 1000.
     * @param integer $Offset The page offset. Default value: 0.
     * @param string $Area Data storage region. Values:
<li>`overseas`: Global (outside the Chinese mainland);</li>
<li>`mainland`: Chinese mainland.</li>If this field is not specified, the data storage region will be determined based on the user’s location.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("SourceClientIp",$param) and $param["SourceClientIp"] !== null) {
            $this->SourceClientIp = $param["SourceClientIp"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
