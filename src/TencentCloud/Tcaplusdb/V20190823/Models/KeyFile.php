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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The file of keys used to import partial snapshot data
 *
 * @method string getFileName() Obtain Key file name
 * @method void setFileName(string $FileName) Set Key file name
 * @method string getFileExtType() Obtain Key file extension
 * @method void setFileExtType(string $FileExtType) Set Key file extension
 * @method string getFileContent() Obtain Key file content
 * @method void setFileContent(string $FileContent) Set Key file content
 * @method integer getFileSize() Obtain Key file size
 * @method void setFileSize(integer $FileSize) Set Key file size
 */
class KeyFile extends AbstractModel
{
    /**
     * @var string Key file name
     */
    public $FileName;

    /**
     * @var string Key file extension
     */
    public $FileExtType;

    /**
     * @var string Key file content
     */
    public $FileContent;

    /**
     * @var integer Key file size
     */
    public $FileSize;

    /**
     * @param string $FileName Key file name
     * @param string $FileExtType Key file extension
     * @param string $FileContent Key file content
     * @param integer $FileSize Key file size
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileExtType",$param) and $param["FileExtType"] !== null) {
            $this->FileExtType = $param["FileExtType"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }
    }
}
