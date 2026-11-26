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
 * @method string getZoneId() Obtain Site ID. Requires the input of the site to which the target policy template belongs in terms of access privileges. You can use the DescribeWebSecurityTemplates API to query the site to which the policy template belongs.
 * @method void setZoneId(string $ZoneId) Set Site ID. Requires the input of the site to which the target policy template belongs in terms of access privileges. You can use the DescribeWebSecurityTemplates API to query the site to which the policy template belongs.
 * @method string getTemplateId() Obtain Policy template ID.
 * @method void setTemplateId(string $TemplateId) Set Policy template ID.
 * @method string getTemplateName() Obtain Name of the policy template after modification. It consists of Chinese characters, letters, digits, and underscores, cannot begin with an underline, and the length cannot exceed 32 characters. If the field is empty, no modification is made.
 * @method void setTemplateName(string $TemplateName) Set Name of the policy template after modification. It consists of Chinese characters, letters, digits, and underscores, cannot begin with an underline, and the length cannot exceed 32 characters. If the field is empty, no modification is made.
 * @method SecurityPolicy getSecurityPolicy() Obtain Configuration content of the security policy template. If the value is empty, no modification is made. Submodule structures that are not passed in will not be modified. Currently supports exception rules, custom rules, rate limiting rules, and managed rules in the Web protection module. Configure the security policy through expression syntax. Bot management rule configuration is not currently supported and is under development.
Special note: When a submodule structure is passed in, please ensure that all rule content to be retained is carried. Rule content not passed in is deemed as deletion.
 * @method void setSecurityPolicy(SecurityPolicy $SecurityPolicy) Set Configuration content of the security policy template. If the value is empty, no modification is made. Submodule structures that are not passed in will not be modified. Currently supports exception rules, custom rules, rate limiting rules, and managed rules in the Web protection module. Configure the security policy through expression syntax. Bot management rule configuration is not currently supported and is under development.
Special note: When a submodule structure is passed in, please ensure that all rule content to be retained is carried. Rule content not passed in is deemed as deletion.
 */
class ModifyWebSecurityTemplateRequest extends AbstractModel
{
    /**
     * @var string Site ID. Requires the input of the site to which the target policy template belongs in terms of access privileges. You can use the DescribeWebSecurityTemplates API to query the site to which the policy template belongs.
     */
    public $ZoneId;

    /**
     * @var string Policy template ID.
     */
    public $TemplateId;

    /**
     * @var string Name of the policy template after modification. It consists of Chinese characters, letters, digits, and underscores, cannot begin with an underline, and the length cannot exceed 32 characters. If the field is empty, no modification is made.
     */
    public $TemplateName;

    /**
     * @var SecurityPolicy Configuration content of the security policy template. If the value is empty, no modification is made. Submodule structures that are not passed in will not be modified. Currently supports exception rules, custom rules, rate limiting rules, and managed rules in the Web protection module. Configure the security policy through expression syntax. Bot management rule configuration is not currently supported and is under development.
Special note: When a submodule structure is passed in, please ensure that all rule content to be retained is carried. Rule content not passed in is deemed as deletion.
     */
    public $SecurityPolicy;

    /**
     * @param string $ZoneId Site ID. Requires the input of the site to which the target policy template belongs in terms of access privileges. You can use the DescribeWebSecurityTemplates API to query the site to which the policy template belongs.
     * @param string $TemplateId Policy template ID.
     * @param string $TemplateName Name of the policy template after modification. It consists of Chinese characters, letters, digits, and underscores, cannot begin with an underline, and the length cannot exceed 32 characters. If the field is empty, no modification is made.
     * @param SecurityPolicy $SecurityPolicy Configuration content of the security policy template. If the value is empty, no modification is made. Submodule structures that are not passed in will not be modified. Currently supports exception rules, custom rules, rate limiting rules, and managed rules in the Web protection module. Configure the security policy through expression syntax. Bot management rule configuration is not currently supported and is under development.
Special note: When a submodule structure is passed in, please ensure that all rule content to be retained is carried. Rule content not passed in is deemed as deletion.
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
