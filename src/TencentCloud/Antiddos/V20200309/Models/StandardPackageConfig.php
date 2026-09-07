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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * {
    "Region": "ap-guangzhou",
    "ProtectIpCount": 1,
    "Bandwidth": 100,
    "ElasticBandwidthFlag": true
}
 *
 * @method string getRegion() Obtain Specifies the purchase region of the anti-ddos pro package.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Specifies the purchase region of the anti-ddos pro package.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProtectIpCount() Obtain Specifies the number of protected ips.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtectIpCount(integer $ProtectIpCount) Set Specifies the number of protected ips.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBandwidth() Obtain Specifies the protection business bandwidth of 50Mbps.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBandwidth(integer $Bandwidth) Set Specifies the protection business bandwidth of 50Mbps.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getElasticBandwidthFlag() Obtain Specifies whether elastic protection bandwidth is enabled. valid values: enabled. 
The default is false. disable.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setElasticBandwidthFlag(boolean $ElasticBandwidthFlag) Set Specifies whether elastic protection bandwidth is enabled. valid values: enabled. 
The default is false. disable.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class StandardPackageConfig extends AbstractModel
{
    /**
     * @var string Specifies the purchase region of the anti-ddos pro package.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var integer Specifies the number of protected ips.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProtectIpCount;

    /**
     * @var integer Specifies the protection business bandwidth of 50Mbps.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Bandwidth;

    /**
     * @var boolean Specifies whether elastic protection bandwidth is enabled. valid values: enabled. 
The default is false. disable.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ElasticBandwidthFlag;

    /**
     * @param string $Region Specifies the purchase region of the anti-ddos pro package.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProtectIpCount Specifies the number of protected ips.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Bandwidth Specifies the protection business bandwidth of 50Mbps.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $ElasticBandwidthFlag Specifies whether elastic protection bandwidth is enabled. valid values: enabled. 
The default is false. disable.
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ProtectIpCount",$param) and $param["ProtectIpCount"] !== null) {
            $this->ProtectIpCount = $param["ProtectIpCount"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("ElasticBandwidthFlag",$param) and $param["ElasticBandwidthFlag"] !== null) {
            $this->ElasticBandwidthFlag = $param["ElasticBandwidthFlag"];
        }
    }
}
