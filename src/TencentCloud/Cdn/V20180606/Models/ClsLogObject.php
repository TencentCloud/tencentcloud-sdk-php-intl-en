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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLS log search object
 *
 * @method string getTopicId() Obtain Topic ID
 * @method void setTopicId(string $TopicId) Set Topic ID
 * @method string getTopicName() Obtain Topic name
 * @method void setTopicName(string $TopicName) Set Topic name
 * @method string getTimestamp() Obtain Log time
 * @method void setTimestamp(string $Timestamp) Set Log time
 * @method string getContent() Obtain Log content
 * @method void setContent(string $Content) Set Log content
 * @method string getFilename() Obtain Capture path
 * @method void setFilename(string $Filename) Set Capture path
 * @method string getSource() Obtain Log source device
 * @method void setSource(string $Source) Set Log source device
 */
class ClsLogObject extends AbstractModel
{
    /**
     * @var string Topic ID
     */
    public $TopicId;

    /**
     * @var string Topic name
     */
    public $TopicName;

    /**
     * @var string Log time
     */
    public $Timestamp;

    /**
     * @var string Log content
     */
    public $Content;

    /**
     * @var string Capture path
     */
    public $Filename;

    /**
     * @var string Log source device
     */
    public $Source;

    /**
     * @param string $TopicId Topic ID
     * @param string $TopicName Topic name
     * @param string $Timestamp Log time
     * @param string $Content Log content
     * @param string $Filename Capture path
     * @param string $Source Log source device
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Filename",$param) and $param["Filename"] !== null) {
            $this->Filename = $param["Filename"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}
