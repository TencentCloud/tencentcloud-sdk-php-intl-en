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
 * InquiryPriceAllocateAddresses request structure.
 *
 * @method string getInternetChargeType() Obtain EIP billing method.

<ul style="margin:0"><li>Users with standard account type. Valid values: <ul>
<li>BANDWIDTH_POSTPAID_BY_HOUR: billed by hourly bandwidth on a pay-as-you-go basis.</li>
<li>BANDWIDTH_PREPAID_BY_MONTH: monthly bandwidth subscription.</li>
<li>TRAFFIC_POSTPAID_BY_HOUR: billed by hourly traffic on a pay-as-you-go basis.</li></ul>Default value: TRAFFIC_POSTPAID_BY_HOUR.</li>
</ul>
 * @method void setInternetChargeType(string $InternetChargeType) Set EIP billing method.

<ul style="margin:0"><li>Users with standard account type. Valid values: <ul>
<li>BANDWIDTH_POSTPAID_BY_HOUR: billed by hourly bandwidth on a pay-as-you-go basis.</li>
<li>BANDWIDTH_PREPAID_BY_MONTH: monthly bandwidth subscription.</li>
<li>TRAFFIC_POSTPAID_BY_HOUR: billed by hourly traffic on a pay-as-you-go basis.</li></ul>Default value: TRAFFIC_POSTPAID_BY_HOUR.</li>
</ul>
 * @method integer getInternetMaxBandwidthOut() Obtain The EIP outbound bandwidth cap, in Mbps.
<ul style="margin:0"><li>For users with standard account type, the range of optional values depends on the EIP billing method:<ul>
<li>`BANDWIDTH_POSTPAID_BY_HOUR`: 1 Mbps to 100 Mbps.</li>
<li>`BANDWIDTH_PREPAID_BY_MONTH`: 1 Mbps to 200 Mbps</li>
<li>`TRAFFIC_POSTPAID_BY_HOUR`: 1 Mbps to 100 Mbps.</li></ul>Default value: 1 Mbps.</li></ul>
<li>For users with traditional account type, the EIP outbound bandwidth cap is subject to the public network egress bandwidth limit of the bound instance. No need to pass this parameter.</li></ul>
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set The EIP outbound bandwidth cap, in Mbps.
<ul style="margin:0"><li>For users with standard account type, the range of optional values depends on the EIP billing method:<ul>
<li>`BANDWIDTH_POSTPAID_BY_HOUR`: 1 Mbps to 100 Mbps.</li>
<li>`BANDWIDTH_PREPAID_BY_MONTH`: 1 Mbps to 200 Mbps</li>
<li>`TRAFFIC_POSTPAID_BY_HOUR`: 1 Mbps to 100 Mbps.</li></ul>Default value: 1 Mbps.</li></ul>
<li>For users with traditional account type, the EIP outbound bandwidth cap is subject to the public network egress bandwidth limit of the bound instance. No need to pass this parameter.</li></ul>
 * @method AddressChargePrepaid getAddressChargePrepaid() Obtain A required billing parameter for an EIP billed by "BANDWIDTH_PREPAID_BY_MONTH". When the EIP is billed by "BANDWIDTH_PREPAID_BY_MONTH" this parameter is required. For other scenarios, it can be ignored.
 * @method void setAddressChargePrepaid(AddressChargePrepaid $AddressChargePrepaid) Set A required billing parameter for an EIP billed by "BANDWIDTH_PREPAID_BY_MONTH". When the EIP is billed by "BANDWIDTH_PREPAID_BY_MONTH" this parameter is required. For other scenarios, it can be ignored.
 * @method string getAddressType() Obtain EIP type. Default value: EIP.



<ul style="margin:0"><li>High quality EIP, valid values: <ul><li>HighQualityEIP: high quality EIP</li></ul>Note: High quality EIP is supported only in some regions.</li></ul><ul style="margin:0">
        <li>High-defense IP, valid values: <ul>
                <li>AntiDDoSEIP: high-defense IP</li>
            </ul>
        </li>
    </ul>
 * @method void setAddressType(string $AddressType) Set EIP type. Default value: EIP.



<ul style="margin:0"><li>High quality EIP, valid values: <ul><li>HighQualityEIP: high quality EIP</li></ul>Note: High quality EIP is supported only in some regions.</li></ul><ul style="margin:0">
        <li>High-defense IP, valid values: <ul>
                <li>AntiDDoSEIP: high-defense IP</li>
            </ul>
        </li>
    </ul>
 */
