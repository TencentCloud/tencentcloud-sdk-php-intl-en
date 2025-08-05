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
 * BindSecurityTemplateToEntity request structure.
 *
 * @method string getZoneId() Obtain Site ID of the policy template to be bound to or unbound from.
 * @method void setZoneId(string $ZoneId) Set Site ID of the policy template to be bound to or unbound from.
 * @method array getEntities() Obtain List of domain names to bind to/unbind from a policy template
 * @method void setEntities(array $Entities) Set List of domain names to bind to/unbind from a policy template
 * @method string getOperate() Obtain Bind or unbind operation option. valid values:.
<Li>`Bind`: bind the domain name to the policy template.</li>.
<li>unbind-keep-policy: unbind a domain name from the policy template while retaining the current policy.</li>.
<li>unbind-use-default: unbind a domain name from the policy template and use the default blank policy.</li> note: the unbinding operation currently only supports unbinding a single domain name. that is, when the Operate parameter value is unbind-keep-policy or unbind-use-default, the Entities parameter list only supports filling in one domain name.
 * @method void setOperate(string $Operate) Set Bind or unbind operation option. valid values:.
<Li>`Bind`: bind the domain name to the policy template.</li>.
<li>unbind-keep-policy: unbind a domain name from the policy template while retaining the current policy.</li>.
<li>unbind-use-default: unbind a domain name from the policy template and use the default blank policy.</li> note: the unbinding operation currently only supports unbinding a single domain name. that is, when the Operate parameter value is unbind-keep-policy or unbind-use-default, the Entities parameter list only supports filling in one domain name.
 * @method string getTemplateId() Obtain Specifies the ID of the policy template or the site global policy to be bound or unbound.
<li>To bind to a policy template, or unbind from it, specify the policy template ID.</li>.
<li>To bind to the site's global policy, or unbind from it, use the @ZoneLevel@domain parameter value.</li>.

Note: After unbinding, the domain name will use an independent policy and rule quota will be calculated separately. Please make sure there is sufficient rule quota before unbinding.
 * @method void setTemplateId(string $TemplateId) Set Specifies the ID of the policy template or the site global policy to be bound or unbound.
<li>To bind to a policy template, or unbind from it, specify the policy template ID.</li>.
<li>To bind to the site's global policy, or unbind from it, use the @ZoneLevel@domain parameter value.</li>.

Note: After unbinding, the domain name will use an independent policy and rule quota will be calculated separately. Please make sure there is sufficient rule quota before unbinding.
 * @method boolean getOverWrite() Obtain If the imported domain name has already been bound to a policy template (including a site-level security policy), this parameter indicates whether to replace the template by setting it. the default value is true. values: <li>`true`: replace the template currently bound to the domain.</li> <li>`false`: do not replace the template currently bound to the domain.</li> note: when set to false, if the imported domain name has already been bound to a policy template, the API will return an error; a site-level security policy is also a type of policy template.
 * @method void setOverWrite(boolean $OverWrite) Set If the imported domain name has already been bound to a policy template (including a site-level security policy), this parameter indicates whether to replace the template by setting it. the default value is true. values: <li>`true`: replace the template currently bound to the domain.</li> <li>`false`: do not replace the template currently bound to the domain.</li> note: when set to false, if the imported domain name has already been bound to a policy template, the API will return an error; a site-level security policy is also a type of policy template.
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
     * @var string Bind or unbind operation option. valid values:.
<Li>`Bind`: bind the domain name to the policy template.</li>.
<li>unbind-keep-policy: unbind a domain name from the policy template while retaining the current policy.</li>.
<li>unbind-use-default: unbind a domain name from the policy template and use the default blank policy.</li> note: the unbinding operation currently only supports unbinding a single domain name. that is, when the Operate parameter value is unbind-keep-policy or unbind-use-default, the Entities parameter list only supports filling in one domain name.
     */
    public $Operate;

    /**
     * @var string Specifies the ID of the policy template or the site global policy to be bound or unbound.
<li>To bind to a policy template, or unbind from it, specify the policy template ID.</li>.
<li>To bind to the site's global policy, or unbind from it, use the @ZoneLevel@domain parameter value.</li>.

Note: After unbinding, the domain name will use an independent policy and rule quota will be calculated separately. Please make sure there is sufficient rule quota before unbinding.
     */
    public $TemplateId;

    /**
     * @var boolean If the imported domain name has already been bound to a policy template (including a site-level security policy), this parameter indicates whether to replace the template by setting it. the default value is true. values: <li>`true`: replace the template currently bound to the domain.</li> <li>`false`: do not replace the template currently bound to the domain.</li> note: when set to false, if the imported domain name has already been bound to a policy template, the API will return an error; a site-level security policy is also a type of policy template.
     */
    public $OverWrite;

    /**
     * @param string $ZoneId Site ID of the policy template to be bound to or unbound from.
     * @param array $Entities List of domain names to bind to/unbind from a policy template
     * @param string $Operate Bind or unbind operation option. valid values:.
<Li>`Bind`: bind the domain name to the policy template.</li>.
<li>unbind-keep-policy: unbind a domain name from the policy template while retaining the current policy.</li>.
<li>unbind-use-default: unbind a domain name from the policy template and use the default blank policy.</li> note: the unbinding operation currently only supports unbinding a single domain name. that is, when the Operate parameter value is unbind-keep-policy or unbind-use-default, the Entities parameter list only supports filling in one domain name.
     * @param string $TemplateId Specifies the ID of the policy template or the site global policy to be bound or unbound.
<li>To bind to a policy template, or unbind from it, specify the policy template ID.</li>.
<li>To bind to the site's global policy, or unbind from it, use the @ZoneLevel@domain parameter value.</li>.

Note: After unbinding, the domain name will use an independent policy and rule quota will be calculated separately. Please make sure there is sufficient rule quota before unbinding.
     * @param boolean $OverWrite If the imported domain name has already been bound to a policy template (including a site-level security policy), this parameter indicates whether to replace the template by setting it. the default value is true. values: <li>`true`: replace the template currently bound to the domain.</li> <li>`false`: do not replace the template currently bound to the domain.</li> note: when set to false, if the imported domain name has already been bound to a policy template, the API will return an error; a site-level security policy is also a type of policy template.
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
