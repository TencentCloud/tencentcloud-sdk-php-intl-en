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
 * Output information of the AIGC video conversion task.
 *
 * @method AigcVideoRedrawOutputFileInfo getFileInfo() Obtain <p>Output file information for AIGC video conversion task.</p>
 * @method void setFileInfo(AigcVideoRedrawOutputFileInfo $FileInfo) Set <p>Output file information for AIGC video conversion task.</p>
 */
class AigcVideoRedrawTaskOutput extends AbstractModel
{
    /**
     * @var AigcVideoRedrawOutputFileInfo <p>Output file information for AIGC video conversion task.</p>
     */
    public $FileInfo;

    /**
     * @param AigcVideoRedrawOutputFileInfo $FileInfo <p>Output file information for AIGC video conversion task.</p>
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
            $this->FileInfo = new AigcVideoRedrawOutputFileInfo();
            $this->FileInfo->deserialize($param["FileInfo"]);
        }
    }
}
