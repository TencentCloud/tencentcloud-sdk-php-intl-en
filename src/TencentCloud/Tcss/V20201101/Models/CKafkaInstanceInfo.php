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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Optional information of the security log Kafka
 *
 * @method string getInstanceID() Obtain Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceID(string $InstanceID) Set Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain Instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTopicList() Obtain Topic list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicList(array $TopicList) Set Topic list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRouteList() Obtain Route list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRouteList(array $RouteList) Set Route list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getKafkaVersion() Obtain Kafka version number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKafkaVersion(string $KafkaVersion) Set Kafka version number
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CKafkaInstanceInfo extends AbstractModel
{
    /**
     * @var string Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceID;

    /**
     * @var string Instance name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var array Topic list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicList;

    /**
     * @var array Route list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RouteList;

    /**
     * @var string Kafka version number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KafkaVersion;

    /**
     * @param string $InstanceID Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName Instance name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TopicList Topic list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RouteList Route list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $KafkaVersion Kafka version number
Note: This field may return null, indicating that no valid values can be obtained.
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
