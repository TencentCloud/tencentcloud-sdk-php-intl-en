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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyGroup request structure.
 *
 * @method string getGroupId() Obtain Group ID, which is the `GroupId` in the `CreateGroup` API.
 * @method void setGroupId(string $GroupId) Set Group ID, which is the `GroupId` in the `CreateGroup` API.
 * @method string getGroupName() Obtain Group name
 * @method void setGroupName(string $GroupName) Set Group name
 * @method array getGroupExDescriptionInfos() Obtain Custom description field of the group to be modified, which is a `key-value` pair.
 * @method void setGroupExDescriptionInfos(array $GroupExDescriptionInfos) Set Custom description field of the group to be modified, which is a `key-value` pair.
 * @method string getTag() Obtain Group remarks
 * @method void setTag(string $Tag) Set Group remarks
 */
class ModifyGroupRequest extends AbstractModel
{
    /**
     * @var string Group ID, which is the `GroupId` in the `CreateGroup` API.
     */
    public $GroupId;

    /**
     * @var string Group name
     */
    public $GroupName;

    /**
     * @var array Custom description field of the group to be modified, which is a `key-value` pair.
     */
    public $GroupExDescriptionInfos;

    /**
     * @var string Group remarks
     */
    public $Tag;

    /**
     * @param string $GroupId Group ID, which is the `GroupId` in the `CreateGroup` API.
     * @param string $GroupName Group name
     * @param array $GroupExDescriptionInfos Custom description field of the group to be modified, which is a `key-value` pair.
     * @param string $Tag Group remarks
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

        if (array_key_exists("GroupExDescriptionInfos",$param) and $param["GroupExDescriptionInfos"] !== null) {
            $this->GroupExDescriptionInfos = [];
            foreach ($param["GroupExDescriptionInfos"] as $key => $value){
                $obj = new GroupExDescriptionInfo();
                $obj->deserialize($value);
                array_push($this->GroupExDescriptionInfos, $obj);
            }
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
