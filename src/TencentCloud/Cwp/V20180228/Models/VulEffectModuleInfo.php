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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of components affected by vulnerabilities
 *
 * @method string getName() Obtain Component name
 * @method void setName(string $Name) Set Component name
 * @method array getUuids() Obtain Affected host uuid
 * @method void setUuids(array $Uuids) Set Affected host uuid
 * @method string getRule() Obtain Affected component version
 * @method void setRule(string $Rule) Set Affected component version
 * @method string getPath() Obtain Component path
 * @method void setPath(string $Path) Set Component path
 * @method string getVersion() Obtain Component version
 * @method void setVersion(string $Version) Set Component version
 * @method string getFixCmd() Obtain Fix Command
 * @method void setFixCmd(string $FixCmd) Set Fix Command
 * @method array getQuuids() Obtain Affected host quuid
 * @method void setQuuids(array $Quuids) Set Affected host quuid
 */
class VulEffectModuleInfo extends AbstractModel
{
    /**
     * @var string Component name
     */
    public $Name;

    /**
     * @var array Affected host uuid
     */
    public $Uuids;

    /**
     * @var string Affected component version
     */
    public $Rule;

    /**
     * @var string Component path
     */
    public $Path;

    /**
     * @var string Component version
     */
    public $Version;

    /**
     * @var string Fix Command
     */
    public $FixCmd;

    /**
     * @var array Affected host quuid
     */
    public $Quuids;

    /**
     * @param string $Name Component name
     * @param array $Uuids Affected host uuid
     * @param string $Rule Affected component version
     * @param string $Path Component path
     * @param string $Version Component version
     * @param string $FixCmd Fix Command
     * @param array $Quuids Affected host quuid
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("FixCmd",$param) and $param["FixCmd"] !== null) {
            $this->FixCmd = $param["FixCmd"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }
    }
}
