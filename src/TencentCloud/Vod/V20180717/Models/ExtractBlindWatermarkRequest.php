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
 * ExtractBlindWatermark request structure.
 *
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method ExtractBlindWatermarkInputInfo getInputInfo() Obtain 
 * @method void setInputInfo(ExtractBlindWatermarkInputInfo $InputInfo) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method ExtractBlindWatermarkTaskConfig getExtractBlindWatermarkConfig() Obtain 
 * @method void setExtractBlindWatermarkConfig(ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig) Set 
 * @method string getSessionContext() Obtain 
 * @method void setSessionContext(string $SessionContext) Set 
 * @method string getSessionId() Obtain 
 * @method void setSessionId(string $SessionId) Set 
 * @method integer getTasksPriority() Obtain 
 * @method void setTasksPriority(integer $TasksPriority) Set 
 */
class ExtractBlindWatermarkRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Type;

    /**
     * @var ExtractBlindWatermarkInputInfo 
     */
    public $InputInfo;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var ExtractBlindWatermarkTaskConfig 
     */
    public $ExtractBlindWatermarkConfig;

    /**
     * @var string 
     */
    public $SessionContext;

    /**
     * @var string 
     */
    public $SessionId;

    /**
     * @var integer 
     */
    public $TasksPriority;

    /**
     * @param string $Type 
     * @param ExtractBlindWatermarkInputInfo $InputInfo 
     * @param integer $SubAppId 
     * @param ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig 
     * @param string $SessionContext 
     * @param string $SessionId 
     * @param integer $TasksPriority 
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new ExtractBlindWatermarkInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("ExtractBlindWatermarkConfig",$param) and $param["ExtractBlindWatermarkConfig"] !== null) {
            $this->ExtractBlindWatermarkConfig = new ExtractBlindWatermarkTaskConfig();
            $this->ExtractBlindWatermarkConfig->deserialize($param["ExtractBlindWatermarkConfig"]);
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }
    }
}