class InquiryPriceAllocateAddressesRequest extends AbstractModel
{
    /**
     * @var string EIP billing method.

<ul style="margin:0"><li>Users with standard account type. Valid values: <ul>
<li>BANDWIDTH_POSTPAID_BY_HOUR: billed by hourly bandwidth on a pay-as-you-go basis.</li>
<li>BANDWIDTH_PREPAID_BY_MONTH: monthly bandwidth subscription.</li>
<li>TRAFFIC_POSTPAID_BY_HOUR: billed by hourly traffic on a pay-as-you-go basis.</li></ul>Default value: TRAFFIC_POSTPAID_BY_HOUR.</li>
</ul>
     */
    public $InternetChargeType;

    /**
     * @var integer The EIP outbound bandwidth cap, in Mbps.
<ul style="margin:0"><li>For users with standard account type, the range of optional values depends on the EIP billing method:<ul>
<li>`BANDWIDTH_POSTPAID_BY_HOUR`: 1 Mbps to 100 Mbps.</li>
<li>`BANDWIDTH_PREPAID_BY_MONTH`: 1 Mbps to 200 Mbps</li>
<li>`TRAFFIC_POSTPAID_BY_HOUR`: 1 Mbps to 100 Mbps.</li></ul>Default value: 1 Mbps.</li></ul>
<li>For users with traditional account type, the EIP outbound bandwidth cap is subject to the public network egress bandwidth limit of the bound instance. No need to pass this parameter.</li></ul>
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var AddressChargePrepaid A required billing parameter for an EIP billed by "BANDWIDTH_PREPAID_BY_MONTH". When the EIP is billed by "BANDWIDTH_PREPAID_BY_MONTH" this parameter is required. For other scenarios, it can be ignored.
     */
    public $AddressChargePrepaid;

    /**
     * @var string EIP type. Default value: EIP.



<ul style="margin:0"><li>High quality EIP, valid values: <ul><li>HighQualityEIP: high quality EIP</li></ul>Note: High quality EIP is supported only in some regions.</li></ul><ul style="margin:0">
        <li>High-defense IP, valid values: <ul>
                <li>AntiDDoSEIP: high-defense IP</li>
            </ul>
        </li>
    </ul>
     */
    public $AddressType;

    /**
     * @param string $InternetChargeType EIP billing method.

<ul style="margin:0"><li>Users with standard account type. Valid values: <ul>
<li>BANDWIDTH_POSTPAID_BY_HOUR: billed by hourly bandwidth on a pay-as-you-go basis.</li>
<li>BANDWIDTH_PREPAID_BY_MONTH: monthly bandwidth subscription.</li>
<li>TRAFFIC_POSTPAID_BY_HOUR: billed by hourly traffic on a pay-as-you-go basis.</li></ul>Default value: TRAFFIC_POSTPAID_BY_HOUR.</li>
</ul>
     * @param integer $InternetMaxBandwidthOut The EIP outbound bandwidth cap, in Mbps.
<ul style="margin:0"><li>For users with standard account type, the range of optional values depends on the EIP billing method:<ul>
<li>`BANDWIDTH_POSTPAID_BY_HOUR`: 1 Mbps to 100 Mbps.</li>
<li>`BANDWIDTH_PREPAID_BY_MONTH`: 1 Mbps to 200 Mbps</li>
<li>`TRAFFIC_POSTPAID_BY_HOUR`: 1 Mbps to 100 Mbps.</li></ul>Default value: 1 Mbps.</li></ul>
<li>For users with traditional account type, the EIP outbound bandwidth cap is subject to the public network egress bandwidth limit of the bound instance. No need to pass this parameter.</li></ul>
     * @param AddressChargePrepaid $AddressChargePrepaid A required billing parameter for an EIP billed by "BANDWIDTH_PREPAID_BY_MONTH". When the EIP is billed by "BANDWIDTH_PREPAID_BY_MONTH" this parameter is required. For other scenarios, it can be ignored.
     * @param string $AddressType EIP type. Default value: EIP.



<ul style="margin:0"><li>High quality EIP, valid values: <ul><li>HighQualityEIP: high quality EIP</li></ul>Note: High quality EIP is supported only in some regions.</li></ul><ul style="margin:0">
        <li>High-defense IP, valid values: <ul>
                <li>AntiDDoSEIP: high-defense IP</li>
            </ul>
        </li>
    </ul>
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

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }
    }
}
