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
 * ModifyScheduledSql request structure.
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getSrcTopicId() Obtain Source log topic
 * @method void setSrcTopicId(string $SrcTopicId) Set Source log topic
 * @method integer getEnableFlag() Obtain Task start status. 1: Enabled, 2: Disabled
 * @method void setEnableFlag(integer $EnableFlag) Set Task start status. 1: Enabled, 2: Disabled
 * @method ScheduledSqlResouceInfo getDstResource() Obtain Target log topic for scheduled SQL analysis
 * @method void setDstResource(ScheduledSqlResouceInfo $DstResource) Set Target log topic for scheduled SQL analysis
 * @method string getScheduledSqlContent() Obtain Queries statements
 * @method void setScheduledSqlContent(string $ScheduledSqlContent) Set Queries statements
 * @method integer getProcessPeriod() Obtain Scheduling interval (minutes)
 * @method void setProcessPeriod(integer $ProcessPeriod) Set Scheduling interval (minutes)
 * @method string getProcessTimeWindow() Obtain Time window for a single query. Example: last 15 minutes
 * @method void setProcessTimeWindow(string $ProcessTimeWindow) Set Time window for a single query. Example: last 15 minutes
 * @method integer getProcessDelay() Obtain Execution delay (seconds)
 * @method void setProcessDelay(integer $ProcessDelay) Set Execution delay (seconds)
 * @method string getSrcTopicRegion() Obtain Region information of source topic ID 
 * @method void setSrcTopicRegion(string $SrcTopicRegion) Set Region information of source topic ID 
 * @method string getName() Obtain Task Name
 * @method void setName(string $Name) Set Task Name
 * @method integer getSyntaxRule() Obtain Syntax rules. Default value: 0. 0: Lucene syntax, 1: CQL syntax
 * @method void setSyntaxRule(integer $SyntaxRule) Set Syntax rules. Default value: 0. 0: Lucene syntax, 1: CQL syntax
 */
class ModifyScheduledSqlRequest extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Source log topic
     */
    public $SrcTopicId;

    /**
     * @var integer Task start status. 1: Enabled, 2: Disabled
     */
    public $EnableFlag;

    /**
     * @var ScheduledSqlResouceInfo Target log topic for scheduled SQL analysis
     */
    public $DstResource;

    /**
     * @var string Queries statements
     */
    public $ScheduledSqlContent;

    /**
     * @var integer Scheduling interval (minutes)
     */
    public $ProcessPeriod;

    /**
     * @var string Time window for a single query. Example: last 15 minutes
     */
    public $ProcessTimeWindow;

    /**
     * @var integer Execution delay (seconds)
     */
    public $ProcessDelay;

    /**
     * @var string Region information of source topic ID 
     */
    public $SrcTopicRegion;

    /**
     * @var string Task Name
     */
    public $Name;

    /**
     * @var integer Syntax rules. Default value: 0. 0: Lucene syntax, 1: CQL syntax
     */
    public $SyntaxRule;

    /**
     * @param string $TaskId Task ID
     * @param string $SrcTopicId Source log topic
     * @param integer $EnableFlag Task start status. 1: Enabled, 2: Disabled
     * @param ScheduledSqlResouceInfo $DstResource Target log topic for scheduled SQL analysis
     * @param string $ScheduledSqlContent Queries statements
     * @param integer $ProcessPeriod Scheduling interval (minutes)
     * @param string $ProcessTimeWindow Time window for a single query. Example: last 15 minutes
     * @param integer $ProcessDelay Execution delay (seconds)
     * @param string $SrcTopicRegion Region information of source topic ID 
     * @param string $Name Task Name
     * @param integer $SyntaxRule Syntax rules. Default value: 0. 0: Lucene syntax, 1: CQL syntax
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

        if (array_key_exists("SrcTopicId",$param) and $param["SrcTopicId"] !== null) {
            $this->SrcTopicId = $param["SrcTopicId"];
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
        }

        if (array_key_exists("DstResource",$param) and $param["DstResource"] !== null) {
            $this->DstResource = new ScheduledSqlResouceInfo();
            $this->DstResource->deserialize($param["DstResource"]);
        }

        if (array_key_exists("ScheduledSqlContent",$param) and $param["ScheduledSqlContent"] !== null) {
            $this->ScheduledSqlContent = $param["ScheduledSqlContent"];
        }

        if (array_key_exists("ProcessPeriod",$param) and $param["ProcessPeriod"] !== null) {
            $this->ProcessPeriod = $param["ProcessPeriod"];
        }

        if (array_key_exists("ProcessTimeWindow",$param) and $param["ProcessTimeWindow"] !== null) {
            $this->ProcessTimeWindow = $param["ProcessTimeWindow"];
        }

        if (array_key_exists("ProcessDelay",$param) and $param["ProcessDelay"] !== null) {
            $this->ProcessDelay = $param["ProcessDelay"];
        }

        if (array_key_exists("SrcTopicRegion",$param) and $param["SrcTopicRegion"] !== null) {
            $this->SrcTopicRegion = $param["SrcTopicRegion"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SyntaxRule",$param) and $param["SyntaxRule"] !== null) {
            $this->SyntaxRule = $param["SyntaxRule"];
        }
    }
}
