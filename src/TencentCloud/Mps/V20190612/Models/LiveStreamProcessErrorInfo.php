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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a live stream processing error
 *
 * @method integer getErrCode() Obtain Error code:
<li>0: No error;</li>
<li>If this parameter is not 0, an error has occurred. Please see the error message (`Message`).</li>
 * @method void setErrCode(integer $ErrCode) Set Error code:
<li>0: No error;</li>
<li>If this parameter is not 0, an error has occurred. Please see the error message (`Message`).</li>
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 */
class LiveStreamProcessErrorInfo extends AbstractModel
{
    /**
     * @var integer Error code:
<li>0: No error;</li>
<li>If this parameter is not 0, an error has occurred. Please see the error message (`Message`).</li>
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @param integer $ErrCode Error code:
<li>0: No error;</li>
<li>If this parameter is not 0, an error has occurred. Please see the error message (`Message`).</li>
     * @param string $Message Error message.
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
        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
