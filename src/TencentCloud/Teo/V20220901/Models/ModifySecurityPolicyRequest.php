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
 * ModifySecurityPolicy request structure.
 *
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method SecurityConfig getSecurityConfig() Obtain Security configuration.
 * @method void setSecurityConfig(SecurityConfig $SecurityConfig) Set Security configuration.
 * @method string getEntity() Obtain Subdomain/application name.

Note: When both this parameter and the TemplateId parameter are specified, this parameter will not take effect. Do not specify this parameter and the TemplateId parameter at the same time.
 * @method void setEntity(string $Entity) Set Subdomain/application name.

Note: When both this parameter and the TemplateId parameter are specified, this parameter will not take effect. Do not specify this parameter and the TemplateId parameter at the same time.
 * @method string getTemplateId() Obtain Specifies the policy template ID, or the site's global policy.
- To configure a policy template, specify the policy template ID.
- To configure the site's global policy, use the @ZoneLevel@Domain parameter value.

Note: When this parameter is used, the Entity parameter will not take effect. Do not use this parameter and the Entity parameter at the same time.
 * @method void setTemplateId(string $TemplateId) Set Specifies the policy template ID, or the site's global policy.
- To configure a policy template, specify the policy template ID.
- To configure the site's global policy, use the @ZoneLevel@Domain parameter value.

Note: When this parameter is used, the Entity parameter will not take effect. Do not use this parameter and the Entity parameter at the same time.
 */
class ModifySecurityPolicyRequest extends AbstractModel
{
    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var SecurityConfig Security configuration.
     */
    public $SecurityConfig;

    /**
     * @var string Subdomain/application name.

Note: When both this parameter and the TemplateId parameter are specified, this parameter will not take effect. Do not specify this parameter and the TemplateId parameter at the same time.
     */
    public $Entity;

    /**
     * @var string Specifies the policy template ID, or the site's global policy.
- To configure a policy template, specify the policy template ID.
- To configure the site's global policy, use the @ZoneLevel@Domain parameter value.

Note: When this parameter is used, the Entity parameter will not take effect. Do not use this parameter and the Entity parameter at the same time.
     */
    public $TemplateId;

    /**
     * @param string $ZoneId The site ID.
     * @param SecurityConfig $SecurityConfig Security configuration.
     * @param string $Entity Subdomain/application name.

Note: When both this parameter and the TemplateId parameter are specified, this parameter will not take effect. Do not specify this parameter and the TemplateId parameter at the same time.
     * @param string $TemplateId Specifies the policy template ID, or the site's global policy.
- To configure a policy template, specify the policy template ID.
- To configure the site's global policy, use the @ZoneLevel@Domain parameter value.

Note: When this parameter is used, the Entity parameter will not take effect. Do not use this parameter and the Entity parameter at the same time.
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

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
