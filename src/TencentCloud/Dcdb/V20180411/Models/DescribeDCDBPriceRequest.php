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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDCDBPrice request structure.
 *
 * @method string getZone() Obtain AZ ID of the purchased instance.
 * @method void setZone(string $Zone) Set AZ ID of the purchased instance.
 * @method integer getCount() Obtain The number of instances to be purchased. You can purchase 1-10 instances.
 * @method void setCount(integer $Count) Set The number of instances to be purchased. You can purchase 1-10 instances.
 * @method integer getPeriod() Obtain Validity period in months
 * @method void setPeriod(integer $Period) Set Validity period in months
 * @method integer getShardNodeCount() Obtain Number of nodes in a single shard, which can be obtained
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
 * @method void setShardNodeCount(integer $ShardNodeCount) Set Number of nodes in a single shard, which can be obtained
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
 * @method integer getShardMemory() Obtain Shard memory size in GB, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
 * @method void setShardMemory(integer $ShardMemory) Set Shard memory size in GB, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
 * @method integer getShardStorage() Obtain Shard storage size in GB, which can be obtained
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
 * @method void setShardStorage(integer $ShardStorage) Set Shard storage size in GB, which can be obtained
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
 * @method integer getShardCount() Obtain The number of shards in the instance. Value range: 2-8. Upgrade your instance to have up to 64 shards if you require more.
 * @method void setShardCount(integer $ShardCount) Set The number of shards in the instance. Value range: 2-8. Upgrade your instance to have up to 64 shards if you require more.
 * @method string getPaymode() Obtain Billing type. Valid values: `postpaid` (pay-as-you-go), `prepaid` (monthly subscription).
 * @method void setPaymode(string $Paymode) Set Billing type. Valid values: `postpaid` (pay-as-you-go), `prepaid` (monthly subscription).
 * @method string getAmountUnit() Obtain Price unit. Valid values:   
`* pent` (cent), 
`* microPent` (microcent).
 * @method void setAmountUnit(string $AmountUnit) Set Price unit. Valid values:   
`* pent` (cent), 
`* microPent` (microcent).
 */
class DescribeDCDBPriceRequest extends AbstractModel
{
    /**
     * @var string AZ ID of the purchased instance.
     */
    public $Zone;

    /**
     * @var integer The number of instances to be purchased. You can purchase 1-10 instances.
     */
    public $Count;

    /**
     * @var integer Validity period in months
     */
    public $Period;

    /**
     * @var integer Number of nodes in a single shard, which can be obtained
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
     */
    public $ShardNodeCount;

    /**
     * @var integer Shard memory size in GB, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
     */
    public $ShardMemory;

    /**
     * @var integer Shard storage size in GB, which can be obtained
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
     */
    public $ShardStorage;

    /**
     * @var integer The number of shards in the instance. Value range: 2-8. Upgrade your instance to have up to 64 shards if you require more.
     */
    public $ShardCount;

    /**
     * @var string Billing type. Valid values: `postpaid` (pay-as-you-go), `prepaid` (monthly subscription).
     */
    public $Paymode;

    /**
     * @var string Price unit. Valid values:   
`* pent` (cent), 
`* microPent` (microcent).
     */
    public $AmountUnit;

    /**
     * @param string $Zone AZ ID of the purchased instance.
     * @param integer $Count The number of instances to be purchased. You can purchase 1-10 instances.
     * @param integer $Period Validity period in months
     * @param integer $ShardNodeCount Number of nodes in a single shard, which can be obtained
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
     * @param integer $ShardMemory Shard memory size in GB, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
     * @param integer $ShardStorage Shard storage size in GB, which can be obtained
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
     * @param integer $ShardCount The number of shards in the instance. Value range: 2-8. Upgrade your instance to have up to 64 shards if you require more.
     * @param string $Paymode Billing type. Valid values: `postpaid` (pay-as-you-go), `prepaid` (monthly subscription).
     * @param string $AmountUnit Price unit. Valid values:   
`* pent` (cent), 
`* microPent` (microcent).
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ShardNodeCount",$param) and $param["ShardNodeCount"] !== null) {
            $this->ShardNodeCount = $param["ShardNodeCount"];
        }

        if (array_key_exists("ShardMemory",$param) and $param["ShardMemory"] !== null) {
            $this->ShardMemory = $param["ShardMemory"];
        }

        if (array_key_exists("ShardStorage",$param) and $param["ShardStorage"] !== null) {
            $this->ShardStorage = $param["ShardStorage"];
        }

        if (array_key_exists("ShardCount",$param) and $param["ShardCount"] !== null) {
            $this->ShardCount = $param["ShardCount"];
        }

        if (array_key_exists("Paymode",$param) and $param["Paymode"] !== null) {
            $this->Paymode = $param["Paymode"];
        }

        if (array_key_exists("AmountUnit",$param) and $param["AmountUnit"] !== null) {
            $this->AmountUnit = $param["AmountUnit"];
        }
    }
}
