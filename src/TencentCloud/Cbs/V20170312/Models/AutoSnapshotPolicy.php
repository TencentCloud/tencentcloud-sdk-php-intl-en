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
 * @method string getAutoSnapshotPolicyId() Obtain Scheduled snapshot policy ID.
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) Set Scheduled snapshot policy ID.
 * @method string getAutoSnapshotPolicyName() Obtain Scheduled snapshot policy name.
 * @method void setAutoSnapshotPolicyName(string $AutoSnapshotPolicyName) Set Scheduled snapshot policy name.
 * @method string getAutoSnapshotPolicyState() Obtain Scheduled snapshot policy state. Value range:<br><li>NORMAL: Normal<br><li>ISOLATED: Isolated.
 * @method void setAutoSnapshotPolicyState(string $AutoSnapshotPolicyState) Set Scheduled snapshot policy state. Value range:<br><li>NORMAL: Normal<br><li>ISOLATED: Isolated.
 * @method boolean getIsActivated() Obtain Whether scheduled snapshot policy is activated.
 * @method void setIsActivated(boolean $IsActivated) Set Whether scheduled snapshot policy is activated.
 * @method boolean getIsPermanent() Obtain Whether the snapshot created by this scheduled snapshot policy is retained permanently.
 * @method void setIsPermanent(boolean $IsPermanent) Set Whether the snapshot created by this scheduled snapshot policy is retained permanently.
 * @method integer getRetentionDays() Obtain Number of days the snapshot created by this scheduled snapshot policy is retained.
 * @method void setRetentionDays(integer $RetentionDays) Set Number of days the snapshot created by this scheduled snapshot policy is retained.
 * @method string getCreateTime() Obtain The time the scheduled snapshot policy was created.
 * @method void setCreateTime(string $CreateTime) Set The time the scheduled snapshot policy was created.
 * @method string getNextTriggerTime() Obtain The time the scheduled snapshot will be triggered again.
 * @method void setNextTriggerTime(string $NextTriggerTime) Set The time the scheduled snapshot will be triggered again.
 * @method array getPolicy() Obtain The policy for executing the scheduled snapshot.
 * @method void setPolicy(array $Policy) Set The policy for executing the scheduled snapshot.
 * @method array getDiskIdSet() Obtain The list of cloud disk IDs that the current scheduled snapshot policy is bound to.
 * @method void setDiskIdSet(array $DiskIdSet) Set The list of cloud disk IDs that the current scheduled snapshot policy is bound to.
 */
class AutoSnapshotPolicy extends AbstractModel
{
    /**
     * @var string Scheduled snapshot policy ID.
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var string Scheduled snapshot policy name.
     */
    public $AutoSnapshotPolicyName;

    /**
     * @var string Scheduled snapshot policy state. Value range:<br><li>NORMAL: Normal<br><li>ISOLATED: Isolated.
     */
    public $AutoSnapshotPolicyState;

    /**
     * @var boolean Whether scheduled snapshot policy is activated.
     */
    public $IsActivated;

    /**
     * @var boolean Whether the snapshot created by this scheduled snapshot policy is retained permanently.
     */
    public $IsPermanent;

    /**
     * @var integer Number of days the snapshot created by this scheduled snapshot policy is retained.
     */
    public $RetentionDays;

    /**
     * @var string The time the scheduled snapshot policy was created.
     */
    public $CreateTime;

    /**
     * @var string The time the scheduled snapshot will be triggered again.
     */
    public $NextTriggerTime;

    /**
     * @var array The policy for executing the scheduled snapshot.
     */
    public $Policy;

    /**
     * @var array The list of cloud disk IDs that the current scheduled snapshot policy is bound to.
     */
    public $DiskIdSet;

    /**
     * @param string $AutoSnapshotPolicyId Scheduled snapshot policy ID.
     * @param string $AutoSnapshotPolicyName Scheduled snapshot policy name.
     * @param string $AutoSnapshotPolicyState Scheduled snapshot policy state. Value range:<br><li>NORMAL: Normal<br><li>ISOLATED: Isolated.
     * @param boolean $IsActivated Whether scheduled snapshot policy is activated.
     * @param boolean $IsPermanent Whether the snapshot created by this scheduled snapshot policy is retained permanently.
     * @param integer $RetentionDays Number of days the snapshot created by this scheduled snapshot policy is retained.
     * @param string $CreateTime The time the scheduled snapshot policy was created.
     * @param string $NextTriggerTime The time the scheduled snapshot will be triggered again.
     * @param array $Policy The policy for executing the scheduled snapshot.
     * @param array $DiskIdSet The list of cloud disk IDs that the current scheduled snapshot policy is bound to.
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
        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("AutoSnapshotPolicyName",$param) and $param["AutoSnapshotPolicyName"] !== null) {
            $this->AutoSnapshotPolicyName = $param["AutoSnapshotPolicyName"];
        }

        if (array_key_exists("AutoSnapshotPolicyState",$param) and $param["AutoSnapshotPolicyState"] !== null) {
            $this->AutoSnapshotPolicyState = $param["AutoSnapshotPolicyState"];
        }

        if (array_key_exists("IsActivated",$param) and $param["IsActivated"] !== null) {
            $this->IsActivated = $param["IsActivated"];
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("RetentionDays",$param) and $param["RetentionDays"] !== null) {
            $this->RetentionDays = $param["RetentionDays"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("NextTriggerTime",$param) and $param["NextTriggerTime"] !== null) {
            $this->NextTriggerTime = $param["NextTriggerTime"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = [];
            foreach ($param["Policy"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->Policy, $obj);
            }
        }

        if (array_key_exists("DiskIdSet",$param) and $param["DiskIdSet"] !== null) {
            $this->DiskIdSet = $param["DiskIdSet"];
        }
    }
}
