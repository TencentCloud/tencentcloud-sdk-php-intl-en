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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupByFlowId response structure.
 *
 * @method integer getId() Obtain Unique identifier of the backup file. This field is used by the RestoreInstance API. For a single-database backup file, only the unique identifier of the backup file for the first record is returned. Through the DescribeBackupFiles API, IDs of all backup files that are available for rollback can be obtained for single-database backup files.
 * @method void setId(integer $Id) Set Unique identifier of the backup file. This field is used by the RestoreInstance API. For a single-database backup file, only the unique identifier of the backup file for the first record is returned. Through the DescribeBackupFiles API, IDs of all backup files that are available for rollback can be obtained for single-database backup files.
 * @method string getFileName() Obtain File name. For a single-database backup file, only the file name of the first record is returned. Through the DescribeBackupFiles API, file names of all records can be obtained for single-database backup files.
 * @method void setFileName(string $FileName) Set File name. For a single-database backup file, only the file name of the first record is returned. Through the DescribeBackupFiles API, file names of all records can be obtained for single-database backup files.
 * @method string getBackupName() Obtain Backup task name, which can be customized.
 * @method void setBackupName(string $BackupName) Set Backup task name, which can be customized.
 * @method string getStartTime() Obtain Backup start time.
 * @method void setStartTime(string $StartTime) Set Backup start time.
 * @method string getEndTime() Obtain Backup end time.
 * @method void setEndTime(string $EndTime) Set Backup end time.
 * @method integer getSize() Obtain File size, in KB. For a single-database backup file, only the file size of the first record is returned. Through the DescribeBackupFiles API, file sizes of all records can be obtained for single-database backup files.
 * @method void setSize(integer $Size) Set File size, in KB. For a single-database backup file, only the file size of the first record is returned. Through the DescribeBackupFiles API, file sizes of all records can be obtained for single-database backup files.
 * @method integer getStrategy() Obtain Backup policy: 0 - instance backup; 1 - multi-database backup. When the instance status is 0 - creating, the default value of this field is 0, which has no practical significance.
 * @method void setStrategy(integer $Strategy) Set Backup policy: 0 - instance backup; 1 - multi-database backup. When the instance status is 0 - creating, the default value of this field is 0, which has no practical significance.
 * @method integer getStatus() Obtain Backup file status. 0 - creating; 1 - successful; 2-failed.
 * @method void setStatus(integer $Status) Set Backup file status. 0 - creating; 1 - successful; 2-failed.
 * @method integer getBackupWay() Obtain Backup method. 0 - scheduled backup; 1 - manual temporary backup. When the instance status is 0 - creating, the default value of this field is 0, which has no practical significance.
 * @method void setBackupWay(integer $BackupWay) Set Backup method. 0 - scheduled backup; 1 - manual temporary backup. When the instance status is 0 - creating, the default value of this field is 0, which has no practical significance.
 * @method array getDBs() Obtain Database list. For a single-database backup file, only the database name included in the first record is returned. Through the DescribeBackupFiles API, the database names of all records can be obtained for single-database backup files.
 * @method void setDBs(array $DBs) Set Database list. For a single-database backup file, only the database name included in the first record is returned. Through the DescribeBackupFiles API, the database names of all records can be obtained for single-database backup files.
 * @method string getInternalAddr() Obtain Private network download address. For a single-database backup file, only the private network download address of the first record is returned. Through the DescribeBackupFiles API, download addresses of all records can be obtained for single-database backup files.
 * @method void setInternalAddr(string $InternalAddr) Set Private network download address. For a single-database backup file, only the private network download address of the first record is returned. Through the DescribeBackupFiles API, download addresses of all records can be obtained for single-database backup files.
 * @method string getExternalAddr() Obtain Public network download address. For a single-database backup file, only the public network download address of the first record is returned. Through the DescribeBackupFiles API, download addresses of all records can be obtained for single-database backup files.
 * @method void setExternalAddr(string $ExternalAddr) Set Public network download address. For a single-database backup file, only the public network download address of the first record is returned. Through the DescribeBackupFiles API, download addresses of all records can be obtained for single-database backup files.
 * @method string getGroupId() Obtain Aggregation ID. This value is not returned for packaging backup files. Call the DescribeBackupFiles API with this value to obtain detailed information about single-database backup files.
 * @method void setGroupId(string $GroupId) Set Aggregation ID. This value is not returned for packaging backup files. Call the DescribeBackupFiles API with this value to obtain detailed information about single-database backup files.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeBackupByFlowIdResponse extends AbstractModel
{
    /**
     * @var integer Unique identifier of the backup file. This field is used by the RestoreInstance API. For a single-database backup file, only the unique identifier of the backup file for the first record is returned. Through the DescribeBackupFiles API, IDs of all backup files that are available for rollback can be obtained for single-database backup files.
     */
    public $Id;

    /**
     * @var string File name. For a single-database backup file, only the file name of the first record is returned. Through the DescribeBackupFiles API, file names of all records can be obtained for single-database backup files.
     */
    public $FileName;

    /**
     * @var string Backup task name, which can be customized.
     */
    public $BackupName;

    /**
     * @var string Backup start time.
     */
    public $StartTime;

    /**
     * @var string Backup end time.
     */
    public $EndTime;

    /**
     * @var integer File size, in KB. For a single-database backup file, only the file size of the first record is returned. Through the DescribeBackupFiles API, file sizes of all records can be obtained for single-database backup files.
     */
    public $Size;

    /**
     * @var integer Backup policy: 0 - instance backup; 1 - multi-database backup. When the instance status is 0 - creating, the default value of this field is 0, which has no practical significance.
     */
    public $Strategy;

    /**
     * @var integer Backup file status. 0 - creating; 1 - successful; 2-failed.
     */
    public $Status;

    /**
     * @var integer Backup method. 0 - scheduled backup; 1 - manual temporary backup. When the instance status is 0 - creating, the default value of this field is 0, which has no practical significance.
     */
    public $BackupWay;

    /**
     * @var array Database list. For a single-database backup file, only the database name included in the first record is returned. Through the DescribeBackupFiles API, the database names of all records can be obtained for single-database backup files.
     */
    public $DBs;

    /**
     * @var string Private network download address. For a single-database backup file, only the private network download address of the first record is returned. Through the DescribeBackupFiles API, download addresses of all records can be obtained for single-database backup files.
     */
    public $InternalAddr;

    /**
     * @var string Public network download address. For a single-database backup file, only the public network download address of the first record is returned. Through the DescribeBackupFiles API, download addresses of all records can be obtained for single-database backup files.
     */
    public $ExternalAddr;

    /**
     * @var string Aggregation ID. This value is not returned for packaging backup files. Call the DescribeBackupFiles API with this value to obtain detailed information about single-database backup files.
     */
    public $GroupId;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Id Unique identifier of the backup file. This field is used by the RestoreInstance API. For a single-database backup file, only the unique identifier of the backup file for the first record is returned. Through the DescribeBackupFiles API, IDs of all backup files that are available for rollback can be obtained for single-database backup files.
     * @param string $FileName File name. For a single-database backup file, only the file name of the first record is returned. Through the DescribeBackupFiles API, file names of all records can be obtained for single-database backup files.
     * @param string $BackupName Backup task name, which can be customized.
     * @param string $StartTime Backup start time.
     * @param string $EndTime Backup end time.
     * @param integer $Size File size, in KB. For a single-database backup file, only the file size of the first record is returned. Through the DescribeBackupFiles API, file sizes of all records can be obtained for single-database backup files.
     * @param integer $Strategy Backup policy: 0 - instance backup; 1 - multi-database backup. When the instance status is 0 - creating, the default value of this field is 0, which has no practical significance.
     * @param integer $Status Backup file status. 0 - creating; 1 - successful; 2-failed.
     * @param integer $BackupWay Backup method. 0 - scheduled backup; 1 - manual temporary backup. When the instance status is 0 - creating, the default value of this field is 0, which has no practical significance.
     * @param array $DBs Database list. For a single-database backup file, only the database name included in the first record is returned. Through the DescribeBackupFiles API, the database names of all records can be obtained for single-database backup files.
     * @param string $InternalAddr Private network download address. For a single-database backup file, only the private network download address of the first record is returned. Through the DescribeBackupFiles API, download addresses of all records can be obtained for single-database backup files.
     * @param string $ExternalAddr Public network download address. For a single-database backup file, only the public network download address of the first record is returned. Through the DescribeBackupFiles API, download addresses of all records can be obtained for single-database backup files.
     * @param string $GroupId Aggregation ID. This value is not returned for packaging backup files. Call the DescribeBackupFiles API with this value to obtain detailed information about single-database backup files.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BackupWay",$param) and $param["BackupWay"] !== null) {
            $this->BackupWay = $param["BackupWay"];
        }

        if (array_key_exists("DBs",$param) and $param["DBs"] !== null) {
            $this->DBs = $param["DBs"];
        }

        if (array_key_exists("InternalAddr",$param) and $param["InternalAddr"] !== null) {
            $this->InternalAddr = $param["InternalAddr"];
        }

        if (array_key_exists("ExternalAddr",$param) and $param["ExternalAddr"] !== null) {
            $this->ExternalAddr = $param["ExternalAddr"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
