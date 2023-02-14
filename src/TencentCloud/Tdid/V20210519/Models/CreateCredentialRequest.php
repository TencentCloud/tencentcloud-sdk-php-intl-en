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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCredential request structure.
 *
 * @method FunctionArg getFunctionArg() Obtain A parameter set. For details, see the example.
 * @method void setFunctionArg(FunctionArg $FunctionArg) Set A parameter set. For details, see the example.
 * @method TransactionArg getTransactionArg() Obtain A parameter set. For details, see the example.
 * @method void setTransactionArg(TransactionArg $TransactionArg) Set A parameter set. For details, see the example.
 * @method string getVersionCredential() Obtain The version.
 * @method void setVersionCredential(string $VersionCredential) Set The version.
 * @method boolean getUnSigned() Obtain Whether the credential is unsigned.
 * @method void setUnSigned(boolean $UnSigned) Set Whether the credential is unsigned.
 */
class CreateCredentialRequest extends AbstractModel
{
    /**
     * @var FunctionArg A parameter set. For details, see the example.
     */
    public $FunctionArg;

    /**
     * @var TransactionArg A parameter set. For details, see the example.
     */
    public $TransactionArg;

    /**
     * @var string The version.
     */
    public $VersionCredential;

    /**
     * @var boolean Whether the credential is unsigned.
     */
    public $UnSigned;

    /**
     * @param FunctionArg $FunctionArg A parameter set. For details, see the example.
     * @param TransactionArg $TransactionArg A parameter set. For details, see the example.
     * @param string $VersionCredential The version.
     * @param boolean $UnSigned Whether the credential is unsigned.
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
            $this->FunctionArg = new FunctionArg();
            $this->FunctionArg->deserialize($param["FunctionArg"]);
        }

        if (array_key_exists("TransactionArg",$param) and $param["TransactionArg"] !== null) {
            $this->TransactionArg = new TransactionArg();
            $this->TransactionArg->deserialize($param["TransactionArg"]);
        }

        if (array_key_exists("VersionCredential",$param) and $param["VersionCredential"] !== null) {
            $this->VersionCredential = $param["VersionCredential"];
        }

        if (array_key_exists("UnSigned",$param) and $param["UnSigned"] !== null) {
            $this->UnSigned = $param["UnSigned"];
        }
    }
}
