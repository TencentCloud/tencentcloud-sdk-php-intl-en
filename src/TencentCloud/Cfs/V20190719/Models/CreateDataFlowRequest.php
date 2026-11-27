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
 * @method string getFileSystemId() Obtain <p>File system ID, which can be obtained through the API for querying file systems <a href="https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1">DescribeCfsFileSystems</a>.</p>
 * @method void setFileSystemId(string $FileSystemId) Set <p>File system ID, which can be obtained through the API for querying file systems <a href="https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1">DescribeCfsFileSystems</a>.</p>
 * @method string getSourceStorageType() Obtain <p>Source data type. Valid values: S3_COS and S3_L5.</p>
 * @method void setSourceStorageType(string $SourceStorageType) Set <p>Source data type. Valid values: S3_COS and S3_L5.</p>
 * @method string getSourceStorageAddress() Obtain <p>Source storage address</p>
 * @method void setSourceStorageAddress(string $SourceStorageAddress) Set <p>Source storage address</p>
 * @method string getSourcePath() Obtain <p>Source path</p>
 * @method void setSourcePath(string $SourcePath) Set <p>Source path</p>
 * @method string getTargetPath() Obtain <p>Target path in the file system specified when setting data flow. It must start with /cfs/ and represents a logical path inside the file storage instance, not a local mount point path.<br>Example:</p><ul><li>If the CFS root directory / is mounted, and you need to map the source directory on object storage to test1/test2 under the mount path, the value of this parameter is /cfs/test1/test2.</li><li>If the CFS subdirectory /subdir is mounted, and you need to map the source directory on object storage to test1/test2 under the mount path, the value of this parameter is /cfs/subdir/test1/test2.</li></ul>
 * @method void setTargetPath(string $TargetPath) Set <p>Target path in the file system specified when setting data flow. It must start with /cfs/ and represents a logical path inside the file storage instance, not a local mount point path.<br>Example:</p><ul><li>If the CFS root directory / is mounted, and you need to map the source directory on object storage to test1/test2 under the mount path, the value of this parameter is /cfs/test1/test2.</li><li>If the CFS subdirectory /subdir is mounted, and you need to map the source directory on object storage to test1/test2 under the mount path, the value of this parameter is /cfs/subdir/test1/test2.</li></ul>
 * @method string getSecretId() Obtain <p>Secret ID</p>
 * @method void setSecretId(string $SecretId) Set <p>Secret ID</p>
 * @method string getSecretKey() Obtain <p>Secret key</p>
 * @method void setSecretKey(string $SecretKey) Set <p>Secret key</p>
 * @method string getDataFlowName() Obtain <p>Data flow name. It supports up to 64 characters, including Chinese characters, digits, underscores (_), and hyphens (-).</p>
 * @method void setDataFlowName(string $DataFlowName) Set <p>Data flow name. It supports up to 64 characters, including Chinese characters, digits, underscores (_), and hyphens (-).</p>
 * @method integer getAutoRefresh() Obtain <p>0: Automatic update disabled. 1: Automatic update enabled.</p>
 * @method void setAutoRefresh(integer $AutoRefresh) Set <p>0: Automatic update disabled. 1: Automatic update enabled.</p>
 * @method string getUserKafkaTopic() Obtain <p>Topic parameter used by KafkaConsumer for consumption</p>
 * @method void setUserKafkaTopic(string $UserKafkaTopic) Set <p>Topic parameter used by KafkaConsumer for consumption</p>
 * @method string getServerAddr() Obtain <p>Service address. Example: kafkaconsumer-ap-beijing.cls.tencentyun.com:9095</p>
 * @method void setServerAddr(string $ServerAddr) Set <p>Service address. Example: kafkaconsumer-ap-beijing.cls.tencentyun.com:9095</p>
 * @method string getUserName() Obtain <p>Kafka consumer username. Example: name</p>
 * @method void setUserName(string $UserName) Set <p>Kafka consumer username. Example: name</p>
 * @method string getPassword() Obtain <p>Kafka consumer password. Default value: ${SecretId}#${SecretKey}.</p>
 * @method void setPassword(string $Password) Set <p>Kafka consumer password. Default value: ${SecretId}#${SecretKey}.</p>
 */
