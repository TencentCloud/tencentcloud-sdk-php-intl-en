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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWatermarkDetection request structure.
 *
 * @method string getType() Obtain Task type, currently supports ExtractVideoABWatermarkId
 * @method void setType(string $Type) Set Task type, currently supports ExtractVideoABWatermarkId
 * @method AbWatermarkInputInfo getInputInfo() Obtain Input information
 * @method void setInputInfo(AbWatermarkInputInfo $InputInfo) Set Input information
 * @method InputFileInfo getInputFileInfo() Obtain Input file information
 * @method void setInputFileInfo(InputFileInfo $InputFileInfo) Set Input file information
 * @method TaskNotifyConfig getTaskNotifyConfig() Obtain Input notification configuration
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) Set Input notification configuration
 */
class CreateWatermarkDetectionRequest extends AbstractModel
{
    /**
     * @var string Task type, currently supports ExtractVideoABWatermarkId
     */
    public $Type;

    /**
     * @var AbWatermarkInputInfo Input information
     */
    public $InputInfo;

    /**
     * @var InputFileInfo Input file information
     */
    public $InputFileInfo;

    /**
     * @var TaskNotifyConfig Input notification configuration
     */
    public $TaskNotifyConfig;

    /**
     * @param string $Type Task type, currently supports ExtractVideoABWatermarkId
     * @param AbWatermarkInputInfo $InputInfo Input information
     * @param InputFileInfo $InputFileInfo Input file information
     * @param TaskNotifyConfig $TaskNotifyConfig Input notification configuration
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
            $this->InputInfo = new AbWatermarkInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("InputFileInfo",$param) and $param["InputFileInfo"] !== null) {
            $this->InputFileInfo = new InputFileInfo();
            $this->InputFileInfo->deserialize($param["InputFileInfo"]);
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new TaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }
    }
}
