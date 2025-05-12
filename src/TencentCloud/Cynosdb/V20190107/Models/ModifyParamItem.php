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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the modified instance parameter
 *
 * @method string getParamName() Obtain Parameter name
 * @method void setParamName(string $ParamName) Set Parameter name
 * @method string getCurrentValue() Obtain Current parameter value
 * @method void setCurrentValue(string $CurrentValue) Set Current parameter value
 * @method string getOldValue() Obtain Old parameter value (useful only in output parameters).
 * @method void setOldValue(string $OldValue) Set Old parameter value (useful only in output parameters).
 * @method string getComponent() Obtain libra component type.
 * @method void setComponent(string $Component) Set libra component type.
 */
class ModifyParamItem extends AbstractModel
{
    /**
     * @var string Parameter name
     */
    public $ParamName;

    /**
     * @var string Current parameter value
     */
    public $CurrentValue;

    /**
     * @var string Old parameter value (useful only in output parameters).
     */
    public $OldValue;

    /**
     * @var string libra component type.
     */
    public $Component;

    /**
     * @param string $ParamName Parameter name
     * @param string $CurrentValue Current parameter value
     * @param string $OldValue Old parameter value (useful only in output parameters).
     * @param string $Component libra component type.
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("OldValue",$param) and $param["OldValue"] !== null) {
            $this->OldValue = $param["OldValue"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }
    }
}
