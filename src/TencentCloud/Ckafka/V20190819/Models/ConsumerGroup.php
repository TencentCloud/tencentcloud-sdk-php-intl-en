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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User group entity
 *
 * @method string getConsumerGroupName() Obtain User group name
 * @method void setConsumerGroupName(string $ConsumerGroupName) Set User group name
 * @method array getSubscribedInfo() Obtain Subscribed message entity
 * @method void setSubscribedInfo(array $SubscribedInfo) Set Subscribed message entity
 */
class ConsumerGroup extends AbstractModel
{
    /**
     * @var string User group name
     */
    public $ConsumerGroupName;

    /**
     * @var array Subscribed message entity
     */
    public $SubscribedInfo;

    /**
     * @param string $ConsumerGroupName User group name
     * @param array $SubscribedInfo Subscribed message entity
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
        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("SubscribedInfo",$param) and $param["SubscribedInfo"] !== null) {
            $this->SubscribedInfo = [];
            foreach ($param["SubscribedInfo"] as $key => $value){
                $obj = new SubscribedInfo();
                $obj->deserialize($value);
                array_push($this->SubscribedInfo, $obj);
            }
        }
    }
}
