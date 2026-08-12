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
 * Host vulnerability component
 *
 * @method HostBriefInfo getHostInfo() Obtain <p>Host brief information</p>
 * @method void setHostInfo(HostBriefInfo $HostInfo) Set <p>Host brief information</p>
 * @method string getEffectVersion() Obtain <p>Affected component version</p>
 * @method void setEffectVersion(string $EffectVersion) Set <p>Affected component version</p>
 * @method string getPath() Obtain <p>Installation path of the component on the host</p>
 * @method void setPath(string $Path) Set <p>Installation path of the component on the host</p>
 * @method string getProcessID() Obtain <p>Associated process ID.</p>
 * @method void setProcessID(string $ProcessID) Set <p>Associated process ID.</p>
 * @method string getFixCommand() Obtain <p>Fix Command (only display)</p>
 * @method void setFixCommand(string $FixCommand) Set <p>Fix Command (only display)</p>
 * @method string getName() Obtain <p>Component name.</p>
 * @method void setName(string $Name) Set <p>Component name.</p>
 */
class HostVulComponent extends AbstractModel
{
    /**
     * @var HostBriefInfo <p>Host brief information</p>
     */
    public $HostInfo;

    /**
     * @var string <p>Affected component version</p>
     */
    public $EffectVersion;

    /**
     * @var string <p>Installation path of the component on the host</p>
     */
    public $Path;

    /**
     * @var string <p>Associated process ID.</p>
     */
    public $ProcessID;

    /**
     * @var string <p>Fix Command (only display)</p>
     */
    public $FixCommand;

    /**
     * @var string <p>Component name.</p>
     */
    public $Name;

    /**
     * @param HostBriefInfo $HostInfo <p>Host brief information</p>
     * @param string $EffectVersion <p>Affected component version</p>
     * @param string $Path <p>Installation path of the component on the host</p>
     * @param string $ProcessID <p>Associated process ID.</p>
     * @param string $FixCommand <p>Fix Command (only display)</p>
     * @param string $Name <p>Component name.</p>
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
        if (array_key_exists("HostInfo",$param) and $param["HostInfo"] !== null) {
            $this->HostInfo = new HostBriefInfo();
            $this->HostInfo->deserialize($param["HostInfo"]);
        }

        if (array_key_exists("EffectVersion",$param) and $param["EffectVersion"] !== null) {
            $this->EffectVersion = $param["EffectVersion"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("ProcessID",$param) and $param["ProcessID"] !== null) {
            $this->ProcessID = $param["ProcessID"];
        }

        if (array_key_exists("FixCommand",$param) and $param["FixCommand"] !== null) {
            $this->FixCommand = $param["FixCommand"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
