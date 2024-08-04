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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cos destination setting.
 *
 * @method string getRegion() Obtain Region of COS.
 * @method void setRegion(string $Region) Set Region of COS.
 * @method string getBucket() Obtain Bucket name of COS.
 * @method void setBucket(string $Bucket) Set Bucket name of COS.
 * @method string getFilePath() Obtain File output path, which can be empty. If it is not empty, it  ends with /.
 * @method void setFilePath(string $FilePath) Set File output path, which can be empty. If it is not empty, it  ends with /.
 * @method string getFileName() Obtain User-defined name, supports alphanumeric characters, underscores, and hyphens, with a length between 1 and 32 characters.
 * @method void setFileName(string $FileName) Set User-defined name, supports alphanumeric characters, underscores, and hyphens, with a length between 1 and 32 characters.
 * @method string getFileExt() Obtain File suffix, only supports `jpg`.
 * @method void setFileExt(string $FileExt) Set File suffix, only supports `jpg`.
 * @method string getTimeFormat() Obtain Support `unix` or `utc0`, default unix.
 * @method void setTimeFormat(string $TimeFormat) Set Support `unix` or `utc0`, default unix.
 */
class CosSettings extends AbstractModel
{
    /**
     * @var string Region of COS.
     */
    public $Region;

    /**
     * @var string Bucket name of COS.
     */
    public $Bucket;

    /**
     * @var string File output path, which can be empty. If it is not empty, it  ends with /.
     */
    public $FilePath;

    /**
     * @var string User-defined name, supports alphanumeric characters, underscores, and hyphens, with a length between 1 and 32 characters.
     */
    public $FileName;

    /**
     * @var string File suffix, only supports `jpg`.
     */
    public $FileExt;

    /**
     * @var string Support `unix` or `utc0`, default unix.
     */
    public $TimeFormat;

    /**
     * @param string $Region Region of COS.
     * @param string $Bucket Bucket name of COS.
     * @param string $FilePath File output path, which can be empty. If it is not empty, it  ends with /.
     * @param string $FileName User-defined name, supports alphanumeric characters, underscores, and hyphens, with a length between 1 and 32 characters.
     * @param string $FileExt File suffix, only supports `jpg`.
     * @param string $TimeFormat Support `unix` or `utc0`, default unix.
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileExt",$param) and $param["FileExt"] !== null) {
            $this->FileExt = $param["FileExt"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }
    }
}
