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
 * DeleteWebSecurityTemplate request structure.
 *
 * @method string getZoneId() Obtain Zone ID. The zone to which the target policy template belongs for access control. Use the DescribeWebSecurityTemplates interface to query the zone of the policy template.
 * @method void setZoneId(string $ZoneId) Set Zone ID. The zone to which the target policy template belongs for access control. Use the DescribeWebSecurityTemplates interface to query the zone of the policy template.
 * @method string getTemplateId() Obtain Policy template ID.
 * @method void setTemplateId(string $TemplateId) Set Policy template ID.
 */
class DeleteWebSecurityTemplateRequest extends AbstractModel
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
     * @param string $ZoneId Zone ID. The zone to which the target policy template belongs for access control. Use the DescribeWebSecurityTemplates interface to query the zone of the policy template.
     * @param string $TemplateId Policy template ID.
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
    }
}
