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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Results of the batch modified topic attributes
 *
 * @method string getInstanceId() Obtain The ckafka cluster instance Id.
 * @method void setInstanceId(string $InstanceId) Set The ckafka cluster instance Id.
 * @method string getTopicName() Obtain Topic name
 * @method void setTopicName(string $TopicName) Set Topic name
 * @method string getReturnCode() Obtain Operation return code.
 * @method void setReturnCode(string $ReturnCode) Set Operation return code.
 * @method string getMessage() Obtain Returned information.
 * @method void setMessage(string $Message) Set Returned information.
 */
class BatchModifyTopicResultDTO extends AbstractModel
{
    /**
     * @var string The ckafka cluster instance Id.
     */
    public $InstanceId;

    /**
     * @var string Topic name
     */
    public $TopicName;

    /**
     * @var string Operation return code.
     */
    public $ReturnCode;

    /**
     * @var string Returned information.
     */
    public $Message;

    /**
     * @param string $InstanceId The ckafka cluster instance Id.
     * @param string $TopicName Topic name
     * @param string $ReturnCode Operation return code.
     * @param string $Message Returned information.
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
