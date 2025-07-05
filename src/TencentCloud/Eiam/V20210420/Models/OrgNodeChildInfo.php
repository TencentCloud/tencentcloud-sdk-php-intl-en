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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of sub-nodes under the current organization node
 *
 * @method string getDisplayName() Obtain Displayed organization node name, which can contain up to 64 characters and is the same as the organization name by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDisplayName(string $DisplayName) Set Displayed organization node name, which can contain up to 64 characters and is the same as the organization name by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLastModifiedDate() Obtain Last modification time of the organization node in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastModifiedDate(string $LastModifiedDate) Set Last modification time of the organization node in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCustomizedOrgNodeId() Obtain External ID of the organization node, which is optional and customizable.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCustomizedOrgNodeId(string $CustomizedOrgNodeId) Set External ID of the organization node, which is optional and customizable.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getParentOrgNodeId() Obtain Parent node ID of the current organization node.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setParentOrgNodeId(string $ParentOrgNodeId) Set Parent node ID of the current organization node.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOrgNodeId() Obtain Organization node ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOrgNodeId(string $OrgNodeId) Set Organization node ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDataSource() Obtain Data source.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDataSource(string $DataSource) Set Data source.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedDate() Obtain Organization node creation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedDate(string $CreatedDate) Set Organization node creation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Organization node description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Organization node description.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class OrgNodeChildInfo extends AbstractModel
{
    /**
     * @var string Displayed organization node name, which can contain up to 64 characters and is the same as the organization name by default.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DisplayName;

    /**
     * @var string Last modification time of the organization node in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastModifiedDate;

    /**
     * @var string External ID of the organization node, which is optional and customizable.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CustomizedOrgNodeId;

    /**
     * @var string Parent node ID of the current organization node.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ParentOrgNodeId;

    /**
     * @var string Organization node ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OrgNodeId;

    /**
     * @var string Data source.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DataSource;

    /**
     * @var string Organization node creation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedDate;

    /**
     * @var string Organization node description.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @param string $DisplayName Displayed organization node name, which can contain up to 64 characters and is the same as the organization name by default.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LastModifiedDate Last modification time of the organization node in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CustomizedOrgNodeId External ID of the organization node, which is optional and customizable.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ParentOrgNodeId Parent node ID of the current organization node.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OrgNodeId Organization node ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DataSource Data source.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedDate Organization node creation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Description Organization node description.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("LastModifiedDate",$param) and $param["LastModifiedDate"] !== null) {
            $this->LastModifiedDate = $param["LastModifiedDate"];
        }

        if (array_key_exists("CustomizedOrgNodeId",$param) and $param["CustomizedOrgNodeId"] !== null) {
            $this->CustomizedOrgNodeId = $param["CustomizedOrgNodeId"];
        }

        if (array_key_exists("ParentOrgNodeId",$param) and $param["ParentOrgNodeId"] !== null) {
            $this->ParentOrgNodeId = $param["ParentOrgNodeId"];
        }

        if (array_key_exists("OrgNodeId",$param) and $param["OrgNodeId"] !== null) {
            $this->OrgNodeId = $param["OrgNodeId"];
        }

        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = $param["DataSource"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
