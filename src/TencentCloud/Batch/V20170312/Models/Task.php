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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task
 *
 * @method Application getApplication() Obtain Application information
 * @method void setApplication(Application $Application) Set Application information
 * @method string getTaskName() Obtain Task name, which should be unique within a job
 * @method void setTaskName(string $TaskName) Set Task name, which should be unique within a job
 * @method integer getTaskInstanceNum() Obtain Number of running task instances
 * @method void setTaskInstanceNum(integer $TaskInstanceNum) Set Number of running task instances
 * @method AnonymousComputeEnv getComputeEnv() Obtain Compute environment information. One (and only one) parameter must be specified for ComputeEnv and EnvId.
 * @method void setComputeEnv(AnonymousComputeEnv $ComputeEnv) Set Compute environment information. One (and only one) parameter must be specified for ComputeEnv and EnvId.
 * @method string getEnvId() Obtain Compute environment ID. One (and only one) parameter must be specified for ComputeEnv and EnvId.
 * @method void setEnvId(string $EnvId) Set Compute environment ID. One (and only one) parameter must be specified for ComputeEnv and EnvId.
 * @method RedirectInfo getRedirectInfo() Obtain Redirection information
 * @method void setRedirectInfo(RedirectInfo $RedirectInfo) Set Redirection information
 * @method RedirectLocalInfo getRedirectLocalInfo() Obtain Local redirection information
 * @method void setRedirectLocalInfo(RedirectLocalInfo $RedirectLocalInfo) Set Local redirection information
 * @method array getInputMappings() Obtain Input mapping
 * @method void setInputMappings(array $InputMappings) Set Input mapping
 * @method array getOutputMappings() Obtain Output mapping
 * @method void setOutputMappings(array $OutputMappings) Set Output mapping
 * @method array getOutputMappingConfigs() Obtain Output mapping configuration
 * @method void setOutputMappingConfigs(array $OutputMappingConfigs) Set Output mapping configuration
 * @method array getEnvVars() Obtain Custom environment variable
 * @method void setEnvVars(array $EnvVars) Set Custom environment variable
 * @method array getAuthentications() Obtain Authorization information
 * @method void setAuthentications(array $Authentications) Set Authorization information
 * @method string getFailedAction() Obtain The processing method after the TaskInstance fails; Value range: `TERMINATE` (default), `INTERRUPT`, `FAST_INTERRUPT`.
 * @method void setFailedAction(string $FailedAction) Set The processing method after the TaskInstance fails; Value range: `TERMINATE` (default), `INTERRUPT`, `FAST_INTERRUPT`.
 * @method integer getMaxRetryCount() Obtain The maximum number of retries after the task fails. Range: 0 - 5. Default value: 0
 * @method void setMaxRetryCount(integer $MaxRetryCount) Set The maximum number of retries after the task fails. Range: 0 - 5. Default value: 0
 * @method integer getTimeout() Obtain Timeout period of the task in seconds. Defaults value: 86400
 * @method void setTimeout(integer $Timeout) Set Timeout period of the task in seconds. Defaults value: 86400
 * @method integer getMaxConcurrentNum() Obtain The maximum number of concurrent tasks. Range: 0 - 200000. There is no limit by default.
 * @method void setMaxConcurrentNum(integer $MaxConcurrentNum) Set The maximum number of concurrent tasks. Range: 0 - 200000. There is no limit by default.
 * @method boolean getRestartComputeNode() Obtain Restarts the compute node after the task is completed. This is suitable for specifying the compute environment for task execution.
 * @method void setRestartComputeNode(boolean $RestartComputeNode) Set Restarts the compute node after the task is completed. This is suitable for specifying the compute environment for task execution.
 * @method integer getResourceMaxRetryCount() Obtain Maximum number of retry attempts after failing to create computing resources such as the CVM in the task launch process. Default: `0`; Maximum: `100`.
 * @method void setResourceMaxRetryCount(integer $ResourceMaxRetryCount) Set Maximum number of retry attempts after failing to create computing resources such as the CVM in the task launch process. Default: `0`; Maximum: `100`.
 */
class Task extends AbstractModel
{
    /**
     * @var Application Application information
     */
    public $Application;

    /**
     * @var string Task name, which should be unique within a job
     */
    public $TaskName;

    /**
     * @var integer Number of running task instances
     */
    public $TaskInstanceNum;

    /**
     * @var AnonymousComputeEnv Compute environment information. One (and only one) parameter must be specified for ComputeEnv and EnvId.
     */
    public $ComputeEnv;

    /**
     * @var string Compute environment ID. One (and only one) parameter must be specified for ComputeEnv and EnvId.
     */
    public $EnvId;

    /**
     * @var RedirectInfo Redirection information
     */
    public $RedirectInfo;

    /**
     * @var RedirectLocalInfo Local redirection information
     */
    public $RedirectLocalInfo;

    /**
     * @var array Input mapping
     */
    public $InputMappings;

    /**
     * @var array Output mapping
     */
    public $OutputMappings;

    /**
     * @var array Output mapping configuration
     */
    public $OutputMappingConfigs;

    /**
     * @var array Custom environment variable
     */
    public $EnvVars;

    /**
     * @var array Authorization information
     */
    public $Authentications;

    /**
     * @var string The processing method after the TaskInstance fails; Value range: `TERMINATE` (default), `INTERRUPT`, `FAST_INTERRUPT`.
     */
    public $FailedAction;

    /**
     * @var integer The maximum number of retries after the task fails. Range: 0 - 5. Default value: 0
     */
    public $MaxRetryCount;

    /**
     * @var integer Timeout period of the task in seconds. Defaults value: 86400
     */
    public $Timeout;

