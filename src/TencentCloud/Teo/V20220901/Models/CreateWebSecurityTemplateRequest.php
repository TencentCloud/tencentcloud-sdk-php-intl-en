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
 * CreateWebSecurityTemplate request structure.
 *
 * @method string getZoneId() Obtain Site ID. This parameter clarifies the site to which the policy template belongs in terms of access permission.
 * @method void setZoneId(string $ZoneId) Set Site ID. This parameter clarifies the site to which the policy template belongs in terms of access permission.
 * @method string getTemplateName() Obtain Policy template name. It consists of Chinese characters, letters, digits, and underscores. It cannot begin with an underscore and cannot exceed 32 characters in length.
 * @method void setTemplateName(string $TemplateName) Set Policy template name. It consists of Chinese characters, letters, digits, and underscores. It cannot begin with an underscore and cannot exceed 32 characters in length.
 * @method SecurityPolicy getSecurityPolicy() Obtain Configuration file content of the security policy template. If the field is empty, a default configuration is generated. Currently supports exception rules, custom rules, rate limiting rules, and managed rule configuration in the Web protection module. Configure the security policy through expression syntax. Bot management rule configuration is not currently supported and is under development.
 * @method void setSecurityPolicy(SecurityPolicy $SecurityPolicy) Set Configuration file content of the security policy template. If the field is empty, a default configuration is generated. Currently supports exception rules, custom rules, rate limiting rules, and managed rule configuration in the Web protection module. Configure the security policy through expression syntax. Bot management rule configuration is not currently supported and is under development.
 */
class CreateWebSecurityTemplateRequest extends AbstractModel
{
    /**
     * @var string Site ID. This parameter clarifies the site to which the policy template belongs in terms of access permission.
     */
    public $ZoneId;

    /**
     * @var string Policy template name. It consists of Chinese characters, letters, digits, and underscores. It cannot begin with an underscore and cannot exceed 32 characters in length.
     */
    public $TemplateName;

    /**
     * @var SecurityPolicy Configuration file content of the security policy template. If the field is empty, a default configuration is generated. Currently supports exception rules, custom rules, rate limiting rules, and managed rule configuration in the Web protection module. Configure the security policy through expression syntax. Bot management rule configuration is not currently supported and is under development.
     */
    public $SecurityPolicy;

    /**
     * @param string $ZoneId Site ID. This parameter clarifies the site to which the policy template belongs in terms of access permission.
     * @param string $TemplateName Policy template name. It consists of Chinese characters, letters, digits, and underscores. It cannot begin with an underscore and cannot exceed 32 characters in length.
     * @param SecurityPolicy $SecurityPolicy Configuration file content of the security policy template. If the field is empty, a default configuration is generated. Currently supports exception rules, custom rules, rate limiting rules, and managed rule configuration in the Web protection module. Configure the security policy through expression syntax. Bot management rule configuration is not currently supported and is under development.
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

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("SecurityPolicy",$param) and $param["SecurityPolicy"] !== null) {
            $this->SecurityPolicy = new SecurityPolicy();
            $this->SecurityPolicy->deserialize($param["SecurityPolicy"]);
        }
    }
}
