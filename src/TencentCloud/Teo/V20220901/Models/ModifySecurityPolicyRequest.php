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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecurityPolicy request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method SecurityConfig getSecurityConfig() Obtain Security policy configuration. <li>when ExceptionRules in the SecurityPolicy parameter is set, ExceptConfig in the SecurityConfig parameter will be ignored;</li> <li>when CustomRules in the SecurityPolicy parameter is set, AclConfig and IpTableConfig in the SecurityConfig parameter will be ignored;</li> <li>when HttpDDoSProtection and RateLimitingRules in the SecurityPolicy parameter are set, RateLimitConfig in the SecurityConfig parameter will be ignored;</li> <li>when ManagedRule in the SecurityPolicy parameter is set, WafConfig in the SecurityConfig parameter will be ignored;</li> <li>for exception rules, custom rules, rate limits, and managed rule policy, it is recommended to use the SecurityPolicy parameter for configuration.</li>.
 * @method void setSecurityConfig(SecurityConfig $SecurityConfig) Set Security policy configuration. <li>when ExceptionRules in the SecurityPolicy parameter is set, ExceptConfig in the SecurityConfig parameter will be ignored;</li> <li>when CustomRules in the SecurityPolicy parameter is set, AclConfig and IpTableConfig in the SecurityConfig parameter will be ignored;</li> <li>when HttpDDoSProtection and RateLimitingRules in the SecurityPolicy parameter are set, RateLimitConfig in the SecurityConfig parameter will be ignored;</li> <li>when ManagedRule in the SecurityPolicy parameter is set, WafConfig in the SecurityConfig parameter will be ignored;</li> <li>for exception rules, custom rules, rate limits, and managed rule policy, it is recommended to use the SecurityPolicy parameter for configuration.</li>.
 * @method SecurityPolicy getSecurityPolicy() Obtain Security policy configuration. recommend using for Web exception rules, protection custom policies, rate rules, and managed rules. supports configuring security policies with expression grammar.
 * @method void setSecurityPolicy(SecurityPolicy $SecurityPolicy) Set Security policy configuration. recommend using for Web exception rules, protection custom policies, rate rules, and managed rules. supports configuring security policies with expression grammar.
 * @method string getEntity() Obtain `SecurityPolicy` type, the following parameter values can be used for query: <li>`ZoneDefaultPolicy`: used to specify a query for site-level policies;</li> <li>`Template`: used to specify a query for policy templates. the `TemplateId` parameter needs to be specified simultaneously;</li> <li>`Host`: used to specify a query for domain-level policies (note: when using `Host` to specify a domain name service policy, only domain name services or policy templates that have been applied domain-level policies are supported).</li>	
 * @method void setEntity(string $Entity) Set `SecurityPolicy` type, the following parameter values can be used for query: <li>`ZoneDefaultPolicy`: used to specify a query for site-level policies;</li> <li>`Template`: used to specify a query for policy templates. the `TemplateId` parameter needs to be specified simultaneously;</li> <li>`Host`: used to specify a query for domain-level policies (note: when using `Host` to specify a domain name service policy, only domain name services or policy templates that have been applied domain-level policies are supported).</li>	
 * @method string getHost() Obtain Specify the domain name. When the `Entity` parameter value is set to `Host`, use the domain-level policy specified by this parameter to query the domain configuration. For example, use `www.example.com` to configure the domain-level policy for that domain name.
 * @method void setHost(string $Host) Set Specify the domain name. When the `Entity` parameter value is set to `Host`, use the domain-level policy specified by this parameter to query the domain configuration. For example, use `www.example.com` to configure the domain-level policy for that domain name.
 * @method string getTemplateId() Obtain Specify the policy template ID. Use this parameter to specify the ID of the policy Template to query the Template configuration when the `Entity` parameter value is set to `Template`.
 * @method void setTemplateId(string $TemplateId) Set Specify the policy template ID. Use this parameter to specify the ID of the policy Template to query the Template configuration when the `Entity` parameter value is set to `Template`.
 */
class ModifySecurityPolicyRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var SecurityConfig Security policy configuration. <li>when ExceptionRules in the SecurityPolicy parameter is set, ExceptConfig in the SecurityConfig parameter will be ignored;</li> <li>when CustomRules in the SecurityPolicy parameter is set, AclConfig and IpTableConfig in the SecurityConfig parameter will be ignored;</li> <li>when HttpDDoSProtection and RateLimitingRules in the SecurityPolicy parameter are set, RateLimitConfig in the SecurityConfig parameter will be ignored;</li> <li>when ManagedRule in the SecurityPolicy parameter is set, WafConfig in the SecurityConfig parameter will be ignored;</li> <li>for exception rules, custom rules, rate limits, and managed rule policy, it is recommended to use the SecurityPolicy parameter for configuration.</li>.
     */
    public $SecurityConfig;

    /**
     * @var SecurityPolicy Security policy configuration. recommend using for Web exception rules, protection custom policies, rate rules, and managed rules. supports configuring security policies with expression grammar.
     */
    public $SecurityPolicy;

    /**
     * @var string `SecurityPolicy` type, the following parameter values can be used for query: <li>`ZoneDefaultPolicy`: used to specify a query for site-level policies;</li> <li>`Template`: used to specify a query for policy templates. the `TemplateId` parameter needs to be specified simultaneously;</li> <li>`Host`: used to specify a query for domain-level policies (note: when using `Host` to specify a domain name service policy, only domain name services or policy templates that have been applied domain-level policies are supported).</li>	
     */
    public $Entity;

    /**
     * @var string Specify the domain name. When the `Entity` parameter value is set to `Host`, use the domain-level policy specified by this parameter to query the domain configuration. For example, use `www.example.com` to configure the domain-level policy for that domain name.
     */
    public $Host;

    /**
     * @var string Specify the policy template ID. Use this parameter to specify the ID of the policy Template to query the Template configuration when the `Entity` parameter value is set to `Template`.
     */
    public $TemplateId;

    /**
     * @param string $ZoneId Zone ID.
     * @param SecurityConfig $SecurityConfig Security policy configuration. <li>when ExceptionRules in the SecurityPolicy parameter is set, ExceptConfig in the SecurityConfig parameter will be ignored;</li> <li>when CustomRules in the SecurityPolicy parameter is set, AclConfig and IpTableConfig in the SecurityConfig parameter will be ignored;</li> <li>when HttpDDoSProtection and RateLimitingRules in the SecurityPolicy parameter are set, RateLimitConfig in the SecurityConfig parameter will be ignored;</li> <li>when ManagedRule in the SecurityPolicy parameter is set, WafConfig in the SecurityConfig parameter will be ignored;</li> <li>for exception rules, custom rules, rate limits, and managed rule policy, it is recommended to use the SecurityPolicy parameter for configuration.</li>.
     * @param SecurityPolicy $SecurityPolicy Security policy configuration. recommend using for Web exception rules, protection custom policies, rate rules, and managed rules. supports configuring security policies with expression grammar.
     * @param string $Entity `SecurityPolicy` type, the following parameter values can be used for query: <li>`ZoneDefaultPolicy`: used to specify a query for site-level policies;</li> <li>`Template`: used to specify a query for policy templates. the `TemplateId` parameter needs to be specified simultaneously;</li> <li>`Host`: used to specify a query for domain-level policies (note: when using `Host` to specify a domain name service policy, only domain name services or policy templates that have been applied domain-level policies are supported).</li>	
     * @param string $Host Specify the domain name. When the `Entity` parameter value is set to `Host`, use the domain-level policy specified by this parameter to query the domain configuration. For example, use `www.example.com` to configure the domain-level policy for that domain name.
     * @param string $TemplateId Specify the policy template ID. Use this parameter to specify the ID of the policy Template to query the Template configuration when the `Entity` parameter value is set to `Template`.
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

        if (array_key_exists("SecurityConfig",$param) and $param["SecurityConfig"] !== null) {
            $this->SecurityConfig = new SecurityConfig();
            $this->SecurityConfig->deserialize($param["SecurityConfig"]);
        }

        if (array_key_exists("SecurityPolicy",$param) and $param["SecurityPolicy"] !== null) {
            $this->SecurityPolicy = new SecurityPolicy();
            $this->SecurityPolicy->deserialize($param["SecurityPolicy"]);
        }

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
