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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCosRecharge request structure.
 *
 * @method string getTopicId() Obtain ID of the log topic.
 * @method void setTopicId(string $TopicId) Set ID of the log topic.
 * @method string getLogsetId() Obtain ID of the logset.
 * @method void setLogsetId(string $LogsetId) Set ID of the logset.
 * @method string getName() Obtain Shipping task name.
 * @method void setName(string $Name) Set Shipping task name.
 * @method string getBucket() Obtain COS bucket, see the supported [bucket naming conventions](https://intl.cloud.tencent.com/document/product/436/13312?from_cn_redirect=1).
 * @method void setBucket(string $Bucket) Set COS bucket, see the supported [bucket naming conventions](https://intl.cloud.tencent.com/document/product/436/13312?from_cn_redirect=1).
 * @method string getBucketRegion() Obtain The region where the COS bucket is located, see the supported [region list](https://intl.cloud.tencent.com/document/product/436/6224?from_cn_redirect=1).
 * @method void setBucketRegion(string $BucketRegion) Set The region where the COS bucket is located, see the supported [region list](https://intl.cloud.tencent.com/document/product/436/6224?from_cn_redirect=1).
 * @method string getPrefix() Obtain The prefix of the folder where COS files are located.
 * @method void setPrefix(string $Prefix) Set The prefix of the folder where COS files are located.
 * @method string getLogType() Obtain The type of log collected. `json_log`: JSON logs; `delimiter_log`: separator logs; `minimalist_log`: full text in a single line
Default value: `minimalist_log`
 * @method void setLogType(string $LogType) Set The type of log collected. `json_log`: JSON logs; `delimiter_log`: separator logs; `minimalist_log`: full text in a single line
Default value: `minimalist_log`
 * @method string getCompress() Obtain Valid values: supported: "", "gzip", "lzop", "snappy"; Default value: "".
 * @method void setCompress(string $Compress) Set Valid values: supported: "", "gzip", "lzop", "snappy"; Default value: "".
 * @method ExtractRuleInfo getExtractRuleInfo() Obtain Extraction rule. If `ExtractRule` is set, `LogType` must be set.
 * @method void setExtractRuleInfo(ExtractRuleInfo $ExtractRuleInfo) Set Extraction rule. If `ExtractRule` is set, `LogType` must be set.
 */
class CreateCosRechargeRequest extends AbstractModel
{
    /**
     * @var string ID of the log topic.
     */
    public $TopicId;

    /**
     * @var string ID of the logset.
     */
    public $LogsetId;

    /**
     * @var string Shipping task name.
     */
    public $Name;

    /**
     * @var string COS bucket, see the supported [bucket naming conventions](https://intl.cloud.tencent.com/document/product/436/13312?from_cn_redirect=1).
     */
    public $Bucket;

    /**
     * @var string The region where the COS bucket is located, see the supported [region list](https://intl.cloud.tencent.com/document/product/436/6224?from_cn_redirect=1).
     */
    public $BucketRegion;

    /**
     * @var string The prefix of the folder where COS files are located.
     */
    public $Prefix;

    /**
     * @var string The type of log collected. `json_log`: JSON logs; `delimiter_log`: separator logs; `minimalist_log`: full text in a single line
Default value: `minimalist_log`
     */
    public $LogType;

    /**
     * @var string Valid values: supported: "", "gzip", "lzop", "snappy"; Default value: "".
     */
    public $Compress;

    /**
     * @var ExtractRuleInfo Extraction rule. If `ExtractRule` is set, `LogType` must be set.
     */
    public $ExtractRuleInfo;

    /**
     * @param string $TopicId ID of the log topic.
     * @param string $LogsetId ID of the logset.
     * @param string $Name Shipping task name.
     * @param string $Bucket COS bucket, see the supported [bucket naming conventions](https://intl.cloud.tencent.com/document/product/436/13312?from_cn_redirect=1).
     * @param string $BucketRegion The region where the COS bucket is located, see the supported [region list](https://intl.cloud.tencent.com/document/product/436/6224?from_cn_redirect=1).
     * @param string $Prefix The prefix of the folder where COS files are located.
     * @param string $LogType The type of log collected. `json_log`: JSON logs; `delimiter_log`: separator logs; `minimalist_log`: full text in a single line
Default value: `minimalist_log`
     * @param string $Compress Valid values: supported: "", "gzip", "lzop", "snappy"; Default value: "".
     * @param ExtractRuleInfo $ExtractRuleInfo Extraction rule. If `ExtractRule` is set, `LogType` must be set.
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
    }
}
