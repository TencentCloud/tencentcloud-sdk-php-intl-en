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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserRoleList request structure.
 *
 * @method integer getPageNo() Obtain Page number.
 * @method void setPageNo(integer $PageNo) Set Page number.
 * @method integer getPageSize() Obtain Number of pages.
 * @method void setPageSize(integer $PageSize) Set Number of pages.
 * @method boolean getAllPage() Obtain All page numbers.
 * @method void setAllPage(boolean $AllPage) Set All page numbers.
 * @method string getUserType() Obtain 0: enterprise user. 1: visitor. If left blank, it indicates all users.
 * @method void setUserType(string $UserType) Set 0: enterprise user. 1: visitor. If left blank, it indicates all users.
 * @method string getKeyword() Obtain Keyword for fuzzy search.
 * @method void setKeyword(string $Keyword) Set Keyword for fuzzy search.
 * @method string getProjectId() Obtain Project ID.

 * @method void setProjectId(string $ProjectId) Set Project ID.

 * @method boolean getIsOnlyBindAppUser() Obtain Whether to only obtain users bound to the WeCom app.
 * @method void setIsOnlyBindAppUser(boolean $IsOnlyBindAppUser) Set Whether to only obtain users bound to the WeCom app.
 */
class DescribeUserRoleListRequest extends AbstractModel
{
    /**
     * @var integer Page number.
     */
    public $PageNo;

    /**
     * @var integer Number of pages.
     */
    public $PageSize;

    /**
     * @var boolean All page numbers.
     */
    public $AllPage;

    /**
     * @var string 0: enterprise user. 1: visitor. If left blank, it indicates all users.
     */
    public $UserType;

    /**
     * @var string Keyword for fuzzy search.
     */
    public $Keyword;

    /**
     * @var string Project ID.

     */
    public $ProjectId;

    /**
     * @var boolean Whether to only obtain users bound to the WeCom app.
     */
    public $IsOnlyBindAppUser;

    /**
     * @param integer $PageNo Page number.
     * @param integer $PageSize Number of pages.
     * @param boolean $AllPage All page numbers.
     * @param string $UserType 0: enterprise user. 1: visitor. If left blank, it indicates all users.
     * @param string $Keyword Keyword for fuzzy search.
     * @param string $ProjectId Project ID.

     * @param boolean $IsOnlyBindAppUser Whether to only obtain users bound to the WeCom app.
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
        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("AllPage",$param) and $param["AllPage"] !== null) {
            $this->AllPage = $param["AllPage"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("IsOnlyBindAppUser",$param) and $param["IsOnlyBindAppUser"] !== null) {
            $this->IsOnlyBindAppUser = $param["IsOnlyBindAppUser"];
        }
    }
}
