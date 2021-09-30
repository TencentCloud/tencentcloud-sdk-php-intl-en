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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Restricted operation.
 *
 * @method string getAction() Obtain Restricted operation name.
 * @method void setAction(string $Action) Set Restricted operation name.
 * @method string getCode() Obtain Restricted operation message code.
 * @method void setCode(string $Code) Set Restricted operation message code.
 * @method string getMessage() Obtain Restricted operation message.
 * @method void setMessage(string $Message) Set Restricted operation message.
 */
class DeniedAction extends AbstractModel
{
    /**
     * @var string Restricted operation name.
     */
    public $Action;

    /**
     * @var string Restricted operation message code.
     */
    public $Code;

    /**
     * @var string Restricted operation message.
     */
    public $Message;

    /**
     * @param string $Action Restricted operation name.
     * @param string $Code Restricted operation message code.
     * @param string $Message Restricted operation message.
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
