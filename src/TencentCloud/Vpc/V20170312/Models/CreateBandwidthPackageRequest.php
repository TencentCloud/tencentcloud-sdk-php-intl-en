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
 * CreateBandwidthPackage request structure.
 *
 * @method string getNetworkType() Obtain The network type of the bandwidth package. Default value: `BGP`. Valid values:
`BGP`
`HIGH_QUALITY_BGP`
 * @method void setNetworkType(string $NetworkType) Set The network type of the bandwidth package. Default value: `BGP`. Valid values:
`BGP`
`HIGH_QUALITY_BGP`
 * @method string getChargeType() Obtain The billing mode of the bandwidth package. Default value: `ENHANCED95_POSTPAID_BY_MONTH`. Valid values:
<li>`ENHANCED95_POSTPAID_BY_MONTH`: Pay-as-you-go - Enhanced 95th percentile</li>
<li>`PRIMARY_TRAFFIC_POSTPAID_BY_HOUR`: Postpaid - Main Traffic Billing</li>
<li>`BANDWIDTH_POSTPAID_BY_DAY`: General BGP, Pay-as-you-go - Bandwidth-based</li>
<li>`PEAK_BANDWIDTH_POSTPAID_BY_DAY`: Static single-line, Pay-as-you-go - Daily billed</li>
<li>`TOP5_POSTPAID_BY_MONTH`: Pay-as-you-go - Monthly top 5th, If you need to use this Bglling mode, please submit a ticket.</li>


 * @method void setChargeType(string $ChargeType) Set The billing mode of the bandwidth package. Default value: `ENHANCED95_POSTPAID_BY_MONTH`. Valid values:
<li>`ENHANCED95_POSTPAID_BY_MONTH`: Pay-as-you-go - Enhanced 95th percentile</li>
<li>`PRIMARY_TRAFFIC_POSTPAID_BY_HOUR`: Postpaid - Main Traffic Billing</li>
<li>`BANDWIDTH_POSTPAID_BY_DAY`: General BGP, Pay-as-you-go - Bandwidth-based</li>
<li>`PEAK_BANDWIDTH_POSTPAID_BY_DAY`: Static single-line, Pay-as-you-go - Daily billed</li>
<li>`TOP5_POSTPAID_BY_MONTH`: Pay-as-you-go - Monthly top 5th, If you need to use this Bglling mode, please submit a ticket.</li>


 * @method string getBandwidthPackageName() Obtain The name of the bandwidth package.
 * @method void setBandwidthPackageName(string $BandwidthPackageName) Set The name of the bandwidth package.
 * @method integer getBandwidthPackageCount() Obtain The number of bandwidth packages to create. Valid range: 1-20. It can only be "1" for bill-by-CVM accounts.
 * @method void setBandwidthPackageCount(integer $BandwidthPackageCount) Set The number of bandwidth packages to create. Valid range: 1-20. It can only be "1" for bill-by-CVM accounts.
 * @method integer getInternetMaxBandwidth() Obtain The limit of the bandwidth package in Mbps. The value '-1' indicates there is no limit. This feature is currently in beta.
 * @method void setInternetMaxBandwidth(integer $InternetMaxBandwidth) Set The limit of the bandwidth package in Mbps. The value '-1' indicates there is no limit. This feature is currently in beta.
 * @method array getTags() Obtain The list of tags to be bound.
 * @method void setTags(array $Tags) Set The list of tags to be bound.
 * @method string getProtocol() Obtain The protocol type of the bandwidth package. Valid values: 'ipv4' and 'ipv6'. Default value: 'ipv4'.
 * @method void setProtocol(string $Protocol) Set The protocol type of the bandwidth package. Valid values: 'ipv4' and 'ipv6'. Default value: 'ipv4'.
 * @method integer getTimeSpan() Obtain 
 * @method void setTimeSpan(integer $TimeSpan) Set 
 * @method string getEgress() Obtain     Network egress. It defaults to `center_egress1`. Valid values:
center_egress1,center_egress2,center_egress3

 * @method void setEgress(string $Egress) Set     Network egress. It defaults to `center_egress1`. Valid values:
center_egress1,center_egress2,center_egress3
 */
class CreateBandwidthPackageRequest extends AbstractModel
{
    /**
     * @var string The network type of the bandwidth package. Default value: `BGP`. Valid values:
`BGP`
`HIGH_QUALITY_BGP`
     */
    public $NetworkType;

