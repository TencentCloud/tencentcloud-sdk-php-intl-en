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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceLogToCLS request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
 * @method string getLogType() Obtain <p>Log type. Error: error log, slowlog: slow log.</p>
 * @method void setLogType(string $LogType) Set <p>Log type. Error: error log, slowlog: slow log.</p>
 * @method string getStatus() Obtain <p>Delivery status. ON: enabled, OFF: disabled.</p>
 * @method void setStatus(string $Status) Set <p>Delivery status. ON: enabled, OFF: disabled.</p>
 * @method boolean getCreateLogset() Obtain <p>Whether required to create logset. Default to false.</p>
 * @method void setCreateLogset(boolean $CreateLogset) Set <p>Whether required to create logset. Default to false.</p>
 * @method string getLogset() Obtain <p>Logset name when creating a logset; logset ID when selecting an existing logset. Empty by default.<br>Description: When the Status parameter is ON, either the Logset or LogTopic parameter must be filled.</p>
 * @method void setLogset(string $Logset) Set <p>Logset name when creating a logset; logset ID when selecting an existing logset. Empty by default.<br>Description: When the Status parameter is ON, either the Logset or LogTopic parameter must be filled.</p>
 * @method boolean getCreateLogTopic() Obtain <p>Whether required to create log topic. Default to false.</p>
 * @method void setCreateLogTopic(boolean $CreateLogTopic) Set <p>Whether required to create log topic. Default to false.</p>
 * @method string getLogTopic() Obtain <p>Enter a log topic name when creating a log topic, or enter a log topic ID when selecting an existing log topic. Empty by default.<br>Description: When the Status parameter is set to ON, either the Logset or LogTopic parameter must be specified.</p>
 * @method void setLogTopic(string $LogTopic) Set <p>Enter a log topic name when creating a log topic, or enter a log topic ID when selecting an existing log topic. Empty by default.<br>Description: When the Status parameter is set to ON, either the Logset or LogTopic parameter must be specified.</p>
 * @method integer getPeriod() Obtain <p>Valid period of the log topic. Default value: 30 days if left empty. Maximum value: 3600 days.</p>
 * @method void setPeriod(integer $Period) Set <p>Valid period of the log topic. Default value: 30 days if left empty. Maximum value: 3600 days.</p>
 * @method boolean getCreateIndex() Obtain <p>Whether to create an index when creating a log topic. Defaults to false.</p>
 * @method void setCreateIndex(boolean $CreateIndex) Set <p>Whether to create an index when creating a log topic. Defaults to false.</p>
 * @method string getClsRegion() Obtain <p>CLS region. If left empty, it defaults to the Region parameter value.</p>
 * @method void setClsRegion(string $ClsRegion) Set <p>CLS region. If left empty, it defaults to the Region parameter value.</p>
 * @method array getResourceTags() Obtain <p>Selectable when creating a log topic. Cannot exceed 10 tags</p>
 * @method void setResourceTags(array $ResourceTags) Set <p>Selectable when creating a log topic. Cannot exceed 10 tags</p>
 */
class ModifyDBInstanceLogToCLSRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Log type. Error: error log, slowlog: slow log.</p>
     */
    public $LogType;

    /**
     * @var string <p>Delivery status. ON: enabled, OFF: disabled.</p>
     */
    public $Status;

    /**
     * @var boolean <p>Whether required to create logset. Default to false.</p>
     */
    public $CreateLogset;

    /**
     * @var string <p>Logset name when creating a logset; logset ID when selecting an existing logset. Empty by default.<br>Description: When the Status parameter is ON, either the Logset or LogTopic parameter must be filled.</p>
     */
    public $Logset;

    /**
     * @var boolean <p>Whether required to create log topic. Default to false.</p>
     */
    public $CreateLogTopic;

    /**
     * @var string <p>Enter a log topic name when creating a log topic, or enter a log topic ID when selecting an existing log topic. Empty by default.<br>Description: When the Status parameter is set to ON, either the Logset or LogTopic parameter must be specified.</p>
     */
    public $LogTopic;

    /**
     * @var integer <p>Valid period of the log topic. Default value: 30 days if left empty. Maximum value: 3600 days.</p>
     */
    public $Period;

    /**
     * @var boolean <p>Whether to create an index when creating a log topic. Defaults to false.</p>
     */
    public $CreateIndex;

    /**
     * @var string <p>CLS region. If left empty, it defaults to the Region parameter value.</p>
     */
    public $ClsRegion;

    /**
     * @var array <p>Selectable when creating a log topic. Cannot exceed 10 tags</p>
     */
    public $ResourceTags;

    /**
     * @param string $InstanceId <p>Instance ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
     * @param string $LogType <p>Log type. Error: error log, slowlog: slow log.</p>
     * @param string $Status <p>Delivery status. ON: enabled, OFF: disabled.</p>
     * @param boolean $CreateLogset <p>Whether required to create logset. Default to false.</p>
     * @param string $Logset <p>Logset name when creating a logset; logset ID when selecting an existing logset. Empty by default.<br>Description: When the Status parameter is ON, either the Logset or LogTopic parameter must be filled.</p>
     * @param boolean $CreateLogTopic <p>Whether required to create log topic. Default to false.</p>
     * @param string $LogTopic <p>Enter a log topic name when creating a log topic, or enter a log topic ID when selecting an existing log topic. Empty by default.<br>Description: When the Status parameter is set to ON, either the Logset or LogTopic parameter must be specified.</p>
     * @param integer $Period <p>Valid period of the log topic. Default value: 30 days if left empty. Maximum value: 3600 days.</p>
     * @param boolean $CreateIndex <p>Whether to create an index when creating a log topic. Defaults to false.</p>
     * @param string $ClsRegion <p>CLS region. If left empty, it defaults to the Region parameter value.</p>
     * @param array $ResourceTags <p>Selectable when creating a log topic. Cannot exceed 10 tags</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateLogset",$param) and $param["CreateLogset"] !== null) {
            $this->CreateLogset = $param["CreateLogset"];
        }

        if (array_key_exists("Logset",$param) and $param["Logset"] !== null) {
            $this->Logset = $param["Logset"];
        }

        if (array_key_exists("CreateLogTopic",$param) and $param["CreateLogTopic"] !== null) {
            $this->CreateLogTopic = $param["CreateLogTopic"];
        }

        if (array_key_exists("LogTopic",$param) and $param["LogTopic"] !== null) {
            $this->LogTopic = $param["LogTopic"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("CreateIndex",$param) and $param["CreateIndex"] !== null) {
            $this->CreateIndex = $param["CreateIndex"];
        }

        if (array_key_exists("ClsRegion",$param) and $param["ClsRegion"] !== null) {
            $this->ClsRegion = $param["ClsRegion"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfoItem();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }
    }
}
