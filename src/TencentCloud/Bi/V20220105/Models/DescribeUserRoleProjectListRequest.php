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
 * DescribeUserRoleProjectList request structure.
 *
 * @method integer getPageNo() Obtain Page number.
 * @method void setPageNo(integer $PageNo) Set Page number.
 * @method integer getPageSize() Obtain Number of pages.
 * @method void setPageSize(integer $PageSize) Set Number of pages.
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method boolean getIsOnlyBindAppUser() Obtain Whether to only obtain users bound to the WeCom app.
 * @method void setIsOnlyBindAppUser(boolean $IsOnlyBindAppUser) Set Whether to only obtain users bound to the WeCom app.
 * @method boolean getAllPage() Obtain Whether to obtain all the data.
 * @method void setAllPage(boolean $AllPage) Set Whether to obtain all the data.
 * @method string getRoleCode() Obtain Role code.
 * @method void setRoleCode(string $RoleCode) Set Role code.
 * @method array getUserIdList() Obtain User ID list.
 * @method void setUserIdList(array $UserIdList) Set User ID list.
 * @method string getKeyword() Obtain Search keywords.
 * @method void setKeyword(string $Keyword) Set Search keywords.
 */
class DescribeUserRoleProjectListRequest extends AbstractModel
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
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var boolean Whether to only obtain users bound to the WeCom app.
     */
    public $IsOnlyBindAppUser;

    /**
     * @var boolean Whether to obtain all the data.
     */
    public $AllPage;

    /**
     * @var string Role code.
     */
    public $RoleCode;

    /**
     * @var array User ID list.
     */
    public $UserIdList;

    /**
     * @var string Search keywords.
     */
    public $Keyword;

    /**
     * @param integer $PageNo Page number.
     * @param integer $PageSize Number of pages.
     * @param integer $ProjectId Project ID.
     * @param boolean $IsOnlyBindAppUser Whether to only obtain users bound to the WeCom app.
     * @param boolean $AllPage Whether to obtain all the data.
     * @param string $RoleCode Role code.
     * @param array $UserIdList User ID list.
     * @param string $Keyword Search keywords.
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("IsOnlyBindAppUser",$param) and $param["IsOnlyBindAppUser"] !== null) {
            $this->IsOnlyBindAppUser = $param["IsOnlyBindAppUser"];
        }

        if (array_key_exists("AllPage",$param) and $param["AllPage"] !== null) {
            $this->AllPage = $param["AllPage"];
        }

        if (array_key_exists("RoleCode",$param) and $param["RoleCode"] !== null) {
            $this->RoleCode = $param["RoleCode"];
        }

        if (array_key_exists("UserIdList",$param) and $param["UserIdList"] !== null) {
            $this->UserIdList = $param["UserIdList"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
