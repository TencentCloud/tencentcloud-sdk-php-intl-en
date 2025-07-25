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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSparkAppJob response structure.
 *
 * @method SparkJobInfo getJob() Obtain Spark job details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJob(SparkJobInfo $Job) Set Spark job details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsExists() Obtain Whether the queried Spark job exists
 * @method void setIsExists(boolean $IsExists) Set Whether the queried Spark job exists
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeSparkAppJobResponse extends AbstractModel
{
    /**
     * @var SparkJobInfo Spark job details
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Job;

    /**
     * @var boolean Whether the queried Spark job exists
     */
    public $IsExists;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param SparkJobInfo $Job Spark job details
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsExists Whether the queried Spark job exists
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
        if (array_key_exists("Job",$param) and $param["Job"] !== null) {
            $this->Job = new SparkJobInfo();
            $this->Job->deserialize($param["Job"]);
        }

        if (array_key_exists("IsExists",$param) and $param["IsExists"] !== null) {
            $this->IsExists = $param["IsExists"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
