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
 * CreateBandwidthPackage response structure.
 *
 * @method string getBandwidthPackageId() Obtain The ID of the bandwidth package
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set The ID of the bandwidth package
 * @method array getBandwidthPackageIds() Obtain The IDs of the bandwidth package (valid when the applied number is greater than 1)
 * @method void setBandwidthPackageIds(array $BandwidthPackageIds) Set The IDs of the bandwidth package (valid when the applied number is greater than 1)
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateBandwidthPackageResponse extends AbstractModel
{
    /**
     * @var string The ID of the bandwidth package
     */
    public $BandwidthPackageId;

    /**
     * @var array The IDs of the bandwidth package (valid when the applied number is greater than 1)
     */
    public $BandwidthPackageIds;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $BandwidthPackageId The ID of the bandwidth package
     * @param array $BandwidthPackageIds The IDs of the bandwidth package (valid when the applied number is greater than 1)
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("BandwidthPackageIds",$param) and $param["BandwidthPackageIds"] !== null) {
            $this->BandwidthPackageIds = $param["BandwidthPackageIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
