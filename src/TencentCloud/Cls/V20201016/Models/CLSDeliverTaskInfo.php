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
 * Delivery task information across different accounts
 *
 * @method string getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID.</p>
 * @method string getTaskName() Obtain <p>Task name</p>
 * @method void setTaskName(string $TaskName) Set <p>Task name</p>
 * @method integer getUin() Obtain <p>Main account id</p>
 * @method void setUin(integer $Uin) Set <p>Main account id</p>
 * @method SourceTopicConfig getSourceTopicConfig() Obtain <p>Source topic information</p>
 * @method void setSourceTopicConfig(SourceTopicConfig $SourceTopicConfig) Set <p>Source topic information</p>
 * @method TargetTopicConfig getTargetTopicConfig() Obtain <p>Target topic information</p>
 * @method void setTargetTopicConfig(TargetTopicConfig $TargetTopicConfig) Set <p>Target topic information</p>
 * @method DeliverRule getDeliverRule() Obtain <p>Shipping Rule</p>
 * @method void setDeliverRule(DeliverRule $DeliverRule) Set <p>Shipping Rule</p>
 * @method integer getCompliance() Obtain <p>Compliance guarantee</p>
 * @method void setCompliance(integer $Compliance) Set <p>Compliance guarantee</p>
 * @method integer getStatus() Obtain <p>Task status.</p><p>Enumeration values: </p><ul><li>0: Running, </li><li>1: Paused, </li><li>2: Completed, </li><li>3: Exception.</li></ul>
 * @method void setStatus(integer $Status) Set <p>Task status.</p><p>Enumeration values: </p><ul><li>0: Running, </li><li>1: Paused, </li><li>2: Completed, </li><li>3: Exception.</li></ul>
 * @method integer getEnable() Obtain <p>Status.</p><p>Enumeration values: </p><ul><li>0: Running, </li><li>1: Suspended.</li></ul>
 * @method void setEnable(integer $Enable) Set <p>Status.</p><p>Enumeration values: </p><ul><li>0: Running, </li><li>1: Suspended.</li></ul>
 * @method integer getProgress() Obtain <p>Task progress percentage</p>
 * @method void setProgress(integer $Progress) Set <p>Task progress percentage</p>
 * @method integer getHasServicesLog() Obtain <p>Whether delivery service log is enabled.</p><p>Enumeration values:</p><ul><li>1: Disabled</li><li>2: Enabled</li></ul>
 * @method void setHasServicesLog(integer $HasServicesLog) Set <p>Whether delivery service log is enabled.</p><p>Enumeration values:</p><ul><li>1: Disabled</li><li>2: Enabled</li></ul>
 * @method integer getCreateTime() Obtain <p>Creation time.</p><p>Unit: unix second-level timestamp</p>
 * @method void setCreateTime(integer $CreateTime) Set <p>Creation time.</p><p>Unit: unix second-level timestamp</p>
 * @method integer getUpdateTime() Obtain <p>Update time</p><p>Unit: unix second-level timestamp</p>
 * @method void setUpdateTime(integer $UpdateTime) Set <p>Update time</p><p>Unit: unix second-level timestamp</p>
 */
class CLSDeliverTaskInfo extends AbstractModel
{
    /**
     * @var string <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Task name</p>
     */
    public $TaskName;

    /**
     * @var integer <p>Main account id</p>
     */
    public $Uin;

    /**
     * @var SourceTopicConfig <p>Source topic information</p>
     */
    public $SourceTopicConfig;

    /**
     * @var TargetTopicConfig <p>Target topic information</p>
     */
    public $TargetTopicConfig;

    /**
     * @var DeliverRule <p>Shipping Rule</p>
     */
    public $DeliverRule;

    /**
     * @var integer <p>Compliance guarantee</p>
     */
    public $Compliance;

    /**
     * @var integer <p>Task status.</p><p>Enumeration values: </p><ul><li>0: Running, </li><li>1: Paused, </li><li>2: Completed, </li><li>3: Exception.</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>Status.</p><p>Enumeration values: </p><ul><li>0: Running, </li><li>1: Suspended.</li></ul>
     */
    public $Enable;

    /**
     * @var integer <p>Task progress percentage</p>
     */
    public $Progress;

    /**
     * @var integer <p>Whether delivery service log is enabled.</p><p>Enumeration values:</p><ul><li>1: Disabled</li><li>2: Enabled</li></ul>
     */
    public $HasServicesLog;

    /**
     * @var integer <p>Creation time.</p><p>Unit: unix second-level timestamp</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Update time</p><p>Unit: unix second-level timestamp</p>
     */
    public $UpdateTime;

    /**
     * @param string $TaskId <p>Task ID.</p>
     * @param string $TaskName <p>Task name</p>
     * @param integer $Uin <p>Main account id</p>
     * @param SourceTopicConfig $SourceTopicConfig <p>Source topic information</p>
     * @param TargetTopicConfig $TargetTopicConfig <p>Target topic information</p>
     * @param DeliverRule $DeliverRule <p>Shipping Rule</p>
     * @param integer $Compliance <p>Compliance guarantee</p>
     * @param integer $Status <p>Task status.</p><p>Enumeration values: </p><ul><li>0: Running, </li><li>1: Paused, </li><li>2: Completed, </li><li>3: Exception.</li></ul>
     * @param integer $Enable <p>Status.</p><p>Enumeration values: </p><ul><li>0: Running, </li><li>1: Suspended.</li></ul>
     * @param integer $Progress <p>Task progress percentage</p>
     * @param integer $HasServicesLog <p>Whether delivery service log is enabled.</p><p>Enumeration values:</p><ul><li>1: Disabled</li><li>2: Enabled</li></ul>
     * @param integer $CreateTime <p>Creation time.</p><p>Unit: unix second-level timestamp</p>
     * @param integer $UpdateTime <p>Update time</p><p>Unit: unix second-level timestamp</p>
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SourceTopicConfig",$param) and $param["SourceTopicConfig"] !== null) {
            $this->SourceTopicConfig = new SourceTopicConfig();
            $this->SourceTopicConfig->deserialize($param["SourceTopicConfig"]);
        }

        if (array_key_exists("TargetTopicConfig",$param) and $param["TargetTopicConfig"] !== null) {
            $this->TargetTopicConfig = new TargetTopicConfig();
            $this->TargetTopicConfig->deserialize($param["TargetTopicConfig"]);
        }

        if (array_key_exists("DeliverRule",$param) and $param["DeliverRule"] !== null) {
            $this->DeliverRule = new DeliverRule();
            $this->DeliverRule->deserialize($param["DeliverRule"]);
        }

        if (array_key_exists("Compliance",$param) and $param["Compliance"] !== null) {
            $this->Compliance = $param["Compliance"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
