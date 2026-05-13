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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceAttributes request structure.
 *
 * @method string getInstanceId() Obtain <p>ckafka cluster instance Id, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1">DescribeInstances</a> API</p>
 * @method void setInstanceId(string $InstanceId) Set <p>ckafka cluster instance Id, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1">DescribeInstances</a> API</p>
 * @method integer getMsgRetentionTime() Obtain <p>Maximum retention time of instance log, in minutes, with a maximum of 90 days and a minimum of 1 min</p>
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) Set <p>Maximum retention time of instance log, in minutes, with a maximum of 90 days and a minimum of 1 min</p>
 * @method string getInstanceName() Obtain <p>ckafka cluster instance Name</p>
 * @method void setInstanceName(string $InstanceName) Set <p>ckafka cluster instance Name</p>
 * @method ModifyInstanceAttributesConfig getConfig() Obtain <p>Instance configuration</p>
 * @method void setConfig(ModifyInstanceAttributesConfig $Config) Set <p>Instance configuration</p>
 * @method DynamicRetentionTime getDynamicRetentionConfig() Obtain <p>Dynamic message retention policy configuration</p>
 * @method void setDynamicRetentionConfig(DynamicRetentionTime $DynamicRetentionConfig) Set <p>Dynamic message retention policy configuration</p>
 * @method integer getRebalanceTime() Obtain <p>Used to modify the scheduled task execution time for edition upgrade or upgrade version, Unix timestamp, accurate to the second</p>
 * @method void setRebalanceTime(integer $RebalanceTime) Set <p>Used to modify the scheduled task execution time for edition upgrade or upgrade version, Unix timestamp, accurate to the second</p>
 * @method integer getPublicNetwork() Obtain <p>Public network bandwidth: minimum 3Mbps, maximum 999Mbps. Only the Pro Edition supports filling in.</p>
 * @method void setPublicNetwork(integer $PublicNetwork) Set <p>Public network bandwidth: minimum 3Mbps, maximum 999Mbps. Only the Pro Edition supports filling in.</p>
 * @method DynamicDiskConfig getDynamicDiskConfig() Obtain <p>Configure dynamic disk expansion policy</p>
 * @method void setDynamicDiskConfig(DynamicDiskConfig $DynamicDiskConfig) Set <p>Configure dynamic disk expansion policy</p>
 * @method integer getMaxMessageByte() Obtain <p>Single message size at the instance level (unit: byte) Maximum 12582912 (excluding) Minimum 1024 (excluding)</p>
 * @method void setMaxMessageByte(integer $MaxMessageByte) Set <p>Single message size at the instance level (unit: byte) Maximum 12582912 (excluding) Minimum 1024 (excluding)</p>
 * @method integer getUncleanLeaderElectionEnable() Obtain <p>Whether to allow unsynchronized replicas to be elected as leader: 1 Enable 0 Disable</p>
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) Set <p>Whether to allow unsynchronized replicas to be elected as leader: 1 Enable 0 Disable</p>
 * @method integer getDeleteProtectionEnable() Obtain <p>Instance deletion protection switch: 1: enabled 0: disabled</p>
 * @method void setDeleteProtectionEnable(integer $DeleteProtectionEnable) Set <p>Instance deletion protection switch: 1: enabled 0: disabled</p>
 * @method integer getRetentionBytes() Obtain <p>Message retention size at the instance level</p>Measurement unit: byte<br>Default value: -1<br><p>Message retention size at the instance level</p>
 * @method void setRetentionBytes(integer $RetentionBytes) Set <p>Message retention size at the instance level</p>Measurement unit: byte<br>Default value: -1<br><p>Message retention size at the instance level</p>
 * @method boolean getAdminSecurity() Obtain <p>Ban Status for high-risk admin interface; true to ban high-risk adminApi; no support for turning on after closing, only supported in Pro Edition; default false, no action taken for high-risk admin interface</p>
 * @method void setAdminSecurity(boolean $AdminSecurity) Set <p>Ban Status for high-risk admin interface; true to ban high-risk adminApi; no support for turning on after closing, only supported in Pro Edition; default false, no action taken for high-risk admin interface</p>
 * @method integer getTransactionalIdExpirationMs() Obtain <p>The maximum idle time of a transaction ID. Uncommitted transactions that time out will be marked with expiration.</p>Value ranges from 3600000 to 604800000.<br>Unit: ms
 * @method void setTransactionalIdExpirationMs(integer $TransactionalIdExpirationMs) Set <p>The maximum idle time of a transaction ID. Uncommitted transactions that time out will be marked with expiration.</p>Value ranges from 3600000 to 604800000.<br>Unit: ms
 */
class ModifyInstanceAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka cluster instance Id, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1">DescribeInstances</a> API</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Maximum retention time of instance log, in minutes, with a maximum of 90 days and a minimum of 1 min</p>
     */
    public $MsgRetentionTime;

    /**
     * @var string <p>ckafka cluster instance Name</p>
     */
    public $InstanceName;

    /**
     * @var ModifyInstanceAttributesConfig <p>Instance configuration</p>
     */
    public $Config;

    /**
     * @var DynamicRetentionTime <p>Dynamic message retention policy configuration</p>
     */
    public $DynamicRetentionConfig;

    /**
     * @var integer <p>Used to modify the scheduled task execution time for edition upgrade or upgrade version, Unix timestamp, accurate to the second</p>
     */
    public $RebalanceTime;

    /**
     * @var integer <p>Public network bandwidth: minimum 3Mbps, maximum 999Mbps. Only the Pro Edition supports filling in.</p>
     */
    public $PublicNetwork;

    /**
     * @var DynamicDiskConfig <p>Configure dynamic disk expansion policy</p>
     * @deprecated
     */
    public $DynamicDiskConfig;

    /**
     * @var integer <p>Single message size at the instance level (unit: byte) Maximum 12582912 (excluding) Minimum 1024 (excluding)</p>
     */
    public $MaxMessageByte;

    /**
     * @var integer <p>Whether to allow unsynchronized replicas to be elected as leader: 1 Enable 0 Disable</p>
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer <p>Instance deletion protection switch: 1: enabled 0: disabled</p>
     */
    public $DeleteProtectionEnable;

    /**
     * @var integer <p>Message retention size at the instance level</p>Measurement unit: byte<br>Default value: -1<br><p>Message retention size at the instance level</p>
     */
    public $RetentionBytes;

    /**
     * @var boolean <p>Ban Status for high-risk admin interface; true to ban high-risk adminApi; no support for turning on after closing, only supported in Pro Edition; default false, no action taken for high-risk admin interface</p>
     */
    public $AdminSecurity;

    /**
     * @var integer <p>The maximum idle time of a transaction ID. Uncommitted transactions that time out will be marked with expiration.</p>Value ranges from 3600000 to 604800000.<br>Unit: ms
     */
    public $TransactionalIdExpirationMs;

    /**
     * @param string $InstanceId <p>ckafka cluster instance Id, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1">DescribeInstances</a> API</p>
     * @param integer $MsgRetentionTime <p>Maximum retention time of instance log, in minutes, with a maximum of 90 days and a minimum of 1 min</p>
     * @param string $InstanceName <p>ckafka cluster instance Name</p>
     * @param ModifyInstanceAttributesConfig $Config <p>Instance configuration</p>
     * @param DynamicRetentionTime $DynamicRetentionConfig <p>Dynamic message retention policy configuration</p>
     * @param integer $RebalanceTime <p>Used to modify the scheduled task execution time for edition upgrade or upgrade version, Unix timestamp, accurate to the second</p>
     * @param integer $PublicNetwork <p>Public network bandwidth: minimum 3Mbps, maximum 999Mbps. Only the Pro Edition supports filling in.</p>
     * @param DynamicDiskConfig $DynamicDiskConfig <p>Configure dynamic disk expansion policy</p>
     * @param integer $MaxMessageByte <p>Single message size at the instance level (unit: byte) Maximum 12582912 (excluding) Minimum 1024 (excluding)</p>
     * @param integer $UncleanLeaderElectionEnable <p>Whether to allow unsynchronized replicas to be elected as leader: 1 Enable 0 Disable</p>
     * @param integer $DeleteProtectionEnable <p>Instance deletion protection switch: 1: enabled 0: disabled</p>
     * @param integer $RetentionBytes <p>Message retention size at the instance level</p>Measurement unit: byte<br>Default value: -1<br><p>Message retention size at the instance level</p>
     * @param boolean $AdminSecurity <p>Ban Status for high-risk admin interface; true to ban high-risk adminApi; no support for turning on after closing, only supported in Pro Edition; default false, no action taken for high-risk admin interface</p>
     * @param integer $TransactionalIdExpirationMs <p>The maximum idle time of a transaction ID. Uncommitted transactions that time out will be marked with expiration.</p>Value ranges from 3600000 to 604800000.<br>Unit: ms
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

        if (array_key_exists("MsgRetentionTime",$param) and $param["MsgRetentionTime"] !== null) {
            $this->MsgRetentionTime = $param["MsgRetentionTime"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new ModifyInstanceAttributesConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("DynamicRetentionConfig",$param) and $param["DynamicRetentionConfig"] !== null) {
            $this->DynamicRetentionConfig = new DynamicRetentionTime();
            $this->DynamicRetentionConfig->deserialize($param["DynamicRetentionConfig"]);
        }

        if (array_key_exists("RebalanceTime",$param) and $param["RebalanceTime"] !== null) {
            $this->RebalanceTime = $param["RebalanceTime"];
        }

        if (array_key_exists("PublicNetwork",$param) and $param["PublicNetwork"] !== null) {
            $this->PublicNetwork = $param["PublicNetwork"];
        }

        if (array_key_exists("DynamicDiskConfig",$param) and $param["DynamicDiskConfig"] !== null) {
            $this->DynamicDiskConfig = new DynamicDiskConfig();
            $this->DynamicDiskConfig->deserialize($param["DynamicDiskConfig"]);
        }

        if (array_key_exists("MaxMessageByte",$param) and $param["MaxMessageByte"] !== null) {
            $this->MaxMessageByte = $param["MaxMessageByte"];
        }

        if (array_key_exists("UncleanLeaderElectionEnable",$param) and $param["UncleanLeaderElectionEnable"] !== null) {
            $this->UncleanLeaderElectionEnable = $param["UncleanLeaderElectionEnable"];
        }

        if (array_key_exists("DeleteProtectionEnable",$param) and $param["DeleteProtectionEnable"] !== null) {
            $this->DeleteProtectionEnable = $param["DeleteProtectionEnable"];
        }

        if (array_key_exists("RetentionBytes",$param) and $param["RetentionBytes"] !== null) {
            $this->RetentionBytes = $param["RetentionBytes"];
        }

        if (array_key_exists("AdminSecurity",$param) and $param["AdminSecurity"] !== null) {
            $this->AdminSecurity = $param["AdminSecurity"];
        }

        if (array_key_exists("TransactionalIdExpirationMs",$param) and $param["TransactionalIdExpirationMs"] !== null) {
            $this->TransactionalIdExpirationMs = $param["TransactionalIdExpirationMs"];
        }
    }
}
