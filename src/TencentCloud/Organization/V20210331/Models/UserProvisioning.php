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
 * User synchronization information.
 *
 * @method string getUserProvisioningId() Obtain CAM user synchronization status. Valid values:

Enabled: CAM user synchronization is enabled.
Disabled: CAM user synchronization is disabled.
 * @method void setUserProvisioningId(string $UserProvisioningId) Set CAM user synchronization status. Valid values:

Enabled: CAM user synchronization is enabled.
Disabled: CAM user synchronization is disabled.
 * @method string getDescription() Obtain Description.
 * @method void setDescription(string $Description) Set Description.
 * @method string getStatus() Obtain CAM user synchronization status. Valid values:

Enabled: CAM user synchronization is enabled.
Disabled: CAM user synchronization is disabled.
 * @method void setStatus(string $Status) Set CAM user synchronization status. Valid values:

Enabled: CAM user synchronization is enabled.
Disabled: CAM user synchronization is disabled.
 * @method string getPrincipalId() Obtain Identity ID for the CAM user synchronization. Valid values:
When the PrincipalType value is Group, it is the CIC user group ID (g-********).
When the PrincipalType value is User, it is the CIC user ID (u-********).
 * @method void setPrincipalId(string $PrincipalId) Set Identity ID for the CAM user synchronization. Valid values:
When the PrincipalType value is Group, it is the CIC user group ID (g-********).
When the PrincipalType value is User, it is the CIC user ID (u-********).
 * @method string getPrincipalName() Obtain Identity name for the CAM user synchronization. Valid values:When the PrincipalType value is Group, it is the CIC user group name.
When the PrincipalType value is User, it is the CIC user name.
 * @method void setPrincipalName(string $PrincipalName) Set Identity name for the CAM user synchronization. Valid values:When the PrincipalType value is Group, it is the CIC user group name.
When the PrincipalType value is User, it is the CIC user name.
 * @method string getPrincipalType() Obtain Identity type for the CAM user synchronization. Valid values:

User: indicates that the identity for the CAM user synchronization is a CIC user.
Group: indicates that the identity for the CAM user synchronization is a CIC user group.
 * @method void setPrincipalType(string $PrincipalType) Set Identity type for the CAM user synchronization. Valid values:

User: indicates that the identity for the CAM user synchronization is a CIC user.
Group: indicates that the identity for the CAM user synchronization is a CIC user group.
 * @method integer getTargetUin() Obtain UIN of the target account of the Tencent Cloud Organization.
 * @method void setTargetUin(integer $TargetUin) Set UIN of the target account of the Tencent Cloud Organization.
 * @method string getTargetName() Obtain Name of the target account of the Tencent Cloud Organization.
 * @method void setTargetName(string $TargetName) Set Name of the target account of the Tencent Cloud Organization.
 * @method string getDuplicationStrategy() Obtain Conflict policy. It indicates the handling policy for existence of a user with the same username when CIC users are synchronized to CAM. Valid values: KeepBoth: Keep both, that is, add the _cic suffix to the CIC user's username and then try to create a CAM user with the username when CIC users are synchronized to CAM and a user with the same username already exists in CAM; TakeOver: Replace, that is, directly replace the existing CAM user with the synchronized CIC user when CIC users are synchronized to CAM and a user with the same username already exists in CAM.
 * @method void setDuplicationStrategy(string $DuplicationStrategy) Set Conflict policy. It indicates the handling policy for existence of a user with the same username when CIC users are synchronized to CAM. Valid values: KeepBoth: Keep both, that is, add the _cic suffix to the CIC user's username and then try to create a CAM user with the username when CIC users are synchronized to CAM and a user with the same username already exists in CAM; TakeOver: Replace, that is, directly replace the existing CAM user with the synchronized CIC user when CIC users are synchronized to CAM and a user with the same username already exists in CAM.
 * @method string getDeletionStrategy() Obtain Deletion policy. It indicates the handling policy for CAM users already synchronized when the CAM user synchronization is deleted. Valid values: Delete: Delete the CAM users already synchronized from CIC to CAM when the CAM user synchronization is deleted; Keep: Keep the CAM users already synchronized from CIC to CAM when the CAM user synchronization is deleted.
 * @method void setDeletionStrategy(string $DeletionStrategy) Set Deletion policy. It indicates the handling policy for CAM users already synchronized when the CAM user synchronization is deleted. Valid values: Delete: Delete the CAM users already synchronized from CIC to CAM when the CAM user synchronization is deleted; Keep: Keep the CAM users already synchronized from CIC to CAM when the CAM user synchronization is deleted.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 * @method string getTargetType() Obtain Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
 * @method void setTargetType(string $TargetType) Set Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
 */
class UserProvisioning extends AbstractModel
{
    /**
     * @var string CAM user synchronization status. Valid values:

Enabled: CAM user synchronization is enabled.
Disabled: CAM user synchronization is disabled.
     */
    public $UserProvisioningId;

    /**
     * @var string Description.
     */
    public $Description;

    /**
     * @var string CAM user synchronization status. Valid values:

Enabled: CAM user synchronization is enabled.
Disabled: CAM user synchronization is disabled.
     */
    public $Status;

