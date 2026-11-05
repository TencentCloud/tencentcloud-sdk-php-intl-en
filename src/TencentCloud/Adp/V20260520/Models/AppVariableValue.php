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
 * AppVariableValue
 *
 * @method string getVariableId() Obtain <p>Variable ID</p>
 * @method void setVariableId(string $VariableId) Set <p>Variable ID</p>
 * @method string getVariableValue() Obtain <p>Variable value</p>
 * @method void setVariableValue(string $VariableValue) Set <p>Variable value</p>
 */
class AppVariableValue extends AbstractModel
{
    /**
     * @var string <p>Variable ID</p>
     */
    public $VariableId;

    /**
     * @var string <p>Variable value</p>
     */
    public $VariableValue;

    /**
     * @param string $VariableId <p>Variable ID</p>
     * @param string $VariableValue <p>Variable value</p>
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
        if (array_key_exists("VariableId",$param) and $param["VariableId"] !== null) {
            $this->VariableId = $param["VariableId"];
        }

        if (array_key_exists("VariableValue",$param) and $param["VariableValue"] !== null) {
            $this->VariableValue = $param["VariableValue"];
        }
    }
}
