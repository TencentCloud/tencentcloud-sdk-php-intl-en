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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CKafka address
 *
 * @method string getAddress() Obtain CKafka address
 * @method void setAddress(string $Address) Set CKafka address
 * @method string getTopic() Obtain CKafka topic
 * @method void setTopic(string $Topic) Set CKafka topic
 * @method string getUser() Obtain CKafka username
 * @method void setUser(string $User) Set CKafka username
 * @method string getPassword() Obtain CKafka password
 * @method void setPassword(string $Password) Set CKafka password
 * @method string getInstance() Obtain CKafka instance
 * @method void setInstance(string $Instance) Set CKafka instance
 * @method integer getIsVpc() Obtain Whether VPC access is enabled
 * @method void setIsVpc(integer $IsVpc) Set Whether VPC access is enabled
 */
class KafkaInfo extends AbstractModel
{
    /**
     * @var string CKafka address
     */
    public $Address;

    /**
     * @var string CKafka topic
     */
    public $Topic;

    /**
     * @var string CKafka username
     */
    public $User;

    /**
     * @var string CKafka password
     */
    public $Password;

    /**
     * @var string CKafka instance
     */
    public $Instance;

    /**
     * @var integer Whether VPC access is enabled
     */
    public $IsVpc;

    /**
     * @param string $Address CKafka address
     * @param string $Topic CKafka topic
     * @param string $User CKafka username
     * @param string $Password CKafka password
     * @param string $Instance CKafka instance
     * @param integer $IsVpc Whether VPC access is enabled
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = $param["Instance"];
        }

        if (array_key_exists("IsVpc",$param) and $param["IsVpc"] !== null) {
            $this->IsVpc = $param["IsVpc"];
        }
    }
}
