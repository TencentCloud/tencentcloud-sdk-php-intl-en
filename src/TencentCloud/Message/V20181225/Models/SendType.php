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
namespace TencentCloud\Message\V20181225\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Message type sending channel.
 *
 * @method integer getMsgType() Obtain Message type.
 * @method void setMsgType(integer $MsgType) Set Message type.
 * @method integer getSendChannel() Obtain Delivery channel.
 * @method void setSendChannel(integer $SendChannel) Set Delivery channel.
 */
class SendType extends AbstractModel
{
    /**
     * @var integer Message type.
     */
    public $MsgType;

    /**
     * @var integer Delivery channel.
     */
    public $SendChannel;

    /**
     * @param integer $MsgType Message type.
     * @param integer $SendChannel Delivery channel.
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
        if (array_key_exists("MsgType",$param) and $param["MsgType"] !== null) {
            $this->MsgType = $param["MsgType"];
        }

        if (array_key_exists("SendChannel",$param) and $param["SendChannel"] !== null) {
            $this->SendChannel = $param["SendChannel"];
        }
    }
}
