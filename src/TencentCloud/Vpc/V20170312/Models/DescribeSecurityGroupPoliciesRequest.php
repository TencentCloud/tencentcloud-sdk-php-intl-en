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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityGroupPolicies request structure.
 *
 * @method string getSecurityGroupId() Obtain The security group instance ID, such as `sg-33ocnj9n`. It can be obtained through DescribeSecurityGroups.
 * @method void setSecurityGroupId(string $SecurityGroupId) Set The security group instance ID, such as `sg-33ocnj9n`. It can be obtained through DescribeSecurityGroups.
 * @method array getFilters() Obtain Filter conditions. `SecurityGroupId` and `Filters` cannot be specified at the same time.
<li>security-group-id - String - Security group ID.</li>
<li>ip - String - IP. IPV4 and IPV6 fuzzy matching is supported.</li>
<li>address-module - String - IP address or address group template ID.</li>
<li>service-module - String - Protocol port or port group template ID.</li>
<li>protocol-type - String - Protocol supported by the security group policy. Valid values: `TCP`, `UDP`, `ICMP`, `ICMPV6`, `GRE`, `ALL`.</li>
<li>port - String - Optional - Protocol port. Fuzzy matching is supported. Query all ports when the protocol value is `ALL`.</li>
<li>poly - String - Protocol policy. Valid values: `ALL` (means "all policies"), `ACCEPT` (means "allow") and `DROP` (means "reject").</li>
<li>direction - String - Protocol rule. Valid values: `ALL` (means "all rules"), `INBOUND`(means "inbound rules") and `OUTBOUND` (means "outbound rules").</li>
<li>description - String - Protocol description. Fuzzy matching is supported in this filter condition.</li>
 * @method void setFilters(array $Filters) Set Filter conditions. `SecurityGroupId` and `Filters` cannot be specified at the same time.
<li>security-group-id - String - Security group ID.</li>
<li>ip - String - IP. IPV4 and IPV6 fuzzy matching is supported.</li>
<li>address-module - String - IP address or address group template ID.</li>
<li>service-module - String - Protocol port or port group template ID.</li>
<li>protocol-type - String - Protocol supported by the security group policy. Valid values: `TCP`, `UDP`, `ICMP`, `ICMPV6`, `GRE`, `ALL`.</li>
<li>port - String - Optional - Protocol port. Fuzzy matching is supported. Query all ports when the protocol value is `ALL`.</li>
<li>poly - String - Protocol policy. Valid values: `ALL` (means "all policies"), `ACCEPT` (means "allow") and `DROP` (means "reject").</li>
<li>direction - String - Protocol rule. Valid values: `ALL` (means "all rules"), `INBOUND`(means "inbound rules") and `OUTBOUND` (means "outbound rules").</li>
<li>description - String - Protocol description. Fuzzy matching is supported in this filter condition.</li>
 */
class DescribeSecurityGroupPoliciesRequest extends AbstractModel
{
    /**
     * @var string The security group instance ID, such as `sg-33ocnj9n`. It can be obtained through DescribeSecurityGroups.
     */
    public $SecurityGroupId;

    /**
     * @var array Filter conditions. `SecurityGroupId` and `Filters` cannot be specified at the same time.
<li>security-group-id - String - Security group ID.</li>
<li>ip - String - IP. IPV4 and IPV6 fuzzy matching is supported.</li>
<li>address-module - String - IP address or address group template ID.</li>
<li>service-module - String - Protocol port or port group template ID.</li>
<li>protocol-type - String - Protocol supported by the security group policy. Valid values: `TCP`, `UDP`, `ICMP`, `ICMPV6`, `GRE`, `ALL`.</li>
<li>port - String - Optional - Protocol port. Fuzzy matching is supported. Query all ports when the protocol value is `ALL`.</li>
<li>poly - String - Protocol policy. Valid values: `ALL` (means "all policies"), `ACCEPT` (means "allow") and `DROP` (means "reject").</li>
<li>direction - String - Protocol rule. Valid values: `ALL` (means "all rules"), `INBOUND`(means "inbound rules") and `OUTBOUND` (means "outbound rules").</li>
<li>description - String - Protocol description. Fuzzy matching is supported in this filter condition.</li>
     */
    public $Filters;

    /**
     * @param string $SecurityGroupId The security group instance ID, such as `sg-33ocnj9n`. It can be obtained through DescribeSecurityGroups.
     * @param array $Filters Filter conditions. `SecurityGroupId` and `Filters` cannot be specified at the same time.
<li>security-group-id - String - Security group ID.</li>
<li>ip - String - IP. IPV4 and IPV6 fuzzy matching is supported.</li>
<li>address-module - String - IP address or address group template ID.</li>
<li>service-module - String - Protocol port or port group template ID.</li>
<li>protocol-type - String - Protocol supported by the security group policy. Valid values: `TCP`, `UDP`, `ICMP`, `ICMPV6`, `GRE`, `ALL`.</li>
<li>port - String - Optional - Protocol port. Fuzzy matching is supported. Query all ports when the protocol value is `ALL`.</li>
<li>poly - String - Protocol policy. Valid values: `ALL` (means "all policies"), `ACCEPT` (means "allow") and `DROP` (means "reject").</li>
<li>direction - String - Protocol rule. Valid values: `ALL` (means "all rules"), `INBOUND`(means "inbound rules") and `OUTBOUND` (means "outbound rules").</li>
<li>description - String - Protocol description. Fuzzy matching is supported in this filter condition.</li>
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
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
