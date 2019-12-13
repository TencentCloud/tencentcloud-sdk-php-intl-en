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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getLocalPath() 获取Mounting point. For Linux, this parameter should be a valid path. For Windows, this parameter should be a system disk letter such as "H:\\"
 * @method void setLocalPath(string $LocalPath) 设置Mounting point. For Linux, this parameter should be a valid path. For Windows, this parameter should be a system disk letter such as "H:\\"
 * @method string getFileSystemType() 获取File system type. For Linux, "EXT3" and "EXT4" are supported and the default value is "EXT3". For Windows, only "NTFS" is supported
 * @method void setFileSystemType(string $FileSystemType) 设置File system type. For Linux, "EXT3" and "EXT4" are supported and the default value is "EXT3". For Windows, only "NTFS" is supported
 */

/**
 *Data disk mounting option
 */
class MountDataDisk extends AbstractModel
{
    /**
     * @var string Mounting point. For Linux, this parameter should be a valid path. For Windows, this parameter should be a system disk letter such as "H:\\"
     */
    public $LocalPath;

    /**
     * @var string File system type. For Linux, "EXT3" and "EXT4" are supported and the default value is "EXT3". For Windows, only "NTFS" is supported
     */
    public $FileSystemType;
    /**
     * @param string $LocalPath Mounting point. For Linux, this parameter should be a valid path. For Windows, this parameter should be a system disk letter such as "H:\\"
     * @param string $FileSystemType File system type. For Linux, "EXT3" and "EXT4" are supported and the default value is "EXT3". For Windows, only "NTFS" is supported
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LocalPath",$param) and $param["LocalPath"] !== null) {
            $this->LocalPath = $param["LocalPath"];
        }

        if (array_key_exists("FileSystemType",$param) and $param["FileSystemType"] !== null) {
            $this->FileSystemType = $param["FileSystemType"];
        }
    }
}
