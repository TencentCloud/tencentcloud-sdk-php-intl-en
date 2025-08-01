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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSgSnapshotFileContent request structure.
 *
 * @method string getSnapshotPolicyId() Obtain Snapshot policy IDs
 * @method void setSnapshotPolicyId(string $SnapshotPolicyId) Set Snapshot policy IDs
 * @method string getSnapshotFileId() Obtain Snapshot file ID
 * @method void setSnapshotFileId(string $SnapshotFileId) Set Snapshot file ID
 * @method string getSecurityGroupId() Obtain Security group ID
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group ID
 */
class DescribeSgSnapshotFileContentRequest extends AbstractModel
{
    /**
     * @var string Snapshot policy IDs
     */
    public $SnapshotPolicyId;

    /**
     * @var string Snapshot file ID
     */
    public $SnapshotFileId;

    /**
     * @var string Security group ID
     */
    public $SecurityGroupId;

    /**
     * @param string $SnapshotPolicyId Snapshot policy IDs
     * @param string $SnapshotFileId Snapshot file ID
     * @param string $SecurityGroupId Security group ID
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
        if (array_key_exists("SnapshotPolicyId",$param) and $param["SnapshotPolicyId"] !== null) {
            $this->SnapshotPolicyId = $param["SnapshotPolicyId"];
        }

        if (array_key_exists("SnapshotFileId",$param) and $param["SnapshotFileId"] !== null) {
            $this->SnapshotFileId = $param["SnapshotFileId"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }
    }
}
