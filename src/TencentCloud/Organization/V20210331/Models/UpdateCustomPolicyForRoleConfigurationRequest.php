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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCustomPolicyForRoleConfiguration request structure.
 *
 * @method string getZoneId() Obtain Space ID.
 * @method void setZoneId(string $ZoneId) Set Space ID.
 * @method string getRoleConfigurationId() Obtain Permission configuration ID.
 * @method void setRoleConfigurationId(string $RoleConfigurationId) Set Permission configuration ID.
 * @method string getCustomPolicyName() Obtain Permission policy name, which contains up to 32 characters.
 * @method void setCustomPolicyName(string $CustomPolicyName) Set Permission policy name, which contains up to 32 characters.
 * @method string getNewCustomPolicyDocument() Obtain Custom policy content, which contains up to 4096 characters. When RolePolicyType is Inline, this parameter must be configured. For details, see the permission policy syntax and structure.
 * @method void setNewCustomPolicyDocument(string $NewCustomPolicyDocument) Set Custom policy content, which contains up to 4096 characters. When RolePolicyType is Inline, this parameter must be configured. For details, see the permission policy syntax and structure.
 */
class UpdateCustomPolicyForRoleConfigurationRequest extends AbstractModel
{
    /**
     * @var string Space ID.
     */
    public $ZoneId;

    /**
     * @var string Permission configuration ID.
     */
    public $RoleConfigurationId;

    /**
     * @var string Permission policy name, which contains up to 32 characters.
     */
    public $CustomPolicyName;

    /**
     * @var string Custom policy content, which contains up to 4096 characters. When RolePolicyType is Inline, this parameter must be configured. For details, see the permission policy syntax and structure.
     */
    public $NewCustomPolicyDocument;

    /**
     * @param string $ZoneId Space ID.
     * @param string $RoleConfigurationId Permission configuration ID.
     * @param string $CustomPolicyName Permission policy name, which contains up to 32 characters.
     * @param string $NewCustomPolicyDocument Custom policy content, which contains up to 4096 characters. When RolePolicyType is Inline, this parameter must be configured. For details, see the permission policy syntax and structure.
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

        if (array_key_exists("RoleConfigurationId",$param) and $param["RoleConfigurationId"] !== null) {
            $this->RoleConfigurationId = $param["RoleConfigurationId"];
        }

        if (array_key_exists("CustomPolicyName",$param) and $param["CustomPolicyName"] !== null) {
            $this->CustomPolicyName = $param["CustomPolicyName"];
        }

        if (array_key_exists("NewCustomPolicyDocument",$param) and $param["NewCustomPolicyDocument"] !== null) {
            $this->NewCustomPolicyDocument = $param["NewCustomPolicyDocument"];
        }
    }
}
