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
 * ModifyCosRecharge request structure.
 *
 * @method string getId() Obtain COS import configuration Id.

-Obtain the cos import configuration Id through the [Get cos import configuration](https://www.tencentcloud.com/document/product/614/88099?from_cn_redirect=1) API.
 * @method void setId(string $Id) Set COS import configuration Id.

-Obtain the cos import configuration Id through the [Get cos import configuration](https://www.tencentcloud.com/document/product/614/88099?from_cn_redirect=1) API.
 * @method string getTopicId() Obtain Log topic Id.

-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method void setTopicId(string $TopicId) Set Log topic Id.

-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method string getName() Obtain COS import task name, supports up to 128 bytes.
 * @method void setName(string $Name) Set COS import task name, supports up to 128 bytes.
 * @method integer getEnable() Obtain Task status. Valid values: 0: disabled; 1: enabled.
 * @method void setEnable(integer $Enable) Set Task status. Valid values: 0: disabled; 1: enabled.
 * @method string getBucket() Obtain COS bucket, see the supported [bucket naming conventions](https://www.tencentcloud.com/document/product/436/13312?from_cn_redirect=1).	

-Get COS buckets via [GET Service (List Buckets)](https://www.tencentcloud.com/document/product/436/8291?from_cn_redirect=1).
 * @method void setBucket(string $Bucket) Set COS bucket, see the supported [bucket naming conventions](https://www.tencentcloud.com/document/product/436/13312?from_cn_redirect=1).	

-Get COS buckets via [GET Service (List Buckets)](https://www.tencentcloud.com/document/product/436/8291?from_cn_redirect=1).
 * @method string getBucketRegion() Obtain The region where the COS bucket is located, see the supported [region list](https://www.tencentcloud.com/document/product/436/6224?from_cn_redirect=1).
 * @method void setBucketRegion(string $BucketRegion) Set The region where the COS bucket is located, see the supported [region list](https://www.tencentcloud.com/document/product/436/6224?from_cn_redirect=1).
 * @method string getPrefix() Obtain Prefix of the folder where COS files are located. When it is an empty string, all files in the bucket will be delivered.
 * @method void setPrefix(string $Prefix) Set Prefix of the folder where COS files are located. When it is an empty string, all files in the bucket will be delivered.
 * @method string getLogType() Obtain Types of logs collected. json_log indicates logs in JSON format; delimiter_log indicates logs in delimiter-separated values format; minimalist_log indicates single-line full-text logs. The default value is minimalist_log.
 * @method void setLogType(string $LogType) Set Types of logs collected. json_log indicates logs in JSON format; delimiter_log indicates logs in delimiter-separated values format; minimalist_log indicates single-line full-text logs. The default value is minimalist_log.
 * @method string getCompress() Obtain Parsing format. Valid values: "", "gzip", "lzop", "snappy". Empty string means no compression.
 * @method void setCompress(string $Compress) Set Parsing format. Valid values: "", "gzip", "lzop", "snappy". Empty string means no compression.
 * @method ExtractRuleInfo getExtractRuleInfo() Obtain Extraction rule. If ExtractRule is set, then LogType must be set.
 * @method void setExtractRuleInfo(ExtractRuleInfo $ExtractRuleInfo) Set Extraction rule. If ExtractRule is set, then LogType must be set.
 * @method integer getTaskType() Obtain COS import task type. Valid values: 1: one-time import task; 2: continuous import task.
 * @method void setTaskType(integer $TaskType) Set COS import task type. Valid values: 1: one-time import task; 2: continuous import task.
 * @method array getMetadata() Obtain Metadata. Buckets and objects are supported.
 * @method void setMetadata(array $Metadata) Set Metadata. Buckets and objects are supported.
 */
class ModifyCosRechargeRequest extends AbstractModel
{
    /**
     * @var string COS import configuration Id.

-Obtain the cos import configuration Id through the [Get cos import configuration](https://www.tencentcloud.com/document/product/614/88099?from_cn_redirect=1) API.
     */
    public $Id;

    /**
     * @var string Log topic Id.

-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     */
    public $TopicId;

    /**
     * @var string COS import task name, supports up to 128 bytes.
     */
    public $Name;

    /**
     * @var integer Task status. Valid values: 0: disabled; 1: enabled.
     */
    public $Enable;

    /**
     * @var string COS bucket, see the supported [bucket naming conventions](https://www.tencentcloud.com/document/product/436/13312?from_cn_redirect=1).	

-Get COS buckets via [GET Service (List Buckets)](https://www.tencentcloud.com/document/product/436/8291?from_cn_redirect=1).
     */
    public $Bucket;

    /**
     * @var string The region where the COS bucket is located, see the supported [region list](https://www.tencentcloud.com/document/product/436/6224?from_cn_redirect=1).
     */
    public $BucketRegion;

    /**
     * @var string Prefix of the folder where COS files are located. When it is an empty string, all files in the bucket will be delivered.
     */
    public $Prefix;

    /**
     * @var string Types of logs collected. json_log indicates logs in JSON format; delimiter_log indicates logs in delimiter-separated values format; minimalist_log indicates single-line full-text logs. The default value is minimalist_log.
     */
    public $LogType;

    /**
     * @var string Parsing format. Valid values: "", "gzip", "lzop", "snappy". Empty string means no compression.
     */
    public $Compress;

    /**
     * @var ExtractRuleInfo Extraction rule. If ExtractRule is set, then LogType must be set.
     */
    public $ExtractRuleInfo;

    /**
     * @var integer COS import task type. Valid values: 1: one-time import task; 2: continuous import task.
     */
    public $TaskType;

    /**
     * @var array Metadata. Buckets and objects are supported.
     */
    public $Metadata;

    /**
     * @param string $Id COS import configuration Id.

-Obtain the cos import configuration Id through the [Get cos import configuration](https://www.tencentcloud.com/document/product/614/88099?from_cn_redirect=1) API.
     * @param string $TopicId Log topic Id.

-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     * @param string $Name COS import task name, supports up to 128 bytes.
     * @param integer $Enable Task status. Valid values: 0: disabled; 1: enabled.
     * @param string $Bucket COS bucket, see the supported [bucket naming conventions](https://www.tencentcloud.com/document/product/436/13312?from_cn_redirect=1).	

-Get COS buckets via [GET Service (List Buckets)](https://www.tencentcloud.com/document/product/436/8291?from_cn_redirect=1).
     * @param string $BucketRegion The region where the COS bucket is located, see the supported [region list](https://www.tencentcloud.com/document/product/436/6224?from_cn_redirect=1).
     * @param string $Prefix Prefix of the folder where COS files are located. When it is an empty string, all files in the bucket will be delivered.
     * @param string $LogType Types of logs collected. json_log indicates logs in JSON format; delimiter_log indicates logs in delimiter-separated values format; minimalist_log indicates single-line full-text logs. The default value is minimalist_log.
     * @param string $Compress Parsing format. Valid values: "", "gzip", "lzop", "snappy". Empty string means no compression.
     * @param ExtractRuleInfo $ExtractRuleInfo Extraction rule. If ExtractRule is set, then LogType must be set.
     * @param integer $TaskType COS import task type. Valid values: 1: one-time import task; 2: continuous import task.
     * @param array $Metadata Metadata. Buckets and objects are supported.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Compress",$param) and $param["Compress"] !== null) {
            $this->Compress = $param["Compress"];
        }

        if (array_key_exists("ExtractRuleInfo",$param) and $param["ExtractRuleInfo"] !== null) {
            $this->ExtractRuleInfo = new ExtractRuleInfo();
            $this->ExtractRuleInfo->deserialize($param["ExtractRuleInfo"]);
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }
    }
}
