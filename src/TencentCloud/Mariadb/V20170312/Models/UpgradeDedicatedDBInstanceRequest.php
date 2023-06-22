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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDedicatedDBInstance request structure.
 *
 * @method string getInstanceId() Obtain ID of the instance to be upgraded.  It is in the form of  `tdsql-ow728lmc`, which can be obtained by querying the instance details through the `DescribeDBInstances` API.
 * @method void setInstanceId(string $InstanceId) Set ID of the instance to be upgraded.  It is in the form of  `tdsql-ow728lmc`, which can be obtained by querying the instance details through the `DescribeDBInstances` API.
 * @method integer getMemory() Obtain Memory size in GB,  which can be obtained through the `DescribeFenceDBInstanceSpecs` API.
 * @method void setMemory(integer $Memory) Set Memory size in GB,  which can be obtained through the `DescribeFenceDBInstanceSpecs` API.
 * @method integer getStorage() Obtain Storage space size in GB.  You can obtain the disk space limits by querying instance specification through the `DescribeDBInstanceSpecs` API.
 * @method void setStorage(integer $Storage) Set Storage space size in GB.  You can obtain the disk space limits by querying instance specification through the `DescribeDBInstanceSpecs` API.
 * @method integer getSwitchAutoRetry() Obtain Whether to retry again when missing the switch time window. Valid values: `0` (no), `1` (yes).
 * @method void setSwitchAutoRetry(integer $SwitchAutoRetry) Set Whether to retry again when missing the switch time window. Valid values: `0` (no), `1` (yes).
 * @method string getSwitchStartTime() Obtain Switch start time
 * @method void setSwitchStartTime(string $SwitchStartTime) Set Switch start time
 * @method string getSwitchEndTime() Obtain Switch end time
 * @method void setSwitchEndTime(string $SwitchEndTime) Set Switch end time
 */
class UpgradeDedicatedDBInstanceRequest extends AbstractModel
{
    /**
     * @var string ID of the instance to be upgraded.  It is in the form of  `tdsql-ow728lmc`, which can be obtained by querying the instance details through the `DescribeDBInstances` API.
     */
    public $InstanceId;

    /**
     * @var integer Memory size in GB,  which can be obtained through the `DescribeFenceDBInstanceSpecs` API.
     */
    public $Memory;

    /**
     * @var integer Storage space size in GB.  You can obtain the disk space limits by querying instance specification through the `DescribeDBInstanceSpecs` API.
     */
    public $Storage;

    /**
     * @var integer Whether to retry again when missing the switch time window. Valid values: `0` (no), `1` (yes).
     */
    public $SwitchAutoRetry;

    /**
     * @var string Switch start time
     */
    public $SwitchStartTime;

    /**
     * @var string Switch end time
     */
    public $SwitchEndTime;

    /**
     * @param string $InstanceId ID of the instance to be upgraded.  It is in the form of  `tdsql-ow728lmc`, which can be obtained by querying the instance details through the `DescribeDBInstances` API.
     * @param integer $Memory Memory size in GB,  which can be obtained through the `DescribeFenceDBInstanceSpecs` API.
     * @param integer $Storage Storage space size in GB.  You can obtain the disk space limits by querying instance specification through the `DescribeDBInstanceSpecs` API.
     * @param integer $SwitchAutoRetry Whether to retry again when missing the switch time window. Valid values: `0` (no), `1` (yes).
     * @param string $SwitchStartTime Switch start time
     * @param string $SwitchEndTime Switch end time
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

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("SwitchAutoRetry",$param) and $param["SwitchAutoRetry"] !== null) {
            $this->SwitchAutoRetry = $param["SwitchAutoRetry"];
        }

        if (array_key_exists("SwitchStartTime",$param) and $param["SwitchStartTime"] !== null) {
            $this->SwitchStartTime = $param["SwitchStartTime"];
        }

        if (array_key_exists("SwitchEndTime",$param) and $param["SwitchEndTime"] !== null) {
            $this->SwitchEndTime = $param["SwitchEndTime"];
        }
    }
}
