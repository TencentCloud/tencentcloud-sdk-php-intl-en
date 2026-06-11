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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Consumer group information
 *
 * @method string getConsumerGroup() Obtain Consumer group flag.
 * @method void setConsumerGroup(string $ConsumerGroup) Set Consumer group flag.
 * @method integer getTimeout() Obtain Consumer heartbeat timeout (seconds).
 * @method void setTimeout(integer $Timeout) Set Consumer heartbeat timeout (seconds).
 * @method array getTopics() Obtain topic list
 * @method void setTopics(array $Topics) Set topic list
 */
class ConsumerGroupInfo extends AbstractModel
{
    /**
     * @var string Consumer group flag.
     */
    public $ConsumerGroup;

    /**
     * @var integer Consumer heartbeat timeout (seconds).
     */
    public $Timeout;

    /**
     * @var array topic list
     */
    public $Topics;

    /**
     * @param string $ConsumerGroup Consumer group flag.
     * @param integer $Timeout Consumer heartbeat timeout (seconds).
     * @param array $Topics topic list
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
        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = $param["Topics"];
        }
    }
}
