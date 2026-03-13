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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDataFlow request structure.
 *
 * @method string getDataFlowId() Obtain Data flow manage ID, obtained through the api for querying data flow.
 * @method void setDataFlowId(string $DataFlowId) Set Data flow manage ID, obtained through the api for querying data flow.
 * @method string getFileSystemId() Obtain File system ID, which can be obtained by querying the file system through the [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1) api.
 * @method void setFileSystemId(string $FileSystemId) Set File system ID, which can be obtained by querying the file system through the [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1) api.
 * @method string getDataFlowName() Obtain Data flow name, supports no more than 64 characters in length, supports chinese, numbers, _, and -.
 * @method void setDataFlowName(string $DataFlowName) Set Data flow name, supports no more than 64 characters in length, supports chinese, numbers, _, and -.
 * @method string getSecretId() Obtain Key ID.
 * @method void setSecretId(string $SecretId) Set Key ID.
 * @method string getSecretKey() Obtain key.
 * @method void setSecretKey(string $SecretKey) Set key.
 * @method string getUserKafkaTopic() Obtain Topic Parameter used by KafkaConsumer during consumption
 * @method void setUserKafkaTopic(string $UserKafkaTopic) Set Topic Parameter used by KafkaConsumer during consumption
 * @method string getServerAddr() Obtain Service address.
 * @method void setServerAddr(string $ServerAddr) Set Service address.
 * @method string getUserName() Obtain name
 * @method void setUserName(string $UserName) Set name
 * @method string getPassword() Obtain Kafka consuming user password.
 * @method void setPassword(string $Password) Set Kafka consuming user password.
 * @method integer getAutoRefresh() Obtain Metadata incremental update switch; 1 enables, 0 disables.
 * @method void setAutoRefresh(integer $AutoRefresh) Set Metadata incremental update switch; 1 enables, 0 disables.
 */
class ModifyDataFlowRequest extends AbstractModel
{
    /**
     * @var string Data flow manage ID, obtained through the api for querying data flow.
     */
    public $DataFlowId;

    /**
     * @var string File system ID, which can be obtained by querying the file system through the [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1) api.
     */
    public $FileSystemId;

    /**
     * @var string Data flow name, supports no more than 64 characters in length, supports chinese, numbers, _, and -.
     */
    public $DataFlowName;

    /**
     * @var string Key ID.
     */
    public $SecretId;

    /**
     * @var string key.
     */
    public $SecretKey;

    /**
     * @var string Topic Parameter used by KafkaConsumer during consumption
     */
    public $UserKafkaTopic;

    /**
     * @var string Service address.
     */
    public $ServerAddr;

    /**
     * @var string name
     */
    public $UserName;

    /**
     * @var string Kafka consuming user password.
     */
    public $Password;

    /**
     * @var integer Metadata incremental update switch; 1 enables, 0 disables.
     */
    public $AutoRefresh;

    /**
     * @param string $DataFlowId Data flow manage ID, obtained through the api for querying data flow.
     * @param string $FileSystemId File system ID, which can be obtained by querying the file system through the [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1) api.
     * @param string $DataFlowName Data flow name, supports no more than 64 characters in length, supports chinese, numbers, _, and -.
     * @param string $SecretId Key ID.
     * @param string $SecretKey key.
     * @param string $UserKafkaTopic Topic Parameter used by KafkaConsumer during consumption
     * @param string $ServerAddr Service address.
     * @param string $UserName name
     * @param string $Password Kafka consuming user password.
     * @param integer $AutoRefresh Metadata incremental update switch; 1 enables, 0 disables.
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
        if (array_key_exists("DataFlowId",$param) and $param["DataFlowId"] !== null) {
            $this->DataFlowId = $param["DataFlowId"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("DataFlowName",$param) and $param["DataFlowName"] !== null) {
            $this->DataFlowName = $param["DataFlowName"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("UserKafkaTopic",$param) and $param["UserKafkaTopic"] !== null) {
            $this->UserKafkaTopic = $param["UserKafkaTopic"];
        }

        if (array_key_exists("ServerAddr",$param) and $param["ServerAddr"] !== null) {
            $this->ServerAddr = $param["ServerAddr"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("AutoRefresh",$param) and $param["AutoRefresh"] !== null) {
            $this->AutoRefresh = $param["AutoRefresh"];
        }
    }
}
