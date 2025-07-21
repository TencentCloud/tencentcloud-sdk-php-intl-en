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
 * Policy template information.
 *
 * @method string getZoneId() Obtain The zone ID to which the policy template belongs.
 * @method void setZoneId(string $ZoneId) Set The zone ID to which the policy template belongs.
 * @method string getTemplateId() Obtain Policy template ID.
 * @method void setTemplateId(string $TemplateId) Set Policy template ID.
 * @method string getTemplateName() Obtain The name of the policy template.
 * @method void setTemplateName(string $TemplateName) Set The name of the policy template.
 * @method array getBindDomains() Obtain Information about domains bound to the policy template.
 * @method void setBindDomains(array $BindDomains) Set Information about domains bound to the policy template.
 */
class SecurityPolicyTemplateInfo extends AbstractModel
{
    /**
     * @var string The zone ID to which the policy template belongs.
     */
    public $ZoneId;

    /**
     * @var string Policy template ID.
     */
    public $TemplateId;

    /**
     * @var string The name of the policy template.
     */
    public $TemplateName;

    /**
     * @var array Information about domains bound to the policy template.
     */
    public $BindDomains;

    /**
     * @param string $ZoneId The zone ID to which the policy template belongs.
     * @param string $TemplateId Policy template ID.
     * @param string $TemplateName The name of the policy template.
     * @param array $BindDomains Information about domains bound to the policy template.
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

        if (array_key_exists("BindDomains",$param) and $param["BindDomains"] !== null) {
            $this->BindDomains = [];
            foreach ($param["BindDomains"] as $key => $value){
                $obj = new BindDomainInfo();
                $obj->deserialize($value);
                array_push($this->BindDomains, $obj);
            }
        }
    }
}
