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
 * Modify attributes of a scheduled snapshot policy
 *
 * @method string getSnapshotPolicyId() Obtain Snapshot policy IDs
 * @method void setSnapshotPolicyId(string $SnapshotPolicyId) Set Snapshot policy IDs
 * @method string getSnapshotPolicyName() Obtain Snapshot policy name
 * @method void setSnapshotPolicyName(string $SnapshotPolicyName) Set Snapshot policy name
 * @method array getBackupPolicies() Obtain Backup policy
 * @method void setBackupPolicies(array $BackupPolicies) Set Backup policy
 * @method integer getKeepTime() Obtain Snapshot retention period. Range: 1 to 365 days
 * @method void setKeepTime(integer $KeepTime) Set Snapshot retention period. Range: 1 to 365 days
 */
class BatchModifySnapshotPolicy extends AbstractModel
{
    /**
     * @var string Snapshot policy IDs
     */
    public $SnapshotPolicyId;

    /**
     * @var string Snapshot policy name
     */
    public $SnapshotPolicyName;

    /**
     * @var array Backup policy
     */
    public $BackupPolicies;

    /**
     * @var integer Snapshot retention period. Range: 1 to 365 days
     */
    public $KeepTime;

    /**
     * @param string $SnapshotPolicyId Snapshot policy IDs
     * @param string $SnapshotPolicyName Snapshot policy name
     * @param array $BackupPolicies Backup policy
     * @param integer $KeepTime Snapshot retention period. Range: 1 to 365 days
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

        if (array_key_exists("SnapshotPolicyName",$param) and $param["SnapshotPolicyName"] !== null) {
            $this->SnapshotPolicyName = $param["SnapshotPolicyName"];
        }

        if (array_key_exists("BackupPolicies",$param) and $param["BackupPolicies"] !== null) {
            $this->BackupPolicies = [];
            foreach ($param["BackupPolicies"] as $key => $value){
                $obj = new BackupPolicy();
                $obj->deserialize($value);
                array_push($this->BackupPolicies, $obj);
            }
        }

        if (array_key_exists("KeepTime",$param) and $param["KeepTime"] !== null) {
            $this->KeepTime = $param["KeepTime"];
        }
    }
}
