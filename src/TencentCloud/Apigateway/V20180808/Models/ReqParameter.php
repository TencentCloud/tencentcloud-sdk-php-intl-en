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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Request parameter
 *
 * @method string getName() Obtain API frontend parameter name.
 * @method void setName(string $Name) Set API frontend parameter name.
 * @method string getPosition() Obtain Position of the API frontend parameter, such as the header. Supported values: `header`, `query`, and `path`.
 * @method void setPosition(string $Position) Set Position of the API frontend parameter, such as the header. Supported values: `header`, `query`, and `path`.
 * @method string getType() Obtain API frontend parameter type, such as `String` and `int`.
 * @method void setType(string $Type) Set API frontend parameter type, such as `String` and `int`.
 * @method string getDefaultValue() Obtain Default value of API frontend parameter.
 * @method void setDefaultValue(string $DefaultValue) Set Default value of API frontend parameter.
 * @method boolean getRequired() Obtain Whether the API frontend parameter is required. True: yes; False: no.
 * @method void setRequired(boolean $Required) Set Whether the API frontend parameter is required. True: yes; False: no.
 * @method string getDesc() Obtain API frontend parameter remarks.
 * @method void setDesc(string $Desc) Set API frontend parameter remarks.
 */
class ReqParameter extends AbstractModel
{
    /**
     * @var string API frontend parameter name.
     */
    public $Name;

    /**
     * @var string Position of the API frontend parameter, such as the header. Supported values: `header`, `query`, and `path`.
     */
    public $Position;

    /**
     * @var string API frontend parameter type, such as `String` and `int`.
     */
    public $Type;

    /**
     * @var string Default value of API frontend parameter.
     */
    public $DefaultValue;

    /**
     * @var boolean Whether the API frontend parameter is required. True: yes; False: no.
     */
    public $Required;

    /**
     * @var string API frontend parameter remarks.
     */
    public $Desc;

    /**
     * @param string $Name API frontend parameter name.
     * @param string $Position Position of the API frontend parameter, such as the header. Supported values: `header`, `query`, and `path`.
     * @param string $Type API frontend parameter type, such as `String` and `int`.
     * @param string $DefaultValue Default value of API frontend parameter.
     * @param boolean $Required Whether the API frontend parameter is required. True: yes; False: no.
     * @param string $Desc API frontend parameter remarks.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
