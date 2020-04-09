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
 * MoveOrganizationMembersToNode request structure.
 *
 * @method integer getNodeId() Obtain Organizational unit ID
 * @method void setNodeId(integer $NodeId) Set Organizational unit ID
 * @method array getUins() Obtain Member UIN list
 * @method void setUins(array $Uins) Set Member UIN list
 */
class MoveOrganizationMembersToNodeRequest extends AbstractModel
{
    /**
     * @var integer Organizational unit ID
     */
    public $NodeId;

    /**
     * @var array Member UIN list
     */
    public $Uins;

    /**
     * @param integer $NodeId Organizational unit ID
     * @param array $Uins Member UIN list
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

        if (array_key_exists("Uins",$param) and $param["Uins"] !== null) {
            $this->Uins = $param["Uins"];
        }
    }
}
