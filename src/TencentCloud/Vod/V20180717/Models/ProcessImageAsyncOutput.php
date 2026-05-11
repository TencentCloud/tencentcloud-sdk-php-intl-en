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
 * Output of asynchronous task processing for images.
 *
 * @method ProcessImageAsyncOutputFileInfo getFileInfo() Obtain Output file information of asynchronous image processing tasks.
 * @method void setFileInfo(ProcessImageAsyncOutputFileInfo $FileInfo) Set Output file information of asynchronous image processing tasks.
 * @method string getOutputText() Obtain Image understanding result.
 * @method void setOutputText(string $OutputText) Set Image understanding result.
 */
class ProcessImageAsyncOutput extends AbstractModel
{
    /**
     * @var ProcessImageAsyncOutputFileInfo Output file information of asynchronous image processing tasks.
     */
    public $FileInfo;

    /**
     * @var string Image understanding result.
     */
    public $OutputText;

    /**
     * @param ProcessImageAsyncOutputFileInfo $FileInfo Output file information of asynchronous image processing tasks.
     * @param string $OutputText Image understanding result.
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
            $this->FileInfo = new ProcessImageAsyncOutputFileInfo();
            $this->FileInfo->deserialize($param["FileInfo"]);
        }

        if (array_key_exists("OutputText",$param) and $param["OutputText"] !== null) {
            $this->OutputText = $param["OutputText"];
        }
    }
}
