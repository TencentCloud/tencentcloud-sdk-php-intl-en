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
 * InquiryPriceCreateDBInstances request structure.
 *
 * @method string getZone() Obtain AZ ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API.
 * @method void setZone(string $Zone) Set AZ ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API.
 * @method string getSpecCode() Obtain Specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeClasses` API.
 * @method void setSpecCode(string $SpecCode) Set Specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeClasses` API.
 * @method integer getStorage() Obtain Storage capacity size in GB.
 * @method void setStorage(integer $Storage) Set Storage capacity size in GB.
 * @method integer getInstanceCount() Obtain Number of instances. Maximum value: 100. If you need to create more instances at a time, please contact customer service.
 * @method void setInstanceCount(integer $InstanceCount) Set Number of instances. Maximum value: 100. If you need to create more instances at a time, please contact customer service.
 * @method integer getPeriod() Obtain Length of purchase in months. Currently, only 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36 are supported.
 * @method void setPeriod(integer $Period) Set Length of purchase in months. Currently, only 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36 are supported.
 * @method integer getPid() Obtain [Disused] Billing ID, which can be obtained through the `Pid` field in the returned value of the `DescribeProductConfig` API.
 * @method void setPid(integer $Pid) Set [Disused] Billing ID, which can be obtained through the `Pid` field in the returned value of the `DescribeProductConfig` API.
 * @method string getInstanceChargeType() Obtain Instance billing type. Valid value: POSTPAID_BY_HOUR (pay-as-you-go)
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing type. Valid value: POSTPAID_BY_HOUR (pay-as-you-go)
 * @method string getInstanceType() Obtain Instance type. Default value: `primary`. Valid values:
`primary` (dual-server high-availability, one-primary-one-standby)
`readonly` (read-only instance)
 * @method void setInstanceType(string $InstanceType) Set Instance type. Default value: `primary`. Valid values:
`primary` (dual-server high-availability, one-primary-one-standby)
`readonly` (read-only instance)
 * @method string getDBEngine() Obtain 
 * @method void setDBEngine(string $DBEngine) Set 
 */
class InquiryPriceCreateDBInstancesRequest extends AbstractModel
{
    /**
     * @var string AZ ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API.
     */
    public $Zone;

    /**
     * @var string Specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeClasses` API.
     */
    public $SpecCode;

    /**
     * @var integer Storage capacity size in GB.
     */
    public $Storage;

    /**
     * @var integer Number of instances. Maximum value: 100. If you need to create more instances at a time, please contact customer service.
     */
    public $InstanceCount;

    /**
     * @var integer Length of purchase in months. Currently, only 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36 are supported.
     */
    public $Period;

    /**
     * @var integer [Disused] Billing ID, which can be obtained through the `Pid` field in the returned value of the `DescribeProductConfig` API.
     */
    public $Pid;

    /**
     * @var string Instance billing type. Valid value: POSTPAID_BY_HOUR (pay-as-you-go)
     */
    public $InstanceChargeType;

    /**
     * @var string Instance type. Default value: `primary`. Valid values:
`primary` (dual-server high-availability, one-primary-one-standby)
`readonly` (read-only instance)
     */
    public $InstanceType;

    /**
     * @var string 
     */
    public $DBEngine;

    /**
     * @param string $Zone AZ ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API.
     * @param string $SpecCode Specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeClasses` API.
     * @param integer $Storage Storage capacity size in GB.
     * @param integer $InstanceCount Number of instances. Maximum value: 100. If you need to create more instances at a time, please contact customer service.
     * @param integer $Period Length of purchase in months. Currently, only 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36 are supported.
     * @param integer $Pid [Disused] Billing ID, which can be obtained through the `Pid` field in the returned value of the `DescribeProductConfig` API.
     * @param string $InstanceChargeType Instance billing type. Valid value: POSTPAID_BY_HOUR (pay-as-you-go)
     * @param string $InstanceType Instance type. Default value: `primary`. Valid values:
`primary` (dual-server high-availability, one-primary-one-standby)
`readonly` (read-only instance)
     * @param string $DBEngine 
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

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("DBEngine",$param) and $param["DBEngine"] !== null) {
            $this->DBEngine = $param["DBEngine"];
        }
    }
}
