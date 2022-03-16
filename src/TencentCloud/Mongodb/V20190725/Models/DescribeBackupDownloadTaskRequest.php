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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupDownloadTask request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of "cmgo-p8vnipr5", which is the same as the instance ID displayed in the TencentDB console
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of "cmgo-p8vnipr5", which is the same as the instance ID displayed in the TencentDB console
 * @method string getBackupName() Obtain The name of a backup file with download tasks to be queried
 * @method void setBackupName(string $BackupName) Set The name of a backup file with download tasks to be queried
 * @method string getStartTime() Obtain The start time of the query period. Tasks whose start time and end time fall within the query period will be queried. If it is left empty, the start time can be any time earlier than the end time.
 * @method void setStartTime(string $StartTime) Set The start time of the query period. Tasks whose start time and end time fall within the query period will be queried. If it is left empty, the start time can be any time earlier than the end time.
 * @method string getEndTime() Obtain The end time of the query period. Tasks will be queried if their start and end times fall within the query period. If it is left empty, the end time can be any time later than the start time.
 * @method void setEndTime(string $EndTime) Set The end time of the query period. Tasks will be queried if their start and end times fall within the query period. If it is left empty, the end time can be any time later than the start time.
 * @method integer getLimit() Obtain The maximum number of results returned per page. Value range: 1-100. Default value: `20`.
 * @method void setLimit(integer $Limit) Set The maximum number of results returned per page. Value range: 1-100. Default value: `20`.
 * @method integer getOffset() Obtain Offset for pagination. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset for pagination. Default value: `0`.
 * @method string getOrderBy() Obtain The field used to sort the results. Valid values: `createTime` (default), `finishTime`.
 * @method void setOrderBy(string $OrderBy) Set The field used to sort the results. Valid values: `createTime` (default), `finishTime`.
 * @method string getOrderByType() Obtain Sort order. Valid values: `asc`, `desc` (default).
 * @method void setOrderByType(string $OrderByType) Set Sort order. Valid values: `asc`, `desc` (default).
 * @method array getStatus() Obtain The status of the tasks to be queried. Valid values: `0` (waiting for execution), `1` (downloading), `2` (downloaded), `3` (download failed), `4` (waiting for retry). If it is left empty, tasks in any status will be returned.
 * @method void setStatus(array $Status) Set The status of the tasks to be queried. Valid values: `0` (waiting for execution), `1` (downloading), `2` (downloaded), `3` (download failed), `4` (waiting for retry). If it is left empty, tasks in any status will be returned.
 */
class DescribeBackupDownloadTaskRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of "cmgo-p8vnipr5", which is the same as the instance ID displayed in the TencentDB console
     */
    public $InstanceId;

    /**
     * @var string The name of a backup file with download tasks to be queried
     */
    public $BackupName;

    /**
     * @var string The start time of the query period. Tasks whose start time and end time fall within the query period will be queried. If it is left empty, the start time can be any time earlier than the end time.
     */
    public $StartTime;

    /**
     * @var string The end time of the query period. Tasks will be queried if their start and end times fall within the query period. If it is left empty, the end time can be any time later than the start time.
     */
    public $EndTime;

    /**
     * @var integer The maximum number of results returned per page. Value range: 1-100. Default value: `20`.
     */
    public $Limit;

    /**
     * @var integer Offset for pagination. Default value: `0`.
     */
    public $Offset;

    /**
     * @var string The field used to sort the results. Valid values: `createTime` (default), `finishTime`.
     */
    public $OrderBy;

    /**
     * @var string Sort order. Valid values: `asc`, `desc` (default).
     */
    public $OrderByType;

    /**
     * @var array The status of the tasks to be queried. Valid values: `0` (waiting for execution), `1` (downloading), `2` (downloaded), `3` (download failed), `4` (waiting for retry). If it is left empty, tasks in any status will be returned.
     */
    public $Status;

    /**
     * @param string $InstanceId Instance ID in the format of "cmgo-p8vnipr5", which is the same as the instance ID displayed in the TencentDB console
     * @param string $BackupName The name of a backup file with download tasks to be queried
     * @param string $StartTime The start time of the query period. Tasks whose start time and end time fall within the query period will be queried. If it is left empty, the start time can be any time earlier than the end time.
     * @param string $EndTime The end time of the query period. Tasks will be queried if their start and end times fall within the query period. If it is left empty, the end time can be any time later than the start time.
     * @param integer $Limit The maximum number of results returned per page. Value range: 1-100. Default value: `20`.
     * @param integer $Offset Offset for pagination. Default value: `0`.
     * @param string $OrderBy The field used to sort the results. Valid values: `createTime` (default), `finishTime`.
     * @param string $OrderByType Sort order. Valid values: `asc`, `desc` (default).
     * @param array $Status The status of the tasks to be queried. Valid values: `0` (waiting for execution), `1` (downloading), `2` (downloaded), `3` (download failed), `4` (waiting for retry). If it is left empty, tasks in any status will be returned.
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
