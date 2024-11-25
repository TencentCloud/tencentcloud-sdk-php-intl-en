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
 * The structure of information of the bandwidth package.
 *
 * @method string getBandwidthPackageId() Obtain The unique ID of the bandwidth package.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set The unique ID of the bandwidth package.
 * @method string getNetworkType() Obtain Bandwidth package type. Values: `BGP`, `SINGLEISP`, `ANYCAST`, `SINGLEISP_CMCC`, `SINGLEISP_CTCC`, `SINGLEISP_CUCC`
 * @method void setNetworkType(string $NetworkType) Set Bandwidth package type. Values: `BGP`, `SINGLEISP`, `ANYCAST`, `SINGLEISP_CMCC`, `SINGLEISP_CTCC`, `SINGLEISP_CUCC`
 * @method string getChargeType() Obtain The bandwidth package billing mode. Valid values: 'TOP5_POSTPAID_BY_MONTH' and 'PERCENT95_POSTPAID_BY_MONTH'
 * @method void setChargeType(string $ChargeType) Set The bandwidth package billing mode. Valid values: 'TOP5_POSTPAID_BY_MONTH' and 'PERCENT95_POSTPAID_BY_MONTH'
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
 * @method string getEgress() Obtain 
 * @method void setEgress(string $Egress) Set 
 */
class BandwidthPackage extends AbstractModel
{
    /**
     * @var string The unique ID of the bandwidth package.
     */
    public $BandwidthPackageId;

    /**
     * @var string Bandwidth package type. Values: `BGP`, `SINGLEISP`, `ANYCAST`, `SINGLEISP_CMCC`, `SINGLEISP_CTCC`, `SINGLEISP_CUCC`
     */
    public $NetworkType;

    /**
     * @var string The bandwidth package billing mode. Valid values: 'TOP5_POSTPAID_BY_MONTH' and 'PERCENT95_POSTPAID_BY_MONTH'
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
     * @var string 
     */
    public $Egress;

    /**
     * @param string $BandwidthPackageId The unique ID of the bandwidth package.
     * @param string $NetworkType Bandwidth package type. Values: `BGP`, `SINGLEISP`, `ANYCAST`, `SINGLEISP_CMCC`, `SINGLEISP_CTCC`, `SINGLEISP_CUCC`
     * @param string $ChargeType The bandwidth package billing mode. Valid values: 'TOP5_POSTPAID_BY_MONTH' and 'PERCENT95_POSTPAID_BY_MONTH'
     * @param string $BandwidthPackageName The name of the bandwidth package.
     * @param string $CreatedTime The creation time of the bandwidth package, which follows the `ISO8601` standard and uses `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
     * @param string $Status The status of the bandwidth package. Valid values: 'CREATING', 'CREATED', 'DELETING', and 'DELETED'.
     * @param array $ResourceSet The resource information of the bandwidth package.
     * @param integer $Bandwidth The limit of the bandwidth package in Mbps. The value '-1' indicates there is no limit.
     * @param string $Egress 
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
