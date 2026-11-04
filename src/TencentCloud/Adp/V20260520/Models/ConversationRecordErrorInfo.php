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
 * Description of a single dialogue failure
 *
 * @method string getCode() Obtain <p>Failure error code of the dialogue</p>
 * @method void setCode(string $Code) Set <p>Failure error code of the dialogue</p>
 * @method string getMessage() Obtain <p>Dialogue failure error message</p>
 * @method void setMessage(string $Message) Set <p>Dialogue failure error message</p>
 */
class ConversationRecordErrorInfo extends AbstractModel
{
    /**
     * @var string <p>Failure error code of the dialogue</p>
     */
    public $Code;

    /**
     * @var string <p>Dialogue failure error message</p>
     */
    public $Message;

    /**
     * @param string $Code <p>Failure error code of the dialogue</p>
     * @param string $Message <p>Dialogue failure error message</p>
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
