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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Receiver details
 *
 * @method string getChannelName() Obtain Notification channel name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setChannelName(string $ChannelName) Set Notification channel name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getReceivers() Obtain Recipient.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReceivers(array $Receivers) Set Recipient.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSendStatus() Obtain Sending result. Valid values: 0, (invalid), 1 (successful), 2 (failed), and 3 (no sending required).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSendStatus(string $SendStatus) Set Sending result. Valid values: 0, (invalid), 1 (successful), 2 (failed), and 3 (no sending required).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ChannelsReceivers extends AbstractModel
{
    /**
     * @var string Notification channel name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ChannelName;

    /**
     * @var array Recipient.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Receivers;

    /**
     * @var string Sending result. Valid values: 0, (invalid), 1 (successful), 2 (failed), and 3 (no sending required).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SendStatus;

    /**
     * @param string $ChannelName Notification channel name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Receivers Recipient.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SendStatus Sending result. Valid values: 0, (invalid), 1 (successful), 2 (failed), and 3 (no sending required).
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
        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("SendStatus",$param) and $param["SendStatus"] !== null) {
            $this->SendStatus = $param["SendStatus"];
        }
    }
}
