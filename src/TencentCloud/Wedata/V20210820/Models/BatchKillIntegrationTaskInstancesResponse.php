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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchKillIntegrationTaskInstances response structure.
 *
 * @method integer getSuccessCount() Obtain Number of Successfully Operated Tasks
 * @method void setSuccessCount(integer $SuccessCount) Set Number of Successfully Operated Tasks
 * @method integer getFailedCount() Obtain Number of Failed Tasks
 * @method void setFailedCount(integer $FailedCount) Set Number of Failed Tasks
 * @method integer getTotalCount() Obtain Total Number of Tasks
 * @method void setTotalCount(integer $TotalCount) Set Total Number of Tasks
 * @method array getTaskNames() Obtain What is actually passed is taskId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskNames(array $TaskNames) Set What is actually passed is taskId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class BatchKillIntegrationTaskInstancesResponse extends AbstractModel
{
    /**
     * @var integer Number of Successfully Operated Tasks
     */
    public $SuccessCount;

    /**
     * @var integer Number of Failed Tasks
     */
    public $FailedCount;

    /**
     * @var integer Total Number of Tasks
     */
    public $TotalCount;

    /**
     * @var array What is actually passed is taskId
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskNames;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $SuccessCount Number of Successfully Operated Tasks
     * @param integer $FailedCount Number of Failed Tasks
     * @param integer $TotalCount Total Number of Tasks
     * @param array $TaskNames What is actually passed is taskId
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailedCount",$param) and $param["FailedCount"] !== null) {
            $this->FailedCount = $param["FailedCount"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TaskNames",$param) and $param["TaskNames"] !== null) {
            $this->TaskNames = $param["TaskNames"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}