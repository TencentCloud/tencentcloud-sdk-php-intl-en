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
 * Status information of the user synchronization task.
 *
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method integer getTargetUin() Obtain UIN of the authorized target account of the Tencent Cloud Organization.
 * @method void setTargetUin(integer $TargetUin) Set UIN of the authorized target account of the Tencent Cloud Organization.
 * @method string getTargetType() Obtain Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
 * @method void setTargetType(string $TargetType) Set Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
 * @method string getTaskType() Obtain Task type. StartProvisioning: Start the user synchronization; DeleteProvisioning: Delete the user synchronization.
 * @method void setTaskType(string $TaskType) Set Task type. StartProvisioning: Start the user synchronization; DeleteProvisioning: Delete the user synchronization.
 * @method string getTaskStatus() Obtain Task status. InProgress: The task is in progress; Failed: The task failed; Success: The task succeeded.
 * @method void setTaskStatus(string $TaskStatus) Set Task status. InProgress: The task is in progress; Failed: The task failed; Success: The task succeeded.
 * @method string getUserProvisioningId() Obtain User synchronization ID.
 * @method void setUserProvisioningId(string $UserProvisioningId) Set User synchronization ID.
 * @method string getPrincipalId() Obtain Identity ID for the CAM user synchronization. Valid values: When the PrincipalType value is Group, it is the CIC user group ID (g-********). When the PrincipalType value is User, it is the CIC user ID (u-********).
 * @method void setPrincipalId(string $PrincipalId) Set Identity ID for the CAM user synchronization. Valid values: When the PrincipalType value is Group, it is the CIC user group ID (g-********). When the PrincipalType value is User, it is the CIC user ID (u-********).
 * @method string getPrincipalType() Obtain Identity type for the CAM user synchronization. Valid values: User: indicates that the identity for the CAM user synchronization is a CIC user; Group: indicates that the identity for the CAM user synchronization is a CIC user group.
 * @method void setPrincipalType(string $PrincipalType) Set Identity type for the CAM user synchronization. Valid values: User: indicates that the identity for the CAM user synchronization is a CIC user; Group: indicates that the identity for the CAM user synchronization is a CIC user group.
 * @method string getPrincipalName() Obtain User name or user group name.
 * @method void setPrincipalName(string $PrincipalName) Set User name or user group name.
 * @method string getDuplicationStrategy() Obtain Conflict policy. KeepBoth: Keep both; TakeOver: Replace.
 * @method void setDuplicationStrategy(string $DuplicationStrategy) Set Conflict policy. KeepBoth: Keep both; TakeOver: Replace.
 * @method string getDeletionStrategy() Obtain Deletion policy: Delete, Keep.
 * @method void setDeletionStrategy(string $DeletionStrategy) Set Deletion policy: Delete, Keep.
 */
class UserProvisioningsTask extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var integer UIN of the authorized target account of the Tencent Cloud Organization.
     */
    public $TargetUin;

    /**
     * @var string Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
     */
    public $TargetType;

    /**
     * @var string Task type. StartProvisioning: Start the user synchronization; DeleteProvisioning: Delete the user synchronization.
     */
    public $TaskType;

    /**
     * @var string Task status. InProgress: The task is in progress; Failed: The task failed; Success: The task succeeded.
     */
    public $TaskStatus;

    /**
     * @var string User synchronization ID.
     */
    public $UserProvisioningId;

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
     * @var string Conflict policy. KeepBoth: Keep both; TakeOver: Replace.
     */
    public $DuplicationStrategy;

    /**
     * @var string Deletion policy: Delete, Keep.
     */
    public $DeletionStrategy;

    /**
     * @param string $TaskId Task ID.
     * @param integer $TargetUin UIN of the authorized target account of the Tencent Cloud Organization.
     * @param string $TargetType Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
     * @param string $TaskType Task type. StartProvisioning: Start the user synchronization; DeleteProvisioning: Delete the user synchronization.
     * @param string $TaskStatus Task status. InProgress: The task is in progress; Failed: The task failed; Success: The task succeeded.
     * @param string $UserProvisioningId User synchronization ID.
     * @param string $PrincipalId Identity ID for the CAM user synchronization. Valid values: When the PrincipalType value is Group, it is the CIC user group ID (g-********). When the PrincipalType value is User, it is the CIC user ID (u-********).
     * @param string $PrincipalType Identity type for the CAM user synchronization. Valid values: User: indicates that the identity for the CAM user synchronization is a CIC user; Group: indicates that the identity for the CAM user synchronization is a CIC user group.
     * @param string $PrincipalName User name or user group name.
     * @param string $DuplicationStrategy Conflict policy. KeepBoth: Keep both; TakeOver: Replace.
     * @param string $DeletionStrategy Deletion policy: Delete, Keep.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("UserProvisioningId",$param) and $param["UserProvisioningId"] !== null) {
            $this->UserProvisioningId = $param["UserProvisioningId"];
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

        if (array_key_exists("DuplicationStrategy",$param) and $param["DuplicationStrategy"] !== null) {
            $this->DuplicationStrategy = $param["DuplicationStrategy"];
        }

        if (array_key_exists("DeletionStrategy",$param) and $param["DeletionStrategy"] !== null) {
            $this->DeletionStrategy = $param["DeletionStrategy"];
        }
    }
}
