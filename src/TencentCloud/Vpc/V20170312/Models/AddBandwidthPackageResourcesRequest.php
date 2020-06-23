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
 * AddBandwidthPackageResources request structure.
 *
 * @method array getResourceIds() Obtain ResourceId, such as 'eip-xxxx', 'lb-xxxx'
 * @method void setResourceIds(array $ResourceIds) Set ResourceId, such as 'eip-xxxx', 'lb-xxxx'
 * @method string getBandwidthPackageId() Obtain The unique ID of the bandwidth package, such as 'bwp-xxxx'
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set The unique ID of the bandwidth package, such as 'bwp-xxxx'
 * @method string getNetworkType() Obtain The bandwidth package type, including 'BGP', 'SINGLEISP', 'ANYCAST'
 * @method void setNetworkType(string $NetworkType) Set The bandwidth package type, including 'BGP', 'SINGLEISP', 'ANYCAST'
 * @method string getResourceType() Obtain The resource type, including 'Address', 'LoadBalance'
 * @method void setResourceType(string $ResourceType) Set The resource type, including 'Address', 'LoadBalance'
 * @method string getProtocol() Obtain 
 * @method void setProtocol(string $Protocol) Set 
 */
class AddBandwidthPackageResourcesRequest extends AbstractModel
{
    /**
     * @var array ResourceId, such as 'eip-xxxx', 'lb-xxxx'
     */
    public $ResourceIds;

    /**
     * @var string The unique ID of the bandwidth package, such as 'bwp-xxxx'
     */
    public $BandwidthPackageId;

    /**
     * @var string The bandwidth package type, including 'BGP', 'SINGLEISP', 'ANYCAST'
     */
    public $NetworkType;

    /**
     * @var string The resource type, including 'Address', 'LoadBalance'
     */
    public $ResourceType;

    /**
     * @var string 
     */
    public $Protocol;

    /**
     * @param array $ResourceIds ResourceId, such as 'eip-xxxx', 'lb-xxxx'
     * @param string $BandwidthPackageId The unique ID of the bandwidth package, such as 'bwp-xxxx'
     * @param string $NetworkType The bandwidth package type, including 'BGP', 'SINGLEISP', 'ANYCAST'
     * @param string $ResourceType The resource type, including 'Address', 'LoadBalance'
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
        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
