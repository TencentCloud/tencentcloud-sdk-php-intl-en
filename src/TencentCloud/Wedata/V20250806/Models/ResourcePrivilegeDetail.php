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
 * ResourcePrivilegeDetail
 *
 * @method PrivilegeResource getResource() Obtain Resource.
 * @method void setResource(PrivilegeResource $Resource) Set Resource.
 * @method array getSubjectDetails() Obtain Subject.
 * @method void setSubjectDetails(array $SubjectDetails) Set Subject.
 * @method array getPermissionDetails() Obtain Permission details.
 * @method void setPermissionDetails(array $PermissionDetails) Set Permission details.
 */
class ResourcePrivilegeDetail extends AbstractModel
{
    /**
     * @var PrivilegeResource Resource.
     */
    public $Resource;

    /**
     * @var array Subject.
     */
    public $SubjectDetails;

    /**
     * @var array Permission details.
     */
    public $PermissionDetails;

    /**
     * @param PrivilegeResource $Resource Resource.
     * @param array $SubjectDetails Subject.
     * @param array $PermissionDetails Permission details.
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new PrivilegeResource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("SubjectDetails",$param) and $param["SubjectDetails"] !== null) {
            $this->SubjectDetails = [];
            foreach ($param["SubjectDetails"] as $key => $value){
                $obj = new SubjectInfo();
                $obj->deserialize($value);
                array_push($this->SubjectDetails, $obj);
            }
        }

        if (array_key_exists("PermissionDetails",$param) and $param["PermissionDetails"] !== null) {
            $this->PermissionDetails = [];
            foreach ($param["PermissionDetails"] as $key => $value){
                $obj = new PrivilegeInfo();
                $obj->deserialize($value);
                array_push($this->PermissionDetails, $obj);
            }
        }
    }
}
