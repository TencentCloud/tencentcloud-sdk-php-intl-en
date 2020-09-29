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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Migration task type
 *
 * @method integer getMigrateId() Obtain Migration task ID
 * @method void setMigrateId(integer $MigrateId) Set Migration task ID
 * @method string getMigrateName() Obtain Migration task name
 * @method void setMigrateName(string $MigrateName) Set Migration task name
 * @method integer getAppId() Obtain User ID of migration task
 * @method void setAppId(integer $AppId) Set User ID of migration task
 * @method string getRegion() Obtain Migration task region
 * @method void setRegion(string $Region) Set Migration task region
 * @method integer getSourceType() Obtain Migration source type. 1: TencentDB for SQL Server, 2: CVM-based self-created SQL Server database; 3: SQL Server backup restoration, 4: SQL Server backup restoration (in COS mode)
 * @method void setSourceType(integer $SourceType) Set Migration source type. 1: TencentDB for SQL Server, 2: CVM-based self-created SQL Server database; 3: SQL Server backup restoration, 4: SQL Server backup restoration (in COS mode)
 * @method string getCreateTime() Obtain Migration task creation time
 * @method void setCreateTime(string $CreateTime) Set Migration task creation time
 * @method string getStartTime() Obtain Migration task start time
 * @method void setStartTime(string $StartTime) Set Migration task start time
 * @method string getEndTime() Obtain Migration task end time
 * @method void setEndTime(string $EndTime) Set Migration task end time
 * @method integer getStatus() Obtain Migration task status (1: initializing, 4: migrating, 5: migration failed, 6: migration succeeded, 7: suspended, 8: deleted, 9: suspending, 10: completing, 11: suspension failed, 12: completion failed)
 * @method void setStatus(integer $Status) Set Migration task status (1: initializing, 4: migrating, 5: migration failed, 6: migration succeeded, 7: suspended, 8: deleted, 9: suspending, 10: completing, 11: suspension failed, 12: completion failed)
 * @method string getMessage() Obtain Information
 * @method void setMessage(string $Message) Set Information
 * @method integer getCheckFlag() Obtain Whether migration task has been checked (0: not checked, 1: check succeeded, 2: check failed, 3: checking)
 * @method void setCheckFlag(integer $CheckFlag) Set Whether migration task has been checked (0: not checked, 1: check succeeded, 2: check failed, 3: checking)
 * @method integer getProgress() Obtain Migration task progress in %
 * @method void setProgress(integer $Progress) Set Migration task progress in %
 * @method MigrateDetail getMigrateDetail() Obtain Migration task progress details
 * @method void setMigrateDetail(MigrateDetail $MigrateDetail) Set Migration task progress details
 */
class MigrateTask extends AbstractModel
{
    /**
     * @var integer Migration task ID
     */
    public $MigrateId;

    /**
     * @var string Migration task name
     */
    public $MigrateName;

    /**
     * @var integer User ID of migration task
     */
    public $AppId;

    /**
     * @var string Migration task region
     */
    public $Region;

    /**
     * @var integer Migration source type. 1: TencentDB for SQL Server, 2: CVM-based self-created SQL Server database; 3: SQL Server backup restoration, 4: SQL Server backup restoration (in COS mode)
     */
    public $SourceType;

    /**
     * @var string Migration task creation time
     */
    public $CreateTime;

    /**
     * @var string Migration task start time
     */
    public $StartTime;

    /**
     * @var string Migration task end time
     */
    public $EndTime;

    /**
     * @var integer Migration task status (1: initializing, 4: migrating, 5: migration failed, 6: migration succeeded, 7: suspended, 8: deleted, 9: suspending, 10: completing, 11: suspension failed, 12: completion failed)
     */
    public $Status;

    /**
     * @var string Information
     */
    public $Message;

    /**
     * @var integer Whether migration task has been checked (0: not checked, 1: check succeeded, 2: check failed, 3: checking)
     */
    public $CheckFlag;

    /**
     * @var integer Migration task progress in %
     */
    public $Progress;

    /**
     * @var MigrateDetail Migration task progress details
     */
    public $MigrateDetail;

    /**
     * @param integer $MigrateId Migration task ID
     * @param string $MigrateName Migration task name
     * @param integer $AppId User ID of migration task
     * @param string $Region Migration task region
     * @param integer $SourceType Migration source type. 1: TencentDB for SQL Server, 2: CVM-based self-created SQL Server database; 3: SQL Server backup restoration, 4: SQL Server backup restoration (in COS mode)
     * @param string $CreateTime Migration task creation time
     * @param string $StartTime Migration task start time
     * @param string $EndTime Migration task end time
     * @param integer $Status Migration task status (1: initializing, 4: migrating, 5: migration failed, 6: migration succeeded, 7: suspended, 8: deleted, 9: suspending, 10: completing, 11: suspension failed, 12: completion failed)
     * @param string $Message Information
     * @param integer $CheckFlag Whether migration task has been checked (0: not checked, 1: check succeeded, 2: check failed, 3: checking)
     * @param integer $Progress Migration task progress in %
     * @param MigrateDetail $MigrateDetail Migration task progress details
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
        if (array_key_exists("MigrateId",$param) and $param["MigrateId"] !== null) {
            $this->MigrateId = $param["MigrateId"];
        }

        if (array_key_exists("MigrateName",$param) and $param["MigrateName"] !== null) {
            $this->MigrateName = $param["MigrateName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
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

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("CheckFlag",$param) and $param["CheckFlag"] !== null) {
            $this->CheckFlag = $param["CheckFlag"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("MigrateDetail",$param) and $param["MigrateDetail"] !== null) {
            $this->MigrateDetail = new MigrateDetail();
            $this->MigrateDetail->deserialize($param["MigrateDetail"]);
        }
    }
}
