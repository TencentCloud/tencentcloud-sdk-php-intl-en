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
 * @method string getZoneId() Obtain Zone ID. Explicitly identifies the zone to which the policy template belongs for access control purposes.
 * @method void setZoneId(string $ZoneId) Set Zone ID. Explicitly identifies the zone to which the policy template belongs for access control purposes.
 * @method string getTemplateName() Obtain Policy template name. Composed of Chinese characters, letters, digits, and underscores. Cannot begin with an underscore and must be less than or equal to 32 characters.
 * @method void setTemplateName(string $TemplateName) Set Policy template name. Composed of Chinese characters, letters, digits, and underscores. Cannot begin with an underscore and must be less than or equal to 32 characters.
 * @method SecurityPolicy getSecurityPolicy() Obtain Web security policy template configuration. Generates default config if empty. Supported: Exception rules, custom rules, rate limiting rules, managed rules. Not supported: Bot management rules (under development).
 * @method void setSecurityPolicy(SecurityPolicy $SecurityPolicy) Set Web security policy template configuration. Generates default config if empty. Supported: Exception rules, custom rules, rate limiting rules, managed rules. Not supported: Bot management rules (under development).
 */
class CreateWebSecurityTemplateRequest extends AbstractModel
{
    /**
     * @var string Zone ID. Explicitly identifies the zone to which the policy template belongs for access control purposes.
     */
    public $ZoneId;

    /**
     * @var string Policy template name. Composed of Chinese characters, letters, digits, and underscores. Cannot begin with an underscore and must be less than or equal to 32 characters.
     */
    public $TemplateName;

    /**
     * @var SecurityPolicy Web security policy template configuration. Generates default config if empty. Supported: Exception rules, custom rules, rate limiting rules, managed rules. Not supported: Bot management rules (under development).
     */
    public $SecurityPolicy;

    /**
     * @param string $ZoneId Zone ID. Explicitly identifies the zone to which the policy template belongs for access control purposes.
     * @param string $TemplateName Policy template name. Composed of Chinese characters, letters, digits, and underscores. Cannot begin with an underscore and must be less than or equal to 32 characters.
     * @param SecurityPolicy $SecurityPolicy Web security policy template configuration. Generates default config if empty. Supported: Exception rules, custom rules, rate limiting rules, managed rules. Not supported: Bot management rules (under development).
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
