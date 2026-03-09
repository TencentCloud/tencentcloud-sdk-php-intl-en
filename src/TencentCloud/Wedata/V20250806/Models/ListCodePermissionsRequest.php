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
 * ListCodePermissions request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method integer getPageNumber() Obtain Page number, which is 1 by default.
 * @method void setPageNumber(integer $PageNumber) Set Page number, which is 1 by default.
 * @method integer getPageSize() Obtain Number of returned results. the default is 20, and the maximum value is 100. requirements: 500, 1000 or more.
 * @method void setPageSize(integer $PageSize) Set Number of returned results. the default is 20, and the maximum value is 100. requirements: 500, 1000 or more.
 * @method ExploreFileResource getResource() Obtain Authorized resources.
 * @method void setResource(ExploreFileResource $Resource) Set Authorized resources.
 * @method array getUsers() Obtain User filtering criteria.
 * @method void setUsers(array $Users) Set User filtering criteria.
 */
class ListCodePermissionsRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var integer Page number, which is 1 by default.
     */
    public $PageNumber;

    /**
     * @var integer Number of returned results. the default is 20, and the maximum value is 100. requirements: 500, 1000 or more.
     */
    public $PageSize;

    /**
     * @var ExploreFileResource Authorized resources.
     */
    public $Resource;

    /**
     * @var array User filtering criteria.
     */
    public $Users;

    /**
     * @param string $ProjectId Project ID.
     * @param integer $PageNumber Page number, which is 1 by default.
     * @param integer $PageSize Number of returned results. the default is 20, and the maximum value is 100. requirements: 500, 1000 or more.
     * @param ExploreFileResource $Resource Authorized resources.
     * @param array $Users User filtering criteria.
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new ExploreFileResource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }
    }
}
