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
 * DescribeSpec request structure.
 *
 * @method string getZone() Obtain Region information, such as ap-guangzhou-1.
 * @method void setZone(string $Zone) Set Region information, such as ap-guangzhou-1.
 * @method string getPayMode() Obtain Billing type. PREPAID: annual/monthly package; POSTPAID_BY_HOUR: pay-as-you-go
 * @method void setPayMode(string $PayMode) Set Billing type. PREPAID: annual/monthly package; POSTPAID_BY_HOUR: pay-as-you-go
 * @method array getZones() Obtain Multi-availability zone
 * @method void setZones(array $Zones) Set Multi-availability zone
 * @method string getSpecName() Obtain Model name
 * @method void setSpecName(string $SpecName) Set Model name
 */
class DescribeSpecRequest extends AbstractModel
{
    /**
     * @var string Region information, such as ap-guangzhou-1.
     */
    public $Zone;

    /**
     * @var string Billing type. PREPAID: annual/monthly package; POSTPAID_BY_HOUR: pay-as-you-go
     */
    public $PayMode;

    /**
     * @var array Multi-availability zone
     */
    public $Zones;

    /**
     * @var string Model name
     */
    public $SpecName;

    /**
     * @param string $Zone Region information, such as ap-guangzhou-1.
     * @param string $PayMode Billing type. PREPAID: annual/monthly package; POSTPAID_BY_HOUR: pay-as-you-go
     * @param array $Zones Multi-availability zone
     * @param string $SpecName Model name
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

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }
    }
}
