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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyConsumerGroupPassword request structure.
 *
 * @method string getSubscribeId() Obtain Data subscription instance ID
 * @method void setSubscribeId(string $SubscribeId) Set Data subscription instance ID
 * @method string getAccountName() Obtain Account name. The full name of the actual account is in the form: account-#{SubscribeId}-#{AccountName}.
 * @method void setAccountName(string $AccountName) Set Account name. The full name of the actual account is in the form: account-#{SubscribeId}-#{AccountName}.
 * @method string getConsumerGroupName() Obtain Consumer group name. The full name of the actual consumer group is in the form: consumer-grp-#{SubscribeId}-#{ConsumerGroupName}.
 * @method void setConsumerGroupName(string $ConsumerGroupName) Set Consumer group name. The full name of the actual consumer group is in the form: consumer-grp-#{SubscribeId}-#{ConsumerGroupName}.
 * @method string getOldPassword() Obtain Old Password.
 * @method void setOldPassword(string $OldPassword) Set Old Password.
 * @method string getNewPassword() Obtain New password. The character length is no less than 3 and no more than 32.
 * @method void setNewPassword(string $NewPassword) Set New password. The character length is no less than 3 and no more than 32.
 */
class ModifyConsumerGroupPasswordRequest extends AbstractModel
{
    /**
     * @var string Data subscription instance ID
     */
    public $SubscribeId;

    /**
     * @var string Account name. The full name of the actual account is in the form: account-#{SubscribeId}-#{AccountName}.
     */
    public $AccountName;

    /**
     * @var string Consumer group name. The full name of the actual consumer group is in the form: consumer-grp-#{SubscribeId}-#{ConsumerGroupName}.
     */
    public $ConsumerGroupName;

    /**
     * @var string Old Password.
     */
    public $OldPassword;

    /**
     * @var string New password. The character length is no less than 3 and no more than 32.
     */
    public $NewPassword;

    /**
     * @param string $SubscribeId Data subscription instance ID
     * @param string $AccountName Account name. The full name of the actual account is in the form: account-#{SubscribeId}-#{AccountName}.
     * @param string $ConsumerGroupName Consumer group name. The full name of the actual consumer group is in the form: consumer-grp-#{SubscribeId}-#{ConsumerGroupName}.
     * @param string $OldPassword Old Password.
     * @param string $NewPassword New password. The character length is no less than 3 and no more than 32.
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("OldPassword",$param) and $param["OldPassword"] !== null) {
            $this->OldPassword = $param["OldPassword"];
        }

        if (array_key_exists("NewPassword",$param) and $param["NewPassword"] !== null) {
            $this->NewPassword = $param["NewPassword"];
        }
    }
}
