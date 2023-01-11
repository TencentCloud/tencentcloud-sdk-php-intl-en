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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceAttributes request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getMsgRetentionTime() Obtain Maximum retention period in minutes for instance log, which can be up to 30 days. 0 indicates not to enable the log retention period policy
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) Set Maximum retention period in minutes for instance log, which can be up to 30 days. 0 indicates not to enable the log retention period policy
 * @method string getInstanceName() Obtain Instance name string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`)
 * @method void setInstanceName(string $InstanceName) Set Instance name string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`)
 * @method ModifyInstanceAttributesConfig getConfig() Obtain Instance configuration
 * @method void setConfig(ModifyInstanceAttributesConfig $Config) Set Instance configuration
 * @method DynamicRetentionTime getDynamicRetentionConfig() Obtain Dynamic message retention policy configuration
 * @method void setDynamicRetentionConfig(DynamicRetentionTime $DynamicRetentionConfig) Set Dynamic message retention policy configuration
 * @method integer getRebalanceTime() Obtain Modification of the rebalancing time after upgrade
 * @method void setRebalanceTime(integer $RebalanceTime) Set Modification of the rebalancing time after upgrade
 * @method integer getPublicNetwork() Obtain Public network bandwidth
 * @method void setPublicNetwork(integer $PublicNetwork) Set Public network bandwidth
 * @method DynamicDiskConfig getDynamicDiskConfig() Obtain Dynamic disk expansion policy configuration.
 * @method void setDynamicDiskConfig(DynamicDiskConfig $DynamicDiskConfig) Set Dynamic disk expansion policy configuration.
 * @method integer getMaxMessageByte() Obtain The size of a single message in bytes at the instance level.
 * @method void setMaxMessageByte(integer $MaxMessageByte) Set The size of a single message in bytes at the instance level.
 */
class ModifyInstanceAttributesRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Maximum retention period in minutes for instance log, which can be up to 30 days. 0 indicates not to enable the log retention period policy
     */
    public $MsgRetentionTime;

    /**
     * @var string Instance name string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`)
     */
    public $InstanceName;

    /**
     * @var ModifyInstanceAttributesConfig Instance configuration
     */
    public $Config;

    /**
     * @var DynamicRetentionTime Dynamic message retention policy configuration
     */
    public $DynamicRetentionConfig;

    /**
     * @var integer Modification of the rebalancing time after upgrade
     */
    public $RebalanceTime;

    /**
     * @var integer Public network bandwidth
     */
    public $PublicNetwork;

    /**
     * @var DynamicDiskConfig Dynamic disk expansion policy configuration.
     */
    public $DynamicDiskConfig;

    /**
     * @var integer The size of a single message in bytes at the instance level.
     */
    public $MaxMessageByte;

    /**
     * @param string $InstanceId Instance ID
     * @param integer $MsgRetentionTime Maximum retention period in minutes for instance log, which can be up to 30 days. 0 indicates not to enable the log retention period policy
     * @param string $InstanceName Instance name string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`)
     * @param ModifyInstanceAttributesConfig $Config Instance configuration
     * @param DynamicRetentionTime $DynamicRetentionConfig Dynamic message retention policy configuration
     * @param integer $RebalanceTime Modification of the rebalancing time after upgrade
     * @param integer $PublicNetwork Public network bandwidth
     * @param DynamicDiskConfig $DynamicDiskConfig Dynamic disk expansion policy configuration.
     * @param integer $MaxMessageByte The size of a single message in bytes at the instance level.
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
    }
}
