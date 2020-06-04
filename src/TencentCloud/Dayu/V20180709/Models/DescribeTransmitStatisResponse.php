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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTransmitStatis response structure.
 *
 * @method array getInDataList() Obtain If `MetricName` is `traffic`, this field indicates the inbound traffic bandwidth in bps;
If `MetricName` is `pkg`, this field indicates the inbound packet rate in pps;
 * @method void setInDataList(array $InDataList) Set If `MetricName` is `traffic`, this field indicates the inbound traffic bandwidth in bps;
If `MetricName` is `pkg`, this field indicates the inbound packet rate in pps;
 * @method array getOutDataList() Obtain If `MetricName` is `traffic`, this field indicates the outbound traffic bandwidth in bps;
If `MetricName` is `pkg`, this field indicates the outbound packet rate in pps;
 * @method void setOutDataList(array $OutDataList) Set If `MetricName` is `traffic`, this field indicates the outbound traffic bandwidth in bps;
If `MetricName` is `pkg`, this field indicates the outbound packet rate in pps;
 * @method string getMetricName() Obtain Metric name:
traffic: traffic bandwidth;
pkg: packet rate;
 * @method void setMetricName(string $MetricName) Set Metric name:
traffic: traffic bandwidth;
pkg: packet rate;
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeTransmitStatisResponse extends AbstractModel
{
    /**
     * @var array If `MetricName` is `traffic`, this field indicates the inbound traffic bandwidth in bps;
If `MetricName` is `pkg`, this field indicates the inbound packet rate in pps;
     */
    public $InDataList;

    /**
     * @var array If `MetricName` is `traffic`, this field indicates the outbound traffic bandwidth in bps;
If `MetricName` is `pkg`, this field indicates the outbound packet rate in pps;
     */
    public $OutDataList;

    /**
     * @var string Metric name:
traffic: traffic bandwidth;
pkg: packet rate;
     */
    public $MetricName;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $InDataList If `MetricName` is `traffic`, this field indicates the inbound traffic bandwidth in bps;
If `MetricName` is `pkg`, this field indicates the inbound packet rate in pps;
     * @param array $OutDataList If `MetricName` is `traffic`, this field indicates the outbound traffic bandwidth in bps;
If `MetricName` is `pkg`, this field indicates the outbound packet rate in pps;
     * @param string $MetricName Metric name:
traffic: traffic bandwidth;
pkg: packet rate;
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
        if (array_key_exists("InDataList",$param) and $param["InDataList"] !== null) {
            $this->InDataList = $param["InDataList"];
        }

        if (array_key_exists("OutDataList",$param) and $param["OutDataList"] !== null) {
            $this->OutDataList = $param["OutDataList"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
