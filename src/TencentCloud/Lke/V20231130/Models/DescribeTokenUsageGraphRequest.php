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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTokenUsageGraph request structure.
 *
 * @method array getUinAccount() Obtain Root account of Tencent Cloud.
 * @method void setUinAccount(array $UinAccount) Set Root account of Tencent Cloud.
 * @method string getSubBizType() Obtain Sub-business types of Tencent Cloud Agent Development Platform/ADP: fileparse (document parsing), Embedding, Rewrite (multi-round rewriting), Concurrency, KnowledgeSummary (knowledge summary), KnowledgeQA (knowledge Q&A), KnowledgeCapacity (knowledge base capacity), SearchEngine (search engine).
 * @method void setSubBizType(string $SubBizType) Set Sub-business types of Tencent Cloud Agent Development Platform/ADP: fileparse (document parsing), Embedding, Rewrite (multi-round rewriting), Concurrency, KnowledgeSummary (knowledge summary), KnowledgeQA (knowledge Q&A), KnowledgeCapacity (knowledge base capacity), SearchEngine (search engine).
 * @method string getModelName() Obtain Model identifier.
 * @method void setModelName(string $ModelName) Set Model identifier.
 * @method string getStartTime() Obtain Start timestamp, in seconds.
 * @method void setStartTime(string $StartTime) Set Start timestamp, in seconds.
 * @method string getEndTime() Obtain End timestamp, in seconds.
 * @method void setEndTime(string $EndTime) Set End timestamp, in seconds.
 * @method array getAppBizIds() Obtain Application ID list.
 * @method void setAppBizIds(array $AppBizIds) Set Application ID list.
 * @method string getAppType() Obtain 
 * @method void setAppType(string $AppType) Set 
 * @method array getSubScenes() Obtain 
 * @method void setSubScenes(array $SubScenes) Set 
 */
class DescribeTokenUsageGraphRequest extends AbstractModel
{
    /**
     * @var array Root account of Tencent Cloud.
     */
    public $UinAccount;

    /**
     * @var string Sub-business types of Tencent Cloud Agent Development Platform/ADP: fileparse (document parsing), Embedding, Rewrite (multi-round rewriting), Concurrency, KnowledgeSummary (knowledge summary), KnowledgeQA (knowledge Q&A), KnowledgeCapacity (knowledge base capacity), SearchEngine (search engine).
     */
    public $SubBizType;

    /**
     * @var string Model identifier.
     */
    public $ModelName;

    /**
     * @var string Start timestamp, in seconds.
     */
    public $StartTime;

    /**
     * @var string End timestamp, in seconds.
     */
    public $EndTime;

    /**
     * @var array Application ID list.
     */
    public $AppBizIds;

    /**
     * @var string 
     */
    public $AppType;

    /**
     * @var array 
     */
    public $SubScenes;

    /**
     * @param array $UinAccount Root account of Tencent Cloud.
     * @param string $SubBizType Sub-business types of Tencent Cloud Agent Development Platform/ADP: fileparse (document parsing), Embedding, Rewrite (multi-round rewriting), Concurrency, KnowledgeSummary (knowledge summary), KnowledgeQA (knowledge Q&A), KnowledgeCapacity (knowledge base capacity), SearchEngine (search engine).
     * @param string $ModelName Model identifier.
     * @param string $StartTime Start timestamp, in seconds.
     * @param string $EndTime End timestamp, in seconds.
     * @param array $AppBizIds Application ID list.
     * @param string $AppType 
     * @param array $SubScenes 
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
        if (array_key_exists("UinAccount",$param) and $param["UinAccount"] !== null) {
            $this->UinAccount = $param["UinAccount"];
        }

        if (array_key_exists("SubBizType",$param) and $param["SubBizType"] !== null) {
            $this->SubBizType = $param["SubBizType"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AppBizIds",$param) and $param["AppBizIds"] !== null) {
            $this->AppBizIds = $param["AppBizIds"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("SubScenes",$param) and $param["SubScenes"] !== null) {
            $this->SubScenes = $param["SubScenes"];
        }
    }
}
