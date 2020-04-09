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
namespace TencentCloud\Organization\V20181225\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on an organizational unit.
 *
 * @method integer getNodeId() Obtain Organizational unit ID
 * @method void setNodeId(integer $NodeId) Set Organizational unit ID
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method integer getParentNodeId() Obtain Parent organizational unit ID
 * @method void setParentNodeId(integer $ParentNodeId) Set Parent organizational unit ID
 * @method integer getMemberCount() Obtain Number of members
 * @method void setMemberCount(integer $MemberCount) Set Number of members
 */
class OrgNode extends AbstractModel
{
    /**
     * @var integer Organizational unit ID
     */
    public $NodeId;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var integer Parent organizational unit ID
     */
    public $ParentNodeId;

    /**
     * @var integer Number of members
     */
    public $MemberCount;

    /**
     * @param integer $NodeId Organizational unit ID
     * @param string $Name Name
     * @param integer $ParentNodeId Parent organizational unit ID
     * @param integer $MemberCount Number of members
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ParentNodeId",$param) and $param["ParentNodeId"] !== null) {
            $this->ParentNodeId = $param["ParentNodeId"];
        }

        if (array_key_exists("MemberCount",$param) and $param["MemberCount"] !== null) {
            $this->MemberCount = $param["MemberCount"];
        }
    }
}
