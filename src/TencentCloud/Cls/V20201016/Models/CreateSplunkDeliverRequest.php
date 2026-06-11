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
 * CreateSplunkDeliver request structure.
 *
 * @method string getTopicId() Obtain <p>log topic id</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
 * @method void setTopicId(string $TopicId) Set <p>log topic id</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
 * @method string getName() Obtain <p>The splunk delivery task name has the following restrictions: - Cannot be empty - Length not greater than 256 - Can only contain aA-zZ, underscore, -, 0-9</p>
 * @method void setName(string $Name) Set <p>The splunk delivery task name has the following restrictions: - Cannot be empty - Length not greater than 256 - Can only contain aA-zZ, underscore, -, 0-9</p>
 * @method NetInfo getNetInfo() Obtain <p>Splunk delivery task - target configuration - network info</p>
 * @method void setNetInfo(NetInfo $NetInfo) Set <p>Splunk delivery task - target configuration - network info</p>
 * @method MetadataInfo getMetadataInfo() Obtain <p>Splunk delivery task meta information</p>
 * @method void setMetadataInfo(MetadataInfo $MetadataInfo) Set <p>Splunk delivery task meta information</p>
 * @method integer getHasServiceLog() Obtain <p>Whether service logs are enabled 1: Disabled; 2: Enabled; Enabled by default</p>
 * @method void setHasServiceLog(integer $HasServiceLog) Set <p>Whether service logs are enabled 1: Disabled; 2: Enabled; Enabled by default</p>
 * @method integer getIndexAck() Obtain <p>Advanced configuration - Whether to enable the indexer; 1 - Disable; 2 - Enable;<br>Default: 1</p>
 * @method void setIndexAck(integer $IndexAck) Set <p>Advanced configuration - Whether to enable the indexer; 1 - Disable; 2 - Enable;<br>Default: 1</p>
 * @method string getSource() Obtain <p>Advanced configuration - data source; no more than 64 characters</p>
 * @method void setSource(string $Source) Set <p>Advanced configuration - data source; no more than 64 characters</p>
 * @method string getSourceType() Obtain <p>Advanced configuration - data source type; no more than 64 characters</p>
 * @method void setSourceType(string $SourceType) Set <p>Advanced configuration - data source type; no more than 64 characters</p>
 * @method string getIndex() Obtain <p>Advanced configuration - Indexes written to Splunk; no more than 64 characters</p>
 * @method void setIndex(string $Index) Set <p>Advanced configuration - Indexes written to Splunk; no more than 64 characters</p>
 * @method string getChannel() Obtain <p>Advanced configuration - Channel.<br>To meet the limitation: If the indexer is enabled, then Channel is required.</p>
 * @method void setChannel(string $Channel) Set <p>Advanced configuration - Channel.<br>To meet the limitation: If the indexer is enabled, then Channel is required.</p>
 * @method string getDSLFilter() Obtain <p>Log pre-filtering - filter out original data before writing to Splunk</p>
 * @method void setDSLFilter(string $DSLFilter) Set <p>Log pre-filtering - filter out original data before writing to Splunk</p>
 * @method ExternalRole getExternalRole() Obtain <p>Advanced configuration - Cross-account delivery user role authorization information</p><p>For reference: <a href="https://console.cloud.tencent.com/cam/role/create?payloadType=account">Create custom role</a></p>
 * @method void setExternalRole(ExternalRole $ExternalRole) Set <p>Advanced configuration - Cross-account delivery user role authorization information</p><p>For reference: <a href="https://console.cloud.tencent.com/cam/role/create?payloadType=account">Create custom role</a></p>
 */
class CreateSplunkDeliverRequest extends AbstractModel
{
    /**
     * @var string <p>log topic id</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
     */
    public $TopicId;

    /**
     * @var string <p>The splunk delivery task name has the following restrictions: - Cannot be empty - Length not greater than 256 - Can only contain aA-zZ, underscore, -, 0-9</p>
     */
    public $Name;

    /**
     * @var NetInfo <p>Splunk delivery task - target configuration - network info</p>
     */
    public $NetInfo;

