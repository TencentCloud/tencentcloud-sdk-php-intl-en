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
 * RevokePrivileges request structure.
 *
 * @method array getResources() Obtain Resource array. data source is ResourceType and ResourceUri in the Resource of the ListPermissions API response.
 * @method void setResources(array $Resources) Set Resource array. data source is ResourceType and ResourceUri in the Resource of the ListPermissions API response.
 * @method array getSubjects() Obtain Authorization revoked principal array. need to pay attention to parameter assembly.
1. for SubjectType and SubjectValues, refer to SubjectType and SubjectValue in SubjectDetails returned by the ListPermissions api.
2. during batch reclamation, the length of the Subjects array must match the length of the Privileges permission point, and the data must have a one-to-one correspondence.
 * @method void setSubjects(array $Subjects) Set Authorization revoked principal array. need to pay attention to parameter assembly.
1. for SubjectType and SubjectValues, refer to SubjectType and SubjectValue in SubjectDetails returned by the ListPermissions api.
2. during batch reclamation, the length of the Subjects array must match the length of the Privileges permission point, and the data must have a one-to-one correspondence.
 * @method array getPrivileges() Obtain Permission point, Name originates from the Name in PermissionDetails of the ListPermissions API response, such as BROWSE, GRANT_PRIVILEGES.
 * @method void setPrivileges(array $Privileges) Set Permission point, Name originates from the Name in PermissionDetails of the ListPermissions API response, such as BROWSE, GRANT_PRIVILEGES.
 */
class RevokePrivilegesRequest extends AbstractModel
{
    /**
     * @var array Resource array. data source is ResourceType and ResourceUri in the Resource of the ListPermissions API response.
     */
    public $Resources;

    /**
     * @var array Authorization revoked principal array. need to pay attention to parameter assembly.
1. for SubjectType and SubjectValues, refer to SubjectType and SubjectValue in SubjectDetails returned by the ListPermissions api.
2. during batch reclamation, the length of the Subjects array must match the length of the Privileges permission point, and the data must have a one-to-one correspondence.
     */
    public $Subjects;

    /**
     * @var array Permission point, Name originates from the Name in PermissionDetails of the ListPermissions API response, such as BROWSE, GRANT_PRIVILEGES.
     */
    public $Privileges;

    /**
     * @param array $Resources Resource array. data source is ResourceType and ResourceUri in the Resource of the ListPermissions API response.
     * @param array $Subjects Authorization revoked principal array. need to pay attention to parameter assembly.
1. for SubjectType and SubjectValues, refer to SubjectType and SubjectValue in SubjectDetails returned by the ListPermissions api.
2. during batch reclamation, the length of the Subjects array must match the length of the Privileges permission point, and the data must have a one-to-one correspondence.
     * @param array $Privileges Permission point, Name originates from the Name in PermissionDetails of the ListPermissions API response, such as BROWSE, GRANT_PRIVILEGES.
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
