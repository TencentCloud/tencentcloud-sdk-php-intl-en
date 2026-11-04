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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteVariable request structure.
 *
 * @method string getAppId() Obtain app_id
 * @method void setAppId(string $AppId) Set app_id
 * @method string getVariableId() Obtain variable_id
 * @method void setVariableId(string $VariableId) Set variable_id
 * @method integer getModuleType() Obtain module_type. Enumeration values: 1: environment parameter, 2: application parameter, 3: system parameter, -1: ALL parameters
 * @method void setModuleType(integer $ModuleType) Set module_type. Enumeration values: 1: environment parameter, 2: application parameter, 3: system parameter, -1: ALL parameters
 */
class DeleteVariableRequest extends AbstractModel
{
    /**
     * @var string app_id
     */
    public $AppId;

    /**
     * @var string variable_id
     */
    public $VariableId;

    /**
     * @var integer module_type. Enumeration values: 1: environment parameter, 2: application parameter, 3: system parameter, -1: ALL parameters
     */
    public $ModuleType;

    /**
     * @param string $AppId app_id
     * @param string $VariableId variable_id
     * @param integer $ModuleType module_type. Enumeration values: 1: environment parameter, 2: application parameter, 3: system parameter, -1: ALL parameters
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("VariableId",$param) and $param["VariableId"] !== null) {
            $this->VariableId = $param["VariableId"];
        }

        if (array_key_exists("ModuleType",$param) and $param["ModuleType"] !== null) {
            $this->ModuleType = $param["ModuleType"];
        }
    }
}
