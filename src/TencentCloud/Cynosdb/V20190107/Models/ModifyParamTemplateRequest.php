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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyParamTemplate request structure.
 *
 * @method integer getTemplateId() Obtain Template ID
 * @method void setTemplateId(integer $TemplateId) Set Template ID
 * @method string getTemplateName() Obtain Template name
 * @method void setTemplateName(string $TemplateName) Set Template name
 * @method string getTemplateDescription() Obtain Template description
 * @method void setTemplateDescription(string $TemplateDescription) Set Template description
 * @method array getParamList() Obtain Parameter list
 * @method void setParamList(array $ParamList) Set Parameter list
 */
class ModifyParamTemplateRequest extends AbstractModel
{
    /**
     * @var integer Template ID
     */
    public $TemplateId;

    /**
     * @var string Template name
     */
    public $TemplateName;

    /**
     * @var string Template description
     */
    public $TemplateDescription;

    /**
     * @var array Parameter list
     */
    public $ParamList;

    /**
     * @param integer $TemplateId Template ID
     * @param string $TemplateName Template name
     * @param string $TemplateDescription Template description
     * @param array $ParamList Parameter list
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

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new ModifyParamItem();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }
    }
}
