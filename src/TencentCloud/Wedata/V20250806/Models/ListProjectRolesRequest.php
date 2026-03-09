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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListProjectRoles request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getRoleDisplayName() Obtain Fuzzy query for the chinese display name of a role. can only pass one value.
 * @method void setRoleDisplayName(string $RoleDisplayName) Set Fuzzy query for the chinese display name of a role. can only pass one value.
 * @method integer getPageNumber() Obtain Page number
 * @method void setPageNumber(integer $PageNumber) Set Page number
 * @method integer getPageSize() Obtain Paging information.
 * @method void setPageSize(integer $PageSize) Set Paging information.
 */
class ListProjectRolesRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Fuzzy query for the chinese display name of a role. can only pass one value.
     */
    public $RoleDisplayName;

    /**
     * @var integer Page number
     */
    public $PageNumber;

    /**
     * @var integer Paging information.
     */
    public $PageSize;

    /**
     * @param string $ProjectId Project ID.
     * @param string $RoleDisplayName Fuzzy query for the chinese display name of a role. can only pass one value.
     * @param integer $PageNumber Page number
     * @param integer $PageSize Paging information.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RoleDisplayName",$param) and $param["RoleDisplayName"] !== null) {
            $this->RoleDisplayName = $param["RoleDisplayName"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
