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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Recipient details input parameter, including recipient email and template parameter.
 *
 * @method string getEmail() Obtain Recipient email.
 * @method void setEmail(string $Email) Set Recipient email.
 * @method string getTemplateData() Obtain For variable parameters in template, please use json.dump to format the json object into string type. the object is a set of Key-value pairs. each Key represents a variable in template. variable usage in template is represented by {{Key}}. the appropriate value will be replaced with {{value}} when sent.
Note: the parameter value cannot be data of complex type such as html. the entire JSON structure of TemplateData has a length limit of 800 bytes.
 * @method void setTemplateData(string $TemplateData) Set For variable parameters in template, please use json.dump to format the json object into string type. the object is a set of Key-value pairs. each Key represents a variable in template. variable usage in template is represented by {{Key}}. the appropriate value will be replaced with {{value}} when sent.
Note: the parameter value cannot be data of complex type such as html. the entire JSON structure of TemplateData has a length limit of 800 bytes.
 */
class ReceiverInputData extends AbstractModel
{
    /**
     * @var string Recipient email.
     */
    public $Email;

    /**
     * @var string For variable parameters in template, please use json.dump to format the json object into string type. the object is a set of Key-value pairs. each Key represents a variable in template. variable usage in template is represented by {{Key}}. the appropriate value will be replaced with {{value}} when sent.
Note: the parameter value cannot be data of complex type such as html. the entire JSON structure of TemplateData has a length limit of 800 bytes.
     */
    public $TemplateData;

    /**
     * @param string $Email Recipient email.
     * @param string $TemplateData For variable parameters in template, please use json.dump to format the json object into string type. the object is a set of Key-value pairs. each Key represents a variable in template. variable usage in template is represented by {{Key}}. the appropriate value will be replaced with {{value}} when sent.
Note: the parameter value cannot be data of complex type such as html. the entire JSON structure of TemplateData has a length limit of 800 bytes.
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
        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("TemplateData",$param) and $param["TemplateData"] !== null) {
            $this->TemplateData = $param["TemplateData"];
        }
    }
}
