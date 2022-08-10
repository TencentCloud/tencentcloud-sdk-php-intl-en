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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopL7AnalysisData response structure.
 *
 * @method array getData() Obtain Top detailed data
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setData(array $Data) Set Top detailed data
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Query dimension
 * @method void setType(string $Type) Set Query dimension
 * @method string getMetricName() Obtain Query metric
 * @method void setMetricName(string $MetricName) Set Query metric
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeTopL7AnalysisDataResponse extends AbstractModel
{
    /**
     * @var array Top detailed data
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Data;

    /**
     * @var string Query dimension
     */
    public $Type;

    /**
     * @var string Query metric
     */
    public $MetricName;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Data Top detailed data
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Query dimension
     * @param string $MetricName Query metric
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new TopDataRecord();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
