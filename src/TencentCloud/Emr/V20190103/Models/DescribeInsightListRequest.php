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
 * DescribeInsightList request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID.
 * @method integer getStartTime() Obtain Start time of the obtained insight result. The time is specific for filtering the start time of App or Hive querying.
 * @method void setStartTime(integer $StartTime) Set Start time of the obtained insight result. The time is specific for filtering the start time of App or Hive querying.
 * @method integer getEndTime() Obtain End time of the obtained insight result. The time is specific for filtering the start time of App or Hive querying.
 * @method void setEndTime(integer $EndTime) Set End time of the obtained insight result. The time is specific for filtering the start time of App or Hive querying.
 * @method integer getPageSize() Obtain Page size for pagination query. The minimum value is 1, and the maximum value is 100.
 * @method void setPageSize(integer $PageSize) Set Page size for pagination query. The minimum value is 1, and the maximum value is 100.
 * @method integer getPage() Obtain Page number for pagination queries, starting from 1.
 * @method void setPage(integer $Page) Set Page number for pagination queries, starting from 1.
 * @method string getType() Obtain Query type. Types such as Hive,Spark,DLC_Spark,Spark_SQL,SCHEDULE,MapReduce,Trino are supported. All are queried by default.
 * @method void setType(string $Type) Set Query type. Types such as Hive,Spark,DLC_Spark,Spark_SQL,SCHEDULE,MapReduce,Trino are supported. All are queried by default.
 * @method boolean getMustHasContext() Obtain 
 * @method void setMustHasContext(boolean $MustHasContext) Set 
 */
class DescribeInsightListRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $InstanceId;

    /**
     * @var integer Start time of the obtained insight result. The time is specific for filtering the start time of App or Hive querying.
     */
    public $StartTime;

    /**
     * @var integer End time of the obtained insight result. The time is specific for filtering the start time of App or Hive querying.
     */
    public $EndTime;

    /**
     * @var integer Page size for pagination query. The minimum value is 1, and the maximum value is 100.
     */
    public $PageSize;

    /**
     * @var integer Page number for pagination queries, starting from 1.
     */
    public $Page;

    /**
     * @var string Query type. Types such as Hive,Spark,DLC_Spark,Spark_SQL,SCHEDULE,MapReduce,Trino are supported. All are queried by default.
     */
    public $Type;

    /**
     * @var boolean 
     */
    public $MustHasContext;

    /**
     * @param string $InstanceId Cluster ID.
     * @param integer $StartTime Start time of the obtained insight result. The time is specific for filtering the start time of App or Hive querying.
     * @param integer $EndTime End time of the obtained insight result. The time is specific for filtering the start time of App or Hive querying.
     * @param integer $PageSize Page size for pagination query. The minimum value is 1, and the maximum value is 100.
     * @param integer $Page Page number for pagination queries, starting from 1.
     * @param string $Type Query type. Types such as Hive,Spark,DLC_Spark,Spark_SQL,SCHEDULE,MapReduce,Trino are supported. All are queried by default.
     * @param boolean $MustHasContext 
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MustHasContext",$param) and $param["MustHasContext"] !== null) {
            $this->MustHasContext = $param["MustHasContext"];
        }
    }
}
