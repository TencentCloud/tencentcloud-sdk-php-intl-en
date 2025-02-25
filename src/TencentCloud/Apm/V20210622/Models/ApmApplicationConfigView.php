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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application-Related configuration list items.
 *
 * @method string getInstanceKey() Obtain Business system id.
 * @method void setInstanceKey(string $InstanceKey) Set Business system id.
 * @method string getServiceName() Obtain Application name	.	
 * @method void setServiceName(string $ServiceName) Set Application name	.	
 * @method string getOperationNameFilter() Obtain API filtering.
 * @method void setOperationNameFilter(string $OperationNameFilter) Set API filtering.
 * @method string getExceptionFilter() Obtain Error type filtering.
 * @method void setExceptionFilter(string $ExceptionFilter) Set Error type filtering.
 * @method string getErrorCodeFilter() Obtain HTTP status code filtering.
 * @method void setErrorCodeFilter(string $ErrorCodeFilter) Set HTTP status code filtering.
 * @method boolean getEventEnable() Obtain Application diagnosis switch (deprecated).
 * @method void setEventEnable(boolean $EventEnable) Set Application diagnosis switch (deprecated).
 * @method integer getUrlConvergenceSwitch() Obtain URL convergence switch. 0: off; 1: on.
 * @method void setUrlConvergenceSwitch(integer $UrlConvergenceSwitch) Set URL convergence switch. 0: off; 1: on.
 * @method integer getUrlConvergenceThreshold() Obtain URL convergence threshold.	
 * @method void setUrlConvergenceThreshold(integer $UrlConvergenceThreshold) Set URL convergence threshold.	
 * @method string getUrlConvergence() Obtain URL convergence rule in the form of a regular expression.	
 * @method void setUrlConvergence(string $UrlConvergence) Set URL convergence rule in the form of a regular expression.	
 * @method string getUrlExclude() Obtain URL exclusion rule in the form of a regular expression.
 * @method void setUrlExclude(string $UrlExclude) Set URL exclusion rule in the form of a regular expression.
 * @method integer getIsRelatedLog() Obtain Log feature switch. 0: off; 1: on.
 * @method void setIsRelatedLog(integer $IsRelatedLog) Set Log feature switch. 0: off; 1: on.
 * @method string getLogSource() Obtain Log source.	
 * @method void setLogSource(string $LogSource) Set Log source.	
 * @method string getLogSet() Obtain Log set. 
 * @method void setLogSet(string $LogSet) Set Log set. 
 * @method string getLogTopicID() Obtain Log topic.
 * @method void setLogTopicID(string $LogTopicID) Set Log topic.
 * @method boolean getSnapshotEnable() Obtain Method stack snapshot switch: true to enable, false to disable.
 * @method void setSnapshotEnable(boolean $SnapshotEnable) Set Method stack snapshot switch: true to enable, false to disable.
 * @method integer getSnapshotTimeout() Obtain Slow call listening trigger threshold.
 * @method void setSnapshotTimeout(integer $SnapshotTimeout) Set Slow call listening trigger threshold.
 * @method boolean getAgentEnable() Obtain Probe master switch.
 * @method void setAgentEnable(boolean $AgentEnable) Set Probe master switch.
 * @method array getInstrumentList() Obtain Component list switch (deprecated).
 * @method void setInstrumentList(array $InstrumentList) Set Component list switch (deprecated).
 * @method boolean getTraceSquash() Obtain Link compression switch (deprecated).
 * @method void setTraceSquash(boolean $TraceSquash) Set Link compression switch (deprecated).
 */
class ApmApplicationConfigView extends AbstractModel
{
    /**
     * @var string Business system id.
     */
    public $InstanceKey;

    /**
     * @var string Application name	.	
     */
    public $ServiceName;

    /**
     * @var string API filtering.
     */
    public $OperationNameFilter;

    /**
     * @var string Error type filtering.
     */
    public $ExceptionFilter;

    /**
     * @var string HTTP status code filtering.
     */
    public $ErrorCodeFilter;

    /**
     * @var boolean Application diagnosis switch (deprecated).
     */
    public $EventEnable;

    /**
     * @var integer URL convergence switch. 0: off; 1: on.
     */
    public $UrlConvergenceSwitch;

    /**
     * @var integer URL convergence threshold.	
     */
    public $UrlConvergenceThreshold;

    /**
     * @var string URL convergence rule in the form of a regular expression.	
     */
    public $UrlConvergence;

    /**
     * @var string URL exclusion rule in the form of a regular expression.
     */
    public $UrlExclude;

    /**
     * @var integer Log feature switch. 0: off; 1: on.
     */
    public $IsRelatedLog;

    /**
     * @var string Log source.	
     */
    public $LogSource;

    /**
     * @var string Log set. 
     */
    public $LogSet;

    /**
     * @var string Log topic.
     */
    public $LogTopicID;

