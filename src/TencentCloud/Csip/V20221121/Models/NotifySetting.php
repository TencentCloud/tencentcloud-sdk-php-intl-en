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
 * Notification settings
 *
 * @method string getModule() Obtain <p>Notification module</p><p>Enumeration values:</p><ul><li>AkSk: Cloud API Risk Governance</li><li>Alert: Alert Center</li><li>Agent: Client</li></ul>
 * @method void setModule(string $Module) Set <p>Notification module</p><p>Enumeration values:</p><ul><li>AkSk: Cloud API Risk Governance</li><li>Alert: Alert Center</li><li>Agent: Client</li></ul>
 * @method integer getMode() Obtain <p>Notification settings mode</p><p>Enumeration values:</p><ul><li>0: Standard mode</li><li>1: Advanced mode</li></ul>
 * @method void setMode(integer $Mode) Set <p>Notification settings mode</p><p>Enumeration values:</p><ul><li>0: Standard mode</li><li>1: Advanced mode</li></ul>
 * @method integer getStatus() Obtain <p>Notification status</p><p>Enumeration values:</p><ul><li>0: notification off</li><li>1: notification on</li></ul>
 * @method void setStatus(integer $Status) Set <p>Notification status</p><p>Enumeration values:</p><ul><li>0: notification off</li><li>1: notification on</li></ul>
 * @method string getBeginTime() Obtain <p>Notification start time</p><p>Parameter format: hh:mm:ss</p>
 * @method void setBeginTime(string $BeginTime) Set <p>Notification start time</p><p>Parameter format: hh:mm:ss</p>
 * @method string getEndTime() Obtain <p>Notification end time</p><p>Parameter format: hh:mm:ss</p>
 * @method void setEndTime(string $EndTime) Set <p>Notification end time</p><p>Parameter format: hh:mm:ss</p>
 * @method integer getAssetRange() Obtain <p>Asset scope</p><p>Enumeration values:</p><ul><li>1: All hosts</li><li>2: Selected hosts</li><li>3: Select by tag</li></ul>
 * @method void setAssetRange(integer $AssetRange) Set <p>Asset scope</p><p>Enumeration values:</p><ul><li>1: All hosts</li><li>2: Selected hosts</li><li>3: Select by tag</li></ul>
 * @method array getOption() Obtain <p>Notification option</p><p>Enumeration values:</p><ul><li>CRITICAL: Alarm level: critical</li><li>HIGH: Alarm level: high risk</li><li>MEDIUM: Alarm level: medium risk</li><li>LOW: Alarm level: low risk</li><li>INFO: Alarm level: reminder</li><li>AGENT_UNINSTALL: Client uninstallation</li><li>AGENT_OFFLINE: Client offline</li></ul>
 * @method void setOption(array $Option) Set <p>Notification option</p><p>Enumeration values:</p><ul><li>CRITICAL: Alarm level: critical</li><li>HIGH: Alarm level: high risk</li><li>MEDIUM: Alarm level: medium risk</li><li>LOW: Alarm level: low risk</li><li>INFO: Alarm level: reminder</li><li>AGENT_UNINSTALL: Client uninstallation</li><li>AGENT_OFFLINE: Client offline</li></ul>
 * @method string getSubModule() Obtain <p>Notification module (secondary module)</p>
 * @method void setSubModule(string $SubModule) Set <p>Notification module (secondary module)</p>
 * @method array getItem() Obtain <p>Handling status</p>
 * @method void setItem(array $Item) Set <p>Handling status</p>
 */
class NotifySetting extends AbstractModel
{
    /**
     * @var string <p>Notification module</p><p>Enumeration values:</p><ul><li>AkSk: Cloud API Risk Governance</li><li>Alert: Alert Center</li><li>Agent: Client</li></ul>
     */
    public $Module;

    /**
     * @var integer <p>Notification settings mode</p><p>Enumeration values:</p><ul><li>0: Standard mode</li><li>1: Advanced mode</li></ul>
     */
    public $Mode;

    /**
     * @var integer <p>Notification status</p><p>Enumeration values:</p><ul><li>0: notification off</li><li>1: notification on</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Notification start time</p><p>Parameter format: hh:mm:ss</p>
     */
    public $BeginTime;

    /**
     * @var string <p>Notification end time</p><p>Parameter format: hh:mm:ss</p>
     */
    public $EndTime;

    /**
     * @var integer <p>Asset scope</p><p>Enumeration values:</p><ul><li>1: All hosts</li><li>2: Selected hosts</li><li>3: Select by tag</li></ul>
     */
    public $AssetRange;

    /**
     * @var array <p>Notification option</p><p>Enumeration values:</p><ul><li>CRITICAL: Alarm level: critical</li><li>HIGH: Alarm level: high risk</li><li>MEDIUM: Alarm level: medium risk</li><li>LOW: Alarm level: low risk</li><li>INFO: Alarm level: reminder</li><li>AGENT_UNINSTALL: Client uninstallation</li><li>AGENT_OFFLINE: Client offline</li></ul>
     */
    public $Option;

    /**
     * @var string <p>Notification module (secondary module)</p>
     */
    public $SubModule;

    /**
     * @var array <p>Handling status</p>
     */
    public $Item;

    /**
     * @param string $Module <p>Notification module</p><p>Enumeration values:</p><ul><li>AkSk: Cloud API Risk Governance</li><li>Alert: Alert Center</li><li>Agent: Client</li></ul>
     * @param integer $Mode <p>Notification settings mode</p><p>Enumeration values:</p><ul><li>0: Standard mode</li><li>1: Advanced mode</li></ul>
     * @param integer $Status <p>Notification status</p><p>Enumeration values:</p><ul><li>0: notification off</li><li>1: notification on</li></ul>
     * @param string $BeginTime <p>Notification start time</p><p>Parameter format: hh:mm:ss</p>
     * @param string $EndTime <p>Notification end time</p><p>Parameter format: hh:mm:ss</p>
     * @param integer $AssetRange <p>Asset scope</p><p>Enumeration values:</p><ul><li>1: All hosts</li><li>2: Selected hosts</li><li>3: Select by tag</li></ul>
     * @param array $Option <p>Notification option</p><p>Enumeration values:</p><ul><li>CRITICAL: Alarm level: critical</li><li>HIGH: Alarm level: high risk</li><li>MEDIUM: Alarm level: medium risk</li><li>LOW: Alarm level: low risk</li><li>INFO: Alarm level: reminder</li><li>AGENT_UNINSTALL: Client uninstallation</li><li>AGENT_OFFLINE: Client offline</li></ul>
     * @param string $SubModule <p>Notification module (secondary module)</p>
     * @param array $Item <p>Handling status</p>
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AssetRange",$param) and $param["AssetRange"] !== null) {
            $this->AssetRange = $param["AssetRange"];
        }

        if (array_key_exists("Option",$param) and $param["Option"] !== null) {
            $this->Option = $param["Option"];
        }

        if (array_key_exists("SubModule",$param) and $param["SubModule"] !== null) {
            $this->SubModule = $param["SubModule"];
        }

        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = $param["Item"];
        }
    }
}
