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
 * Shipping Rule
 *
 * @method string getConsumerId() Obtain Shipping rule ID
 * @method void setConsumerId(string $ConsumerId) Set Shipping rule ID
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method boolean getEffective() Obtain Whether the shipping task is effective.
 * @method void setEffective(boolean $Effective) Set Whether the shipping task is effective.
 * @method Ckafka getCkafka() Obtain Description of CKafka
 * @method void setCkafka(Ckafka $Ckafka) Set Description of CKafka
 * @method boolean getNeedContent() Obtain Whether to ship the log's metadata information
 * @method void setNeedContent(boolean $NeedContent) Set Whether to ship the log's metadata information
 * @method ConsumerContent getContent() Obtain Description of the metadata information to be shipped
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContent(ConsumerContent $Content) Set Description of the metadata information to be shipped
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCompression() Obtain Compression mode [0:NONE；2:SNAPPY；3:LZ4]
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompression(integer $Compression) Set Compression mode [0:NONE；2:SNAPPY；3:LZ4]
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Creation time of a shipping task (a millisecond-level timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set Creation time of a shipping task (a millisecond-level timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRoleArn() Obtain ARN (Access Role Name) [Create role](https://www.tencentcloud.com/document/product/598/19381?from_cn_redirect=1)	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoleArn(string $RoleArn) Set ARN (Access Role Name) [Create role](https://www.tencentcloud.com/document/product/598/19381?from_cn_redirect=1)	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExternalId() Obtain External ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExternalId(string $ExternalId) Set External ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskStatus() Obtain Task running status. Valid values: 0: stopped; 1: running; 2: abnormal.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskStatus(integer $TaskStatus) Set Task running status. Valid values: 0: stopped; 1: running; 2: abnormal.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AdvancedConsumerConfiguration getAdvancedConfig() Obtain Advanced configuration
 * @method void setAdvancedConfig(AdvancedConsumerConfiguration $AdvancedConfig) Set Advanced configuration
 */
class ConsumerInfo extends AbstractModel
{
    /**
     * @var string Shipping rule ID
     */
    public $ConsumerId;

    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var boolean Whether the shipping task is effective.
     */
    public $Effective;

    /**
     * @var Ckafka Description of CKafka
     */
    public $Ckafka;

    /**
     * @var boolean Whether to ship the log's metadata information
     */
    public $NeedContent;

    /**
     * @var ConsumerContent Description of the metadata information to be shipped
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Content;

    /**
     * @var integer Compression mode [0:NONE；2:SNAPPY；3:LZ4]
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Compression;

    /**
     * @var integer Creation time of a shipping task (a millisecond-level timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string ARN (Access Role Name) [Create role](https://www.tencentcloud.com/document/product/598/19381?from_cn_redirect=1)	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoleArn;

    /**
     * @var string External ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExternalId;

    /**
     * @var integer Task running status. Valid values: 0: stopped; 1: running; 2: abnormal.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskStatus;

    /**
     * @var AdvancedConsumerConfiguration Advanced configuration
     */
    public $AdvancedConfig;

    /**
     * @param string $ConsumerId Shipping rule ID
     * @param string $TopicId Log topic ID
     * @param boolean $Effective Whether the shipping task is effective.
     * @param Ckafka $Ckafka Description of CKafka
     * @param boolean $NeedContent Whether to ship the log's metadata information
     * @param ConsumerContent $Content Description of the metadata information to be shipped
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Compression Compression mode [0:NONE；2:SNAPPY；3:LZ4]
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Creation time of a shipping task (a millisecond-level timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RoleArn ARN (Access Role Name) [Create role](https://www.tencentcloud.com/document/product/598/19381?from_cn_redirect=1)	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExternalId External ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskStatus Task running status. Valid values: 0: stopped; 1: running; 2: abnormal.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AdvancedConsumerConfiguration $AdvancedConfig Advanced configuration
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
        if (array_key_exists("ConsumerId",$param) and $param["ConsumerId"] !== null) {
            $this->ConsumerId = $param["ConsumerId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Effective",$param) and $param["Effective"] !== null) {
            $this->Effective = $param["Effective"];
        }

        if (array_key_exists("Ckafka",$param) and $param["Ckafka"] !== null) {
            $this->Ckafka = new Ckafka();
            $this->Ckafka->deserialize($param["Ckafka"]);
        }

        if (array_key_exists("NeedContent",$param) and $param["NeedContent"] !== null) {
            $this->NeedContent = $param["NeedContent"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new ConsumerContent();
            $this->Content->deserialize($param["Content"]);
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = $param["Compression"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("ExternalId",$param) and $param["ExternalId"] !== null) {
            $this->ExternalId = $param["ExternalId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("AdvancedConfig",$param) and $param["AdvancedConfig"] !== null) {
            $this->AdvancedConfig = new AdvancedConsumerConfiguration();
            $this->AdvancedConfig->deserialize($param["AdvancedConfig"]);
        }
    }
}
