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
 * Disaster recovery sync task information
 *
 * @method string getJobId() Obtain Disaster recovery task ID
 * @method void setJobId(string $JobId) Set Disaster recovery task ID
 * @method string getJobName() Obtain Disaster recovery task name
 * @method void setJobName(string $JobName) Set Disaster recovery task name
 * @method SyncOption getSyncOption() Obtain Task sync
 * @method void setSyncOption(SyncOption $SyncOption) Set Task sync
 * @method string getSrcAccessType() Obtain Source access type
 * @method void setSrcAccessType(string $SrcAccessType) Set Source access type
 * @method string getSrcDatabaseType() Obtain Source data type
 * @method void setSrcDatabaseType(string $SrcDatabaseType) Set Source data type
 * @method SyncInstanceInfo getSrcInfo() Obtain Source instance information
 * @method void setSrcInfo(SyncInstanceInfo $SrcInfo) Set Source instance information
 * @method string getDstAccessType() Obtain Disaster recovery access type
 * @method void setDstAccessType(string $DstAccessType) Set Disaster recovery access type
 * @method string getDstDatabaseType() Obtain Disaster recovery data type
 * @method void setDstDatabaseType(string $DstDatabaseType) Set Disaster recovery data type
 * @method SyncInstanceInfo getDstInfo() Obtain Disaster recovery instance information
 * @method void setDstInfo(SyncInstanceInfo $DstInfo) Set Disaster recovery instance information
 * @method SyncDetailInfo getDetail() Obtain Task information
 * @method void setDetail(SyncDetailInfo $Detail) Set Task information
 * @method integer getStatus() Obtain Task status
 * @method void setStatus(integer $Status) Set Task status
 * @method string getDatabaseInfo() Obtain Table to be migrated
 * @method void setDatabaseInfo(string $DatabaseInfo) Set Table to be migrated
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 */
class SyncJobInfo extends AbstractModel
{
    /**
     * @var string Disaster recovery task ID
     */
    public $JobId;

    /**
     * @var string Disaster recovery task name
     */
    public $JobName;

    /**
     * @var SyncOption Task sync
     */
    public $SyncOption;

    /**
     * @var string Source access type
     */
    public $SrcAccessType;

    /**
     * @var string Source data type
     */
    public $SrcDatabaseType;

    /**
     * @var SyncInstanceInfo Source instance information
     */
    public $SrcInfo;

    /**
     * @var string Disaster recovery access type
     */
    public $DstAccessType;

    /**
     * @var string Disaster recovery data type
     */
    public $DstDatabaseType;

    /**
     * @var SyncInstanceInfo Disaster recovery instance information
     */
    public $DstInfo;

    /**
     * @var SyncDetailInfo Task information
     */
    public $Detail;

    /**
     * @var integer Task status
     */
    public $Status;

    /**
     * @var string Table to be migrated
     */
    public $DatabaseInfo;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @param string $JobId Disaster recovery task ID
     * @param string $JobName Disaster recovery task name
     * @param SyncOption $SyncOption Task sync
     * @param string $SrcAccessType Source access type
     * @param string $SrcDatabaseType Source data type
     * @param SyncInstanceInfo $SrcInfo Source instance information
     * @param string $DstAccessType Disaster recovery access type
     * @param string $DstDatabaseType Disaster recovery data type
     * @param SyncInstanceInfo $DstInfo Disaster recovery instance information
     * @param SyncDetailInfo $Detail Task information
     * @param integer $Status Task status
     * @param string $DatabaseInfo Table to be migrated
     * @param string $CreateTime Creation time
     * @param string $StartTime Start time
     * @param string $EndTime End time
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

        if (array_key_exists("SyncOption",$param) and $param["SyncOption"] !== null) {
            $this->SyncOption = new SyncOption();
            $this->SyncOption->deserialize($param["SyncOption"]);
        }

        if (array_key_exists("SrcAccessType",$param) and $param["SrcAccessType"] !== null) {
            $this->SrcAccessType = $param["SrcAccessType"];
        }

        if (array_key_exists("SrcDatabaseType",$param) and $param["SrcDatabaseType"] !== null) {
            $this->SrcDatabaseType = $param["SrcDatabaseType"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new SyncInstanceInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstAccessType",$param) and $param["DstAccessType"] !== null) {
            $this->DstAccessType = $param["DstAccessType"];
        }

        if (array_key_exists("DstDatabaseType",$param) and $param["DstDatabaseType"] !== null) {
            $this->DstDatabaseType = $param["DstDatabaseType"];
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new SyncInstanceInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new SyncDetailInfo();
            $this->Detail->deserialize($param["Detail"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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
    }
}
