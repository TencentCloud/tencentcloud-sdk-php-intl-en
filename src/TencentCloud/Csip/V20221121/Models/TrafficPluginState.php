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
 * AI Agent traffic sandbox plug-in status
 *
 * @method string getInstallStatus() Obtain Plugin installation status (upper-level aggregation)
Enumeration value:
NONE: not installed
INSTALLING: installing
INSTALLED: installed
INSTALL_FAIL: installation failure
 * @method void setInstallStatus(string $InstallStatus) Set Plugin installation status (upper-level aggregation)
Enumeration value:
NONE: not installed
INSTALLING: installing
INSTALLED: installed
INSTALL_FAIL: installation failure
 * @method string getStatus() Obtain Plug-in installation sub-status. The value corresponds to InstallStatus: empty string when not installed (InstallStatus=UNINSTALL); SUCCESS when installation is successful (InstallStatus=INSTALLED); specific failure reason when installation fails (InstallStatus=INSTALL_FAIL).
Enumeration value:
NOT_SUPPORT: The environment does not support it
CONTAINER_NOT_FOUND: container does not exist.
REQUIRE_RESTART: restart required
CA_FAILED: CA failed
EBPF_FAILED: eBPF failure
IPTABLE_FAILED: iptables failed.
REDIRECT_FAILED: Traffic redirection failed.
 * @method void setStatus(string $Status) Set Plug-in installation sub-status. The value corresponds to InstallStatus: empty string when not installed (InstallStatus=UNINSTALL); SUCCESS when installation is successful (InstallStatus=INSTALLED); specific failure reason when installation fails (InstallStatus=INSTALL_FAIL).
Enumeration value:
NOT_SUPPORT: The environment does not support it
CONTAINER_NOT_FOUND: container does not exist.
REQUIRE_RESTART: restart required
CA_FAILED: CA failed
EBPF_FAILED: eBPF failure
IPTABLE_FAILED: iptables failed.
REDIRECT_FAILED: Traffic redirection failed.
 * @method string getMessage() Obtain Status copywriting (an internationalized description derived from Status based on the request language)
 * @method void setMessage(string $Message) Set Status copywriting (an internationalized description derived from Status based on the request language)
 * @method string getActivityTime() Obtain Recent activity time of the plug-in
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
 * @method void setActivityTime(string $ActivityTime) Set Recent activity time of the plug-in
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
 */
class TrafficPluginState extends AbstractModel
{
    /**
     * @var string Plugin installation status (upper-level aggregation)
Enumeration value:
NONE: not installed
INSTALLING: installing
INSTALLED: installed
INSTALL_FAIL: installation failure
     */
    public $InstallStatus;

    /**
     * @var string Plug-in installation sub-status. The value corresponds to InstallStatus: empty string when not installed (InstallStatus=UNINSTALL); SUCCESS when installation is successful (InstallStatus=INSTALLED); specific failure reason when installation fails (InstallStatus=INSTALL_FAIL).
Enumeration value:
NOT_SUPPORT: The environment does not support it
CONTAINER_NOT_FOUND: container does not exist.
REQUIRE_RESTART: restart required
CA_FAILED: CA failed
EBPF_FAILED: eBPF failure
IPTABLE_FAILED: iptables failed.
REDIRECT_FAILED: Traffic redirection failed.
     */
    public $Status;

    /**
     * @var string Status copywriting (an internationalized description derived from Status based on the request language)
     */
    public $Message;

    /**
     * @var string Recent activity time of the plug-in
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
     */
    public $ActivityTime;

    /**
     * @param string $InstallStatus Plugin installation status (upper-level aggregation)
Enumeration value:
NONE: not installed
INSTALLING: installing
INSTALLED: installed
INSTALL_FAIL: installation failure
     * @param string $Status Plug-in installation sub-status. The value corresponds to InstallStatus: empty string when not installed (InstallStatus=UNINSTALL); SUCCESS when installation is successful (InstallStatus=INSTALLED); specific failure reason when installation fails (InstallStatus=INSTALL_FAIL).
Enumeration value:
NOT_SUPPORT: The environment does not support it
CONTAINER_NOT_FOUND: container does not exist.
REQUIRE_RESTART: restart required
CA_FAILED: CA failed
EBPF_FAILED: eBPF failure
IPTABLE_FAILED: iptables failed.
REDIRECT_FAILED: Traffic redirection failed.
     * @param string $Message Status copywriting (an internationalized description derived from Status based on the request language)
     * @param string $ActivityTime Recent activity time of the plug-in
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
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
        if (array_key_exists("InstallStatus",$param) and $param["InstallStatus"] !== null) {
            $this->InstallStatus = $param["InstallStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ActivityTime",$param) and $param["ActivityTime"] !== null) {
            $this->ActivityTime = $param["ActivityTime"];
        }
    }
}
