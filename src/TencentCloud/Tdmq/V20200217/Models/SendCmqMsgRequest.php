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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendCmqMsg request structure.
 *
 * @method string getQueueName() Obtain Queue name
 * @method void setQueueName(string $QueueName) Set Queue name
 * @method string getMsgContent() Obtain Message content
 * @method void setMsgContent(string $MsgContent) Set Message content
 * @method integer getDelaySeconds() Obtain Delay time
 * @method void setDelaySeconds(integer $DelaySeconds) Set Delay time
 */
class SendCmqMsgRequest extends AbstractModel
{
    /**
     * @var string Queue name
     */
    public $QueueName;

    /**
     * @var string Message content
     */
    public $MsgContent;

    /**
     * @var integer Delay time
     */
    public $DelaySeconds;

    /**
     * @param string $QueueName Queue name
     * @param string $MsgContent Message content
     * @param integer $DelaySeconds Delay time
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
        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("MsgContent",$param) and $param["MsgContent"] !== null) {
            $this->MsgContent = $param["MsgContent"];
        }

        if (array_key_exists("DelaySeconds",$param) and $param["DelaySeconds"] !== null) {
            $this->DelaySeconds = $param["DelaySeconds"];
        }
    }
}
