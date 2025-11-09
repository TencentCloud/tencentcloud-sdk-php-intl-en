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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name


 * @method void setInstanceName(string $InstanceName) Set Instance name


 * @method string getTopicId() Obtain Log topic id.

 * @method void setTopicId(string $TopicId) Set Log topic id.

 * @method string getTopicName() Obtain Log topic name
 * @method void setTopicName(string $TopicName) Set Log topic name
 * @method string getGroupId() Obtain Log set id.

 * @method void setGroupId(string $GroupId) Set Log set id.

 * @method string getGroupName() Obtain Log set name.


 * @method void setGroupName(string $GroupName) Set Log set name.


 * @method string getRegion() Obtain Log delivery region.

 * @method void setRegion(string $Region) Set Log delivery region.

 * @method string getStatus() Obtain Delivery status: creating, running, offlining, offlined.

 * @method void setStatus(string $Status) Set Delivery status: creating, running, offlining, offlined.

 * @method string getLogType() Obtain Log type.
 * @method void setLogType(string $LogType) Set Log type.
 */
class InstanceCLSDeliveryInfo extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name


     */
    public $InstanceName;

    /**
     * @var string Log topic id.

     */
    public $TopicId;

    /**
     * @var string Log topic name
     */
    public $TopicName;

    /**
     * @var string Log set id.

     */
    public $GroupId;

    /**
     * @var string Log set name.


     */
    public $GroupName;

    /**
     * @var string Log delivery region.

     */
    public $Region;

    /**
     * @var string Delivery status: creating, running, offlining, offlined.

     */
    public $Status;

    /**
     * @var string Log type.
     */
    public $LogType;

    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name


     * @param string $TopicId Log topic id.

     * @param string $TopicName Log topic name
     * @param string $GroupId Log set id.

     * @param string $GroupName Log set name.


     * @param string $Region Log delivery region.

     * @param string $Status Delivery status: creating, running, offlining, offlined.

     * @param string $LogType Log type.
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }
    }
}
