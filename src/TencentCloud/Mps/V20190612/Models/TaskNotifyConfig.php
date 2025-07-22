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
 * Event notification configuration of a task.
 *
 * @method string getNotifyType() Obtain Notification type. available values:.
<li>CMQ: offline. switch to TDMQ-CMQ.</li>.
<Li>TDMQ-CMQ: message queue</li>.
<li>URL: when a URL is specified, the HTTP callback is pushed to the address specified by NotifyUrl. the callback protocol is HTTP+json. the content of the packet body is the same as the output parameters of the parseeventnotification api.</li>.
<Li>SCF: not recommended. additional configuration is required in the console.</li>.
<Li>AWS-SQS: aws queue, suitable for aws tasks only and requires the same region.</li>.
<font color="red">note: if left blank, it is TDMQ-CMQ by default. to use another type, you need to fill in the corresponding type value. if using TDMQ-CMQ message queue, an excessively large task response may cause queue failure.</font>.
 * @method void setNotifyType(string $NotifyType) Set Notification type. available values:.
<li>CMQ: offline. switch to TDMQ-CMQ.</li>.
<Li>TDMQ-CMQ: message queue</li>.
<li>URL: when a URL is specified, the HTTP callback is pushed to the address specified by NotifyUrl. the callback protocol is HTTP+json. the content of the packet body is the same as the output parameters of the parseeventnotification api.</li>.
<Li>SCF: not recommended. additional configuration is required in the console.</li>.
<Li>AWS-SQS: aws queue, suitable for aws tasks only and requires the same region.</li>.
<font color="red">note: if left blank, it is TDMQ-CMQ by default. to use another type, you need to fill in the corresponding type value. if using TDMQ-CMQ message queue, an excessively large task response may cause queue failure.</font>.
 * @method string getNotifyMode() Obtain Workflow notification method. Valid values: Finish, Change. If this parameter is left empty, `Finish` will be used.
 * @method void setNotifyMode(string $NotifyMode) Set Workflow notification method. Valid values: Finish, Change. If this parameter is left empty, `Finish` will be used.
 * @method string getNotifyUrl() Obtain HTTP callback URL, required if `NotifyType` is set to `URL`
 * @method void setNotifyUrl(string $NotifyUrl) Set HTTP callback URL, required if `NotifyType` is set to `URL`
 * @method string getCmqModel() Obtain The CMQ or TDMQ-CMQ model. Valid values: Queue, Topic.
 * @method void setCmqModel(string $CmqModel) Set The CMQ or TDMQ-CMQ model. Valid values: Queue, Topic.
 * @method string getCmqRegion() Obtain The CMQ or TDMQ-CMQ region, such as `sh` (Shanghai) or `bj` (Beijing).
 * @method void setCmqRegion(string $CmqRegion) Set The CMQ or TDMQ-CMQ region, such as `sh` (Shanghai) or `bj` (Beijing).
 * @method string getTopicName() Obtain The CMQ or TDMQ-CMQ topic to receive notifications. This parameter is valid when `CmqModel` is `Topic`.
 * @method void setTopicName(string $TopicName) Set The CMQ or TDMQ-CMQ topic to receive notifications. This parameter is valid when `CmqModel` is `Topic`.
 * @method string getQueueName() Obtain The CMQ or TDMQ-CMQ queue to receive notifications. This parameter is valid when `CmqModel` is `Queue`.
 * @method void setQueueName(string $QueueName) Set The CMQ or TDMQ-CMQ queue to receive notifications. This parameter is valid when `CmqModel` is `Queue`.
 * @method AwsSQS getAwsSQS() Obtain The AWS SQS queue. This parameter is required if `NotifyType` is `AWS-SQS`.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAwsSQS(AwsSQS $AwsSQS) Set The AWS SQS queue. This parameter is required if `NotifyType` is `AWS-SQS`.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNotifyKey() Obtain key used to generate a callback signature.
 * @method void setNotifyKey(string $NotifyKey) Set key used to generate a callback signature.
 */
