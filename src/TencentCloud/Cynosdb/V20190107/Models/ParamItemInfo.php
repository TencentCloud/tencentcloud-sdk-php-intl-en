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
 * 
 *
 * @method string getParamName() Obtain Parameter name.
 * @method void setParamName(string $ParamName) Set Parameter name.
 * @method string getNewValue() Obtain New parameter value.

 * @method void setNewValue(string $NewValue) Set New parameter value.

 * @method string getOldValue() Obtain Old parameter value.

 * @method void setOldValue(string $OldValue) Set Old parameter value.

 * @method string getValueFunction() Obtain Parameter formula.

 * @method void setValueFunction(string $ValueFunction) Set Parameter formula.
 */
class ParamItemInfo extends AbstractModel
{
    /**
     * @var string Parameter name.
     */
    public $ParamName;

    /**
     * @var string New parameter value.

     */
    public $NewValue;

    /**
     * @var string Old parameter value.

     */
    public $OldValue;

    /**
     * @var string Parameter formula.

     */
    public $ValueFunction;

    /**
     * @param string $ParamName Parameter name.
     * @param string $NewValue New parameter value.

     * @param string $OldValue Old parameter value.

     * @param string $ValueFunction Parameter formula.
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

        if (array_key_exists("NewValue",$param) and $param["NewValue"] !== null) {
            $this->NewValue = $param["NewValue"];
        }

        if (array_key_exists("OldValue",$param) and $param["OldValue"] !== null) {
            $this->OldValue = $param["OldValue"];
        }

        if (array_key_exists("ValueFunction",$param) and $param["ValueFunction"] !== null) {
            $this->ValueFunction = $param["ValueFunction"];
        }
    }
}
