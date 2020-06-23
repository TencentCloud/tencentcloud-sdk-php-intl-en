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
 * Constant parameter
 *
 * @method string getName() Obtain Constant parameter name, which is used only if `ServiceType` is `HTTP`.
 * @method void setName(string $Name) Set Constant parameter name, which is used only if `ServiceType` is `HTTP`.
 * @method string getDesc() Obtain Constant parameter description, which is used only if `ServiceType` is `HTTP`.
 * @method void setDesc(string $Desc) Set Constant parameter description, which is used only if `ServiceType` is `HTTP`.
 * @method string getPosition() Obtain Constant parameter position, which is used only if `ServiceType` is `HTTP`.
 * @method void setPosition(string $Position) Set Constant parameter position, which is used only if `ServiceType` is `HTTP`.
 * @method string getDefaultValue() Obtain Default value of constant parameter, which is used only if `ServiceType` is `HTTP`.
 * @method void setDefaultValue(string $DefaultValue) Set Default value of constant parameter, which is used only if `ServiceType` is `HTTP`.
 */
class ConstantParameter extends AbstractModel
{
    /**
     * @var string Constant parameter name, which is used only if `ServiceType` is `HTTP`.
     */
    public $Name;

    /**
     * @var string Constant parameter description, which is used only if `ServiceType` is `HTTP`.
     */
    public $Desc;

    /**
     * @var string Constant parameter position, which is used only if `ServiceType` is `HTTP`.
     */
    public $Position;

    /**
     * @var string Default value of constant parameter, which is used only if `ServiceType` is `HTTP`.
     */
    public $DefaultValue;

    /**
     * @param string $Name Constant parameter name, which is used only if `ServiceType` is `HTTP`.
     * @param string $Desc Constant parameter description, which is used only if `ServiceType` is `HTTP`.
     * @param string $Position Constant parameter position, which is used only if `ServiceType` is `HTTP`.
     * @param string $DefaultValue Default value of constant parameter, which is used only if `ServiceType` is `HTTP`.
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

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }
    }
}
