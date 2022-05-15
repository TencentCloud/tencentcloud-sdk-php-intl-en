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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamLinkFlowRealtimeStatus request structure.
 *
 * @method string getFlowId() Obtain The flow ID.
 * @method void setFlowId(string $FlowId) Set The flow ID.
 * @method array getInputIds() Obtain The IDs of the inputs to query. If this parameter and `OutputIds` are both empty, all inputs and outputs are queried.
 * @method void setInputIds(array $InputIds) Set The IDs of the inputs to query. If this parameter and `OutputIds` are both empty, all inputs and outputs are queried.
 * @method array getOutputIds() Obtain The IDs of the outputs to query. If this parameter and `OutputIds` are both empty, all inputs and outputs are queried.
 * @method void setOutputIds(array $OutputIds) Set The IDs of the outputs to query. If this parameter and `OutputIds` are both empty, all inputs and outputs are queried.
 */
class DescribeStreamLinkFlowRealtimeStatusRequest extends AbstractModel
{
    /**
     * @var string The flow ID.
     */
    public $FlowId;

    /**
     * @var array The IDs of the inputs to query. If this parameter and `OutputIds` are both empty, all inputs and outputs are queried.
     */
    public $InputIds;

    /**
     * @var array The IDs of the outputs to query. If this parameter and `OutputIds` are both empty, all inputs and outputs are queried.
     */
    public $OutputIds;

    /**
     * @param string $FlowId The flow ID.
     * @param array $InputIds The IDs of the inputs to query. If this parameter and `OutputIds` are both empty, all inputs and outputs are queried.
     * @param array $OutputIds The IDs of the outputs to query. If this parameter and `OutputIds` are both empty, all inputs and outputs are queried.
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("InputIds",$param) and $param["InputIds"] !== null) {
            $this->InputIds = $param["InputIds"];
        }

        if (array_key_exists("OutputIds",$param) and $param["OutputIds"] !== null) {
            $this->OutputIds = $param["OutputIds"];
        }
    }
}
