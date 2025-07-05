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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Error information and the corresponding solution
 *
 * @method string getReason() Obtain Cause of the error
 * @method void setReason(string $Reason) Set Cause of the error
 * @method string getMessage() Obtain Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSolution() Obtain Solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSolution(string $Solution) Set Solution
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ErrInfo extends AbstractModel
{
    /**
     * @var string Cause of the error
     */
    public $Reason;

    /**
     * @var string Error message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var string Solution
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Solution;

    /**
     * @param string $Reason Cause of the error
     * @param string $Message Error message
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Solution Solution
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }
    }
}
