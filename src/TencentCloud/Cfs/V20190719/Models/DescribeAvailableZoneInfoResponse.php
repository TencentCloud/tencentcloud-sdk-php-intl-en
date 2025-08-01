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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAvailableZoneInfo response structure.
 *
 * @method array getRegionZones() Obtain Information such as resource availability in each AZ and the supported storage classes and protocols
 * @method void setRegionZones(array $RegionZones) Set Information such as resource availability in each AZ and the supported storage classes and protocols
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAvailableZoneInfoResponse extends AbstractModel
{
    /**
     * @var array Information such as resource availability in each AZ and the supported storage classes and protocols
     */
    public $RegionZones;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $RegionZones Information such as resource availability in each AZ and the supported storage classes and protocols
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
        if (array_key_exists("RegionZones",$param) and $param["RegionZones"] !== null) {
            $this->RegionZones = [];
            foreach ($param["RegionZones"] as $key => $value){
                $obj = new AvailableRegion();
                $obj->deserialize($value);
                array_push($this->RegionZones, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
