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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name, which can contain 1 to 50 English letters, Chinese characters, digits, dashes (-), or underscores (_)
 * @method void setInstanceName(string $InstanceName) Set Instance name, which can contain 1 to 50 English letters, Chinese characters, digits, dashes (-), or underscores (_)
 * @method integer getNodeNum() Obtain This parameter has been disused. Please use `NodeInfoList`
Number of nodes (2-50)
 * @method void setNodeNum(integer $NodeNum) Set This parameter has been disused. Please use `NodeInfoList`
Number of nodes (2-50)
 * @method string getEsConfig() Obtain ES configuration item (JSON string)
 * @method void setEsConfig(string $EsConfig) Set ES configuration item (JSON string)
 * @method string getPassword() Obtain Password of the default user 'elastic', which must contain 8 to 16 characters, including at least two of the following three types of characters: [a-z,A-Z], [0-9] and [-!@#$%&^*+=_:;,.?]
 * @method void setPassword(string $Password) Set Password of the default user 'elastic', which must contain 8 to 16 characters, including at least two of the following three types of characters: [a-z,A-Z], [0-9] and [-!@#$%&^*+=_:;,.?]
 * @method EsAcl getEsAcl() Obtain The policy for visual component (Kibana and Cerebro) access over public network.
 * @method void setEsAcl(EsAcl $EsAcl) Set The policy for visual component (Kibana and Cerebro) access over public network.
 * @method integer getDiskSize() Obtain This parameter has been disused. Please use `NodeInfoList`
Disk size in GB
 * @method void setDiskSize(integer $DiskSize) Set This parameter has been disused. Please use `NodeInfoList`
Disk size in GB
 * @method string getNodeType() Obtain This parameter has been disused. Please use `NodeInfoList`
Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
 * @method void setNodeType(string $NodeType) Set This parameter has been disused. Please use `NodeInfoList`
Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
 * @method integer getMasterNodeNum() Obtain This parameter has been disused. Please use `NodeInfoList`
Number of dedicated primary nodes (only 3 and 5 are supported)
 * @method void setMasterNodeNum(integer $MasterNodeNum) Set This parameter has been disused. Please use `NodeInfoList`
Number of dedicated primary nodes (only 3 and 5 are supported)
 * @method string getMasterNodeType() Obtain This parameter has been disused. Please use `NodeInfoList`
Dedicated primary node specification <li>ES.S1.SMALL2: 1-core 2 GB</li><li>ES.S1.MEDIUM4: 2-core 4 GB</li><li>ES.S1.MEDIUM8: 2-core 8 GB</li><li>ES.S1.LARGE16: 4-core 16 GB</li><li>ES.S1.2XLARGE32: 8-core 32 GB</li><li>ES.S1.4XLARGE32: 16-core 32 GB</li><li>ES.S1.4XLARGE64: 16-core 64 GB</li>
 * @method void setMasterNodeType(string $MasterNodeType) Set This parameter has been disused. Please use `NodeInfoList`
Dedicated primary node specification <li>ES.S1.SMALL2: 1-core 2 GB</li><li>ES.S1.MEDIUM4: 2-core 4 GB</li><li>ES.S1.MEDIUM8: 2-core 8 GB</li><li>ES.S1.LARGE16: 4-core 16 GB</li><li>ES.S1.2XLARGE32: 8-core 32 GB</li><li>ES.S1.4XLARGE32: 16-core 32 GB</li><li>ES.S1.4XLARGE64: 16-core 64 GB</li>
 * @method integer getMasterNodeDiskSize() Obtain This parameter has been disused. Please use `NodeInfoList`
Dedicated primary node disk size in GB. This is 50 GB by default and currently cannot be customized
 * @method void setMasterNodeDiskSize(integer $MasterNodeDiskSize) Set This parameter has been disused. Please use `NodeInfoList`
Dedicated primary node disk size in GB. This is 50 GB by default and currently cannot be customized
 * @method boolean getForceRestart() Obtain Whether to force restart during configuration update <li>true: Yes </li><li>false: No </li>This needs to be set only for EsConfig. Default value: false
 * @method void setForceRestart(boolean $ForceRestart) Set Whether to force restart during configuration update <li>true: Yes </li><li>false: No </li>This needs to be set only for EsConfig. Default value: false
 * @method CosBackup getCosBackup() Obtain Auto-backup to COS
 * @method void setCosBackup(CosBackup $CosBackup) Set Auto-backup to COS
 * @method array getNodeInfoList() Obtain Node information list. You can pass in only the nodes to be updated and their corresponding specification information. Supported operations include: <li>modifying the number of nodes in the same type </li><li>modifying the specification and disk size of nodes in the same type </li><li>adding a node type (you must also specify the node type, quantity, specification, disk, etc.) </li>The above operations can only be performed one at a time, and the disk type cannot be modified
 * @method void setNodeInfoList(array $NodeInfoList) Set Node information list. You can pass in only the nodes to be updated and their corresponding specification information. Supported operations include: <li>modifying the number of nodes in the same type </li><li>modifying the specification and disk size of nodes in the same type </li><li>adding a node type (you must also specify the node type, quantity, specification, disk, etc.) </li>The above operations can only be performed one at a time, and the disk type cannot be modified
 * @method string getPublicAccess() Obtain The status of ES cluster access over public network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
 * @method void setPublicAccess(string $PublicAccess) Set The status of ES cluster access over public network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
 * @method EsPublicAcl getEsPublicAcl() Obtain Public network ACL
 * @method void setEsPublicAcl(EsPublicAcl $EsPublicAcl) Set Public network ACL
 * @method string getKibanaPublicAccess() Obtain The status of Kibana access over public network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
 * @method void setKibanaPublicAccess(string $KibanaPublicAccess) Set The status of Kibana access over public network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
 * @method string getKibanaPrivateAccess() Obtain The status of Kibana access over private network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
 * @method void setKibanaPrivateAccess(string $KibanaPrivateAccess) Set The status of Kibana access over private network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
 * @method integer getBasicSecurityType() Obtain Enables or disables user authentication for ES Basic Edition v6.8 and above
 * @method void setBasicSecurityType(integer $BasicSecurityType) Set Enables or disables user authentication for ES Basic Edition v6.8 and above
 * @method integer getKibanaPrivatePort() Obtain Kibana private port
 * @method void setKibanaPrivatePort(integer $KibanaPrivatePort) Set Kibana private port
 * @method integer getScaleType() Obtain 0: scaling in blue/green deployment mode without cluster restart (default); 1: scaling by unmounting disk with rolling cluster restart
 * @method void setScaleType(integer $ScaleType) Set 0: scaling in blue/green deployment mode without cluster restart (default); 1: scaling by unmounting disk with rolling cluster restart
 * @method array getMultiZoneInfo() Obtain Multi-AZ deployment
 * @method void setMultiZoneInfo(array $MultiZoneInfo) Set Multi-AZ deployment
 * @method integer getSceneType() Obtain Scenario template type. -1: not enabled; 1: general; 2: log; 3: search
 * @method void setSceneType(integer $SceneType) Set Scenario template type. -1: not enabled; 1: general; 2: log; 3: search
 * @method string getKibanaConfig() Obtain Kibana configuration item (JSON string)
 * @method void setKibanaConfig(string $KibanaConfig) Set Kibana configuration item (JSON string)
 * @method WebNodeTypeInfo getWebNodeTypeInfo() Obtain Visual node configuration
 * @method void setWebNodeTypeInfo(WebNodeTypeInfo $WebNodeTypeInfo) Set Visual node configuration
 * @method string getSwitchPrivateLink() Obtain Whether to switch to the new network architecture
 * @method void setSwitchPrivateLink(string $SwitchPrivateLink) Set Whether to switch to the new network architecture
 * @method boolean getEnableCerebro() Obtain Whether to enable Cerebro
 * @method void setEnableCerebro(boolean $EnableCerebro) Set Whether to enable Cerebro
 * @method string getCerebroPublicAccess() Obtain The status of Cerebro access over public network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
 * @method void setCerebroPublicAccess(string $CerebroPublicAccess) Set The status of Cerebro access over public network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
 * @method string getCerebroPrivateAccess() Obtain The status of Cerebro access over private network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
 * @method void setCerebroPrivateAccess(string $CerebroPrivateAccess) Set The status of Cerebro access over private network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
 * @method EsConfigSetInfo getEsConfigSet() Obtain Added or modified configuration set information
 * @method void setEsConfigSet(EsConfigSetInfo $EsConfigSet) Set Added or modified configuration set information
 * @method OperationDurationUpdated getOperationDuration() Obtain The maintenance time slot
 * @method void setOperationDuration(OperationDurationUpdated $OperationDuration) Set The maintenance time slot
 * @method string getKibanaAlteringPublicAccess() Obtain Whether to enable the option for sending alerting messages over the public network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
 * @method void setKibanaAlteringPublicAccess(string $KibanaAlteringPublicAccess) Set Whether to enable the option for sending alerting messages over the public network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
 */
class UpdateInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name, which can contain 1 to 50 English letters, Chinese characters, digits, dashes (-), or underscores (_)
     */
    public $InstanceName;

    /**
     * @var integer This parameter has been disused. Please use `NodeInfoList`
Number of nodes (2-50)
     */
    public $NodeNum;

    /**
     * @var string ES configuration item (JSON string)
     */
    public $EsConfig;

    /**
     * @var string Password of the default user 'elastic', which must contain 8 to 16 characters, including at least two of the following three types of characters: [a-z,A-Z], [0-9] and [-!@#$%&^*+=_:;,.?]
     */
    public $Password;

    /**
     * @var EsAcl The policy for visual component (Kibana and Cerebro) access over public network.
     */
    public $EsAcl;

    /**
     * @var integer This parameter has been disused. Please use `NodeInfoList`
Disk size in GB
     */
    public $DiskSize;

    /**
     * @var string This parameter has been disused. Please use `NodeInfoList`
Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
     */
    public $NodeType;

    /**
     * @var integer This parameter has been disused. Please use `NodeInfoList`
Number of dedicated primary nodes (only 3 and 5 are supported)
     */
    public $MasterNodeNum;

    /**
     * @var string This parameter has been disused. Please use `NodeInfoList`
Dedicated primary node specification <li>ES.S1.SMALL2: 1-core 2 GB</li><li>ES.S1.MEDIUM4: 2-core 4 GB</li><li>ES.S1.MEDIUM8: 2-core 8 GB</li><li>ES.S1.LARGE16: 4-core 16 GB</li><li>ES.S1.2XLARGE32: 8-core 32 GB</li><li>ES.S1.4XLARGE32: 16-core 32 GB</li><li>ES.S1.4XLARGE64: 16-core 64 GB</li>
     */
    public $MasterNodeType;

    /**
     * @var integer This parameter has been disused. Please use `NodeInfoList`
Dedicated primary node disk size in GB. This is 50 GB by default and currently cannot be customized
     */
    public $MasterNodeDiskSize;

    /**
     * @var boolean Whether to force restart during configuration update <li>true: Yes </li><li>false: No </li>This needs to be set only for EsConfig. Default value: false
     */
    public $ForceRestart;

    /**
     * @var CosBackup Auto-backup to COS
     */
    public $CosBackup;

    /**
     * @var array Node information list. You can pass in only the nodes to be updated and their corresponding specification information. Supported operations include: <li>modifying the number of nodes in the same type </li><li>modifying the specification and disk size of nodes in the same type </li><li>adding a node type (you must also specify the node type, quantity, specification, disk, etc.) </li>The above operations can only be performed one at a time, and the disk type cannot be modified
     */
    public $NodeInfoList;

    /**
     * @var string The status of ES cluster access over public network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
     */
    public $PublicAccess;

    /**
     * @var EsPublicAcl Public network ACL
     */
    public $EsPublicAcl;

    /**
     * @var string The status of Kibana access over public network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
     */
    public $KibanaPublicAccess;

    /**
     * @var string The status of Kibana access over private network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
     */
    public $KibanaPrivateAccess;

    /**
     * @var integer Enables or disables user authentication for ES Basic Edition v6.8 and above
     */
    public $BasicSecurityType;

    /**
     * @var integer Kibana private port
     */
    public $KibanaPrivatePort;

    /**
     * @var integer 0: scaling in blue/green deployment mode without cluster restart (default); 1: scaling by unmounting disk with rolling cluster restart
     */
    public $ScaleType;

    /**
     * @var array Multi-AZ deployment
     */
    public $MultiZoneInfo;

    /**
     * @var integer Scenario template type. -1: not enabled; 1: general; 2: log; 3: search
     */
    public $SceneType;

    /**
     * @var string Kibana configuration item (JSON string)
     */
    public $KibanaConfig;

    /**
     * @var WebNodeTypeInfo Visual node configuration
     */
    public $WebNodeTypeInfo;

    /**
     * @var string Whether to switch to the new network architecture
     */
    public $SwitchPrivateLink;

    /**
     * @var boolean Whether to enable Cerebro
     */
    public $EnableCerebro;

    /**
     * @var string The status of Cerebro access over public network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
     */
    public $CerebroPublicAccess;

    /**
     * @var string The status of Cerebro access over private network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
     */
    public $CerebroPrivateAccess;

    /**
     * @var EsConfigSetInfo Added or modified configuration set information
     */
    public $EsConfigSet;

    /**
     * @var OperationDurationUpdated The maintenance time slot
     */
    public $OperationDuration;

    /**
     * @var string Whether to enable the option for sending alerting messages over the public network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
     */
    public $KibanaAlteringPublicAccess;

    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name, which can contain 1 to 50 English letters, Chinese characters, digits, dashes (-), or underscores (_)
     * @param integer $NodeNum This parameter has been disused. Please use `NodeInfoList`
Number of nodes (2-50)
     * @param string $EsConfig ES configuration item (JSON string)
     * @param string $Password Password of the default user 'elastic', which must contain 8 to 16 characters, including at least two of the following three types of characters: [a-z,A-Z], [0-9] and [-!@#$%&^*+=_:;,.?]
     * @param EsAcl $EsAcl The policy for visual component (Kibana and Cerebro) access over public network.
     * @param integer $DiskSize This parameter has been disused. Please use `NodeInfoList`
Disk size in GB
     * @param string $NodeType This parameter has been disused. Please use `NodeInfoList`
Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
     * @param integer $MasterNodeNum This parameter has been disused. Please use `NodeInfoList`
Number of dedicated primary nodes (only 3 and 5 are supported)
     * @param string $MasterNodeType This parameter has been disused. Please use `NodeInfoList`
Dedicated primary node specification <li>ES.S1.SMALL2: 1-core 2 GB</li><li>ES.S1.MEDIUM4: 2-core 4 GB</li><li>ES.S1.MEDIUM8: 2-core 8 GB</li><li>ES.S1.LARGE16: 4-core 16 GB</li><li>ES.S1.2XLARGE32: 8-core 32 GB</li><li>ES.S1.4XLARGE32: 16-core 32 GB</li><li>ES.S1.4XLARGE64: 16-core 64 GB</li>
     * @param integer $MasterNodeDiskSize This parameter has been disused. Please use `NodeInfoList`
Dedicated primary node disk size in GB. This is 50 GB by default and currently cannot be customized
     * @param boolean $ForceRestart Whether to force restart during configuration update <li>true: Yes </li><li>false: No </li>This needs to be set only for EsConfig. Default value: false
     * @param CosBackup $CosBackup Auto-backup to COS
     * @param array $NodeInfoList Node information list. You can pass in only the nodes to be updated and their corresponding specification information. Supported operations include: <li>modifying the number of nodes in the same type </li><li>modifying the specification and disk size of nodes in the same type </li><li>adding a node type (you must also specify the node type, quantity, specification, disk, etc.) </li>The above operations can only be performed one at a time, and the disk type cannot be modified
     * @param string $PublicAccess The status of ES cluster access over public network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
     * @param EsPublicAcl $EsPublicAcl Public network ACL
     * @param string $KibanaPublicAccess The status of Kibana access over public network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
     * @param string $KibanaPrivateAccess The status of Kibana access over private network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
     * @param integer $BasicSecurityType Enables or disables user authentication for ES Basic Edition v6.8 and above
     * @param integer $KibanaPrivatePort Kibana private port
     * @param integer $ScaleType 0: scaling in blue/green deployment mode without cluster restart (default); 1: scaling by unmounting disk with rolling cluster restart
     * @param array $MultiZoneInfo Multi-AZ deployment
     * @param integer $SceneType Scenario template type. -1: not enabled; 1: general; 2: log; 3: search
     * @param string $KibanaConfig Kibana configuration item (JSON string)
     * @param WebNodeTypeInfo $WebNodeTypeInfo Visual node configuration
     * @param string $SwitchPrivateLink Whether to switch to the new network architecture
     * @param boolean $EnableCerebro Whether to enable Cerebro
     * @param string $CerebroPublicAccess The status of Cerebro access over public network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
     * @param string $CerebroPrivateAccess The status of Cerebro access over private network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
     * @param EsConfigSetInfo $EsConfigSet Added or modified configuration set information
     * @param OperationDurationUpdated $OperationDuration The maintenance time slot
     * @param string $KibanaAlteringPublicAccess Whether to enable the option for sending alerting messages over the public network.
`OPEN`: Enabled.
`CLOSE`: Disabled.
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("EsConfig",$param) and $param["EsConfig"] !== null) {
            $this->EsConfig = $param["EsConfig"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EsAcl",$param) and $param["EsAcl"] !== null) {
            $this->EsAcl = new EsAcl();
            $this->EsAcl->deserialize($param["EsAcl"]);
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("MasterNodeNum",$param) and $param["MasterNodeNum"] !== null) {
            $this->MasterNodeNum = $param["MasterNodeNum"];
        }

        if (array_key_exists("MasterNodeType",$param) and $param["MasterNodeType"] !== null) {
            $this->MasterNodeType = $param["MasterNodeType"];
        }

        if (array_key_exists("MasterNodeDiskSize",$param) and $param["MasterNodeDiskSize"] !== null) {
            $this->MasterNodeDiskSize = $param["MasterNodeDiskSize"];
        }

        if (array_key_exists("ForceRestart",$param) and $param["ForceRestart"] !== null) {
            $this->ForceRestart = $param["ForceRestart"];
        }

        if (array_key_exists("CosBackup",$param) and $param["CosBackup"] !== null) {
            $this->CosBackup = new CosBackup();
            $this->CosBackup->deserialize($param["CosBackup"]);
        }

        if (array_key_exists("NodeInfoList",$param) and $param["NodeInfoList"] !== null) {
            $this->NodeInfoList = [];
            foreach ($param["NodeInfoList"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfoList, $obj);
            }
        }

        if (array_key_exists("PublicAccess",$param) and $param["PublicAccess"] !== null) {
            $this->PublicAccess = $param["PublicAccess"];
        }

        if (array_key_exists("EsPublicAcl",$param) and $param["EsPublicAcl"] !== null) {
            $this->EsPublicAcl = new EsPublicAcl();
            $this->EsPublicAcl->deserialize($param["EsPublicAcl"]);
        }

        if (array_key_exists("KibanaPublicAccess",$param) and $param["KibanaPublicAccess"] !== null) {
            $this->KibanaPublicAccess = $param["KibanaPublicAccess"];
        }

        if (array_key_exists("KibanaPrivateAccess",$param) and $param["KibanaPrivateAccess"] !== null) {
            $this->KibanaPrivateAccess = $param["KibanaPrivateAccess"];
        }

        if (array_key_exists("BasicSecurityType",$param) and $param["BasicSecurityType"] !== null) {
            $this->BasicSecurityType = $param["BasicSecurityType"];
        }

        if (array_key_exists("KibanaPrivatePort",$param) and $param["KibanaPrivatePort"] !== null) {
            $this->KibanaPrivatePort = $param["KibanaPrivatePort"];
        }

        if (array_key_exists("ScaleType",$param) and $param["ScaleType"] !== null) {
            $this->ScaleType = $param["ScaleType"];
        }

        if (array_key_exists("MultiZoneInfo",$param) and $param["MultiZoneInfo"] !== null) {
            $this->MultiZoneInfo = [];
            foreach ($param["MultiZoneInfo"] as $key => $value){
                $obj = new ZoneDetail();
                $obj->deserialize($value);
                array_push($this->MultiZoneInfo, $obj);
            }
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("KibanaConfig",$param) and $param["KibanaConfig"] !== null) {
            $this->KibanaConfig = $param["KibanaConfig"];
        }

        if (array_key_exists("WebNodeTypeInfo",$param) and $param["WebNodeTypeInfo"] !== null) {
            $this->WebNodeTypeInfo = new WebNodeTypeInfo();
            $this->WebNodeTypeInfo->deserialize($param["WebNodeTypeInfo"]);
        }

        if (array_key_exists("SwitchPrivateLink",$param) and $param["SwitchPrivateLink"] !== null) {
            $this->SwitchPrivateLink = $param["SwitchPrivateLink"];
        }

        if (array_key_exists("EnableCerebro",$param) and $param["EnableCerebro"] !== null) {
            $this->EnableCerebro = $param["EnableCerebro"];
        }

        if (array_key_exists("CerebroPublicAccess",$param) and $param["CerebroPublicAccess"] !== null) {
            $this->CerebroPublicAccess = $param["CerebroPublicAccess"];
        }

        if (array_key_exists("CerebroPrivateAccess",$param) and $param["CerebroPrivateAccess"] !== null) {
            $this->CerebroPrivateAccess = $param["CerebroPrivateAccess"];
        }

        if (array_key_exists("EsConfigSet",$param) and $param["EsConfigSet"] !== null) {
            $this->EsConfigSet = new EsConfigSetInfo();
            $this->EsConfigSet->deserialize($param["EsConfigSet"]);
        }

        if (array_key_exists("OperationDuration",$param) and $param["OperationDuration"] !== null) {
            $this->OperationDuration = new OperationDurationUpdated();
            $this->OperationDuration->deserialize($param["OperationDuration"]);
        }

        if (array_key_exists("KibanaAlteringPublicAccess",$param) and $param["KibanaAlteringPublicAccess"] !== null) {
            $this->KibanaAlteringPublicAccess = $param["KibanaAlteringPublicAccess"];
        }
    }
}
