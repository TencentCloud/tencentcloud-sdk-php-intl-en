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
 * DescribeUserProjectList request structure.
 *
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method boolean getAllPage() Obtain None.
 * @method void setAllPage(boolean $AllPage) Set None.
 * @method integer getPageNo() Obtain None.
 * @method void setPageNo(integer $PageNo) Set None.
 * @method integer getPageSize() Obtain None.
 * @method void setPageSize(integer $PageSize) Set None.
 * @method boolean getIsFilterPerAuthUser() Obtain Whether to filter out enterprise administrators.
 * @method void setIsFilterPerAuthUser(boolean $IsFilterPerAuthUser) Set Whether to filter out enterprise administrators.
 * @method boolean getIsFilterCurrentUser() Obtain Whether to filter out the current user.
 * @method void setIsFilterCurrentUser(boolean $IsFilterCurrentUser) Set Whether to filter out the current user.
 * @method string getKeyword() Obtain Keyword.
 * @method void setKeyword(string $Keyword) Set Keyword.
 */
class DescribeUserProjectListRequest extends AbstractModel
{
    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var boolean None.
     */
    public $AllPage;

    /**
     * @var integer None.
     */
    public $PageNo;

    /**
     * @var integer None.
     */
    public $PageSize;

    /**
     * @var boolean Whether to filter out enterprise administrators.
     */
    public $IsFilterPerAuthUser;

    /**
     * @var boolean Whether to filter out the current user.
     */
    public $IsFilterCurrentUser;

    /**
     * @var string Keyword.
     */
    public $Keyword;

    /**
     * @param integer $ProjectId Project ID.
     * @param boolean $AllPage None.
     * @param integer $PageNo None.
     * @param integer $PageSize None.
     * @param boolean $IsFilterPerAuthUser Whether to filter out enterprise administrators.
     * @param boolean $IsFilterCurrentUser Whether to filter out the current user.
     * @param string $Keyword Keyword.
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

        if (array_key_exists("AllPage",$param) and $param["AllPage"] !== null) {
            $this->AllPage = $param["AllPage"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("IsFilterPerAuthUser",$param) and $param["IsFilterPerAuthUser"] !== null) {
            $this->IsFilterPerAuthUser = $param["IsFilterPerAuthUser"];
        }

        if (array_key_exists("IsFilterCurrentUser",$param) and $param["IsFilterCurrentUser"] !== null) {
            $this->IsFilterCurrentUser = $param["IsFilterCurrentUser"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
