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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetCcnRegionBandwidthLimits response structure.
 *
 * @method array getCcnBandwidthSet() Obtain The outbound bandwidth limits of regions in a CCN instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCcnBandwidthSet(array $CcnBandwidthSet) Set The outbound bandwidth limits of regions in a CCN instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain The number of eligible objects.
Note: this field may return null, indicating that no valid value was found.
 * @method void setTotalCount(integer $TotalCount) Set The number of eligible objects.
Note: this field may return null, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class GetCcnRegionBandwidthLimitsResponse extends AbstractModel
{
    /**
     * @var array The outbound bandwidth limits of regions in a CCN instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CcnBandwidthSet;

    /**
     * @var integer The number of eligible objects.
Note: this field may return null, indicating that no valid value was found.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $CcnBandwidthSet The outbound bandwidth limits of regions in a CCN instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount The number of eligible objects.
Note: this field may return null, indicating that no valid value was found.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("CcnBandwidthSet",$param) and $param["CcnBandwidthSet"] !== null) {
            $this->CcnBandwidthSet = [];
            foreach ($param["CcnBandwidthSet"] as $key => $value){
                $obj = new CcnBandwidthInfo();
                $obj->deserialize($value);
                array_push($this->CcnBandwidthSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
