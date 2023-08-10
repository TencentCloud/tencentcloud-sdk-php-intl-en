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
 * SendRocketMQMessage request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getNamespaceId() Obtain Namespace ID
 * @method void setNamespaceId(string $NamespaceId) Set Namespace ID
 * @method string getTopicName() Obtain Topic name
 * @method void setTopicName(string $TopicName) Set Topic name
 * @method string getMsgBody() Obtain Message content
 * @method void setMsgBody(string $MsgBody) Set Message content
 * @method string getMsgKey() Obtain Message key
 * @method void setMsgKey(string $MsgKey) Set Message key
 * @method string getMsgTag() Obtain Message tag
 * @method void setMsgTag(string $MsgTag) Set Message tag
 */
class SendRocketMQMessageRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Namespace ID
     */
    public $NamespaceId;

    /**
     * @var string Topic name
     */
    public $TopicName;

    /**
     * @var string Message content
     */
    public $MsgBody;

    /**
     * @var string Message key
     */
    public $MsgKey;

    /**
     * @var string Message tag
     */
    public $MsgTag;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $NamespaceId Namespace ID
     * @param string $TopicName Topic name
     * @param string $MsgBody Message content
     * @param string $MsgKey Message key
     * @param string $MsgTag Message tag
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("MsgBody",$param) and $param["MsgBody"] !== null) {
            $this->MsgBody = $param["MsgBody"];
        }

        if (array_key_exists("MsgKey",$param) and $param["MsgKey"] !== null) {
            $this->MsgKey = $param["MsgKey"];
        }

        if (array_key_exists("MsgTag",$param) and $param["MsgTag"] !== null) {
            $this->MsgTag = $param["MsgTag"];
        }
    }
}
