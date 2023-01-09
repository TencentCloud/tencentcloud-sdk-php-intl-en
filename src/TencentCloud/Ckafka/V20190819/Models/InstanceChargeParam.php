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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance billing parameters
 *
 * @method string getInstanceChargeType() Obtain Instance billing mode (`PREPAID`: Monthly subscription; `POSTPAID_BY_HOUR`: Pay-as-you-go)
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing mode (`PREPAID`: Monthly subscription; `POSTPAID_BY_HOUR`: Pay-as-you-go)
 * @method integer getInstanceChargePeriod() Obtain Validity period, which is only required for the monthly subscription billing mode
 * @method void setInstanceChargePeriod(integer $InstanceChargePeriod) Set Validity period, which is only required for the monthly subscription billing mode
 */
class InstanceChargeParam extends AbstractModel
{
    /**
     * @var string Instance billing mode (`PREPAID`: Monthly subscription; `POSTPAID_BY_HOUR`: Pay-as-you-go)
     */
    public $InstanceChargeType;

    /**
     * @var integer Validity period, which is only required for the monthly subscription billing mode
     */
    public $InstanceChargePeriod;

    /**
     * @param string $InstanceChargeType Instance billing mode (`PREPAID`: Monthly subscription; `POSTPAID_BY_HOUR`: Pay-as-you-go)
     * @param integer $InstanceChargePeriod Validity period, which is only required for the monthly subscription billing mode
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
        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceChargePeriod",$param) and $param["InstanceChargePeriod"] !== null) {
            $this->InstanceChargePeriod = $param["InstanceChargePeriod"];
        }
    }
}
