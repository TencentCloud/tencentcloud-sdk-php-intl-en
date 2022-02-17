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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TerminateAsyncEvent request structure.
 *
 * @method string getFunctionName() Obtain Function name
 * @method void setFunctionName(string $FunctionName) Set Function name
 * @method string getInvokeRequestId() Obtain Terminated invocation request ID
 * @method void setInvokeRequestId(string $InvokeRequestId) Set Terminated invocation request ID
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method boolean getGraceShutdown() Obtain Whether to enable grace shutdown. If it’s `true`, a `SIGTERM` signal is sent to the specified request. See [Sending termination signal](https://intl.cloud.tencent.com/document/product/583/63969?from_cn_redirect=1#.E5.8F.91.E9.80.81.E7.BB.88.E6.AD.A2.E4.BF.A1.E5.8F.B7]. It’s set to `false` by default.
 * @method void setGraceShutdown(boolean $GraceShutdown) Set Whether to enable grace shutdown. If it’s `true`, a `SIGTERM` signal is sent to the specified request. See [Sending termination signal](https://intl.cloud.tencent.com/document/product/583/63969?from_cn_redirect=1#.E5.8F.91.E9.80.81.E7.BB.88.E6.AD.A2.E4.BF.A1.E5.8F.B7]. It’s set to `false` by default.
 */
class TerminateAsyncEventRequest extends AbstractModel
{
    /**
     * @var string Function name
     */
    public $FunctionName;

    /**
     * @var string Terminated invocation request ID
     */
    public $InvokeRequestId;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var boolean Whether to enable grace shutdown. If it’s `true`, a `SIGTERM` signal is sent to the specified request. See [Sending termination signal](https://intl.cloud.tencent.com/document/product/583/63969?from_cn_redirect=1#.E5.8F.91.E9.80.81.E7.BB.88.E6.AD.A2.E4.BF.A1.E5.8F.B7]. It’s set to `false` by default.
     */
    public $GraceShutdown;

    /**
     * @param string $FunctionName Function name
     * @param string $InvokeRequestId Terminated invocation request ID
     * @param string $Namespace Namespace
     * @param boolean $GraceShutdown Whether to enable grace shutdown. If it’s `true`, a `SIGTERM` signal is sent to the specified request. See [Sending termination signal](https://intl.cloud.tencent.com/document/product/583/63969?from_cn_redirect=1#.E5.8F.91.E9.80.81.E7.BB.88.E6.AD.A2.E4.BF.A1.E5.8F.B7]. It’s set to `false` by default.
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("InvokeRequestId",$param) and $param["InvokeRequestId"] !== null) {
            $this->InvokeRequestId = $param["InvokeRequestId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("GraceShutdown",$param) and $param["GraceShutdown"] !== null) {
            $this->GraceShutdown = $param["GraceShutdown"];
        }
    }
}
