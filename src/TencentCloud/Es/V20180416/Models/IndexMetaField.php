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
 * Index metadata field
 *
 * @method string getIndexType() Obtain Index type
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIndexType(string $IndexType) Set Index type
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getIndexName() Obtain Index name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIndexName(string $IndexName) Set Index name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getIndexStatus() Obtain Index status
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIndexStatus(string $IndexStatus) Set Index status
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getIndexStorage() Obtain Index size (in byte)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIndexStorage(integer $IndexStorage) Set Index size (in byte)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getIndexCreateTime() Obtain Index creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIndexCreateTime(string $IndexCreateTime) Set Index creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getBackingIndices() Obtain Backing index
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setBackingIndices(array $BackingIndices) Set Backing index
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getClusterId() Obtain Cluster ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setClusterId(string $ClusterId) Set Cluster ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getClusterName() Obtain Cluster name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setClusterName(string $ClusterName) Set Cluster name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getClusterVersion() Obtain Cluster version
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setClusterVersion(string $ClusterVersion) Set Cluster version
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method IndexPolicyField getIndexPolicyField() Obtain Index lifecycle policy field
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIndexPolicyField(IndexPolicyField $IndexPolicyField) Set Index lifecycle policy field
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method IndexOptionsField getIndexOptionsField() Obtain Index automation field
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIndexOptionsField(IndexOptionsField $IndexOptionsField) Set Index automation field
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method IndexSettingsField getIndexSettingsField() Obtain Index setting field
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIndexSettingsField(IndexSettingsField $IndexSettingsField) Set Index setting field
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getAppId() Obtain Cluster APP ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAppId(integer $AppId) Set Cluster APP ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getIndexDocs() Obtain The number of index docs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIndexDocs(integer $IndexDocs) Set The number of index docs.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class IndexMetaField extends AbstractModel
{
    /**
     * @var string Index type
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IndexType;

    /**
     * @var string Index name
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IndexName;

    /**
     * @var string Index status
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IndexStatus;

    /**
     * @var integer Index size (in byte)
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IndexStorage;

    /**
     * @var string Index creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IndexCreateTime;

    /**
     * @var array Backing index
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $BackingIndices;

    /**
     * @var string Cluster ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ClusterId;

    /**
     * @var string Cluster name
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ClusterName;

    /**
     * @var string Cluster version
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ClusterVersion;

    /**
     * @var IndexPolicyField Index lifecycle policy field
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IndexPolicyField;

    /**
     * @var IndexOptionsField Index automation field
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IndexOptionsField;

    /**
     * @var IndexSettingsField Index setting field
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IndexSettingsField;

    /**
     * @var integer Cluster APP ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AppId;

    /**
     * @var integer The number of index docs.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IndexDocs;

    /**
     * @param string $IndexType Index type
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $IndexName Index name
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $IndexStatus Index status
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $IndexStorage Index size (in byte)
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $IndexCreateTime Index creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $BackingIndices Backing index
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ClusterId Cluster ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ClusterName Cluster name
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ClusterVersion Cluster version
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param IndexPolicyField $IndexPolicyField Index lifecycle policy field
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param IndexOptionsField $IndexOptionsField Index automation field
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param IndexSettingsField $IndexSettingsField Index setting field
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $AppId Cluster APP ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $IndexDocs The number of index docs.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("IndexDocs",$param) and $param["IndexDocs"] !== null) {
            $this->IndexDocs = $param["IndexDocs"];
        }
    }
}
