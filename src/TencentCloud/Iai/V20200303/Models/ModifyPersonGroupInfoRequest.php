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
 * ModifyPersonGroupInfo request structure.
 *
 * @method string getGroupId() Obtain Group ID, which is the `GroupId` in the `CreateGroup` API.
 * @method void setGroupId(string $GroupId) Set Group ID, which is the `GroupId` in the `CreateGroup` API.
 * @method string getPersonId() Obtain Person ID, which is the `PersonId` in the `CreatePerson` API.
 * @method void setPersonId(string $PersonId) Set Person ID, which is the `PersonId` in the `CreatePerson` API.
 * @method array getPersonExDescriptionInfos() Obtain Custom description field of the person to be modified, which is a `key-value` pair.
 * @method void setPersonExDescriptionInfos(array $PersonExDescriptionInfos) Set Custom description field of the person to be modified, which is a `key-value` pair.
 */
class ModifyPersonGroupInfoRequest extends AbstractModel
{
    /**
     * @var string Group ID, which is the `GroupId` in the `CreateGroup` API.
     */
    public $GroupId;

    /**
     * @var string Person ID, which is the `PersonId` in the `CreatePerson` API.
     */
    public $PersonId;

    /**
     * @var array Custom description field of the person to be modified, which is a `key-value` pair.
     */
    public $PersonExDescriptionInfos;

    /**
     * @param string $GroupId Group ID, which is the `GroupId` in the `CreateGroup` API.
     * @param string $PersonId Person ID, which is the `PersonId` in the `CreatePerson` API.
     * @param array $PersonExDescriptionInfos Custom description field of the person to be modified, which is a `key-value` pair.
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

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("PersonExDescriptionInfos",$param) and $param["PersonExDescriptionInfos"] !== null) {
            $this->PersonExDescriptionInfos = [];
            foreach ($param["PersonExDescriptionInfos"] as $key => $value){
                $obj = new PersonExDescriptionInfo();
                $obj->deserialize($value);
                array_push($this->PersonExDescriptionInfos, $obj);
            }
        }
    }
}
