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
 * Host brief information
 *
 * @method string getInstanceID() Obtain <p>Cloud host instance ID<br>Parameter format: such as ins-xxxxxxxx</p>
 * @method void setInstanceID(string $InstanceID) Set <p>Cloud host instance ID<br>Parameter format: such as ins-xxxxxxxx</p>
 * @method string getName() Obtain <p>Host name.</p>
 * @method void setName(string $Name) Set <p>Host name.</p>
 * @method string getPublicIP() Obtain <p>Public IP address</p>
 * @method void setPublicIP(string $PublicIP) Set <p>Public IP address</p>
 * @method string getPrivateIP() Obtain <p>Private IP address</p>
 * @method void setPrivateIP(string $PrivateIP) Set <p>Private IP address</p>
 * @method string getDefendVersion() Obtain <p>Protection edition<br>Enumeration values:<br>NONE: no protection<br>BASIC: basic version<br>PRO: pro edition<br>ULTIMATE: flagship edition<br>PRO_LH: lightweight edition</p>
 * @method void setDefendVersion(string $DefendVersion) Set <p>Protection edition<br>Enumeration values:<br>NONE: no protection<br>BASIC: basic version<br>PRO: pro edition<br>ULTIMATE: flagship edition<br>PRO_LH: lightweight edition</p>
 * @method string getDefendStatus() Obtain <p>Vulnerability defense status<br>Enumeration values:<br>ENABLED: enabled<br>NOT_SUPPORTED: unsupported<br>NOT_ENABLED: not enabled</p>
 * @method void setDefendStatus(string $DefendStatus) Set <p>Vulnerability defense status<br>Enumeration values:<br>ENABLED: enabled<br>NOT_SUPPORTED: unsupported<br>NOT_ENABLED: not enabled</p>
 * @method AccountBriefInfo getAccount() Obtain <p>Account information belonging to</p>
 * @method void setAccount(AccountBriefInfo $Account) Set <p>Account information belonging to</p>
 * @method string getInstanceStatus() Obtain <p>CVM instance status<br>Enumeration value:<br>RUNNING: running<br>STOPPED: stopped<br>UNKNOWN: unknown</p>
 * @method void setInstanceStatus(string $InstanceStatus) Set <p>CVM instance status<br>Enumeration value:<br>RUNNING: running<br>STOPPED: stopped<br>UNKNOWN: unknown</p>
 * @method string getRiskStatus() Obtain <p>Remediation status enumeration values.</p><p>Enumeration values: </p><ul><li>PENDING: To be fixed, </li><li>SCANNING: Scanning, </li><li>FIXED: Fixed, </li><li>IGNORED: Ignored, </li><li>FIXING: In remediation, </li><li>FIX_FAILED: Fix failure, </li><li>NEED_REBOOT: Pending restart.</li></ul>
 * @method void setRiskStatus(string $RiskStatus) Set <p>Remediation status enumeration values.</p><p>Enumeration values: </p><ul><li>PENDING: To be fixed, </li><li>SCANNING: Scanning, </li><li>FIXED: Fixed, </li><li>IGNORED: Ignored, </li><li>FIXING: In remediation, </li><li>FIX_FAILED: Fix failure, </li><li>NEED_REBOOT: Pending restart.</li></ul>
 * @method VPRRatingInfo getVPRRating() Obtain <p>VPR rating information (including rating result and details in each dimension)</p>
 * @method void setVPRRating(VPRRatingInfo $VPRRating) Set <p>VPR rating information (including rating result and details in each dimension)</p>
 * @method string getAgentStatus() Obtain <p>CWP Agent status<br>Enumeration values:<br>ONLINE: ONLINE<br>OFFLINE: OFFLINE<br>UNINSTALLED: not installed</p>
 * @method void setAgentStatus(string $AgentStatus) Set <p>CWP Agent status<br>Enumeration values:<br>ONLINE: ONLINE<br>OFFLINE: OFFLINE<br>UNINSTALLED: not installed</p>
 * @method array getTagItem() Obtain <p>Asset tag list (CSIP internal asset tags)</p>
 * @method void setTagItem(array $TagItem) Set <p>Asset tag list (CSIP internal asset tags)</p>
 * @method array getCloudTag() Obtain <p>Cloud tag list (cloud asset side Tag)</p>
 * @method void setCloudTag(array $CloudTag) Set <p>Cloud tag list (cloud asset side Tag)</p>
 */
class VulHostBriefInfo extends AbstractModel
{
    /**
     * @var string <p>Cloud host instance ID<br>Parameter format: such as ins-xxxxxxxx</p>
     */
    public $InstanceID;

    /**
     * @var string <p>Host name.</p>
     */
    public $Name;

    /**
     * @var string <p>Public IP address</p>
     */
    public $PublicIP;

    /**
     * @var string <p>Private IP address</p>
     */
    public $PrivateIP;

