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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Spark query details.
 *
 * @method string getStatement() Obtain Execution statement.
 * @method void setStatement(string $Statement) Set Execution statement.
 * @method integer getDuration() Obtain Execution duration (ms).
 * @method void setDuration(integer $Duration) Set Execution duration (ms).
 * @method string getStatus() Obtain Execution status.
 * @method void setStatus(string $Status) Set Execution status.
 * @method string getId() Obtain Query ID.
 * @method void setId(string $Id) Set Query ID.
 * @method integer getScanPartitionNum() Obtain Number of scanned partitions.
 * @method void setScanPartitionNum(integer $ScanPartitionNum) Set Number of scanned partitions.
 * @method integer getScanRowNum() Obtain Total number of scanned rows.
 * @method void setScanRowNum(integer $ScanRowNum) Set Total number of scanned rows.
 * @method integer getScanFileNum() Obtain Total number of scanned files.
 * @method void setScanFileNum(integer $ScanFileNum) Set Total number of scanned files.
 * @method integer getScanTotalData() Obtain Total data volume scanned by query (bytes).
 * @method void setScanTotalData(integer $ScanTotalData) Set Total data volume scanned by query (bytes).
 * @method array getApplicationId() Obtain Application ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationId(array $ApplicationId) Set Application ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOutputRowNum() Obtain Total number of output rows.
 * @method void setOutputRowNum(integer $OutputRowNum) Set Total number of output rows.
 * @method integer getOutputFileNum() Obtain Total number of output files.
 * @method void setOutputFileNum(integer $OutputFileNum) Set Total number of output files.
 * @method integer getOutputPartitionNum() Obtain Number of output partitions.
 * @method void setOutputPartitionNum(integer $OutputPartitionNum) Set Number of output partitions.
 * @method integer getOutputTotalData() Obtain Total output data volume (bytes).
 * @method void setOutputTotalData(integer $OutputTotalData) Set Total output data volume (bytes).
 * @method integer getBeginTime() Obtain Start time.
 * @method void setBeginTime(integer $BeginTime) Set Start time.
 * @method integer getEndTime() Obtain End time.
 * @method void setEndTime(integer $EndTime) Set End time.
 */
class SparkQuery extends AbstractModel
{
    /**
     * @var string Execution statement.
     */
    public $Statement;

    /**
     * @var integer Execution duration (ms).
     */
    public $Duration;

    /**
     * @var string Execution status.
     */
    public $Status;

    /**
     * @var string Query ID.
     */
    public $Id;

    /**
     * @var integer Number of scanned partitions.
     */
    public $ScanPartitionNum;

    /**
     * @var integer Total number of scanned rows.
     */
    public $ScanRowNum;

    /**
     * @var integer Total number of scanned files.
     */
    public $ScanFileNum;

    /**
     * @var integer Total data volume scanned by query (bytes).
     */
    public $ScanTotalData;

    /**
     * @var array Application ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationId;

    /**
     * @var integer Total number of output rows.
     */
    public $OutputRowNum;

    /**
     * @var integer Total number of output files.
     */
    public $OutputFileNum;

    /**
     * @var integer Number of output partitions.
     */
    public $OutputPartitionNum;

    /**
     * @var integer Total output data volume (bytes).
     */
    public $OutputTotalData;

    /**
     * @var integer Start time.
     */
    public $BeginTime;

    /**
     * @var integer End time.
     */
    public $EndTime;

    /**
     * @param string $Statement Execution statement.
     * @param integer $Duration Execution duration (ms).
     * @param string $Status Execution status.
     * @param string $Id Query ID.
     * @param integer $ScanPartitionNum Number of scanned partitions.
     * @param integer $ScanRowNum Total number of scanned rows.
     * @param integer $ScanFileNum Total number of scanned files.
     * @param integer $ScanTotalData Total data volume scanned by query (bytes).
     * @param array $ApplicationId Application ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OutputRowNum Total number of output rows.
     * @param integer $OutputFileNum Total number of output files.
     * @param integer $OutputPartitionNum Number of output partitions.
     * @param integer $OutputTotalData Total output data volume (bytes).
     * @param integer $BeginTime Start time.
     * @param integer $EndTime End time.
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
        if (array_key_exists("Statement",$param) and $param["Statement"] !== null) {
            $this->Statement = $param["Statement"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ScanPartitionNum",$param) and $param["ScanPartitionNum"] !== null) {
            $this->ScanPartitionNum = $param["ScanPartitionNum"];
        }

        if (array_key_exists("ScanRowNum",$param) and $param["ScanRowNum"] !== null) {
            $this->ScanRowNum = $param["ScanRowNum"];
        }

        if (array_key_exists("ScanFileNum",$param) and $param["ScanFileNum"] !== null) {
            $this->ScanFileNum = $param["ScanFileNum"];
        }

        if (array_key_exists("ScanTotalData",$param) and $param["ScanTotalData"] !== null) {
            $this->ScanTotalData = $param["ScanTotalData"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("OutputRowNum",$param) and $param["OutputRowNum"] !== null) {
            $this->OutputRowNum = $param["OutputRowNum"];
        }

        if (array_key_exists("OutputFileNum",$param) and $param["OutputFileNum"] !== null) {
            $this->OutputFileNum = $param["OutputFileNum"];
        }

        if (array_key_exists("OutputPartitionNum",$param) and $param["OutputPartitionNum"] !== null) {
            $this->OutputPartitionNum = $param["OutputPartitionNum"];
        }

        if (array_key_exists("OutputTotalData",$param) and $param["OutputTotalData"] !== null) {
            $this->OutputTotalData = $param["OutputTotalData"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
