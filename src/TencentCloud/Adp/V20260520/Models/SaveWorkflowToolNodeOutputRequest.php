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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SaveWorkflowToolNodeOutput request structure.
 *
 * @method string getCallbackToken() Obtain <p>Callback token</p><p>Request Header X-ADP-Callback-Token</p>
 * @method void setCallbackToken(string $CallbackToken) Set <p>Callback token</p><p>Request Header X-ADP-Callback-Token</p>
 * @method string getResult() Obtain <p>Callback result</p>
 * @method void setResult(string $Result) Set <p>Callback result</p>
 */
class SaveWorkflowToolNodeOutputRequest extends AbstractModel
{
    /**
     * @var string <p>Callback token</p><p>Request Header X-ADP-Callback-Token</p>
     */
    public $CallbackToken;

    /**
     * @var string <p>Callback result</p>
     */
    public $Result;

    /**
     * @param string $CallbackToken <p>Callback token</p><p>Request Header X-ADP-Callback-Token</p>
     * @param string $Result <p>Callback result</p>
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
        if (array_key_exists("CallbackToken",$param) and $param["CallbackToken"] !== null) {
            $this->CallbackToken = $param["CallbackToken"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
