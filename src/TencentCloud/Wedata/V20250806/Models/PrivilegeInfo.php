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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Permission information
 *
 * @method string getName() Obtain Permission name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Permission name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDisplayName() Obtain Display name of the permission.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDisplayName(string $DisplayName) Set Display name of the permission.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Permission description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Permission description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsRead() Obtain Whether read permission.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsRead(boolean $IsRead) Set Whether read permission.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsManage() Obtain Whether it is a management permission.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsManage(boolean $IsManage) Set Whether it is a management permission.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getGranted() Obtain Checks whether the permission is available. used when checking permissions.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGranted(boolean $Granted) Set Checks whether the permission is available. used when checking permissions.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PrivilegeResource getInheritedObject() Obtain Specifies the resource it inherits from. used when querying permission details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInheritedObject(PrivilegeResource $InheritedObject) Set Specifies the resource it inherits from. used when querying permission details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getInherited() Obtain Not inheritable, used when querying permission details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInherited(boolean $Inherited) Set Not inheritable, used when querying permission details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsEdit() Obtain Whether edit permission.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsEdit(boolean $IsEdit) Set Whether edit permission.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsMetaDataPermission() Obtain Whether metadata permissions (displayed on the front-end).
 * @method void setIsMetaDataPermission(boolean $IsMetaDataPermission) Set Whether metadata permissions (displayed on the front-end).
 * @method string getCatalogID() Obtain CatalogID (deprecated).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCatalogID(string $CatalogID) Set CatalogID (deprecated).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCatalogName() Obtain catalog name (deprecated).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCatalogName(string $CatalogName) Set catalog name (deprecated).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkSpaceID() Obtain Space ID (deprecated).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkSpaceID(string $WorkSpaceID) Set Space ID (deprecated).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkSpaceName() Obtain Space name (deprecated).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkSpaceName(string $WorkSpaceName) Set Space name (deprecated).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrivilegeInfo extends AbstractModel
{
    /**
     * @var string Permission name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Display name of the permission.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DisplayName;

    /**
     * @var string Permission description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var boolean Whether read permission.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsRead;

    /**
     * @var boolean Whether it is a management permission.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsManage;

    /**
     * @var boolean Checks whether the permission is available. used when checking permissions.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Granted;

    /**
     * @var PrivilegeResource Specifies the resource it inherits from. used when querying permission details.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InheritedObject;

    /**
     * @var boolean Not inheritable, used when querying permission details.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Inherited;

    /**
     * @var boolean Whether edit permission.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsEdit;

    /**
     * @var boolean Whether metadata permissions (displayed on the front-end).
     */
    public $IsMetaDataPermission;

    /**
     * @var string CatalogID (deprecated).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CatalogID;

    /**
     * @var string catalog name (deprecated).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CatalogName;

    /**
     * @var string Space ID (deprecated).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkSpaceID;

    /**
     * @var string Space name (deprecated).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkSpaceName;

    /**
     * @param string $Name Permission name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DisplayName Display name of the permission.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Permission description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsRead Whether read permission.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsManage Whether it is a management permission.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Granted Checks whether the permission is available. used when checking permissions.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PrivilegeResource $InheritedObject Specifies the resource it inherits from. used when querying permission details.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Inherited Not inheritable, used when querying permission details.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsEdit Whether edit permission.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsMetaDataPermission Whether metadata permissions (displayed on the front-end).
     * @param string $CatalogID CatalogID (deprecated).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CatalogName catalog name (deprecated).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkSpaceID Space ID (deprecated).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkSpaceName Space name (deprecated).
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsRead",$param) and $param["IsRead"] !== null) {
            $this->IsRead = $param["IsRead"];
        }

        if (array_key_exists("IsManage",$param) and $param["IsManage"] !== null) {
            $this->IsManage = $param["IsManage"];
        }

        if (array_key_exists("Granted",$param) and $param["Granted"] !== null) {
            $this->Granted = $param["Granted"];
        }

        if (array_key_exists("InheritedObject",$param) and $param["InheritedObject"] !== null) {
            $this->InheritedObject = new PrivilegeResource();
            $this->InheritedObject->deserialize($param["InheritedObject"]);
        }

        if (array_key_exists("Inherited",$param) and $param["Inherited"] !== null) {
            $this->Inherited = $param["Inherited"];
        }

        if (array_key_exists("IsEdit",$param) and $param["IsEdit"] !== null) {
            $this->IsEdit = $param["IsEdit"];
        }

        if (array_key_exists("IsMetaDataPermission",$param) and $param["IsMetaDataPermission"] !== null) {
            $this->IsMetaDataPermission = $param["IsMetaDataPermission"];
        }

        if (array_key_exists("CatalogID",$param) and $param["CatalogID"] !== null) {
            $this->CatalogID = $param["CatalogID"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("WorkSpaceID",$param) and $param["WorkSpaceID"] !== null) {
            $this->WorkSpaceID = $param["WorkSpaceID"];
        }

        if (array_key_exists("WorkSpaceName",$param) and $param["WorkSpaceName"] !== null) {
            $this->WorkSpaceName = $param["WorkSpaceName"];
        }
    }
}
