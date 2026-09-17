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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAigcVideoRedrawTask request structure.
 *
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method AigcVideoRedrawTaskInputFileInfo getFileInfo() Obtain 
 * @method void setFileInfo(AigcVideoRedrawTaskInputFileInfo $FileInfo) Set 
 * @method AigcVideoRedrawTaskInfo getTaskInfo() Obtain 
 * @method void setTaskInfo(AigcVideoRedrawTaskInfo $TaskInfo) Set 
 * @method AigcVideoRedrawOutputConfig getOutputConfig() Obtain 
 * @method void setOutputConfig(AigcVideoRedrawOutputConfig $OutputConfig) Set 
 * @method string getSessionId() Obtain 
 * @method void setSessionId(string $SessionId) Set 
 * @method string getSessionContext() Obtain 
 * @method void setSessionContext(string $SessionContext) Set 
 * @method integer getTasksPriority() Obtain 
 * @method void setTasksPriority(integer $TasksPriority) Set 
 * @method string getExtInfo() Obtain 
 * @method void setExtInfo(string $ExtInfo) Set 
 */
class CreateAigcVideoRedrawTaskRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var AigcVideoRedrawTaskInputFileInfo 
     */
    public $FileInfo;

    /**
     * @var AigcVideoRedrawTaskInfo 
     */
    public $TaskInfo;

    /**
     * @var AigcVideoRedrawOutputConfig 
     */
    public $OutputConfig;

    /**
     * @var string 
     */
    public $SessionId;

    /**
     * @var string 
     */
    public $SessionContext;

    /**
     * @var integer 
     */
    public $TasksPriority;

    /**
     * @var string 
     */
    public $ExtInfo;

    /**
     * @param integer $SubAppId 
     * @param AigcVideoRedrawTaskInputFileInfo $FileInfo 
     * @param AigcVideoRedrawTaskInfo $TaskInfo 
     * @param AigcVideoRedrawOutputConfig $OutputConfig 
     * @param string $SessionId 
     * @param string $SessionContext 
     * @param integer $TasksPriority 
     * @param string $ExtInfo 
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("FileInfo",$param) and $param["FileInfo"] !== null) {
            $this->FileInfo = new AigcVideoRedrawTaskInputFileInfo();
            $this->FileInfo->deserialize($param["FileInfo"]);
        }

        if (array_key_exists("TaskInfo",$param) and $param["TaskInfo"] !== null) {
            $this->TaskInfo = new AigcVideoRedrawTaskInfo();
            $this->TaskInfo->deserialize($param["TaskInfo"]);
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new AigcVideoRedrawOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
