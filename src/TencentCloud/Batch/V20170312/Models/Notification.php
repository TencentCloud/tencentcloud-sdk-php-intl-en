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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Notification information
 *
 * @method string getTopicName() Obtain CMQ topic name which should be valid and associated with a subscription
 * @method void setTopicName(string $TopicName) Set CMQ topic name which should be valid and associated with a subscription
 * @method array getEventConfigs() Obtain Event configuration
 * @method void setEventConfigs(array $EventConfigs) Set Event configuration
 */
class Notification extends AbstractModel
{
    /**
     * @var string CMQ topic name which should be valid and associated with a subscription
     */
    public $TopicName;

    /**
     * @var array Event configuration
     */
    public $EventConfigs;

    /**
     * @param string $TopicName CMQ topic name which should be valid and associated with a subscription
     * @param array $EventConfigs Event configuration
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

        if (array_key_exists("EventConfigs",$param) and $param["EventConfigs"] !== null) {
            $this->EventConfigs = [];
            foreach ($param["EventConfigs"] as $key => $value){
                $obj = new EventConfig();
                $obj->deserialize($value);
                array_push($this->EventConfigs, $obj);
            }
        }
    }
}
