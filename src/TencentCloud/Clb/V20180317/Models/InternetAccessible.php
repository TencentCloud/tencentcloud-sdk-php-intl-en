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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Network billing mode based on maximum outbound bandwidth
 *
 * @method string getInternetChargeType() Obtain TRAFFIC_POSTPAID_BY_HOUR: hourly pay-as-you-go by traffic; BANDWIDTH_POSTPAID_BY_HOUR: hourly pay-as-you-go by bandwidth;
BANDWIDTH_PACKAGE: billed by bandwidth package (currently, this method is supported only if the ISP is specified)
 * @method void setInternetChargeType(string $InternetChargeType) Set TRAFFIC_POSTPAID_BY_HOUR: hourly pay-as-you-go by traffic; BANDWIDTH_POSTPAID_BY_HOUR: hourly pay-as-you-go by bandwidth;
BANDWIDTH_PACKAGE: billed by bandwidth package (currently, this method is supported only if the ISP is specified)
 * @method integer getInternetMaxBandwidthOut() Obtain Maximum outgoing bandwidth in Mbps. It works on LCU-supported instances on private networks and all instances on public networks.
- For shared and dedicated CLB instances on public networks, the range is 1Mbps-2048Mbps.
- For all LCU-supported CLB instances:
  - It defaults to General LCU-supported instance. SLA corresponds to Super Large 1, and the range of maximum outgoing bandwidth is 1 Mbps - 10240 Mbps.
  - If you have enabled Super Large specification, the range of maximum outgoing bandwidth is 1 Mbps - 61440 Mbps Super u200dLarge LCU-supported specification is in beta now. u200cu200dTo join the beta, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Maximum outgoing bandwidth in Mbps. It works on LCU-supported instances on private networks and all instances on public networks.
- For shared and dedicated CLB instances on public networks, the range is 1Mbps-2048Mbps.
- For all LCU-supported CLB instances:
  - It defaults to General LCU-supported instance. SLA corresponds to Super Large 1, and the range of maximum outgoing bandwidth is 1 Mbps - 10240 Mbps.
  - If you have enabled Super Large specification, the range of maximum outgoing bandwidth is 1 Mbps - 61440 Mbps Super u200dLarge LCU-supported specification is in beta now. u200cu200dTo join the beta, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBandwidthpkgSubType() Obtain Bandwidth package type, such as SINGLEISP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBandwidthpkgSubType(string $BandwidthpkgSubType) Set Bandwidth package type, such as SINGLEISP
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InternetAccessible extends AbstractModel
{
    /**
     * @var string TRAFFIC_POSTPAID_BY_HOUR: hourly pay-as-you-go by traffic; BANDWIDTH_POSTPAID_BY_HOUR: hourly pay-as-you-go by bandwidth;
BANDWIDTH_PACKAGE: billed by bandwidth package (currently, this method is supported only if the ISP is specified)
     */
    public $InternetChargeType;

    /**
     * @var integer Maximum outgoing bandwidth in Mbps. It works on LCU-supported instances on private networks and all instances on public networks.
- For shared and dedicated CLB instances on public networks, the range is 1Mbps-2048Mbps.
- For all LCU-supported CLB instances:
  - It defaults to General LCU-supported instance. SLA corresponds to Super Large 1, and the range of maximum outgoing bandwidth is 1 Mbps - 10240 Mbps.
  - If you have enabled Super Large specification, the range of maximum outgoing bandwidth is 1 Mbps - 61440 Mbps Super u200dLarge LCU-supported specification is in beta now. u200cu200dTo join the beta, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string Bandwidth package type, such as SINGLEISP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BandwidthpkgSubType;

    /**
     * @param string $InternetChargeType TRAFFIC_POSTPAID_BY_HOUR: hourly pay-as-you-go by traffic; BANDWIDTH_POSTPAID_BY_HOUR: hourly pay-as-you-go by bandwidth;
BANDWIDTH_PACKAGE: billed by bandwidth package (currently, this method is supported only if the ISP is specified)
     * @param integer $InternetMaxBandwidthOut Maximum outgoing bandwidth in Mbps. It works on LCU-supported instances on private networks and all instances on public networks.
- For shared and dedicated CLB instances on public networks, the range is 1Mbps-2048Mbps.
- For all LCU-supported CLB instances:
  - It defaults to General LCU-supported instance. SLA corresponds to Super Large 1, and the range of maximum outgoing bandwidth is 1 Mbps - 10240 Mbps.
  - If you have enabled Super Large specification, the range of maximum outgoing bandwidth is 1 Mbps - 61440 Mbps Super u200dLarge LCU-supported specification is in beta now. u200cu200dTo join the beta, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BandwidthpkgSubType Bandwidth package type, such as SINGLEISP
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("BandwidthpkgSubType",$param) and $param["BandwidthpkgSubType"] !== null) {
            $this->BandwidthpkgSubType = $param["BandwidthpkgSubType"];
        }
    }
}
