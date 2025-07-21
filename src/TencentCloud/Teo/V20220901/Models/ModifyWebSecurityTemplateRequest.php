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
 * ModifyWebSecurityTemplate request structure.
 *
 * @method string getZoneId() Obtain Zone ID. The zone to which the target policy template belongs for access control. Use the DescribeWebSecurityTemplates interface to query the zone of the policy template.
 * @method void setZoneId(string $ZoneId) Set Zone ID. The zone to which the target policy template belongs for access control. Use the DescribeWebSecurityTemplates interface to query the zone of the policy template.
 * @method string getTemplateId() Obtain Policy template ID.
 * @method void setTemplateId(string $TemplateId) Set Policy template ID.
 * @method string getTemplateName() Obtain Modified policy template name. Consists of Chinese characters, letters, numbers, and underscores, cannot start with an underscore, and must not exceed 32 characters. If the field is empty, no modification will be made.
 * @method void setTemplateName(string $TemplateName) Set Modified policy template name. Consists of Chinese characters, letters, numbers, and underscores, cannot start with an underscore, and must not exceed 32 characters. If the field is empty, no modification will be made.
 * @method SecurityPolicy getSecurityPolicy() Obtain Security policy template configuration content. If the value is empty, no modification will be made; submodule structures not passed in will not be modified. Currently supports exception rules, custom rules, rate limiting rules, and managed rule configurations in the Web Security module, using expression syntax for security policy configuration. Bot management rule configuration is not yet supported (under development).
Special note: When passing a submodule structure as input, ensure all rule content to be retained is included. Rule content not passed in will be treated as deleted.
 * @method void setSecurityPolicy(SecurityPolicy $SecurityPolicy) Set Security policy template configuration content. If the value is empty, no modification will be made; submodule structures not passed in will not be modified. Currently supports exception rules, custom rules, rate limiting rules, and managed rule configurations in the Web Security module, using expression syntax for security policy configuration. Bot management rule configuration is not yet supported (under development).
Special note: When passing a submodule structure as input, ensure all rule content to be retained is included. Rule content not passed in will be treated as deleted.
 */
class ModifyWebSecurityTemplateRequest extends AbstractModel
{
    /**
     * @var string Zone ID. The zone to which the target policy template belongs for access control. Use the DescribeWebSecurityTemplates interface to query the zone of the policy template.
     */
    public $ZoneId;

    /**
     * @var string Policy template ID.
     */
    public $TemplateId;

    /**
     * @var string Modified policy template name. Consists of Chinese characters, letters, numbers, and underscores, cannot start with an underscore, and must not exceed 32 characters. If the field is empty, no modification will be made.
     */
    public $TemplateName;

    /**
     * @var SecurityPolicy Security policy template configuration content. If the value is empty, no modification will be made; submodule structures not passed in will not be modified. Currently supports exception rules, custom rules, rate limiting rules, and managed rule configurations in the Web Security module, using expression syntax for security policy configuration. Bot management rule configuration is not yet supported (under development).
Special note: When passing a submodule structure as input, ensure all rule content to be retained is included. Rule content not passed in will be treated as deleted.
     */
    public $SecurityPolicy;

    /**
     * @param string $ZoneId Zone ID. The zone to which the target policy template belongs for access control. Use the DescribeWebSecurityTemplates interface to query the zone of the policy template.
     * @param string $TemplateId Policy template ID.
     * @param string $TemplateName Modified policy template name. Consists of Chinese characters, letters, numbers, and underscores, cannot start with an underscore, and must not exceed 32 characters. If the field is empty, no modification will be made.
     * @param SecurityPolicy $SecurityPolicy Security policy template configuration content. If the value is empty, no modification will be made; submodule structures not passed in will not be modified. Currently supports exception rules, custom rules, rate limiting rules, and managed rule configurations in the Web Security module, using expression syntax for security policy configuration. Bot management rule configuration is not yet supported (under development).
Special note: When passing a submodule structure as input, ensure all rule content to be retained is included. Rule content not passed in will be treated as deleted.
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

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("SecurityPolicy",$param) and $param["SecurityPolicy"] !== null) {
            $this->SecurityPolicy = new SecurityPolicy();
            $this->SecurityPolicy->deserialize($param["SecurityPolicy"]);
        }
    }
}