    /**
     * @var string <p>Protection edition<br>Enumeration values:<br>NONE: no protection<br>BASIC: basic version<br>PRO: pro edition<br>ULTIMATE: flagship edition<br>PRO_LH: lightweight edition</p>
     */
    public $DefendVersion;

    /**
     * @var string <p>Vulnerability defense status<br>Enumeration values:<br>ENABLED: enabled<br>NOT_SUPPORTED: unsupported<br>NOT_ENABLED: not enabled</p>
     */
    public $DefendStatus;

    /**
     * @var AccountBriefInfo <p>Account information belonging to</p>
     */
    public $Account;

    /**
     * @var string <p>CVM instance status<br>Enumeration value:<br>RUNNING: running<br>STOPPED: stopped<br>UNKNOWN: unknown</p>
     */
    public $InstanceStatus;

    /**
     * @var string <p>Remediation status enumeration values.</p><p>Enumeration values: </p><ul><li>PENDING: To be fixed, </li><li>SCANNING: Scanning, </li><li>FIXED: Fixed, </li><li>IGNORED: Ignored, </li><li>FIXING: In remediation, </li><li>FIX_FAILED: Fix failure, </li><li>NEED_REBOOT: Pending restart.</li></ul>
     */
    public $RiskStatus;

    /**
     * @var VPRRatingInfo <p>VPR rating information (including rating result and details in each dimension)</p>
     */
    public $VPRRating;

    /**
     * @var string <p>CWP Agent status<br>Enumeration values:<br>ONLINE: ONLINE<br>OFFLINE: OFFLINE<br>UNINSTALLED: not installed</p>
     */
    public $AgentStatus;

    /**
     * @var array <p>Asset tag list (CSIP internal asset tags)</p>
     */
    public $TagItem;

    /**
     * @var array <p>Cloud tag list (cloud asset side Tag)</p>
     */
    public $CloudTag;

    /**
     * @param string $InstanceID <p>Cloud host instance ID<br>Parameter format: such as ins-xxxxxxxx</p>
     * @param string $Name <p>Host name.</p>
     * @param string $PublicIP <p>Public IP address</p>
     * @param string $PrivateIP <p>Private IP address</p>
     * @param string $DefendVersion <p>Protection edition<br>Enumeration values:<br>NONE: no protection<br>BASIC: basic version<br>PRO: pro edition<br>ULTIMATE: flagship edition<br>PRO_LH: lightweight edition</p>
     * @param string $DefendStatus <p>Vulnerability defense status<br>Enumeration values:<br>ENABLED: enabled<br>NOT_SUPPORTED: unsupported<br>NOT_ENABLED: not enabled</p>
     * @param AccountBriefInfo $Account <p>Account information belonging to</p>
     * @param string $InstanceStatus <p>CVM instance status<br>Enumeration value:<br>RUNNING: running<br>STOPPED: stopped<br>UNKNOWN: unknown</p>
     * @param string $RiskStatus <p>Remediation status enumeration values.</p><p>Enumeration values: </p><ul><li>PENDING: To be fixed, </li><li>SCANNING: Scanning, </li><li>FIXED: Fixed, </li><li>IGNORED: Ignored, </li><li>FIXING: In remediation, </li><li>FIX_FAILED: Fix failure, </li><li>NEED_REBOOT: Pending restart.</li></ul>
     * @param VPRRatingInfo $VPRRating <p>VPR rating information (including rating result and details in each dimension)</p>
     * @param string $AgentStatus <p>CWP Agent status<br>Enumeration values:<br>ONLINE: ONLINE<br>OFFLINE: OFFLINE<br>UNINSTALLED: not installed</p>
     * @param array $TagItem <p>Asset tag list (CSIP internal asset tags)</p>
     * @param array $CloudTag <p>Cloud tag list (cloud asset side Tag)</p>
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("PrivateIP",$param) and $param["PrivateIP"] !== null) {
            $this->PrivateIP = $param["PrivateIP"];
        }

        if (array_key_exists("DefendVersion",$param) and $param["DefendVersion"] !== null) {
            $this->DefendVersion = $param["DefendVersion"];
        }

        if (array_key_exists("DefendStatus",$param) and $param["DefendStatus"] !== null) {
            $this->DefendStatus = $param["DefendStatus"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = new AccountBriefInfo();
            $this->Account->deserialize($param["Account"]);
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
        }

        if (array_key_exists("VPRRating",$param) and $param["VPRRating"] !== null) {
            $this->VPRRating = new VPRRatingInfo();
            $this->VPRRating->deserialize($param["VPRRating"]);
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("TagItem",$param) and $param["TagItem"] !== null) {
            $this->TagItem = [];
            foreach ($param["TagItem"] as $key => $value){
                $obj = new MiniTagItem();
                $obj->deserialize($value);
                array_push($this->TagItem, $obj);
            }
        }

        if (array_key_exists("CloudTag",$param) and $param["CloudTag"] !== null) {
            $this->CloudTag = [];
            foreach ($param["CloudTag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->CloudTag, $obj);
            }
        }
    }
}
