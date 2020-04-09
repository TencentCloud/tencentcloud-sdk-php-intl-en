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
 * DeleteOrganizationMemberFromNode request structure.
 *
 * @method integer getMemberUin() Obtain UIN of the member to be deleted
 * @method void setMemberUin(integer $MemberUin) Set UIN of the member to be deleted
 * @method integer getNodeId() Obtain Organizational unit ID
 * @method void setNodeId(integer $NodeId) Set Organizational unit ID
 */
class DeleteOrganizationMemberFromNodeRequest extends AbstractModel
{
    /**
     * @var integer UIN of the member to be deleted
     */
    public $MemberUin;

    /**
     * @var integer Organizational unit ID
     */
    public $NodeId;

    /**
     * @param integer $MemberUin UIN of the member to be deleted
     * @param integer $NodeId Organizational unit ID
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
        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }
    }
}
