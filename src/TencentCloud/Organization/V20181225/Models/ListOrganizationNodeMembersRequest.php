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
 * ListOrganizationNodeMembers request structure.
 *
 * @method integer getNodeId() Obtain Organizational unit ID
 * @method void setNodeId(integer $NodeId) Set Organizational unit ID
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain Limit
 * @method void setLimit(integer $Limit) Set Limit
 */
class ListOrganizationNodeMembersRequest extends AbstractModel
{
    /**
     * @var integer Organizational unit ID
     */
    public $NodeId;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer Limit
     */
    public $Limit;

    /**
     * @param integer $NodeId Organizational unit ID
     * @param integer $Offset Offset
     * @param integer $Limit Limit
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
