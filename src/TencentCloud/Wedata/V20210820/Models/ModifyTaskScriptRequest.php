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
 * ModifyTaskScript request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getScriptContent() Obtain Script content Base64 encoded
 * @method void setScriptContent(string $ScriptContent) Set Script content Base64 encoded
 * @method array getIntegrationNodeDetails() Obtain Integrated Task Script Configuration
 * @method void setIntegrationNodeDetails(array $IntegrationNodeDetails) Set Integrated Task Script Configuration
 */
class ModifyTaskScriptRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Script content Base64 encoded
     */
    public $ScriptContent;

    /**
     * @var array Integrated Task Script Configuration
     */
    public $IntegrationNodeDetails;

    /**
     * @param string $ProjectId Project ID
     * @param string $TaskId Task ID
     * @param string $ScriptContent Script content Base64 encoded
     * @param array $IntegrationNodeDetails Integrated Task Script Configuration
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("IntegrationNodeDetails",$param) and $param["IntegrationNodeDetails"] !== null) {
            $this->IntegrationNodeDetails = [];
            foreach ($param["IntegrationNodeDetails"] as $key => $value){
                $obj = new IntegrationNodeDetail();
                $obj->deserialize($value);
                array_push($this->IntegrationNodeDetails, $obj);
            }
        }
    }
}
