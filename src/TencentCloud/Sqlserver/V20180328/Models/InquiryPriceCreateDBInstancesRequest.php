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
 * @method string getZone() Obtain AZ ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API
 * @method void setZone(string $Zone) Set AZ ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API
 * @method integer getMemory() Obtain Memory size in GB
 * @method void setMemory(integer $Memory) Set Memory size in GB
 * @method integer getStorage() Obtain Instance capacity in GB
 * @method void setStorage(integer $Storage) Set Instance capacity in GB
 * @method string getInstanceChargeType() Obtain Billing type. Valid value: POSTPAID.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Billing type. Valid value: POSTPAID.
 * @method integer getPeriod() Obtain Length of purchase in months. Value range: 1–48. Default value: 1
 * @method void setPeriod(integer $Period) Set Length of purchase in months. Value range: 1–48. Default value: 1
 * @method integer getGoodsNum() Obtain Number of instances purchased at a time. Value range: 1–100. Default value: 1
 * @method void setGoodsNum(integer $GoodsNum) Set Number of instances purchased at a time. Value range: 1–100. Default value: 1
 * @method string getDBVersion() Obtain SQL Server version. Valid values: 2008R2 (SQL Server 2008 Enterprise), 2012SP3 (SQL Server 2012 Enterprise), 2016SP1 (SQL Server 2016 Enterprise), 201602 (SQL Server 2016 Standard), 2017 (SQL Server 2017 Enterprise). Default value: 2008R2.
 * @method void setDBVersion(string $DBVersion) Set SQL Server version. Valid values: 2008R2 (SQL Server 2008 Enterprise), 2012SP3 (SQL Server 2012 Enterprise), 2016SP1 (SQL Server 2016 Enterprise), 201602 (SQL Server 2016 Standard), 2017 (SQL Server 2017 Enterprise). Default value: 2008R2.
 */

/**
 *InquiryPriceCreateDBInstances request structure.
 */
class InquiryPriceCreateDBInstancesRequest extends AbstractModel
{
    /**
     * @var string AZ ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API
     */
    public $Zone;

    /**
     * @var integer Memory size in GB
     */
    public $Memory;

    /**
     * @var integer Instance capacity in GB
     */
    public $Storage;

    /**
     * @var string Billing type. Valid value: POSTPAID.
     */
    public $InstanceChargeType;

    /**
     * @var integer Length of purchase in months. Value range: 1–48. Default value: 1
     */
    public $Period;

    /**
     * @var integer Number of instances purchased at a time. Value range: 1–100. Default value: 1
     */
    public $GoodsNum;

    /**
     * @var string SQL Server version. Valid values: 2008R2 (SQL Server 2008 Enterprise), 2012SP3 (SQL Server 2012 Enterprise), 2016SP1 (SQL Server 2016 Enterprise), 201602 (SQL Server 2016 Standard), 2017 (SQL Server 2017 Enterprise). Default value: 2008R2.
     */
    public $DBVersion;
    /**
     * @param string $Zone AZ ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API
     * @param integer $Memory Memory size in GB
     * @param integer $Storage Instance capacity in GB
     * @param string $InstanceChargeType Billing type. Valid value: POSTPAID.
     * @param integer $Period Length of purchase in months. Value range: 1–48. Default value: 1
     * @param integer $GoodsNum Number of instances purchased at a time. Value range: 1–100. Default value: 1
     * @param string $DBVersion SQL Server version. Valid values: 2008R2 (SQL Server 2008 Enterprise), 2012SP3 (SQL Server 2012 Enterprise), 2016SP1 (SQL Server 2016 Enterprise), 201602 (SQL Server 2016 Standard), 2017 (SQL Server 2017 Enterprise). Default value: 2008R2.
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

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }
    }
}
