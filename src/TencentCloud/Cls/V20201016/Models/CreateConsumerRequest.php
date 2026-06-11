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
 * CreateConsumer request structure.
 *
 * @method string getTopicId() Obtain Id of the log topic bound to the delivery task.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
 * @method void setTopicId(string $TopicId) Set Id of the log topic bound to the delivery task.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
 * @method boolean getNeedContent() Obtain Whether to deliver log Metadata information, default is true.When NeedContent is true: Content field is valid.When NeedContent is false: Content field is invalid.
 * @method void setNeedContent(boolean $NeedContent) Set Whether to deliver log Metadata information, default is true.When NeedContent is true: Content field is valid.When NeedContent is false: Content field is invalid.
 * @method ConsumerContent getContent() Obtain Metadata to ship if `NeedContent` is `true`
 * @method void setContent(ConsumerContent $Content) Set Metadata to ship if `NeedContent` is `true`
 * @method Ckafka getCkafka() Obtain CKafka information
 * @method void setCkafka(Ckafka $Ckafka) Set CKafka information
 * @method integer getCompression() Obtain Compression method during delivery. Valid values: 0, 2, and 3. [0: NONE; 2: SNAPPY; 3: LZ4]
 * @method void setCompression(integer $Compression) Set Compression method during delivery. Valid values: 0, 2, and 3. [0: NONE; 2: SNAPPY; 3: LZ4]
 * @method string getRoleArn() Obtain ARN [Create role](https://www.tencentcloud.com/document/product/598/19381?from_cn_redirect=1)
 * @method void setRoleArn(string $RoleArn) Set ARN [Create role](https://www.tencentcloud.com/document/product/598/19381?from_cn_redirect=1)
 * @method string getExternalId() Obtain external ID
 * @method void setExternalId(string $ExternalId) Set external ID
 * @method AdvancedConsumerConfiguration getAdvancedConfig() Obtain Advanced configuration item
 * @method void setAdvancedConfig(AdvancedConsumerConfiguration $AdvancedConfig) Set Advanced configuration item
 */
class CreateConsumerRequest extends AbstractModel
{
    /**
     * @var string Id of the log topic bound to the delivery task.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
     */
    public $TopicId;

    /**
     * @var boolean Whether to deliver log Metadata information, default is true.When NeedContent is true: Content field is valid.When NeedContent is false: Content field is invalid.
     */
    public $NeedContent;

    /**
     * @var ConsumerContent Metadata to ship if `NeedContent` is `true`
     */
    public $Content;

    /**
     * @var Ckafka CKafka information
     */
    public $Ckafka;

    /**
     * @var integer Compression method during delivery. Valid values: 0, 2, and 3. [0: NONE; 2: SNAPPY; 3: LZ4]
     */
    public $Compression;

    /**
     * @var string ARN [Create role](https://www.tencentcloud.com/document/product/598/19381?from_cn_redirect=1)
     */
    public $RoleArn;

    /**
     * @var string external ID
     */
    public $ExternalId;

    /**
     * @var AdvancedConsumerConfiguration Advanced configuration item
     */
    public $AdvancedConfig;

    /**
     * @param string $TopicId Id of the log topic bound to the delivery task.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
     * @param boolean $NeedContent Whether to deliver log Metadata information, default is true.When NeedContent is true: Content field is valid.When NeedContent is false: Content field is invalid.
     * @param ConsumerContent $Content Metadata to ship if `NeedContent` is `true`
     * @param Ckafka $Ckafka CKafka information
     * @param integer $Compression Compression method during delivery. Valid values: 0, 2, and 3. [0: NONE; 2: SNAPPY; 3: LZ4]
     * @param string $RoleArn ARN [Create role](https://www.tencentcloud.com/document/product/598/19381?from_cn_redirect=1)
     * @param string $ExternalId external ID
     * @param AdvancedConsumerConfiguration $AdvancedConfig Advanced configuration item
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("NeedContent",$param) and $param["NeedContent"] !== null) {
            $this->NeedContent = $param["NeedContent"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new ConsumerContent();
            $this->Content->deserialize($param["Content"]);
        }

        if (array_key_exists("Ckafka",$param) and $param["Ckafka"] !== null) {
            $this->Ckafka = new Ckafka();
            $this->Ckafka->deserialize($param["Ckafka"]);
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = $param["Compression"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("ExternalId",$param) and $param["ExternalId"] !== null) {
            $this->ExternalId = $param["ExternalId"];
        }

        if (array_key_exists("AdvancedConfig",$param) and $param["AdvancedConfig"] !== null) {
            $this->AdvancedConfig = new AdvancedConsumerConfiguration();
            $this->AdvancedConfig->deserialize($param["AdvancedConfig"]);
        }
    }
}
