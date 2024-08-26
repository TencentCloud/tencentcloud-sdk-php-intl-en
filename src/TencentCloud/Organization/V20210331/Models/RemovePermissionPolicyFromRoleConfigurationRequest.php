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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemovePermissionPolicyFromRoleConfiguration request structure.
 *
 * @method string getZoneId() Obtain Space ID.
 * @method void setZoneId(string $ZoneId) Set Space ID.
 * @method string getRoleConfigurationId() Obtain Permission configuration ID.
 * @method void setRoleConfigurationId(string $RoleConfigurationId) Set Permission configuration ID.
 * @method string getRolePolicyType() Obtain Permission policy type. Valid values: System: system policy, namely the CAM system policy reused; Custom: custom policy, namely the custom policy prepared according to the CAM permission policy syntax and structure.
 * @method void setRolePolicyType(string $RolePolicyType) Set Permission policy type. Valid values: System: system policy, namely the CAM system policy reused; Custom: custom policy, namely the custom policy prepared according to the CAM permission policy syntax and structure.
 * @method string getRolePolicyName() Obtain Permission policy name, which contains up to 32 characters.
 * @method void setRolePolicyName(string $RolePolicyName) Set Permission policy name, which contains up to 32 characters.
 * @method integer getRolePolicyId() Obtain Policy ID.
 * @method void setRolePolicyId(integer $RolePolicyId) Set Policy ID.
 */
class RemovePermissionPolicyFromRoleConfigurationRequest extends AbstractModel
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
     * @var string Permission policy type. Valid values: System: system policy, namely the CAM system policy reused; Custom: custom policy, namely the custom policy prepared according to the CAM permission policy syntax and structure.
     */
    public $RolePolicyType;

    /**
     * @var string Permission policy name, which contains up to 32 characters.
     */
    public $RolePolicyName;

    /**
     * @var integer Policy ID.
     */
    public $RolePolicyId;

    /**
     * @param string $ZoneId Space ID.
     * @param string $RoleConfigurationId Permission configuration ID.
     * @param string $RolePolicyType Permission policy type. Valid values: System: system policy, namely the CAM system policy reused; Custom: custom policy, namely the custom policy prepared according to the CAM permission policy syntax and structure.
     * @param string $RolePolicyName Permission policy name, which contains up to 32 characters.
     * @param integer $RolePolicyId Policy ID.
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

        if (array_key_exists("RolePolicyType",$param) and $param["RolePolicyType"] !== null) {
            $this->RolePolicyType = $param["RolePolicyType"];
        }

        if (array_key_exists("RolePolicyName",$param) and $param["RolePolicyName"] !== null) {
            $this->RolePolicyName = $param["RolePolicyName"];
        }

        if (array_key_exists("RolePolicyId",$param) and $param["RolePolicyId"] !== null) {
            $this->RolePolicyId = $param["RolePolicyId"];
        }
    }
}
