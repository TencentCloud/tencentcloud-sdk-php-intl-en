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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetInstanceLog request structure.
 *
 * @method string getProjectId() Obtain **Project ID**.
 * @method void setProjectId(string $ProjectId) Set **Project ID**.
 * @method string getInstanceKey() Obtain Unique identifier of an instance.
 * @method void setInstanceKey(string $InstanceKey) Set Unique identifier of an instance.
 * @method integer getLifeRoundNum() Obtain Instance lifetime number, which identifies one-time execution of the instance.

For example: the number of the first run of a periodic instance is 0. when the user reruns the instance later, the number of the second execution is 1.
 * @method void setLifeRoundNum(integer $LifeRoundNum) Set Instance lifetime number, which identifies one-time execution of the instance.

For example: the number of the first run of a periodic instance is 0. when the user reruns the instance later, the number of the second execution is 1.
 * @method string getScheduleTimeZone() Obtain Time zone.
Time zone. specifies the time zone. the default value is UTC+8.
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) Set Time zone.
Time zone. specifies the time zone. the default value is UTC+8.
 * @method string getBrokerIp() Obtain Indicates the Ip address of the executor where the log is located.
 * @method void setBrokerIp(string $BrokerIp) Set Indicates the Ip address of the executor where the log is located.
 * @method string getOriginFileName() Obtain Log file.
When executionJobId in instance details is empty but originFileName is not empty, originFileName and brokerIp must be included in the input parameters.
If both executionJobId and originFileName are empty, it indicates that the instance has not been dispatched for execution or has not generated logs. for example, branch node or merge node.
 * @method void setOriginFileName(string $OriginFileName) Set Log file.
When executionJobId in instance details is empty but originFileName is not empty, originFileName and brokerIp must be included in the input parameters.
If both executionJobId and originFileName are empty, it indicates that the instance has not been dispatched for execution or has not generated logs. for example, branch node or merge node.
 * @method string getExecutionJobId() Obtain **Execution ID**.

When executionJobId in instance details is not empty, executionJobId needs to be included in the input parameters. originFileName and brokerIp are not required parameters.
 * @method void setExecutionJobId(string $ExecutionJobId) Set **Execution ID**.

When executionJobId in instance details is not empty, executionJobId needs to be included in the input parameters. originFileName and brokerIp are not required parameters.
 * @method string getLogLevel() Obtain Log level.
Default All.

- Info
- Debug
- Warn
- Error
- All
 * @method void setLogLevel(string $LogLevel) Set Log level.
Default All.

- Info
- Debug
- Warn
- Error
- All
 * @method integer getStartLineNum() Obtain Start row number for obtaining logs.
The default is 1.
 * @method void setStartLineNum(integer $StartLineNum) Set Start row number for obtaining logs.
The default is 1.
 * @method integer getEndLineCount() Obtain End line number for obtaining logs.
The default value is 10000.
 * @method void setEndLineCount(integer $EndLineCount) Set End line number for obtaining logs.
The default value is 10000.
 * @method string getExtInfo() Obtain Used when performing a paging query for logs. it has no specific business meaning.

Specifies that the value is null for the first query. 
Use the ExtInfo field value in the returned information from the previous query for the second and subsequent queries.
 * @method void setExtInfo(string $ExtInfo) Set Used when performing a paging query for logs. it has no specific business meaning.

Specifies that the value is null for the first query. 
Use the ExtInfo field value in the returned information from the previous query for the second and subsequent queries.
 */
class GetInstanceLogRequest extends AbstractModel
{
    /**
     * @var string **Project ID**.
     */
    public $ProjectId;

    /**
     * @var string Unique identifier of an instance.
     */
    public $InstanceKey;

    /**
     * @var integer Instance lifetime number, which identifies one-time execution of the instance.

For example: the number of the first run of a periodic instance is 0. when the user reruns the instance later, the number of the second execution is 1.
     */
    public $LifeRoundNum;

    /**
     * @var string Time zone.
Time zone. specifies the time zone. the default value is UTC+8.
     */
    public $ScheduleTimeZone;

    /**
     * @var string Indicates the Ip address of the executor where the log is located.
     */
    public $BrokerIp;

    /**
     * @var string Log file.
When executionJobId in instance details is empty but originFileName is not empty, originFileName and brokerIp must be included in the input parameters.
If both executionJobId and originFileName are empty, it indicates that the instance has not been dispatched for execution or has not generated logs. for example, branch node or merge node.
     */
    public $OriginFileName;

    /**
     * @var string **Execution ID**.

When executionJobId in instance details is not empty, executionJobId needs to be included in the input parameters. originFileName and brokerIp are not required parameters.
     */
    public $ExecutionJobId;

    /**
     * @var string Log level.
Default All.

- Info
- Debug
- Warn
- Error
- All
     */
    public $LogLevel;

    /**
     * @var integer Start row number for obtaining logs.
The default is 1.
     */
    public $StartLineNum;

    /**
     * @var integer End line number for obtaining logs.
The default value is 10000.
     */
    public $EndLineCount;

    /**
     * @var string Used when performing a paging query for logs. it has no specific business meaning.

Specifies that the value is null for the first query. 
Use the ExtInfo field value in the returned information from the previous query for the second and subsequent queries.
     */
    public $ExtInfo;

    /**
     * @param string $ProjectId **Project ID**.
     * @param string $InstanceKey Unique identifier of an instance.
     * @param integer $LifeRoundNum Instance lifetime number, which identifies one-time execution of the instance.

For example: the number of the first run of a periodic instance is 0. when the user reruns the instance later, the number of the second execution is 1.
     * @param string $ScheduleTimeZone Time zone.
Time zone. specifies the time zone. the default value is UTC+8.
     * @param string $BrokerIp Indicates the Ip address of the executor where the log is located.
     * @param string $OriginFileName Log file.
When executionJobId in instance details is empty but originFileName is not empty, originFileName and brokerIp must be included in the input parameters.
If both executionJobId and originFileName are empty, it indicates that the instance has not been dispatched for execution or has not generated logs. for example, branch node or merge node.
     * @param string $ExecutionJobId **Execution ID**.

When executionJobId in instance details is not empty, executionJobId needs to be included in the input parameters. originFileName and brokerIp are not required parameters.
     * @param string $LogLevel Log level.
Default All.

- Info
- Debug
- Warn
- Error
- All
     * @param integer $StartLineNum Start row number for obtaining logs.
The default is 1.
     * @param integer $EndLineCount End line number for obtaining logs.
The default value is 10000.
     * @param string $ExtInfo Used when performing a paging query for logs. it has no specific business meaning.

Specifies that the value is null for the first query. 
Use the ExtInfo field value in the returned information from the previous query for the second and subsequent queries.
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

        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("LifeRoundNum",$param) and $param["LifeRoundNum"] !== null) {
            $this->LifeRoundNum = $param["LifeRoundNum"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("OriginFileName",$param) and $param["OriginFileName"] !== null) {
            $this->OriginFileName = $param["OriginFileName"];
        }

        if (array_key_exists("ExecutionJobId",$param) and $param["ExecutionJobId"] !== null) {
            $this->ExecutionJobId = $param["ExecutionJobId"];
        }

        if (array_key_exists("LogLevel",$param) and $param["LogLevel"] !== null) {
            $this->LogLevel = $param["LogLevel"];
        }

        if (array_key_exists("StartLineNum",$param) and $param["StartLineNum"] !== null) {
            $this->StartLineNum = $param["StartLineNum"];
        }

        if (array_key_exists("EndLineCount",$param) and $param["EndLineCount"] !== null) {
            $this->EndLineCount = $param["EndLineCount"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
