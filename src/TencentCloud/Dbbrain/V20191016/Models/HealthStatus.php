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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance health status.
 *
 * @method integer getHealthScore() Obtain Health score out of 100 points.
 * @method void setHealthScore(integer $HealthScore) Set Health score out of 100 points.
 * @method string getHealthLevel() Obtain Health level. Valid values: `HEALTH` (healthy), `SUB_HEALTH` (suboptimal), `RISK` (risky), and `HIGH_RISK` (critical).
 * @method void setHealthLevel(string $HealthLevel) Set Health level. Valid values: `HEALTH` (healthy), `SUB_HEALTH` (suboptimal), `RISK` (risky), and `HIGH_RISK` (critical).
 * @method integer getScoreLost() Obtain Total scores deducted.
 * @method void setScoreLost(integer $ScoreLost) Set Total scores deducted.
 * @method array getScoreDetails() Obtain Deduction details.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setScoreDetails(array $ScoreDetails) Set Deduction details.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 */
class HealthStatus extends AbstractModel
{
    /**
     * @var integer Health score out of 100 points.
     */
    public $HealthScore;

    /**
     * @var string Health level. Valid values: `HEALTH` (healthy), `SUB_HEALTH` (suboptimal), `RISK` (risky), and `HIGH_RISK` (critical).
     */
    public $HealthLevel;

    /**
     * @var integer Total scores deducted.
     */
    public $ScoreLost;

    /**
     * @var array Deduction details.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $ScoreDetails;

    /**
     * @param integer $HealthScore Health score out of 100 points.
     * @param string $HealthLevel Health level. Valid values: `HEALTH` (healthy), `SUB_HEALTH` (suboptimal), `RISK` (risky), and `HIGH_RISK` (critical).
     * @param integer $ScoreLost Total scores deducted.
     * @param array $ScoreDetails Deduction details.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
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
        if (array_key_exists("HealthScore",$param) and $param["HealthScore"] !== null) {
            $this->HealthScore = $param["HealthScore"];
        }

        if (array_key_exists("HealthLevel",$param) and $param["HealthLevel"] !== null) {
            $this->HealthLevel = $param["HealthLevel"];
        }

        if (array_key_exists("ScoreLost",$param) and $param["ScoreLost"] !== null) {
            $this->ScoreLost = $param["ScoreLost"];
        }

        if (array_key_exists("ScoreDetails",$param) and $param["ScoreDetails"] !== null) {
            $this->ScoreDetails = [];
            foreach ($param["ScoreDetails"] as $key => $value){
                $obj = new ScoreDetail();
                $obj->deserialize($value);
                array_push($this->ScoreDetails, $obj);
            }
        }
    }
}