    /**
     * @var boolean Method stack snapshot switch: true to enable, false to disable.
     */
    public $SnapshotEnable;

    /**
     * @var integer Slow call listening trigger threshold.
     */
    public $SnapshotTimeout;

    /**
     * @var boolean Probe master switch.
     */
    public $AgentEnable;

    /**
     * @var array Component list switch (deprecated).
     */
    public $InstrumentList;

    /**
     * @var boolean Link compression switch (deprecated).
     */
    public $TraceSquash;

    /**
     * @param string $InstanceKey Business system id.
     * @param string $ServiceName Application name	.	
     * @param string $OperationNameFilter API filtering.
     * @param string $ExceptionFilter Error type filtering.
     * @param string $ErrorCodeFilter HTTP status code filtering.
     * @param boolean $EventEnable Application diagnosis switch (deprecated).
     * @param integer $UrlConvergenceSwitch URL convergence switch. 0: off; 1: on.
     * @param integer $UrlConvergenceThreshold URL convergence threshold.	
     * @param string $UrlConvergence URL convergence rule in the form of a regular expression.	
     * @param string $UrlExclude URL exclusion rule in the form of a regular expression.
     * @param integer $IsRelatedLog Log feature switch. 0: off; 1: on.
     * @param string $LogSource Log source.	
     * @param string $LogSet Log set. 
     * @param string $LogTopicID Log topic.
     * @param boolean $SnapshotEnable Method stack snapshot switch: true to enable, false to disable.
     * @param integer $SnapshotTimeout Slow call listening trigger threshold.
     * @param boolean $AgentEnable Probe master switch.
     * @param array $InstrumentList Component list switch (deprecated).
     * @param boolean $TraceSquash Link compression switch (deprecated).
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
        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("OperationNameFilter",$param) and $param["OperationNameFilter"] !== null) {
            $this->OperationNameFilter = $param["OperationNameFilter"];
        }

        if (array_key_exists("ExceptionFilter",$param) and $param["ExceptionFilter"] !== null) {
            $this->ExceptionFilter = $param["ExceptionFilter"];
        }

        if (array_key_exists("ErrorCodeFilter",$param) and $param["ErrorCodeFilter"] !== null) {
            $this->ErrorCodeFilter = $param["ErrorCodeFilter"];
        }

        if (array_key_exists("EventEnable",$param) and $param["EventEnable"] !== null) {
            $this->EventEnable = $param["EventEnable"];
        }

        if (array_key_exists("UrlConvergenceSwitch",$param) and $param["UrlConvergenceSwitch"] !== null) {
            $this->UrlConvergenceSwitch = $param["UrlConvergenceSwitch"];
        }

        if (array_key_exists("UrlConvergenceThreshold",$param) and $param["UrlConvergenceThreshold"] !== null) {
            $this->UrlConvergenceThreshold = $param["UrlConvergenceThreshold"];
        }

        if (array_key_exists("UrlConvergence",$param) and $param["UrlConvergence"] !== null) {
            $this->UrlConvergence = $param["UrlConvergence"];
        }

        if (array_key_exists("UrlExclude",$param) and $param["UrlExclude"] !== null) {
            $this->UrlExclude = $param["UrlExclude"];
        }

        if (array_key_exists("IsRelatedLog",$param) and $param["IsRelatedLog"] !== null) {
            $this->IsRelatedLog = $param["IsRelatedLog"];
        }

        if (array_key_exists("LogSource",$param) and $param["LogSource"] !== null) {
            $this->LogSource = $param["LogSource"];
        }

        if (array_key_exists("LogSet",$param) and $param["LogSet"] !== null) {
            $this->LogSet = $param["LogSet"];
        }

        if (array_key_exists("LogTopicID",$param) and $param["LogTopicID"] !== null) {
            $this->LogTopicID = $param["LogTopicID"];
        }

        if (array_key_exists("SnapshotEnable",$param) and $param["SnapshotEnable"] !== null) {
            $this->SnapshotEnable = $param["SnapshotEnable"];
        }

        if (array_key_exists("SnapshotTimeout",$param) and $param["SnapshotTimeout"] !== null) {
            $this->SnapshotTimeout = $param["SnapshotTimeout"];
        }

        if (array_key_exists("AgentEnable",$param) and $param["AgentEnable"] !== null) {
            $this->AgentEnable = $param["AgentEnable"];
        }

        if (array_key_exists("InstrumentList",$param) and $param["InstrumentList"] !== null) {
            $this->InstrumentList = [];
            foreach ($param["InstrumentList"] as $key => $value){
                $obj = new Instrument();
                $obj->deserialize($value);
                array_push($this->InstrumentList, $obj);
            }
        }

        if (array_key_exists("TraceSquash",$param) and $param["TraceSquash"] !== null) {
            $this->TraceSquash = $param["TraceSquash"];
        }
    }
}
