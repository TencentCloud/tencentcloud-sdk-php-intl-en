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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTaskFromTemplate request structure.
 *
 * @method integer getTemplateId() Obtain Template ID retrieved from the template library
 * @method void setTemplateId(integer $TemplateId) Set Template ID retrieved from the template library
 * @method TaskConfig getTaskConfig() Obtain Experiment configuration parameters
 * @method void setTaskConfig(TaskConfig $TaskConfig) Set Experiment configuration parameters
 */
class CreateTaskFromTemplateRequest extends AbstractModel
{
    /**
     * @var integer Template ID retrieved from the template library
     */
    public $TemplateId;

    /**
     * @var TaskConfig Experiment configuration parameters
     */
    public $TaskConfig;

    /**
     * @param integer $TemplateId Template ID retrieved from the template library
     * @param TaskConfig $TaskConfig Experiment configuration parameters
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TaskConfig",$param) and $param["TaskConfig"] !== null) {
            $this->TaskConfig = new TaskConfig();
            $this->TaskConfig->deserialize($param["TaskConfig"]);
        }
    }
}
