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
    "BasicProtectBandwidth": 300,
    "Bandwidth": 100,
    "ElasticProtectBandwidth": 0,
    "ElasticBandwidthFlag": true
}
 *
 * @method string getRegion() Obtain Specifies the region of the anti-ddos pro package.
 * @method void setRegion(string $Region) Set Specifies the region of the anti-ddos pro package.
 * @method integer getProtectIpCount() Obtain Number of protected ips.
 * @method void setProtectIpCount(integer $ProtectIpCount) Set Number of protected ips.
 * @method integer getBasicProtectBandwidth() Obtain Specifies the baseline protection bandwidth.
 * @method void setBasicProtectBandwidth(integer $BasicProtectBandwidth) Set Specifies the baseline protection bandwidth.
 * @method integer getBandwidth() Obtain Business bandwidth scale.
 * @method void setBandwidth(integer $Bandwidth) Set Business bandwidth scale.
 * @method integer getElasticProtectBandwidth() Obtain Elastic bandwidth in Gbps. valid values: 0, 400, 500, 600, 800, 1000.
The default is 0.
 * @method void setElasticProtectBandwidth(integer $ElasticProtectBandwidth) Set Elastic bandwidth in Gbps. valid values: 0, 400, 500, 600, 800, 1000.
The default is 0.
 * @method boolean getElasticBandwidthFlag() Obtain Elastic scaling enabled for business bandwidth.
The default is false.
 * @method void setElasticBandwidthFlag(boolean $ElasticBandwidthFlag) Set Elastic scaling enabled for business bandwidth.
The default is false.
 */
class EnterprisePackageConfig extends AbstractModel
{
    /**
     * @var string Specifies the region of the anti-ddos pro package.
     */
    public $Region;

    /**
     * @var integer Number of protected ips.
     */
    public $ProtectIpCount;

    /**
     * @var integer Specifies the baseline protection bandwidth.
     */
    public $BasicProtectBandwidth;

    /**
     * @var integer Business bandwidth scale.
     */
    public $Bandwidth;

    /**
     * @var integer Elastic bandwidth in Gbps. valid values: 0, 400, 500, 600, 800, 1000.
The default is 0.
     */
    public $ElasticProtectBandwidth;

    /**
     * @var boolean Elastic scaling enabled for business bandwidth.
The default is false.
     */
    public $ElasticBandwidthFlag;

    /**
     * @param string $Region Specifies the region of the anti-ddos pro package.
     * @param integer $ProtectIpCount Number of protected ips.
     * @param integer $BasicProtectBandwidth Specifies the baseline protection bandwidth.
     * @param integer $Bandwidth Business bandwidth scale.
     * @param integer $ElasticProtectBandwidth Elastic bandwidth in Gbps. valid values: 0, 400, 500, 600, 800, 1000.
The default is 0.
     * @param boolean $ElasticBandwidthFlag Elastic scaling enabled for business bandwidth.
The default is false.
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

        if (array_key_exists("BasicProtectBandwidth",$param) and $param["BasicProtectBandwidth"] !== null) {
            $this->BasicProtectBandwidth = $param["BasicProtectBandwidth"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("ElasticProtectBandwidth",$param) and $param["ElasticProtectBandwidth"] !== null) {
            $this->ElasticProtectBandwidth = $param["ElasticProtectBandwidth"];
        }

        if (array_key_exists("ElasticBandwidthFlag",$param) and $param["ElasticBandwidthFlag"] !== null) {
            $this->ElasticBandwidthFlag = $param["ElasticBandwidthFlag"];
        }
    }
}
