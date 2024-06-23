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
 * DescribeTableScoreTrend request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getStatisticsStartDate() Obtain Start time Second-level Timestamp
 * @method void setStatisticsStartDate(integer $StatisticsStartDate) Set Start time Second-level Timestamp
 * @method integer getStatisticsEndDate() Obtain End time Second-level Timestamp
 * @method void setStatisticsEndDate(integer $StatisticsEndDate) Set End time Second-level Timestamp
 * @method string getTableId() Obtain Table ID
 * @method void setTableId(string $TableId) Set Table ID
 * @method string getScoreType() Obtain 1: Calculate by full dimension weight, 2: Calculate by configured dimension weight, 3: Do not calculate by dimension weight, default is 1
 * @method void setScoreType(string $ScoreType) Set 1: Calculate by full dimension weight, 2: Calculate by configured dimension weight, 3: Do not calculate by dimension weight, default is 1
 */
class DescribeTableScoreTrendRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var integer Start time Second-level Timestamp
     */
    public $StatisticsStartDate;

    /**
     * @var integer End time Second-level Timestamp
     */
    public $StatisticsEndDate;

    /**
     * @var string Table ID
     */
    public $TableId;

    /**
     * @var string 1: Calculate by full dimension weight, 2: Calculate by configured dimension weight, 3: Do not calculate by dimension weight, default is 1
     */
    public $ScoreType;

    /**
     * @param string $ProjectId Project ID
     * @param integer $StatisticsStartDate Start time Second-level Timestamp
     * @param integer $StatisticsEndDate End time Second-level Timestamp
     * @param string $TableId Table ID
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("StatisticsStartDate",$param) and $param["StatisticsStartDate"] !== null) {
            $this->StatisticsStartDate = $param["StatisticsStartDate"];
        }

        if (array_key_exists("StatisticsEndDate",$param) and $param["StatisticsEndDate"] !== null) {
            $this->StatisticsEndDate = $param["StatisticsEndDate"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("ScoreType",$param) and $param["ScoreType"] !== null) {
            $this->ScoreType = $param["ScoreType"];
        }
    }
}
