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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application details
 *
 * @method string getAppType() Obtain Application type; knowledge_qa - knowledge Q&A management; summary - knowledge summary; classifys - knowledge label extraction.
 * @method void setAppType(string $AppType) Set Application type; knowledge_qa - knowledge Q&A management; summary - knowledge summary; classifys - knowledge label extraction.
 * @method string getAppTypeDesc() Obtain Application type description.
 * @method void setAppTypeDesc(string $AppTypeDesc) Set Application type description.
 * @method string getAppBizId() Obtain Application ID.
 * @method void setAppBizId(string $AppBizId) Set Application ID.
 * @method string getName() Obtain Application name.
 * @method void setName(string $Name) Set Application name.
 * @method string getAvatar() Obtain Application avatar.
 * @method void setAvatar(string $Avatar) Set Application avatar.
 * @method string getDesc() Obtain Application description.
 * @method void setDesc(string $Desc) Set Application description.
 * @method integer getAppStatus() Obtain Application status. 1: offline; 2: running; 3: disabled.
 * @method void setAppStatus(integer $AppStatus) Set Application status. 1: offline; 2: running; 3: disabled.
 * @method string getAppStatusDesc() Obtain Status description.
 * @method void setAppStatusDesc(string $AppStatusDesc) Set Status description.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 * @method string getOperator() Obtain Last modifier.
 * @method void setOperator(string $Operator) Set Last modifier.
 * @method string getModelName() Obtain Model name.
 * @method void setModelName(string $ModelName) Set Model name.
 * @method string getModelAliasName() Obtain Alias of the generative model.
 * @method void setModelAliasName(string $ModelAliasName) Set Alias of the generative model.
 * @method string getPattern() Obtain Application mode: standard; agent; single_workflow.
 * @method void setPattern(string $Pattern) Set Application mode: standard; agent; single_workflow.
 * @method string getThoughtModelAliasName() Obtain Alias of the thought model.
 * @method void setThoughtModelAliasName(string $ThoughtModelAliasName) Set Alias of the thought model.
 */
class AppInfo extends AbstractModel
{
    /**
     * @var string Application type; knowledge_qa - knowledge Q&A management; summary - knowledge summary; classifys - knowledge label extraction.
     */
    public $AppType;

    /**
     * @var string Application type description.
     */
    public $AppTypeDesc;

    /**
     * @var string Application ID.
     */
    public $AppBizId;

    /**
     * @var string Application name.
     */
    public $Name;

    /**
     * @var string Application avatar.
     */
    public $Avatar;

    /**
     * @var string Application description.
     */
    public $Desc;

    /**
     * @var integer Application status. 1: offline; 2: running; 3: disabled.
     */
    public $AppStatus;

    /**
     * @var string Status description.
     */
    public $AppStatusDesc;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @var string Last modifier.
     */
    public $Operator;

    /**
     * @var string Model name.
     */
    public $ModelName;

    /**
     * @var string Alias of the generative model.
     */
    public $ModelAliasName;

    /**
     * @var string Application mode: standard; agent; single_workflow.
     */
    public $Pattern;

    /**
     * @var string Alias of the thought model.
     */
    public $ThoughtModelAliasName;

    /**
     * @param string $AppType Application type; knowledge_qa - knowledge Q&A management; summary - knowledge summary; classifys - knowledge label extraction.
     * @param string $AppTypeDesc Application type description.
     * @param string $AppBizId Application ID.
     * @param string $Name Application name.
     * @param string $Avatar Application avatar.
     * @param string $Desc Application description.
     * @param integer $AppStatus Application status. 1: offline; 2: running; 3: disabled.
     * @param string $AppStatusDesc Status description.
     * @param string $UpdateTime Update time.
     * @param string $Operator Last modifier.
     * @param string $ModelName Model name.
     * @param string $ModelAliasName Alias of the generative model.
     * @param string $Pattern Application mode: standard; agent; single_workflow.
     * @param string $ThoughtModelAliasName Alias of the thought model.
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
        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("AppTypeDesc",$param) and $param["AppTypeDesc"] !== null) {
            $this->AppTypeDesc = $param["AppTypeDesc"];
        }

        if (array_key_exists("AppBizId",$param) and $param["AppBizId"] !== null) {
            $this->AppBizId = $param["AppBizId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("AppStatus",$param) and $param["AppStatus"] !== null) {
            $this->AppStatus = $param["AppStatus"];
        }

        if (array_key_exists("AppStatusDesc",$param) and $param["AppStatusDesc"] !== null) {
            $this->AppStatusDesc = $param["AppStatusDesc"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelAliasName",$param) and $param["ModelAliasName"] !== null) {
            $this->ModelAliasName = $param["ModelAliasName"];
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("ThoughtModelAliasName",$param) and $param["ThoughtModelAliasName"] !== null) {
            $this->ThoughtModelAliasName = $param["ThoughtModelAliasName"];
        }
    }
}
