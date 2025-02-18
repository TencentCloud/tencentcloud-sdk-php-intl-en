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
 * AllocateIp6AddressesBandwidth request structure.
 *
 * @method array getIp6Addresses() Obtain IPv6 addresses that require the public network access capability.
 * @method void setIp6Addresses(array $Ip6Addresses) Set IPv6 addresses that require the public network access capability.
 * @method integer getInternetMaxBandwidthOut() Obtain Bandwidth, in Mbps. The default value is 1 Mbps.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Bandwidth, in Mbps. The default value is 1 Mbps.
 * @method string getInternetChargeType() Obtain Network billing mode. IPv6 addresses currently support "TRAFFIC_POSTPAID_BY_HOUR" and "BANDWIDTH_PACKAGE". The default network billing mode is "TRAFFIC_POSTPAID_BY_HOUR".
 * @method void setInternetChargeType(string $InternetChargeType) Set Network billing mode. IPv6 addresses currently support "TRAFFIC_POSTPAID_BY_HOUR" and "BANDWIDTH_PACKAGE". The default network billing mode is "TRAFFIC_POSTPAID_BY_HOUR".
 * @method string getBandwidthPackageId() Obtain Bandwidth package ID. This ID is required for standard accounts to add the IPv6 addresses to the bandwidth package, thus using the billing mode.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set Bandwidth package ID. This ID is required for standard accounts to add the IPv6 addresses to the bandwidth package, thus using the billing mode.
 * @method array getTags() Obtain List of tags to be associated.		
 * @method void setTags(array $Tags) Set List of tags to be associated.		
 */
class AllocateIp6AddressesBandwidthRequest extends AbstractModel
{
    /**
     * @var array IPv6 addresses that require the public network access capability.
     */
    public $Ip6Addresses;

    /**
     * @var integer Bandwidth, in Mbps. The default value is 1 Mbps.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string Network billing mode. IPv6 addresses currently support "TRAFFIC_POSTPAID_BY_HOUR" and "BANDWIDTH_PACKAGE". The default network billing mode is "TRAFFIC_POSTPAID_BY_HOUR".
     */
    public $InternetChargeType;

    /**
     * @var string Bandwidth package ID. This ID is required for standard accounts to add the IPv6 addresses to the bandwidth package, thus using the billing mode.
     */
    public $BandwidthPackageId;

    /**
     * @var array List of tags to be associated.		
     */
    public $Tags;

    /**
     * @param array $Ip6Addresses IPv6 addresses that require the public network access capability.
     * @param integer $InternetMaxBandwidthOut Bandwidth, in Mbps. The default value is 1 Mbps.
     * @param string $InternetChargeType Network billing mode. IPv6 addresses currently support "TRAFFIC_POSTPAID_BY_HOUR" and "BANDWIDTH_PACKAGE". The default network billing mode is "TRAFFIC_POSTPAID_BY_HOUR".
     * @param string $BandwidthPackageId Bandwidth package ID. This ID is required for standard accounts to add the IPv6 addresses to the bandwidth package, thus using the billing mode.
     * @param array $Tags List of tags to be associated.		
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
        if (array_key_exists("Ip6Addresses",$param) and $param["Ip6Addresses"] !== null) {
            $this->Ip6Addresses = $param["Ip6Addresses"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
