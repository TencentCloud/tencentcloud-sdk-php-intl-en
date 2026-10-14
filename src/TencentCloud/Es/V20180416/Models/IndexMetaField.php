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
 * Index metadata field
 *
 * @method string getIndexType() Obtain Index type
 * @method void setIndexType(string $IndexType) Set Index type
 * @method string getIndexName() Obtain Index name
 * @method void setIndexName(string $IndexName) Set Index name
 * @method string getIndexMetaJson() Obtain JSON-formatted index metadata
 * @method void setIndexMetaJson(string $IndexMetaJson) Set JSON-formatted index metadata
 * @method string getIndexStatus() Obtain Index status
 * @method void setIndexStatus(string $IndexStatus) Set Index status
 * @method integer getIndexStorage() Obtain Index storage size in bytes
 * @method void setIndexStorage(integer $IndexStorage) Set Index storage size in bytes
 * @method string getIndexCreateTime() Obtain Index creation time
 * @method void setIndexCreateTime(string $IndexCreateTime) Set Index creation time
 * @method array getBackingIndices() Obtain Backup index
 * @method void setBackingIndices(array $BackingIndices) Set Backup index
 * @method string getClusterId() Obtain Cluster ID of the index
 * @method void setClusterId(string $ClusterId) Set Cluster ID of the index
 * @method string getClusterName() Obtain Cluster name of the index
 * @method void setClusterName(string $ClusterName) Set Cluster name of the index
 * @method string getClusterVersion() Obtain Version number of the cluster to which the index belongs
 * @method void setClusterVersion(string $ClusterVersion) Set Version number of the cluster to which the index belongs
 * @method IndexPolicyField getIndexPolicyField() Obtain Index lifecycle field
 * @method void setIndexPolicyField(IndexPolicyField $IndexPolicyField) Set Index lifecycle field
 * @method IndexOptionsField getIndexOptionsField() Obtain Index autonomous field
 * @method void setIndexOptionsField(IndexOptionsField $IndexOptionsField) Set Index autonomous field
 * @method IndexSettingsField getIndexSettingsField() Obtain Index configuration field
 * @method void setIndexSettingsField(IndexSettingsField $IndexSettingsField) Set Index configuration field
 * @method array getIndexAliasesField() Obtain Index alias field
 * @method void setIndexAliasesField(array $IndexAliasesField) Set Index alias field
 * @method integer getAppId() Obtain APP ID of the cluster to which the index belongs
 * @method void setAppId(integer $AppId) Set APP ID of the cluster to which the index belongs
 * @method integer getIndexDocs() Obtain Number of indexed documents
 * @method void setIndexDocs(integer $IndexDocs) Set Number of indexed documents
 */
class IndexMetaField extends AbstractModel
{
    /**
     * @var string Index type
     */
    public $IndexType;

    /**
     * @var string Index name
     */
    public $IndexName;

    /**
     * @var string JSON-formatted index metadata
     */
    public $IndexMetaJson;

    /**
     * @var string Index status
     */
    public $IndexStatus;

    /**
     * @var integer Index storage size in bytes
     */
    public $IndexStorage;

    /**
     * @var string Index creation time
     */
    public $IndexCreateTime;

    /**
     * @var array Backup index
     */
    public $BackingIndices;

    /**
     * @var string Cluster ID of the index
     */
    public $ClusterId;

    /**
     * @var string Cluster name of the index
     */
    public $ClusterName;

    /**
     * @var string Version number of the cluster to which the index belongs
     */
    public $ClusterVersion;

    /**
     * @var IndexPolicyField Index lifecycle field
     */
    public $IndexPolicyField;

    /**
     * @var IndexOptionsField Index autonomous field
     */
    public $IndexOptionsField;

    /**
     * @var IndexSettingsField Index configuration field
     */
    public $IndexSettingsField;

    /**
     * @var array Index alias field
     */
    public $IndexAliasesField;

    /**
     * @var integer APP ID of the cluster to which the index belongs
     */
    public $AppId;

    /**
     * @var integer Number of indexed documents
     */
    public $IndexDocs;

    /**
     * @param string $IndexType Index type
     * @param string $IndexName Index name
     * @param string $IndexMetaJson JSON-formatted index metadata
     * @param string $IndexStatus Index status
     * @param integer $IndexStorage Index storage size in bytes
     * @param string $IndexCreateTime Index creation time
     * @param array $BackingIndices Backup index
     * @param string $ClusterId Cluster ID of the index
     * @param string $ClusterName Cluster name of the index
     * @param string $ClusterVersion Version number of the cluster to which the index belongs
     * @param IndexPolicyField $IndexPolicyField Index lifecycle field
     * @param IndexOptionsField $IndexOptionsField Index autonomous field
     * @param IndexSettingsField $IndexSettingsField Index configuration field
     * @param array $IndexAliasesField Index alias field
     * @param integer $AppId APP ID of the cluster to which the index belongs
     * @param integer $IndexDocs Number of indexed documents
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
        if (array_key_exists("IndexType",$param) and $param["IndexType"] !== null) {
            $this->IndexType = $param["IndexType"];
        }

        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("IndexMetaJson",$param) and $param["IndexMetaJson"] !== null) {
            $this->IndexMetaJson = $param["IndexMetaJson"];
        }

        if (array_key_exists("IndexStatus",$param) and $param["IndexStatus"] !== null) {
            $this->IndexStatus = $param["IndexStatus"];
        }

        if (array_key_exists("IndexStorage",$param) and $param["IndexStorage"] !== null) {
            $this->IndexStorage = $param["IndexStorage"];
        }

        if (array_key_exists("IndexCreateTime",$param) and $param["IndexCreateTime"] !== null) {
            $this->IndexCreateTime = $param["IndexCreateTime"];
        }

        if (array_key_exists("BackingIndices",$param) and $param["BackingIndices"] !== null) {
            $this->BackingIndices = [];
            foreach ($param["BackingIndices"] as $key => $value){
                $obj = new BackingIndexMetaField();
                $obj->deserialize($value);
                array_push($this->BackingIndices, $obj);
            }
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("IndexPolicyField",$param) and $param["IndexPolicyField"] !== null) {
            $this->IndexPolicyField = new IndexPolicyField();
            $this->IndexPolicyField->deserialize($param["IndexPolicyField"]);
        }

        if (array_key_exists("IndexOptionsField",$param) and $param["IndexOptionsField"] !== null) {
            $this->IndexOptionsField = new IndexOptionsField();
            $this->IndexOptionsField->deserialize($param["IndexOptionsField"]);
        }

        if (array_key_exists("IndexSettingsField",$param) and $param["IndexSettingsField"] !== null) {
            $this->IndexSettingsField = new IndexSettingsField();
            $this->IndexSettingsField->deserialize($param["IndexSettingsField"]);
        }

        if (array_key_exists("IndexAliasesField",$param) and $param["IndexAliasesField"] !== null) {
            $this->IndexAliasesField = $param["IndexAliasesField"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("IndexDocs",$param) and $param["IndexDocs"] !== null) {
            $this->IndexDocs = $param["IndexDocs"];
        }
    }
}
