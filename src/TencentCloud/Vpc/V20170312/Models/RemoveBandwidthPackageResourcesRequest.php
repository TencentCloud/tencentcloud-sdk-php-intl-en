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
 * RemoveBandwidthPackageResources request structure.
 *
 * @method string getBandwidthPackageId() Obtain The unique ID of the bandwidth package, such as `bwp-xxxx`.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set The unique ID of the bandwidth package, such as `bwp-xxxx`.
 * @method string getResourceType() Obtain The resource type. Valid values: `Address` and `LoadBalance`.
 * @method void setResourceType(string $ResourceType) Set The resource type. Valid values: `Address` and `LoadBalance`.
 * @method array getResourceIds() Obtain The resource IP, such as `eip-xxxx` and `lb-xxxx`.
 * @method void setResourceIds(array $ResourceIds) Set The resource IP, such as `eip-xxxx` and `lb-xxxx`.
 */
class RemoveBandwidthPackageResourcesRequest extends AbstractModel
{
    /**
     * @var string The unique ID of the bandwidth package, such as `bwp-xxxx`.
     */
    public $BandwidthPackageId;

    /**
     * @var string The resource type. Valid values: `Address` and `LoadBalance`.
     */
    public $ResourceType;

    /**
     * @var array The resource IP, such as `eip-xxxx` and `lb-xxxx`.
     */
    public $ResourceIds;

    /**
     * @param string $BandwidthPackageId The unique ID of the bandwidth package, such as `bwp-xxxx`.
     * @param string $ResourceType The resource type. Valid values: `Address` and `LoadBalance`.
     * @param array $ResourceIds The resource IP, such as `eip-xxxx` and `lb-xxxx`.
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

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }
    }
}
