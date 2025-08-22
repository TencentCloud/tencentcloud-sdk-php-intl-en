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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSpecSellStatus request structure.
 *
 * @method string getZone() Obtain AZ ID. For example, ap-guangzhou-3.
 * @method void setZone(string $Zone) Set AZ ID. For example, ap-guangzhou-3.
 * @method array getSpecIdSet() Obtain Instance specification ID, which can be obtained by calling the DescribeProductConfig API.
 * @method void setSpecIdSet(array $SpecIdSet) Set Instance specification ID, which can be obtained by calling the DescribeProductConfig API.
 * @method string getDBVersion() Obtain Database version, which can be obtained by calling the DescribeProductConfig API.
 * @method void setDBVersion(string $DBVersion) Set Database version, which can be obtained by calling the DescribeProductConfig API.
 * @method integer getPid() Obtain Product ID, which can be obtained by calling the DescribeProductConfig API.
 * @method void setPid(integer $Pid) Set Product ID, which can be obtained by calling the DescribeProductConfig API.
 * @method string getPayMode() Obtain Payment mode. POST: pay-as-you-go; PRE: monthly subscription.
 * @method void setPayMode(string $PayMode) Set Payment mode. POST: pay-as-you-go; PRE: monthly subscription.
 * @method string getCurrency() Obtain Currency. CNY; USD.
 * @method void setCurrency(string $Currency) Set Currency. CNY; USD.
 */
class DescribeSpecSellStatusRequest extends AbstractModel
{
    /**
     * @var string AZ ID. For example, ap-guangzhou-3.
     */
    public $Zone;

    /**
     * @var array Instance specification ID, which can be obtained by calling the DescribeProductConfig API.
     */
    public $SpecIdSet;

    /**
     * @var string Database version, which can be obtained by calling the DescribeProductConfig API.
     */
    public $DBVersion;

    /**
     * @var integer Product ID, which can be obtained by calling the DescribeProductConfig API.
     */
    public $Pid;

    /**
     * @var string Payment mode. POST: pay-as-you-go; PRE: monthly subscription.
     */
    public $PayMode;

    /**
     * @var string Currency. CNY; USD.
     */
    public $Currency;

    /**
     * @param string $Zone AZ ID. For example, ap-guangzhou-3.
     * @param array $SpecIdSet Instance specification ID, which can be obtained by calling the DescribeProductConfig API.
     * @param string $DBVersion Database version, which can be obtained by calling the DescribeProductConfig API.
     * @param integer $Pid Product ID, which can be obtained by calling the DescribeProductConfig API.
     * @param string $PayMode Payment mode. POST: pay-as-you-go; PRE: monthly subscription.
     * @param string $Currency Currency. CNY; USD.
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

        if (array_key_exists("SpecIdSet",$param) and $param["SpecIdSet"] !== null) {
            $this->SpecIdSet = $param["SpecIdSet"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }
    }
}
