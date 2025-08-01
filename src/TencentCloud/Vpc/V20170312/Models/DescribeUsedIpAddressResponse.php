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
 * DescribeUsedIpAddress response structure.
 *
 * @method array getIpAddressStates() Obtain Information of resources bound with the queried IPs 
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setIpAddressStates(array $IpAddressStates) Set Information of resources bound with the queried IPs 
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Number of taken IPs 
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Number of taken IPs 
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeUsedIpAddressResponse extends AbstractModel
{
    /**
     * @var array Information of resources bound with the queried IPs 
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $IpAddressStates;

    /**
     * @var integer Number of taken IPs 
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $IpAddressStates Information of resources bound with the queried IPs 
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Number of taken IPs 
Note: This parameter may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("IpAddressStates",$param) and $param["IpAddressStates"] !== null) {
            $this->IpAddressStates = [];
            foreach ($param["IpAddressStates"] as $key => $value){
                $obj = new IpAddressStates();
                $obj->deserialize($value);
                array_push($this->IpAddressStates, $obj);
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
