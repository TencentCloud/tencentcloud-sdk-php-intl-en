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
 * The information of the groups queried.
Used by actions: DescribeGroupList.
 *
 * @method string getGroupId() Obtain 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupId(string $GroupId) Set 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGroupName() Obtain 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupName(string $GroupName) Set 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTeacherId() Obtain 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeacherId(string $TeacherId) Set 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getGroupType() Obtain 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupType(integer $GroupType) Set 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubGroupIds() Obtain 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubGroupIds(string $SubGroupIds) Set 
Note: This field may return null, indicating that no valid values can be obtained.
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var string 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupId;

    /**
     * @var string 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupName;

    /**
     * @var string 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeacherId;

    /**
     * @var integer 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupType;

    /**
     * @var string 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubGroupIds;

    /**
     * @param string $GroupId 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GroupName 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TeacherId 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $GroupType 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubGroupIds 
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("TeacherId",$param) and $param["TeacherId"] !== null) {
            $this->TeacherId = $param["TeacherId"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("SubGroupIds",$param) and $param["SubGroupIds"] !== null) {
            $this->SubGroupIds = $param["SubGroupIds"];
        }
    }
}
