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
 * Returned group information
 *
 * @method string getGroupName() Obtain Group name
 * @method void setGroupName(string $GroupName) Set Group name
 * @method string getGroupId() Obtain Group ID
 * @method void setGroupId(string $GroupId) Set Group ID
 * @method array getGroupExDescriptions() Obtain Custom group description field
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setGroupExDescriptions(array $GroupExDescriptions) Set Custom group description field
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTag() Obtain Group remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTag(string $Tag) Set Group remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFaceModelVersion() Obtain Algorithm model version used for face recognition.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFaceModelVersion(string $FaceModelVersion) Set Algorithm model version used for face recognition.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCreationTimestamp() Obtain Group creation time and date (`CreationTimestamp`), whose value is the number of milliseconds between the UNIX epoch time and the group creation time. 
The UNIX epoch time is 00:00:00, Thursday, January 1, 1970, Coordinated Universal Time (UTC). For more information, please see the UNIX time document.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreationTimestamp(integer $CreationTimestamp) Set Group creation time and date (`CreationTimestamp`), whose value is the number of milliseconds between the UNIX epoch time and the group creation time. 
The UNIX epoch time is 00:00:00, Thursday, January 1, 1970, Coordinated Universal Time (UTC). For more information, please see the UNIX time document.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var string Group name
     */
    public $GroupName;

    /**
     * @var string Group ID
     */
    public $GroupId;

    /**
     * @var array Custom group description field
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $GroupExDescriptions;

    /**
     * @var string Group remarks
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Tag;

    /**
     * @var string Algorithm model version used for face recognition.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FaceModelVersion;

    /**
     * @var integer Group creation time and date (`CreationTimestamp`), whose value is the number of milliseconds between the UNIX epoch time and the group creation time. 
The UNIX epoch time is 00:00:00, Thursday, January 1, 1970, Coordinated Universal Time (UTC). For more information, please see the UNIX time document.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreationTimestamp;

    /**
     * @param string $GroupName Group name
     * @param string $GroupId Group ID
     * @param array $GroupExDescriptions Custom group description field
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Tag Group remarks
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FaceModelVersion Algorithm model version used for face recognition.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CreationTimestamp Group creation time and date (`CreationTimestamp`), whose value is the number of milliseconds between the UNIX epoch time and the group creation time. 
The UNIX epoch time is 00:00:00, Thursday, January 1, 1970, Coordinated Universal Time (UTC). For more information, please see the UNIX time document.
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

        if (array_key_exists("CreationTimestamp",$param) and $param["CreationTimestamp"] !== null) {
            $this->CreationTimestamp = $param["CreationTimestamp"];
        }
    }
}
