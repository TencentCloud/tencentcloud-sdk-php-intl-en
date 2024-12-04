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
 * CreateConsumerGroup request structure.
 *
 * @method string getSubscribeId() Obtain Subscription instance ID
 * @method void setSubscribeId(string $SubscribeId) Set Subscription instance ID
 * @method string getConsumerGroupName() Obtain Consumer group name, which consists of numbers, letters (upper and lower case), or begins with _ - . Ends with numbers, letters (upper and lower case). The full name of the actually generated consumer group is in the form: consumer-grp-#{SubscribeId}-#{ConsumerGroupName}.
 * @method void setConsumerGroupName(string $ConsumerGroupName) Set Consumer group name, which consists of numbers, letters (upper and lower case), or begins with _ - . Ends with numbers, letters (upper and lower case). The full name of the actually generated consumer group is in the form: consumer-grp-#{SubscribeId}-#{ConsumerGroupName}.
 * @method string getAccountName() Obtain Account name, which consists of numbers, letters (upper and lower case), or begins with _-.. Ends with numbers, letters (upper and lower case). The full name of the actually generated account is in the form: account-#{SubscribeId}-#{AccountName}.
 * @method void setAccountName(string $AccountName) Set Account name, which consists of numbers, letters (upper and lower case), or begins with _-.. Ends with numbers, letters (upper and lower case). The full name of the actually generated account is in the form: account-#{SubscribeId}-#{AccountName}.
 * @method string getPassword() Obtain Consumer group password, which should be longer than 3 characters.
 * @method void setPassword(string $Password) Set Consumer group password, which should be longer than 3 characters.
 * @method string getDescription() Obtain Consumer group description
 * @method void setDescription(string $Description) Set Consumer group description
 */
class CreateConsumerGroupRequest extends AbstractModel
{
    /**
     * @var string Subscription instance ID
     */
    public $SubscribeId;

    /**
     * @var string Consumer group name, which consists of numbers, letters (upper and lower case), or begins with _ - . Ends with numbers, letters (upper and lower case). The full name of the actually generated consumer group is in the form: consumer-grp-#{SubscribeId}-#{ConsumerGroupName}.
     */
    public $ConsumerGroupName;

    /**
     * @var string Account name, which consists of numbers, letters (upper and lower case), or begins with _-.. Ends with numbers, letters (upper and lower case). The full name of the actually generated account is in the form: account-#{SubscribeId}-#{AccountName}.
     */
    public $AccountName;

    /**
     * @var string Consumer group password, which should be longer than 3 characters.
     */
    public $Password;

    /**
     * @var string Consumer group description
     */
    public $Description;

    /**
     * @param string $SubscribeId Subscription instance ID
     * @param string $ConsumerGroupName Consumer group name, which consists of numbers, letters (upper and lower case), or begins with _ - . Ends with numbers, letters (upper and lower case). The full name of the actually generated consumer group is in the form: consumer-grp-#{SubscribeId}-#{ConsumerGroupName}.
     * @param string $AccountName Account name, which consists of numbers, letters (upper and lower case), or begins with _-.. Ends with numbers, letters (upper and lower case). The full name of the actually generated account is in the form: account-#{SubscribeId}-#{AccountName}.
     * @param string $Password Consumer group password, which should be longer than 3 characters.
     * @param string $Description Consumer group description
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

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
