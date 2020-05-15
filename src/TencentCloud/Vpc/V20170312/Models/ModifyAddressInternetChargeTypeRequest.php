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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAddressInternetChargeType request structure.
 *
 * @method string getAddressId() Obtain Unique EIP ID, such as "eip-xxxx"
 * @method void setAddressId(string $AddressId) Set Unique EIP ID, such as "eip-xxxx"
 * @method string getInternetChargeType() Obtain The target billing method. It can be `BANDWIDTH_PREPAID_BY_MONTH` or `TRAFFIC_POSTPAID_BY_HOUR`
 * @method void setInternetChargeType(string $InternetChargeType) Set The target billing method. It can be `BANDWIDTH_PREPAID_BY_MONTH` or `TRAFFIC_POSTPAID_BY_HOUR`
 * @method integer getInternetMaxBandwidthOut() Obtain The target bandwidth value
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set The target bandwidth value
 * @method AddressChargePrepaid getAddressChargePrepaid() Obtain Billing details of monthly-subscribed network bandwidth. This parameter is required if the target billing method is `BANDWIDTH_PREPAID_BY_MONTH`.
 * @method void setAddressChargePrepaid(AddressChargePrepaid $AddressChargePrepaid) Set Billing details of monthly-subscribed network bandwidth. This parameter is required if the target billing method is `BANDWIDTH_PREPAID_BY_MONTH`.
 */
class ModifyAddressInternetChargeTypeRequest extends AbstractModel
{
    /**
     * @var string Unique EIP ID, such as "eip-xxxx"
     */
    public $AddressId;

    /**
     * @var string The target billing method. It can be `BANDWIDTH_PREPAID_BY_MONTH` or `TRAFFIC_POSTPAID_BY_HOUR`
     */
    public $InternetChargeType;

    /**
     * @var integer The target bandwidth value
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var AddressChargePrepaid Billing details of monthly-subscribed network bandwidth. This parameter is required if the target billing method is `BANDWIDTH_PREPAID_BY_MONTH`.
     */
    public $AddressChargePrepaid;

    /**
     * @param string $AddressId Unique EIP ID, such as "eip-xxxx"
     * @param string $InternetChargeType The target billing method. It can be `BANDWIDTH_PREPAID_BY_MONTH` or `TRAFFIC_POSTPAID_BY_HOUR`
     * @param integer $InternetMaxBandwidthOut The target bandwidth value
     * @param AddressChargePrepaid $AddressChargePrepaid Billing details of monthly-subscribed network bandwidth. This parameter is required if the target billing method is `BANDWIDTH_PREPAID_BY_MONTH`.
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
        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("AddressChargePrepaid",$param) and $param["AddressChargePrepaid"] !== null) {
            $this->AddressChargePrepaid = new AddressChargePrepaid();
            $this->AddressChargePrepaid->deserialize($param["AddressChargePrepaid"]);
        }
    }
}
