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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceLogToCLS request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getLogType() Obtain Log type. Valid values: error and slowLog.
 * @method void setLogType(string $LogType) Set Log type. Valid values: error and slowLog.
 * @method string getStatus() Obtain Enabling status. Valid values: ON and OFF.
 * @method void setStatus(string $Status) Set Enabling status. Valid values: ON and OFF.
 * @method boolean getCreateLogset() Obtain Indicates whether a log set needs to be created.
 * @method void setCreateLogset(boolean $CreateLogset) Set Indicates whether a log set needs to be created.
 * @method string getLogset() Obtain Log set name if the log set is to be created or ID of the selected existing log set.
 * @method void setLogset(string $Logset) Set Log set name if the log set is to be created or ID of the selected existing log set.
 * @method boolean getCreateLogTopic() Obtain Indicates whether a log topic needs to be created.
 * @method void setCreateLogTopic(boolean $CreateLogTopic) Set Indicates whether a log topic needs to be created.
 * @method string getLogTopic() Obtain Log topic name if the topic is to be created or ID of the selected existing topic.
 * @method void setLogTopic(string $LogTopic) Set Log topic name if the topic is to be created or ID of the selected existing topic.
 * @method integer getPeriod() Obtain Log topic validity period, which is 30 days by default if not specified.
 * @method void setPeriod(integer $Period) Set Log topic validity period, which is 30 days by default if not specified.
 * @method boolean getCreateIndex() Obtain Indicates whether to create an index when creating the log topic.
 * @method void setCreateIndex(boolean $CreateIndex) Set Indicates whether to create an index when creating the log topic.
 */
class ModifyDBInstanceLogToCLSRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Log type. Valid values: error and slowLog.
     */
    public $LogType;

    /**
     * @var string Enabling status. Valid values: ON and OFF.
     */
    public $Status;

    /**
     * @var boolean Indicates whether a log set needs to be created.
     */
    public $CreateLogset;

    /**
     * @var string Log set name if the log set is to be created or ID of the selected existing log set.
     */
    public $Logset;

    /**
     * @var boolean Indicates whether a log topic needs to be created.
     */
    public $CreateLogTopic;

    /**
     * @var string Log topic name if the topic is to be created or ID of the selected existing topic.
     */
    public $LogTopic;

    /**
     * @var integer Log topic validity period, which is 30 days by default if not specified.
     */
    public $Period;

    /**
     * @var boolean Indicates whether to create an index when creating the log topic.
     */
    public $CreateIndex;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $LogType Log type. Valid values: error and slowLog.
     * @param string $Status Enabling status. Valid values: ON and OFF.
     * @param boolean $CreateLogset Indicates whether a log set needs to be created.
     * @param string $Logset Log set name if the log set is to be created or ID of the selected existing log set.
     * @param boolean $CreateLogTopic Indicates whether a log topic needs to be created.
     * @param string $LogTopic Log topic name if the topic is to be created or ID of the selected existing topic.
     * @param integer $Period Log topic validity period, which is 30 days by default if not specified.
     * @param boolean $CreateIndex Indicates whether to create an index when creating the log topic.
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
    }
}
