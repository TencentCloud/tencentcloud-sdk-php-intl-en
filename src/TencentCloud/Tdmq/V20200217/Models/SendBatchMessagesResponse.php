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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendBatchMessages response structure.
 *
 * @method string getMessageId() Obtain Unique message ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMessageId(string $MessageId) Set Unique message ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getErrorMsg() Obtain Error message. If an empty string is returned, no error occurred.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setErrorMsg(string $ErrorMsg) Set Error message. If an empty string is returned, no error occurred.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class SendBatchMessagesResponse extends AbstractModel
{
    /**
     * @var string Unique message ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MessageId;

    /**
     * @var string Error message. If an empty string is returned, no error occurred.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorMsg;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $MessageId Unique message ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorMsg Error message. If an empty string is returned, no error occurred.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
