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
 * ModifyTaskTemplate request structure.
 *
 * @method string getTaskTemplateId() Obtain Task template ID
 * @method void setTaskTemplateId(string $TaskTemplateId) Set Task template ID
 * @method string getTaskTemplateName() Obtain Task template name
 * @method void setTaskTemplateName(string $TaskTemplateName) Set Task template name
 * @method string getTaskTemplateDescription() Obtain Task template description
 * @method void setTaskTemplateDescription(string $TaskTemplateDescription) Set Task template description
 * @method Task getTaskTemplateInfo() Obtain Task template information
 * @method void setTaskTemplateInfo(Task $TaskTemplateInfo) Set Task template information
 */
class ModifyTaskTemplateRequest extends AbstractModel
{
    /**
     * @var string Task template ID
     */
    public $TaskTemplateId;

    /**
     * @var string Task template name
     */
    public $TaskTemplateName;

    /**
     * @var string Task template description
     */
    public $TaskTemplateDescription;

    /**
     * @var Task Task template information
     */
    public $TaskTemplateInfo;

    /**
     * @param string $TaskTemplateId Task template ID
     * @param string $TaskTemplateName Task template name
     * @param string $TaskTemplateDescription Task template description
     * @param Task $TaskTemplateInfo Task template information
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