class TaskNotifyConfig extends AbstractModel
{
    /**
     * @var string Notification type. available values:.
<li>CMQ: offline. switch to TDMQ-CMQ.</li>.
<Li>TDMQ-CMQ: message queue</li>.
<li>URL: when a URL is specified, the HTTP callback is pushed to the address specified by NotifyUrl. the callback protocol is HTTP+json. the content of the packet body is the same as the output parameters of the parseeventnotification api.</li>.
<Li>SCF: not recommended. additional configuration is required in the console.</li>.
<Li>AWS-SQS: aws queue, suitable for aws tasks only and requires the same region.</li>.
<font color="red">note: if left blank, it is TDMQ-CMQ by default. to use another type, you need to fill in the corresponding type value. if using TDMQ-CMQ message queue, an excessively large task response may cause queue failure.</font>.
     */
    public $NotifyType;

    /**
     * @var string Workflow notification method. Valid values: Finish, Change. If this parameter is left empty, `Finish` will be used.
     */
    public $NotifyMode;

    /**
     * @var string HTTP callback URL, required if `NotifyType` is set to `URL`
     */
    public $NotifyUrl;

    /**
     * @var string The CMQ or TDMQ-CMQ model. Valid values: Queue, Topic.
     */
    public $CmqModel;

    /**
     * @var string The CMQ or TDMQ-CMQ region, such as `sh` (Shanghai) or `bj` (Beijing).
     */
    public $CmqRegion;

    /**
     * @var string The CMQ or TDMQ-CMQ topic to receive notifications. This parameter is valid when `CmqModel` is `Topic`.
     */
    public $TopicName;

    /**
     * @var string The CMQ or TDMQ-CMQ queue to receive notifications. This parameter is valid when `CmqModel` is `Queue`.
     */
    public $QueueName;

    /**
     * @var AwsSQS The AWS SQS queue. This parameter is required if `NotifyType` is `AWS-SQS`.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AwsSQS;

    /**
     * @var string key used to generate a callback signature.
     */
    public $NotifyKey;

    /**
     * @param string $NotifyType Notification type. available values:.
<li>CMQ: offline. switch to TDMQ-CMQ.</li>.
<Li>TDMQ-CMQ: message queue</li>.
<li>URL: when a URL is specified, the HTTP callback is pushed to the address specified by NotifyUrl. the callback protocol is HTTP+json. the content of the packet body is the same as the output parameters of the parseeventnotification api.</li>.
<Li>SCF: not recommended. additional configuration is required in the console.</li>.
<Li>AWS-SQS: aws queue, suitable for aws tasks only and requires the same region.</li>.
<font color="red">note: if left blank, it is TDMQ-CMQ by default. to use another type, you need to fill in the corresponding type value. if using TDMQ-CMQ message queue, an excessively large task response may cause queue failure.</font>.
     * @param string $NotifyMode Workflow notification method. Valid values: Finish, Change. If this parameter is left empty, `Finish` will be used.
     * @param string $NotifyUrl HTTP callback URL, required if `NotifyType` is set to `URL`
     * @param string $CmqModel The CMQ or TDMQ-CMQ model. Valid values: Queue, Topic.
     * @param string $CmqRegion The CMQ or TDMQ-CMQ region, such as `sh` (Shanghai) or `bj` (Beijing).
     * @param string $TopicName The CMQ or TDMQ-CMQ topic to receive notifications. This parameter is valid when `CmqModel` is `Topic`.
     * @param string $QueueName The CMQ or TDMQ-CMQ queue to receive notifications. This parameter is valid when `CmqModel` is `Queue`.
     * @param AwsSQS $AwsSQS The AWS SQS queue. This parameter is required if `NotifyType` is `AWS-SQS`.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NotifyKey key used to generate a callback signature.
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

        if (array_key_exists("NotifyMode",$param) and $param["NotifyMode"] !== null) {
            $this->NotifyMode = $param["NotifyMode"];
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

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("AwsSQS",$param) and $param["AwsSQS"] !== null) {
            $this->AwsSQS = new AwsSQS();
            $this->AwsSQS->deserialize($param["AwsSQS"]);
        }

        if (array_key_exists("NotifyKey",$param) and $param["NotifyKey"] !== null) {
            $this->NotifyKey = $param["NotifyKey"];
        }
    }
}
