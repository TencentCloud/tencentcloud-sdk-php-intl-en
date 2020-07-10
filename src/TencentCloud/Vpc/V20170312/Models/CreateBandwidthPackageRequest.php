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
 * @method string getNetworkType() Obtain The bandwidth package type. Valid values: 'BGP', 'SINGLEISP', and 'ANYCAST'.
 * @method void setNetworkType(string $NetworkType) Set The bandwidth package type. Valid values: 'BGP', 'SINGLEISP', and 'ANYCAST'.
 * @method string getChargeType() Obtain The bandwidth package billing mode. Valid values: 'TOP5_POSTPAID_BY_MONTH' and 'PERCENT95_POSTPAID_BY_MONTH'.
 * @method void setChargeType(string $ChargeType) Set The bandwidth package billing mode. Valid values: 'TOP5_POSTPAID_BY_MONTH' and 'PERCENT95_POSTPAID_BY_MONTH'.
 * @method string getBandwidthPackageName() Obtain The name of the bandwidth package.
 * @method void setBandwidthPackageName(string $BandwidthPackageName) Set The name of the bandwidth package.
 * @method integer getBandwidthPackageCount() Obtain The number of bandwidth packages (enter 1 for bill-by-CVM accounts).
 * @method void setBandwidthPackageCount(integer $BandwidthPackageCount) Set The number of bandwidth packages (enter 1 for bill-by-CVM accounts).
 * @method integer getInternetMaxBandwidth() Obtain The limit of the bandwidth package in Mbps. The value '-1' indicates there is no limit.
 * @method void setInternetMaxBandwidth(integer $InternetMaxBandwidth) Set The limit of the bandwidth package in Mbps. The value '-1' indicates there is no limit.
 * @method array getTags() Obtain The list of tags to be bound.
 * @method void setTags(array $Tags) Set The list of tags to be bound.
 * @method string getProtocol() Obtain The protocol type of the bandwidth package. Valid values: 'ipv4' and 'ipv6'. Default value: 'ipv4'.
 * @method void setProtocol(string $Protocol) Set The protocol type of the bandwidth package. Valid values: 'ipv4' and 'ipv6'. Default value: 'ipv4'.
 */
class CreateBandwidthPackageRequest extends AbstractModel
{
    /**
     * @var string The bandwidth package type. Valid values: 'BGP', 'SINGLEISP', and 'ANYCAST'.
     */
    public $NetworkType;

    /**
     * @var string The bandwidth package billing mode. Valid values: 'TOP5_POSTPAID_BY_MONTH' and 'PERCENT95_POSTPAID_BY_MONTH'.
     */
    public $ChargeType;

    /**
     * @var string The name of the bandwidth package.
     */
    public $BandwidthPackageName;

    /**
     * @var integer The number of bandwidth packages (enter 1 for bill-by-CVM accounts).
     */
    public $BandwidthPackageCount;

    /**
     * @var integer The limit of the bandwidth package in Mbps. The value '-1' indicates there is no limit.
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
     * @param string $NetworkType The bandwidth package type. Valid values: 'BGP', 'SINGLEISP', and 'ANYCAST'.
     * @param string $ChargeType The bandwidth package billing mode. Valid values: 'TOP5_POSTPAID_BY_MONTH' and 'PERCENT95_POSTPAID_BY_MONTH'.
     * @param string $BandwidthPackageName The name of the bandwidth package.
     * @param integer $BandwidthPackageCount The number of bandwidth packages (enter 1 for bill-by-CVM accounts).
     * @param integer $InternetMaxBandwidth The limit of the bandwidth package in Mbps. The value '-1' indicates there is no limit.
     * @param array $Tags The list of tags to be bound.
     * @param string $Protocol The protocol type of the bandwidth package. Valid values: 'ipv4' and 'ipv6'. Default value: 'ipv4'.
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
    }
}
