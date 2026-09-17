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
 * 
 *
 * @method ProcessImageAsyncOutputFileInfo getFileInfo() Obtain 
 * @method void setFileInfo(ProcessImageAsyncOutputFileInfo $FileInfo) Set 
 * @method string getOutputText() Obtain 
 * @method void setOutputText(string $OutputText) Set 
 */
class ProcessImageAsyncOutput extends AbstractModel
{
    /**
     * @var ProcessImageAsyncOutputFileInfo 
     */
    public $FileInfo;

    /**
     * @var string 
     */
    public $OutputText;

    /**
     * @param ProcessImageAsyncOutputFileInfo $FileInfo 
     * @param string $OutputText 
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
