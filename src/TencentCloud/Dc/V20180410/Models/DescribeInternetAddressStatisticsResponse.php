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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInternetAddressStatistics response structure.
 *
 * @method integer getTotalCount() Obtain Number of public IP address statistics for internet tunnels
 * @method void setTotalCount(integer $TotalCount) Set Number of public IP address statistics for internet tunnels
 * @method array getInternetAddressStatistics() Obtain List of the public IP address statistics for internet tunnels
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setInternetAddressStatistics(array $InternetAddressStatistics) Set List of the public IP address statistics for internet tunnels
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeInternetAddressStatisticsResponse extends AbstractModel
{
    /**
     * @var integer Number of public IP address statistics for internet tunnels
     */
    public $TotalCount;

    /**
     * @var array List of the public IP address statistics for internet tunnels
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $InternetAddressStatistics;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Number of public IP address statistics for internet tunnels
     * @param array $InternetAddressStatistics List of the public IP address statistics for internet tunnels
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("InternetAddressStatistics",$param) and $param["InternetAddressStatistics"] !== null) {
            $this->InternetAddressStatistics = [];
            foreach ($param["InternetAddressStatistics"] as $key => $value){
                $obj = new InternetAddressStatistics();
                $obj->deserialize($value);
                array_push($this->InternetAddressStatistics, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
