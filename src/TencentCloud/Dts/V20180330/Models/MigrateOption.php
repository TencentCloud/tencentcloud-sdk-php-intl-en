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
 * Migration task configuration options
 *
 * @method integer getRunMode() Obtain Task operation mode. Value range: 1 (immediate execution), 2 (scheduled execution)
 * @method void setRunMode(integer $RunMode) Set Task operation mode. Value range: 1 (immediate execution), 2 (scheduled execution)
 * @method string getExpectTime() Obtain Expected execution time in the format of yyyy-mm-dd hh:mm:ss. If runMode=2, this field is required
 * @method void setExpectTime(string $ExpectTime) Set Expected execution time in the format of yyyy-mm-dd hh:mm:ss. If runMode=2, this field is required
 * @method integer getMigrateType() Obtain Data migration type. Value range: 1 (structural migration), 2 (full migration), 3 (full + incremental migration)
 * @method void setMigrateType(integer $MigrateType) Set Data migration type. Value range: 1 (structural migration), 2 (full migration), 3 (full + incremental migration)
 * @method integer getMigrateObject() Obtain Migration subject. 1: entire instance; 2: specified table
 * @method void setMigrateObject(integer $MigrateObject) Set Migration subject. 1: entire instance; 2: specified table
 * @method integer getConsistencyType() Obtain Parameter of spot data consistency check. 1: not configured; 2: full check; 3: spot check; 4: check inconsistent tables only; 5: no check
 * @method void setConsistencyType(integer $ConsistencyType) Set Parameter of spot data consistency check. 1: not configured; 2: full check; 3: spot check; 4: check inconsistent tables only; 5: no check
 * @method integer getIsOverrideRoot() Obtain Whether to overwrite the target database with the root account of the source database. Value range: 0 (no), 1 (yes). This value should be 0 for table or structural migration
 * @method void setIsOverrideRoot(integer $IsOverrideRoot) Set Whether to overwrite the target database with the root account of the source database. Value range: 0 (no), 1 (yes). This value should be 0 for table or structural migration
 * @method string getExternParams() Obtain Additional parameters for different databases, which are described in JSON format. 
The following parameters can be defined for Redis: 
{ 
	"ClientOutputBufferHardLimit":512, 	Hard capacity limit of slave buffer (MB) 
	"ClientOutputBufferSoftLimit":512, 	Soft capacity limit of slave buffer (MB) 
	"ClientOutputBufferPersistTime":60, Soft limit duration of slave buffer (s) 
	"ReplBacklogSize":512, 	Circular buffer capacity limit (MB) 
	"ReplTimeout":120, 		Replication timeout period (s) 
}
The following parameters can be defined for MongoDB: 
{
	'SrcAuthDatabase':'admin', 
	'SrcAuthFlag': "1", 
	'SrcAuthMechanism':"SCRAM-SHA-1"
}
MySQL currently does not support configuring additional parameters.
 * @method void setExternParams(string $ExternParams) Set Additional parameters for different databases, which are described in JSON format. 
The following parameters can be defined for Redis: 
{ 
	"ClientOutputBufferHardLimit":512, 	Hard capacity limit of slave buffer (MB) 
	"ClientOutputBufferSoftLimit":512, 	Soft capacity limit of slave buffer (MB) 
	"ClientOutputBufferPersistTime":60, Soft limit duration of slave buffer (s) 
	"ReplBacklogSize":512, 	Circular buffer capacity limit (MB) 
	"ReplTimeout":120, 		Replication timeout period (s) 
}
The following parameters can be defined for MongoDB: 
{
	'SrcAuthDatabase':'admin', 
	'SrcAuthFlag': "1", 
	'SrcAuthMechanism':"SCRAM-SHA-1"
}
MySQL currently does not support configuring additional parameters.
 * @method ConsistencyParams getConsistencyParams() Obtain Only used for "spot data consistency check". It is required if ConsistencyType is spot check
 * @method void setConsistencyParams(ConsistencyParams $ConsistencyParams) Set Only used for "spot data consistency check". It is required if ConsistencyType is spot check
 */
class MigrateOption extends AbstractModel
{
    /**
     * @var integer Task operation mode. Value range: 1 (immediate execution), 2 (scheduled execution)
     */
    public $RunMode;

    /**
     * @var string Expected execution time in the format of yyyy-mm-dd hh:mm:ss. If runMode=2, this field is required
     */
    public $ExpectTime;

    /**
     * @var integer Data migration type. Value range: 1 (structural migration), 2 (full migration), 3 (full + incremental migration)
     */
    public $MigrateType;

