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
 * Authorization details of the member account.
 *
 * @method string getRoleConfigurationId() Obtain Permission configuration ID.
 * @method void setRoleConfigurationId(string $RoleConfigurationId) Set Permission configuration ID.
 * @method string getRoleConfigurationName() Obtain Permission configuration name.
 * @method void setRoleConfigurationName(string $RoleConfigurationName) Set Permission configuration name.
 * @method integer getTargetUin() Obtain UIN of the target account of the Tencent Cloud Organization.
 * @method void setTargetUin(integer $TargetUin) Set UIN of the target account of the Tencent Cloud Organization.
 * @method string getTargetType() Obtain Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
 * @method void setTargetType(string $TargetType) Set Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
 * @method string getPrincipalId() Obtain Identity ID for the CAM user synchronization. Valid values: When the PrincipalType value is Group, it is the CIC user group ID (g-********). When the PrincipalType value is User, it is the CIC user ID (u-********).
 * @method void setPrincipalId(string $PrincipalId) Set Identity ID for the CAM user synchronization. Valid values: When the PrincipalType value is Group, it is the CIC user group ID (g-********). When the PrincipalType value is User, it is the CIC user ID (u-********).
 * @method string getPrincipalType() Obtain Identity type for the CAM user synchronization. Valid values: User: indicates that the identity for the CAM user synchronization is a CIC user; Group: indicates that the identity for the CAM user synchronization is a CIC user group.
 * @method void setPrincipalType(string $PrincipalType) Set Identity type for the CAM user synchronization. Valid values: User: indicates that the identity for the CAM user synchronization is a CIC user; Group: indicates that the identity for the CAM user synchronization is a CIC user group.
 * @method string getPrincipalName() Obtain User name or user group name.
 * @method void setPrincipalName(string $PrincipalName) Set User name or user group name.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 * @method string getTargetName() Obtain Name of the target account of the Tencent Cloud Organization.
 * @method void setTargetName(string $TargetName) Set Name of the target account of the Tencent Cloud Organization.
 */
class RoleAssignments extends AbstractModel
{
    /**
     * @var string Permission configuration ID.
     */
    public $RoleConfigurationId;

    /**
     * @var string Permission configuration name.
     */
    public $RoleConfigurationName;

    /**
     * @var integer UIN of the target account of the Tencent Cloud Organization.
     */
    public $TargetUin;

    /**
     * @var string Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
     */
    public $TargetType;

    /**
     * @var string Identity ID for the CAM user synchronization. Valid values: When the PrincipalType value is Group, it is the CIC user group ID (g-********). When the PrincipalType value is User, it is the CIC user ID (u-********).
     */
    public $PrincipalId;

    /**
     * @var string Identity type for the CAM user synchronization. Valid values: User: indicates that the identity for the CAM user synchronization is a CIC user; Group: indicates that the identity for the CAM user synchronization is a CIC user group.
     */
    public $PrincipalType;

    /**
     * @var string User name or user group name.
     */
    public $PrincipalName;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @var string Name of the target account of the Tencent Cloud Organization.
     */
    public $TargetName;

    /**
     * @param string $RoleConfigurationId Permission configuration ID.
     * @param string $RoleConfigurationName Permission configuration name.
     * @param integer $TargetUin UIN of the target account of the Tencent Cloud Organization.
     * @param string $TargetType Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
     * @param string $PrincipalId Identity ID for the CAM user synchronization. Valid values: When the PrincipalType value is Group, it is the CIC user group ID (g-********). When the PrincipalType value is User, it is the CIC user ID (u-********).
     * @param string $PrincipalType Identity type for the CAM user synchronization. Valid values: User: indicates that the identity for the CAM user synchronization is a CIC user; Group: indicates that the identity for the CAM user synchronization is a CIC user group.
     * @param string $PrincipalName User name or user group name.
     * @param string $CreateTime Creation time.
     * @param string $UpdateTime Update time.
     * @param string $TargetName Name of the target account of the Tencent Cloud Organization.
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
        if (array_key_exists("RoleConfigurationId",$param) and $param["RoleConfigurationId"] !== null) {
            $this->RoleConfigurationId = $param["RoleConfigurationId"];
        }

        if (array_key_exists("RoleConfigurationName",$param) and $param["RoleConfigurationName"] !== null) {
            $this->RoleConfigurationName = $param["RoleConfigurationName"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("PrincipalId",$param) and $param["PrincipalId"] !== null) {
            $this->PrincipalId = $param["PrincipalId"];
        }

        if (array_key_exists("PrincipalType",$param) and $param["PrincipalType"] !== null) {
            $this->PrincipalType = $param["PrincipalType"];
        }

        if (array_key_exists("PrincipalName",$param) and $param["PrincipalName"] !== null) {
            $this->PrincipalName = $param["PrincipalName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }
    }
}
