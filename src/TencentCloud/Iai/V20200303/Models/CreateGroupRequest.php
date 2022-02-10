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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGroup request structure.
 *
 * @method string getGroupName() Obtain Group name, which is modifiable, must be unique, and can contain 1 to 60 characters.
 * @method void setGroupName(string $GroupName) Set Group name, which is modifiable, must be unique, and can contain 1 to 60 characters.
 * @method string getGroupId() Obtain Group ID, which is unmodifiable, must be unique, and can contain letters, digits, and special symbols (-%@#&_) of up to 64 B.
 * @method void setGroupId(string $GroupId) Set Group ID, which is unmodifiable, must be unique, and can contain letters, digits, and special symbols (-%@#&_) of up to 64 B.
 * @method array getGroupExDescriptions() Obtain Custom group description field that describes the person attributes in the group, which will be applied to all persons in the group. 
Up to 5 ones can be created. 
Each custom description field can contain 1 to 30 characters. 
The custom description field must be unique in the group. 
Example: if you set the "custom description field" of a group to ["student ID","employee ID","mobile number"], 
then all the persons in the group will have description fields named "student ID", "employee ID", and "mobile number". 
You can enter content in the corresponding field to register a person's student ID, employee ID, and mobile number.
 * @method void setGroupExDescriptions(array $GroupExDescriptions) Set Custom group description field that describes the person attributes in the group, which will be applied to all persons in the group. 
Up to 5 ones can be created. 
Each custom description field can contain 1 to 30 characters. 
The custom description field must be unique in the group. 
Example: if you set the "custom description field" of a group to ["student ID","employee ID","mobile number"], 
then all the persons in the group will have description fields named "student ID", "employee ID", and "mobile number". 
You can enter content in the corresponding field to register a person's student ID, employee ID, and mobile number.
 * @method string getTag() Obtain Group remarks, which can contain 0 to 40 characters.
 * @method void setTag(string $Tag) Set Group remarks, which can contain 0 to 40 characters.
 * @method string getFaceModelVersion() Obtain Algorithm model version used by the Face Recognition service.

Currently, `2.0` and `3.0` are supported.

This parameter is `3.0` by default starting from April 2, 2020. If it is left empty for accounts that used this API, `2.0` will be used by default.

The parameter can be set only to `3.0` for accounts that purchase the service after November 26, 2020.

Different algorithm model versions correspond to different face recognition algorithms. The 3.0 version has a better overall effect than the legacy version and is recommended.
 * @method void setFaceModelVersion(string $FaceModelVersion) Set Algorithm model version used by the Face Recognition service.

Currently, `2.0` and `3.0` are supported.

This parameter is `3.0` by default starting from April 2, 2020. If it is left empty for accounts that used this API, `2.0` will be used by default.

The parameter can be set only to `3.0` for accounts that purchase the service after November 26, 2020.

Different algorithm model versions correspond to different face recognition algorithms. The 3.0 version has a better overall effect than the legacy version and is recommended.
 */
class CreateGroupRequest extends AbstractModel
{
    /**
     * @var string Group name, which is modifiable, must be unique, and can contain 1 to 60 characters.
     */
    public $GroupName;

    /**
     * @var string Group ID, which is unmodifiable, must be unique, and can contain letters, digits, and special symbols (-%@#&_) of up to 64 B.
     */
    public $GroupId;

    /**
     * @var array Custom group description field that describes the person attributes in the group, which will be applied to all persons in the group. 
Up to 5 ones can be created. 
Each custom description field can contain 1 to 30 characters. 
The custom description field must be unique in the group. 
Example: if you set the "custom description field" of a group to ["student ID","employee ID","mobile number"], 
then all the persons in the group will have description fields named "student ID", "employee ID", and "mobile number". 
You can enter content in the corresponding field to register a person's student ID, employee ID, and mobile number.
     */
    public $GroupExDescriptions;

    /**
     * @var string Group remarks, which can contain 0 to 40 characters.
     */
    public $Tag;

    /**
     * @var string Algorithm model version used by the Face Recognition service.

Currently, `2.0` and `3.0` are supported.

This parameter is `3.0` by default starting from April 2, 2020. If it is left empty for accounts that used this API, `2.0` will be used by default.

The parameter can be set only to `3.0` for accounts that purchase the service after November 26, 2020.

Different algorithm model versions correspond to different face recognition algorithms. The 3.0 version has a better overall effect than the legacy version and is recommended.
     */
    public $FaceModelVersion;

    /**
     * @param string $GroupName Group name, which is modifiable, must be unique, and can contain 1 to 60 characters.
     * @param string $GroupId Group ID, which is unmodifiable, must be unique, and can contain letters, digits, and special symbols (-%@#&_) of up to 64 B.
     * @param array $GroupExDescriptions Custom group description field that describes the person attributes in the group, which will be applied to all persons in the group. 
Up to 5 ones can be created. 
Each custom description field can contain 1 to 30 characters. 
The custom description field must be unique in the group. 
Example: if you set the "custom description field" of a group to ["student ID","employee ID","mobile number"], 
then all the persons in the group will have description fields named "student ID", "employee ID", and "mobile number". 
You can enter content in the corresponding field to register a person's student ID, employee ID, and mobile number.
     * @param string $Tag Group remarks, which can contain 0 to 40 characters.
     * @param string $FaceModelVersion Algorithm model version used by the Face Recognition service.

Currently, `2.0` and `3.0` are supported.

This parameter is `3.0` by default starting from April 2, 2020. If it is left empty for accounts that used this API, `2.0` will be used by default.

The parameter can be set only to `3.0` for accounts that purchase the service after November 26, 2020.

Different algorithm model versions correspond to different face recognition algorithms. The 3.0 version has a better overall effect than the legacy version and is recommended.
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupExDescriptions",$param) and $param["GroupExDescriptions"] !== null) {
            $this->GroupExDescriptions = $param["GroupExDescriptions"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("FaceModelVersion",$param) and $param["FaceModelVersion"] !== null) {
            $this->FaceModelVersion = $param["FaceModelVersion"];
        }
    }
}
