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
 * @method string getNotifyType() Obtain <p>Notification type. Valid values:</p><li>CMQ: Removed. We recommend that you switch to TDMQ-CMQ.</li><li>TDMQ-CMQ: TDMQ.</li><li>URL: If URL is specified, HTTP callbacks are pushed to the URL specified in NotifyUrl. The callback protocol is HTTP and JSON. The packet body is the same as the output parameter of the event parsing notification API.</li><li>SCF: This is not recommended. Additional configuration for SCF is required in the console.</li><li>AWS-SQS: AWS queue. This is only suitable for AWS tasks in the same region.</li><font color="red"> Note: The default value is TDMQ-CMQ if this is not specified or empty. To use another type, you need to specify the corresponding value. If TDMQ-CMQ is used, oversized task response may cause failure to write to the queue. </font>
 * @method void setNotifyType(string $NotifyType) Set <p>Notification type. Valid values:</p><li>CMQ: Removed. We recommend that you switch to TDMQ-CMQ.</li><li>TDMQ-CMQ: TDMQ.</li><li>URL: If URL is specified, HTTP callbacks are pushed to the URL specified in NotifyUrl. The callback protocol is HTTP and JSON. The packet body is the same as the output parameter of the event parsing notification API.</li><li>SCF: This is not recommended. Additional configuration for SCF is required in the console.</li><li>AWS-SQS: AWS queue. This is only suitable for AWS tasks in the same region.</li><font color="red"> Note: The default value is TDMQ-CMQ if this is not specified or empty. To use another type, you need to specify the corresponding value. If TDMQ-CMQ is used, oversized task response may cause failure to write to the queue. </font>
 * @method string getNotifyMode() Obtain <p>Workflow notification mode. Valid values are Finish and Change. If this is not specified, the default value is Finish.</p>
 * @method void setNotifyMode(string $NotifyMode) Set <p>Workflow notification mode. Valid values are Finish and Change. If this is not specified, the default value is Finish.</p>
 * @method string getNotifyUrl() Obtain <p>HTTP callback URL. This is required if NotifyType is URL.</p>
 * @method void setNotifyUrl(string $NotifyUrl) Set <p>HTTP callback URL. This is required if NotifyType is URL.</p>
 * @method string getCmqModel() Obtain <p>CMQ or TDMQ for CMQ model. Valid values are Queue and Topic.</p>
 * @method void setCmqModel(string $CmqModel) Set <p>CMQ or TDMQ for CMQ model. Valid values are Queue and Topic.</p>
 * @method string getCmqRegion() Obtain <p>CMQ or TDMQ for CMQ region, such as sh or bj.</p>
 * @method void setCmqRegion(string $CmqRegion) Set <p>CMQ or TDMQ for CMQ region, such as sh or bj.</p>
 * @method string getTopicName() Obtain <p>This field takes effect if the model is Topic. It indicates the topic name of the CMQ or TDMQ for CMQ for receiving event notifications.</p>
 * @method void setTopicName(string $TopicName) Set <p>This field takes effect if the model is Topic. It indicates the topic name of the CMQ or TDMQ for CMQ for receiving event notifications.</p>
 * @method string getQueueName() Obtain <p>This field takes effect if the model is Queue. It indicates the queue name of the CMQ or TDMQ for CMQ for receiving event notifications.</p>
 * @method void setQueueName(string $QueueName) Set <p>This field takes effect if the model is Queue. It indicates the queue name of the CMQ or TDMQ for CMQ for receiving event notifications.</p>
 * @method AwsSQS getAwsSQS() Obtain <p>AWS SQS callback. This is required if NotifyType is AWS-SQS.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAwsSQS(AwsSQS $AwsSQS) Set <p>AWS SQS callback. This is required if NotifyType is AWS-SQS.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNotifyKey() Obtain <p>Key used to generate the callback signature.</p>
 * @method void setNotifyKey(string $NotifyKey) Set <p>Key used to generate the callback signature.</p>
 */
