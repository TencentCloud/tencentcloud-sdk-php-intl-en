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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Access URL redirect HostName configuration parameters.
 *
 * @method string getAction() Obtain Target hostname configuration, valid values are:.
<Li>`Follow`: follow the request;</li>.
<Li>`Custom`: custom</li>.
 * @method void setAction(string $Action) Set Target hostname configuration, valid values are:.
<Li>`Follow`: follow the request;</li>.
<Li>`Custom`: custom</li>.
 * @method string getValue() Obtain Custom value for target hostname, maximum length is 1024.<br>note: when action is custom, this field is required; when action is follow, this field is not effective.
 * @method void setValue(string $Value) Set Custom value for target hostname, maximum length is 1024.<br>note: when action is custom, this field is required; when action is follow, this field is not effective.
 */
class HostName extends AbstractModel
{
    /**
     * @var string Target hostname configuration, valid values are:.
<Li>`Follow`: follow the request;</li>.
<Li>`Custom`: custom</li>.
     */
    public $Action;

    /**
     * @var string Custom value for target hostname, maximum length is 1024.<br>note: when action is custom, this field is required; when action is follow, this field is not effective.
     */
    public $Value;

    /**
     * @param string $Action Target hostname configuration, valid values are:.
<Li>`Follow`: follow the request;</li>.
<Li>`Custom`: custom</li>.
     * @param string $Value Custom value for target hostname, maximum length is 1024.<br>note: when action is custom, this field is required; when action is follow, this field is not effective.
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
