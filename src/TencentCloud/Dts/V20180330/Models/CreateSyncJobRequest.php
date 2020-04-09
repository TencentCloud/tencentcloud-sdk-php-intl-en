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
 * CreateSyncJob request structure.
 *
 * @method string getJobName() Obtain Disaster recovery sync task name
 * @method void setJobName(string $JobName) Set Disaster recovery sync task name
 * @method SyncOption getSyncOption() Obtain Configuration options of a disaster recovery sync task
 * @method void setSyncOption(SyncOption $SyncOption) Set Configuration options of a disaster recovery sync task
 * @method string getSrcDatabaseType() Obtain Source instance database type, which currently only supports mysql
 * @method void setSrcDatabaseType(string $SrcDatabaseType) Set Source instance database type, which currently only supports mysql
 * @method string getSrcAccessType() Obtain Source instance access type, which currently only supports cdb (TencentDB instances)
 * @method void setSrcAccessType(string $SrcAccessType) Set Source instance access type, which currently only supports cdb (TencentDB instances)
 * @method SyncInstanceInfo getSrcInfo() Obtain Source instance information
 * @method void setSrcInfo(SyncInstanceInfo $SrcInfo) Set Source instance information
 * @method string getDstDatabaseType() Obtain Target instance access type, which currently only supports mysql
 * @method void setDstDatabaseType(string $DstDatabaseType) Set Target instance access type, which currently only supports mysql
 * @method string getDstAccessType() Obtain Target instance access type, which currently only supports cdb (TencentDB instances)
 * @method void setDstAccessType(string $DstAccessType) Set Target instance access type, which currently only supports cdb (TencentDB instances)
 * @method SyncInstanceInfo getDstInfo() Obtain Target instance information
 * @method void setDstInfo(SyncInstanceInfo $DstInfo) Set Target instance information
 * @method string getDatabaseInfo() Obtain Information of the source table to be synced, which is described in JSON string format.
For databases with a database-table structure:
[{Database:db1,Table:[table1,table2]},{Database:db2}]
 * @method void setDatabaseInfo(string $DatabaseInfo) Set Information of the source table to be synced, which is described in JSON string format.
For databases with a database-table structure:
[{Database:db1,Table:[table1,table2]},{Database:db2}]
 */
class CreateSyncJobRequest extends AbstractModel
{
    /**
     * @var string Disaster recovery sync task name
     */
    public $JobName;

    /**
     * @var SyncOption Configuration options of a disaster recovery sync task
     */
    public $SyncOption;

    /**
     * @var string Source instance database type, which currently only supports mysql
     */
    public $SrcDatabaseType;

    /**
     * @var string Source instance access type, which currently only supports cdb (TencentDB instances)
     */
    public $SrcAccessType;

    /**
     * @var SyncInstanceInfo Source instance information
     */
    public $SrcInfo;

    /**
     * @var string Target instance access type, which currently only supports mysql
     */
    public $DstDatabaseType;

    /**
     * @var string Target instance access type, which currently only supports cdb (TencentDB instances)
     */
    public $DstAccessType;

    /**
     * @var SyncInstanceInfo Target instance information
     */
    public $DstInfo;

    /**
     * @var string Information of the source table to be synced, which is described in JSON string format.
For databases with a database-table structure:
[{Database:db1,Table:[table1,table2]},{Database:db2}]
     */
    public $DatabaseInfo;

    /**
     * @param string $JobName Disaster recovery sync task name
     * @param SyncOption $SyncOption Configuration options of a disaster recovery sync task
     * @param string $SrcDatabaseType Source instance database type, which currently only supports mysql
     * @param string $SrcAccessType Source instance access type, which currently only supports cdb (TencentDB instances)
     * @param SyncInstanceInfo $SrcInfo Source instance information
     * @param string $DstDatabaseType Target instance access type, which currently only supports mysql
     * @param string $DstAccessType Target instance access type, which currently only supports cdb (TencentDB instances)
     * @param SyncInstanceInfo $DstInfo Target instance information
     * @param string $DatabaseInfo Information of the source table to be synced, which is described in JSON string format.
For databases with a database-table structure:
[{Database:db1,Table:[table1,table2]},{Database:db2}]
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
        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("SyncOption",$param) and $param["SyncOption"] !== null) {
            $this->SyncOption = new SyncOption();
            $this->SyncOption->deserialize($param["SyncOption"]);
        }

        if (array_key_exists("SrcDatabaseType",$param) and $param["SrcDatabaseType"] !== null) {
            $this->SrcDatabaseType = $param["SrcDatabaseType"];
        }

        if (array_key_exists("SrcAccessType",$param) and $param["SrcAccessType"] !== null) {
            $this->SrcAccessType = $param["SrcAccessType"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new SyncInstanceInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstDatabaseType",$param) and $param["DstDatabaseType"] !== null) {
            $this->DstDatabaseType = $param["DstDatabaseType"];
        }

        if (array_key_exists("DstAccessType",$param) and $param["DstAccessType"] !== null) {
            $this->DstAccessType = $param["DstAccessType"];
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new SyncInstanceInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("DatabaseInfo",$param) and $param["DatabaseInfo"] !== null) {
            $this->DatabaseInfo = $param["DatabaseInfo"];
        }
    }
}
