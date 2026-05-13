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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAutoSnapshotPolicyAttribute request structure.
 *
 * @method string getAutoSnapshotPolicyId() Obtain Specifies the scheduled snapshot policy ID. query via the describeautosnapshotpolicies API (https://www.tencentcloud.com/document/product/362/33556?from_cn_redirect=1).
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) Set Specifies the scheduled snapshot policy ID. query via the describeautosnapshotpolicies API (https://www.tencentcloud.com/document/product/362/33556?from_cn_redirect=1).
 * @method boolean getIsActivated() Obtain Whether the periodic snapshot policy is activated. `false` means inactive, `true` means active. defaults to `true`.
 * @method void setIsActivated(boolean $IsActivated) Set Whether the periodic snapshot policy is activated. `false` means inactive, `true` means active. defaults to `true`.
 * @method boolean getIsPermanent() Obtain Indicates whether snapshots created by the regular snapshot policy are retained permanently. `false` means the snapshots are not retained permanently, `true` means permanent retention. defaults to `false`.
 * @method void setIsPermanent(boolean $IsPermanent) Set Indicates whether snapshots created by the regular snapshot policy are retained permanently. `false` means the snapshots are not retained permanently, `true` means permanent retention. defaults to `false`.
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
     * @var string Specifies the scheduled snapshot policy ID. query via the describeautosnapshotpolicies API (https://www.tencentcloud.com/document/product/362/33556?from_cn_redirect=1).
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var boolean Whether the periodic snapshot policy is activated. `false` means inactive, `true` means active. defaults to `true`.
     */
    public $IsActivated;

    /**
     * @var boolean Indicates whether snapshots created by the regular snapshot policy are retained permanently. `false` means the snapshots are not retained permanently, `true` means permanent retention. defaults to `false`.
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
     * @param string $AutoSnapshotPolicyId Specifies the scheduled snapshot policy ID. query via the describeautosnapshotpolicies API (https://www.tencentcloud.com/document/product/362/33556?from_cn_redirect=1).
     * @param boolean $IsActivated Whether the periodic snapshot policy is activated. `false` means inactive, `true` means active. defaults to `true`.
     * @param boolean $IsPermanent Indicates whether snapshots created by the regular snapshot policy are retained permanently. `false` means the snapshots are not retained permanently, `true` means permanent retention. defaults to `false`.
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
