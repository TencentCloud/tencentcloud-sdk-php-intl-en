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
 * COS import configuration information.
 *
 * @method string getId() Obtain COS import configuration ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(string $Id) Set COS import configuration ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTopicId() Obtain ID of the log topic.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicId(string $TopicId) Set ID of the log topic.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogsetId() Obtain ID of the logset.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogsetId(string $LogsetId) Set ID of the logset.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain COS import task name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set COS import task name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBucket() Obtain COS bucket.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBucket(string $Bucket) Set COS bucket.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBucketRegion() Obtain Region where the COS bucket is located.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBucketRegion(string $BucketRegion) Set Region where the COS bucket is located.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPrefix() Obtain The prefix of the folder where COS files are located.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrefix(string $Prefix) Set The prefix of the folder where COS files are located.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogType() Obtain The type of log collected. `json_log`: JSON logs; `delimiter_log`: separator logs; `minimalist_log`: full text in a single line
Default value: `minimalist_log`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogType(string $LogType) Set The type of log collected. `json_log`: JSON logs; `delimiter_log`: separator logs; `minimalist_log`: full text in a single line
Default value: `minimalist_log`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status. `0`: Created, `1`: Running, `2`: Stopped, `3`: Completed, `4`: Run failed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Status. `0`: Created, `1`: Running, `2`: Stopped, `3`: Completed, `4`: Run failed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEnable() Obtain Whether the configuration is enabled. `0`: Not enabled, `1`: Enabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnable(integer $Enable) Set Whether the configuration is enabled. `0`: Not enabled, `1`: Enabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProgress() Obtain Progress in percentage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProgress(integer $Progress) Set Progress in percentage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCompress() Obtain Valid values: "" (default), "gzip", "lzop", "snappy"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompress(string $Compress) Set Valid values: "" (default), "gzip", "lzop", "snappy"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ExtractRuleInfo getExtractRuleInfo() Obtain See the description of the `ExtractRuleInfo` structure.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtractRuleInfo(ExtractRuleInfo $ExtractRuleInfo) Set See the description of the `ExtractRuleInfo` structure.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CosRechargeInfo extends AbstractModel
{
    /**
     * @var string COS import configuration ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string ID of the log topic.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicId;

    /**
     * @var string ID of the logset.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogsetId;

    /**
     * @var string COS import task name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string COS bucket.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Bucket;

    /**
     * @var string Region where the COS bucket is located.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BucketRegion;

    /**
     * @var string The prefix of the folder where COS files are located.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Prefix;

    /**
     * @var string The type of log collected. `json_log`: JSON logs; `delimiter_log`: separator logs; `minimalist_log`: full text in a single line
Default value: `minimalist_log`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogType;

    /**
     * @var integer Status. `0`: Created, `1`: Running, `2`: Stopped, `3`: Completed, `4`: Run failed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Whether the configuration is enabled. `0`: Not enabled, `1`: Enabled
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Enable;

    /**
     * @var string Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Update time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var integer Progress in percentage.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Progress;

    /**
     * @var string Valid values: "" (default), "gzip", "lzop", "snappy"
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Compress;

    /**
     * @var ExtractRuleInfo See the description of the `ExtractRuleInfo` structure.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtractRuleInfo;

    /**
     * @param string $Id COS import configuration ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TopicId ID of the log topic.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogsetId ID of the logset.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name COS import task name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Bucket COS bucket.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BucketRegion Region where the COS bucket is located.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Prefix The prefix of the folder where COS files are located.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogType The type of log collected. `json_log`: JSON logs; `delimiter_log`: separator logs; `minimalist_log`: full text in a single line
Default value: `minimalist_log`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Status. `0`: Created, `1`: Running, `2`: Stopped, `3`: Completed, `4`: Run failed
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Enable Whether the configuration is enabled. `0`: Not enabled, `1`: Enabled
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Progress Progress in percentage.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Compress Valid values: "" (default), "gzip", "lzop", "snappy"
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ExtractRuleInfo $ExtractRuleInfo See the description of the `ExtractRuleInfo` structure.
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
