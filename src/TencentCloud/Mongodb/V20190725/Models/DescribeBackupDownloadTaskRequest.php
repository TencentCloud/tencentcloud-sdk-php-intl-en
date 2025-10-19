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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupDownloadTask request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
 * @method string getBackupName() Obtain Specifies the backup file name for filtering download tasks of the specified file. The [DescribeDBBackups](https://www.tencentcloud.comom/document/product/240/38574?from_cn_redirect=1) API can be called to obtain the backup file name.
 * @method void setBackupName(string $BackupName) Set Specifies the backup file name for filtering download tasks of the specified file. The [DescribeDBBackups](https://www.tencentcloud.comom/document/product/240/38574?from_cn_redirect=1) API can be called to obtain the backup file name.
 * @method string getStartTime() Obtain Specifies the task within the query time range, and StartTime specifies the start time. If not specified, there are no limitations on the start time by default.
 * @method void setStartTime(string $StartTime) Set Specifies the task within the query time range, and StartTime specifies the start time. If not specified, there are no limitations on the start time by default.
 * @method string getEndTime() Obtain Specifies the task within the query time range, and EndTime specifies the end time. If not specified, there are no limitations on the end time by default.
 * @method void setEndTime(string $EndTime) Set Specifies the task within the query time range, and EndTime specifies the end time. If not specified, there are no limitations on the end time by default.
 * @method integer getLimit() Obtain Number of entries returned for this query. Value range: 1–100. The default value is 20.
 * @method void setLimit(integer $Limit) Set Number of entries returned for this query. Value range: 1–100. The default value is 20.
 * @method integer getOffset() Obtain Specifies the number of pages returned for this query. The default value is 0.
 * @method void setOffset(integer $Offset) Set Specifies the number of pages returned for this query. The default value is 0.
 * @method string getOrderBy() Obtain Sorting field.
- createTime: sort by the creation time of the backup download task. The default value is createTime.
- finishTime: sort by the completion time of the backup download task.
 * @method void setOrderBy(string $OrderBy) Set Sorting field.
- createTime: sort by the creation time of the backup download task. The default value is createTime.
- finishTime: sort by the completion time of the backup download task.
 * @method string getOrderByType() Obtain Sorting method.
- asc: ascending order.
- desc: descending order. The default value is desc.
 * @method void setOrderByType(string $OrderByType) Set Sorting method.
- asc: ascending order.
- desc: descending order. The default value is desc.
 * @method array getStatus() Obtain Specifies the task status for filtering download tasks. If this parameter is not configured, tasks of all status types will be returned.
- 0: wait for execution.
- 1: downloading.
- 2: download completed.
- 3: download failed.
- 4: wait for retry.
 * @method void setStatus(array $Status) Set Specifies the task status for filtering download tasks. If this parameter is not configured, tasks of all status types will be returned.
- 0: wait for execution.
- 1: downloading.
- 2: download completed.
- 3: download failed.
- 4: wait for retry.
 */
class DescribeBackupDownloadTaskRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
     */
    public $InstanceId;

    /**
     * @var string Specifies the backup file name for filtering download tasks of the specified file. The [DescribeDBBackups](https://www.tencentcloud.comom/document/product/240/38574?from_cn_redirect=1) API can be called to obtain the backup file name.
     */
    public $BackupName;

    /**
     * @var string Specifies the task within the query time range, and StartTime specifies the start time. If not specified, there are no limitations on the start time by default.
     */
    public $StartTime;

    /**
     * @var string Specifies the task within the query time range, and EndTime specifies the end time. If not specified, there are no limitations on the end time by default.
     */
    public $EndTime;

    /**
     * @var integer Number of entries returned for this query. Value range: 1–100. The default value is 20.
     */
    public $Limit;

    /**
     * @var integer Specifies the number of pages returned for this query. The default value is 0.
     */
    public $Offset;

    /**
     * @var string Sorting field.
- createTime: sort by the creation time of the backup download task. The default value is createTime.
- finishTime: sort by the completion time of the backup download task.
     */
    public $OrderBy;

    /**
     * @var string Sorting method.
- asc: ascending order.
- desc: descending order. The default value is desc.
     */
    public $OrderByType;

    /**
     * @var array Specifies the task status for filtering download tasks. If this parameter is not configured, tasks of all status types will be returned.
- 0: wait for execution.
- 1: downloading.
- 2: download completed.
- 3: download failed.
- 4: wait for retry.
     */
    public $Status;

    /**
     * @param string $InstanceId Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
     * @param string $BackupName Specifies the backup file name for filtering download tasks of the specified file. The [DescribeDBBackups](https://www.tencentcloud.comom/document/product/240/38574?from_cn_redirect=1) API can be called to obtain the backup file name.
     * @param string $StartTime Specifies the task within the query time range, and StartTime specifies the start time. If not specified, there are no limitations on the start time by default.
     * @param string $EndTime Specifies the task within the query time range, and EndTime specifies the end time. If not specified, there are no limitations on the end time by default.
     * @param integer $Limit Number of entries returned for this query. Value range: 1–100. The default value is 20.
     * @param integer $Offset Specifies the number of pages returned for this query. The default value is 0.
     * @param string $OrderBy Sorting field.
- createTime: sort by the creation time of the backup download task. The default value is createTime.
- finishTime: sort by the completion time of the backup download task.
     * @param string $OrderByType Sorting method.
- asc: ascending order.
- desc: descending order. The default value is desc.
     * @param array $Status Specifies the task status for filtering download tasks. If this parameter is not configured, tasks of all status types will be returned.
- 0: wait for execution.
- 1: downloading.
- 2: download completed.
- 3: download failed.
- 4: wait for retry.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
