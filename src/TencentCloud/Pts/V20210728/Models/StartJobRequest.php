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
 * StartJob request structure.
 *
 * @method string getScenarioId() Obtain Scenario ID.
 * @method void setScenarioId(string $ScenarioId) Set Scenario ID.
 * @method string getJobOwner() Obtain Job initiator.
 * @method void setJobOwner(string $JobOwner) Set Job initiator.
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method boolean getDebug() Obtain If is debug mode.
 * @method void setDebug(boolean $Debug) Set If is debug mode.
 * @method string getNote() Obtain Note.
 * @method void setNote(string $Note) Set Note.
 */
class StartJobRequest extends AbstractModel
{
    /**
     * @var string Scenario ID.
     */
    public $ScenarioId;

    /**
     * @var string Job initiator.
     */
    public $JobOwner;

    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var boolean If is debug mode.
     */
    public $Debug;

    /**
     * @var string Note.
     */
    public $Note;

    /**
     * @param string $ScenarioId Scenario ID.
     * @param string $JobOwner Job initiator.
     * @param string $ProjectId Project ID.
     * @param boolean $Debug If is debug mode.
     * @param string $Note Note.
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
        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("JobOwner",$param) and $param["JobOwner"] !== null) {
            $this->JobOwner = $param["JobOwner"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Debug",$param) and $param["Debug"] !== null) {
            $this->Debug = $param["Debug"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }
    }
}
