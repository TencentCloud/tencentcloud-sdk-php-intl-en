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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The group information.
 *
 * @method integer getGroupId() Obtain The group ID.
 * @method void setGroupId(integer $GroupId) Set The group ID.
 * @method integer getNodeCount() Obtain The number of nodes.
 * @method void setNodeCount(integer $NodeCount) Set The number of nodes.
 * @method integer getNodeCountOfAgency() Obtain The number of nodes of the organization.
 * @method void setNodeCountOfAgency(integer $NodeCountOfAgency) Set The number of nodes of the organization.
 * @method string getDescription() Obtain The description of the group.
 * @method void setDescription(string $Description) Set The description of the group.
 * @method integer getRoleType() Obtain Whether you are the owner of the consortium or not.
 * @method void setRoleType(integer $RoleType) Set Whether you are the owner of the consortium or not.
 * @method string getChainId() Obtain The chain ID.
 * @method void setChainId(string $ChainId) Set The chain ID.
 */
class Group extends AbstractModel
{
    /**
     * @var integer The group ID.
     */
    public $GroupId;

    /**
     * @var integer The number of nodes.
     */
    public $NodeCount;

    /**
     * @var integer The number of nodes of the organization.
     */
    public $NodeCountOfAgency;

    /**
     * @var string The description of the group.
     */
    public $Description;

    /**
     * @var integer Whether you are the owner of the consortium or not.
     */
    public $RoleType;

    /**
     * @var string The chain ID.
     */
    public $ChainId;

    /**
     * @param integer $GroupId The group ID.
     * @param integer $NodeCount The number of nodes.
     * @param integer $NodeCountOfAgency The number of nodes of the organization.
     * @param string $Description The description of the group.
     * @param integer $RoleType Whether you are the owner of the consortium or not.
     * @param string $ChainId The chain ID.
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

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("NodeCountOfAgency",$param) and $param["NodeCountOfAgency"] !== null) {
            $this->NodeCountOfAgency = $param["NodeCountOfAgency"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("ChainId",$param) and $param["ChainId"] !== null) {
            $this->ChainId = $param["ChainId"];
        }
    }
}