class CreateDataFlowRequest extends AbstractModel
{
    /**
     * @var string <p>File system ID, which can be obtained through the API for querying file systems <a href="https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1">DescribeCfsFileSystems</a>.</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>Source data type. Valid values: S3_COS and S3_L5.</p>
     */
    public $SourceStorageType;

    /**
     * @var string <p>Source storage address</p>
     */
    public $SourceStorageAddress;

    /**
     * @var string <p>Source path</p>
     */
    public $SourcePath;

    /**
     * @var string <p>Target path in the file system specified when setting data flow. It must start with /cfs/ and represents a logical path inside the file storage instance, not a local mount point path.<br>Example:</p><ul><li>If the CFS root directory / is mounted, and you need to map the source directory on object storage to test1/test2 under the mount path, the value of this parameter is /cfs/test1/test2.</li><li>If the CFS subdirectory /subdir is mounted, and you need to map the source directory on object storage to test1/test2 under the mount path, the value of this parameter is /cfs/subdir/test1/test2.</li></ul>
     */
    public $TargetPath;

    /**
     * @var string <p>Secret ID</p>
     */
    public $SecretId;

    /**
     * @var string <p>Secret key</p>
     */
    public $SecretKey;

    /**
     * @var string <p>Data flow name. It supports up to 64 characters, including Chinese characters, digits, underscores (_), and hyphens (-).</p>
     */
    public $DataFlowName;

    /**
     * @var integer <p>0: Automatic update disabled. 1: Automatic update enabled.</p>
     */
    public $AutoRefresh;

    /**
     * @var string <p>Topic parameter used by KafkaConsumer for consumption</p>
     */
    public $UserKafkaTopic;

    /**
     * @var string <p>Service address. Example: kafkaconsumer-ap-beijing.cls.tencentyun.com:9095</p>
     */
    public $ServerAddr;

    /**
     * @var string <p>Kafka consumer username. Example: name</p>
     */
    public $UserName;

    /**
     * @var string <p>Kafka consumer password. Default value: ${SecretId}#${SecretKey}.</p>
     */
    public $Password;

    /**
     * @param string $FileSystemId <p>File system ID, which can be obtained through the API for querying file systems <a href="https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1">DescribeCfsFileSystems</a>.</p>
     * @param string $SourceStorageType <p>Source data type. Valid values: S3_COS and S3_L5.</p>
     * @param string $SourceStorageAddress <p>Source storage address</p>
     * @param string $SourcePath <p>Source path</p>
     * @param string $TargetPath <p>Target path in the file system specified when setting data flow. It must start with /cfs/ and represents a logical path inside the file storage instance, not a local mount point path.<br>Example:</p><ul><li>If the CFS root directory / is mounted, and you need to map the source directory on object storage to test1/test2 under the mount path, the value of this parameter is /cfs/test1/test2.</li><li>If the CFS subdirectory /subdir is mounted, and you need to map the source directory on object storage to test1/test2 under the mount path, the value of this parameter is /cfs/subdir/test1/test2.</li></ul>
     * @param string $SecretId <p>Secret ID</p>
     * @param string $SecretKey <p>Secret key</p>
     * @param string $DataFlowName <p>Data flow name. It supports up to 64 characters, including Chinese characters, digits, underscores (_), and hyphens (-).</p>
     * @param integer $AutoRefresh <p>0: Automatic update disabled. 1: Automatic update enabled.</p>
     * @param string $UserKafkaTopic <p>Topic parameter used by KafkaConsumer for consumption</p>
     * @param string $ServerAddr <p>Service address. Example: kafkaconsumer-ap-beijing.cls.tencentyun.com:9095</p>
     * @param string $UserName <p>Kafka consumer username. Example: name</p>
     * @param string $Password <p>Kafka consumer password. Default value: ${SecretId}#${SecretKey}.</p>
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
