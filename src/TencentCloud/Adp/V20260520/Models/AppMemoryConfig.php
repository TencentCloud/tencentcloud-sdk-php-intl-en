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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Memory configuration
 *
 * @method boolean getEnabled() Obtain Whether to enable long-term memory
 * @method void setEnabled(boolean $Enabled) Set Whether to enable long-term memory
 * @method integer getLongMemoryDay() Obtain Long memory duration
 * @method void setLongMemoryDay(integer $LongMemoryDay) Set Long memory duration
 * @method ModelDetailInfo getModel() Obtain Model configuration
 * @method void setModel(ModelDetailInfo $Model) Set Model configuration
 * @method string getPromptContent() Obtain prompt content
 * @method void setPromptContent(string $PromptContent) Set prompt content
 * @method integer getPromptMode() Obtain Prompt word mode. Enumeration value: 1: custom
 * @method void setPromptMode(integer $PromptMode) Set Prompt word mode. Enumeration value: 1: custom
 */
class AppMemoryConfig extends AbstractModel
{
    /**
     * @var boolean Whether to enable long-term memory
     */
    public $Enabled;

    /**
     * @var integer Long memory duration
     */
    public $LongMemoryDay;

    /**
     * @var ModelDetailInfo Model configuration
     */
    public $Model;

    /**
     * @var string prompt content
     */
    public $PromptContent;

    /**
     * @var integer Prompt word mode. Enumeration value: 1: custom
     */
    public $PromptMode;

    /**
     * @param boolean $Enabled Whether to enable long-term memory
     * @param integer $LongMemoryDay Long memory duration
     * @param ModelDetailInfo $Model Model configuration
     * @param string $PromptContent prompt content
     * @param integer $PromptMode Prompt word mode. Enumeration value: 1: custom
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("LongMemoryDay",$param) and $param["LongMemoryDay"] !== null) {
            $this->LongMemoryDay = $param["LongMemoryDay"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = new ModelDetailInfo();
            $this->Model->deserialize($param["Model"]);
        }

        if (array_key_exists("PromptContent",$param) and $param["PromptContent"] !== null) {
            $this->PromptContent = $param["PromptContent"];
        }

        if (array_key_exists("PromptMode",$param) and $param["PromptMode"] !== null) {
            $this->PromptMode = $param["PromptMode"];
        }
    }
}
