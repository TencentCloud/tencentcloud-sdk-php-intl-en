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
 * Custom parameters for AI Dubbing
 *
 * @method DubbingTranslateConfig getTranslateConfig() Obtain <p>Translation configuration message.</p>
 * @method void setTranslateConfig(DubbingTranslateConfig $TranslateConfig) Set <p>Translation configuration message.</p>
 * @method DubbingSubtitleConfig getSubtitleConfig() Obtain <p>Subtitle configuration information.</p>
 * @method void setSubtitleConfig(DubbingSubtitleConfig $SubtitleConfig) Set <p>Subtitle configuration information.</p>
 * @method DubbingConfig getDubbingConfig() Obtain <p>Dubbing configuration message.</p>
 * @method void setDubbingConfig(DubbingConfig $DubbingConfig) Set <p>Dubbing configuration message.</p>
 * @method DubbingOutputConfig getOutputConfig() Obtain <p>Output configuration message.</p>
 * @method void setOutputConfig(DubbingOutputConfig $OutputConfig) Set <p>Output configuration message.</p>
 */
class RawAIDubbingParameter extends AbstractModel
{
    /**
     * @var DubbingTranslateConfig <p>Translation configuration message.</p>
     */
    public $TranslateConfig;

    /**
     * @var DubbingSubtitleConfig <p>Subtitle configuration information.</p>
     */
    public $SubtitleConfig;

    /**
     * @var DubbingConfig <p>Dubbing configuration message.</p>
     */
    public $DubbingConfig;

    /**
     * @var DubbingOutputConfig <p>Output configuration message.</p>
     */
    public $OutputConfig;

    /**
     * @param DubbingTranslateConfig $TranslateConfig <p>Translation configuration message.</p>
     * @param DubbingSubtitleConfig $SubtitleConfig <p>Subtitle configuration information.</p>
     * @param DubbingConfig $DubbingConfig <p>Dubbing configuration message.</p>
     * @param DubbingOutputConfig $OutputConfig <p>Output configuration message.</p>
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
        if (array_key_exists("TranslateConfig",$param) and $param["TranslateConfig"] !== null) {
            $this->TranslateConfig = new DubbingTranslateConfig();
            $this->TranslateConfig->deserialize($param["TranslateConfig"]);
        }

        if (array_key_exists("SubtitleConfig",$param) and $param["SubtitleConfig"] !== null) {
            $this->SubtitleConfig = new DubbingSubtitleConfig();
            $this->SubtitleConfig->deserialize($param["SubtitleConfig"]);
        }

        if (array_key_exists("DubbingConfig",$param) and $param["DubbingConfig"] !== null) {
            $this->DubbingConfig = new DubbingConfig();
            $this->DubbingConfig->deserialize($param["DubbingConfig"]);
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new DubbingOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }
    }
}
