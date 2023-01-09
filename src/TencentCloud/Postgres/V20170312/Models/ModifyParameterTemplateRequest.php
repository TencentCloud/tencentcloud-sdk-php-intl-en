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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyParameterTemplate request structure.
 *
 * @method string getTemplateId() Obtain Parameter template ID, which uniquely identifies a parameter template and cannot be modified.
 * @method void setTemplateId(string $TemplateId) Set Parameter template ID, which uniquely identifies a parameter template and cannot be modified.
 * @method string getTemplateName() Obtain Parameter template name, which can contain 1-60 letters, digits, and symbols (-_./()[]()+=:@). If this field is empty, the original parameter template name will be used.
 * @method void setTemplateName(string $TemplateName) Set Parameter template name, which can contain 1-60 letters, digits, and symbols (-_./()[]()+=:@). If this field is empty, the original parameter template name will be used.
 * @method string getTemplateDescription() Obtain Parameter template description, which can contain 1-60 letters, digits, and symbols (-_./()[]()+=:@). If this parameter is not passed in, the original parameter template description will be used.
 * @method void setTemplateDescription(string $TemplateDescription) Set Parameter template description, which can contain 1-60 letters, digits, and symbols (-_./()[]()+=:@). If this parameter is not passed in, the original parameter template description will be used.
 * @method array getModifyParamEntrySet() Obtain The set of parameters to be modified or added. A parameter cannot be put to `ModifyParamEntrySet` and `DeleteParamSet` at the same time, that is, it cannot be modified/added and deleted at the same time.
 * @method void setModifyParamEntrySet(array $ModifyParamEntrySet) Set The set of parameters to be modified or added. A parameter cannot be put to `ModifyParamEntrySet` and `DeleteParamSet` at the same time, that is, it cannot be modified/added and deleted at the same time.
 * @method array getDeleteParamSet() Obtain The set of parameters to be deleted in the template. A parameter cannot be put to `ModifyParamEntrySet` and `DeleteParamSet` at the same time, that is, it cannot be modified/added and deleted at the same time.
 * @method void setDeleteParamSet(array $DeleteParamSet) Set The set of parameters to be deleted in the template. A parameter cannot be put to `ModifyParamEntrySet` and `DeleteParamSet` at the same time, that is, it cannot be modified/added and deleted at the same time.
 */
class ModifyParameterTemplateRequest extends AbstractModel
{
    /**
     * @var string Parameter template ID, which uniquely identifies a parameter template and cannot be modified.
     */
    public $TemplateId;

    /**
     * @var string Parameter template name, which can contain 1-60 letters, digits, and symbols (-_./()[]()+=:@). If this field is empty, the original parameter template name will be used.
     */
    public $TemplateName;

    /**
     * @var string Parameter template description, which can contain 1-60 letters, digits, and symbols (-_./()[]()+=:@). If this parameter is not passed in, the original parameter template description will be used.
     */
    public $TemplateDescription;

    /**
     * @var array The set of parameters to be modified or added. A parameter cannot be put to `ModifyParamEntrySet` and `DeleteParamSet` at the same time, that is, it cannot be modified/added and deleted at the same time.
     */
    public $ModifyParamEntrySet;

    /**
     * @var array The set of parameters to be deleted in the template. A parameter cannot be put to `ModifyParamEntrySet` and `DeleteParamSet` at the same time, that is, it cannot be modified/added and deleted at the same time.
     */
    public $DeleteParamSet;

    /**
     * @param string $TemplateId Parameter template ID, which uniquely identifies a parameter template and cannot be modified.
     * @param string $TemplateName Parameter template name, which can contain 1-60 letters, digits, and symbols (-_./()[]()+=:@). If this field is empty, the original parameter template name will be used.
     * @param string $TemplateDescription Parameter template description, which can contain 1-60 letters, digits, and symbols (-_./()[]()+=:@). If this parameter is not passed in, the original parameter template description will be used.
     * @param array $ModifyParamEntrySet The set of parameters to be modified or added. A parameter cannot be put to `ModifyParamEntrySet` and `DeleteParamSet` at the same time, that is, it cannot be modified/added and deleted at the same time.
     * @param array $DeleteParamSet The set of parameters to be deleted in the template. A parameter cannot be put to `ModifyParamEntrySet` and `DeleteParamSet` at the same time, that is, it cannot be modified/added and deleted at the same time.
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

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TemplateDescription",$param) and $param["TemplateDescription"] !== null) {
            $this->TemplateDescription = $param["TemplateDescription"];
        }

        if (array_key_exists("ModifyParamEntrySet",$param) and $param["ModifyParamEntrySet"] !== null) {
            $this->ModifyParamEntrySet = [];
            foreach ($param["ModifyParamEntrySet"] as $key => $value){
                $obj = new ParamEntry();
                $obj->deserialize($value);
                array_push($this->ModifyParamEntrySet, $obj);
            }
        }

        if (array_key_exists("DeleteParamSet",$param) and $param["DeleteParamSet"] !== null) {
            $this->DeleteParamSet = $param["DeleteParamSet"];
        }
    }
}
