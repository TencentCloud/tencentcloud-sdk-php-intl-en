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
 * DescribePrice request structure.
 *
 * @method string getZone() Obtain AZ ID of the purchased instance.
 * @method void setZone(string $Zone) Set AZ ID of the purchased instance.
 * @method integer getNodeCount() Obtain Number of instance nodes, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
 * @method void setNodeCount(integer $NodeCount) Set Number of instance nodes, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
 * @method integer getMemory() Obtain Memory size in GB, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
 * @method void setMemory(integer $Memory) Set Memory size in GB, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
 * @method integer getStorage() Obtain Storage capacity in GB. The maximum and minimum storage space can be obtained 
 by querying instance specification through the `DescribeDBInstanceSpecs` API.
 * @method void setStorage(integer $Storage) Set Storage capacity in GB. The maximum and minimum storage space can be obtained 
 by querying instance specification through the `DescribeDBInstanceSpecs` API.
 * @method integer getPeriod() Obtain Purchase period in months
 * @method void setPeriod(integer $Period) Set Purchase period in months
 * @method integer getCount() Obtain The number of instances to be purchased. Only one instance is queried for price by default.
 * @method void setCount(integer $Count) Set The number of instances to be purchased. Only one instance is queried for price by default.
 * @method string getPaymode() Obtain Billing type. Valid values: `postpaid` (pay-as-you-go), `prepaid` (monthly subscription).
 * @method void setPaymode(string $Paymode) Set Billing type. Valid values: `postpaid` (pay-as-you-go), `prepaid` (monthly subscription).
 * @method string getAmountUnit() Obtain Price unit. Valid values:   
`* pent` (cent), 
`* microPent` (microcent).
 * @method void setAmountUnit(string $AmountUnit) Set Price unit. Valid values:   
`* pent` (cent), 
`* microPent` (microcent).
 */
class DescribePriceRequest extends AbstractModel
{
    /**
     * @var string AZ ID of the purchased instance.
     */
    public $Zone;

    /**
     * @var integer Number of instance nodes, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
     */
    public $NodeCount;

    /**
     * @var integer Memory size in GB, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
     */
    public $Memory;

    /**
     * @var integer Storage capacity in GB. The maximum and minimum storage space can be obtained 
 by querying instance specification through the `DescribeDBInstanceSpecs` API.
     */
    public $Storage;

    /**
     * @var integer Purchase period in months
     */
    public $Period;

    /**
     * @var integer The number of instances to be purchased. Only one instance is queried for price by default.
     */
    public $Count;

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
     * @param integer $NodeCount Number of instance nodes, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
     * @param integer $Memory Memory size in GB, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
     * @param integer $Storage Storage capacity in GB. The maximum and minimum storage space can be obtained 
 by querying instance specification through the `DescribeDBInstanceSpecs` API.
     * @param integer $Period Purchase period in months
     * @param integer $Count The number of instances to be purchased. Only one instance is queried for price by default.
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

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Paymode",$param) and $param["Paymode"] !== null) {
            $this->Paymode = $param["Paymode"];
        }

        if (array_key_exists("AmountUnit",$param) and $param["AmountUnit"] !== null) {
            $this->AmountUnit = $param["AmountUnit"];
        }
    }
}
