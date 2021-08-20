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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyParamTemplate request structure.
 *
 * @method string getTemplateId() Obtain ID of the parameter template to be modified.
 * @method void setTemplateId(string $TemplateId) Set ID of the parameter template to be modified.
 * @method string getName() Obtain New name of the parameter template.
 * @method void setName(string $Name) Set New name of the parameter template.
 * @method string getDescription() Obtain New description of the parameter template.
 * @method void setDescription(string $Description) Set New description of the parameter template.
 * @method array getParamList() Obtain List of new parameters.
 * @method void setParamList(array $ParamList) Set List of new parameters.
 */
class ModifyParamTemplateRequest extends AbstractModel
{
    /**
     * @var string ID of the parameter template to be modified.
     */
    public $TemplateId;

    /**
     * @var string New name of the parameter template.
     */
    public $Name;

    /**
     * @var string New description of the parameter template.
     */
    public $Description;

    /**
     * @var array List of new parameters.
     */
    public $ParamList;

    /**
     * @param string $TemplateId ID of the parameter template to be modified.
     * @param string $Name New name of the parameter template.
     * @param string $Description New description of the parameter template.
     * @param array $ParamList List of new parameters.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new InstanceParam();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }
    }
}
