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
 * @method string getName() Obtain Request parameter name
 * @method void setName(string $Name) Set Request parameter name
 * @method string getDesc() Obtain Description
 * @method void setDesc(string $Desc) Set Description
 * @method string getPosition() Obtain Parameter position
 * @method void setPosition(string $Position) Set Parameter position
 * @method string getType() Obtain Parameter type
 * @method void setType(string $Type) Set Parameter type
 * @method string getDefaultValue() Obtain Default value
 * @method void setDefaultValue(string $DefaultValue) Set Default value
 * @method boolean getRequired() Obtain Whether it is required
 * @method void setRequired(boolean $Required) Set Whether it is required
 */
class RequestParameter extends AbstractModel
{
    /**
     * @var string Request parameter name
     */
    public $Name;

    /**
     * @var string Description
     */
    public $Desc;

    /**
     * @var string Parameter position
     */
    public $Position;

    /**
     * @var string Parameter type
     */
    public $Type;

    /**
     * @var string Default value
     */
    public $DefaultValue;

    /**
     * @var boolean Whether it is required
     */
    public $Required;

    /**
     * @param string $Name Request parameter name
     * @param string $Desc Description
     * @param string $Position Parameter position
     * @param string $Type Parameter type
     * @param string $DefaultValue Default value
     * @param boolean $Required Whether it is required
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

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
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
    }
}
