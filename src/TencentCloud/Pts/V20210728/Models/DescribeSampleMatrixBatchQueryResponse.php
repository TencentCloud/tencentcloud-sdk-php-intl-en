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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSampleMatrixBatchQuery response structure.
 *
 * @method array getMetricSampleMatrixSet() Obtain Batch metric matrices.

Note: This field may return null, indicating that no valid value is found.
 * @method void setMetricSampleMatrixSet(array $MetricSampleMatrixSet) Set Batch metric matrices.

Note: This field may return null, indicating that no valid value is found.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeSampleMatrixBatchQueryResponse extends AbstractModel
{
    /**
     * @var array Batch metric matrices.

Note: This field may return null, indicating that no valid value is found.
     */
    public $MetricSampleMatrixSet;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $MetricSampleMatrixSet Batch metric matrices.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("MetricSampleMatrixSet",$param) and $param["MetricSampleMatrixSet"] !== null) {
            $this->MetricSampleMatrixSet = [];
            foreach ($param["MetricSampleMatrixSet"] as $key => $value){
                $obj = new CustomSampleMatrix();
                $obj->deserialize($value);
                array_push($this->MetricSampleMatrixSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
