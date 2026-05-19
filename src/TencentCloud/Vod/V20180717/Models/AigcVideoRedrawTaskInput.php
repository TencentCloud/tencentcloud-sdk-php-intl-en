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
 * Input of the AIGC video conversion task.
 *
 * @method AigcVideoRedrawTaskInputFileInfo getFileInfo() Obtain <p>Input info of the AIGC video conversion task.</p>
 * @method void setFileInfo(AigcVideoRedrawTaskInputFileInfo $FileInfo) Set <p>Input info of the AIGC video conversion task.</p>
 * @method AigcVideoRedrawOutputConfig getOutputConfig() Obtain <p>AIGC video conversion output configuration.</p>
 * @method void setOutputConfig(AigcVideoRedrawOutputConfig $OutputConfig) Set <p>AIGC video conversion output configuration.</p>
 */
class AigcVideoRedrawTaskInput extends AbstractModel
{
    /**
     * @var AigcVideoRedrawTaskInputFileInfo <p>Input info of the AIGC video conversion task.</p>
     */
    public $FileInfo;

    /**
     * @var AigcVideoRedrawOutputConfig <p>AIGC video conversion output configuration.</p>
     */
    public $OutputConfig;

    /**
     * @param AigcVideoRedrawTaskInputFileInfo $FileInfo <p>Input info of the AIGC video conversion task.</p>
     * @param AigcVideoRedrawOutputConfig $OutputConfig <p>AIGC video conversion output configuration.</p>
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
        if (array_key_exists("FileInfo",$param) and $param["FileInfo"] !== null) {
            $this->FileInfo = new AigcVideoRedrawTaskInputFileInfo();
            $this->FileInfo->deserialize($param["FileInfo"]);
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new AigcVideoRedrawOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }
    }
}
