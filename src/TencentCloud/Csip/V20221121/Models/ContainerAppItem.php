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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Container application information.
 *
 * @method string getMainType() Obtain Application comprehensive type, for example, web, app, or db
 * @method void setMainType(string $MainType) Set Application comprehensive type, for example, web, app, or db
 * @method string getType() Obtain Specific application types, such as nginx or redis
 * @method void setType(string $Type) Set Specific application types, such as nginx or redis
 * @method string getVersion() Obtain Application version number
 * @method void setVersion(string $Version) Set Application version number
 * @method string getRunAs() Obtain Running username.
 * @method void setRunAs(string $RunAs) Set Running username.
 * @method string getExePath() Obtain Executable file path
 * @method void setExePath(string $ExePath) Set Executable file path
 * @method string getConfigPath() Obtain Configuration file path
 * @method void setConfigPath(string $ConfigPath) Set Configuration file path
 * @method integer getProcessCnt() Obtain Number of associated processes
 * @method void setProcessCnt(integer $ProcessCnt) Set Number of associated processes
 */
class ContainerAppItem extends AbstractModel
{
    /**
     * @var string Application comprehensive type, for example, web, app, or db
     */
    public $MainType;

    /**
     * @var string Specific application types, such as nginx or redis
     */
    public $Type;

    /**
     * @var string Application version number
     */
    public $Version;

    /**
     * @var string Running username.
     */
    public $RunAs;

    /**
     * @var string Executable file path
     */
    public $ExePath;

    /**
     * @var string Configuration file path
     */
    public $ConfigPath;

    /**
     * @var integer Number of associated processes
     */
    public $ProcessCnt;

    /**
     * @param string $MainType Application comprehensive type, for example, web, app, or db
     * @param string $Type Specific application types, such as nginx or redis
     * @param string $Version Application version number
     * @param string $RunAs Running username.
     * @param string $ExePath Executable file path
     * @param string $ConfigPath Configuration file path
     * @param integer $ProcessCnt Number of associated processes
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
        if (array_key_exists("MainType",$param) and $param["MainType"] !== null) {
            $this->MainType = $param["MainType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("RunAs",$param) and $param["RunAs"] !== null) {
            $this->RunAs = $param["RunAs"];
        }

        if (array_key_exists("ExePath",$param) and $param["ExePath"] !== null) {
            $this->ExePath = $param["ExePath"];
        }

        if (array_key_exists("ConfigPath",$param) and $param["ConfigPath"] !== null) {
            $this->ConfigPath = $param["ConfigPath"];
        }

        if (array_key_exists("ProcessCnt",$param) and $param["ProcessCnt"] !== null) {
            $this->ProcessCnt = $param["ProcessCnt"];
        }
    }
}
