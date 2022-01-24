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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Template information, including template ID, template variable parameters, etc.
 *
 * @method integer getTemplateID() Obtain Template ID. If you don’t have any template, please create one.
 * @method void setTemplateID(integer $TemplateID) Set Template ID. If you don’t have any template, please create one.
 * @method string getTemplateData() Obtain Variable parameters in the template. Please use `json.dump` to format the JSON object into a string type. The object is a set of key-value pairs. Each key denotes a variable, which is represented by {{key}}. The key will be replaced with the corresponding value (represented by {{value}}) when sending the email.
Note: The parameter value cannot be data of a complex type such as HTML.
Example: {"name":"xxx","age":"xx"}
 * @method void setTemplateData(string $TemplateData) Set Variable parameters in the template. Please use `json.dump` to format the JSON object into a string type. The object is a set of key-value pairs. Each key denotes a variable, which is represented by {{key}}. The key will be replaced with the corresponding value (represented by {{value}}) when sending the email.
Note: The parameter value cannot be data of a complex type such as HTML.
Example: {"name":"xxx","age":"xx"}
 */
class Template extends AbstractModel
{
    /**
     * @var integer Template ID. If you don’t have any template, please create one.
     */
    public $TemplateID;

    /**
     * @var string Variable parameters in the template. Please use `json.dump` to format the JSON object into a string type. The object is a set of key-value pairs. Each key denotes a variable, which is represented by {{key}}. The key will be replaced with the corresponding value (represented by {{value}}) when sending the email.
Note: The parameter value cannot be data of a complex type such as HTML.
Example: {"name":"xxx","age":"xx"}
     */
    public $TemplateData;

    /**
     * @param integer $TemplateID Template ID. If you don’t have any template, please create one.
     * @param string $TemplateData Variable parameters in the template. Please use `json.dump` to format the JSON object into a string type. The object is a set of key-value pairs. Each key denotes a variable, which is represented by {{key}}. The key will be replaced with the corresponding value (represented by {{value}}) when sending the email.
Note: The parameter value cannot be data of a complex type such as HTML.
Example: {"name":"xxx","age":"xx"}
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
        if (array_key_exists("TemplateID",$param) and $param["TemplateID"] !== null) {
            $this->TemplateID = $param["TemplateID"];
        }

        if (array_key_exists("TemplateData",$param) and $param["TemplateData"] !== null) {
            $this->TemplateData = $param["TemplateData"];
        }
    }
}
