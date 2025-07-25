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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopSpaceSchemaTimeSeries response structure.
 *
 * @method array getTopSpaceSchemaTimeSeries() Obtain Time series list of the returned space statistics of top databases.
 * @method void setTopSpaceSchemaTimeSeries(array $TopSpaceSchemaTimeSeries) Set Time series list of the returned space statistics of top databases.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeTopSpaceSchemaTimeSeriesResponse extends AbstractModel
{
    /**
     * @var array Time series list of the returned space statistics of top databases.
     */
    public $TopSpaceSchemaTimeSeries;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $TopSpaceSchemaTimeSeries Time series list of the returned space statistics of top databases.
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
        if (array_key_exists("TopSpaceSchemaTimeSeries",$param) and $param["TopSpaceSchemaTimeSeries"] !== null) {
            $this->TopSpaceSchemaTimeSeries = [];
            foreach ($param["TopSpaceSchemaTimeSeries"] as $key => $value){
                $obj = new SchemaSpaceTimeSeries();
                $obj->deserialize($value);
                array_push($this->TopSpaceSchemaTimeSeries, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
