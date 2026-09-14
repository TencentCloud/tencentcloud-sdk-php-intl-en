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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Acceleration region information
 *
 * @method string getAccelerateRegion() Obtain <p>Acceleration region.</p>
 * @method void setAccelerateRegion(string $AccelerateRegion) Set <p>Acceleration region.</p>
 * @method integer getBandwidth() Obtain <p>Bandwidth.</p>
 * @method void setBandwidth(integer $Bandwidth) Set <p>Bandwidth.</p>
 * @method string getIspType() Obtain <p>Supports &#39;BGP&#39;, &#39;QUALITY_BGP&#39;, and &#39;STATIC_IP&#39;. Default: BGP.</p><p>Enumeration values:</p><ul><li>BGP: BGP</li><li>STATIC_IP: triple-network</li><li>QUALITY_BGP: dedicated BGP</li></ul>
 * @method void setIspType(string $IspType) Set <p>Supports &#39;BGP&#39;, &#39;QUALITY_BGP&#39;, and &#39;STATIC_IP&#39;. Default: BGP.</p><p>Enumeration values:</p><ul><li>BGP: BGP</li><li>STATIC_IP: triple-network</li><li>QUALITY_BGP: dedicated BGP</li></ul>
 * @method string getIpVersion() Obtain <p>Only IPv4 is supported, and IPv4 is selected by default.</p>
 * @method void setIpVersion(string $IpVersion) Set <p>Only IPv4 is supported, and IPv4 is selected by default.</p>
 * @method string getAcceleratorAreaId() Obtain <p>Acceleration region ID.</p>
 * @method void setAcceleratorAreaId(string $AcceleratorAreaId) Set <p>Acceleration region ID.</p>
 * @method array getIpAddress() Obtain <p>IP.</p>
 * @method void setIpAddress(array $IpAddress) Set <p>IP.</p>
 * @method array getIpAddressInfoSet() Obtain <p>IP information.</p>
 * @method void setIpAddressInfoSet(array $IpAddressInfoSet) Set <p>IP information.</p>
 */
class AcceleratorAreas extends AbstractModel
{
    /**
     * @var string <p>Acceleration region.</p>
     */
    public $AccelerateRegion;

    /**
     * @var integer <p>Bandwidth.</p>
     */
    public $Bandwidth;

    /**
     * @var string <p>Supports &#39;BGP&#39;, &#39;QUALITY_BGP&#39;, and &#39;STATIC_IP&#39;. Default: BGP.</p><p>Enumeration values:</p><ul><li>BGP: BGP</li><li>STATIC_IP: triple-network</li><li>QUALITY_BGP: dedicated BGP</li></ul>
     */
    public $IspType;

    /**
     * @var string <p>Only IPv4 is supported, and IPv4 is selected by default.</p>
     */
    public $IpVersion;

    /**
     * @var string <p>Acceleration region ID.</p>
     */
    public $AcceleratorAreaId;

    /**
     * @var array <p>IP.</p>
     */
    public $IpAddress;

    /**
     * @var array <p>IP information.</p>
     */
    public $IpAddressInfoSet;

    /**
     * @param string $AccelerateRegion <p>Acceleration region.</p>
     * @param integer $Bandwidth <p>Bandwidth.</p>
     * @param string $IspType <p>Supports &#39;BGP&#39;, &#39;QUALITY_BGP&#39;, and &#39;STATIC_IP&#39;. Default: BGP.</p><p>Enumeration values:</p><ul><li>BGP: BGP</li><li>STATIC_IP: triple-network</li><li>QUALITY_BGP: dedicated BGP</li></ul>
     * @param string $IpVersion <p>Only IPv4 is supported, and IPv4 is selected by default.</p>
     * @param string $AcceleratorAreaId <p>Acceleration region ID.</p>
     * @param array $IpAddress <p>IP.</p>
     * @param array $IpAddressInfoSet <p>IP information.</p>
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
        if (array_key_exists("AccelerateRegion",$param) and $param["AccelerateRegion"] !== null) {
            $this->AccelerateRegion = $param["AccelerateRegion"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("IspType",$param) and $param["IspType"] !== null) {
            $this->IspType = $param["IspType"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("AcceleratorAreaId",$param) and $param["AcceleratorAreaId"] !== null) {
            $this->AcceleratorAreaId = $param["AcceleratorAreaId"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("IpAddressInfoSet",$param) and $param["IpAddressInfoSet"] !== null) {
            $this->IpAddressInfoSet = [];
            foreach ($param["IpAddressInfoSet"] as $key => $value){
                $obj = new IpAddressInfoSet();
                $obj->deserialize($value);
                array_push($this->IpAddressInfoSet, $obj);
            }
        }
    }
}
