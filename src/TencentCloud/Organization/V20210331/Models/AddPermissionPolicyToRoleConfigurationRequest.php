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
 * AddPermissionPolicyToRoleConfiguration request structure.
 *
 * @method string getZoneId() Obtain Space ID.
 * @method void setZoneId(string $ZoneId) Set Space ID.
 * @method string getRoleConfigurationId() Obtain Permission configuration ID.
 * @method void setRoleConfigurationId(string $RoleConfigurationId) Set Permission configuration ID.
 * @method string getRolePolicyType() Obtain Permission policy type. Valid values: System: system policy, namely the CAM system policy reused; Custom: custom policy, namely the custom policy prepared according to the CAM permission policy syntax and structure.  
 * @method void setRolePolicyType(string $RolePolicyType) Set Permission policy type. Valid values: System: system policy, namely the CAM system policy reused; Custom: custom policy, namely the custom policy prepared according to the CAM permission policy syntax and structure.  
 * @method array getRolePolicyNames() Obtain Permission policy name, supporting up to 20 policies, with each policy having a maximum of 32 characters. If you need to add a system policy, it is recommended to use the RolePolicies parameter. For custom policies, the array length is up to 1.
 * @method void setRolePolicyNames(array $RolePolicyNames) Set Permission policy name, supporting up to 20 policies, with each policy having a maximum of 32 characters. If you need to add a system policy, it is recommended to use the RolePolicies parameter. For custom policies, the array length is up to 1.
 * @method array getRolePolicies() Obtain Details of an added system policy.
 * @method void setRolePolicies(array $RolePolicies) Set Details of an added system policy.
 * @method string getCustomPolicyDocument() Obtain Custom policy content, which contains up to 4096 characters. When RolePolicyType is Inline, this parameter must be configured. For details, see the permission policy syntax and structure.
 * @method void setCustomPolicyDocument(string $CustomPolicyDocument) Set Custom policy content, which contains up to 4096 characters. When RolePolicyType is Inline, this parameter must be configured. For details, see the permission policy syntax and structure.
 */
class AddPermissionPolicyToRoleConfigurationRequest extends AbstractModel
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
     * @var array Permission policy name, supporting up to 20 policies, with each policy having a maximum of 32 characters. If you need to add a system policy, it is recommended to use the RolePolicies parameter. For custom policies, the array length is up to 1.
     */
    public $RolePolicyNames;

    /**
     * @var array Details of an added system policy.
     */
    public $RolePolicies;

    /**
     * @var string Custom policy content, which contains up to 4096 characters. When RolePolicyType is Inline, this parameter must be configured. For details, see the permission policy syntax and structure.
     */
    public $CustomPolicyDocument;

    /**
     * @param string $ZoneId Space ID.
     * @param string $RoleConfigurationId Permission configuration ID.
     * @param string $RolePolicyType Permission policy type. Valid values: System: system policy, namely the CAM system policy reused; Custom: custom policy, namely the custom policy prepared according to the CAM permission policy syntax and structure.  
     * @param array $RolePolicyNames Permission policy name, supporting up to 20 policies, with each policy having a maximum of 32 characters. If you need to add a system policy, it is recommended to use the RolePolicies parameter. For custom policies, the array length is up to 1.
     * @param array $RolePolicies Details of an added system policy.
     * @param string $CustomPolicyDocument Custom policy content, which contains up to 4096 characters. When RolePolicyType is Inline, this parameter must be configured. For details, see the permission policy syntax and structure.
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

        if (array_key_exists("RolePolicyNames",$param) and $param["RolePolicyNames"] !== null) {
            $this->RolePolicyNames = $param["RolePolicyNames"];
        }

        if (array_key_exists("RolePolicies",$param) and $param["RolePolicies"] !== null) {
            $this->RolePolicies = [];
            foreach ($param["RolePolicies"] as $key => $value){
                $obj = new PolicyDetail();
                $obj->deserialize($value);
                array_push($this->RolePolicies, $obj);
            }
        }

        if (array_key_exists("CustomPolicyDocument",$param) and $param["CustomPolicyDocument"] !== null) {
            $this->CustomPolicyDocument = $param["CustomPolicyDocument"];
        }
    }
}
