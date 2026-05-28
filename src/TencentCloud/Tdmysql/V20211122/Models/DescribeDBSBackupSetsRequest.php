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
 * DescribeDBSBackupSets request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method integer getBackupSetId() Obtain <p>Instance Backup set ID</p>
 * @method void setBackupSetId(integer $BackupSetId) Set <p>Instance Backup set ID</p>
 * @method string getEndTime() Obtain <p>End time.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time.</p>
 * @method BackupSetsReqFilter getFilterBy() Obtain <p>Filtering Conditions</p>
 * @method void setFilterBy(BackupSetsReqFilter $FilterBy) Set <p>Filtering Conditions</p>
 * @method integer getLimit() Obtain <p>Query count [0,200]</p>
 * @method void setLimit(integer $Limit) Set <p>Query count [0,200]</p>
 * @method integer getOffset() Obtain <p>Query offset [0,INF] this time.</p>
 * @method void setOffset(integer $Offset) Set <p>Query offset [0,INF] this time.</p>
 * @method string getOrderBy() Obtain <p>StartTime,EndTime,ExpiredTime,BackupSetId,BackupDuration</p>
 * @method void setOrderBy(string $OrderBy) Set <p>StartTime,EndTime,ExpiredTime,BackupSetId,BackupDuration</p>
 * @method string getOrderType() Obtain <p>ASC,DESC</p>
 * @method void setOrderType(string $OrderType) Set <p>ASC,DESC</p>
 * @method string getStartTime() Obtain <p>Start time.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time.</p>
 */
class DescribeDBSBackupSetsRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Instance Backup set ID</p>
     */
    public $BackupSetId;

    /**
     * @var string <p>End time.</p>
     */
    public $EndTime;

    /**
     * @var BackupSetsReqFilter <p>Filtering Conditions</p>
     */
    public $FilterBy;

    /**
     * @var integer <p>Query count [0,200]</p>
     */
    public $Limit;

    /**
     * @var integer <p>Query offset [0,INF] this time.</p>
     */
    public $Offset;

    /**
     * @var string <p>StartTime,EndTime,ExpiredTime,BackupSetId,BackupDuration</p>
     */
    public $OrderBy;

    /**
     * @var string <p>ASC,DESC</p>
     */
    public $OrderType;

    /**
     * @var string <p>Start time.</p>
     */
    public $StartTime;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param integer $BackupSetId <p>Instance Backup set ID</p>
     * @param string $EndTime <p>End time.</p>
     * @param BackupSetsReqFilter $FilterBy <p>Filtering Conditions</p>
     * @param integer $Limit <p>Query count [0,200]</p>
     * @param integer $Offset <p>Query offset [0,INF] this time.</p>
     * @param string $OrderBy <p>StartTime,EndTime,ExpiredTime,BackupSetId,BackupDuration</p>
     * @param string $OrderType <p>ASC,DESC</p>
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

        if (array_key_exists("BackupSetId",$param) and $param["BackupSetId"] !== null) {
            $this->BackupSetId = $param["BackupSetId"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FilterBy",$param) and $param["FilterBy"] !== null) {
            $this->FilterBy = new BackupSetsReqFilter();
            $this->FilterBy->deserialize($param["FilterBy"]);
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
