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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FlowParam process parameters.
 *
 * @method string getFKey() Obtain Process parameter key.
TraceId: Query by TraceId.
FlowId: Query by FlowId.
 * @method void setFKey(string $FKey) Set Process parameter key.
TraceId: Query by TraceId.
FlowId: Query by FlowId.
 * @method string getFValue() Obtain Parameter value
 * @method void setFValue(string $FValue) Set Parameter value
 */
class FlowParam extends AbstractModel
{
    /**
     * @var string Process parameter key.
TraceId: Query by TraceId.
FlowId: Query by FlowId.
     */
    public $FKey;

    /**
     * @var string Parameter value
     */
    public $FValue;

    /**
     * @param string $FKey Process parameter key.
TraceId: Query by TraceId.
FlowId: Query by FlowId.
     * @param string $FValue Parameter value
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
        if (array_key_exists("FKey",$param) and $param["FKey"] !== null) {
            $this->FKey = $param["FKey"];
        }

        if (array_key_exists("FValue",$param) and $param["FValue"] !== null) {
            $this->FValue = $param["FValue"];
        }
    }
}
