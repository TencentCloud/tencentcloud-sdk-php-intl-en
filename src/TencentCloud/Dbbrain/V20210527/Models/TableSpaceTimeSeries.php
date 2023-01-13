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
 * Time series of database tablespace data
 *
 * @method string getTableName() Obtain Table name.
 * @method void setTableName(string $TableName) Set Table name.
 * @method string getTableSchema() Obtain Database name.
 * @method void setTableSchema(string $TableSchema) Set Database name.
 * @method string getEngine() Obtain Database table storage engine.
 * @method void setEngine(string $Engine) Set Database table storage engine.
 * @method MonitorFloatMetricSeriesData getSeriesData() Obtain Space metric value in a unit of time interval
 * @method void setSeriesData(MonitorFloatMetricSeriesData $SeriesData) Set Space metric value in a unit of time interval
 */
class TableSpaceTimeSeries extends AbstractModel
{
    /**
     * @var string Table name.
     */
    public $TableName;

    /**
     * @var string Database name.
     */
    public $TableSchema;

    /**
     * @var string Database table storage engine.
     */
    public $Engine;

    /**
     * @var MonitorFloatMetricSeriesData Space metric value in a unit of time interval
     */
    public $SeriesData;

    /**
     * @param string $TableName Table name.
     * @param string $TableSchema Database name.
     * @param string $Engine Database table storage engine.
     * @param MonitorFloatMetricSeriesData $SeriesData Space metric value in a unit of time interval
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableSchema",$param) and $param["TableSchema"] !== null) {
            $this->TableSchema = $param["TableSchema"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("SeriesData",$param) and $param["SeriesData"] !== null) {
            $this->SeriesData = new MonitorFloatMetricSeriesData();
            $this->SeriesData->deserialize($param["SeriesData"]);
        }
    }
}
