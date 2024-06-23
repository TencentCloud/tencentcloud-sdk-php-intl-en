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
 * Quality Score
 *
 * @method float getCompositeScore() Obtain Composite Score
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCompositeScore(float $CompositeScore) Set Composite Score
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getScoringDistribution() Obtain Score Distribution
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setScoringDistribution(array $ScoringDistribution) Set Score Distribution
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTotalTableNumber() Obtain Total Number of Tables
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTotalTableNumber(integer $TotalTableNumber) Set Total Number of Tables
Note: This field may return null, indicating that no valid value can be obtained.
 */
class QualityScore extends AbstractModel
{
    /**
     * @var float Composite Score
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CompositeScore;

    /**
     * @var array Score Distribution
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ScoringDistribution;

    /**
     * @var integer Total Number of Tables
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TotalTableNumber;

    /**
     * @param float $CompositeScore Composite Score
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $ScoringDistribution Score Distribution
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TotalTableNumber Total Number of Tables
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("CompositeScore",$param) and $param["CompositeScore"] !== null) {
            $this->CompositeScore = $param["CompositeScore"];
        }

        if (array_key_exists("ScoringDistribution",$param) and $param["ScoringDistribution"] !== null) {
            $this->ScoringDistribution = [];
            foreach ($param["ScoringDistribution"] as $key => $value){
                $obj = new TableScoreStatisticsInfo();
                $obj->deserialize($value);
                array_push($this->ScoringDistribution, $obj);
            }
        }

        if (array_key_exists("TotalTableNumber",$param) and $param["TotalTableNumber"] !== null) {
            $this->TotalTableNumber = $param["TotalTableNumber"];
        }
    }
}
