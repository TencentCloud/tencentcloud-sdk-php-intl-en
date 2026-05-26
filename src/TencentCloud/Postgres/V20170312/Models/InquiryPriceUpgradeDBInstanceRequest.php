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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceUpgradeDBInstance request structure.
 *
 * @method integer getStorage() Obtain Instance disk size in GB
 * @method void setStorage(integer $Storage) Set Instance disk size in GB
 * @method integer getMemory() Obtain Instance memory size in GB
 * @method void setMemory(integer $Memory) Set Instance memory size in GB
 * @method string getDBInstanceId() Obtain Specifies the instance ID, such as postgres-hez4fh0v. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method void setDBInstanceId(string $DBInstanceId) Set Specifies the instance ID, such as postgres-hez4fh0v. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method string getInstanceChargeType() Obtain Instance billing type. Valid value: `POSTPAID_BY_HOUR` (pay-as-you-go hourly)
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing type. Valid value: `POSTPAID_BY_HOUR` (pay-as-you-go hourly)
 * @method integer getCpu() Obtain Specifies the instance Cpu size in unit Core.
If this parameter is not input, the Cpu is set based on the corresponding sales specification determined by Memory. for example, if Memory is 2 and the supported sales specification is 1-core 2GiB, the Cpu defaults to 1 when not input.
 * @method void setCpu(integer $Cpu) Set Specifies the instance Cpu size in unit Core.
If this parameter is not input, the Cpu is set based on the corresponding sales specification determined by Memory. for example, if Memory is 2 and the supported sales specification is 1-core 2GiB, the Cpu defaults to 1 when not input.
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
     * @var string Specifies the instance ID, such as postgres-hez4fh0v. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
     */
    public $DBInstanceId;

    /**
     * @var string Instance billing type. Valid value: `POSTPAID_BY_HOUR` (pay-as-you-go hourly)
     * @deprecated
     */
    public $InstanceChargeType;

    /**
     * @var integer Specifies the instance Cpu size in unit Core.
If this parameter is not input, the Cpu is set based on the corresponding sales specification determined by Memory. for example, if Memory is 2 and the supported sales specification is 1-core 2GiB, the Cpu defaults to 1 when not input.
     */
    public $Cpu;

    /**
     * @param integer $Storage Instance disk size in GB
     * @param integer $Memory Instance memory size in GB
     * @param string $DBInstanceId Specifies the instance ID, such as postgres-hez4fh0v. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
     * @param string $InstanceChargeType Instance billing type. Valid value: `POSTPAID_BY_HOUR` (pay-as-you-go hourly)
     * @param integer $Cpu Specifies the instance Cpu size in unit Core.
If this parameter is not input, the Cpu is set based on the corresponding sales specification determined by Memory. for example, if Memory is 2 and the supported sales specification is 1-core 2GiB, the Cpu defaults to 1 when not input.
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
