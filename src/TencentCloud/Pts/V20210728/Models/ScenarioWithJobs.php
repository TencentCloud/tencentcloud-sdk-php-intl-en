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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scenario with jobs.
 *
 * @method Scenario getScenario() Obtain Scenario.

Note: This field may return null, indicating that no valid value is found.
 * @method void setScenario(Scenario $Scenario) Set Scenario.

Note: This field may return null, indicating that no valid value is found.
 * @method array getJobs() Obtain Job list.

Note: This field may return null, indicating that no valid value is found.
 * @method void setJobs(array $Jobs) Set Job list.

Note: This field may return null, indicating that no valid value is found.
 */
class ScenarioWithJobs extends AbstractModel
{
    /**
     * @var Scenario Scenario.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Scenario;

    /**
     * @var array Job list.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Jobs;

    /**
     * @param Scenario $Scenario Scenario.

Note: This field may return null, indicating that no valid value is found.
     * @param array $Jobs Job list.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("Scenario",$param) and $param["Scenario"] !== null) {
            $this->Scenario = new Scenario();
            $this->Scenario->deserialize($param["Scenario"]);
        }

        if (array_key_exists("Jobs",$param) and $param["Jobs"] !== null) {
            $this->Jobs = [];
            foreach ($param["Jobs"] as $key => $value){
                $obj = new Job();
                $obj->deserialize($value);
                array_push($this->Jobs, $obj);
            }
        }
    }
}
