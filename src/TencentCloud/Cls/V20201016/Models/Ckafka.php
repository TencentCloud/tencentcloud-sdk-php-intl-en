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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the CKafka instance to ship to
 *
 * @method string getVip() Obtain CKafka VIP
 * @method void setVip(string $Vip) Set CKafka VIP
 * @method string getVport() Obtain CKafka Vport
 * @method void setVport(string $Vport) Set CKafka Vport
 * @method string getInstanceId() Obtain CKafka instance ID
 * @method void setInstanceId(string $InstanceId) Set CKafka instance ID
 * @method string getInstanceName() Obtain CKafka instance name
 * @method void setInstanceName(string $InstanceName) Set CKafka instance name
 * @method string getTopicId() Obtain CKafka topic ID
 * @method void setTopicId(string $TopicId) Set CKafka topic ID
 * @method string getTopicName() Obtain CKafka topic name
 * @method void setTopicName(string $TopicName) Set CKafka topic name
 */
class Ckafka extends AbstractModel
{
    /**
     * @var string CKafka VIP
     */
    public $Vip;

    /**
     * @var string CKafka Vport
     */
    public $Vport;

    /**
     * @var string CKafka instance ID
     */
    public $InstanceId;

    /**
     * @var string CKafka instance name
     */
    public $InstanceName;

    /**
     * @var string CKafka topic ID
     */
    public $TopicId;

    /**
     * @var string CKafka topic name
     */
    public $TopicName;

    /**
     * @param string $Vip CKafka VIP
     * @param string $Vport CKafka Vport
     * @param string $InstanceId CKafka instance ID
     * @param string $InstanceName CKafka instance name
     * @param string $TopicId CKafka topic ID
     * @param string $TopicName CKafka topic name
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
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
