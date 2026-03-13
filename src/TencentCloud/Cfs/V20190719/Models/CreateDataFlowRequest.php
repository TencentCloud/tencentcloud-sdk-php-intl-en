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
 * CreateDataFlow request structure.
 *
 * @method string getFileSystemId() Obtain File system ID, which can be obtained by querying the file system through the [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1) api.
 * @method void setFileSystemId(string $FileSystemId) Set File system ID, which can be obtained by querying the file system through the [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1) api.
 * @method string getSourceStorageType() Obtain Source data type; includes S3_COS, S3_L5.
 * @method void setSourceStorageType(string $SourceStorageType) Set Source data type; includes S3_COS, S3_L5.
 * @method string getSourceStorageAddress() Obtain Source storage address.
 * @method void setSourceStorageAddress(string $SourceStorageAddress) Set Source storage address.
 * @method string getSourcePath() Obtain Source path.
 * @method void setSourcePath(string $SourcePath) Set Source path.
 * @method string getTargetPath() Obtain Target path in the file system.
 * @method void setTargetPath(string $TargetPath) Set Target path in the file system.
 * @method string getSecretId() Obtain Key ID.
 * @method void setSecretId(string $SecretId) Set Key ID.
 * @method string getSecretKey() Obtain key.
 * @method void setSecretKey(string $SecretKey) Set key.
 * @method string getDataFlowName() Obtain Data flow name, supports no more than 64 characters in length, supports chinese, numbers, _, and -.
 * @method void setDataFlowName(string $DataFlowName) Set Data flow name, supports no more than 64 characters in length, supports chinese, numbers, _, and -.
 * @method integer getAutoRefresh() Obtain 0: disable auto-update  1: enable auto-update.
 * @method void setAutoRefresh(integer $AutoRefresh) Set 0: disable auto-update  1: enable auto-update.
 * @method string getUserKafkaTopic() Obtain Topic Parameter used by KafkaConsumer during consumption
 * @method void setUserKafkaTopic(string $UserKafkaTopic) Set Topic Parameter used by KafkaConsumer during consumption
 * @method string getServerAddr() Obtain 	Service address example value: kafkaconsumer-ap-beijing.cls.tencentyun.com:9095.
 * @method void setServerAddr(string $ServerAddr) Set 	Service address example value: kafkaconsumer-ap-beijing.cls.tencentyun.com:9095.
 * @method string getUserName() Obtain Kafka consuming user name. example value: name.
 * @method void setUserName(string $UserName) Set Kafka consuming user name. example value: name.
 * @method string getPassword() Obtain Kafka consuming user password. default ${SecretId}#${SecretKey}.
 * @method void setPassword(string $Password) Set Kafka consuming user password. default ${SecretId}#${SecretKey}.
 */
class CreateDataFlowRequest extends AbstractModel
{
    /**
     * @var string File system ID, which can be obtained by querying the file system through the [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1) api.
     */
    public $FileSystemId;

    /**
     * @var string Source data type; includes S3_COS, S3_L5.
     */
    public $SourceStorageType;

    /**
     * @var string Source storage address.
     */
    public $SourceStorageAddress;

    /**
     * @var string Source path.
     */
    public $SourcePath;

    /**
     * @var string Target path in the file system.
     */
    public $TargetPath;

    /**
     * @var string Key ID.
     */
    public $SecretId;

    /**
     * @var string key.
     */
    public $SecretKey;

    /**
     * @var string Data flow name, supports no more than 64 characters in length, supports chinese, numbers, _, and -.
     */
    public $DataFlowName;

    /**
     * @var integer 0: disable auto-update  1: enable auto-update.
     */
    public $AutoRefresh;

    /**
     * @var string Topic Parameter used by KafkaConsumer during consumption
     */
    public $UserKafkaTopic;

    /**
     * @var string 	Service address example value: kafkaconsumer-ap-beijing.cls.tencentyun.com:9095.
     */
    public $ServerAddr;

    /**
     * @var string Kafka consuming user name. example value: name.
     */
    public $UserName;

    /**
     * @var string Kafka consuming user password. default ${SecretId}#${SecretKey}.
     */
    public $Password;

    /**
     * @param string $FileSystemId File system ID, which can be obtained by querying the file system through the [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1) api.
     * @param string $SourceStorageType Source data type; includes S3_COS, S3_L5.
     * @param string $SourceStorageAddress Source storage address.
     * @param string $SourcePath Source path.
     * @param string $TargetPath Target path in the file system.
     * @param string $SecretId Key ID.
     * @param string $SecretKey key.
     * @param string $DataFlowName Data flow name, supports no more than 64 characters in length, supports chinese, numbers, _, and -.
     * @param integer $AutoRefresh 0: disable auto-update  1: enable auto-update.
     * @param string $UserKafkaTopic Topic Parameter used by KafkaConsumer during consumption
     * @param string $ServerAddr 	Service address example value: kafkaconsumer-ap-beijing.cls.tencentyun.com:9095.
     * @param string $UserName Kafka consuming user name. example value: name.
     * @param string $Password Kafka consuming user password. default ${SecretId}#${SecretKey}.
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("SourceStorageType",$param) and $param["SourceStorageType"] !== null) {
            $this->SourceStorageType = $param["SourceStorageType"];
        }

        if (array_key_exists("SourceStorageAddress",$param) and $param["SourceStorageAddress"] !== null) {
            $this->SourceStorageAddress = $param["SourceStorageAddress"];
        }

        if (array_key_exists("SourcePath",$param) and $param["SourcePath"] !== null) {
            $this->SourcePath = $param["SourcePath"];
        }

        if (array_key_exists("TargetPath",$param) and $param["TargetPath"] !== null) {
            $this->TargetPath = $param["TargetPath"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("DataFlowName",$param) and $param["DataFlowName"] !== null) {
            $this->DataFlowName = $param["DataFlowName"];
        }

        if (array_key_exists("AutoRefresh",$param) and $param["AutoRefresh"] !== null) {
            $this->AutoRefresh = $param["AutoRefresh"];
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
    }
}
