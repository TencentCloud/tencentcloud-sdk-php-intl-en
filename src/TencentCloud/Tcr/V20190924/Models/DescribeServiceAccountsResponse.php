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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServiceAccounts response structure.
 *
 * @method array getServiceAccounts() Obtain List of service accounts
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setServiceAccounts(array $ServiceAccounts) Set List of service accounts
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Number of service level accounts.
 * @method void setTotalCount(integer $TotalCount) Set Number of service level accounts.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeServiceAccountsResponse extends AbstractModel
{
    /**
     * @var array List of service accounts
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ServiceAccounts;

    /**
     * @var integer Number of service level accounts.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $ServiceAccounts List of service accounts
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $TotalCount Number of service level accounts.
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
        if (array_key_exists("ServiceAccounts",$param) and $param["ServiceAccounts"] !== null) {
            $this->ServiceAccounts = [];
            foreach ($param["ServiceAccounts"] as $key => $value){
                $obj = new ServiceAccount();
                $obj->deserialize($value);
                array_push($this->ServiceAccounts, $obj);
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
