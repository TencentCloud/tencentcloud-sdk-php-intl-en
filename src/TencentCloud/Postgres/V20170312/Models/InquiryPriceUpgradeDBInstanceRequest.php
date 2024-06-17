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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceUpgradeDBInstance request structure.
 *
 * @method integer getStorage() Obtain Instance disk size in GB
 * @method void setStorage(integer $Storage) Set Instance disk size in GB
 * @method integer getMemory() Obtain Instance memory size in GB
 * @method void setMemory(integer $Memory) Set Instance memory size in GB
 * @method string getDBInstanceId() Obtain Instance ID in the format of postgres-hez4fh0v
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID in the format of postgres-hez4fh0v
 * @method string getInstanceChargeType() Obtain Instance billing type. Valid value: `POSTPAID_BY_HOUR` (pay-as-you-go hourly)
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing type. Valid value: `POSTPAID_BY_HOUR` (pay-as-you-go hourly)
 * @method integer getCpu() Obtain Instance CPU size, unit: Core
 * @method void setCpu(integer $Cpu) Set Instance CPU size, unit: Core
 */
class InquiryPriceUpgradeDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer Instance disk size in GB
     */
    public $Storage;

    /**
     * @var integer Instance memory size in GB
     */
    public $Memory;

    /**
     * @var string Instance ID in the format of postgres-hez4fh0v
     */
    public $DBInstanceId;

    /**
     * @var string Instance billing type. Valid value: `POSTPAID_BY_HOUR` (pay-as-you-go hourly)
     */
    public $InstanceChargeType;

    /**
     * @var integer Instance CPU size, unit: Core
     */
    public $Cpu;

    /**
     * @param integer $Storage Instance disk size in GB
     * @param integer $Memory Instance memory size in GB
     * @param string $DBInstanceId Instance ID in the format of postgres-hez4fh0v
     * @param string $InstanceChargeType Instance billing type. Valid value: `POSTPAID_BY_HOUR` (pay-as-you-go hourly)
     * @param integer $Cpu Instance CPU size, unit: Core
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
        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }
    }
}
