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
 * BindSecurityTemplateToEntity request structure.
 *
 * @method string getZoneId() Obtain Site ID of the policy template to be bound to or unbound from.
 * @method void setZoneId(string $ZoneId) Set Site ID of the policy template to be bound to or unbound from.
 * @method array getEntities() Obtain List of domain names to bind to/unbind from a policy template
 * @method void setEntities(array $Entities) Set List of domain names to bind to/unbind from a policy template
 * @method string getOperate() Obtain Action options. Values include:
<li>`bind`: Bind the domain names to the specified policy template </li>
<li>`unbind-keep-policy`: Unbind a domain name from a policy template and keep the current policy when unbinding</li>
<li>`unbind-use-default`: Unbind domain names from policy templates and use default blank policy.</li> Note: Only one domain name can be unbound at one time. When `Operate` is `unbind-keep-policy` or `unbind-use-default`, there can only be one domain name specified in `Entities`.
 * @method void setOperate(string $Operate) Set Action options. Values include:
<li>`bind`: Bind the domain names to the specified policy template </li>
<li>`unbind-keep-policy`: Unbind a domain name from a policy template and keep the current policy when unbinding</li>
<li>`unbind-use-default`: Unbind domain names from policy templates and use default blank policy.</li> Note: Only one domain name can be unbound at one time. When `Operate` is `unbind-keep-policy` or `unbind-use-default`, there can only be one domain name specified in `Entities`.
 * @method string getTemplateId() Obtain Specifies the ID of the policy template or the site's global policy to be bound or unbound.
- To bind to a policy template, or unbind from it, specify the policy template ID.
- To bind to the site's global policy, or unbind from it, use the @ZoneLevel@domain parameter value.

Note: After unbinding, the domain name will use an independent policy and rule quota will be calculated separately. Please make sure there is sufficient rule quota before unbinding.
 * @method void setTemplateId(string $TemplateId) Set Specifies the ID of the policy template or the site's global policy to be bound or unbound.
- To bind to a policy template, or unbind from it, specify the policy template ID.
- To bind to the site's global policy, or unbind from it, use the @ZoneLevel@domain parameter value.

Note: After unbinding, the domain name will use an independent policy and rule quota will be calculated separately. Please make sure there is sufficient rule quota before unbinding.
 * @method boolean getOverWrite() Obtain Whether to replace the existing policy template bound with the domain name. Values: 
<li>`true`: Replace the template bound to the domain. </li>
<li>`false`: Do not replace the template.</li> Note: In this case, the API returns an error if there is already a policy template bound to the specified domain name.
 * @method void setOverWrite(boolean $OverWrite) Set Whether to replace the existing policy template bound with the domain name. Values: 
<li>`true`: Replace the template bound to the domain. </li>
<li>`false`: Do not replace the template.</li> Note: In this case, the API returns an error if there is already a policy template bound to the specified domain name.
 */
class BindSecurityTemplateToEntityRequest extends AbstractModel
{
    /**
     * @var string Site ID of the policy template to be bound to or unbound from.
     */
    public $ZoneId;

    /**
     * @var array List of domain names to bind to/unbind from a policy template
     */
    public $Entities;

    /**
     * @var string Action options. Values include:
<li>`bind`: Bind the domain names to the specified policy template </li>
<li>`unbind-keep-policy`: Unbind a domain name from a policy template and keep the current policy when unbinding</li>
<li>`unbind-use-default`: Unbind domain names from policy templates and use default blank policy.</li> Note: Only one domain name can be unbound at one time. When `Operate` is `unbind-keep-policy` or `unbind-use-default`, there can only be one domain name specified in `Entities`.
     */
    public $Operate;

    /**
     * @var string Specifies the ID of the policy template or the site's global policy to be bound or unbound.
- To bind to a policy template, or unbind from it, specify the policy template ID.
- To bind to the site's global policy, or unbind from it, use the @ZoneLevel@domain parameter value.

Note: After unbinding, the domain name will use an independent policy and rule quota will be calculated separately. Please make sure there is sufficient rule quota before unbinding.
     */
    public $TemplateId;

    /**
     * @var boolean Whether to replace the existing policy template bound with the domain name. Values: 
<li>`true`: Replace the template bound to the domain. </li>
<li>`false`: Do not replace the template.</li> Note: In this case, the API returns an error if there is already a policy template bound to the specified domain name.
     */
    public $OverWrite;

    /**
     * @param string $ZoneId Site ID of the policy template to be bound to or unbound from.
     * @param array $Entities List of domain names to bind to/unbind from a policy template
     * @param string $Operate Action options. Values include:
<li>`bind`: Bind the domain names to the specified policy template </li>
<li>`unbind-keep-policy`: Unbind a domain name from a policy template and keep the current policy when unbinding</li>
<li>`unbind-use-default`: Unbind domain names from policy templates and use default blank policy.</li> Note: Only one domain name can be unbound at one time. When `Operate` is `unbind-keep-policy` or `unbind-use-default`, there can only be one domain name specified in `Entities`.
     * @param string $TemplateId Specifies the ID of the policy template or the site's global policy to be bound or unbound.
- To bind to a policy template, or unbind from it, specify the policy template ID.
- To bind to the site's global policy, or unbind from it, use the @ZoneLevel@domain parameter value.

Note: After unbinding, the domain name will use an independent policy and rule quota will be calculated separately. Please make sure there is sufficient rule quota before unbinding.
     * @param boolean $OverWrite Whether to replace the existing policy template bound with the domain name. Values: 
<li>`true`: Replace the template bound to the domain. </li>
<li>`false`: Do not replace the template.</li> Note: In this case, the API returns an error if there is already a policy template bound to the specified domain name.
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

        if (array_key_exists("Entities",$param) and $param["Entities"] !== null) {
            $this->Entities = $param["Entities"];
        }

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("OverWrite",$param) and $param["OverWrite"] !== null) {
            $this->OverWrite = $param["OverWrite"];
        }
    }
}
