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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Migration task details
 *
 * @method string getJobId() Obtain Data migration task ID
 * @method void setJobId(string $JobId) Set Data migration task ID
 * @method string getJobName() Obtain Data migration task name
 * @method void setJobName(string $JobName) Set Data migration task name
 * @method MigrateOption getMigrateOption() Obtain Migration task configuration options
 * @method void setMigrateOption(MigrateOption $MigrateOption) Set Migration task configuration options
 * @method string getSrcDatabaseType() Obtain Source instance database type: MySQL, Redis, MongoDB, PostgreSQL, MariaDB, Percona
 * @method void setSrcDatabaseType(string $SrcDatabaseType) Set Source instance database type: MySQL, Redis, MongoDB, PostgreSQL, MariaDB, Percona
 * @method string getSrcAccessType() Obtain Source instance access type. Value range: extranet (public network), cvm (CVM-created instance), dcg (Direct Connect-enabled instance), vpncloud (Tencent Cloud VPN-enabled instance), cdb (TencentDB instance), ccn (CCN instances)
 * @method void setSrcAccessType(string $SrcAccessType) Set Source instance access type. Value range: extranet (public network), cvm (CVM-created instance), dcg (Direct Connect-enabled instance), vpncloud (Tencent Cloud VPN-enabled instance), cdb (TencentDB instance), ccn (CCN instances)
 * @method SrcInfo getSrcInfo() Obtain Source instance information, which is correlated with the migration task type
 * @method void setSrcInfo(SrcInfo $SrcInfo) Set Source instance information, which is correlated with the migration task type
 * @method string getDstDatabaseType() Obtain Target instance access type: MySQL, Redis, MongoDB, PostgreSQL, MariaDB, Percona
 * @method void setDstDatabaseType(string $DstDatabaseType) Set Target instance access type: MySQL, Redis, MongoDB, PostgreSQL, MariaDB, Percona
 * @method string getDstAccessType() Obtain Target instance access type, which currently only supports cdb (TencentDB instance)
 * @method void setDstAccessType(string $DstAccessType) Set Target instance access type, which currently only supports cdb (TencentDB instance)
 * @method DstInfo getDstInfo() Obtain Target instance information
 * @method void setDstInfo(DstInfo $DstInfo) Set Target instance information
 * @method string getDatabaseInfo() Obtain Information of the source table to be migrated. If the entire instance is to be migrated, this field should be []
 * @method void setDatabaseInfo(string $DatabaseInfo) Set Information of the source table to be migrated. If the entire instance is to be migrated, this field should be []
 * @method string getCreateTime() Obtain Task creation/submission time
 * @method void setCreateTime(string $CreateTime) Set Task creation/submission time
 * @method string getStartTime() Obtain Task start time
 * @method void setStartTime(string $StartTime) Set Task start time
 * @method string getEndTime() Obtain Task end time
 * @method void setEndTime(string $EndTime) Set Task end time
 * @method integer getStatus() Obtain Task status. Value range: 1 (Creating), 3 (Checking), 4 (CheckPass), 5 (CheckNotPass), 7 (Running), 8 (ReadyComplete), 9 (Success), 10 (Failed), 11 (Stopping), 12 (Completing)
 * @method void setStatus(integer $Status) Set Task status. Value range: 1 (Creating), 3 (Checking), 4 (CheckPass), 5 (CheckNotPass), 7 (Running), 8 (ReadyComplete), 9 (Success), 10 (Failed), 11 (Stopping), 12 (Completing)
 * @method MigrateDetailInfo getDetail() Obtain Task details
 * @method void setDetail(MigrateDetailInfo $Detail) Set Task details
 * @method array getErrorInfo() Obtain Prompt message for task error, which is not null or empty when an error occurs with the task
 * @method void setErrorInfo(array $ErrorInfo) Set Prompt message for task error, which is not null or empty when an error occurs with the task
 * @method array getTags() Obtain Tag
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getSrcInfoMulti() Obtain Information of the source instance, a cluster edition instance whose access type is not `cdb`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSrcInfoMulti(array $SrcInfoMulti) Set Information of the source instance, a cluster edition instance whose access type is not `cdb`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class MigrateJobInfo extends AbstractModel
{
    /**
     * @var string Data migration task ID
     */
    public $JobId;

    /**
     * @var string Data migration task name
     */
    public $JobName;

    /**
     * @var MigrateOption Migration task configuration options
     */
    public $MigrateOption;

    /**
     * @var string Source instance database type: MySQL, Redis, MongoDB, PostgreSQL, MariaDB, Percona
     */
    public $SrcDatabaseType;

    /**
     * @var string Source instance access type. Value range: extranet (public network), cvm (CVM-created instance), dcg (Direct Connect-enabled instance), vpncloud (Tencent Cloud VPN-enabled instance), cdb (TencentDB instance), ccn (CCN instances)
     */
    public $SrcAccessType;

    /**
     * @var SrcInfo Source instance information, which is correlated with the migration task type
     */
    public $SrcInfo;

    /**
     * @var string Target instance access type: MySQL, Redis, MongoDB, PostgreSQL, MariaDB, Percona
     */
    public $DstDatabaseType;

    /**
     * @var string Target instance access type, which currently only supports cdb (TencentDB instance)
     */
    public $DstAccessType;

    /**
     * @var DstInfo Target instance information
     */
    public $DstInfo;

    /**
     * @var string Information of the source table to be migrated. If the entire instance is to be migrated, this field should be []
     */
    public $DatabaseInfo;

    /**
     * @var string Task creation/submission time
     */
    public $CreateTime;

    /**
     * @var string Task start time
     */
    public $StartTime;

    /**
     * @var string Task end time
     */
    public $EndTime;

    /**
     * @var integer Task status. Value range: 1 (Creating), 3 (Checking), 4 (CheckPass), 5 (CheckNotPass), 7 (Running), 8 (ReadyComplete), 9 (Success), 10 (Failed), 11 (Stopping), 12 (Completing)
     */
    public $Status;

    /**
     * @var MigrateDetailInfo Task details
     */
    public $Detail;

    /**
     * @var array Prompt message for task error, which is not null or empty when an error occurs with the task
     */
    public $ErrorInfo;

    /**
     * @var array Tag
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var array Information of the source instance, a cluster edition instance whose access type is not `cdb`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SrcInfoMulti;

    /**
     * @param string $JobId Data migration task ID
     * @param string $JobName Data migration task name
     * @param MigrateOption $MigrateOption Migration task configuration options
     * @param string $SrcDatabaseType Source instance database type: MySQL, Redis, MongoDB, PostgreSQL, MariaDB, Percona
     * @param string $SrcAccessType Source instance access type. Value range: extranet (public network), cvm (CVM-created instance), dcg (Direct Connect-enabled instance), vpncloud (Tencent Cloud VPN-enabled instance), cdb (TencentDB instance), ccn (CCN instances)
     * @param SrcInfo $SrcInfo Source instance information, which is correlated with the migration task type
     * @param string $DstDatabaseType Target instance access type: MySQL, Redis, MongoDB, PostgreSQL, MariaDB, Percona
     * @param string $DstAccessType Target instance access type, which currently only supports cdb (TencentDB instance)
     * @param DstInfo $DstInfo Target instance information
     * @param string $DatabaseInfo Information of the source table to be migrated. If the entire instance is to be migrated, this field should be []
     * @param string $CreateTime Task creation/submission time
     * @param string $StartTime Task start time
     * @param string $EndTime Task end time
     * @param integer $Status Task status. Value range: 1 (Creating), 3 (Checking), 4 (CheckPass), 5 (CheckNotPass), 7 (Running), 8 (ReadyComplete), 9 (Success), 10 (Failed), 11 (Stopping), 12 (Completing)
     * @param MigrateDetailInfo $Detail Task details
     * @param array $ErrorInfo Prompt message for task error, which is not null or empty when an error occurs with the task
     * @param array $Tags Tag
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $SrcInfoMulti Information of the source instance, a cluster edition instance whose access type is not `cdb`.
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("MigrateOption",$param) and $param["MigrateOption"] !== null) {
            $this->MigrateOption = new MigrateOption();
            $this->MigrateOption->deserialize($param["MigrateOption"]);
        }

        if (array_key_exists("SrcDatabaseType",$param) and $param["SrcDatabaseType"] !== null) {
            $this->SrcDatabaseType = $param["SrcDatabaseType"];
        }

        if (array_key_exists("SrcAccessType",$param) and $param["SrcAccessType"] !== null) {
            $this->SrcAccessType = $param["SrcAccessType"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new SrcInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstDatabaseType",$param) and $param["DstDatabaseType"] !== null) {
            $this->DstDatabaseType = $param["DstDatabaseType"];
        }

        if (array_key_exists("DstAccessType",$param) and $param["DstAccessType"] !== null) {
            $this->DstAccessType = $param["DstAccessType"];
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new DstInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("DatabaseInfo",$param) and $param["DatabaseInfo"] !== null) {
            $this->DatabaseInfo = $param["DatabaseInfo"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new MigrateDetailInfo();
            $this->Detail->deserialize($param["Detail"]);
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = [];
            foreach ($param["ErrorInfo"] as $key => $value){
                $obj = new ErrorInfo();
                $obj->deserialize($value);
                array_push($this->ErrorInfo, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SrcInfoMulti",$param) and $param["SrcInfoMulti"] !== null) {
            $this->SrcInfoMulti = [];
            foreach ($param["SrcInfoMulti"] as $key => $value){
                $obj = new SrcInfo();
                $obj->deserialize($value);
                array_push($this->SrcInfoMulti, $obj);
            }
        }
    }
}
