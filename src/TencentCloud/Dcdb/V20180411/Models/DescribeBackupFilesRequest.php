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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupFiles request structure.
 *
 * @method string getInstanceId() Obtain Query by instance ID
 * @method void setInstanceId(string $InstanceId) Set Query by instance ID
 * @method string getShardId() Obtain Query by shard ID
 * @method void setShardId(string $ShardId) Set Query by shard ID
 * @method string getBackupType() Obtain Backup type. Valid values: `Data` (data backup), `Binlog` (Binlog backup), `Errlog` (error log), `Slowlog` (slow log).
 * @method void setBackupType(string $BackupType) Set Backup type. Valid values: `Data` (data backup), `Binlog` (Binlog backup), `Errlog` (error log), `Slowlog` (slow log).
 * @method string getStartTime() Obtain Query by start time
 * @method void setStartTime(string $StartTime) Set Query by start time
 * @method string getEndTime() Obtain Query by end time
 * @method void setEndTime(string $EndTime) Set Query by end time
 * @method integer getLimit() Obtain Pagination parameter
 * @method void setLimit(integer $Limit) Set Pagination parameter
 * @method integer getOffset() Obtain Pagination parameter
 * @method void setOffset(integer $Offset) Set Pagination parameter
 * @method string getOrderBy() Obtain Sorting dimension. Valid values: `Time`, `Size`.
 * @method void setOrderBy(string $OrderBy) Set Sorting dimension. Valid values: `Time`, `Size`.
 * @method string getOrderType() Obtain Sorting order. Valid values: `DESC`, `ASC`.
 * @method void setOrderType(string $OrderType) Set Sorting order. Valid values: `DESC`, `ASC`.
 */
class DescribeBackupFilesRequest extends AbstractModel
{
    /**
     * @var string Query by instance ID
     */
    public $InstanceId;

    /**
     * @var string Query by shard ID
     */
    public $ShardId;

    /**
     * @var string Backup type. Valid values: `Data` (data backup), `Binlog` (Binlog backup), `Errlog` (error log), `Slowlog` (slow log).
     */
    public $BackupType;

    /**
     * @var string Query by start time
     */
    public $StartTime;

    /**
     * @var string Query by end time
     */
    public $EndTime;

    /**
     * @var integer Pagination parameter
     */
    public $Limit;

    /**
     * @var integer Pagination parameter
     */
    public $Offset;

    /**
     * @var string Sorting dimension. Valid values: `Time`, `Size`.
     */
    public $OrderBy;

    /**
     * @var string Sorting order. Valid values: `DESC`, `ASC`.
     */
    public $OrderType;

    /**
     * @param string $InstanceId Query by instance ID
     * @param string $ShardId Query by shard ID
     * @param string $BackupType Backup type. Valid values: `Data` (data backup), `Binlog` (Binlog backup), `Errlog` (error log), `Slowlog` (slow log).
     * @param string $StartTime Query by start time
     * @param string $EndTime Query by end time
     * @param integer $Limit Pagination parameter
     * @param integer $Offset Pagination parameter
     * @param string $OrderBy Sorting dimension. Valid values: `Time`, `Size`.
     * @param string $OrderType Sorting order. Valid values: `DESC`, `ASC`.
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

        if (array_key_exists("ShardId",$param) and $param["ShardId"] !== null) {
            $this->ShardId = $param["ShardId"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
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

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }
    }
}
