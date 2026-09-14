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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getNotifyType() Obtain 
 * @method void setNotifyType(string $NotifyType) Set 
 * @method string getNotifyUrl() Obtain 
 * @method void setNotifyUrl(string $NotifyUrl) Set 
 * @method string getCmqModel() Obtain 
 * @method void setCmqModel(string $CmqModel) Set 
 * @method string getCmqRegion() Obtain 
 * @method void setCmqRegion(string $CmqRegion) Set 
 * @method string getQueueName() Obtain 
 * @method void setQueueName(string $QueueName) Set 
 * @method string getTopicName() Obtain 
 * @method void setTopicName(string $TopicName) Set 
 * @method string getNotifyKey() Obtain 
 * @method void setNotifyKey(string $NotifyKey) Set 
 */
class LiveStreamTaskNotifyConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $NotifyType;

    /**
     * @var string 
     */
    public $NotifyUrl;

    /**
     * @var string 
     */
    public $CmqModel;

    /**
     * @var string 
     */
    public $CmqRegion;

    /**
     * @var string 
     */
    public $QueueName;

    /**
     * @var string 
     */
    public $TopicName;

    /**
     * @var string 
     */
    public $NotifyKey;

    /**
     * @param string $NotifyType 
     * @param string $NotifyUrl 
     * @param string $CmqModel 
     * @param string $CmqRegion 
     * @param string $QueueName 
     * @param string $TopicName 
     * @param string $NotifyKey 
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
        if (array_key_exists("NotifyType",$param) and $param["NotifyType"] !== null) {
            $this->NotifyType = $param["NotifyType"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("CmqModel",$param) and $param["CmqModel"] !== null) {
            $this->CmqModel = $param["CmqModel"];
        }

        if (array_key_exists("CmqRegion",$param) and $param["CmqRegion"] !== null) {
            $this->CmqRegion = $param["CmqRegion"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("NotifyKey",$param) and $param["NotifyKey"] !== null) {
            $this->NotifyKey = $param["NotifyKey"];
        }
    }
}
