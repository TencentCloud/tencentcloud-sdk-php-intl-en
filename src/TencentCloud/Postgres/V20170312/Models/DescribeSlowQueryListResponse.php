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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowQueryList response structure.
 *
 * @method integer getTotalCount() Obtain The total number of slow query statements during the specified period of time.
 * @method void setTotalCount(integer $TotalCount) Set The total number of slow query statements during the specified period of time.
 * @method array getDurationAnalysis() Obtain Analysis of the execution time of slow query statements by classifying them to different time ranges. These slow query statements fall within the query range you specified in the request parameters.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDurationAnalysis(array $DurationAnalysis) Set Analysis of the execution time of slow query statements by classifying them to different time ranges. These slow query statements fall within the query range you specified in the request parameters.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getRawSlowQueryList() Obtain The list of slow query details during the specified period of time.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRawSlowQueryList(array $RawSlowQueryList) Set The list of slow query details during the specified period of time.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSlowQueryListResponse extends AbstractModel
{
    /**
     * @var integer The total number of slow query statements during the specified period of time.
     */
    public $TotalCount;

    /**
     * @var array Analysis of the execution time of slow query statements by classifying them to different time ranges. These slow query statements fall within the query range you specified in the request parameters.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DurationAnalysis;

    /**
     * @var array The list of slow query details during the specified period of time.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RawSlowQueryList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount The total number of slow query statements during the specified period of time.
     * @param array $DurationAnalysis Analysis of the execution time of slow query statements by classifying them to different time ranges. These slow query statements fall within the query range you specified in the request parameters.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $RawSlowQueryList The list of slow query details during the specified period of time.
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

        if (array_key_exists("DurationAnalysis",$param) and $param["DurationAnalysis"] !== null) {
            $this->DurationAnalysis = [];
            foreach ($param["DurationAnalysis"] as $key => $value){
                $obj = new DurationAnalysis();
                $obj->deserialize($value);
                array_push($this->DurationAnalysis, $obj);
            }
        }

        if (array_key_exists("RawSlowQueryList",$param) and $param["RawSlowQueryList"] !== null) {
            $this->RawSlowQueryList = [];
            foreach ($param["RawSlowQueryList"] as $key => $value){
                $obj = new RawSlowQuery();
                $obj->deserialize($value);
                array_push($this->RawSlowQueryList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
