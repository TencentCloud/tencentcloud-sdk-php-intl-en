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
 * ModifySyncJob request structure.
 *
 * @method string getJobId() Obtain ID of the disaster recovery sync task to be modified
 * @method void setJobId(string $JobId) Set ID of the disaster recovery sync task to be modified
 * @method string getJobName() Obtain Name of the disaster recovery sync task
 * @method void setJobName(string $JobName) Set Name of the disaster recovery sync task
 * @method SyncOption getSyncOption() Obtain Configuration options of a disaster recovery sync task
 * @method void setSyncOption(SyncOption $SyncOption) Set Configuration options of a disaster recovery sync task
 * @method string getDatabaseInfo() Obtain When syncing the specified table, you need to set the information of the source table to be synced, which should be described in JSON string format. Below are examples.
For databases with a database-table structure:
[{"Database":"db1","Table":["table1","table2"]},{"Database":"db2"}]
 * @method void setDatabaseInfo(string $DatabaseInfo) Set When syncing the specified table, you need to set the information of the source table to be synced, which should be described in JSON string format. Below are examples.
For databases with a database-table structure:
[{"Database":"db1","Table":["table1","table2"]},{"Database":"db2"}]
 */
class ModifySyncJobRequest extends AbstractModel
{
    /**
     * @var string ID of the disaster recovery sync task to be modified
     */
    public $JobId;

    /**
     * @var string Name of the disaster recovery sync task
     */
    public $JobName;

    /**
     * @var SyncOption Configuration options of a disaster recovery sync task
     */
    public $SyncOption;

    /**
     * @var string When syncing the specified table, you need to set the information of the source table to be synced, which should be described in JSON string format. Below are examples.
For databases with a database-table structure:
[{"Database":"db1","Table":["table1","table2"]},{"Database":"db2"}]
     */
    public $DatabaseInfo;

    /**
     * @param string $JobId ID of the disaster recovery sync task to be modified
     * @param string $JobName Name of the disaster recovery sync task
     * @param SyncOption $SyncOption Configuration options of a disaster recovery sync task
     * @param string $DatabaseInfo When syncing the specified table, you need to set the information of the source table to be synced, which should be described in JSON string format. Below are examples.
For databases with a database-table structure:
[{"Database":"db1","Table":["table1","table2"]},{"Database":"db2"}]
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

        if (array_key_exists("DatabaseInfo",$param) and $param["DatabaseInfo"] !== null) {
            $this->DatabaseInfo = $param["DatabaseInfo"];
        }
    }
}
