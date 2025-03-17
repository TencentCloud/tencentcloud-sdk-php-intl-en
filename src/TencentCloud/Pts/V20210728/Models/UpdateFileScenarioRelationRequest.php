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
 * UpdateFileScenarioRelation request structure.
 *
 * @method string getFileId() Obtain File ID. Its value should be the corresponding directory of the file in the COS bucket after it has been uploaded in the previous step.
 * @method void setFileId(string $FileId) Set File ID. Its value should be the corresponding directory of the file in the COS bucket after it has been uploaded in the previous step.
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method array getScenarioIds() Obtain Array of Scenario ID.
 * @method void setScenarioIds(array $ScenarioIds) Set Array of Scenario ID.
 */
class UpdateFileScenarioRelationRequest extends AbstractModel
{
    /**
     * @var string File ID. Its value should be the corresponding directory of the file in the COS bucket after it has been uploaded in the previous step.
     */
    public $FileId;

    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var array Array of Scenario ID.
     */
    public $ScenarioIds;

    /**
     * @param string $FileId File ID. Its value should be the corresponding directory of the file in the COS bucket after it has been uploaded in the previous step.
     * @param string $ProjectId Project ID.
     * @param array $ScenarioIds Array of Scenario ID.
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ScenarioIds",$param) and $param["ScenarioIds"] !== null) {
            $this->ScenarioIds = $param["ScenarioIds"];
        }
    }
}