    /**
     * @var MetadataInfo <p>Splunk delivery task meta information</p>
     */
    public $MetadataInfo;

    /**
     * @var integer <p>Whether service logs are enabled 1: Disabled; 2: Enabled; Enabled by default</p>
     */
    public $HasServiceLog;

    /**
     * @var integer <p>Advanced configuration - Whether to enable the indexer; 1 - Disable; 2 - Enable;<br>Default: 1</p>
     */
    public $IndexAck;

    /**
     * @var string <p>Advanced configuration - data source; no more than 64 characters</p>
     */
    public $Source;

    /**
     * @var string <p>Advanced configuration - data source type; no more than 64 characters</p>
     */
    public $SourceType;

    /**
     * @var string <p>Advanced configuration - Indexes written to Splunk; no more than 64 characters</p>
     */
    public $Index;

    /**
     * @var string <p>Advanced configuration - Channel.<br>To meet the limitation: If the indexer is enabled, then Channel is required.</p>
     */
    public $Channel;

    /**
     * @var string <p>Log pre-filtering - filter out original data before writing to Splunk</p>
     */
    public $DSLFilter;

    /**
     * @var ExternalRole <p>Advanced configuration - Cross-account delivery user role authorization information</p><p>For reference: <a href="https://console.cloud.tencent.com/cam/role/create?payloadType=account">Create custom role</a></p>
     */
    public $ExternalRole;

    /**
     * @param string $TopicId <p>log topic id</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
     * @param string $Name <p>The splunk delivery task name has the following restrictions: - Cannot be empty - Length not greater than 256 - Can only contain aA-zZ, underscore, -, 0-9</p>
     * @param NetInfo $NetInfo <p>Splunk delivery task - target configuration - network info</p>
     * @param MetadataInfo $MetadataInfo <p>Splunk delivery task meta information</p>
     * @param integer $HasServiceLog <p>Whether service logs are enabled 1: Disabled; 2: Enabled; Enabled by default</p>
     * @param integer $IndexAck <p>Advanced configuration - Whether to enable the indexer; 1 - Disable; 2 - Enable;<br>Default: 1</p>
     * @param string $Source <p>Advanced configuration - data source; no more than 64 characters</p>
     * @param string $SourceType <p>Advanced configuration - data source type; no more than 64 characters</p>
     * @param string $Index <p>Advanced configuration - Indexes written to Splunk; no more than 64 characters</p>
     * @param string $Channel <p>Advanced configuration - Channel.<br>To meet the limitation: If the indexer is enabled, then Channel is required.</p>
     * @param string $DSLFilter <p>Log pre-filtering - filter out original data before writing to Splunk</p>
     * @param ExternalRole $ExternalRole <p>Advanced configuration - Cross-account delivery user role authorization information</p><p>For reference: <a href="https://console.cloud.tencent.com/cam/role/create?payloadType=account">Create custom role</a></p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NetInfo",$param) and $param["NetInfo"] !== null) {
            $this->NetInfo = new NetInfo();
            $this->NetInfo->deserialize($param["NetInfo"]);
        }

        if (array_key_exists("MetadataInfo",$param) and $param["MetadataInfo"] !== null) {
            $this->MetadataInfo = new MetadataInfo();
            $this->MetadataInfo->deserialize($param["MetadataInfo"]);
        }

        if (array_key_exists("HasServiceLog",$param) and $param["HasServiceLog"] !== null) {
            $this->HasServiceLog = $param["HasServiceLog"];
        }

        if (array_key_exists("IndexAck",$param) and $param["IndexAck"] !== null) {
            $this->IndexAck = $param["IndexAck"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("DSLFilter",$param) and $param["DSLFilter"] !== null) {
            $this->DSLFilter = $param["DSLFilter"];
        }

        if (array_key_exists("ExternalRole",$param) and $param["ExternalRole"] !== null) {
            $this->ExternalRole = new ExternalRole();
            $this->ExternalRole->deserialize($param["ExternalRole"]);
        }
    }
}
