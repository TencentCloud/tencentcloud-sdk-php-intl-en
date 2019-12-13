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
 * @method string getAutoSnapshotPolicyId() 获取Scheduled snapshot policy ID.
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) 设置Scheduled snapshot policy ID.
 * @method array getPolicy() 获取The policy for executing the scheduled snapshot.
 * @method void setPolicy(array $Policy) 设置The policy for executing the scheduled snapshot.
 * @method string getAutoSnapshotPolicyName() 获取The name of the scheduled snapshot policy to be created. If it is left empty, the default is “Not named”. The maximum length cannot exceed 60 bytes.
 * @method void setAutoSnapshotPolicyName(string $AutoSnapshotPolicyName) 设置The name of the scheduled snapshot policy to be created. If it is left empty, the default is “Not named”. The maximum length cannot exceed 60 bytes.
 * @method boolean getIsActivated() 获取Whether or not the scheduled snapshot policy is activated. FALSE: Not activated. TRUE: Activated. The default value is TRUE.
 * @method void setIsActivated(boolean $IsActivated) 设置Whether or not the scheduled snapshot policy is activated. FALSE: Not activated. TRUE: Activated. The default value is TRUE.
 * @method boolean getIsPermanent() 获取Whether the snapshot created by this scheduled snapshot policy is retained permanently. FALSE: Not retained permanently. TRUE: Retained permanently. The default value is FALSE.
 * @method void setIsPermanent(boolean $IsPermanent) 设置Whether the snapshot created by this scheduled snapshot policy is retained permanently. FALSE: Not retained permanently. TRUE: Retained permanently. The default value is FALSE.
 * @method integer getRetentionDays() 获取The number of days for which snapshots created by this policy are retained. This parameter cannot clash with `IsPermanent`, which is, if the scheduled snapshot policy is configured to retain permanently, `RetentionDays` must be 0.
 * @method void setRetentionDays(integer $RetentionDays) 设置The number of days for which snapshots created by this policy are retained. This parameter cannot clash with `IsPermanent`, which is, if the scheduled snapshot policy is configured to retain permanently, `RetentionDays` must be 0.
 */

/**
 *ModifyAutoSnapshotPolicyAttribute request structure.
 */
class ModifyAutoSnapshotPolicyAttributeRequest extends AbstractModel
{
    /**
     * @var string Scheduled snapshot policy ID.
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var array The policy for executing the scheduled snapshot.
     */
    public $Policy;

    /**
     * @var string The name of the scheduled snapshot policy to be created. If it is left empty, the default is “Not named”. The maximum length cannot exceed 60 bytes.
     */
    public $AutoSnapshotPolicyName;

    /**
     * @var boolean Whether or not the scheduled snapshot policy is activated. FALSE: Not activated. TRUE: Activated. The default value is TRUE.
     */
    public $IsActivated;

    /**
     * @var boolean Whether the snapshot created by this scheduled snapshot policy is retained permanently. FALSE: Not retained permanently. TRUE: Retained permanently. The default value is FALSE.
     */
    public $IsPermanent;

    /**
     * @var integer The number of days for which snapshots created by this policy are retained. This parameter cannot clash with `IsPermanent`, which is, if the scheduled snapshot policy is configured to retain permanently, `RetentionDays` must be 0.
     */
    public $RetentionDays;
    /**
     * @param string $AutoSnapshotPolicyId Scheduled snapshot policy ID.
     * @param array $Policy The policy for executing the scheduled snapshot.
     * @param string $AutoSnapshotPolicyName The name of the scheduled snapshot policy to be created. If it is left empty, the default is “Not named”. The maximum length cannot exceed 60 bytes.
     * @param boolean $IsActivated Whether or not the scheduled snapshot policy is activated. FALSE: Not activated. TRUE: Activated. The default value is TRUE.
     * @param boolean $IsPermanent Whether the snapshot created by this scheduled snapshot policy is retained permanently. FALSE: Not retained permanently. TRUE: Retained permanently. The default value is FALSE.
     * @param integer $RetentionDays The number of days for which snapshots created by this policy are retained. This parameter cannot clash with `IsPermanent`, which is, if the scheduled snapshot policy is configured to retain permanently, `RetentionDays` must be 0.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
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

        if (array_key_exists("AutoSnapshotPolicyName",$param) and $param["AutoSnapshotPolicyName"] !== null) {
            $this->AutoSnapshotPolicyName = $param["AutoSnapshotPolicyName"];
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
    }
}
