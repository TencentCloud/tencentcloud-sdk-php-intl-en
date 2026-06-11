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
 * ModifyScheduledSql request structure.
 *
 * @method string getTaskId() Obtain Task ID, which can be obtained through [scheduled SQL analysis task list](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1).
 * @method void setTaskId(string $TaskId) Set Task ID, which can be obtained through [scheduled SQL analysis task list](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1).
 * @method string getSrcTopicId() Obtain Source log topic. Search the [scheduled SQL analysis task list](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1) to obtain it.
 * @method void setSrcTopicId(string $SrcTopicId) Set Source log topic. Search the [scheduled SQL analysis task list](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1) to obtain it.
 * @method integer getEnableFlag() Obtain Task start status. 1: Enabled, 2: Disabled
 * @method void setEnableFlag(integer $EnableFlag) Set Task start status. 1: Enabled, 2: Disabled
 * @method ScheduledSqlResouceInfo getDstResource() Obtain Target log topic for scheduled SQL analysis
 * @method void setDstResource(ScheduledSqlResouceInfo $DstResource) Set Target log topic for scheduled SQL analysis
 * @method string getScheduledSqlContent() Obtain Queries statements
 * @method void setScheduledSqlContent(string $ScheduledSqlContent) Set Queries statements
 * @method integer getProcessPeriod() Obtain Scheduling cycle (minutes), 1-1440 minutes
 * @method void setProcessPeriod(integer $ProcessPeriod) Set Scheduling cycle (minutes), 1-1440 minutes
 * @method string getProcessTimeWindow() Obtain Time window for a single query. Example: last 15 minutes
 * @method void setProcessTimeWindow(string $ProcessTimeWindow) Set Time window for a single query. Example: last 15 minutes
 * @method integer getProcessDelay() Obtain Execution delay (seconds), 0-120 seconds, default 60
 * @method void setProcessDelay(integer $ProcessDelay) Set Execution delay (seconds), 0-120 seconds, default 60
 * @method string getSrcTopicRegion() Obtain Regional information of the source topicId. Supported regions are listed in the region list document (https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
 * @method void setSrcTopicRegion(string $SrcTopicRegion) Set Regional information of the source topicId. Supported regions are listed in the region list document (https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
 * @method string getName() Obtain Task name, 0-255 characters
 * @method void setName(string $Name) Set Task name, 0-255 characters
 * @method integer getSyntaxRule() Obtain Syntax rules. Default value: 0. 0: Lucene syntax, 1: CQL syntax
 * @method void setSyntaxRule(integer $SyntaxRule) Set Syntax rules. Default value: 0. 0: Lucene syntax, 1: CQL syntax
 */
class ModifyScheduledSqlRequest extends AbstractModel
{
    /**
     * @var string Task ID, which can be obtained through [scheduled SQL analysis task list](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1).
     */
    public $TaskId;

    /**
     * @var string Source log topic. Search the [scheduled SQL analysis task list](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1) to obtain it.
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
     * @var integer Scheduling cycle (minutes), 1-1440 minutes
     */
    public $ProcessPeriod;

    /**
     * @var string Time window for a single query. Example: last 15 minutes
     */
    public $ProcessTimeWindow;

    /**
     * @var integer Execution delay (seconds), 0-120 seconds, default 60
     */
    public $ProcessDelay;

    /**
     * @var string Regional information of the source topicId. Supported regions are listed in the region list document (https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
     */
    public $SrcTopicRegion;

    /**
     * @var string Task name, 0-255 characters
     */
    public $Name;

    /**
     * @var integer Syntax rules. Default value: 0. 0: Lucene syntax, 1: CQL syntax
     */
    public $SyntaxRule;

    /**
     * @param string $TaskId Task ID, which can be obtained through [scheduled SQL analysis task list](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1).
     * @param string $SrcTopicId Source log topic. Search the [scheduled SQL analysis task list](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1) to obtain it.
     * @param integer $EnableFlag Task start status. 1: Enabled, 2: Disabled
     * @param ScheduledSqlResouceInfo $DstResource Target log topic for scheduled SQL analysis
     * @param string $ScheduledSqlContent Queries statements
     * @param integer $ProcessPeriod Scheduling cycle (minutes), 1-1440 minutes
     * @param string $ProcessTimeWindow Time window for a single query. Example: last 15 minutes
     * @param integer $ProcessDelay Execution delay (seconds), 0-120 seconds, default 60
     * @param string $SrcTopicRegion Regional information of the source topicId. Supported regions are listed in the region list document (https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
     * @param string $Name Task name, 0-255 characters
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
