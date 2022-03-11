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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Operation (action)
 *
 * @method string getAction() Obtain Executable operation
 * @method void setAction(string $Action) Set Executable operation
 * @method string getCode() Obtain Code
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCode(string $Code) Set Code
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain Specific information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Specific information
Note: this field may return null, indicating that no valid values can be obtained.
 */
class OperatorAction extends AbstractModel
{
    /**
     * @var string Executable operation
     */
    public $Action;

    /**
     * @var string Code
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Code;

    /**
     * @var string Specific information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @param string $Action Executable operation
     * @param string $Code Code
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Message Specific information
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
