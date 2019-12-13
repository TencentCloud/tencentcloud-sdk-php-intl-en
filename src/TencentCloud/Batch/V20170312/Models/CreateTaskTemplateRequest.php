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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTaskTemplateName() 获取Task template name
 * @method void setTaskTemplateName(string $TaskTemplateName) 设置Task template name
 * @method Task getTaskTemplateInfo() 获取Task template content with the same parameter requirements as the task
 * @method void setTaskTemplateInfo(Task $TaskTemplateInfo) 设置Task template content with the same parameter requirements as the task
 * @method string getTaskTemplateDescription() 获取Task template description
 * @method void setTaskTemplateDescription(string $TaskTemplateDescription) 设置Task template description
 */

/**
 *CreateTaskTemplate request structure.
 */
class CreateTaskTemplateRequest extends AbstractModel
{
    /**
     * @var string Task template name
     */
    public $TaskTemplateName;

    /**
     * @var Task Task template content with the same parameter requirements as the task
     */
    public $TaskTemplateInfo;

    /**
     * @var string Task template description
     */
    public $TaskTemplateDescription;
    /**
     * @param string $TaskTemplateName Task template name
     * @param Task $TaskTemplateInfo Task template content with the same parameter requirements as the task
     * @param string $TaskTemplateDescription Task template description
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TaskTemplateName",$param) and $param["TaskTemplateName"] !== null) {
            $this->TaskTemplateName = $param["TaskTemplateName"];
        }

        if (array_key_exists("TaskTemplateInfo",$param) and $param["TaskTemplateInfo"] !== null) {
            $this->TaskTemplateInfo = new Task();
            $this->TaskTemplateInfo->deserialize($param["TaskTemplateInfo"]);
        }

        if (array_key_exists("TaskTemplateDescription",$param) and $param["TaskTemplateDescription"] !== null) {
            $this->TaskTemplateDescription = $param["TaskTemplateDescription"];
        }
    }
}
