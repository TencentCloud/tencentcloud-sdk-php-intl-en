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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSparkSessionBatchSQL request structure.
 *
 * @method string getDataEngineName() Obtain The name of the engine for executing the Spark job.
 * @method void setDataEngineName(string $DataEngineName) Set The name of the engine for executing the Spark job.
 * @method string getExecuteSQL() Obtain Run SQL. The base64 encoding is needed.
 * @method void setExecuteSQL(string $ExecuteSQL) Set Run SQL. The base64 encoding is needed.
 * @method string getDriverSize() Obtain The driver size. Valid values: `small` (default, 1 CU), `medium` (2 CUs), `large` (4 CUs), and `xlarge` (8 CUs).
 * @method void setDriverSize(string $DriverSize) Set The driver size. Valid values: `small` (default, 1 CU), `medium` (2 CUs), `large` (4 CUs), and `xlarge` (8 CUs).
 * @method string getExecutorSize() Obtain The executor size. Valid values: `small` (default, 1 CU), `medium` (2 CUs), `large` (4 CUs), and `xlarge` (8 CUs).
 * @method void setExecutorSize(string $ExecutorSize) Set The executor size. Valid values: `small` (default, 1 CU), `medium` (2 CUs), `large` (4 CUs), and `xlarge` (8 CUs).
 * @method integer getExecutorNumbers() Obtain The executor count, which defaults to 1.
 * @method void setExecutorNumbers(integer $ExecutorNumbers) Set The executor count, which defaults to 1.
 * @method integer getExecutorMaxNumbers() Obtain The maximum executor count, which defaults to 1. This parameter applies if the "Dynamic" mode is selected. If the "Dynamic" mode is not selected, the value of this parameter is the same as that of `ExecutorNumbers`.
 * @method void setExecutorMaxNumbers(integer $ExecutorMaxNumbers) Set The maximum executor count, which defaults to 1. This parameter applies if the "Dynamic" mode is selected. If the "Dynamic" mode is not selected, the value of this parameter is the same as that of `ExecutorNumbers`.
 * @method integer getTimeoutInSecond() Obtain The session timeout period in seconds. Default value: 3600
 * @method void setTimeoutInSecond(integer $TimeoutInSecond) Set The session timeout period in seconds. Default value: 3600
 * @method string getSessionId() Obtain The unique ID of a session. If this parameter is specified, the task will be run using the specified session.
 * @method void setSessionId(string $SessionId) Set The unique ID of a session. If this parameter is specified, the task will be run using the specified session.
 * @method string getSessionName() Obtain The name of the session to create.
 * @method void setSessionName(string $SessionName) Set The name of the session to create.
 * @method array getArguments() Obtain The session configurations. Valid values: `1.dlc.eni` for user-defined ENI gateway information;
`2.dlc.role.arn` for user-defined roleArn configurations;
and `3.dlc.sql.set.config` for user-defined cluster configurations.
 * @method void setArguments(array $Arguments) Set The session configurations. Valid values: `1.dlc.eni` for user-defined ENI gateway information;
`2.dlc.role.arn` for user-defined roleArn configurations;
and `3.dlc.sql.set.config` for user-defined cluster configurations.
 * @method integer getIsInherit() Obtain Whether to inherit the resource configuration of clusters; 0: not inherit (by default); 1: inherit clusters.
 * @method void setIsInherit(integer $IsInherit) Set Whether to inherit the resource configuration of clusters; 0: not inherit (by default); 1: inherit clusters.
 * @method string getCustomKey() Obtain User-defined primary key, and it should be unique.
 * @method void setCustomKey(string $CustomKey) Set User-defined primary key, and it should be unique.
 */
class CreateSparkSessionBatchSQLRequest extends AbstractModel
{
    /**
     * @var string The name of the engine for executing the Spark job.
     */
    public $DataEngineName;

    /**
     * @var string Run SQL. The base64 encoding is needed.
     */
    public $ExecuteSQL;

    /**
     * @var string The driver size. Valid values: `small` (default, 1 CU), `medium` (2 CUs), `large` (4 CUs), and `xlarge` (8 CUs).
     */
    public $DriverSize;

    /**
     * @var string The executor size. Valid values: `small` (default, 1 CU), `medium` (2 CUs), `large` (4 CUs), and `xlarge` (8 CUs).
     */
    public $ExecutorSize;

    /**
     * @var integer The executor count, which defaults to 1.
     */
    public $ExecutorNumbers;

