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
 * Domain-level policy.
 *
 * @method string getHost() Obtain <p>Site-level policy, a policy that takes effect for all domain names under the site. For details, see Site-level Policy.</p>
 * @method void setHost(string $Host) Set <p>Site-level policy, a policy that takes effect for all domain names under the site. For details, see Site-level Policy.</p>
 * @method string getPolicyType() Obtain <p>Policy type used by the current domain. Valid values: <li>ZoneDefault: use a site-level policy, which is the policy settings defined in ZoneDefaultPolicy.</li><li>Custom: use a domain-level policy. When using this option, the Policy field must also be configured to specify the detailed policy settings.</li><li>Template: use a policy template. When using this option, the TemplateId field must also be configured to specify the policy template used by the current domain.</li></p>
 * @method void setPolicyType(string $PolicyType) Set <p>Policy type used by the current domain. Valid values: <li>ZoneDefault: use a site-level policy, which is the policy settings defined in ZoneDefaultPolicy.</li><li>Custom: use a domain-level policy. When using this option, the Policy field must also be configured to specify the detailed policy settings.</li><li>Template: use a policy template. When using this option, the TemplateId field must also be configured to specify the policy template used by the current domain.</li></p>
 * @method SecurityPolicy getPolicy() Obtain <p>Optional. When PolicyType is Custom, this field is the detailed policy configuration of the current domain name, which takes effect on the current domain.</p>
 * @method void setPolicy(SecurityPolicy $Policy) Set <p>Optional. When PolicyType is Custom, this field is the detailed policy configuration of the current domain name, which takes effect on the current domain.</p>
 * @method string getTemplateId() Obtain <p>Optional. When PolicyType is Template, this field is used to specify the Id of the policy Template used by the current domain.</p>
 * @method void setTemplateId(string $TemplateId) Set <p>Optional. When PolicyType is Template, this field is used to specify the Id of the policy Template used by the current domain.</p>
 */
class HostPolicy extends AbstractModel
{
    /**
     * @var string <p>Site-level policy, a policy that takes effect for all domain names under the site. For details, see Site-level Policy.</p>
     */
    public $Host;

    /**
     * @var string <p>Policy type used by the current domain. Valid values: <li>ZoneDefault: use a site-level policy, which is the policy settings defined in ZoneDefaultPolicy.</li><li>Custom: use a domain-level policy. When using this option, the Policy field must also be configured to specify the detailed policy settings.</li><li>Template: use a policy template. When using this option, the TemplateId field must also be configured to specify the policy template used by the current domain.</li></p>
     */
    public $PolicyType;

    /**
     * @var SecurityPolicy <p>Optional. When PolicyType is Custom, this field is the detailed policy configuration of the current domain name, which takes effect on the current domain.</p>
     */
    public $Policy;

    /**
     * @var string <p>Optional. When PolicyType is Template, this field is used to specify the Id of the policy Template used by the current domain.</p>
     */
    public $TemplateId;

    /**
     * @param string $Host <p>Site-level policy, a policy that takes effect for all domain names under the site. For details, see Site-level Policy.</p>
     * @param string $PolicyType <p>Policy type used by the current domain. Valid values: <li>ZoneDefault: use a site-level policy, which is the policy settings defined in ZoneDefaultPolicy.</li><li>Custom: use a domain-level policy. When using this option, the Policy field must also be configured to specify the detailed policy settings.</li><li>Template: use a policy template. When using this option, the TemplateId field must also be configured to specify the policy template used by the current domain.</li></p>
     * @param SecurityPolicy $Policy <p>Optional. When PolicyType is Custom, this field is the detailed policy configuration of the current domain name, which takes effect on the current domain.</p>
     * @param string $TemplateId <p>Optional. When PolicyType is Template, this field is used to specify the Id of the policy Template used by the current domain.</p>
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = new SecurityPolicy();
            $this->Policy->deserialize($param["Policy"]);
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
