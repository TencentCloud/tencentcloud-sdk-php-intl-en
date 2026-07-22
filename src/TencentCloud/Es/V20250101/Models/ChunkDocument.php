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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Document slice information
 *
 * @method string getFileType() Obtain File type, supports MD and TXT formats.
 * @method void setFileType(string $FileType) Set File type, supports MD and TXT formats.
 * @method string getFileContent() Obtain Text original, use string format input.
 * @method void setFileContent(string $FileContent) Set Text original, use string format input.
 */
class ChunkDocument extends AbstractModel
{
    /**
     * @var string File type, supports MD and TXT formats.
     */
    public $FileType;

    /**
     * @var string Text original, use string format input.
     */
    public $FileContent;

    /**
     * @param string $FileType File type, supports MD and TXT formats.
     * @param string $FileContent Text original, use string format input.
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
        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }
    }
}
