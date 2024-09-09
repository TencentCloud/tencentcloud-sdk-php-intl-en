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
 * CreateStreamLinkInput request structure.
 *
 * @method string getFlowId() Obtain StreamLink stream ID.
 * @method void setFlowId(string $FlowId) Set StreamLink stream ID.
 * @method array getInputGroup() Obtain The input group of the Flow.
 * @method void setInputGroup(array $InputGroup) Set The input group of the Flow.
 */
class CreateStreamLinkInputRequest extends AbstractModel
{
    /**
     * @var string StreamLink stream ID.
     */
    public $FlowId;

    /**
     * @var array The input group of the Flow.
     */
    public $InputGroup;

    /**
     * @param string $FlowId StreamLink stream ID.
     * @param array $InputGroup The input group of the Flow.
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

        if (array_key_exists("InputGroup",$param) and $param["InputGroup"] !== null) {
            $this->InputGroup = [];
            foreach ($param["InputGroup"] as $key => $value){
                $obj = new CreateInput();
                $obj->deserialize($value);
                array_push($this->InputGroup, $obj);
            }
        }
    }
}
