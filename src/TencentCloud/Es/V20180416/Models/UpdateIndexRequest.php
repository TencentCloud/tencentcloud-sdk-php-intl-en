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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateIndex request structure.
 *
 * @method string getInstanceId() Obtain <p>ES cluster ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>ES cluster ID</p>
 * @method string getIndexType() Obtain <p>Updated index type. auto: autonomous index; normal: general index</p>
 * @method void setIndexType(string $IndexType) Set <p>Updated index type. auto: autonomous index; normal: general index</p>
 * @method string getIndexName() Obtain <p>Updated index name</p>
 * @method void setIndexName(string $IndexName) Set <p>Updated index name</p>
 * @method string getUpdateMetaJson() Obtain <p>Updated JSON-formatted index metadata, such as mappings and settings</p>
 * @method void setUpdateMetaJson(string $UpdateMetaJson) Set <p>Updated JSON-formatted index metadata, such as mappings and settings</p>
 * @method string getUsername() Obtain <p>Cluster access username.</p>
 * @method void setUsername(string $Username) Set <p>Cluster access username.</p>
 * @method string getPassword() Obtain <p>Cluster access password</p>
 * @method void setPassword(string $Password) Set <p>Cluster access password</p>
 * @method boolean getRolloverBackingIndex() Obtain <p>Whether to scroll the backup index</p>
 * @method void setRolloverBackingIndex(boolean $RolloverBackingIndex) Set <p>Whether to scroll the backup index</p>
 * @method boolean getMountIndex() Obtain <p>Whether to retrieve the full uninstall index</p>
 * @method void setMountIndex(boolean $MountIndex) Set <p>Whether to retrieve the full uninstall index</p>
 * @method string getIndexUuid() Obtain <p>Index Uuid</p>
 * @method void setIndexUuid(string $IndexUuid) Set <p>Index Uuid</p>
 * @method string getBackingIndexName() Obtain <p>Backing index name</p>
 * @method void setBackingIndexName(string $BackingIndexName) Set <p>Backing index name</p>
 */
class UpdateIndexRequest extends AbstractModel
{
    /**
     * @var string <p>ES cluster ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Updated index type. auto: autonomous index; normal: general index</p>
     */
    public $IndexType;

    /**
     * @var string <p>Updated index name</p>
     */
    public $IndexName;

    /**
     * @var string <p>Updated JSON-formatted index metadata, such as mappings and settings</p>
     */
    public $UpdateMetaJson;

    /**
     * @var string <p>Cluster access username.</p>
     */
    public $Username;

    /**
     * @var string <p>Cluster access password</p>
     */
    public $Password;

    /**
     * @var boolean <p>Whether to scroll the backup index</p>
     */
    public $RolloverBackingIndex;

    /**
     * @var boolean <p>Whether to retrieve the full uninstall index</p>
     */
    public $MountIndex;

    /**
     * @var string <p>Index Uuid</p>
     */
    public $IndexUuid;

    /**
     * @var string <p>Backing index name</p>
     */
    public $BackingIndexName;

    /**
     * @param string $InstanceId <p>ES cluster ID</p>
     * @param string $IndexType <p>Updated index type. auto: autonomous index; normal: general index</p>
     * @param string $IndexName <p>Updated index name</p>
     * @param string $UpdateMetaJson <p>Updated JSON-formatted index metadata, such as mappings and settings</p>
     * @param string $Username <p>Cluster access username.</p>
     * @param string $Password <p>Cluster access password</p>
     * @param boolean $RolloverBackingIndex <p>Whether to scroll the backup index</p>
     * @param boolean $MountIndex <p>Whether to retrieve the full uninstall index</p>
     * @param string $IndexUuid <p>Index Uuid</p>
     * @param string $BackingIndexName <p>Backing index name</p>
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

        if (array_key_exists("IndexType",$param) and $param["IndexType"] !== null) {
            $this->IndexType = $param["IndexType"];
        }

        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("UpdateMetaJson",$param) and $param["UpdateMetaJson"] !== null) {
            $this->UpdateMetaJson = $param["UpdateMetaJson"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("RolloverBackingIndex",$param) and $param["RolloverBackingIndex"] !== null) {
            $this->RolloverBackingIndex = $param["RolloverBackingIndex"];
        }

        if (array_key_exists("MountIndex",$param) and $param["MountIndex"] !== null) {
            $this->MountIndex = $param["MountIndex"];
        }

        if (array_key_exists("IndexUuid",$param) and $param["IndexUuid"] !== null) {
            $this->IndexUuid = $param["IndexUuid"];
        }

        if (array_key_exists("BackingIndexName",$param) and $param["BackingIndexName"] !== null) {
            $this->BackingIndexName = $param["BackingIndexName"];
        }
    }
}
