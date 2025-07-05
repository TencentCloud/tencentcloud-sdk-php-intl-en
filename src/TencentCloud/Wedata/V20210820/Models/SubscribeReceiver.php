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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Subscription Recipient
 *
 * @method integer getReceiverUserId() Obtain Recipient Uin
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setReceiverUserId(integer $ReceiverUserId) Set Recipient Uin
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getReceiverName() Obtain Recipient Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setReceiverName(string $ReceiverName) Set Recipient Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getReceiverUserIdStr() Obtain Recipient UIN
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setReceiverUserIdStr(string $ReceiverUserIdStr) Set Recipient UIN
Note: This field may return null, indicating that no valid value can be obtained.
 */
class SubscribeReceiver extends AbstractModel
{
    /**
     * @var integer Recipient Uin
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ReceiverUserId;

    /**
     * @var string Recipient Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ReceiverName;

    /**
     * @var string Recipient UIN
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ReceiverUserIdStr;

    /**
     * @param integer $ReceiverUserId Recipient Uin
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ReceiverName Recipient Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ReceiverUserIdStr Recipient UIN
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("ReceiverUserId",$param) and $param["ReceiverUserId"] !== null) {
            $this->ReceiverUserId = $param["ReceiverUserId"];
        }

        if (array_key_exists("ReceiverName",$param) and $param["ReceiverName"] !== null) {
            $this->ReceiverName = $param["ReceiverName"];
        }

        if (array_key_exists("ReceiverUserIdStr",$param) and $param["ReceiverUserIdStr"] !== null) {
            $this->ReceiverUserIdStr = $param["ReceiverUserIdStr"];
        }
    }
}
