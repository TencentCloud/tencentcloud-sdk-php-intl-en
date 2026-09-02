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
 * EDR alarm quantity statistics item
 *
 * @method string getInstanceId() Obtain <p>Query instance ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Query instance ID</p>
 * @method integer getTotalCount() Obtain <p>Total number of alarms</p>
 * @method void setTotalCount(integer $TotalCount) Set <p>Total number of alarms</p>
 * @method integer getVirusTrojanCount() Obtain <p>Number of viruses and trojans (VIRUS_TROJAN)</p>
 * @method void setVirusTrojanCount(integer $VirusTrojanCount) Set <p>Number of viruses and trojans (VIRUS_TROJAN)</p>
 * @method integer getAbnormalLoginCount() Obtain <p>Number of abnormal logins (ABNORMAL_LOGIN)</p>
 * @method void setAbnormalLoginCount(integer $AbnormalLoginCount) Set <p>Number of abnormal logins (ABNORMAL_LOGIN)</p>
 * @method integer getHostBehaviorCount() Obtain <p>Number of server behaviors (HOST_BEHAVIOR)</p>
 * @method void setHostBehaviorCount(integer $HostBehaviorCount) Set <p>Number of server behaviors (HOST_BEHAVIOR)</p>
 * @method integer getNetworkBehaviorCount() Obtain <p>Number of network behaviors (NETWORK_BEHAVIOR)</p>
 * @method void setNetworkBehaviorCount(integer $NetworkBehaviorCount) Set <p>Number of network behaviors (NETWORK_BEHAVIOR)</p>
 * @method integer getInstancesCount() Obtain <p>Number of hosts with alarms (only available in GlobalCount mode)</p>
 * @method void setInstancesCount(integer $InstancesCount) Set <p>Number of hosts with alarms (only available in GlobalCount mode)</p>
 */
class EdrAlertCountItem extends AbstractModel
{
    /**
     * @var string <p>Query instance ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Total number of alarms</p>
     */
    public $TotalCount;

    /**
     * @var integer <p>Number of viruses and trojans (VIRUS_TROJAN)</p>
     */
    public $VirusTrojanCount;

    /**
     * @var integer <p>Number of abnormal logins (ABNORMAL_LOGIN)</p>
     */
    public $AbnormalLoginCount;

    /**
     * @var integer <p>Number of server behaviors (HOST_BEHAVIOR)</p>
     */
    public $HostBehaviorCount;

    /**
     * @var integer <p>Number of network behaviors (NETWORK_BEHAVIOR)</p>
     */
    public $NetworkBehaviorCount;

    /**
     * @var integer <p>Number of hosts with alarms (only available in GlobalCount mode)</p>
     */
    public $InstancesCount;

    /**
     * @param string $InstanceId <p>Query instance ID</p>
     * @param integer $TotalCount <p>Total number of alarms</p>
     * @param integer $VirusTrojanCount <p>Number of viruses and trojans (VIRUS_TROJAN)</p>
     * @param integer $AbnormalLoginCount <p>Number of abnormal logins (ABNORMAL_LOGIN)</p>
     * @param integer $HostBehaviorCount <p>Number of server behaviors (HOST_BEHAVIOR)</p>
     * @param integer $NetworkBehaviorCount <p>Number of network behaviors (NETWORK_BEHAVIOR)</p>
     * @param integer $InstancesCount <p>Number of hosts with alarms (only available in GlobalCount mode)</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("VirusTrojanCount",$param) and $param["VirusTrojanCount"] !== null) {
            $this->VirusTrojanCount = $param["VirusTrojanCount"];
        }

        if (array_key_exists("AbnormalLoginCount",$param) and $param["AbnormalLoginCount"] !== null) {
            $this->AbnormalLoginCount = $param["AbnormalLoginCount"];
        }

        if (array_key_exists("HostBehaviorCount",$param) and $param["HostBehaviorCount"] !== null) {
            $this->HostBehaviorCount = $param["HostBehaviorCount"];
        }

        if (array_key_exists("NetworkBehaviorCount",$param) and $param["NetworkBehaviorCount"] !== null) {
            $this->NetworkBehaviorCount = $param["NetworkBehaviorCount"];
        }

        if (array_key_exists("InstancesCount",$param) and $param["InstancesCount"] !== null) {
            $this->InstancesCount = $param["InstancesCount"];
        }
    }
}
