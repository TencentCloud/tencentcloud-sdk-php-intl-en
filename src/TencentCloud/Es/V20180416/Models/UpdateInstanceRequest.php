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
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name, which can contain 1 to 50 English letters, Chinese characters, digits, dashes (-), or underscores (_)
 * @method void setInstanceName(string $InstanceName) Set Instance name, which can contain 1 to 50 English letters, Chinese characters, digits, dashes (-), or underscores (_)
 * @method integer getNodeNum() Obtain Number of nodes (2-50)
 * @method void setNodeNum(integer $NodeNum) Set Number of nodes (2-50)
 * @method string getEsConfig() Obtain Configuration item (JSON string). Only the following items are supported currently: <li>action.destructive_requires_name</li><li>indices.fielddata.cache.size</li><li>indices.query.bool.max_clause_count</li>
 * @method void setEsConfig(string $EsConfig) Set Configuration item (JSON string). Only the following items are supported currently: <li>action.destructive_requires_name</li><li>indices.fielddata.cache.size</li><li>indices.query.bool.max_clause_count</li>
 * @method string getPassword() Obtain Password of the default user “elastic“, which must contain 8 to 16 characters, including at least two of the following three types of characters: [a-z,A-Z], [0-9] and [-!@#$%&^*+=_:;,.?]
 * @method void setPassword(string $Password) Set Password of the default user “elastic“, which must contain 8 to 16 characters, including at least two of the following three types of characters: [a-z,A-Z], [0-9] and [-!@#$%&^*+=_:;,.?]
 * @method EsAcl getEsAcl() Obtain Access control list
 * @method void setEsAcl(EsAcl $EsAcl) Set Access control list
 * @method integer getDiskSize() Obtain Disk size in GB
 * @method void setDiskSize(integer $DiskSize) Set Disk size in GB
 * @method string getNodeType() Obtain Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
 * @method void setNodeType(string $NodeType) Set Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
 * @method integer getMasterNodeNum() Obtain Number of dedicated master nodes (only 3 and 5 are supported)
 * @method void setMasterNodeNum(integer $MasterNodeNum) Set Number of dedicated master nodes (only 3 and 5 are supported)
 * @method string getMasterNodeType() Obtain Dedicated master node specification <li>ES.S1.SMALL2: 1-core 2 GB</li><li>ES.S1.MEDIUM4: 2-core 4 GB</li><li>ES.S1.MEDIUM8: 2-core 8 GB</li><li>ES.S1.LARGE16: 4-core 16 GB</li><li>ES.S1.2XLARGE32: 8-core 32 GB</li><li>ES.S1.4XLARGE32: 16-core 32 GB</li><li>ES.S1.4XLARGE64: 16-core 64 GB</li>
 * @method void setMasterNodeType(string $MasterNodeType) Set Dedicated master node specification <li>ES.S1.SMALL2: 1-core 2 GB</li><li>ES.S1.MEDIUM4: 2-core 4 GB</li><li>ES.S1.MEDIUM8: 2-core 8 GB</li><li>ES.S1.LARGE16: 4-core 16 GB</li><li>ES.S1.2XLARGE32: 8-core 32 GB</li><li>ES.S1.4XLARGE32: 16-core 32 GB</li><li>ES.S1.4XLARGE64: 16-core 64 GB</li>
 * @method integer getMasterNodeDiskSize() Obtain Dedicated master node disk size in GB. This is 50 GB by default and currently cannot be customized
 * @method void setMasterNodeDiskSize(integer $MasterNodeDiskSize) Set Dedicated master node disk size in GB. This is 50 GB by default and currently cannot be customized
 * @method boolean getForceRestart() Obtain Whether to force restart during configuration update <li>true: Yes </li><li>false: No </li>This needs to be set only for EsConfig. Default value: false
 * @method void setForceRestart(boolean $ForceRestart) Set Whether to force restart during configuration update <li>true: Yes </li><li>false: No </li>This needs to be set only for EsConfig. Default value: false
 * @method CosBackup getCosBackup() Obtain Auto-backup to COS
 * @method void setCosBackup(CosBackup $CosBackup) Set Auto-backup to COS
 * @method array getNodeInfoList() Obtain 
 * @method void setNodeInfoList(array $NodeInfoList) Set 
 * @method string getPublicAccess() Obtain 
 * @method void setPublicAccess(string $PublicAccess) Set 
 * @method EsPublicAcl getEsPublicAcl() Obtain 
 * @method void setEsPublicAcl(EsPublicAcl $EsPublicAcl) Set 
 * @method string getKibanaPublicAccess() Obtain 
 * @method void setKibanaPublicAccess(string $KibanaPublicAccess) Set 
 * @method string getKibanaPrivateAccess() Obtain 
 * @method void setKibanaPrivateAccess(string $KibanaPrivateAccess) Set 
 */

/**
 *UpdateInstance request structure.
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
     * @var integer Number of nodes (2-50)
     */
    public $NodeNum;

    /**
     * @var string Configuration item (JSON string). Only the following items are supported currently: <li>action.destructive_requires_name</li><li>indices.fielddata.cache.size</li><li>indices.query.bool.max_clause_count</li>
     */
    public $EsConfig;

    /**
     * @var string Password of the default user “elastic“, which must contain 8 to 16 characters, including at least two of the following three types of characters: [a-z,A-Z], [0-9] and [-!@#$%&^*+=_:;,.?]
     */
    public $Password;

    /**
     * @var EsAcl Access control list
     */
    public $EsAcl;

    /**
     * @var integer Disk size in GB
     */
    public $DiskSize;

    /**
     * @var string Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
     */
    public $NodeType;

    /**
     * @var integer Number of dedicated master nodes (only 3 and 5 are supported)
     */
    public $MasterNodeNum;

    /**
     * @var string Dedicated master node specification <li>ES.S1.SMALL2: 1-core 2 GB</li><li>ES.S1.MEDIUM4: 2-core 4 GB</li><li>ES.S1.MEDIUM8: 2-core 8 GB</li><li>ES.S1.LARGE16: 4-core 16 GB</li><li>ES.S1.2XLARGE32: 8-core 32 GB</li><li>ES.S1.4XLARGE32: 16-core 32 GB</li><li>ES.S1.4XLARGE64: 16-core 64 GB</li>
     */
    public $MasterNodeType;

    /**
     * @var integer Dedicated master node disk size in GB. This is 50 GB by default and currently cannot be customized
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
     * @var array 
     */
    public $NodeInfoList;

    /**
     * @var string 
     */
    public $PublicAccess;

    /**
     * @var EsPublicAcl 
     */
    public $EsPublicAcl;

    /**
     * @var string 
     */
    public $KibanaPublicAccess;

    /**
     * @var string 
     */
    public $KibanaPrivateAccess;
    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name, which can contain 1 to 50 English letters, Chinese characters, digits, dashes (-), or underscores (_)
     * @param integer $NodeNum Number of nodes (2-50)
     * @param string $EsConfig Configuration item (JSON string). Only the following items are supported currently: <li>action.destructive_requires_name</li><li>indices.fielddata.cache.size</li><li>indices.query.bool.max_clause_count</li>
     * @param string $Password Password of the default user “elastic“, which must contain 8 to 16 characters, including at least two of the following three types of characters: [a-z,A-Z], [0-9] and [-!@#$%&^*+=_:;,.?]
     * @param EsAcl $EsAcl Access control list
     * @param integer $DiskSize Disk size in GB
     * @param string $NodeType Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
     * @param integer $MasterNodeNum Number of dedicated master nodes (only 3 and 5 are supported)
     * @param string $MasterNodeType Dedicated master node specification <li>ES.S1.SMALL2: 1-core 2 GB</li><li>ES.S1.MEDIUM4: 2-core 4 GB</li><li>ES.S1.MEDIUM8: 2-core 8 GB</li><li>ES.S1.LARGE16: 4-core 16 GB</li><li>ES.S1.2XLARGE32: 8-core 32 GB</li><li>ES.S1.4XLARGE32: 16-core 32 GB</li><li>ES.S1.4XLARGE64: 16-core 64 GB</li>
     * @param integer $MasterNodeDiskSize Dedicated master node disk size in GB. This is 50 GB by default and currently cannot be customized
     * @param boolean $ForceRestart Whether to force restart during configuration update <li>true: Yes </li><li>false: No </li>This needs to be set only for EsConfig. Default value: false
     * @param CosBackup $CosBackup Auto-backup to COS
     * @param array $NodeInfoList 
     * @param string $PublicAccess 
     * @param EsPublicAcl $EsPublicAcl 
     * @param string $KibanaPublicAccess 
     * @param string $KibanaPrivateAccess 
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
    }
}
