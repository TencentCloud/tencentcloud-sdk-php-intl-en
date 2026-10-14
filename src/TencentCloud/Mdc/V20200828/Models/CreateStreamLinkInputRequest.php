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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStreamLinkInput request structure.
 *
 * @method string getFlowId() Obtain <p>Media transmission stream ID.</p>
 * @method void setFlowId(string $FlowId) Set <p>Media transmission stream ID.</p>
 * @method array getInputGroup() Obtain <p>Input group of a stream.</p>
 * @method void setInputGroup(array $InputGroup) Set <p>Input group of a stream.</p>
 */
class CreateStreamLinkInputRequest extends AbstractModel
{
    /**
     * @var string <p>Media transmission stream ID.</p>
     */
    public $FlowId;

    /**
     * @var array <p>Input group of a stream.</p>
     */
    public $InputGroup;

    /**
     * @param string $FlowId <p>Media transmission stream ID.</p>
     * @param array $InputGroup <p>Input group of a stream.</p>
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
