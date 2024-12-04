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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceLogDelivery request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method string getLogType() Obtain Log type. Currently, only slowlog is supported, indicating the slow query log.
 * @method void setLogType(string $LogType) Set Log type. Currently, only slowlog is supported, indicating the slow query log.
 * @method boolean getEnabled() Obtain Whether log shopping is enabled.
- true: enabled.
- false: disabled.
 * @method void setEnabled(boolean $Enabled) Set Whether log shopping is enabled.
- true: enabled.
- false: disabled.
 * @method string getLogsetId() Obtain ID of the shipped logset, which can be obtained through the sub-parameter **LogsetId** of the response parameter **SlowLog** of the API [DescribeInstanceLogDelivery](https://intl.cloud.tencent.com/document/product/239/110878?from_cn_redirect=1).
 * @method void setLogsetId(string $LogsetId) Set ID of the shipped logset, which can be obtained through the sub-parameter **LogsetId** of the response parameter **SlowLog** of the API [DescribeInstanceLogDelivery](https://intl.cloud.tencent.com/document/product/239/110878?from_cn_redirect=1).
 * @method string getTopicId() Obtain ID of the shipped log topic, which can be obtained through the sub-parameter **TopicId** of the response parameter **SlowLog** of the API [DescribeInstanceLogDelivery](https://intl.cloud.tencent.com/document/product/239/110878?from_cn_redirect=1).
 * @method void setTopicId(string $TopicId) Set ID of the shipped log topic, which can be obtained through the sub-parameter **TopicId** of the response parameter **SlowLog** of the API [DescribeInstanceLogDelivery](https://intl.cloud.tencent.com/document/product/239/110878?from_cn_redirect=1).
 * @method string getLogsetName() Obtain Logset name. If **LogsetId** is not specified, this parameter needs to be configured and the system will automatically create a logset with the specified name.
 * @method void setLogsetName(string $LogsetName) Set Logset name. If **LogsetId** is not specified, this parameter needs to be configured and the system will automatically create a logset with the specified name.
 * @method string getTopicName() Obtain Log topic name. This parameter is required when TopicId is empty, and the system will automatically create a log topic.
 * @method void setTopicName(string $TopicName) Set Log topic name. This parameter is required when TopicId is empty, and the system will automatically create a log topic.
 * @method string getLogRegion() Obtain Region where the logset is located. If it is not provided, the region where the instance is located will be used by default.
 * @method void setLogRegion(string $LogRegion) Set Region where the logset is located. If it is not provided, the region where the instance is located will be used by default.
 * @method integer getPeriod() Obtain Log storage duration. Default value: 30 days. Value range: 1 to 3600 days.
 * @method void setPeriod(integer $Period) Set Log storage duration. Default value: 30 days. Value range: 1 to 3600 days.
 * @method boolean getCreateIndex() Obtain Whether to create an index when creating a log topic.
 * @method void setCreateIndex(boolean $CreateIndex) Set Whether to create an index when creating a log topic.
 */
class ModifyInstanceLogDeliveryRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @var string Log type. Currently, only slowlog is supported, indicating the slow query log.
     */
    public $LogType;

    /**
     * @var boolean Whether log shopping is enabled.
- true: enabled.
- false: disabled.
     */
    public $Enabled;

    /**
     * @var string ID of the shipped logset, which can be obtained through the sub-parameter **LogsetId** of the response parameter **SlowLog** of the API [DescribeInstanceLogDelivery](https://intl.cloud.tencent.com/document/product/239/110878?from_cn_redirect=1).
     */
    public $LogsetId;

    /**
     * @var string ID of the shipped log topic, which can be obtained through the sub-parameter **TopicId** of the response parameter **SlowLog** of the API [DescribeInstanceLogDelivery](https://intl.cloud.tencent.com/document/product/239/110878?from_cn_redirect=1).
     */
    public $TopicId;

    /**
     * @var string Logset name. If **LogsetId** is not specified, this parameter needs to be configured and the system will automatically create a logset with the specified name.
     */
    public $LogsetName;

    /**
     * @var string Log topic name. This parameter is required when TopicId is empty, and the system will automatically create a log topic.
     */
    public $TopicName;

    /**
     * @var string Region where the logset is located. If it is not provided, the region where the instance is located will be used by default.
     */
    public $LogRegion;

    /**
     * @var integer Log storage duration. Default value: 30 days. Value range: 1 to 3600 days.
     */
    public $Period;

    /**
     * @var boolean Whether to create an index when creating a log topic.
     */
    public $CreateIndex;

    /**
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     * @param string $LogType Log type. Currently, only slowlog is supported, indicating the slow query log.
     * @param boolean $Enabled Whether log shopping is enabled.
- true: enabled.
- false: disabled.
     * @param string $LogsetId ID of the shipped logset, which can be obtained through the sub-parameter **LogsetId** of the response parameter **SlowLog** of the API [DescribeInstanceLogDelivery](https://intl.cloud.tencent.com/document/product/239/110878?from_cn_redirect=1).
     * @param string $TopicId ID of the shipped log topic, which can be obtained through the sub-parameter **TopicId** of the response parameter **SlowLog** of the API [DescribeInstanceLogDelivery](https://intl.cloud.tencent.com/document/product/239/110878?from_cn_redirect=1).
     * @param string $LogsetName Logset name. If **LogsetId** is not specified, this parameter needs to be configured and the system will automatically create a logset with the specified name.
     * @param string $TopicName Log topic name. This parameter is required when TopicId is empty, and the system will automatically create a log topic.
     * @param string $LogRegion Region where the logset is located. If it is not provided, the region where the instance is located will be used by default.
     * @param integer $Period Log storage duration. Default value: 30 days. Value range: 1 to 3600 days.
     * @param boolean $CreateIndex Whether to create an index when creating a log topic.
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

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("LogRegion",$param) and $param["LogRegion"] !== null) {
            $this->LogRegion = $param["LogRegion"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("CreateIndex",$param) and $param["CreateIndex"] !== null) {
            $this->CreateIndex = $param["CreateIndex"];
        }
    }
}
