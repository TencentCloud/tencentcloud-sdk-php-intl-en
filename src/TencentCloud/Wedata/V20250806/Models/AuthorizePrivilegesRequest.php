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
 * AuthorizePrivileges request structure.
 *
 * @method array getResources() Obtain Resource array.
ResourceType: originates from the ResourceType returned by the GetGrantPrivilegesSTD API in the TCCATALOG module, and change to capitalize the first letter, such as METALAKE corresponding to METALAKE.
ResourceUri depends on ResourceType. fixed as default for Metalake. use the three-segment format of catalog for other categories, such as.
-Metalake, fixed as default.
-Catalog. specifies the catalogName.
-Schema. valid values: catalogName.SchemaName.
-Table, in the format of catalogName.SchemaName.TableName.

 * @method void setResources(array $Resources) Set Resource array.
ResourceType: originates from the ResourceType returned by the GetGrantPrivilegesSTD API in the TCCATALOG module, and change to capitalize the first letter, such as METALAKE corresponding to METALAKE.
ResourceUri depends on ResourceType. fixed as default for Metalake. use the three-segment format of catalog for other categories, such as.
-Metalake, fixed as default.
-Catalog. specifies the catalogName.
-Schema. valid values: catalogName.SchemaName.
-Table, in the format of catalogName.SchemaName.TableName.

 * @method array getSubjects() Obtain Authorization entity array. specifies the SubjectType and corresponding SubjectValue value rules.
-User.
-User id obtained from DescribeTenantUserList.
-Project.
-ProjectId from the DescribeUserProjects request parameters structure.
-Role (project-level role).
-First call DescribeUserProjects to obtain the project ID (ProjectId), then call DescribeRoleList to get the role ID (RoleId), and combine them as $ProjectId.$ProjectId.RoleId, for example "3085649716411588608.308335260274237440".
-GlobalRole (platform-level role).
-AllAccountUsers all users.
-Another ID, taken from RoleId in DescribeTenantRole.
 * @method void setSubjects(array $Subjects) Set Authorization entity array. specifies the SubjectType and corresponding SubjectValue value rules.
-User.
-User id obtained from DescribeTenantUserList.
-Project.
-ProjectId from the DescribeUserProjects request parameters structure.
-Role (project-level role).
-First call DescribeUserProjects to obtain the project ID (ProjectId), then call DescribeRoleList to get the role ID (RoleId), and combine them as $ProjectId.$ProjectId.RoleId, for example "3085649716411588608.308335260274237440".
-GlobalRole (platform-level role).
-AllAccountUsers all users.
-Another ID, taken from RoleId in DescribeTenantRole.
 * @method array getPrivileges() Obtain Permission point, comes from the NAME in various Privileges returned by the GetGrantPrivilegesSTD API in the TCCATALOG module.
 * @method void setPrivileges(array $Privileges) Set Permission point, comes from the NAME in various Privileges returned by the GetGrantPrivilegesSTD API in the TCCATALOG module.
 */
class AuthorizePrivilegesRequest extends AbstractModel
{
    /**
     * @var array Resource array.
ResourceType: originates from the ResourceType returned by the GetGrantPrivilegesSTD API in the TCCATALOG module, and change to capitalize the first letter, such as METALAKE corresponding to METALAKE.
ResourceUri depends on ResourceType. fixed as default for Metalake. use the three-segment format of catalog for other categories, such as.
-Metalake, fixed as default.
-Catalog. specifies the catalogName.
-Schema. valid values: catalogName.SchemaName.
-Table, in the format of catalogName.SchemaName.TableName.

     */
    public $Resources;

    /**
     * @var array Authorization entity array. specifies the SubjectType and corresponding SubjectValue value rules.
-User.
-User id obtained from DescribeTenantUserList.
-Project.
-ProjectId from the DescribeUserProjects request parameters structure.
-Role (project-level role).
-First call DescribeUserProjects to obtain the project ID (ProjectId), then call DescribeRoleList to get the role ID (RoleId), and combine them as $ProjectId.$ProjectId.RoleId, for example "3085649716411588608.308335260274237440".
-GlobalRole (platform-level role).
-AllAccountUsers all users.
-Another ID, taken from RoleId in DescribeTenantRole.
     */
    public $Subjects;

    /**
     * @var array Permission point, comes from the NAME in various Privileges returned by the GetGrantPrivilegesSTD API in the TCCATALOG module.
     */
    public $Privileges;

    /**
     * @param array $Resources Resource array.
ResourceType: originates from the ResourceType returned by the GetGrantPrivilegesSTD API in the TCCATALOG module, and change to capitalize the first letter, such as METALAKE corresponding to METALAKE.
ResourceUri depends on ResourceType. fixed as default for Metalake. use the three-segment format of catalog for other categories, such as.
-Metalake, fixed as default.
-Catalog. specifies the catalogName.
-Schema. valid values: catalogName.SchemaName.
-Table, in the format of catalogName.SchemaName.TableName.

     * @param array $Subjects Authorization entity array. specifies the SubjectType and corresponding SubjectValue value rules.
-User.
-User id obtained from DescribeTenantUserList.
-Project.
-ProjectId from the DescribeUserProjects request parameters structure.
-Role (project-level role).
-First call DescribeUserProjects to obtain the project ID (ProjectId), then call DescribeRoleList to get the role ID (RoleId), and combine them as $ProjectId.$ProjectId.RoleId, for example "3085649716411588608.308335260274237440".
-GlobalRole (platform-level role).
-AllAccountUsers all users.
-Another ID, taken from RoleId in DescribeTenantRole.
     * @param array $Privileges Permission point, comes from the NAME in various Privileges returned by the GetGrantPrivilegesSTD API in the TCCATALOG module.
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
        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new PrivilegeResource();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("Subjects",$param) and $param["Subjects"] !== null) {
            $this->Subjects = [];
            foreach ($param["Subjects"] as $key => $value){
                $obj = new Subject();
                $obj->deserialize($value);
                array_push($this->Subjects, $obj);
            }
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = [];
            foreach ($param["Privileges"] as $key => $value){
                $obj = new PrivilegeInfo();
                $obj->deserialize($value);
                array_push($this->Privileges, $obj);
            }
        }
    }
}
