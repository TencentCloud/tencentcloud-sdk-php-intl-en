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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RecoverBackUpJob request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID
 * @method void setInstanceId(string $InstanceId) Set Cluster ID
 * @method integer getBackUpJobId() Obtain Task ID
 * @method void setBackUpJobId(integer $BackUpJobId) Set Task ID
 * @method integer getReplicationNum() Obtain Number of new table replicas recovered
 * @method void setReplicationNum(integer $ReplicationNum) Set Number of new table replicas recovered
 * @method integer getReserveSourceConfig() Obtain Whether to retain the configuration in the source table during recovery. 1 indicates that the configurations in the source table are retained.
 * @method void setReserveSourceConfig(integer $ReserveSourceConfig) Set Whether to retain the configuration in the source table during recovery. 1 indicates that the configurations in the source table are retained.
 * @method integer getRecoverType() Obtain 0: default; 1: cos recovery
 * @method void setRecoverType(integer $RecoverType) Set 0: default; 1: cos recovery
 * @method CosSourceInfo getCosSourceInfo() Obtain CosSourceInfo object
 * @method void setCosSourceInfo(CosSourceInfo $CosSourceInfo) Set CosSourceInfo object
 * @method integer getScheduleType() Obtain 0: default; 1: regular execution
 * @method void setScheduleType(integer $ScheduleType) Set 0: default; 1: regular execution
 * @method string getNextTime() Obtain YY-MM-DD Hour : Minute : Second
 * @method void setNextTime(string $NextTime) Set YY-MM-DD Hour : Minute : Second
 * @method string getScheduleName() Obtain Scheduling name
 * @method void setScheduleName(string $ScheduleName) Set Scheduling name
 * @method string getOperationType() Obtain create update
 * @method void setOperationType(string $OperationType) Set create update
 * @method string getRecoverScope() Obtain Recovery granularity: All, Database, and Table
 * @method void setRecoverScope(string $RecoverScope) Set Recovery granularity: All, Database, and Table
 * @method string getRecoverDatabase() Obtain Recover database: If you back up by database, this field is required. Use commas to separate databases.
 * @method void setRecoverDatabase(string $RecoverDatabase) Set Recover database: If you back up by database, this field is required. Use commas to separate databases.
 */
class RecoverBackUpJobRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $InstanceId;

    /**
     * @var integer Task ID
     */
    public $BackUpJobId;

    /**
     * @var integer Number of new table replicas recovered
     */
    public $ReplicationNum;

    /**
     * @var integer Whether to retain the configuration in the source table during recovery. 1 indicates that the configurations in the source table are retained.
     */
    public $ReserveSourceConfig;

    /**
     * @var integer 0: default; 1: cos recovery
     */
    public $RecoverType;

    /**
     * @var CosSourceInfo CosSourceInfo object
     */
    public $CosSourceInfo;

    /**
     * @var integer 0: default; 1: regular execution
     */
    public $ScheduleType;

    /**
     * @var string YY-MM-DD Hour : Minute : Second
     */
    public $NextTime;

    /**
     * @var string Scheduling name
     */
    public $ScheduleName;

    /**
     * @var string create update
     */
    public $OperationType;

    /**
     * @var string Recovery granularity: All, Database, and Table
     */
    public $RecoverScope;

    /**
     * @var string Recover database: If you back up by database, this field is required. Use commas to separate databases.
     */
    public $RecoverDatabase;

    /**
     * @param string $InstanceId Cluster ID
     * @param integer $BackUpJobId Task ID
     * @param integer $ReplicationNum Number of new table replicas recovered
     * @param integer $ReserveSourceConfig Whether to retain the configuration in the source table during recovery. 1 indicates that the configurations in the source table are retained.
     * @param integer $RecoverType 0: default; 1: cos recovery
     * @param CosSourceInfo $CosSourceInfo CosSourceInfo object
     * @param integer $ScheduleType 0: default; 1: regular execution
     * @param string $NextTime YY-MM-DD Hour : Minute : Second
     * @param string $ScheduleName Scheduling name
     * @param string $OperationType create update
     * @param string $RecoverScope Recovery granularity: All, Database, and Table
     * @param string $RecoverDatabase Recover database: If you back up by database, this field is required. Use commas to separate databases.
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

        if (array_key_exists("BackUpJobId",$param) and $param["BackUpJobId"] !== null) {
            $this->BackUpJobId = $param["BackUpJobId"];
        }

        if (array_key_exists("ReplicationNum",$param) and $param["ReplicationNum"] !== null) {
            $this->ReplicationNum = $param["ReplicationNum"];
        }

        if (array_key_exists("ReserveSourceConfig",$param) and $param["ReserveSourceConfig"] !== null) {
            $this->ReserveSourceConfig = $param["ReserveSourceConfig"];
        }

        if (array_key_exists("RecoverType",$param) and $param["RecoverType"] !== null) {
            $this->RecoverType = $param["RecoverType"];
        }

        if (array_key_exists("CosSourceInfo",$param) and $param["CosSourceInfo"] !== null) {
            $this->CosSourceInfo = new CosSourceInfo();
            $this->CosSourceInfo->deserialize($param["CosSourceInfo"]);
        }

        if (array_key_exists("ScheduleType",$param) and $param["ScheduleType"] !== null) {
            $this->ScheduleType = $param["ScheduleType"];
        }

        if (array_key_exists("NextTime",$param) and $param["NextTime"] !== null) {
            $this->NextTime = $param["NextTime"];
        }

        if (array_key_exists("ScheduleName",$param) and $param["ScheduleName"] !== null) {
            $this->ScheduleName = $param["ScheduleName"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("RecoverScope",$param) and $param["RecoverScope"] !== null) {
            $this->RecoverScope = $param["RecoverScope"];
        }

        if (array_key_exists("RecoverDatabase",$param) and $param["RecoverDatabase"] !== null) {
            $this->RecoverDatabase = $param["RecoverDatabase"];
        }
    }
}
