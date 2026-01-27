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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Runtime exception message.
 *
 * @method string getMsg() Obtain Error message.
 * @method void setMsg(string $Msg) Set Error message.
 * @method integer getCode() Obtain Error code.
4000 internal service error.
4001 request model timeout.

 * @method void setCode(integer $Code) Set Error code.
4000 internal service error.
4001 request model timeout.
 */
class ErrorMsg extends AbstractModel
{
    /**
     * @var string Error message.
     */
    public $Msg;

    /**
     * @var integer Error code.
4000 internal service error.
4001 request model timeout.

     */
    public $Code;

    /**
     * @param string $Msg Error message.
     * @param integer $Code Error code.
4000 internal service error.
4001 request model timeout.
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
        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }
    }
}
