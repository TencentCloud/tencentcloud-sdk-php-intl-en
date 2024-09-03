<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFilePath(string $FilePath) Set Application file path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileState() Obtain File status. NO_EXIST: The file does not exist; EXIST: The file exists.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileState(string $FileState) Set File status. NO_EXIST: The file does not exist; EXIST: The file exists.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class UserApplicationFileInfo extends AbstractModel
{
    /**
     * @var string Application file path.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FilePath;

    /**
     * @var string File status. NO_EXIST: The file does not exist; EXIST: The file exists.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileState;

    /**
     * @param string $FilePath Application file path.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileState File status. NO_EXIST: The file does not exist; EXIST: The file exists.
Note: This field may return null, indicating that no valid values can be obtained.
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
