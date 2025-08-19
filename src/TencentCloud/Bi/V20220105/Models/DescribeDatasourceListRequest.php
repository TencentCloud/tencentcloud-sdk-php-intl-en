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
 * DescribeDatasourceList request structure.
 *
 * @method integer getProjectId() Obtain None.
 * @method void setProjectId(integer $ProjectId) Set None.
 * @method boolean getAllPage() Obtain Returns all pages and defaults to false.
 * @method void setAllPage(boolean $AllPage) Set Returns all pages and defaults to false.
 * @method string getDbName() Obtain Database name search.
 * @method void setDbName(string $DbName) Set Database name search.
 * @method integer getPageNo() Obtain None.
 * @method void setPageNo(integer $PageNo) Set None.
 * @method integer getPageSize() Obtain None.
 * @method void setPageSize(integer $PageSize) Set None.
 * @method string getKeyword() Obtain Search keywords.
 * @method void setKeyword(string $Keyword) Set Search keywords.
 * @method integer getPermissionType() Obtain Permission filter (0: all permissions, 1: access permission, 2: edit permission).
 * @method void setPermissionType(integer $PermissionType) Set Permission filter (0: all permissions, 1: access permission, 2: edit permission).
 */
class DescribeDatasourceListRequest extends AbstractModel
{
    /**
     * @var integer None.
     */
    public $ProjectId;

    /**
     * @var boolean Returns all pages and defaults to false.
     */
    public $AllPage;

    /**
     * @var string Database name search.
     */
    public $DbName;

    /**
     * @var integer None.
     */
    public $PageNo;

    /**
     * @var integer None.
     */
    public $PageSize;

    /**
     * @var string Search keywords.
     */
    public $Keyword;

    /**
     * @var integer Permission filter (0: all permissions, 1: access permission, 2: edit permission).
     */
    public $PermissionType;

    /**
     * @param integer $ProjectId None.
     * @param boolean $AllPage Returns all pages and defaults to false.
     * @param string $DbName Database name search.
     * @param integer $PageNo None.
     * @param integer $PageSize None.
     * @param string $Keyword Search keywords.
     * @param integer $PermissionType Permission filter (0: all permissions, 1: access permission, 2: edit permission).
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

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("PermissionType",$param) and $param["PermissionType"] !== null) {
            $this->PermissionType = $param["PermissionType"];
        }
    }
}
