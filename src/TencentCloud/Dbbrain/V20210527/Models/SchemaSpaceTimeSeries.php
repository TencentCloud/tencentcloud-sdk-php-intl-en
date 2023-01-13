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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Time series of database space data
 *
 * @method string getTableSchema() Obtain Database name
 * @method void setTableSchema(string $TableSchema) Set Database name
 * @method MonitorMetricSeriesData getSeriesData() Obtain Space metric value in a unit of time interval
 * @method void setSeriesData(MonitorMetricSeriesData $SeriesData) Set Space metric value in a unit of time interval
 */
class SchemaSpaceTimeSeries extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $TableSchema;

    /**
     * @var MonitorMetricSeriesData Space metric value in a unit of time interval
     */
    public $SeriesData;

    /**
     * @param string $TableSchema Database name
     * @param MonitorMetricSeriesData $SeriesData Space metric value in a unit of time interval
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
        if (array_key_exists("TableSchema",$param) and $param["TableSchema"] !== null) {
            $this->TableSchema = $param["TableSchema"];
        }

        if (array_key_exists("SeriesData",$param) and $param["SeriesData"] !== null) {
            $this->SeriesData = new MonitorMetricSeriesData();
            $this->SeriesData->deserialize($param["SeriesData"]);
        }
    }
}
