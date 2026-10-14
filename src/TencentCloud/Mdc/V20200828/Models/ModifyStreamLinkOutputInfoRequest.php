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
 * ModifyStreamLinkOutputInfo request structure.
 *
 * @method string getFlowId() Obtain 01937702ecc509dc0f3269ca3420
 * @method void setFlowId(string $FlowId) Set 01937702ecc509dc0f3269ca3420
 * @method ModifyOutputInfo getOutput() Obtain Output configuration that needs to be modified.
 * @method void setOutput(ModifyOutputInfo $Output) Set Output configuration that needs to be modified.
 */
class ModifyStreamLinkOutputInfoRequest extends AbstractModel
{
    /**
     * @var string 01937702ecc509dc0f3269ca3420
     */
    public $FlowId;

    /**
     * @var ModifyOutputInfo Output configuration that needs to be modified.
     */
    public $Output;

    /**
     * @param string $FlowId 01937702ecc509dc0f3269ca3420
     * @param ModifyOutputInfo $Output Output configuration that needs to be modified.
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

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new ModifyOutputInfo();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
