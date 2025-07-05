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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRouteConflicts response structure.
 *
 * @method array getRouteConflictSet() Obtain List of routing policy conflicts.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRouteConflictSet(array $RouteConflictSet) Set List of routing policy conflicts.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRouteConflictsResponse extends AbstractModel
{
    /**
     * @var array List of routing policy conflicts.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RouteConflictSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $RouteConflictSet List of routing policy conflicts.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RouteConflictSet",$param) and $param["RouteConflictSet"] !== null) {
            $this->RouteConflictSet = [];
            foreach ($param["RouteConflictSet"] as $key => $value){
                $obj = new RouteConflict();
                $obj->deserialize($value);
                array_push($this->RouteConflictSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