    /**
     * @var integer The maximum number of concurrent tasks. Range: 0 - 200000. There is no limit by default.
     */
    public $MaxConcurrentNum;

    /**
     * @var boolean Restarts the compute node after the task is completed. This is suitable for specifying the compute environment for task execution.
     */
    public $RestartComputeNode;

    /**
     * @var integer Maximum number of retry attempts after failing to create computing resources such as the CVM in the task launch process. Default: `0`; Maximum: `100`.
     */
    public $ResourceMaxRetryCount;

    /**
     * @param Application $Application Application information
     * @param string $TaskName Task name, which should be unique within a job
     * @param integer $TaskInstanceNum Number of running task instances
     * @param AnonymousComputeEnv $ComputeEnv Compute environment information. One (and only one) parameter must be specified for ComputeEnv and EnvId.
     * @param string $EnvId Compute environment ID. One (and only one) parameter must be specified for ComputeEnv and EnvId.
     * @param RedirectInfo $RedirectInfo Redirection information
     * @param RedirectLocalInfo $RedirectLocalInfo Local redirection information
     * @param array $InputMappings Input mapping
     * @param array $OutputMappings Output mapping
     * @param array $OutputMappingConfigs Output mapping configuration
     * @param array $EnvVars Custom environment variable
     * @param array $Authentications Authorization information
     * @param string $FailedAction The processing method after the TaskInstance fails; Value range: `TERMINATE` (default), `INTERRUPT`, `FAST_INTERRUPT`.
     * @param integer $MaxRetryCount The maximum number of retries after the task fails. Range: 0 - 5. Default value: 0
     * @param integer $Timeout Timeout period of the task in seconds. Defaults value: 86400
     * @param integer $MaxConcurrentNum The maximum number of concurrent tasks. Range: 0 - 200000. There is no limit by default.
     * @param boolean $RestartComputeNode Restarts the compute node after the task is completed. This is suitable for specifying the compute environment for task execution.
     * @param integer $ResourceMaxRetryCount Maximum number of retry attempts after failing to create computing resources such as the CVM in the task launch process. Default: `0`; Maximum: `100`.
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
        if (array_key_exists("Application",$param) and $param["Application"] !== null) {
            $this->Application = new Application();
            $this->Application->deserialize($param["Application"]);
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskInstanceNum",$param) and $param["TaskInstanceNum"] !== null) {
            $this->TaskInstanceNum = $param["TaskInstanceNum"];
        }

        if (array_key_exists("ComputeEnv",$param) and $param["ComputeEnv"] !== null) {
            $this->ComputeEnv = new AnonymousComputeEnv();
            $this->ComputeEnv->deserialize($param["ComputeEnv"]);
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("RedirectInfo",$param) and $param["RedirectInfo"] !== null) {
            $this->RedirectInfo = new RedirectInfo();
            $this->RedirectInfo->deserialize($param["RedirectInfo"]);
        }

        if (array_key_exists("RedirectLocalInfo",$param) and $param["RedirectLocalInfo"] !== null) {
            $this->RedirectLocalInfo = new RedirectLocalInfo();
            $this->RedirectLocalInfo->deserialize($param["RedirectLocalInfo"]);
        }

        if (array_key_exists("InputMappings",$param) and $param["InputMappings"] !== null) {
            $this->InputMappings = [];
            foreach ($param["InputMappings"] as $key => $value){
                $obj = new InputMapping();
                $obj->deserialize($value);
                array_push($this->InputMappings, $obj);
            }
        }

        if (array_key_exists("OutputMappings",$param) and $param["OutputMappings"] !== null) {
            $this->OutputMappings = [];
            foreach ($param["OutputMappings"] as $key => $value){
                $obj = new OutputMapping();
                $obj->deserialize($value);
                array_push($this->OutputMappings, $obj);
            }
        }

        if (array_key_exists("OutputMappingConfigs",$param) and $param["OutputMappingConfigs"] !== null) {
            $this->OutputMappingConfigs = [];
            foreach ($param["OutputMappingConfigs"] as $key => $value){
                $obj = new OutputMappingConfig();
                $obj->deserialize($value);
                array_push($this->OutputMappingConfigs, $obj);
            }
        }

        if (array_key_exists("EnvVars",$param) and $param["EnvVars"] !== null) {
            $this->EnvVars = [];
            foreach ($param["EnvVars"] as $key => $value){
                $obj = new EnvVar();
                $obj->deserialize($value);
                array_push($this->EnvVars, $obj);
            }
        }

        if (array_key_exists("Authentications",$param) and $param["Authentications"] !== null) {
            $this->Authentications = [];
            foreach ($param["Authentications"] as $key => $value){
                $obj = new Authentication();
                $obj->deserialize($value);
                array_push($this->Authentications, $obj);
            }
        }

        if (array_key_exists("FailedAction",$param) and $param["FailedAction"] !== null) {
            $this->FailedAction = $param["FailedAction"];
        }

        if (array_key_exists("MaxRetryCount",$param) and $param["MaxRetryCount"] !== null) {
            $this->MaxRetryCount = $param["MaxRetryCount"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("MaxConcurrentNum",$param) and $param["MaxConcurrentNum"] !== null) {
            $this->MaxConcurrentNum = $param["MaxConcurrentNum"];
        }

        if (array_key_exists("RestartComputeNode",$param) and $param["RestartComputeNode"] !== null) {
            $this->RestartComputeNode = $param["RestartComputeNode"];
        }

        if (array_key_exists("ResourceMaxRetryCount",$param) and $param["ResourceMaxRetryCount"] !== null) {
            $this->ResourceMaxRetryCount = $param["ResourceMaxRetryCount"];
        }
    }
}
