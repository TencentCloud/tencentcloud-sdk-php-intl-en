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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Obtain the details of the health score and deduction.
 *
 * @method array getIssueTypes() Obtain Exception details
 * @method void setIssueTypes(array $IssueTypes) Set Exception details
 * @method integer getEventsTotalCount() Obtain Total number of the exceptions
 * @method void setEventsTotalCount(integer $EventsTotalCount) Set Total number of the exceptions
 * @method integer getHealthScore() Obtain Health score
 * @method void setHealthScore(integer $HealthScore) Set Health score
 * @method string getHealthLevel() Obtain Health level, such as "HEALTH", "SUB_HEALTH", "RISK", "HIGH_RISK".
 * @method void setHealthLevel(string $HealthLevel) Set Health level, such as "HEALTH", "SUB_HEALTH", "RISK", "HIGH_RISK".
 */
class HealthScoreInfo extends AbstractModel
{
    /**
     * @var array Exception details
     */
    public $IssueTypes;

    /**
     * @var integer Total number of the exceptions
     */
    public $EventsTotalCount;

    /**
     * @var integer Health score
     */
    public $HealthScore;

    /**
     * @var string Health level, such as "HEALTH", "SUB_HEALTH", "RISK", "HIGH_RISK".
     */
    public $HealthLevel;

    /**
     * @param array $IssueTypes Exception details
     * @param integer $EventsTotalCount Total number of the exceptions
     * @param integer $HealthScore Health score
     * @param string $HealthLevel Health level, such as "HEALTH", "SUB_HEALTH", "RISK", "HIGH_RISK".
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
        if (array_key_exists("IssueTypes",$param) and $param["IssueTypes"] !== null) {
            $this->IssueTypes = [];
            foreach ($param["IssueTypes"] as $key => $value){
                $obj = new IssueTypeInfo();
                $obj->deserialize($value);
                array_push($this->IssueTypes, $obj);
            }
        }

        if (array_key_exists("EventsTotalCount",$param) and $param["EventsTotalCount"] !== null) {
            $this->EventsTotalCount = $param["EventsTotalCount"];
        }

        if (array_key_exists("HealthScore",$param) and $param["HealthScore"] !== null) {
            $this->HealthScore = $param["HealthScore"];
        }

        if (array_key_exists("HealthLevel",$param) and $param["HealthLevel"] !== null) {
            $this->HealthLevel = $param["HealthLevel"];
        }
    }
}
