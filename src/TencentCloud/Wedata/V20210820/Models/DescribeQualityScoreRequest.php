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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeQualityScore request structure.
 *
 * @method integer getStatisticsDate() Obtain Statistics Date
 * @method void setStatisticsDate(integer $StatisticsDate) Set Statistics Date
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getDatasourceId() Obtain Data source ID
 * @method void setDatasourceId(string $DatasourceId) Set Data source ID
 * @method string getScoreType() Obtain 1: Calculate by full dimension weight, 2: Calculate by configured dimension weight, 3: Do not calculate by dimension weight, default is 1
 * @method void setScoreType(string $ScoreType) Set 1: Calculate by full dimension weight, 2: Calculate by configured dimension weight, 3: Do not calculate by dimension weight, default is 1
 * @method array getFilters() Obtain Ignore Query String
 * @method void setFilters(array $Filters) Set Ignore Query String
 */
class DescribeQualityScoreRequest extends AbstractModel
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
     * @var string Data source ID
     */
    public $DatasourceId;

    /**
     * @var string 1: Calculate by full dimension weight, 2: Calculate by configured dimension weight, 3: Do not calculate by dimension weight, default is 1
     */
    public $ScoreType;

    /**
     * @var array Ignore Query String
     */
    public $Filters;

    /**
     * @param integer $StatisticsDate Statistics Date
     * @param string $ProjectId Project ID
     * @param string $DatasourceId Data source ID
     * @param string $ScoreType 1: Calculate by full dimension weight, 2: Calculate by configured dimension weight, 3: Do not calculate by dimension weight, default is 1
     * @param array $Filters Ignore Query String
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

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("ScoreType",$param) and $param["ScoreType"] !== null) {
            $this->ScoreType = $param["ScoreType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
