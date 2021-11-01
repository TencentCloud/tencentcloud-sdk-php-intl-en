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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAsyncSearchTasks response structure.
 *
 * @method array getAsyncSearchTasks() Obtain Offline search task list
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAsyncSearchTasks(array $AsyncSearchTasks) Set Offline search task list
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total number of offline search tasks
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number of offline search tasks
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAsyncSearchTasksResponse extends AbstractModel
{
    /**
     * @var array Offline search task list
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AsyncSearchTasks;

    /**
     * @var integer Total number of offline search tasks
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $AsyncSearchTasks Offline search task list
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total number of offline search tasks
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
        if (array_key_exists("AsyncSearchTasks",$param) and $param["AsyncSearchTasks"] !== null) {
            $this->AsyncSearchTasks = [];
            foreach ($param["AsyncSearchTasks"] as $key => $value){
                $obj = new AsyncSearchTask();
                $obj->deserialize($value);
                array_push($this->AsyncSearchTasks, $obj);
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
