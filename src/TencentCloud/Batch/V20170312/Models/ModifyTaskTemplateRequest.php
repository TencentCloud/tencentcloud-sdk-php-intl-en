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
 * @method string getTaskTemplateId() 获取Job template ID
 * @method void setTaskTemplateId(string $TaskTemplateId) 设置Job template ID
 * @method string getTaskTemplateName() 获取Job template name
 * @method void setTaskTemplateName(string $TaskTemplateName) 设置Job template name
 * @method string getTaskTemplateDescription() 获取Job template description
 * @method void setTaskTemplateDescription(string $TaskTemplateDescription) 设置Job template description
 * @method Task getTaskTemplateInfo() 获取Job template information
 * @method void setTaskTemplateInfo(Task $TaskTemplateInfo) 设置Job template information
 */

/**
 *ModifyTaskTemplate request structure.
 */
class ModifyTaskTemplateRequest extends AbstractModel
{
    /**
     * @var string Job template ID
     */
    public $TaskTemplateId;

    /**
     * @var string Job template name
     */
    public $TaskTemplateName;

    /**
     * @var string Job template description
     */
    public $TaskTemplateDescription;

    /**
     * @var Task Job template information
     */
    public $TaskTemplateInfo;
    /**
     * @param string $TaskTemplateId Job template ID
     * @param string $TaskTemplateName Job template name
     * @param string $TaskTemplateDescription Job template description
     * @param Task $TaskTemplateInfo Job template information
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
        if (array_key_exists("TaskTemplateId",$param) and $param["TaskTemplateId"] !== null) {
            $this->TaskTemplateId = $param["TaskTemplateId"];
        }

        if (array_key_exists("TaskTemplateName",$param) and $param["TaskTemplateName"] !== null) {
            $this->TaskTemplateName = $param["TaskTemplateName"];
        }

        if (array_key_exists("TaskTemplateDescription",$param) and $param["TaskTemplateDescription"] !== null) {
            $this->TaskTemplateDescription = $param["TaskTemplateDescription"];
        }

        if (array_key_exists("TaskTemplateInfo",$param) and $param["TaskTemplateInfo"] !== null) {
            $this->TaskTemplateInfo = new Task();
            $this->TaskTemplateInfo->deserialize($param["TaskTemplateInfo"]);
        }
    }
}
