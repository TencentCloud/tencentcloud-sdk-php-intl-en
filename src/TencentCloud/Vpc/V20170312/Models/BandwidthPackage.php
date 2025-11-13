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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The structure of information of the bandwidth package.
 *
 * @method string getBandwidthPackageId() Obtain The unique ID of the bandwidth package.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set The unique ID of the bandwidth package.
 * @method string getNetworkType() Obtain Bandwidth package type, includes:
<li>BGP: General BGP bandwidth package</li>
<li>HIGH_QUALITY_BGP: Dedicated BGP bandwidth package</li>
<li>ANYCAST: AIA BGP bandwidth package</li>
<li>SINGLEISP_CMCC: CMCC bandwidth package</li>
<li>SINGLEISP_CTCC: CTCC bandwidth package</li>
<li>SINGLEISP_CUCC: CUCC bandwidth package</li>
 * @method void setNetworkType(string $NetworkType) Set Bandwidth package type, includes:
<li>BGP: General BGP bandwidth package</li>
<li>HIGH_QUALITY_BGP: Dedicated BGP bandwidth package</li>
<li>ANYCAST: AIA BGP bandwidth package</li>
<li>SINGLEISP_CMCC: CMCC bandwidth package</li>
<li>SINGLEISP_CTCC: CTCC bandwidth package</li>
<li>SINGLEISP_CUCC: CUCC bandwidth package</li>
 * @method string getChargeType() Obtain Bandwidth package billing type, includes:
<li>ENHANCED95_POSTPAID_BY_MONTH: Pay-as-you-go - Enhanced 95th percentile</li>
<li>PRIMARY_TRAFFIC_POSTPAID_BY_HOUR: Postpaid - Main Traffic Billing</li>
<li>BANDWIDTH_POSTPAID_BY_DAY: General BGP, Pay-as-you-go - Bandwidth-based</li>
<li>PEAK_BANDWIDTH_POSTPAID_BY_DAY: Static single-line, Pay-as-you-go - Daily billed</li>
<li>TOP5_POSTPAID_BY_MONTH: Pay-as-you-go - Monthly top 5th, If you need to use this Bglling mode, please submit a ticket</li>

 * @method void setChargeType(string $ChargeType) Set Bandwidth package billing type, includes:
<li>ENHANCED95_POSTPAID_BY_MONTH: Pay-as-you-go - Enhanced 95th percentile</li>
<li>PRIMARY_TRAFFIC_POSTPAID_BY_HOUR: Postpaid - Main Traffic Billing</li>
<li>BANDWIDTH_POSTPAID_BY_DAY: General BGP, Pay-as-you-go - Bandwidth-based</li>
<li>PEAK_BANDWIDTH_POSTPAID_BY_DAY: Static single-line, Pay-as-you-go - Daily billed</li>
<li>TOP5_POSTPAID_BY_MONTH: Pay-as-you-go - Monthly top 5th, If you need to use this Bglling mode, please submit a ticket</li>

 * @method string getBandwidthPackageName() Obtain The name of the bandwidth package.
 * @method void setBandwidthPackageName(string $BandwidthPackageName) Set The name of the bandwidth package.
 * @method string getCreatedTime() Obtain The creation time of the bandwidth package, which follows the `ISO8601` standard and uses `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
 * @method void setCreatedTime(string $CreatedTime) Set The creation time of the bandwidth package, which follows the `ISO8601` standard and uses `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
 * @method string getStatus() Obtain The status of the bandwidth package. Valid values: 'CREATING', 'CREATED', 'DELETING', and 'DELETED'.
 * @method void setStatus(string $Status) Set The status of the bandwidth package. Valid values: 'CREATING', 'CREATED', 'DELETING', and 'DELETED'.
 * @method array getResourceSet() Obtain The resource information of the bandwidth package.
 * @method void setResourceSet(array $ResourceSet) Set The resource information of the bandwidth package.
 * @method integer getBandwidth() Obtain The limit of the bandwidth package in Mbps. The value '-1' indicates there is no limit.
 * @method void setBandwidth(integer $Bandwidth) Set The limit of the bandwidth package in Mbps. The value '-1' indicates there is no limit.
 * @method string getEgress() Obtain Network egress. It defaults to `center_egress1`. Valid values:
center_egress1,center_egress2,center_egress3

 * @method void setEgress(string $Egress) Set Network egress. It defaults to `center_egress1`. Valid values:
center_egress1,center_egress2,center_egress3
 */
