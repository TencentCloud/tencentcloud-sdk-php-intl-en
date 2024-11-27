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
 * DeleteRoleAssignment request structure.
 *
 * @method string getZoneId() Obtain Space ID.
 * @method void setZoneId(string $ZoneId) Set Space ID.
 * @method string getRoleConfigurationId() Obtain Permission configuration ID.
 * @method void setRoleConfigurationId(string $RoleConfigurationId) Set Permission configuration ID.
 * @method string getTargetType() Obtain Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
 * @method void setTargetType(string $TargetType) Set Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
 * @method integer getTargetUin() Obtain UIN of the target account of the Tencent Cloud Organization.
 * @method void setTargetUin(integer $TargetUin) Set UIN of the target account of the Tencent Cloud Organization.
 * @method string getPrincipalType() Obtain Identity types synchronized for CAM users. Valid values: User: indicates the synchronized identity is a user. Group: indicates the synchronized identity is a user group.
 * @method void setPrincipalType(string $PrincipalType) Set Identity types synchronized for CAM users. Valid values: User: indicates the synchronized identity is a user. Group: indicates the synchronized identity is a user group.
 * @method string getPrincipalId() Obtain User synchronization ID. Valid values: When PrincipalType is Group, it is a user group ID (g-********). When PrincipalType is User, it is a user ID (u-********).
 * @method void setPrincipalId(string $PrincipalId) Set User synchronization ID. Valid values: When PrincipalType is Group, it is a user group ID (g-********). When PrincipalType is User, it is a user ID (u-********).
 * @method string getDeprovisionStrategy() Obtain Whether to remove the permission configuration deployment when removing the last authorization with a certain permission configuration from a target account in TCO. Valid values: DeprovisionForLastRoleAssignmentOnAccount: Remove the permission configuration deployment. None (default): Do not remove the permission configuration deployment.
 * @method void setDeprovisionStrategy(string $DeprovisionStrategy) Set Whether to remove the permission configuration deployment when removing the last authorization with a certain permission configuration from a target account in TCO. Valid values: DeprovisionForLastRoleAssignmentOnAccount: Remove the permission configuration deployment. None (default): Do not remove the permission configuration deployment.
 */
class DeleteRoleAssignmentRequest extends AbstractModel
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
     * @var string Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
     */
    public $TargetType;

    /**
     * @var integer UIN of the target account of the Tencent Cloud Organization.
     */
    public $TargetUin;

    /**
     * @var string Identity types synchronized for CAM users. Valid values: User: indicates the synchronized identity is a user. Group: indicates the synchronized identity is a user group.
     */
    public $PrincipalType;

    /**
     * @var string User synchronization ID. Valid values: When PrincipalType is Group, it is a user group ID (g-********). When PrincipalType is User, it is a user ID (u-********).
     */
    public $PrincipalId;

    /**
     * @var string Whether to remove the permission configuration deployment when removing the last authorization with a certain permission configuration from a target account in TCO. Valid values: DeprovisionForLastRoleAssignmentOnAccount: Remove the permission configuration deployment. None (default): Do not remove the permission configuration deployment.
     */
    public $DeprovisionStrategy;

    /**
     * @param string $ZoneId Space ID.
     * @param string $RoleConfigurationId Permission configuration ID.
     * @param string $TargetType Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
     * @param integer $TargetUin UIN of the target account of the Tencent Cloud Organization.
     * @param string $PrincipalType Identity types synchronized for CAM users. Valid values: User: indicates the synchronized identity is a user. Group: indicates the synchronized identity is a user group.
     * @param string $PrincipalId User synchronization ID. Valid values: When PrincipalType is Group, it is a user group ID (g-********). When PrincipalType is User, it is a user ID (u-********).
     * @param string $DeprovisionStrategy Whether to remove the permission configuration deployment when removing the last authorization with a certain permission configuration from a target account in TCO. Valid values: DeprovisionForLastRoleAssignmentOnAccount: Remove the permission configuration deployment. None (default): Do not remove the permission configuration deployment.
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

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("PrincipalType",$param) and $param["PrincipalType"] !== null) {
            $this->PrincipalType = $param["PrincipalType"];
        }

        if (array_key_exists("PrincipalId",$param) and $param["PrincipalId"] !== null) {
            $this->PrincipalId = $param["PrincipalId"];
        }

        if (array_key_exists("DeprovisionStrategy",$param) and $param["DeprovisionStrategy"] !== null) {
            $this->DeprovisionStrategy = $param["DeprovisionStrategy"];
        }
    }
}
