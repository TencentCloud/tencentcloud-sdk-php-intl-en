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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSelectiveCredential request structure.
 *
 * @method VerifyFunctionArg getFunctionArg() Obtain A parameter set.
 * @method void setFunctionArg(VerifyFunctionArg $FunctionArg) Set A parameter set.
 * @method integer getPolicyId() Obtain The disclosure policy ID.
 * @method void setPolicyId(integer $PolicyId) Set The disclosure policy ID.
 */
class CreateSelectiveCredentialRequest extends AbstractModel
{
    /**
     * @var VerifyFunctionArg A parameter set.
     */
    public $FunctionArg;

    /**
     * @var integer The disclosure policy ID.
     */
    public $PolicyId;

    /**
     * @param VerifyFunctionArg $FunctionArg A parameter set.
     * @param integer $PolicyId The disclosure policy ID.
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
        if (array_key_exists("FunctionArg",$param) and $param["FunctionArg"] !== null) {
            $this->FunctionArg = new VerifyFunctionArg();
            $this->FunctionArg->deserialize($param["FunctionArg"]);
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
