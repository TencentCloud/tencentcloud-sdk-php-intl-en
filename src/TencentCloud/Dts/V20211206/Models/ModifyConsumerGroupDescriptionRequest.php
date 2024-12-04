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
 * ModifyConsumerGroupDescription request structure.
 *
 * @method string getSubscribeId() Obtain Data subscription instance ID
 * @method void setSubscribeId(string $SubscribeId) Set Data subscription instance ID
 * @method string getConsumerGroupName() Obtain Consumer group name. The full name of the actual consumer group is in the form: consumer-grp-#{SubscribeId}-#{ConsumerGroupName}.Please make sure the consumer group name is correct.
 * @method void setConsumerGroupName(string $ConsumerGroupName) Set Consumer group name. The full name of the actual consumer group is in the form: consumer-grp-#{SubscribeId}-#{ConsumerGroupName}.Please make sure the consumer group name is correct.
 * @method string getAccountName() Obtain Account name. The full name of the actual account is in the form: account-#{SubscribeId}-#{AccountName}.Please make sure the account name is correct.
 * @method void setAccountName(string $AccountName) Set Account name. The full name of the actual account is in the form: account-#{SubscribeId}-#{AccountName}.Please make sure the account name is correct.
 * @method string getDescription() Obtain Updated description of the consumer group
 * @method void setDescription(string $Description) Set Updated description of the consumer group
 */
class ModifyConsumerGroupDescriptionRequest extends AbstractModel
{
    /**
     * @var string Data subscription instance ID
     */
    public $SubscribeId;

    /**
     * @var string Consumer group name. The full name of the actual consumer group is in the form: consumer-grp-#{SubscribeId}-#{ConsumerGroupName}.Please make sure the consumer group name is correct.
     */
    public $ConsumerGroupName;

    /**
     * @var string Account name. The full name of the actual account is in the form: account-#{SubscribeId}-#{AccountName}.Please make sure the account name is correct.
     */
    public $AccountName;

    /**
     * @var string Updated description of the consumer group
     */
    public $Description;

    /**
     * @param string $SubscribeId Data subscription instance ID
     * @param string $ConsumerGroupName Consumer group name. The full name of the actual consumer group is in the form: consumer-grp-#{SubscribeId}-#{ConsumerGroupName}.Please make sure the consumer group name is correct.
     * @param string $AccountName Account name. The full name of the actual account is in the form: account-#{SubscribeId}-#{AccountName}.Please make sure the account name is correct.
     * @param string $Description Updated description of the consumer group
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

        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
