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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details returned by the `DescribeSlowQueryAnalysis` API
 *
 * @method float getTotalTime() Obtain The total execution time (in ms) of all slow query statements during the specified period of time
 * @method void setTotalTime(float $TotalTime) Set The total execution time (in ms) of all slow query statements during the specified period of time
 * @method integer getTotalCallNum() Obtain The total number of all slow query statements during the specified period of time
 * @method void setTotalCallNum(integer $TotalCallNum) Set The total number of all slow query statements during the specified period of time
 * @method array getAnalysisItems() Obtain The statistical analysis list of slow queries
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAnalysisItems(array $AnalysisItems) Set The statistical analysis list of slow queries
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class Detail extends AbstractModel
{
    /**
     * @var float The total execution time (in ms) of all slow query statements during the specified period of time
     */
    public $TotalTime;

    /**
     * @var integer The total number of all slow query statements during the specified period of time
     */
    public $TotalCallNum;

    /**
     * @var array The statistical analysis list of slow queries
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AnalysisItems;

    /**
     * @param float $TotalTime The total execution time (in ms) of all slow query statements during the specified period of time
     * @param integer $TotalCallNum The total number of all slow query statements during the specified period of time
     * @param array $AnalysisItems The statistical analysis list of slow queries
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("TotalTime",$param) and $param["TotalTime"] !== null) {
            $this->TotalTime = $param["TotalTime"];
        }

        if (array_key_exists("TotalCallNum",$param) and $param["TotalCallNum"] !== null) {
            $this->TotalCallNum = $param["TotalCallNum"];
        }

        if (array_key_exists("AnalysisItems",$param) and $param["AnalysisItems"] !== null) {
            $this->AnalysisItems = [];
            foreach ($param["AnalysisItems"] as $key => $value){
                $obj = new AnalysisItems();
                $obj->deserialize($value);
                array_push($this->AnalysisItems, $obj);
            }
        }
    }
}
