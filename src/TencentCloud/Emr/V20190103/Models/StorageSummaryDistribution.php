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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HDFS Cloud File Storage (CFS) details.
 *
 * @method string getMetricItem() Obtain Data item.
 * @method void setMetricItem(string $MetricItem) Set Data item.
 * @method string getMetricName() Obtain Data item description.
 * @method void setMetricName(string $MetricName) Set Data item description.
 * @method array getDps() Obtain Sampling value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDps(array $Dps) Set Sampling value.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class StorageSummaryDistribution extends AbstractModel
{
    /**
     * @var string Data item.
     */
    public $MetricItem;

    /**
     * @var string Data item description.
     */
    public $MetricName;

    /**
     * @var array Sampling value.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Dps;

    /**
     * @param string $MetricItem Data item.
     * @param string $MetricName Data item description.
     * @param array $Dps Sampling value.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("MetricItem",$param) and $param["MetricItem"] !== null) {
            $this->MetricItem = $param["MetricItem"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Dps",$param) and $param["Dps"] !== null) {
            $this->Dps = [];
            foreach ($param["Dps"] as $key => $value){
                $obj = new Dps();
                $obj->deserialize($value);
                array_push($this->Dps, $obj);
            }
        }
    }
}
