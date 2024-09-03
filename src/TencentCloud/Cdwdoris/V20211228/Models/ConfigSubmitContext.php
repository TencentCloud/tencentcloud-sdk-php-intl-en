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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration file modification information
 *
 * @method string getFileName() Obtain Configuration file's name
 * @method void setFileName(string $FileName) Set Configuration file's name
 * @method string getNewConfValue() Obtain New Base64-encoded content of the configuration file
 * @method void setNewConfValue(string $NewConfValue) Set New Base64-encoded content of the configuration file
 * @method string getOldConfValue() Obtain Original Base64-encoded content of the configuration file
 * @method void setOldConfValue(string $OldConfValue) Set Original Base64-encoded content of the configuration file
 * @method string getFilePath() Obtain File path
 * @method void setFilePath(string $FilePath) Set File path
 */
class ConfigSubmitContext extends AbstractModel
{
    /**
     * @var string Configuration file's name
     */
    public $FileName;

    /**
     * @var string New Base64-encoded content of the configuration file
     */
    public $NewConfValue;

    /**
     * @var string Original Base64-encoded content of the configuration file
     */
    public $OldConfValue;

    /**
     * @var string File path
     */
    public $FilePath;

    /**
     * @param string $FileName Configuration file's name
     * @param string $NewConfValue New Base64-encoded content of the configuration file
     * @param string $OldConfValue Original Base64-encoded content of the configuration file
     * @param string $FilePath File path
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

        if (array_key_exists("NewConfValue",$param) and $param["NewConfValue"] !== null) {
            $this->NewConfValue = $param["NewConfValue"];
        }

        if (array_key_exists("OldConfValue",$param) and $param["OldConfValue"] !== null) {
            $this->OldConfValue = $param["OldConfValue"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }
    }
}
