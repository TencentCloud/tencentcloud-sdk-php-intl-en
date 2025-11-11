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
 * @method string getInstanceId() Obtain ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1).
 * @method void setInstanceId(string $InstanceId) Set ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1).
 * @method integer getMsgRetentionTime() Obtain Maximum retention time of instance logs, in minutes, with a value range of 1min to 90 days.
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) Set Maximum retention time of instance logs, in minutes, with a value range of 1min to 90 days.
 * @method string getInstanceName() Obtain Specifies the Name of the ckafka cluster instance.
 * @method void setInstanceName(string $InstanceName) Set Specifies the Name of the ckafka cluster instance.
 * @method ModifyInstanceAttributesConfig getConfig() Obtain Instance configuration
 * @method void setConfig(ModifyInstanceAttributesConfig $Config) Set Instance configuration
 * @method DynamicRetentionTime getDynamicRetentionConfig() Obtain Dynamic message retention policy configuration
 * @method void setDynamicRetentionConfig(DynamicRetentionTime $DynamicRetentionConfig) Set Dynamic message retention policy configuration
 * @method integer getRebalanceTime() Obtain Specifies the execution time of a scheduled task for edition upgrade or configuration upgrade in Unix timestamp, accurate to the second.
 * @method void setRebalanceTime(integer $RebalanceTime) Set Specifies the execution time of a scheduled task for edition upgrade or configuration upgrade in Unix timestamp, accurate to the second.
 * @method integer getPublicNetwork() Obtain Public network bandwidth. minimum 3 Mbps. maximum 999 Mbps. only the pro edition supports filling in.
 * @method void setPublicNetwork(integer $PublicNetwork) Set Public network bandwidth. minimum 3 Mbps. maximum 999 Mbps. only the pro edition supports filling in.
 * @method DynamicDiskConfig getDynamicDiskConfig() Obtain Dynamic disk expansion policy configuration.
 * @method void setDynamicDiskConfig(DynamicDiskConfig $DynamicDiskConfig) Set Dynamic disk expansion policy configuration.
 * @method integer getMaxMessageByte() Obtain Single message size at the instance level (unit: byte). value range: 1024 (excluding) to 12582912 (excluding).
 * @method void setMaxMessageByte(integer $MaxMessageByte) Set Single message size at the instance level (unit: byte). value range: 1024 (excluding) to 12582912 (excluding).
 * @method integer getUncleanLeaderElectionEnable() Obtain Whether to allow unsynchronized replicas to be elected as leader. valid values: 1 (enable), 0 (disable).
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) Set Whether to allow unsynchronized replicas to be elected as leader. valid values: 1 (enable), 0 (disable).
 * @method integer getDeleteProtectionEnable() Obtain Instance deletion protection switch. 1: enabled; 0: disabled.
 * @method void setDeleteProtectionEnable(integer $DeleteProtectionEnable) Set Instance deletion protection switch. 1: enabled; 0: disabled.
 */
class ModifyInstanceAttributesRequest extends AbstractModel
{
    /**
     * @var string ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1).
     */
    public $InstanceId;

    /**
     * @var integer Maximum retention time of instance logs, in minutes, with a value range of 1min to 90 days.
     */
    public $MsgRetentionTime;

    /**
     * @var string Specifies the Name of the ckafka cluster instance.
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
     * @var integer Specifies the execution time of a scheduled task for edition upgrade or configuration upgrade in Unix timestamp, accurate to the second.
     */
    public $RebalanceTime;

    /**
     * @var integer Public network bandwidth. minimum 3 Mbps. maximum 999 Mbps. only the pro edition supports filling in.
     */
    public $PublicNetwork;

    /**
     * @var DynamicDiskConfig Dynamic disk expansion policy configuration.
     * @deprecated
     */
    public $DynamicDiskConfig;

    /**
     * @var integer Single message size at the instance level (unit: byte). value range: 1024 (excluding) to 12582912 (excluding).
     */
    public $MaxMessageByte;

    /**
     * @var integer Whether to allow unsynchronized replicas to be elected as leader. valid values: 1 (enable), 0 (disable).
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer Instance deletion protection switch. 1: enabled; 0: disabled.
     */
    public $DeleteProtectionEnable;

    /**
     * @param string $InstanceId ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1).
     * @param integer $MsgRetentionTime Maximum retention time of instance logs, in minutes, with a value range of 1min to 90 days.
     * @param string $InstanceName Specifies the Name of the ckafka cluster instance.
     * @param ModifyInstanceAttributesConfig $Config Instance configuration
     * @param DynamicRetentionTime $DynamicRetentionConfig Dynamic message retention policy configuration
     * @param integer $RebalanceTime Specifies the execution time of a scheduled task for edition upgrade or configuration upgrade in Unix timestamp, accurate to the second.
     * @param integer $PublicNetwork Public network bandwidth. minimum 3 Mbps. maximum 999 Mbps. only the pro edition supports filling in.
     * @param DynamicDiskConfig $DynamicDiskConfig Dynamic disk expansion policy configuration.
     * @param integer $MaxMessageByte Single message size at the instance level (unit: byte). value range: 1024 (excluding) to 12582912 (excluding).
     * @param integer $UncleanLeaderElectionEnable Whether to allow unsynchronized replicas to be elected as leader. valid values: 1 (enable), 0 (disable).
     * @param integer $DeleteProtectionEnable Instance deletion protection switch. 1: enabled; 0: disabled.
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
    }
}
