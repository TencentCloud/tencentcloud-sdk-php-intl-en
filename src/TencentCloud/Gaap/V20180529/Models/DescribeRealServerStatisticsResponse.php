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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRealServerStatistics response structure.
 *
 * @method array getStatisticsData() Obtain Origin server status statistics of specified listener
 * @method void setStatisticsData(array $StatisticsData) Set Origin server status statistics of specified listener
 * @method array getRsStatisticsData() Obtain Status statistics of multiple origin servers
 * @method void setRsStatisticsData(array $RsStatisticsData) Set Status statistics of multiple origin servers
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRealServerStatisticsResponse extends AbstractModel
{
    /**
     * @var array Origin server status statistics of specified listener
     */
    public $StatisticsData;

    /**
     * @var array Status statistics of multiple origin servers
     */
    public $RsStatisticsData;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $StatisticsData Origin server status statistics of specified listener
     * @param array $RsStatisticsData Status statistics of multiple origin servers
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
        if (array_key_exists("StatisticsData",$param) and $param["StatisticsData"] !== null) {
            $this->StatisticsData = [];
            foreach ($param["StatisticsData"] as $key => $value){
                $obj = new StatisticsDataInfo();
                $obj->deserialize($value);
                array_push($this->StatisticsData, $obj);
            }
        }

        if (array_key_exists("RsStatisticsData",$param) and $param["RsStatisticsData"] !== null) {
            $this->RsStatisticsData = [];
            foreach ($param["RsStatisticsData"] as $key => $value){
                $obj = new MetricStatisticsInfo();
                $obj->deserialize($value);
                array_push($this->RsStatisticsData, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
