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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAIAgentCall request structure.
 *
 * @method integer getSdkAppId() Obtain Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method integer getAIAgentId() Obtain AI agent id.
 * @method void setAIAgentId(integer $AIAgentId) Set AI agent id.
 * @method string getCallee() Obtain Callee number.
 * @method void setCallee(string $Callee) Set Callee number.
 * @method array getCallers() Obtain Caller number list
 * @method void setCallers(array $Callers) Set Caller number list
 * @method array getPromptVariables() Obtain Prompt variable.
 * @method void setPromptVariables(array $PromptVariables) Set Prompt variable.
 */
class CreateAIAgentCallRequest extends AbstractModel
{
    /**
     * @var integer Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var integer AI agent id.
     */
    public $AIAgentId;

    /**
     * @var string Callee number.
     */
    public $Callee;

    /**
     * @var array Caller number list
     */
    public $Callers;

    /**
     * @var array Prompt variable.
     * @deprecated
     */
    public $PromptVariables;

    /**
     * @param integer $SdkAppId Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param integer $AIAgentId AI agent id.
     * @param string $Callee Callee number.
     * @param array $Callers Caller number list
     * @param array $PromptVariables Prompt variable.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("AIAgentId",$param) and $param["AIAgentId"] !== null) {
            $this->AIAgentId = $param["AIAgentId"];
        }

        if (array_key_exists("Callee",$param) and $param["Callee"] !== null) {
            $this->Callee = $param["Callee"];
        }

        if (array_key_exists("Callers",$param) and $param["Callers"] !== null) {
            $this->Callers = $param["Callers"];
        }

        if (array_key_exists("PromptVariables",$param) and $param["PromptVariables"] !== null) {
            $this->PromptVariables = [];
            foreach ($param["PromptVariables"] as $key => $value){
                $obj = new Variable();
                $obj->deserialize($value);
                array_push($this->PromptVariables, $obj);
            }
        }
    }
}