class BandwidthPackage extends AbstractModel
{
    /**
     * @var string The unique ID of the bandwidth package.
     */
    public $BandwidthPackageId;

    /**
     * @var string Bandwidth package type, includes:
<li>BGP: General BGP bandwidth package</li>
<li>HIGH_QUALITY_BGP: Dedicated BGP bandwidth package</li>
<li>ANYCAST: AIA BGP bandwidth package</li>
<li>SINGLEISP_CMCC: CMCC bandwidth package</li>
<li>SINGLEISP_CTCC: CTCC bandwidth package</li>
<li>SINGLEISP_CUCC: CUCC bandwidth package</li>
     */
    public $NetworkType;

    /**
     * @var string Bandwidth package billing type, includes:
<li>ENHANCED95_POSTPAID_BY_MONTH: Pay-as-you-go - Enhanced 95th percentile</li>
<li>PRIMARY_TRAFFIC_POSTPAID_BY_HOUR: Postpaid - Main Traffic Billing</li>
<li>BANDWIDTH_POSTPAID_BY_DAY: General BGP, Pay-as-you-go - Bandwidth-based</li>
<li>PEAK_BANDWIDTH_POSTPAID_BY_DAY: Static single-line, Pay-as-you-go - Daily billed</li>
<li>TOP5_POSTPAID_BY_MONTH: Pay-as-you-go - Monthly top 5th, If you need to use this Bglling mode, please submit a ticket</li>

     */
    public $ChargeType;

    /**
     * @var string The name of the bandwidth package.
     */
    public $BandwidthPackageName;

    /**
     * @var string The creation time of the bandwidth package, which follows the `ISO8601` standard and uses `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
     */
    public $CreatedTime;

    /**
     * @var string The status of the bandwidth package. Valid values: 'CREATING', 'CREATED', 'DELETING', and 'DELETED'.
     */
    public $Status;

    /**
     * @var array The resource information of the bandwidth package.
     */
    public $ResourceSet;

    /**
     * @var integer The limit of the bandwidth package in Mbps. The value '-1' indicates there is no limit.
     */
    public $Bandwidth;

    /**
     * @var string Network egress. It defaults to `center_egress1`. Valid values:
center_egress1,center_egress2,center_egress3

     */
    public $Egress;

    /**
     * @param string $BandwidthPackageId The unique ID of the bandwidth package.
     * @param string $NetworkType Bandwidth package type, includes:
<li>BGP: General BGP bandwidth package</li>
<li>HIGH_QUALITY_BGP: Dedicated BGP bandwidth package</li>
<li>ANYCAST: AIA BGP bandwidth package</li>
<li>SINGLEISP_CMCC: CMCC bandwidth package</li>
<li>SINGLEISP_CTCC: CTCC bandwidth package</li>
<li>SINGLEISP_CUCC: CUCC bandwidth package</li>
     * @param string $ChargeType Bandwidth package billing type, includes:
<li>ENHANCED95_POSTPAID_BY_MONTH: Pay-as-you-go - Enhanced 95th percentile</li>
<li>PRIMARY_TRAFFIC_POSTPAID_BY_HOUR: Postpaid - Main Traffic Billing</li>
<li>BANDWIDTH_POSTPAID_BY_DAY: General BGP, Pay-as-you-go - Bandwidth-based</li>
<li>PEAK_BANDWIDTH_POSTPAID_BY_DAY: Static single-line, Pay-as-you-go - Daily billed</li>
<li>TOP5_POSTPAID_BY_MONTH: Pay-as-you-go - Monthly top 5th, If you need to use this Bglling mode, please submit a ticket</li>

     * @param string $BandwidthPackageName The name of the bandwidth package.
     * @param string $CreatedTime The creation time of the bandwidth package, which follows the `ISO8601` standard and uses `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
     * @param string $Status The status of the bandwidth package. Valid values: 'CREATING', 'CREATED', 'DELETING', and 'DELETED'.
     * @param array $ResourceSet The resource information of the bandwidth package.
     * @param integer $Bandwidth The limit of the bandwidth package in Mbps. The value '-1' indicates there is no limit.
     * @param string $Egress Network egress. It defaults to `center_egress1`. Valid values:
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
        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
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

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ResourceSet",$param) and $param["ResourceSet"] !== null) {
            $this->ResourceSet = [];
            foreach ($param["ResourceSet"] as $key => $value){
                $obj = new Resource();
                $obj->deserialize($value);
                array_push($this->ResourceSet, $obj);
            }
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Egress",$param) and $param["Egress"] !== null) {
            $this->Egress = $param["Egress"];
        }
    }
}
