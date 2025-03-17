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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSampleLogs request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getScenarioId() Obtain Scenario ID.
 * @method void setScenarioId(string $ScenarioId) Set Scenario ID.
 * @method string getJobId() Obtain Job ID.
 * @method void setJobId(string $JobId) Set Job ID.
 * @method string getContext() Obtain Context is used when loading more logs. Pass through the Context value returned last time to retrieve subsequent log content. The expiration time is 1 hour.
 * @method void setContext(string $Context) Set Context is used when loading more logs. Pass through the Context value returned last time to retrieve subsequent log content. The expiration time is 1 hour.
 * @method string getFrom() Obtain Log start time.
 * @method void setFrom(string $From) Set Log start time.
 * @method string getTo() Obtain Log end time.
 * @method void setTo(string $To) Set Log end time.
 * @method string getSeverityText() Obtain Log levels, such as debug, info, error.
 * @method void setSeverityText(string $SeverityText) Set Log levels, such as debug, info, error.
 * @method string getInstanceRegion() Obtain Region of pressure engine instance, such as ap-shanghai, ap-guangzhou.
 * @method void setInstanceRegion(string $InstanceRegion) Set Region of pressure engine instance, such as ap-shanghai, ap-guangzhou.
 * @method string getInstance() Obtain IP of pressure engine instance.
 * @method void setInstance(string $Instance) Set IP of pressure engine instance.
 * @method string getLogType() Obtain Type of log, can be left empty. 'Request' represents sampling logs.
 * @method void setLogType(string $LogType) Set Type of log, can be left empty. 'Request' represents sampling logs.
 * @method integer getLimit() Obtain Number of returned logs, maximum 100.
 * @method void setLimit(integer $Limit) Set Number of returned logs, maximum 100.
 * @method ReactionTimeRange getReactionTimeRange() Obtain Response time range of sampling logs.
 * @method void setReactionTimeRange(ReactionTimeRange $ReactionTimeRange) Set Response time range of sampling logs.
 * @method string getStatus() Obtain Status code of sampling logs.
 * @method void setStatus(string $Status) Set Status code of sampling logs.
 * @method string getResult() Obtain Result code of sampling logs.
 * @method void setResult(string $Result) Set Result code of sampling logs.
 * @method string getMethod() Obtain Request method of sampling logs.
 * @method void setMethod(string $Method) Set Request method of sampling logs.
 * @method string getService() Obtain Request service of sampling logs.
 * @method void setService(string $Service) Set Request service of sampling logs.
 */
class DescribeSampleLogsRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Scenario ID.
     */
    public $ScenarioId;

    /**
     * @var string Job ID.
     */
    public $JobId;

    /**
     * @var string Context is used when loading more logs. Pass through the Context value returned last time to retrieve subsequent log content. The expiration time is 1 hour.
     */
    public $Context;

    /**
     * @var string Log start time.
     */
    public $From;

    /**
     * @var string Log end time.
     */
    public $To;

    /**
     * @var string Log levels, such as debug, info, error.
     */
    public $SeverityText;

    /**
     * @var string Region of pressure engine instance, such as ap-shanghai, ap-guangzhou.
     */
    public $InstanceRegion;

    /**
     * @var string IP of pressure engine instance.
     */
    public $Instance;

    /**
     * @var string Type of log, can be left empty. 'Request' represents sampling logs.
     */
    public $LogType;

    /**
     * @var integer Number of returned logs, maximum 100.
     */
    public $Limit;

    /**
     * @var ReactionTimeRange Response time range of sampling logs.
     */
    public $ReactionTimeRange;

    /**
     * @var string Status code of sampling logs.
     */
    public $Status;

    /**
     * @var string Result code of sampling logs.
     */
    public $Result;

    /**
     * @var string Request method of sampling logs.
     */
    public $Method;

    /**
     * @var string Request service of sampling logs.
     */
    public $Service;

    /**
     * @param string $ProjectId Project ID.
     * @param string $ScenarioId Scenario ID.
     * @param string $JobId Job ID.
     * @param string $Context Context is used when loading more logs. Pass through the Context value returned last time to retrieve subsequent log content. The expiration time is 1 hour.
     * @param string $From Log start time.
     * @param string $To Log end time.
     * @param string $SeverityText Log levels, such as debug, info, error.
     * @param string $InstanceRegion Region of pressure engine instance, such as ap-shanghai, ap-guangzhou.
     * @param string $Instance IP of pressure engine instance.
     * @param string $LogType Type of log, can be left empty. 'Request' represents sampling logs.
     * @param integer $Limit Number of returned logs, maximum 100.
     * @param ReactionTimeRange $ReactionTimeRange Response time range of sampling logs.
     * @param string $Status Status code of sampling logs.
     * @param string $Result Result code of sampling logs.
     * @param string $Method Request method of sampling logs.
     * @param string $Service Request service of sampling logs.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("SeverityText",$param) and $param["SeverityText"] !== null) {
            $this->SeverityText = $param["SeverityText"];
        }

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = $param["Instance"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ReactionTimeRange",$param) and $param["ReactionTimeRange"] !== null) {
            $this->ReactionTimeRange = new ReactionTimeRange();
            $this->ReactionTimeRange->deserialize($param["ReactionTimeRange"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }
    }
}
