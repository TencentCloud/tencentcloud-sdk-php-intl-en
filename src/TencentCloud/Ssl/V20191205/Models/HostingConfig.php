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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Managed configuration.
 *
 * @method integer getReplaceTime() Obtain Hosted resource replacement time, defaults to 30 days before the certificate expiration if there is a renewal certificate, then replace.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setReplaceTime(integer $ReplaceTime) Set Hosted resource replacement time, defaults to 30 days before the certificate expiration if there is a renewal certificate, then replace.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getMessageTypes() Obtain Hosted send message type: 0, reminder message before hosted starts (you will receive this reminder message even if there is no renewal certificate); 1, reminder message when hosted starts (you will receive the message reminder only if there is a renewal certificate); 2, reminder message when hosted resource replacement fails; 3 reminder message when hosted resource replacement succeeds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMessageTypes(array $MessageTypes) Set Hosted send message type: 0, reminder message before hosted starts (you will receive this reminder message even if there is no renewal certificate); 1, reminder message when hosted starts (you will receive the message reminder only if there is a renewal certificate); 2, reminder message when hosted resource replacement fails; 3 reminder message when hosted resource replacement succeeds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getReplaceStartTime() Obtain Resource replacement start time.
 * @method void setReplaceStartTime(string $ReplaceStartTime) Set Resource replacement start time.
 * @method string getReplaceEndTime() Obtain Resource replacement end time.
 * @method void setReplaceEndTime(string $ReplaceEndTime) Set Resource replacement end time.
 */
class HostingConfig extends AbstractModel
{
    /**
     * @var integer Hosted resource replacement time, defaults to 30 days before the certificate expiration if there is a renewal certificate, then replace.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ReplaceTime;

    /**
     * @var array Hosted send message type: 0, reminder message before hosted starts (you will receive this reminder message even if there is no renewal certificate); 1, reminder message when hosted starts (you will receive the message reminder only if there is a renewal certificate); 2, reminder message when hosted resource replacement fails; 3 reminder message when hosted resource replacement succeeds.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MessageTypes;

    /**
     * @var string Resource replacement start time.
     */
    public $ReplaceStartTime;

    /**
     * @var string Resource replacement end time.
     */
    public $ReplaceEndTime;

    /**
     * @param integer $ReplaceTime Hosted resource replacement time, defaults to 30 days before the certificate expiration if there is a renewal certificate, then replace.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $MessageTypes Hosted send message type: 0, reminder message before hosted starts (you will receive this reminder message even if there is no renewal certificate); 1, reminder message when hosted starts (you will receive the message reminder only if there is a renewal certificate); 2, reminder message when hosted resource replacement fails; 3 reminder message when hosted resource replacement succeeds.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ReplaceStartTime Resource replacement start time.
     * @param string $ReplaceEndTime Resource replacement end time.
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
        if (array_key_exists("ReplaceTime",$param) and $param["ReplaceTime"] !== null) {
            $this->ReplaceTime = $param["ReplaceTime"];
        }

        if (array_key_exists("MessageTypes",$param) and $param["MessageTypes"] !== null) {
            $this->MessageTypes = $param["MessageTypes"];
        }

        if (array_key_exists("ReplaceStartTime",$param) and $param["ReplaceStartTime"] !== null) {
            $this->ReplaceStartTime = $param["ReplaceStartTime"];
        }

        if (array_key_exists("ReplaceEndTime",$param) and $param["ReplaceEndTime"] !== null) {
            $this->ReplaceEndTime = $param["ReplaceEndTime"];
        }
    }
}
