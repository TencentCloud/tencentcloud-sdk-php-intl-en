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
 * Delivery task information of Splunk
 *
 * @method string getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID.</p>
 * @method string getName() Obtain <p>Task Name</p>
 * @method void setName(string $Name) Set <p>Task Name</p>
 * @method integer getUin() Obtain <p>User id</p>
 * @method void setUin(integer $Uin) Set <p>User id</p>
 * @method string getTopicId() Obtain <p>Log topic id</p>
 * @method void setTopicId(string $TopicId) Set <p>Log topic id</p>
 * @method integer getStatus() Obtain <p>Task status; 1. Running; 2. Suspended; 3. Exception</p>
 * @method void setStatus(integer $Status) Set <p>Task status; 1. Running; 2. Suspended; 3. Exception</p>
 * @method integer getEnable() Obtain <p>Enable status; 0: Disabled; 1: Enabled</p>
 * @method void setEnable(integer $Enable) Set <p>Enable status; 0: Disabled; 1: Enabled</p>
 * @method integer getCreateTime() Obtain <p>Creation time; unit: second</p>
 * @method void setCreateTime(integer $CreateTime) Set <p>Creation time; unit: second</p>
 * @method integer getUpdateTime() Obtain <p>Update time; Unit: seconds</p>
 * @method void setUpdateTime(integer $UpdateTime) Set <p>Update time; Unit: seconds</p>
 * @method NetInfo getNetInfo() Obtain <p>splunk delivery task - target configuration</p>
 * @method void setNetInfo(NetInfo $NetInfo) Set <p>splunk delivery task - target configuration</p>
 * @method MetadataInfo getMetadata() Obtain <p>splunk delivery task meta-information</p>
 * @method void setMetadata(MetadataInfo $Metadata) Set <p>splunk delivery task meta-information</p>
 * @method integer getHasServiceLog() Obtain <p>Whether to enable service logs; 1: disable; 2: enable</p>
 * @method void setHasServiceLog(integer $HasServiceLog) Set <p>Whether to enable service logs; 1: disable; 2: enable</p>
 * @method string getSource() Obtain <p>Advanced configuration - data source;</p>
 * @method void setSource(string $Source) Set <p>Advanced configuration - data source;</p>
 * @method string getSourceType() Obtain <p>Advanced configuration - data source type;</p>
 * @method void setSourceType(string $SourceType) Set <p>Advanced configuration - data source type;</p>
 * @method string getIndex() Obtain <p>Advanced configuration - Splunk write indexes</p>
 * @method void setIndex(string $Index) Set <p>Advanced configuration - Splunk write indexes</p>
 * @method integer getIndexAck() Obtain <p>Advanced configuration - Whether to enable indexer; 1 - not enabled; 2 - enable;</p>
 * @method void setIndexAck(integer $IndexAck) Set <p>Advanced configuration - Whether to enable indexer; 1 - not enabled; 2 - enable;</p>
 * @method string getChannel() Obtain <p>Advanced configuration - Channel</p>
 * @method void setChannel(string $Channel) Set <p>Advanced configuration - Channel</p>
 * @method string getDSLFilter() Obtain <p>Pre-filtering process - perform pre-filtering statements on original data written to Splunk</p>
 * @method void setDSLFilter(string $DSLFilter) Set <p>Pre-filtering process - perform pre-filtering statements on original data written to Splunk</p>
 * @method ExternalRole getExternalRole() Obtain <p>Advanced configuration - Cross-account delivery parameter</p>
 * @method void setExternalRole(ExternalRole $ExternalRole) Set <p>Advanced configuration - Cross-account delivery parameter</p>
 */
class SplunkDeliverInfo extends AbstractModel
{
    /**
     * @var string <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Task Name</p>
     */
    public $Name;

    /**
     * @var integer <p>User id</p>
     */
    public $Uin;

    /**
     * @var string <p>Log topic id</p>
     */
    public $TopicId;

    /**
     * @var integer <p>Task status; 1. Running; 2. Suspended; 3. Exception</p>
     */
    public $Status;

    /**
     * @var integer <p>Enable status; 0: Disabled; 1: Enabled</p>
     */
    public $Enable;

    /**
     * @var integer <p>Creation time; unit: second</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Update time; Unit: seconds</p>
     */
    public $UpdateTime;

    /**
     * @var NetInfo <p>splunk delivery task - target configuration</p>
     */
    public $NetInfo;

    /**
     * @var MetadataInfo <p>splunk delivery task meta-information</p>
     */
    public $Metadata;

    /**
     * @var integer <p>Whether to enable service logs; 1: disable; 2: enable</p>
     */
    public $HasServiceLog;

    /**
     * @var string <p>Advanced configuration - data source;</p>
     */
    public $Source;

    /**
     * @var string <p>Advanced configuration - data source type;</p>
     */
    public $SourceType;

    /**
     * @var string <p>Advanced configuration - Splunk write indexes</p>
     */
    public $Index;

    /**
     * @var integer <p>Advanced configuration - Whether to enable indexer; 1 - not enabled; 2 - enable;</p>
     */
    public $IndexAck;

    /**
     * @var string <p>Advanced configuration - Channel</p>
     */
    public $Channel;

    /**
     * @var string <p>Pre-filtering process - perform pre-filtering statements on original data written to Splunk</p>
     */
    public $DSLFilter;

    /**
     * @var ExternalRole <p>Advanced configuration - Cross-account delivery parameter</p>
     */
    public $ExternalRole;

    /**
     * @param string $TaskId <p>Task ID.</p>
     * @param string $Name <p>Task Name</p>
     * @param integer $Uin <p>User id</p>
     * @param string $TopicId <p>Log topic id</p>
     * @param integer $Status <p>Task status; 1. Running; 2. Suspended; 3. Exception</p>
     * @param integer $Enable <p>Enable status; 0: Disabled; 1: Enabled</p>
     * @param integer $CreateTime <p>Creation time; unit: second</p>
     * @param integer $UpdateTime <p>Update time; Unit: seconds</p>
     * @param NetInfo $NetInfo <p>splunk delivery task - target configuration</p>
     * @param MetadataInfo $Metadata <p>splunk delivery task meta-information</p>
     * @param integer $HasServiceLog <p>Whether to enable service logs; 1: disable; 2: enable</p>
     * @param string $Source <p>Advanced configuration - data source;</p>
     * @param string $SourceType <p>Advanced configuration - data source type;</p>
     * @param string $Index <p>Advanced configuration - Splunk write indexes</p>
     * @param integer $IndexAck <p>Advanced configuration - Whether to enable indexer; 1 - not enabled; 2 - enable;</p>
     * @param string $Channel <p>Advanced configuration - Channel</p>
     * @param string $DSLFilter <p>Pre-filtering process - perform pre-filtering statements on original data written to Splunk</p>
     * @param ExternalRole $ExternalRole <p>Advanced configuration - Cross-account delivery parameter</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
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

        if (array_key_exists("NetInfo",$param) and $param["NetInfo"] !== null) {
            $this->NetInfo = new NetInfo();
            $this->NetInfo->deserialize($param["NetInfo"]);
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new MetadataInfo();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("HasServiceLog",$param) and $param["HasServiceLog"] !== null) {
            $this->HasServiceLog = $param["HasServiceLog"];
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

        if (array_key_exists("IndexAck",$param) and $param["IndexAck"] !== null) {
            $this->IndexAck = $param["IndexAck"];
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
