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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DoDirectoryOperation request structure.
 *
 * @method string getFileSystemId() Obtain File system ID. currently, only Turbo series file systems support calling this api. general series file systems (including enhanced) do not support calling.
 * @method void setFileSystemId(string $FileSystemId) Set File system ID. currently, only Turbo series file systems support calling this api. general series file systems (including enhanced) do not support calling.
 * @method string getOpetationType() Obtain create a directory, equivalent to mkdir.
check: confirm the existence of the directory, equivalent to stat.
move: rename a file or directory, equivalent to mv.
 * @method void setOpetationType(string $OpetationType) Set create a directory, equivalent to mkdir.
check: confirm the existence of the directory, equivalent to stat.
move: rename a file or directory, equivalent to mv.
 * @method string getDirectoryPath() Obtain Absolute path of the directory. recursive creation is enabled by default (if the directory contains non-existent subdirectories, create the corresponding subdirectory first).
 * @method void setDirectoryPath(string $DirectoryPath) Set Absolute path of the directory. recursive creation is enabled by default (if the directory contains non-existent subdirectories, create the corresponding subdirectory first).
 * @method string getMode() Obtain Permission to create directory. if not specified, it defaults to 0755. if OperationType is check, this value is meaningless.
 * @method void setMode(string $Mode) Set Permission to create directory. if not specified, it defaults to 0755. if OperationType is check, this value is meaningless.
 * @method string getDestPath() Obtain The destination directory name for the mv operation. the path must start with /cfs/.
 * @method void setDestPath(string $DestPath) Set The destination directory name for the mv operation. the path must start with /cfs/.
 */
class DoDirectoryOperationRequest extends AbstractModel
{
    /**
     * @var string File system ID. currently, only Turbo series file systems support calling this api. general series file systems (including enhanced) do not support calling.
     */
    public $FileSystemId;

    /**
     * @var string create a directory, equivalent to mkdir.
check: confirm the existence of the directory, equivalent to stat.
move: rename a file or directory, equivalent to mv.
     */
    public $OpetationType;

    /**
     * @var string Absolute path of the directory. recursive creation is enabled by default (if the directory contains non-existent subdirectories, create the corresponding subdirectory first).
     */
    public $DirectoryPath;

    /**
     * @var string Permission to create directory. if not specified, it defaults to 0755. if OperationType is check, this value is meaningless.
     */
    public $Mode;

    /**
     * @var string The destination directory name for the mv operation. the path must start with /cfs/.
     */
    public $DestPath;

    /**
     * @param string $FileSystemId File system ID. currently, only Turbo series file systems support calling this api. general series file systems (including enhanced) do not support calling.
     * @param string $OpetationType create a directory, equivalent to mkdir.
check: confirm the existence of the directory, equivalent to stat.
move: rename a file or directory, equivalent to mv.
     * @param string $DirectoryPath Absolute path of the directory. recursive creation is enabled by default (if the directory contains non-existent subdirectories, create the corresponding subdirectory first).
     * @param string $Mode Permission to create directory. if not specified, it defaults to 0755. if OperationType is check, this value is meaningless.
     * @param string $DestPath The destination directory name for the mv operation. the path must start with /cfs/.
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("OpetationType",$param) and $param["OpetationType"] !== null) {
            $this->OpetationType = $param["OpetationType"];
        }

        if (array_key_exists("DirectoryPath",$param) and $param["DirectoryPath"] !== null) {
            $this->DirectoryPath = $param["DirectoryPath"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("DestPath",$param) and $param["DestPath"] !== null) {
            $this->DestPath = $param["DestPath"];
        }
    }
}
