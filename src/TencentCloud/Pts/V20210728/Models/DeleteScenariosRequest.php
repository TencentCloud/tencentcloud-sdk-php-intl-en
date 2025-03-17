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
 * DeleteScenarios request structure.
 *
 * @method array getScenarioIds() Obtain Array of Scenario ID to be deleted.
 * @method void setScenarioIds(array $ScenarioIds) Set Array of Scenario ID to be deleted.
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method boolean getDeleteJobs() Obtain Whether to delete scene-related jobs. The default value is false.
 * @method void setDeleteJobs(boolean $DeleteJobs) Set Whether to delete scene-related jobs. The default value is false.
 */
class DeleteScenariosRequest extends AbstractModel
{
    /**
     * @var array Array of Scenario ID to be deleted.
     */
    public $ScenarioIds;

    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var boolean Whether to delete scene-related jobs. The default value is false.
     */
    public $DeleteJobs;

    /**
     * @param array $ScenarioIds Array of Scenario ID to be deleted.
     * @param string $ProjectId Project ID.
     * @param boolean $DeleteJobs Whether to delete scene-related jobs. The default value is false.
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
        if (array_key_exists("ScenarioIds",$param) and $param["ScenarioIds"] !== null) {
            $this->ScenarioIds = $param["ScenarioIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeleteJobs",$param) and $param["DeleteJobs"] !== null) {
            $this->DeleteJobs = $param["DeleteJobs"];
        }
    }
}