    /**
     * @var integer The maximum executor count, which defaults to 1. This parameter applies if the "Dynamic" mode is selected. If the "Dynamic" mode is not selected, the value of this parameter is the same as that of `ExecutorNumbers`.
     */
    public $ExecutorMaxNumbers;

    /**
     * @var integer The session timeout period in seconds. Default value: 3600
     */
    public $TimeoutInSecond;

    /**
     * @var string The unique ID of a session. If this parameter is specified, the task will be run using the specified session.
     */
    public $SessionId;

    /**
     * @var string The name of the session to create.
     */
    public $SessionName;

    /**
     * @var array The session configurations. Valid values: `1.dlc.eni` for user-defined ENI gateway information;
`2.dlc.role.arn` for user-defined roleArn configurations;
and `3.dlc.sql.set.config` for user-defined cluster configurations.
     */
    public $Arguments;

    /**
     * @var integer Whether to inherit the resource configuration of clusters; 0: not inherit (by default); 1: inherit clusters.
     */
    public $IsInherit;

    /**
     * @var string User-defined primary key, and it should be unique.
     */
    public $CustomKey;

    /**
     * @param string $DataEngineName The name of the engine for executing the Spark job.
     * @param string $ExecuteSQL Run SQL. The base64 encoding is needed.
     * @param string $DriverSize The driver size. Valid values: `small` (default, 1 CU), `medium` (2 CUs), `large` (4 CUs), and `xlarge` (8 CUs).
     * @param string $ExecutorSize The executor size. Valid values: `small` (default, 1 CU), `medium` (2 CUs), `large` (4 CUs), and `xlarge` (8 CUs).
     * @param integer $ExecutorNumbers The executor count, which defaults to 1.
     * @param integer $ExecutorMaxNumbers The maximum executor count, which defaults to 1. This parameter applies if the "Dynamic" mode is selected. If the "Dynamic" mode is not selected, the value of this parameter is the same as that of `ExecutorNumbers`.
     * @param integer $TimeoutInSecond The session timeout period in seconds. Default value: 3600
     * @param string $SessionId The unique ID of a session. If this parameter is specified, the task will be run using the specified session.
     * @param string $SessionName The name of the session to create.
     * @param array $Arguments The session configurations. Valid values: `1.dlc.eni` for user-defined ENI gateway information;
`2.dlc.role.arn` for user-defined roleArn configurations;
and `3.dlc.sql.set.config` for user-defined cluster configurations.
     * @param integer $IsInherit Whether to inherit the resource configuration of clusters; 0: not inherit (by default); 1: inherit clusters.
     * @param string $CustomKey User-defined primary key, and it should be unique.
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
        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("ExecuteSQL",$param) and $param["ExecuteSQL"] !== null) {
            $this->ExecuteSQL = $param["ExecuteSQL"];
        }

        if (array_key_exists("DriverSize",$param) and $param["DriverSize"] !== null) {
            $this->DriverSize = $param["DriverSize"];
        }

        if (array_key_exists("ExecutorSize",$param) and $param["ExecutorSize"] !== null) {
            $this->ExecutorSize = $param["ExecutorSize"];
        }

        if (array_key_exists("ExecutorNumbers",$param) and $param["ExecutorNumbers"] !== null) {
            $this->ExecutorNumbers = $param["ExecutorNumbers"];
        }

        if (array_key_exists("ExecutorMaxNumbers",$param) and $param["ExecutorMaxNumbers"] !== null) {
            $this->ExecutorMaxNumbers = $param["ExecutorMaxNumbers"];
        }

        if (array_key_exists("TimeoutInSecond",$param) and $param["TimeoutInSecond"] !== null) {
            $this->TimeoutInSecond = $param["TimeoutInSecond"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionName",$param) and $param["SessionName"] !== null) {
            $this->SessionName = $param["SessionName"];
        }

        if (array_key_exists("Arguments",$param) and $param["Arguments"] !== null) {
            $this->Arguments = [];
            foreach ($param["Arguments"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Arguments, $obj);
            }
        }

        if (array_key_exists("IsInherit",$param) and $param["IsInherit"] !== null) {
            $this->IsInherit = $param["IsInherit"];
        }

        if (array_key_exists("CustomKey",$param) and $param["CustomKey"] !== null) {
            $this->CustomKey = $param["CustomKey"];
        }
    }
}
