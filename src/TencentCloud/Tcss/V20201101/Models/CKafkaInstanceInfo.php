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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Optional information of the security log Kafka
 *
 * @method string getInstanceID() Obtain Instance ID.
 * @method void setInstanceID(string $InstanceID) Set Instance ID.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method array getTopicList() Obtain Topic list
 * @method void setTopicList(array $TopicList) Set Topic list
 * @method array getRouteList() Obtain Routing List
 * @method void setRouteList(array $RouteList) Set Routing List
 * @method string getKafkaVersion() Obtain Kafka Version Number
 * @method void setKafkaVersion(string $KafkaVersion) Set Kafka Version Number
 */
class CKafkaInstanceInfo extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceID;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var array Topic list
     */
    public $TopicList;

    /**
     * @var array Routing List
     */
    public $RouteList;

    /**
     * @var string Kafka Version Number
     */
    public $KafkaVersion;

    /**
     * @param string $InstanceID Instance ID.
     * @param string $InstanceName Instance name.
     * @param array $TopicList Topic list
     * @param array $RouteList Routing List
     * @param string $KafkaVersion Kafka Version Number
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("TopicList",$param) and $param["TopicList"] !== null) {
            $this->TopicList = [];
            foreach ($param["TopicList"] as $key => $value){
                $obj = new CKafkaTopicInfo();
                $obj->deserialize($value);
                array_push($this->TopicList, $obj);
            }
        }

        if (array_key_exists("RouteList",$param) and $param["RouteList"] !== null) {
            $this->RouteList = [];
            foreach ($param["RouteList"] as $key => $value){
                $obj = new CkafkaRouteInfo();
                $obj->deserialize($value);
                array_push($this->RouteList, $obj);
            }
        }

        if (array_key_exists("KafkaVersion",$param) and $param["KafkaVersion"] !== null) {
            $this->KafkaVersion = $param["KafkaVersion"];
        }
    }
}
