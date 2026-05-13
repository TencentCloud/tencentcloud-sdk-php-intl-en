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
 * UnbindAutoSnapshotPolicy request structure.
 *
 * @method string getAutoSnapshotPolicyId() Obtain ID of scheduled snapshot policy to be unbound.
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) Set ID of scheduled snapshot policy to be unbound.
 * @method array getDiskIds() Obtain ID list of cloud disks from which the regular snapshot policy is unbound. specifies this parameter or the InstanceIds parameter. a minimum of one is required.
 * @method void setDiskIds(array $DiskIds) Set ID list of cloud disks from which the regular snapshot policy is unbound. specifies this parameter or the InstanceIds parameter. a minimum of one is required.
 * @method array getInstanceIds() Obtain Instance ID list to unbind the periodic snapshot policy. this parameter or the DiskIds parameter requires a minimum of one input.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID list to unbind the periodic snapshot policy. this parameter or the DiskIds parameter requires a minimum of one input.
 */
class UnbindAutoSnapshotPolicyRequest extends AbstractModel
{
    /**
     * @var string ID of scheduled snapshot policy to be unbound.
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var array ID list of cloud disks from which the regular snapshot policy is unbound. specifies this parameter or the InstanceIds parameter. a minimum of one is required.
     */
    public $DiskIds;

    /**
     * @var array Instance ID list to unbind the periodic snapshot policy. this parameter or the DiskIds parameter requires a minimum of one input.
     */
    public $InstanceIds;

    /**
     * @param string $AutoSnapshotPolicyId ID of scheduled snapshot policy to be unbound.
     * @param array $DiskIds ID list of cloud disks from which the regular snapshot policy is unbound. specifies this parameter or the InstanceIds parameter. a minimum of one is required.
     * @param array $InstanceIds Instance ID list to unbind the periodic snapshot policy. this parameter or the DiskIds parameter requires a minimum of one input.
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

        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
