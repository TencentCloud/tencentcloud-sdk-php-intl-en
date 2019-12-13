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
 * @method Application getApplication() 获取Application information
 * @method void setApplication(Application $Application) 设置Application information
 * @method string getTaskName() 获取Job name, which should be unique within instance
 * @method void setTaskName(string $TaskName) 设置Job name, which should be unique within instance
 * @method integer getTaskInstanceNum() 获取Number of running task instances
 * @method void setTaskInstanceNum(integer $TaskInstanceNum) 设置Number of running task instances
 * @method AnonymousComputeEnv getComputeEnv() 获取Compute environment information. One (and only one) parameter must be specified for ComputeEnv and EnvId.
 * @method void setComputeEnv(AnonymousComputeEnv $ComputeEnv) 设置Compute environment information. One (and only one) parameter must be specified for ComputeEnv and EnvId.
 * @method string getEnvId() 获取Compute environment ID. One (and only one) parameter must be specified for ComputeEnv and EnvId.
 * @method void setEnvId(string $EnvId) 设置Compute environment ID. One (and only one) parameter must be specified for ComputeEnv and EnvId.
 * @method RedirectInfo getRedirectInfo() 获取Redirection information
 * @method void setRedirectInfo(RedirectInfo $RedirectInfo) 设置Redirection information
 * @method RedirectLocalInfo getRedirectLocalInfo() 获取Local redirection information
 * @method void setRedirectLocalInfo(RedirectLocalInfo $RedirectLocalInfo) 设置Local redirection information
 * @method array getInputMappings() 获取Input mapping
 * @method void setInputMappings(array $InputMappings) 设置Input mapping
 * @method array getOutputMappings() 获取Output mapping
 * @method void setOutputMappings(array $OutputMappings) 设置Output mapping
 * @method array getOutputMappingConfigs() 获取Output mapping configuration
 * @method void setOutputMappingConfigs(array $OutputMappingConfigs) 设置Output mapping configuration
 * @method array getEnvVars() 获取Custom environment variable
 * @method void setEnvVars(array $EnvVars) 设置Custom environment variable
 * @method array getAuthentications() 获取Authorization information
 * @method void setAuthentications(array $Authentications) 设置Authorization information
 * @method string getFailedAction() 获取The processing method after the TaskInstance fails; Value range: TERMINATE (default), INTERRUPT, FAST_INTERRUPT.
 * @method void setFailedAction(string $FailedAction) 设置The processing method after the TaskInstance fails; Value range: TERMINATE (default), INTERRUPT, FAST_INTERRUPT.
 * @method integer getMaxRetryCount() 获取The maximum number of retries after the task fails. Default value: 0
 * @method void setMaxRetryCount(integer $MaxRetryCount) 设置The maximum number of retries after the task fails. Default value: 0
 * @method integer getTimeout() 获取Timeout period in seconds after the task starts. Defaults value: 86,400
 * @method void setTimeout(integer $Timeout) 设置Timeout period in seconds after the task starts. Defaults value: 86,400
 * @method integer getMaxConcurrentNum() 获取The maximum number of concurrent tasks. There is no limit by default.
 * @method void setMaxConcurrentNum(integer $MaxConcurrentNum) 设置The maximum number of concurrent tasks. There is no limit by default.
 * @method boolean getRestartComputeNode() 获取Restarts the compute node after the task is completed. This is suitable for specifying the compute environment for task execution.
 * @method void setRestartComputeNode(boolean $RestartComputeNode) 设置Restarts the compute node after the task is completed. This is suitable for specifying the compute environment for task execution.
 * @method integer getResourceMaxRetryCount() 获取Maximum number of retry attempts after failing to create computing resources such as the CVM in the task launch process. Default value: 0.
 * @method void setResourceMaxRetryCount(integer $ResourceMaxRetryCount) 设置Maximum number of retry attempts after failing to create computing resources such as the CVM in the task launch process. Default value: 0.
 */

/**
 *Task
 */
class Task extends AbstractModel
{
    /**
     * @var Application Application information
     */
    public $Application;

    /**
     * @var string Job name, which should be unique within instance
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
     * @var string The processing method after the TaskInstance fails; Value range: TERMINATE (default), INTERRUPT, FAST_INTERRUPT.
     */
    public $FailedAction;

    /**
     * @var integer The maximum number of retries after the task fails. Default value: 0
     */
    public $MaxRetryCount;

    /**
     * @var integer Timeout period in seconds after the task starts. Defaults value: 86,400
     */
    public $Timeout;

    /**
     * @var integer The maximum number of concurrent tasks. There is no limit by default.
     */
    public $MaxConcurrentNum;

    /**
     * @var boolean Restarts the compute node after the task is completed. This is suitable for specifying the compute environment for task execution.
     */
    public $RestartComputeNode;

    /**
     * @var integer Maximum number of retry attempts after failing to create computing resources such as the CVM in the task launch process. Default value: 0.
     */
    public $ResourceMaxRetryCount;
    /**
     * @param Application $Application Application information
     * @param string $TaskName Job name, which should be unique within instance
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
     * @param string $FailedAction The processing method after the TaskInstance fails; Value range: TERMINATE (default), INTERRUPT, FAST_INTERRUPT.
     * @param integer $MaxRetryCount The maximum number of retries after the task fails. Default value: 0
     * @param integer $Timeout Timeout period in seconds after the task starts. Defaults value: 86,400
     * @param integer $MaxConcurrentNum The maximum number of concurrent tasks. There is no limit by default.
     * @param boolean $RestartComputeNode Restarts the compute node after the task is completed. This is suitable for specifying the compute environment for task execution.
     * @param integer $ResourceMaxRetryCount Maximum number of retry attempts after failing to create computing resources such as the CVM in the task launch process. Default value: 0.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
