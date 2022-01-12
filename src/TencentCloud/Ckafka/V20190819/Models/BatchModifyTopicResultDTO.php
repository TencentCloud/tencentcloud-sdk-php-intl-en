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
 * Results of the batch modified topic attributes
 *
 * @method string getInstanceId() Obtain Instance ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getTopicName() Obtain Topic name.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTopicName(string $TopicName) Set Topic name.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getReturnCode() Obtain Status code.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setReturnCode(string $ReturnCode) Set Status code.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain Message status.
 * @method void setMessage(string $Message) Set Message status.
 */
class BatchModifyTopicResultDTO extends AbstractModel
{
    /**
     * @var string Instance ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Topic name.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TopicName;

    /**
     * @var string Status code.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ReturnCode;

    /**
     * @var string Message status.
     */
    public $Message;

    /**
     * @param string $InstanceId Instance ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $TopicName Topic name.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ReturnCode Status code.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Message Message status.
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

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