    /**
     * @var string Identity ID for the CAM user synchronization. Valid values:
When the PrincipalType value is Group, it is the CIC user group ID (g-********).
When the PrincipalType value is User, it is the CIC user ID (u-********).
     */
    public $PrincipalId;

    /**
     * @var string Identity name for the CAM user synchronization. Valid values:When the PrincipalType value is Group, it is the CIC user group name.
When the PrincipalType value is User, it is the CIC user name.
     */
    public $PrincipalName;

    /**
     * @var string Identity type for the CAM user synchronization. Valid values:

User: indicates that the identity for the CAM user synchronization is a CIC user.
Group: indicates that the identity for the CAM user synchronization is a CIC user group.
     */
    public $PrincipalType;

    /**
     * @var integer UIN of the target account of the Tencent Cloud Organization.
     */
    public $TargetUin;

    /**
     * @var string Name of the target account of the Tencent Cloud Organization.
     */
    public $TargetName;

    /**
     * @var string Conflict policy. It indicates the handling policy for existence of a user with the same username when CIC users are synchronized to CAM. Valid values: KeepBoth: Keep both, that is, add the _cic suffix to the CIC user's username and then try to create a CAM user with the username when CIC users are synchronized to CAM and a user with the same username already exists in CAM; TakeOver: Replace, that is, directly replace the existing CAM user with the synchronized CIC user when CIC users are synchronized to CAM and a user with the same username already exists in CAM.
     */
    public $DuplicationStrategy;

    /**
     * @var string Deletion policy. It indicates the handling policy for CAM users already synchronized when the CAM user synchronization is deleted. Valid values: Delete: Delete the CAM users already synchronized from CIC to CAM when the CAM user synchronization is deleted; Keep: Keep the CAM users already synchronized from CIC to CAM when the CAM user synchronization is deleted.
     */
    public $DeletionStrategy;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @var string Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
     */
    public $TargetType;

    /**
     * @param string $UserProvisioningId CAM user synchronization status. Valid values:

Enabled: CAM user synchronization is enabled.
Disabled: CAM user synchronization is disabled.
     * @param string $Description Description.
     * @param string $Status CAM user synchronization status. Valid values:

Enabled: CAM user synchronization is enabled.
Disabled: CAM user synchronization is disabled.
     * @param string $PrincipalId Identity ID for the CAM user synchronization. Valid values:
When the PrincipalType value is Group, it is the CIC user group ID (g-********).
When the PrincipalType value is User, it is the CIC user ID (u-********).
     * @param string $PrincipalName Identity name for the CAM user synchronization. Valid values:When the PrincipalType value is Group, it is the CIC user group name.
When the PrincipalType value is User, it is the CIC user name.
     * @param string $PrincipalType Identity type for the CAM user synchronization. Valid values:

User: indicates that the identity for the CAM user synchronization is a CIC user.
Group: indicates that the identity for the CAM user synchronization is a CIC user group.
     * @param integer $TargetUin UIN of the target account of the Tencent Cloud Organization.
     * @param string $TargetName Name of the target account of the Tencent Cloud Organization.
     * @param string $DuplicationStrategy Conflict policy. It indicates the handling policy for existence of a user with the same username when CIC users are synchronized to CAM. Valid values: KeepBoth: Keep both, that is, add the _cic suffix to the CIC user's username and then try to create a CAM user with the username when CIC users are synchronized to CAM and a user with the same username already exists in CAM; TakeOver: Replace, that is, directly replace the existing CAM user with the synchronized CIC user when CIC users are synchronized to CAM and a user with the same username already exists in CAM.
     * @param string $DeletionStrategy Deletion policy. It indicates the handling policy for CAM users already synchronized when the CAM user synchronization is deleted. Valid values: Delete: Delete the CAM users already synchronized from CIC to CAM when the CAM user synchronization is deleted; Keep: Keep the CAM users already synchronized from CIC to CAM when the CAM user synchronization is deleted.
     * @param string $CreateTime Creation time.
     * @param string $UpdateTime Update time.
     * @param string $TargetType Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
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
        if (array_key_exists("UserProvisioningId",$param) and $param["UserProvisioningId"] !== null) {
            $this->UserProvisioningId = $param["UserProvisioningId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PrincipalId",$param) and $param["PrincipalId"] !== null) {
            $this->PrincipalId = $param["PrincipalId"];
        }

        if (array_key_exists("PrincipalName",$param) and $param["PrincipalName"] !== null) {
            $this->PrincipalName = $param["PrincipalName"];
        }

        if (array_key_exists("PrincipalType",$param) and $param["PrincipalType"] !== null) {
            $this->PrincipalType = $param["PrincipalType"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("DuplicationStrategy",$param) and $param["DuplicationStrategy"] !== null) {
            $this->DuplicationStrategy = $param["DuplicationStrategy"];
        }

        if (array_key_exists("DeletionStrategy",$param) and $param["DeletionStrategy"] !== null) {
            $this->DeletionStrategy = $param["DeletionStrategy"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }
    }
}