    /**
     * @var string The billing mode of the bandwidth package. Default value: `ENHANCED95_POSTPAID_BY_MONTH`. Valid values:
<li>`ENHANCED95_POSTPAID_BY_MONTH`: Pay-as-you-go - Enhanced 95th percentile</li>
<li>`PRIMARY_TRAFFIC_POSTPAID_BY_HOUR`: Postpaid - Main Traffic Billing</li>
<li>`BANDWIDTH_POSTPAID_BY_DAY`: General BGP, Pay-as-you-go - Bandwidth-based</li>
<li>`PEAK_BANDWIDTH_POSTPAID_BY_DAY`: Static single-line, Pay-as-you-go - Daily billed</li>
<li>`TOP5_POSTPAID_BY_MONTH`: Pay-as-you-go - Monthly top 5th, If you need to use this Bglling mode, please submit a ticket.</li>


     */
    public $ChargeType;

    /**
     * @var string The name of the bandwidth package.
     */
    public $BandwidthPackageName;

    /**
     * @var integer The number of bandwidth packages to create. Valid range: 1-20. It can only be "1" for bill-by-CVM accounts.
     */
    public $BandwidthPackageCount;

    /**
     * @var integer The limit of the bandwidth package in Mbps. The value '-1' indicates there is no limit. This feature is currently in beta.
     */
    public $InternetMaxBandwidth;

    /**
     * @var array The list of tags to be bound.
     */
    public $Tags;

    /**
     * @var string The protocol type of the bandwidth package. Valid values: 'ipv4' and 'ipv6'. Default value: 'ipv4'.
     */
    public $Protocol;

    /**
     * @var integer 
     */
    public $TimeSpan;

    /**
     * @var string     Network egress. It defaults to `center_egress1`. Valid values:
center_egress1,center_egress2,center_egress3

     */
    public $Egress;

    /**
     * @param string $NetworkType The network type of the bandwidth package. Default value: `BGP`. Valid values:
`BGP`
`HIGH_QUALITY_BGP`
     * @param string $ChargeType The billing mode of the bandwidth package. Default value: `ENHANCED95_POSTPAID_BY_MONTH`. Valid values:
<li>`ENHANCED95_POSTPAID_BY_MONTH`: Pay-as-you-go - Enhanced 95th percentile</li>
<li>`PRIMARY_TRAFFIC_POSTPAID_BY_HOUR`: Postpaid - Main Traffic Billing</li>
<li>`BANDWIDTH_POSTPAID_BY_DAY`: General BGP, Pay-as-you-go - Bandwidth-based</li>
<li>`PEAK_BANDWIDTH_POSTPAID_BY_DAY`: Static single-line, Pay-as-you-go - Daily billed</li>
<li>`TOP5_POSTPAID_BY_MONTH`: Pay-as-you-go - Monthly top 5th, If you need to use this Bglling mode, please submit a ticket.</li>


     * @param string $BandwidthPackageName The name of the bandwidth package.
     * @param integer $BandwidthPackageCount The number of bandwidth packages to create. Valid range: 1-20. It can only be "1" for bill-by-CVM accounts.
     * @param integer $InternetMaxBandwidth The limit of the bandwidth package in Mbps. The value '-1' indicates there is no limit. This feature is currently in beta.
     * @param array $Tags The list of tags to be bound.
     * @param string $Protocol The protocol type of the bandwidth package. Valid values: 'ipv4' and 'ipv6'. Default value: 'ipv4'.
     * @param integer $TimeSpan 
     * @param string $Egress     Network egress. It defaults to `center_egress1`. Valid values:
center_egress1,center_egress2,center_egress3
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
        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("BandwidthPackageName",$param) and $param["BandwidthPackageName"] !== null) {
            $this->BandwidthPackageName = $param["BandwidthPackageName"];
        }

        if (array_key_exists("BandwidthPackageCount",$param) and $param["BandwidthPackageCount"] !== null) {
            $this->BandwidthPackageCount = $param["BandwidthPackageCount"];
        }

        if (array_key_exists("InternetMaxBandwidth",$param) and $param["InternetMaxBandwidth"] !== null) {
            $this->InternetMaxBandwidth = $param["InternetMaxBandwidth"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("Egress",$param) and $param["Egress"] !== null) {
            $this->Egress = $param["Egress"];
        }
    }
}
