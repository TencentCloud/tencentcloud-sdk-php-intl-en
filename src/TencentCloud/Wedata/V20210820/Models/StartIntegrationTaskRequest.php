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
 * StartIntegrationTask request structure.
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getEvent() Obtain Event type (START, STOP, SUSPEND, RESUME, COMMIT, TIMESTAMP)
 * @method void setEvent(string $Event) Set Event type (START, STOP, SUSPEND, RESUME, COMMIT, TIMESTAMP)
 * @method array getExtConfig() Obtain Additional parameters
 * @method void setExtConfig(array $ExtConfig) Set Additional parameters
 * @method string getEventDesc() Obtain Operation Type Description
 * @method void setEventDesc(string $EventDesc) Set Operation Type Description
 */
class StartIntegrationTaskRequest extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Event type (START, STOP, SUSPEND, RESUME, COMMIT, TIMESTAMP)
     */
    public $Event;

    /**
     * @var array Additional parameters
     */
    public $ExtConfig;

    /**
     * @var string Operation Type Description
     */
    public $EventDesc;

    /**
     * @param string $TaskId Task ID
     * @param string $ProjectId Project ID
     * @param string $Event Event type (START, STOP, SUSPEND, RESUME, COMMIT, TIMESTAMP)
     * @param array $ExtConfig Additional parameters
     * @param string $EventDesc Operation Type Description
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = $param["Event"];
        }

        if (array_key_exists("ExtConfig",$param) and $param["ExtConfig"] !== null) {
            $this->ExtConfig = [];
            foreach ($param["ExtConfig"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->ExtConfig, $obj);
            }
        }

        if (array_key_exists("EventDesc",$param) and $param["EventDesc"] !== null) {
            $this->EventDesc = $param["EventDesc"];
        }
    }
}