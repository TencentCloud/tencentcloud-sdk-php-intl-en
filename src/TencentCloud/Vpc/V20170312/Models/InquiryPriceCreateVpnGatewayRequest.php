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
 * InquiryPriceCreateVpnGateway request structure.
 *
 * @method integer getInternetMaxBandwidthOut() Obtain The public network bandwidth configuration. Available bandwidth specifications: 5, 10, 20, 50, and 100. Unit: Mbps.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set The public network bandwidth configuration. Available bandwidth specifications: 5, 10, 20, 50, and 100. Unit: Mbps.
 * @method string getInstanceChargeType() Obtain The VPN gateway billing mode. PREPAID: prepaid means monthly subscription. POSTPAID_BY_HOUR: postpaid means pay-as-you-go. Default: POSTPAID_BY_HOUR. If prepaid mode is specified, the `InstanceChargePrepaid` parameter must be entered.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set The VPN gateway billing mode. PREPAID: prepaid means monthly subscription. POSTPAID_BY_HOUR: postpaid means pay-as-you-go. Default: POSTPAID_BY_HOUR. If prepaid mode is specified, the `InstanceChargePrepaid` parameter must be entered.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Parameter settings for prepaid billing mode, also known as monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. This parameter is mandatory for prepaid instances.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Parameter settings for prepaid billing mode, also known as monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. This parameter is mandatory for prepaid instances.
 */
class InquiryPriceCreateVpnGatewayRequest extends AbstractModel
{
    /**
     * @var integer The public network bandwidth configuration. Available bandwidth specifications: 5, 10, 20, 50, and 100. Unit: Mbps.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string The VPN gateway billing mode. PREPAID: prepaid means monthly subscription. POSTPAID_BY_HOUR: postpaid means pay-as-you-go. Default: POSTPAID_BY_HOUR. If prepaid mode is specified, the `InstanceChargePrepaid` parameter must be entered.
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid Parameter settings for prepaid billing mode, also known as monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. This parameter is mandatory for prepaid instances.
     */
    public $InstanceChargePrepaid;

    /**
     * @param integer $InternetMaxBandwidthOut The public network bandwidth configuration. Available bandwidth specifications: 5, 10, 20, 50, and 100. Unit: Mbps.
     * @param string $InstanceChargeType The VPN gateway billing mode. PREPAID: prepaid means monthly subscription. POSTPAID_BY_HOUR: postpaid means pay-as-you-go. Default: POSTPAID_BY_HOUR. If prepaid mode is specified, the `InstanceChargePrepaid` parameter must be entered.
     * @param InstanceChargePrepaid $InstanceChargePrepaid Parameter settings for prepaid billing mode, also known as monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. This parameter is mandatory for prepaid instances.
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
        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }
    }
}
