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
 * ModifyAutoSnapshotPolicyAttribute request structure.
 *
 * @method string getAutoSnapshotPolicyId() Obtain Scheduled snapshot policy ID.
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) Set Scheduled snapshot policy ID.
 * @method boolean getIsActivated() Obtain Whether or not the scheduled snapshot policy is activated. FALSE: Not activated. TRUE: Activated. The default value is TRUE.
 * @method void setIsActivated(boolean $IsActivated) Set Whether or not the scheduled snapshot policy is activated. FALSE: Not activated. TRUE: Activated. The default value is TRUE.
 * @method boolean getIsPermanent() Obtain Whether the snapshot created by this scheduled snapshot policy is retained permanently. FALSE: Not retained permanently. TRUE: Retained permanently. The default value is FALSE.
 * @method void setIsPermanent(boolean $IsPermanent) Set Whether the snapshot created by this scheduled snapshot policy is retained permanently. FALSE: Not retained permanently. TRUE: Retained permanently. The default value is FALSE.
 * @method string getAutoSnapshotPolicyName() Obtain The name of the scheduled snapshot policy to be created. If it is left empty, the default is 'Not named'. The maximum length cannot exceed 60 bytes.
 * @method void setAutoSnapshotPolicyName(string $AutoSnapshotPolicyName) Set The name of the scheduled snapshot policy to be created. If it is left empty, the default is 'Not named'. The maximum length cannot exceed 60 bytes.
 * @method array getPolicy() Obtain The policy for executing the scheduled snapshot.
 * @method void setPolicy(array $Policy) Set The policy for executing the scheduled snapshot.
 * @method integer getRetentionDays() Obtain Number of days to retain the snapshots created according to this scheduled snapshot policy. If this parameter is specified, `IsPermanent` cannot be specified as `TRUE`; otherwise, they will conflict with each other.
 * @method void setRetentionDays(integer $RetentionDays) Set Number of days to retain the snapshots created according to this scheduled snapshot policy. If this parameter is specified, `IsPermanent` cannot be specified as `TRUE`; otherwise, they will conflict with each other.
 */
class ModifyAutoSnapshotPolicyAttributeRequest extends AbstractModel
{
    /**
     * @var string Scheduled snapshot policy ID.
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var boolean Whether or not the scheduled snapshot policy is activated. FALSE: Not activated. TRUE: Activated. The default value is TRUE.
     */
    public $IsActivated;

    /**
     * @var boolean Whether the snapshot created by this scheduled snapshot policy is retained permanently. FALSE: Not retained permanently. TRUE: Retained permanently. The default value is FALSE.
     */
    public $IsPermanent;

    /**
     * @var string The name of the scheduled snapshot policy to be created. If it is left empty, the default is 'Not named'. The maximum length cannot exceed 60 bytes.
     */
    public $AutoSnapshotPolicyName;

    /**
     * @var array The policy for executing the scheduled snapshot.
     */
    public $Policy;

    /**
     * @var integer Number of days to retain the snapshots created according to this scheduled snapshot policy. If this parameter is specified, `IsPermanent` cannot be specified as `TRUE`; otherwise, they will conflict with each other.
     */
    public $RetentionDays;

    /**
     * @param string $AutoSnapshotPolicyId Scheduled snapshot policy ID.
     * @param boolean $IsActivated Whether or not the scheduled snapshot policy is activated. FALSE: Not activated. TRUE: Activated. The default value is TRUE.
     * @param boolean $IsPermanent Whether the snapshot created by this scheduled snapshot policy is retained permanently. FALSE: Not retained permanently. TRUE: Retained permanently. The default value is FALSE.
     * @param string $AutoSnapshotPolicyName The name of the scheduled snapshot policy to be created. If it is left empty, the default is 'Not named'. The maximum length cannot exceed 60 bytes.
     * @param array $Policy The policy for executing the scheduled snapshot.
     * @param integer $RetentionDays Number of days to retain the snapshots created according to this scheduled snapshot policy. If this parameter is specified, `IsPermanent` cannot be specified as `TRUE`; otherwise, they will conflict with each other.
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

        if (array_key_exists("IsActivated",$param) and $param["IsActivated"] !== null) {
            $this->IsActivated = $param["IsActivated"];
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("AutoSnapshotPolicyName",$param) and $param["AutoSnapshotPolicyName"] !== null) {
            $this->AutoSnapshotPolicyName = $param["AutoSnapshotPolicyName"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = [];
            foreach ($param["Policy"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->Policy, $obj);
            }
        }

        if (array_key_exists("RetentionDays",$param) and $param["RetentionDays"] !== null) {
            $this->RetentionDays = $param["RetentionDays"];
        }
    }
}
