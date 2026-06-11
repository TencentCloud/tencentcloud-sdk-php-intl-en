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
 * COS import configuration information.
 *
 * @method string getId() Obtain COS import configuration ID.
 * @method void setId(string $Id) Set COS import configuration ID.
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method string getLogsetId() Obtain Logset ID
 * @method void setLogsetId(string $LogsetId) Set Logset ID
 * @method string getName() Obtain COS import task name
 * @method void setName(string $Name) Set COS import task name
 * @method string getBucket() Obtain COS bucket
 * @method void setBucket(string $Bucket) Set COS bucket
 * @method string getBucketRegion() Obtain COS bucket location.

-Obtain region information via [regions and access endpoints](https://www.tencentcloud.com/document/product/436/6224?from_cn_redirect=1).
 * @method void setBucketRegion(string $BucketRegion) Set COS bucket location.

-Obtain region information via [regions and access endpoints](https://www.tencentcloud.com/document/product/436/6224?from_cn_redirect=1).
 * @method string getPrefix() Obtain Prefix of the COS file folder location
 * @method void setPrefix(string $Prefix) Set Prefix of the COS file folder location
 * @method string getLogType() Obtain Types of logs collected: json_log represents JSON logs, delimiter_log represents delimiter-separated format logs, minimalist_log represents single-line full-text representation.
default is minimalist_log
 * @method void setLogType(string $LogType) Set Types of logs collected: json_log represents JSON logs, delimiter_log represents delimiter-separated format logs, minimalist_log represents single-line full-text representation.
default is minimalist_log
 * @method integer getStatus() Obtain status 0: Created, 1: Running, 2: Stopped, 3: Completed, 4: Execution failed.
 * @method void setStatus(integer $Status) Set status 0: Created, 1: Running, 2: Stopped, 3: Completed, 4: Execution failed.
 * @method integer getEnable() Obtain Whether this feature is enabled. 0: Disabled; 1: Enabled.
 * @method void setEnable(integer $Enable) Set Whether this feature is enabled. 0: Disabled; 1: Enabled.
 * @method string getCreateTime() Obtain Creation time. Time format: YYYY-MM-DD HH:mm:ss
 * @method void setCreateTime(string $CreateTime) Set Creation time. Time format: YYYY-MM-DD HH:mm:ss
 * @method string getUpdateTime() Obtain Update time. Time format: YYYY-MM-DD HH:mm:ss
 * @method void setUpdateTime(string $UpdateTime) Set Update time. Time format: YYYY-MM-DD HH:mm:ss
 * @method integer getProgress() Obtain Progress Bar Percentage
 * @method void setProgress(integer $Progress) Set Progress Bar Percentage
 * @method string getCompress() Obtain Compression methods supported: "", "gzip", "lzop", and "snappy". Default empty with no compression.
 * @method void setCompress(string $Compress) Set Compression methods supported: "", "gzip", "lzop", and "snappy". Default empty with no compression.
 * @method ExtractRuleInfo getExtractRuleInfo() Obtain See the description of the ExtractRuleInfo structure.
 * @method void setExtractRuleInfo(ExtractRuleInfo $ExtractRuleInfo) Set See the description of the ExtractRuleInfo structure.
 * @method integer getTaskType() Obtain COS import task type. Valid values: 1: one-time import task; 2: continuous import task.
 * @method void setTaskType(integer $TaskType) Set COS import task type. Valid values: 1: one-time import task; 2: continuous import task.
 * @method array getMetadata() Obtain Metadata. Buckets and objects are supported.
 * @method void setMetadata(array $Metadata) Set Metadata. Buckets and objects are supported.
 */
class CosRechargeInfo extends AbstractModel
{
    /**
     * @var string COS import configuration ID.
     */
    public $Id;

    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var string Logset ID
     */
    public $LogsetId;

    /**
     * @var string COS import task name
     */
    public $Name;

    /**
     * @var string COS bucket
     */
    public $Bucket;

    /**
     * @var string COS bucket location.

-Obtain region information via [regions and access endpoints](https://www.tencentcloud.com/document/product/436/6224?from_cn_redirect=1).
     */
    public $BucketRegion;

    /**
     * @var string Prefix of the COS file folder location
     */
    public $Prefix;

    /**
     * @var string Types of logs collected: json_log represents JSON logs, delimiter_log represents delimiter-separated format logs, minimalist_log represents single-line full-text representation.
default is minimalist_log
     */
    public $LogType;

    /**
     * @var integer status 0: Created, 1: Running, 2: Stopped, 3: Completed, 4: Execution failed.
     */
    public $Status;

    /**
     * @var integer Whether this feature is enabled. 0: Disabled; 1: Enabled.
     */
    public $Enable;

    /**
     * @var string Creation time. Time format: YYYY-MM-DD HH:mm:ss
     */
    public $CreateTime;

    /**
     * @var string Update time. Time format: YYYY-MM-DD HH:mm:ss
     */
    public $UpdateTime;

    /**
     * @var integer Progress Bar Percentage
     */
    public $Progress;

    /**
     * @var string Compression methods supported: "", "gzip", "lzop", and "snappy". Default empty with no compression.
     */
    public $Compress;

    /**
     * @var ExtractRuleInfo See the description of the ExtractRuleInfo structure.
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
     * @param string $Id COS import configuration ID.
     * @param string $TopicId Log topic ID
     * @param string $LogsetId Logset ID
     * @param string $Name COS import task name
     * @param string $Bucket COS bucket
     * @param string $BucketRegion COS bucket location.

-Obtain region information via [regions and access endpoints](https://www.tencentcloud.com/document/product/436/6224?from_cn_redirect=1).
     * @param string $Prefix Prefix of the COS file folder location
     * @param string $LogType Types of logs collected: json_log represents JSON logs, delimiter_log represents delimiter-separated format logs, minimalist_log represents single-line full-text representation.
default is minimalist_log
     * @param integer $Status status 0: Created, 1: Running, 2: Stopped, 3: Completed, 4: Execution failed.
     * @param integer $Enable Whether this feature is enabled. 0: Disabled; 1: Enabled.
     * @param string $CreateTime Creation time. Time format: YYYY-MM-DD HH:mm:ss
     * @param string $UpdateTime Update time. Time format: YYYY-MM-DD HH:mm:ss
     * @param integer $Progress Progress Bar Percentage
     * @param string $Compress Compression methods supported: "", "gzip", "lzop", and "snappy". Default empty with no compression.
     * @param ExtractRuleInfo $ExtractRuleInfo See the description of the ExtractRuleInfo structure.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
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
