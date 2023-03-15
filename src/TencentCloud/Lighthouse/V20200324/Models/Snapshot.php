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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Snapshot information.
 *
 * @method string getSnapshotId() Obtain Snapshot ID.
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID.
 * @method string getDiskUsage() Obtain Type of the disk for which the snapshot is created. Valid values: <li>SYSTEM_DISK: system disk</li>
 * @method void setDiskUsage(string $DiskUsage) Set Type of the disk for which the snapshot is created. Valid values: <li>SYSTEM_DISK: system disk</li>
 * @method string getDiskId() Obtain ID of the disk for which the snapshot is created.
 * @method void setDiskId(string $DiskId) Set ID of the disk for which the snapshot is created.
 * @method integer getDiskSize() Obtain Size of the disk in GB for which the snapshot is created.
 * @method void setDiskSize(integer $DiskSize) Set Size of the disk in GB for which the snapshot is created.
 * @method string getSnapshotName() Obtain Snapshot name, which is a custom snapshot alias.
 * @method void setSnapshotName(string $SnapshotName) Set Snapshot name, which is a custom snapshot alias.
 * @method string getSnapshotState() Obtain Snapshot status. Valid values:
<li>NORMAL: normal </li>
<li>CREATING: creating</li>
<li>ROLLBACKING: rolling back</li>
 * @method void setSnapshotState(string $SnapshotState) Set Snapshot status. Valid values:
<li>NORMAL: normal </li>
<li>CREATING: creating</li>
<li>ROLLBACKING: rolling back</li>
 * @method integer getPercent() Obtain Snapshot creation or rollback progress in percentage. After success, the value of this field will become 100.
 * @method void setPercent(integer $Percent) Set Snapshot creation or rollback progress in percentage. After success, the value of this field will become 100.
 * @method string getLatestOperation() Obtain Last snapshot operation. It is recorded only during snapshot creation and rollback.
Example values: CreateInstanceSnapshot, RollbackInstanceSnapshot.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLatestOperation(string $LatestOperation) Set Last snapshot operation. It is recorded only during snapshot creation and rollback.
Example values: CreateInstanceSnapshot, RollbackInstanceSnapshot.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLatestOperationState() Obtain Last snapshot operation status. It is recorded only during snapshot creation and rollback.
Valid values:
<li>SUCCESS: operation succeeded</li>
<li>OPERATING: the operation is being executed</li>
<li>FAILED: operation failed</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLatestOperationState(string $LatestOperationState) Set Last snapshot operation status. It is recorded only during snapshot creation and rollback.
Valid values:
<li>SUCCESS: operation succeeded</li>
<li>OPERATING: the operation is being executed</li>
<li>FAILED: operation failed</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLatestOperationRequestId() Obtain Unique request ID for the last snapshot operation. It is recorded only during snapshot creation and rollback.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLatestOperationRequestId(string $LatestOperationRequestId) Set Unique request ID for the last snapshot operation. It is recorded only during snapshot creation and rollback.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Snapshot creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Snapshot creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class Snapshot extends AbstractModel
{
    /**
     * @var string Snapshot ID.
     */
    public $SnapshotId;

    /**
     * @var string Type of the disk for which the snapshot is created. Valid values: <li>SYSTEM_DISK: system disk</li>
     */
    public $DiskUsage;

    /**
     * @var string ID of the disk for which the snapshot is created.
     */
    public $DiskId;

    /**
     * @var integer Size of the disk in GB for which the snapshot is created.
     */
    public $DiskSize;

    /**
     * @var string Snapshot name, which is a custom snapshot alias.
     */
    public $SnapshotName;

    /**
     * @var string Snapshot status. Valid values:
<li>NORMAL: normal </li>
<li>CREATING: creating</li>
<li>ROLLBACKING: rolling back</li>
     */
    public $SnapshotState;

    /**
     * @var integer Snapshot creation or rollback progress in percentage. After success, the value of this field will become 100.
     */
    public $Percent;

    /**
     * @var string Last snapshot operation. It is recorded only during snapshot creation and rollback.
Example values: CreateInstanceSnapshot, RollbackInstanceSnapshot.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LatestOperation;

    /**
     * @var string Last snapshot operation status. It is recorded only during snapshot creation and rollback.
Valid values:
<li>SUCCESS: operation succeeded</li>
<li>OPERATING: the operation is being executed</li>
<li>FAILED: operation failed</li>
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LatestOperationState;

    /**
     * @var string Unique request ID for the last snapshot operation. It is recorded only during snapshot creation and rollback.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LatestOperationRequestId;

    /**
     * @var string Snapshot creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CreatedTime;

    /**
     * @param string $SnapshotId Snapshot ID.
     * @param string $DiskUsage Type of the disk for which the snapshot is created. Valid values: <li>SYSTEM_DISK: system disk</li>
     * @param string $DiskId ID of the disk for which the snapshot is created.
     * @param integer $DiskSize Size of the disk in GB for which the snapshot is created.
     * @param string $SnapshotName Snapshot name, which is a custom snapshot alias.
     * @param string $SnapshotState Snapshot status. Valid values:
<li>NORMAL: normal </li>
<li>CREATING: creating</li>
<li>ROLLBACKING: rolling back</li>
     * @param integer $Percent Snapshot creation or rollback progress in percentage. After success, the value of this field will become 100.
     * @param string $LatestOperation Last snapshot operation. It is recorded only during snapshot creation and rollback.
Example values: CreateInstanceSnapshot, RollbackInstanceSnapshot.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LatestOperationState Last snapshot operation status. It is recorded only during snapshot creation and rollback.
Valid values:
<li>SUCCESS: operation succeeded</li>
<li>OPERATING: the operation is being executed</li>
<li>FAILED: operation failed</li>
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LatestOperationRequestId Unique request ID for the last snapshot operation. It is recorded only during snapshot creation and rollback.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Snapshot creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("SnapshotState",$param) and $param["SnapshotState"] !== null) {
            $this->SnapshotState = $param["SnapshotState"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("LatestOperation",$param) and $param["LatestOperation"] !== null) {
            $this->LatestOperation = $param["LatestOperation"];
        }

        if (array_key_exists("LatestOperationState",$param) and $param["LatestOperationState"] !== null) {
            $this->LatestOperationState = $param["LatestOperationState"];
        }

        if (array_key_exists("LatestOperationRequestId",$param) and $param["LatestOperationRequestId"] !== null) {
            $this->LatestOperationRequestId = $param["LatestOperationRequestId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