    /**
     * @var integer Migration subject. 1: entire instance; 2: specified table
     */
    public $MigrateObject;

    /**
     * @var integer Parameter of spot data consistency check. 1: not configured; 2: full check; 3: spot check; 4: check inconsistent tables only; 5: no check
     */
    public $ConsistencyType;

    /**
     * @var integer Whether to overwrite the target database with the root account of the source database. Value range: 0 (no), 1 (yes). This value should be 0 for table or structural migration
     */
    public $IsOverrideRoot;

    /**
     * @var string Additional parameters for different databases, which are described in JSON format. 
The following parameters can be defined for Redis: 
{ 
	"ClientOutputBufferHardLimit":512, 	Hard capacity limit of slave buffer (MB) 
	"ClientOutputBufferSoftLimit":512, 	Soft capacity limit of slave buffer (MB) 
	"ClientOutputBufferPersistTime":60, Soft limit duration of slave buffer (s) 
	"ReplBacklogSize":512, 	Circular buffer capacity limit (MB) 
	"ReplTimeout":120, 		Replication timeout period (s) 
}
The following parameters can be defined for MongoDB: 
{
	'SrcAuthDatabase':'admin', 
	'SrcAuthFlag': "1", 
	'SrcAuthMechanism':"SCRAM-SHA-1"
}
MySQL currently does not support configuring additional parameters.
     */
    public $ExternParams;

    /**
     * @var ConsistencyParams Only used for "spot data consistency check". It is required if ConsistencyType is spot check
     */
    public $ConsistencyParams;

    /**
     * @param integer $RunMode Task operation mode. Value range: 1 (immediate execution), 2 (scheduled execution)
     * @param string $ExpectTime Expected execution time in the format of yyyy-mm-dd hh:mm:ss. If runMode=2, this field is required
     * @param integer $MigrateType Data migration type. Value range: 1 (structural migration), 2 (full migration), 3 (full + incremental migration)
     * @param integer $MigrateObject Migration subject. 1: entire instance; 2: specified table
     * @param integer $ConsistencyType Parameter of spot data consistency check. 1: not configured; 2: full check; 3: spot check; 4: check inconsistent tables only; 5: no check
     * @param integer $IsOverrideRoot Whether to overwrite the target database with the root account of the source database. Value range: 0 (no), 1 (yes). This value should be 0 for table or structural migration
     * @param string $ExternParams Additional parameters for different databases, which are described in JSON format. 
The following parameters can be defined for Redis: 
{ 
	"ClientOutputBufferHardLimit":512, 	Hard capacity limit of slave buffer (MB) 
	"ClientOutputBufferSoftLimit":512, 	Soft capacity limit of slave buffer (MB) 
	"ClientOutputBufferPersistTime":60, Soft limit duration of slave buffer (s) 
	"ReplBacklogSize":512, 	Circular buffer capacity limit (MB) 
	"ReplTimeout":120, 		Replication timeout period (s) 
}
The following parameters can be defined for MongoDB: 
{
	'SrcAuthDatabase':'admin', 
	'SrcAuthFlag': "1", 
	'SrcAuthMechanism':"SCRAM-SHA-1"
}
MySQL currently does not support configuring additional parameters.
     * @param ConsistencyParams $ConsistencyParams Only used for "spot data consistency check". It is required if ConsistencyType is spot check
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
        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("ExpectTime",$param) and $param["ExpectTime"] !== null) {
            $this->ExpectTime = $param["ExpectTime"];
        }

        if (array_key_exists("MigrateType",$param) and $param["MigrateType"] !== null) {
            $this->MigrateType = $param["MigrateType"];
        }

        if (array_key_exists("MigrateObject",$param) and $param["MigrateObject"] !== null) {
            $this->MigrateObject = $param["MigrateObject"];
        }

        if (array_key_exists("ConsistencyType",$param) and $param["ConsistencyType"] !== null) {
            $this->ConsistencyType = $param["ConsistencyType"];
        }

        if (array_key_exists("IsOverrideRoot",$param) and $param["IsOverrideRoot"] !== null) {
            $this->IsOverrideRoot = $param["IsOverrideRoot"];
        }

        if (array_key_exists("ExternParams",$param) and $param["ExternParams"] !== null) {
            $this->ExternParams = $param["ExternParams"];
        }

        if (array_key_exists("ConsistencyParams",$param) and $param["ConsistencyParams"] !== null) {
            $this->ConsistencyParams = new ConsistencyParams();
            $this->ConsistencyParams->deserialize($param["ConsistencyParams"]);
        }
    }
}
