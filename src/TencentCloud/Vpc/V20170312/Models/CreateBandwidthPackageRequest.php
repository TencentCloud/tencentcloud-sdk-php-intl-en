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
 * @method string getNetworkType() Obtain The bandwidth package type, including 'BGP', 'SINGLEISP', 'ANYCAST'
 * @method void setNetworkType(string $NetworkType) Set The bandwidth package type, including 'BGP', 'SINGLEISP', 'ANYCAST'
 * @method string getChargeType() Obtain The bandwidth package billing type, including 'TOP5_POSTPAID_BY_MONTH' and 'PERCENT95_POSTPAID_BY_MONTH'
 * @method void setChargeType(string $ChargeType) Set The bandwidth package billing type, including 'TOP5_POSTPAID_BY_MONTH' and 'PERCENT95_POSTPAID_BY_MONTH'
 * @method string getBandwidthPackageName() Obtain The name of the bandwidth package
 * @method void setBandwidthPackageName(string $BandwidthPackageName) Set The name of the bandwidth package
 * @method integer getBandwidthPackageCount() Obtain The number of bandwidth packages (non-upward accounts can only enter 1)
 * @method void setBandwidthPackageCount(integer $BandwidthPackageCount) Set The number of bandwidth packages (non-upward accounts can only enter 1)
 * @method integer getInternetMaxBandwidth() Obtain The size limit of the bandwidth package. Unit: Mbps. -1 indicates there is no limit.
 * @method void setInternetMaxBandwidth(integer $InternetMaxBandwidth) Set The size limit of the bandwidth package. Unit: Mbps. -1 indicates there is no limit.
 * @method array getTags() Obtain 
 * @method void setTags(array $Tags) Set 
 * @method string getProtocol() Obtain 
 * @method void setProtocol(string $Protocol) Set 
 */
class CreateBandwidthPackageRequest extends AbstractModel
{
    /**
     * @var string The bandwidth package type, including 'BGP', 'SINGLEISP', 'ANYCAST'
     */
    public $NetworkType;

    /**
     * @var string The bandwidth package billing type, including 'TOP5_POSTPAID_BY_MONTH' and 'PERCENT95_POSTPAID_BY_MONTH'
     */
    public $ChargeType;

    /**
     * @var string The name of the bandwidth package
     */
    public $BandwidthPackageName;

    /**
     * @var integer The number of bandwidth packages (non-upward accounts can only enter 1)
     */
    public $BandwidthPackageCount;

    /**
     * @var integer The size limit of the bandwidth package. Unit: Mbps. -1 indicates there is no limit.
     */
    public $InternetMaxBandwidth;

    /**
     * @var array 
     */
    public $Tags;

    /**
     * @var string 
     */
    public $Protocol;

    /**
     * @param string $NetworkType The bandwidth package type, including 'BGP', 'SINGLEISP', 'ANYCAST'
     * @param string $ChargeType The bandwidth package billing type, including 'TOP5_POSTPAID_BY_MONTH' and 'PERCENT95_POSTPAID_BY_MONTH'
     * @param string $BandwidthPackageName The name of the bandwidth package
     * @param integer $BandwidthPackageCount The number of bandwidth packages (non-upward accounts can only enter 1)
     * @param integer $InternetMaxBandwidth The size limit of the bandwidth package. Unit: Mbps. -1 indicates there is no limit.
     * @param array $Tags 
     * @param string $Protocol 
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
