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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVersions response structure.
 *
 * @method integer getTotalCount() Obtain Number of versions
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Number of versions
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getVersionInstanceSet() Obtain Version list
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVersionInstanceSet(array $VersionInstanceSet) Set Version list
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeVersionsResponse extends AbstractModel
{
    /**
     * @var integer Number of versions
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var array Version list
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $VersionInstanceSet;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Number of versions
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $VersionInstanceSet Version list
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("VersionInstanceSet",$param) and $param["VersionInstanceSet"] !== null) {
            $this->VersionInstanceSet = [];
            foreach ($param["VersionInstanceSet"] as $key => $value){
                $obj = new VersionInstance();
                $obj->deserialize($value);
                array_push($this->VersionInstanceSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
