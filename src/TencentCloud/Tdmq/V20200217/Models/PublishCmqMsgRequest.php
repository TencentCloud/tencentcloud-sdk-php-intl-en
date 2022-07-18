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
 * PublishCmqMsg request structure.
 *
 * @method string getTopicName() Obtain Topic name
 * @method void setTopicName(string $TopicName) Set Topic name
 * @method string getMsgContent() Obtain Message content. The total message size is up to 1,024 KB.
 * @method void setMsgContent(string $MsgContent) Set Message content. The total message size is up to 1,024 KB.
 * @method array getMsgTag() Obtain Message tag. You can pass in multiple tags or a single route. Each tag or route can contain up to 64 characters.
 * @method void setMsgTag(array $MsgTag) Set Message tag. You can pass in multiple tags or a single route. Each tag or route can contain up to 64 characters.
 */
class PublishCmqMsgRequest extends AbstractModel
{
    /**
     * @var string Topic name
     */
    public $TopicName;

    /**
     * @var string Message content. The total message size is up to 1,024 KB.
     */
    public $MsgContent;

    /**
     * @var array Message tag. You can pass in multiple tags or a single route. Each tag or route can contain up to 64 characters.
     */
    public $MsgTag;

    /**
     * @param string $TopicName Topic name
     * @param string $MsgContent Message content. The total message size is up to 1,024 KB.
     * @param array $MsgTag Message tag. You can pass in multiple tags or a single route. Each tag or route can contain up to 64 characters.
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("MsgContent",$param) and $param["MsgContent"] !== null) {
            $this->MsgContent = $param["MsgContent"];
        }

        if (array_key_exists("MsgTag",$param) and $param["MsgTag"] !== null) {
            $this->MsgTag = $param["MsgTag"];
        }
    }
}
