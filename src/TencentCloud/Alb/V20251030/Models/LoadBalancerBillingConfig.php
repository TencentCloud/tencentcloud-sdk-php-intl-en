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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Billing configuration of an application CLB instance.
 *
 * @method string getChargeType() Obtain Billing type of the instance.

Parameter value **POSTPAID_BY_HOUR**: pay-as-you-go.
 * @method void setChargeType(string $ChargeType) Set Billing type of the instance.

Parameter value **POSTPAID_BY_HOUR**: pay-as-you-go.
 * @method string getBandwidthPackageId() Obtain Bandwidth package ID.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set Bandwidth package ID.
 */
class LoadBalancerBillingConfig extends AbstractModel
{
    /**
     * @var string Billing type of the instance.

Parameter value **POSTPAID_BY_HOUR**: pay-as-you-go.
     */
    public $ChargeType;

    /**
     * @var string Bandwidth package ID.
     */
    public $BandwidthPackageId;

    /**
     * @param string $ChargeType Billing type of the instance.

Parameter value **POSTPAID_BY_HOUR**: pay-as-you-go.
     * @param string $BandwidthPackageId Bandwidth package ID.
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
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }
    }
}
