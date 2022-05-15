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
 * ModifyStreamLinkInput request structure.
 *
 * @method string getFlowId() Obtain The flow ID.
 * @method void setFlowId(string $FlowId) Set The flow ID.
 * @method ModifyInput getInput() Obtain The input information to modify.
 * @method void setInput(ModifyInput $Input) Set The input information to modify.
 */
class ModifyStreamLinkInputRequest extends AbstractModel
{
    /**
     * @var string The flow ID.
     */
    public $FlowId;

    /**
     * @var ModifyInput The input information to modify.
     */
    public $Input;

    /**
     * @param string $FlowId The flow ID.
     * @param ModifyInput $Input The input information to modify.
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

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new ModifyInput();
            $this->Input->deserialize($param["Input"]);
        }
    }
}
