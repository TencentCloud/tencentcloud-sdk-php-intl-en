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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The result of snapshot creation
 *
 * @method string getTableGroupId() Obtain The ID of the table group where the table resides
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setTableGroupId(string $TableGroupId) Set The ID of the table group where the table resides
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getTableName() Obtain Table name
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setTableName(string $TableName) Set Table name
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getTaskId() Obtain Task ID, which is valid for the API that creates one task at a time
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID, which is valid for the API that creates one task at a time
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method ErrorInfo getError() Obtain Error information
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setError(ErrorInfo $Error) Set Error information
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getSnapshotName() Obtain Snapshot name
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setSnapshotName(string $SnapshotName) Set Snapshot name
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getSnapshotTime() Obtain The time of the data from which the snapshot was created
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setSnapshotTime(string $SnapshotTime) Set The time of the data from which the snapshot was created
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getSnapshotDeadTime() Obtain When the snapshot expires
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setSnapshotDeadTime(string $SnapshotDeadTime) Set When the snapshot expires
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getSnapshotCreateTime() Obtain When the snapshot was created
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setSnapshotCreateTime(string $SnapshotCreateTime) Set When the snapshot was created
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getSnapshotSize() Obtain Snapshot size
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setSnapshotSize(integer $SnapshotSize) Set Snapshot size
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getSnapshotStatus() Obtain Snapshot status. Valid values: `0` (creating), `1` (normal), `2` (deleting), `3` (expired), `4` (rolling back).
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setSnapshotStatus(integer $SnapshotStatus) Set Snapshot status. Valid values: `0` (creating), `1` (normal), `2` (deleting), `3` (expired), `4` (rolling back).
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 */
class SnapshotResult extends AbstractModel
{
    /**
     * @var string The ID of the table group where the table resides
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $TableGroupId;

    /**
     * @var string Table name
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $TableName;

    /**
     * @var string Task ID, which is valid for the API that creates one task at a time
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var ErrorInfo Error information
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $Error;

    /**
     * @var string Snapshot name
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $SnapshotName;

    /**
     * @var string The time of the data from which the snapshot was created
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $SnapshotTime;

    /**
     * @var string When the snapshot expires
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $SnapshotDeadTime;

    /**
     * @var string When the snapshot was created
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $SnapshotCreateTime;

    /**
     * @var integer Snapshot size
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $SnapshotSize;

    /**
     * @var integer Snapshot status. Valid values: `0` (creating), `1` (normal), `2` (deleting), `3` (expired), `4` (rolling back).
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $SnapshotStatus;

    /**
     * @param string $TableGroupId The ID of the table group where the table resides
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $TableName Table name
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $TaskId Task ID, which is valid for the API that creates one task at a time
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param ErrorInfo $Error Error information
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $SnapshotName Snapshot name
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $SnapshotTime The time of the data from which the snapshot was created
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $SnapshotDeadTime When the snapshot expires
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $SnapshotCreateTime When the snapshot was created
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $SnapshotSize Snapshot size
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $SnapshotStatus Snapshot status. Valid values: `0` (creating), `1` (normal), `2` (deleting), `3` (expired), `4` (rolling back).
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
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
        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new ErrorInfo();
            $this->Error->deserialize($param["Error"]);
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("SnapshotTime",$param) and $param["SnapshotTime"] !== null) {
            $this->SnapshotTime = $param["SnapshotTime"];
        }

        if (array_key_exists("SnapshotDeadTime",$param) and $param["SnapshotDeadTime"] !== null) {
            $this->SnapshotDeadTime = $param["SnapshotDeadTime"];
        }

        if (array_key_exists("SnapshotCreateTime",$param) and $param["SnapshotCreateTime"] !== null) {
            $this->SnapshotCreateTime = $param["SnapshotCreateTime"];
        }

        if (array_key_exists("SnapshotSize",$param) and $param["SnapshotSize"] !== null) {
            $this->SnapshotSize = $param["SnapshotSize"];
        }

        if (array_key_exists("SnapshotStatus",$param) and $param["SnapshotStatus"] !== null) {
            $this->SnapshotStatus = $param["SnapshotStatus"];
        }
    }
}
