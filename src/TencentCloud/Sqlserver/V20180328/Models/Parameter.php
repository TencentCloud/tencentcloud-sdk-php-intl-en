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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database instance parameter
 *
 * @method string getName() Obtain Parameter name
 * @method void setName(string $Name) Set Parameter name
 * @method string getCurrentValue() Obtain Parameter value
 * @method void setCurrentValue(string $CurrentValue) Set Parameter value
 */
class Parameter extends AbstractModel
{
    /**
     * @var string Parameter name
     */
    public $Name;

    /**
     * @var string Parameter value
     */
    public $CurrentValue;

    /**
     * @param string $Name Parameter name
     * @param string $CurrentValue Parameter value
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

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }
    }
}
