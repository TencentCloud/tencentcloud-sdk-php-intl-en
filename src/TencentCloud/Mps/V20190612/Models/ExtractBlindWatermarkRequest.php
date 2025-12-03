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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExtractBlindWatermark request structure.
 *
 * @method string getType() Obtain Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-abseq: ab sequence copyright digital watermark.</li>
 * @method void setType(string $Type) Set Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-abseq: ab sequence copyright digital watermark.</li>
 * @method MediaInputInfo getInputInfo() Obtain File input information for the Media Processing Service (MPS) task.
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set File input information for the Media Processing Service (MPS) task.
 * @method TaskNotifyConfig getTaskNotifyConfig() Obtain Event notification information of the task. If it is left unspecified, it indicates that no event notification is obtained.
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) Set Event notification information of the task. If it is left unspecified, it indicates that no event notification is obtained.
 * @method ExtractBlindWatermarkTaskConfig getExtractBlindWatermarkConfig() Obtain Configuration of the digital watermark extraction task.
 * @method void setExtractBlindWatermarkConfig(ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig) Set Configuration of the digital watermark extraction task.
 * @method string getResourceId() Obtain Resource ID. Ensure that the corresponding resource is enabled. The default value is the primary resource ID of the account.
 * @method void setResourceId(string $ResourceId) Set Resource ID. Ensure that the corresponding resource is enabled. The default value is the primary resource ID of the account.
 */
class ExtractBlindWatermarkRequest extends AbstractModel
{
    /**
     * @var string Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-abseq: ab sequence copyright digital watermark.</li>
     */
    public $Type;

    /**
     * @var MediaInputInfo File input information for the Media Processing Service (MPS) task.
     */
    public $InputInfo;

    /**
     * @var TaskNotifyConfig Event notification information of the task. If it is left unspecified, it indicates that no event notification is obtained.
     */
    public $TaskNotifyConfig;

    /**
     * @var ExtractBlindWatermarkTaskConfig Configuration of the digital watermark extraction task.
     */
    public $ExtractBlindWatermarkConfig;

    /**
     * @var string Resource ID. Ensure that the corresponding resource is enabled. The default value is the primary resource ID of the account.
     */
    public $ResourceId;

    /**
     * @param string $Type Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-abseq: ab sequence copyright digital watermark.</li>
     * @param MediaInputInfo $InputInfo File input information for the Media Processing Service (MPS) task.
     * @param TaskNotifyConfig $TaskNotifyConfig Event notification information of the task. If it is left unspecified, it indicates that no event notification is obtained.
     * @param ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig Configuration of the digital watermark extraction task.
     * @param string $ResourceId Resource ID. Ensure that the corresponding resource is enabled. The default value is the primary resource ID of the account.
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
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new TaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }

        if (array_key_exists("ExtractBlindWatermarkConfig",$param) and $param["ExtractBlindWatermarkConfig"] !== null) {
            $this->ExtractBlindWatermarkConfig = new ExtractBlindWatermarkTaskConfig();
            $this->ExtractBlindWatermarkConfig->deserialize($param["ExtractBlindWatermarkConfig"]);
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
