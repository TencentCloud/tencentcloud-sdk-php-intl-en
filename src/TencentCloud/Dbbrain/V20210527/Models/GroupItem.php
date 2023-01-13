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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes the group information.
 *
 * @method integer getId() Obtain Group ID.
 * @method void setId(integer $Id) Set Group ID.
 * @method string getName() Obtain Group name.
 * @method void setName(string $Name) Set Group name.
 * @method integer getMemberCount() Obtain Number of group members.
 * @method void setMemberCount(integer $MemberCount) Set Number of group members.
 */
class GroupItem extends AbstractModel
{
    /**
     * @var integer Group ID.
     */
    public $Id;

    /**
     * @var string Group name.
     */
    public $Name;

    /**
     * @var integer Number of group members.
     */
    public $MemberCount;

    /**
     * @param integer $Id Group ID.
     * @param string $Name Group name.
     * @param integer $MemberCount Number of group members.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MemberCount",$param) and $param["MemberCount"] !== null) {
            $this->MemberCount = $param["MemberCount"];
        }
    }
}
