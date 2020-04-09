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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Returned result value of operation
 *
 * @method string getReturnCode() Obtain Returned code. 0: normal, other values: error
 * @method void setReturnCode(string $ReturnCode) Set Returned code. 0: normal, other values: error
 * @method string getReturnMessage() Obtain Success message
 * @method void setReturnMessage(string $ReturnMessage) Set Success message
 * @method OperateResponseData getData() Obtain Data returned by an operation, which may contain `flowId`, etc.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setData(OperateResponseData $Data) Set Data returned by an operation, which may contain `flowId`, etc.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class JgwOperateResponse extends AbstractModel
{
    /**
     * @var string Returned code. 0: normal, other values: error
     */
    public $ReturnCode;

    /**
     * @var string Success message
     */
    public $ReturnMessage;

    /**
     * @var OperateResponseData Data returned by an operation, which may contain `flowId`, etc.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Data;

    /**
     * @param string $ReturnCode Returned code. 0: normal, other values: error
     * @param string $ReturnMessage Success message
     * @param OperateResponseData $Data Data returned by an operation, which may contain `flowId`, etc.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("ReturnMessage",$param) and $param["ReturnMessage"] !== null) {
            $this->ReturnMessage = $param["ReturnMessage"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new OperateResponseData();
            $this->Data->deserialize($param["Data"]);
        }
    }
}
