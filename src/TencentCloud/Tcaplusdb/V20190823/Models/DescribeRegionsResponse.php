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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalCount() Obtain Number of queried AZs
 * @method void setTotalCount(integer $TotalCount) Set Number of queried AZs
 * @method array getRegionInfos() Obtain List of AZ query results
 * @method void setRegionInfos(array $RegionInfos) Set List of AZ query results
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeRegions response structure.
 */
class DescribeRegionsResponse extends AbstractModel
{
    /**
     * @var integer Number of queried AZs
     */
    public $TotalCount;

    /**
     * @var array List of AZ query results
     */
    public $RegionInfos;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param integer $TotalCount Number of queried AZs
     * @param array $RegionInfos List of AZ query results
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

        if (array_key_exists("RegionInfos",$param) and $param["RegionInfos"] !== null) {
            $this->RegionInfos = [];
            foreach ($param["RegionInfos"] as $key => $value){
                $obj = new RegionInfo();
                $obj->deserialize($value);
                array_push($this->RegionInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
