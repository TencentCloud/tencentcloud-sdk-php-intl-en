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
 * @method SecurityConfig getSecurityConfig() Obtain Security policy configuration.<li>When ExceptionRules in the SecurityPolicy parameter is set, ExceptConfig in the SecurityConfig parameter will be ignored;</li><li>When CustomRules in the SecurityPolicy parameter is set, AclConfig and IpTableConfig in the SecurityConfig parameter will be ignored;</li><li>When HttpDDoSProtection and RateLimitingRules in the SecurityPolicy parameter are set, RateLimitConfig in the SecurityConfig parameter will be ignored;</li><li>When ManagedRule in the SecurityPolicy parameter is set, WafConfig in the SecurityConfig parameter will be ignored;</li><li>When BotManagement in the SecurityPolicy parameter is set, BotConfig in the SecurityConfig parameter will be ignored;</li><li>For exception rules, custom rules, rate limits, managed rules, and bot management policies, it is recommended to use the SecurityPolicy parameter for configuration.</li>
 * @method void setSecurityConfig(SecurityConfig $SecurityConfig) Set Security policy configuration.<li>When ExceptionRules in the SecurityPolicy parameter is set, ExceptConfig in the SecurityConfig parameter will be ignored;</li><li>When CustomRules in the SecurityPolicy parameter is set, AclConfig and IpTableConfig in the SecurityConfig parameter will be ignored;</li><li>When HttpDDoSProtection and RateLimitingRules in the SecurityPolicy parameter are set, RateLimitConfig in the SecurityConfig parameter will be ignored;</li><li>When ManagedRule in the SecurityPolicy parameter is set, WafConfig in the SecurityConfig parameter will be ignored;</li><li>When BotManagement in the SecurityPolicy parameter is set, BotConfig in the SecurityConfig parameter will be ignored;</li><li>For exception rules, custom rules, rate limits, managed rules, and bot management policies, it is recommended to use the SecurityPolicy parameter for configuration.</li>
 * @method SecurityPolicy getSecurityPolicy() Obtain Security policy configuration. For Web exception rules, custom protection policies, rate rules, managed rules, and Bot management configuration, we recommend using expression syntax to configure security policies.
 * @method void setSecurityPolicy(SecurityPolicy $SecurityPolicy) Set Security policy configuration. For Web exception rules, custom protection policies, rate rules, managed rules, and Bot management configuration, we recommend using expression syntax to configure security policies.
 * @method string getEntity() Obtain Security policy type. The following parameter values are available: <li>ZoneDefaultPolicy: used to specify a site-level policy;</li><li>Template: used to specify a policy template. You need to simultaneously specify the TemplateId parameter;</li><li>Host: used to specify a domain-level policy (Note: when using a domain name to specify a domain name service policy, only DNS that has already applied a domain-level policy or policy template is supported).</li>
 * @method void setEntity(string $Entity) Set Security policy type. The following parameter values are available: <li>ZoneDefaultPolicy: used to specify a site-level policy;</li><li>Template: used to specify a policy template. You need to simultaneously specify the TemplateId parameter;</li><li>Host: used to specify a domain-level policy (Note: when using a domain name to specify a domain name service policy, only DNS that has already applied a domain-level policy or policy template is supported).</li>
 * @method string getHost() Obtain Specified domain name. When the value of the `Entity` parameter is `Host`, use this parameter to specify a domain-level policy. For example, use `www.example.com` to configure the domain-level policy for that domain name.
 * @method void setHost(string $Host) Set Specified domain name. When the value of the `Entity` parameter is `Host`, use this parameter to specify a domain-level policy. For example, use `www.example.com` to configure the domain-level policy for that domain name.
 * @method string getTemplateId() Obtain Specify the policy template ID. When the Entity parameter value is Template, use this parameter to specify the policy template ID.
 * @method void setTemplateId(string $TemplateId) Set Specify the policy template ID. When the Entity parameter value is Template, use this parameter to specify the policy template ID.
 */
class ModifySecurityPolicyRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var SecurityConfig Security policy configuration.<li>When ExceptionRules in the SecurityPolicy parameter is set, ExceptConfig in the SecurityConfig parameter will be ignored;</li><li>When CustomRules in the SecurityPolicy parameter is set, AclConfig and IpTableConfig in the SecurityConfig parameter will be ignored;</li><li>When HttpDDoSProtection and RateLimitingRules in the SecurityPolicy parameter are set, RateLimitConfig in the SecurityConfig parameter will be ignored;</li><li>When ManagedRule in the SecurityPolicy parameter is set, WafConfig in the SecurityConfig parameter will be ignored;</li><li>When BotManagement in the SecurityPolicy parameter is set, BotConfig in the SecurityConfig parameter will be ignored;</li><li>For exception rules, custom rules, rate limits, managed rules, and bot management policies, it is recommended to use the SecurityPolicy parameter for configuration.</li>
     */
    public $SecurityConfig;

    /**
     * @var SecurityPolicy Security policy configuration. For Web exception rules, custom protection policies, rate rules, managed rules, and Bot management configuration, we recommend using expression syntax to configure security policies.
     */
    public $SecurityPolicy;

    /**
     * @var string Security policy type. The following parameter values are available: <li>ZoneDefaultPolicy: used to specify a site-level policy;</li><li>Template: used to specify a policy template. You need to simultaneously specify the TemplateId parameter;</li><li>Host: used to specify a domain-level policy (Note: when using a domain name to specify a domain name service policy, only DNS that has already applied a domain-level policy or policy template is supported).</li>
     */
    public $Entity;

    /**
     * @var string Specified domain name. When the value of the `Entity` parameter is `Host`, use this parameter to specify a domain-level policy. For example, use `www.example.com` to configure the domain-level policy for that domain name.
     */
    public $Host;

    /**
     * @var string Specify the policy template ID. When the Entity parameter value is Template, use this parameter to specify the policy template ID.
     */
    public $TemplateId;

    /**
     * @param string $ZoneId Zone ID.
     * @param SecurityConfig $SecurityConfig Security policy configuration.<li>When ExceptionRules in the SecurityPolicy parameter is set, ExceptConfig in the SecurityConfig parameter will be ignored;</li><li>When CustomRules in the SecurityPolicy parameter is set, AclConfig and IpTableConfig in the SecurityConfig parameter will be ignored;</li><li>When HttpDDoSProtection and RateLimitingRules in the SecurityPolicy parameter are set, RateLimitConfig in the SecurityConfig parameter will be ignored;</li><li>When ManagedRule in the SecurityPolicy parameter is set, WafConfig in the SecurityConfig parameter will be ignored;</li><li>When BotManagement in the SecurityPolicy parameter is set, BotConfig in the SecurityConfig parameter will be ignored;</li><li>For exception rules, custom rules, rate limits, managed rules, and bot management policies, it is recommended to use the SecurityPolicy parameter for configuration.</li>
     * @param SecurityPolicy $SecurityPolicy Security policy configuration. For Web exception rules, custom protection policies, rate rules, managed rules, and Bot management configuration, we recommend using expression syntax to configure security policies.
     * @param string $Entity Security policy type. The following parameter values are available: <li>ZoneDefaultPolicy: used to specify a site-level policy;</li><li>Template: used to specify a policy template. You need to simultaneously specify the TemplateId parameter;</li><li>Host: used to specify a domain-level policy (Note: when using a domain name to specify a domain name service policy, only DNS that has already applied a domain-level policy or policy template is supported).</li>
     * @param string $Host Specified domain name. When the value of the `Entity` parameter is `Host`, use this parameter to specify a domain-level policy. For example, use `www.example.com` to configure the domain-level policy for that domain name.
     * @param string $TemplateId Specify the policy template ID. When the Entity parameter value is Template, use this parameter to specify the policy template ID.
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
