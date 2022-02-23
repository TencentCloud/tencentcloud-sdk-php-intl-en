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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Release file list (sourcemap)
 *
 * @method string getVersion() Obtain File version
 * @method void setVersion(string $Version) Set File version
 * @method string getFileKey() Obtain Unique file key
 * @method void setFileKey(string $FileKey) Set Unique file key
 * @method string getFileName() Obtain Filename
 * @method void setFileName(string $FileName) Set Filename
 * @method string getFileHash() Obtain File hash
 * @method void setFileHash(string $FileHash) Set File hash
 * @method integer getID() Obtain File ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setID(integer $ID) Set File ID
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ReleaseFile extends AbstractModel
{
    /**
     * @var string File version
     */
    public $Version;

    /**
     * @var string Unique file key
     */
    public $FileKey;

    /**
     * @var string Filename
     */
    public $FileName;

    /**
     * @var string File hash
     */
    public $FileHash;

    /**
     * @var integer File ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ID;

    /**
     * @param string $Version File version
     * @param string $FileKey Unique file key
     * @param string $FileName Filename
     * @param string $FileHash File hash
     * @param integer $ID File ID
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("FileKey",$param) and $param["FileKey"] !== null) {
            $this->FileKey = $param["FileKey"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileHash",$param) and $param["FileHash"] !== null) {
            $this->FileHash = $param["FileHash"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
