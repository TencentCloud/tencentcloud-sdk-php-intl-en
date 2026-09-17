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
 * RebuildMediaByTemplate request structure.
 *
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method string getSubAppId() Obtain 
 * @method void setSubAppId(string $SubAppId) Set 
 * @method float getStartTimeOffset() Obtain 
 * @method void setStartTimeOffset(float $StartTimeOffset) Set 
 * @method float getEndTimeOffset() Obtain 
 * @method void setEndTimeOffset(float $EndTimeOffset) Set 
 * @method RebuildMediaOutputConfig getOutputConfig() Obtain 
 * @method void setOutputConfig(RebuildMediaOutputConfig $OutputConfig) Set 
 * @method string getSessionId() Obtain 
 * @method void setSessionId(string $SessionId) Set 
 * @method string getSessionContext() Obtain 
 * @method void setSessionContext(string $SessionContext) Set 
 * @method integer getTasksPriority() Obtain 
 * @method void setTasksPriority(integer $TasksPriority) Set 
 * @method string getExtInfo() Obtain 
 * @method void setExtInfo(string $ExtInfo) Set 
 */
class RebuildMediaByTemplateRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var string 
     */
    public $SubAppId;

    /**
     * @var float 
     */
    public $StartTimeOffset;

    /**
     * @var float 
     */
    public $EndTimeOffset;

    /**
     * @var RebuildMediaOutputConfig 
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
     * @param string $FileId 
     * @param integer $Definition 
     * @param string $SubAppId 
     * @param float $StartTimeOffset 
     * @param float $EndTimeOffset 
     * @param RebuildMediaOutputConfig $OutputConfig 
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new RebuildMediaOutputConfig();
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
