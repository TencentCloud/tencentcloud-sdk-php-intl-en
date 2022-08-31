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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * This describes the detailed information of the scheduled snapshot policy.
 *
 * @method array getDiskIdSet() Obtain The list of cloud disk IDs that the current scheduled snapshot policy is bound to.
 * @method void setDiskIdSet(array $DiskIdSet) Set The list of cloud disk IDs that the current scheduled snapshot policy is bound to.
 * @method boolean getIsActivated() Obtain Whether scheduled snapshot policy is activated.
 * @method void setIsActivated(boolean $IsActivated) Set Whether scheduled snapshot policy is activated.
 * @method string getAutoSnapshotPolicyState() Obtain Scheduled snapshot policy state. Value range:<br><li>NORMAL: Normal<br><li>ISOLATED: Isolated.
 * @method void setAutoSnapshotPolicyState(string $AutoSnapshotPolicyState) Set Scheduled snapshot policy state. Value range:<br><li>NORMAL: Normal<br><li>ISOLATED: Isolated.
 * @method integer getIsCopyToRemote() Obtain Whether it is to replicate a snapshot across accounts. `1`: yes, `0`: no.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsCopyToRemote(integer $IsCopyToRemote) Set Whether it is to replicate a snapshot across accounts. `1`: yes, `0`: no.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsPermanent() Obtain Whether the snapshot created by this scheduled snapshot policy is retained permanently.
 * @method void setIsPermanent(boolean $IsPermanent) Set Whether the snapshot created by this scheduled snapshot policy is retained permanently.
 * @method string getNextTriggerTime() Obtain The time the scheduled snapshot will be triggered again.
 * @method void setNextTriggerTime(string $NextTriggerTime) Set The time the scheduled snapshot will be triggered again.
 * @method string getAutoSnapshotPolicyName() Obtain Scheduled snapshot policy name.
 * @method void setAutoSnapshotPolicyName(string $AutoSnapshotPolicyName) Set Scheduled snapshot policy name.
 * @method string getAutoSnapshotPolicyId() Obtain Scheduled snapshot policy ID.
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) Set Scheduled snapshot policy ID.
 * @method array getPolicy() Obtain The policy for executing the scheduled snapshot.
 * @method void setPolicy(array $Policy) Set The policy for executing the scheduled snapshot.
 * @method string getCreateTime() Obtain The time the scheduled snapshot policy was created.
 * @method void setCreateTime(string $CreateTime) Set The time the scheduled snapshot policy was created.
 * @method integer getRetentionDays() Obtain Number of days the snapshot created by this scheduled snapshot policy is retained.
 * @method void setRetentionDays(integer $RetentionDays) Set Number of days the snapshot created by this scheduled snapshot policy is retained.
 * @method string getCopyToAccountUin() Obtain ID of the replication target account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCopyToAccountUin(string $CopyToAccountUin) Set ID of the replication target account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getInstanceIdSet() Obtain List of IDs of the instances associated with the scheduled snapshot policy.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceIdSet(array $InstanceIdSet) Set List of IDs of the instances associated with the scheduled snapshot policy.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AutoSnapshotPolicy extends AbstractModel
{
    /**
     * @var array The list of cloud disk IDs that the current scheduled snapshot policy is bound to.
     */
    public $DiskIdSet;

    /**
     * @var boolean Whether scheduled snapshot policy is activated.
     */
    public $IsActivated;

    /**
     * @var string Scheduled snapshot policy state. Value range:<br><li>NORMAL: Normal<br><li>ISOLATED: Isolated.
     */
    public $AutoSnapshotPolicyState;

    /**
     * @var integer Whether it is to replicate a snapshot across accounts. `1`: yes, `0`: no.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsCopyToRemote;

    /**
     * @var boolean Whether the snapshot created by this scheduled snapshot policy is retained permanently.
     */
    public $IsPermanent;

    /**
     * @var string The time the scheduled snapshot will be triggered again.
     */
    public $NextTriggerTime;

    /**
     * @var string Scheduled snapshot policy name.
     */
    public $AutoSnapshotPolicyName;

    /**
     * @var string Scheduled snapshot policy ID.
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var array The policy for executing the scheduled snapshot.
     */
    public $Policy;

    /**
     * @var string The time the scheduled snapshot policy was created.
     */
    public $CreateTime;

    /**
     * @var integer Number of days the snapshot created by this scheduled snapshot policy is retained.
     */
    public $RetentionDays;

    /**
     * @var string ID of the replication target account
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CopyToAccountUin;

    /**
     * @var array List of IDs of the instances associated with the scheduled snapshot policy.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceIdSet;

    /**
     * @param array $DiskIdSet The list of cloud disk IDs that the current scheduled snapshot policy is bound to.
     * @param boolean $IsActivated Whether scheduled snapshot policy is activated.
     * @param string $AutoSnapshotPolicyState Scheduled snapshot policy state. Value range:<br><li>NORMAL: Normal<br><li>ISOLATED: Isolated.
     * @param integer $IsCopyToRemote Whether it is to replicate a snapshot across accounts. `1`: yes, `0`: no.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsPermanent Whether the snapshot created by this scheduled snapshot policy is retained permanently.
     * @param string $NextTriggerTime The time the scheduled snapshot will be triggered again.
     * @param string $AutoSnapshotPolicyName Scheduled snapshot policy name.
     * @param string $AutoSnapshotPolicyId Scheduled snapshot policy ID.
     * @param array $Policy The policy for executing the scheduled snapshot.
     * @param string $CreateTime The time the scheduled snapshot policy was created.
     * @param integer $RetentionDays Number of days the snapshot created by this scheduled snapshot policy is retained.
     * @param string $CopyToAccountUin ID of the replication target account
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $InstanceIdSet List of IDs of the instances associated with the scheduled snapshot policy.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DiskIdSet",$param) and $param["DiskIdSet"] !== null) {
            $this->DiskIdSet = $param["DiskIdSet"];
        }

        if (array_key_exists("IsActivated",$param) and $param["IsActivated"] !== null) {
            $this->IsActivated = $param["IsActivated"];
        }

        if (array_key_exists("AutoSnapshotPolicyState",$param) and $param["AutoSnapshotPolicyState"] !== null) {
            $this->AutoSnapshotPolicyState = $param["AutoSnapshotPolicyState"];
        }

        if (array_key_exists("IsCopyToRemote",$param) and $param["IsCopyToRemote"] !== null) {
            $this->IsCopyToRemote = $param["IsCopyToRemote"];
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("NextTriggerTime",$param) and $param["NextTriggerTime"] !== null) {
            $this->NextTriggerTime = $param["NextTriggerTime"];
        }

        if (array_key_exists("AutoSnapshotPolicyName",$param) and $param["AutoSnapshotPolicyName"] !== null) {
            $this->AutoSnapshotPolicyName = $param["AutoSnapshotPolicyName"];
        }

        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = [];
            foreach ($param["Policy"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->Policy, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RetentionDays",$param) and $param["RetentionDays"] !== null) {
            $this->RetentionDays = $param["RetentionDays"];
        }

        if (array_key_exists("CopyToAccountUin",$param) and $param["CopyToAccountUin"] !== null) {
            $this->CopyToAccountUin = $param["CopyToAccountUin"];
        }

        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }
    }
}
