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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the CKafka instance to ship to
 *
 * @method string getInstanceId() Obtain InstanceId of Ckafka.
- Obtain the instance id by searching the instance list information (https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
- Obtain the instance id by [creating an instance](https://www.tencentcloud.com/document/product/597/53207?from_cn_redirect=1).
 * @method void setInstanceId(string $InstanceId) Set InstanceId of Ckafka.
- Obtain the instance id by searching the instance list information (https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
- Obtain the instance id by [creating an instance](https://www.tencentcloud.com/document/product/597/53207?from_cn_redirect=1).
 * @method string getTopicName() Obtain TopicName of Ckafka
-Obtain the TopicName by creating a topic (https://www.tencentcloud.com/document/product/597/73566?from_cn_redirect=1).
-Obtain the TopicName through [Get Topic List](https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1).
 * @method void setTopicName(string $TopicName) Set TopicName of Ckafka
-Obtain the TopicName by creating a topic (https://www.tencentcloud.com/document/product/597/73566?from_cn_redirect=1).
-Obtain the TopicName through [Get Topic List](https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1).
 * @method string getVip() Obtain Vip of Ckafka.
- Obtain vip information by searching the instance attributes (https://www.tencentcloud.com/document/product/597/40836?from_cn_redirect=1).
-If the delivery task is created via the role ARN method, the Vip field can be empty.
 * @method void setVip(string $Vip) Set Vip of Ckafka.
- Obtain vip information by searching the instance attributes (https://www.tencentcloud.com/document/product/597/40836?from_cn_redirect=1).
-If the delivery task is created via the role ARN method, the Vip field can be empty.
 * @method string getVport() Obtain Vport of Ckafka.
-Obtain vip port information by [obtaining instance attributes](https://www.tencentcloud.com/document/product/597/40836?from_cn_redirect=1).
-If it is created by the role ARN method, the Vport field can be empty.
 * @method void setVport(string $Vport) Set Vport of Ckafka.
-Obtain vip port information by [obtaining instance attributes](https://www.tencentcloud.com/document/product/597/40836?from_cn_redirect=1).
-If it is created by the role ARN method, the Vport field can be empty.
 * @method string getInstanceName() Obtain InstanceName of Ckafka.
- Obtain the InstanceName by searching the instance list information (https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
-Get InstanceName by [creating an instance](https://www.tencentcloud.com/document/product/597/53207?from_cn_redirect=1).
- If the delivery task is created via the role ARN method, the InstanceName field can be empty.
 * @method void setInstanceName(string $InstanceName) Set InstanceName of Ckafka.
- Obtain the InstanceName by searching the instance list information (https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
-Get InstanceName by [creating an instance](https://www.tencentcloud.com/document/product/597/53207?from_cn_redirect=1).
- If the delivery task is created via the role ARN method, the InstanceName field can be empty.
 * @method string getTopicId() Obtain Topic ID of Ckafka.
-Obtain the TopicId by creating a topic (https://www.tencentcloud.com/document/product/597/73566?from_cn_redirect=1).
-Obtain the TopicId through [Get Topic List](https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1).
- If the delivery task is created via the role ARN method, the TopicId field can be empty.
 * @method void setTopicId(string $TopicId) Set Topic ID of Ckafka.
-Obtain the TopicId by creating a topic (https://www.tencentcloud.com/document/product/597/73566?from_cn_redirect=1).
-Obtain the TopicId through [Get Topic List](https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1).
- If the delivery task is created via the role ARN method, the TopicId field can be empty.
 */
class Ckafka extends AbstractModel
{
    /**
     * @var string InstanceId of Ckafka.
- Obtain the instance id by searching the instance list information (https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
- Obtain the instance id by [creating an instance](https://www.tencentcloud.com/document/product/597/53207?from_cn_redirect=1).
     */
    public $InstanceId;

    /**
     * @var string TopicName of Ckafka
-Obtain the TopicName by creating a topic (https://www.tencentcloud.com/document/product/597/73566?from_cn_redirect=1).
-Obtain the TopicName through [Get Topic List](https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1).
     */
    public $TopicName;

    /**
     * @var string Vip of Ckafka.
- Obtain vip information by searching the instance attributes (https://www.tencentcloud.com/document/product/597/40836?from_cn_redirect=1).
-If the delivery task is created via the role ARN method, the Vip field can be empty.
     */
    public $Vip;

    /**
     * @var string Vport of Ckafka.
-Obtain vip port information by [obtaining instance attributes](https://www.tencentcloud.com/document/product/597/40836?from_cn_redirect=1).
-If it is created by the role ARN method, the Vport field can be empty.
     */
    public $Vport;

    /**
     * @var string InstanceName of Ckafka.
- Obtain the InstanceName by searching the instance list information (https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
-Get InstanceName by [creating an instance](https://www.tencentcloud.com/document/product/597/53207?from_cn_redirect=1).
- If the delivery task is created via the role ARN method, the InstanceName field can be empty.
     */
    public $InstanceName;

    /**
     * @var string Topic ID of Ckafka.
-Obtain the TopicId by creating a topic (https://www.tencentcloud.com/document/product/597/73566?from_cn_redirect=1).
-Obtain the TopicId through [Get Topic List](https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1).
- If the delivery task is created via the role ARN method, the TopicId field can be empty.
     */
    public $TopicId;

    /**
     * @param string $InstanceId InstanceId of Ckafka.
- Obtain the instance id by searching the instance list information (https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
- Obtain the instance id by [creating an instance](https://www.tencentcloud.com/document/product/597/53207?from_cn_redirect=1).
     * @param string $TopicName TopicName of Ckafka
-Obtain the TopicName by creating a topic (https://www.tencentcloud.com/document/product/597/73566?from_cn_redirect=1).
-Obtain the TopicName through [Get Topic List](https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1).
     * @param string $Vip Vip of Ckafka.
- Obtain vip information by searching the instance attributes (https://www.tencentcloud.com/document/product/597/40836?from_cn_redirect=1).
-If the delivery task is created via the role ARN method, the Vip field can be empty.
     * @param string $Vport Vport of Ckafka.
-Obtain vip port information by [obtaining instance attributes](https://www.tencentcloud.com/document/product/597/40836?from_cn_redirect=1).
-If it is created by the role ARN method, the Vport field can be empty.
     * @param string $InstanceName InstanceName of Ckafka.
- Obtain the InstanceName by searching the instance list information (https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
-Get InstanceName by [creating an instance](https://www.tencentcloud.com/document/product/597/53207?from_cn_redirect=1).
- If the delivery task is created via the role ARN method, the InstanceName field can be empty.
     * @param string $TopicId Topic ID of Ckafka.
-Obtain the TopicId by creating a topic (https://www.tencentcloud.com/document/product/597/73566?from_cn_redirect=1).
-Obtain the TopicId through [Get Topic List](https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1).
- If the delivery task is created via the role ARN method, the TopicId field can be empty.
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

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }
    }
}
