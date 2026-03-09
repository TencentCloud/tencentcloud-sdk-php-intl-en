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
 * ListProjectMembers request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getUserName() Obtain Filter by member name with fuzzy query support.
 * @method void setUserName(string $UserName) Set Filter by member name with fuzzy query support.
 * @method string getUserUin() Obtain Filter by member id. supports fuzzy query.
 * @method void setUserUin(string $UserUin) Set Filter by member id. supports fuzzy query.
 * @method integer getPageSize() Obtain Page size, default first page.
 * @method void setPageSize(integer $PageSize) Set Page size, default first page.
 * @method integer getPageNumber() Obtain Number of items per page. default value is `10`.
 * @method void setPageNumber(integer $PageNumber) Set Number of items per page. default value is `10`.
 */
class ListProjectMembersRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Filter by member name with fuzzy query support.
     */
    public $UserName;

    /**
     * @var string Filter by member id. supports fuzzy query.
     */
    public $UserUin;

    /**
     * @var integer Page size, default first page.
     */
    public $PageSize;

    /**
     * @var integer Number of items per page. default value is `10`.
     */
    public $PageNumber;

    /**
     * @param string $ProjectId Project ID.
     * @param string $UserName Filter by member name with fuzzy query support.
     * @param string $UserUin Filter by member id. supports fuzzy query.
     * @param integer $PageSize Page size, default first page.
     * @param integer $PageNumber Number of items per page. default value is `10`.
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}