class TaskNotifyConfig extends AbstractModel
{
    /**
     * @var string <p>Notification type. Valid values:</p><li>CMQ: Removed. We recommend that you switch to TDMQ-CMQ.</li><li>TDMQ-CMQ: TDMQ.</li><li>URL: If URL is specified, HTTP callbacks are pushed to the URL specified in NotifyUrl. The callback protocol is HTTP and JSON. The packet body is the same as the output parameter of the event parsing notification API.</li><li>SCF: This is not recommended. Additional configuration for SCF is required in the console.</li><li>AWS-SQS: AWS queue. This is only suitable for AWS tasks in the same region.</li><font color="red"> Note: The default value is TDMQ-CMQ if this is not specified or empty. To use another type, you need to specify the corresponding value. If TDMQ-CMQ is used, oversized task response may cause failure to write to the queue. </font>
     */
    public $NotifyType;

    /**
     * @var string <p>Workflow notification mode. Valid values are Finish and Change. If this is not specified, the default value is Finish.</p>
     */
    public $NotifyMode;

    /**
     * @var string <p>HTTP callback URL. This is required if NotifyType is URL.</p>
     */
    public $NotifyUrl;

    /**
     * @var string <p>CMQ or TDMQ for CMQ model. Valid values are Queue and Topic.</p>
     */
    public $CmqModel;

    /**
     * @var string <p>CMQ or TDMQ for CMQ region, such as sh or bj.</p>
     */
    public $CmqRegion;

    /**
     * @var string <p>This field takes effect if the model is Topic. It indicates the topic name of the CMQ or TDMQ for CMQ for receiving event notifications.</p>
     */
    public $TopicName;

    /**
     * @var string <p>This field takes effect if the model is Queue. It indicates the queue name of the CMQ or TDMQ for CMQ for receiving event notifications.</p>
     */
    public $QueueName;

    /**
     * @var AwsSQS <p>AWS SQS callback. This is required if NotifyType is AWS-SQS.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AwsSQS;

    /**
     * @var string <p>Key used to generate the callback signature.</p>
     */
    public $NotifyKey;

    /**
     * @param string $NotifyType <p>Notification type. Valid values:</p><li>CMQ: Removed. We recommend that you switch to TDMQ-CMQ.</li><li>TDMQ-CMQ: TDMQ.</li><li>URL: If URL is specified, HTTP callbacks are pushed to the URL specified in NotifyUrl. The callback protocol is HTTP and JSON. The packet body is the same as the output parameter of the event parsing notification API.</li><li>SCF: This is not recommended. Additional configuration for SCF is required in the console.</li><li>AWS-SQS: AWS queue. This is only suitable for AWS tasks in the same region.</li><font color="red"> Note: The default value is TDMQ-CMQ if this is not specified or empty. To use another type, you need to specify the corresponding value. If TDMQ-CMQ is used, oversized task response may cause failure to write to the queue. </font>
     * @param string $NotifyMode <p>Workflow notification mode. Valid values are Finish and Change. If this is not specified, the default value is Finish.</p>
     * @param string $NotifyUrl <p>HTTP callback URL. This is required if NotifyType is URL.</p>
     * @param string $CmqModel <p>CMQ or TDMQ for CMQ model. Valid values are Queue and Topic.</p>
     * @param string $CmqRegion <p>CMQ or TDMQ for CMQ region, such as sh or bj.</p>
     * @param string $TopicName <p>This field takes effect if the model is Topic. It indicates the topic name of the CMQ or TDMQ for CMQ for receiving event notifications.</p>
     * @param string $QueueName <p>This field takes effect if the model is Queue. It indicates the queue name of the CMQ or TDMQ for CMQ for receiving event notifications.</p>
     * @param AwsSQS $AwsSQS <p>AWS SQS callback. This is required if NotifyType is AWS-SQS.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NotifyKey <p>Key used to generate the callback signature.</p>
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
