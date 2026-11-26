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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application file information.
 *
 * @method string getFilePath() Obtain Application file path.
 * @method void setFilePath(string $FilePath) Set Application file path.
 * @method string getFileState() Obtain File status. NO_EXIST: not EXIST; EXIST: exist.
 * @method void setFileState(string $FileState) Set File status. NO_EXIST: not EXIST; EXIST: exist.
 */
class UserApplicationFileInfo extends AbstractModel
{
    /**
     * @var string Application file path.
     */
    public $FilePath;

    /**
     * @var string File status. NO_EXIST: not EXIST; EXIST: exist.
     */
    public $FileState;

    /**
     * @param string $FilePath Application file path.
     * @param string $FileState File status. NO_EXIST: not EXIST; EXIST: exist.
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
        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileState",$param) and $param["FileState"] !== null) {
            $this->FileState = $param["FileState"];
        }
    }
}
