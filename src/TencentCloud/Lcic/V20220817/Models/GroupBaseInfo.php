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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of the groups to create.
Used by actions: BatchCreateGroupWithMembers.
 *
 * @method string getGroupName() Obtain The group names. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupName(string $GroupName) Set The group names. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTeacherId() Obtain The user ID of the teacher. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeacherId(string $TeacherId) Set The user ID of the teacher. Note: This field may return null, indicating that no valid values can be obtained.
 */
class GroupBaseInfo extends AbstractModel
{
    /**
     * @var string The group names. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupName;

    /**
     * @var string The user ID of the teacher. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeacherId;

    /**
     * @param string $GroupName The group names. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TeacherId The user ID of the teacher. Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("TeacherId",$param) and $param["TeacherId"] !== null) {
            $this->TeacherId = $param["TeacherId"];
        }
    }
}
