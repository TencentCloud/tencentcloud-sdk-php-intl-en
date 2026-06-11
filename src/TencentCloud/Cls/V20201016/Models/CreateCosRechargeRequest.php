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
 * CreateCosRecharge request structure.
 *
 * @method string getTopicId() Obtain Log topic Id.

-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method void setTopicId(string $TopicId) Set Log topic Id.

-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method string getLogsetId() Obtain FL instance set ID.

-Obtain the logset Id by searching the [logset list](https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1).
 * @method void setLogsetId(string $LogsetId) Set FL instance set ID.

-Obtain the logset Id by searching the [logset list](https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1).
 * @method string getName() Obtain COS import task name, supports up to 128 bytes.
 * @method void setName(string $Name) Set COS import task name, supports up to 128 bytes.
 * @method string getBucket() Obtain COS bucket, see the supported [bucket naming conventions](https://www.tencentcloud.com/document/product/436/13312?from_cn_redirect=1).	

-Get COS buckets via [GET Service (List Buckets)](https://www.tencentcloud.com/document/product/436/8291?from_cn_redirect=1).
 * @method void setBucket(string $Bucket) Set COS bucket, see the supported [bucket naming conventions](https://www.tencentcloud.com/document/product/436/13312?from_cn_redirect=1).	

-Get COS buckets via [GET Service (List Buckets)](https://www.tencentcloud.com/document/product/436/8291?from_cn_redirect=1).
 * @method string getBucketRegion() Obtain The region where the COS bucket is located, see the supported [region list](https://intl.cloud.tencent.com/document/product/436/6224?from_cn_redirect=1).
 * @method void setBucketRegion(string $BucketRegion) Set The region where the COS bucket is located, see the supported [region list](https://intl.cloud.tencent.com/document/product/436/6224?from_cn_redirect=1).
 * @method string getLogType() Obtain The type of log collected. `json_log`: JSON logs; `delimiter_log`: separator logs; `minimalist_log`: full text in a single line
Default value: `minimalist_log`
 * @method void setLogType(string $LogType) Set The type of log collected. `json_log`: JSON logs; `delimiter_log`: separator logs; `minimalist_log`: full text in a single line
Default value: `minimalist_log`
 * @method string getPrefix() Obtain The prefix of the folder where COS files are located. By default, it is null, meaning that all files under the bucket will be shipped.
 * @method void setPrefix(string $Prefix) Set The prefix of the folder where COS files are located. By default, it is null, meaning that all files under the bucket will be shipped.
 * @method string getCompress() Obtain Valid values: supported: "", "gzip", "lzop", "snappy"; Default value: ""; no compression.
 * @method void setCompress(string $Compress) Set Valid values: supported: "", "gzip", "lzop", "snappy"; Default value: ""; no compression.
 * @method ExtractRuleInfo getExtractRuleInfo() Obtain Extraction rule. If `ExtractRule` is set, `LogType` must be set.
 * @method void setExtractRuleInfo(ExtractRuleInfo $ExtractRuleInfo) Set Extraction rule. If `ExtractRule` is set, `LogType` must be set.
 * @method integer getTaskType() Obtain COS import task type. Valid values: 1: one-time import task (default value); 2: continuous import task.
 * @method void setTaskType(integer $TaskType) Set COS import task type. Valid values: 1: one-time import task (default value); 2: continuous import task.
 * @method array getMetadata() Obtain Metadata.
 * @method void setMetadata(array $Metadata) Set Metadata.
 */
class CreateCosRechargeRequest extends AbstractModel
{
    /**
     * @var string Log topic Id.

-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     */
    public $TopicId;

    /**
     * @var string FL instance set ID.

-Obtain the logset Id by searching the [logset list](https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1).
     */
    public $LogsetId;

    /**
     * @var string COS import task name, supports up to 128 bytes.
     */
    public $Name;

    /**
     * @var string COS bucket, see the supported [bucket naming conventions](https://www.tencentcloud.com/document/product/436/13312?from_cn_redirect=1).	

-Get COS buckets via [GET Service (List Buckets)](https://www.tencentcloud.com/document/product/436/8291?from_cn_redirect=1).
     */
    public $Bucket;

    /**
     * @var string The region where the COS bucket is located, see the supported [region list](https://intl.cloud.tencent.com/document/product/436/6224?from_cn_redirect=1).
     */
    public $BucketRegion;

    /**
     * @var string The type of log collected. `json_log`: JSON logs; `delimiter_log`: separator logs; `minimalist_log`: full text in a single line
Default value: `minimalist_log`
     */
    public $LogType;

    /**
     * @var string The prefix of the folder where COS files are located. By default, it is null, meaning that all files under the bucket will be shipped.
     */
    public $Prefix;

    /**
     * @var string Valid values: supported: "", "gzip", "lzop", "snappy"; Default value: ""; no compression.
     */
    public $Compress;

    /**
     * @var ExtractRuleInfo Extraction rule. If `ExtractRule` is set, `LogType` must be set.
     */
    public $ExtractRuleInfo;

    /**
     * @var integer COS import task type. Valid values: 1: one-time import task (default value); 2: continuous import task.
     */
    public $TaskType;

    /**
     * @var array Metadata.
     */
    public $Metadata;

    /**
     * @param string $TopicId Log topic Id.

-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     * @param string $LogsetId FL instance set ID.

-Obtain the logset Id by searching the [logset list](https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1).
     * @param string $Name COS import task name, supports up to 128 bytes.
     * @param string $Bucket COS bucket, see the supported [bucket naming conventions](https://www.tencentcloud.com/document/product/436/13312?from_cn_redirect=1).	

-Get COS buckets via [GET Service (List Buckets)](https://www.tencentcloud.com/document/product/436/8291?from_cn_redirect=1).
     * @param string $BucketRegion The region where the COS bucket is located, see the supported [region list](https://intl.cloud.tencent.com/document/product/436/6224?from_cn_redirect=1).
     * @param string $LogType The type of log collected. `json_log`: JSON logs; `delimiter_log`: separator logs; `minimalist_log`: full text in a single line
Default value: `minimalist_log`
     * @param string $Prefix The prefix of the folder where COS files are located. By default, it is null, meaning that all files under the bucket will be shipped.
     * @param string $Compress Valid values: supported: "", "gzip", "lzop", "snappy"; Default value: ""; no compression.
     * @param ExtractRuleInfo $ExtractRuleInfo Extraction rule. If `ExtractRule` is set, `LogType` must be set.
     * @param integer $TaskType COS import task type. Valid values: 1: one-time import task (default value); 2: continuous import task.
     * @param array $Metadata Metadata.
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

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
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
