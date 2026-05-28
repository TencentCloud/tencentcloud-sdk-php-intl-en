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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBSArchiveLogs request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method integer getArchiveLogId() Obtain <p>Logging ID</p>
 * @method void setArchiveLogId(integer $ArchiveLogId) Set <p>Logging ID</p>
 * @method string getEndTime() Obtain <p>End time.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time.</p>
 * @method string getFilterStatus() Obtain <p>Backup status: pending, running, success, failed</p>
 * @method void setFilterStatus(string $FilterStatus) Set <p>Backup status: pending, running, success, failed</p>
 * @method integer getLimit() Obtain <p>Limit on number</p>
 * @method void setLimit(integer $Limit) Set <p>Limit on number</p>
 * @method integer getOffset() Obtain <p>Offset.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset.</p>
 * @method string getOrderBy() Obtain <p>Sorting field, enumerate: StartTime, EndTime, ExpiredTime, FileSize, BackupDuration</p>
 * @method void setOrderBy(string $OrderBy) Set <p>Sorting field, enumerate: StartTime, EndTime, ExpiredTime, FileSize, BackupDuration</p>
 * @method string getOrderType() Obtain <p>Sorting method: ASC: sequential, DESC: reverse</p>
 * @method void setOrderType(string $OrderType) Set <p>Sorting method: ASC: sequential, DESC: reverse</p>
 * @method string getStartTime() Obtain <p>Start time.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time.</p>
 */
class DescribeDBSArchiveLogsRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Logging ID</p>
     */
    public $ArchiveLogId;

    /**
     * @var string <p>End time.</p>
     */
    public $EndTime;

    /**
     * @var string <p>Backup status: pending, running, success, failed</p>
     */
    public $FilterStatus;

    /**
     * @var integer <p>Limit on number</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset.</p>
     */
    public $Offset;

    /**
     * @var string <p>Sorting field, enumerate: StartTime, EndTime, ExpiredTime, FileSize, BackupDuration</p>
     */
    public $OrderBy;

    /**
     * @var string <p>Sorting method: ASC: sequential, DESC: reverse</p>
     */
    public $OrderType;

    /**
     * @var string <p>Start time.</p>
     */
    public $StartTime;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param integer $ArchiveLogId <p>Logging ID</p>
     * @param string $EndTime <p>End time.</p>
     * @param string $FilterStatus <p>Backup status: pending, running, success, failed</p>
     * @param integer $Limit <p>Limit on number</p>
     * @param integer $Offset <p>Offset.</p>
     * @param string $OrderBy <p>Sorting field, enumerate: StartTime, EndTime, ExpiredTime, FileSize, BackupDuration</p>
     * @param string $OrderType <p>Sorting method: ASC: sequential, DESC: reverse</p>
     * @param string $StartTime <p>Start time.</p>
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

        if (array_key_exists("ArchiveLogId",$param) and $param["ArchiveLogId"] !== null) {
            $this->ArchiveLogId = $param["ArchiveLogId"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FilterStatus",$param) and $param["FilterStatus"] !== null) {
            $this->FilterStatus = $param["FilterStatus"];
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
