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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTableQualityDetails request structure.
 *
 * @method integer getStatisticsDate() Obtain Statistics Date
 * @method void setStatisticsDate(integer $StatisticsDate) Set Statistics Date
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getPageNumber() Obtain Pagination Index
 * @method void setPageNumber(integer $PageNumber) Set Pagination Index
 * @method integer getPageSize() Obtain Page size
 * @method void setPageSize(integer $PageSize) Set Page size
 * @method array getFilters() Obtain Filter Parameters TableName, DatabaseId, DatabaseName, OwnerUserName
 * @method void setFilters(array $Filters) Set Filter Parameters TableName, DatabaseId, DatabaseName, OwnerUserName
 * @method array getOrderFields() Obtain Sorting Parameters Sort order DESC or ASC, Table score sorting TableScore
 * @method void setOrderFields(array $OrderFields) Set Sorting Parameters Sort order DESC or ASC, Table score sorting TableScore
 * @method string getDatasourceId() Obtain Data source ID
 * @method void setDatasourceId(string $DatasourceId) Set Data source ID
 * @method string getScoreType() Obtain 1: Calculate by full dimension weight, 2: Calculate by configured dimension weight, 3: Do not calculate by dimension weight, default is 1
 * @method void setScoreType(string $ScoreType) Set 1: Calculate by full dimension weight, 2: Calculate by configured dimension weight, 3: Do not calculate by dimension weight, default is 1
 */
class DescribeTableQualityDetailsRequest extends AbstractModel
{
    /**
     * @var integer Statistics Date
     */
    public $StatisticsDate;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var integer Pagination Index
     */
    public $PageNumber;

    /**
     * @var integer Page size
     */
    public $PageSize;

    /**
     * @var array Filter Parameters TableName, DatabaseId, DatabaseName, OwnerUserName
     */
    public $Filters;

    /**
     * @var array Sorting Parameters Sort order DESC or ASC, Table score sorting TableScore
     */
    public $OrderFields;

    /**
     * @var string Data source ID
     */
    public $DatasourceId;

    /**
     * @var string 1: Calculate by full dimension weight, 2: Calculate by configured dimension weight, 3: Do not calculate by dimension weight, default is 1
     */
    public $ScoreType;

    /**
     * @param integer $StatisticsDate Statistics Date
     * @param string $ProjectId Project ID
     * @param integer $PageNumber Pagination Index
     * @param integer $PageSize Page size
     * @param array $Filters Filter Parameters TableName, DatabaseId, DatabaseName, OwnerUserName
     * @param array $OrderFields Sorting Parameters Sort order DESC or ASC, Table score sorting TableScore
     * @param string $DatasourceId Data source ID
     * @param string $ScoreType 1: Calculate by full dimension weight, 2: Calculate by configured dimension weight, 3: Do not calculate by dimension weight, default is 1
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
        if (array_key_exists("StatisticsDate",$param) and $param["StatisticsDate"] !== null) {
            $this->StatisticsDate = $param["StatisticsDate"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("ScoreType",$param) and $param["ScoreType"] !== null) {
            $this->ScoreType = $param["ScoreType"];
        }
    }
}
