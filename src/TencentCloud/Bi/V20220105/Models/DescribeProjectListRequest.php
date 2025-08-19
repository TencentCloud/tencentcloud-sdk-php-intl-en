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
 * DescribeProjectList request structure.
 *
 * @method integer getPageSize() Obtain Page capacity. The initial version defaults to 20 and may change dynamically based on screen width in the future.
 * @method void setPageSize(integer $PageSize) Set Page capacity. The initial version defaults to 20 and may change dynamically based on screen width in the future.
 * @method integer getPageNo() Obtain Page marker.
 * @method void setPageNo(integer $PageNo) Set Page marker.
 * @method string getKeyword() Obtain Fuzzy search field.
 * @method void setKeyword(string $Keyword) Set Fuzzy search field.
 * @method boolean getAllPage() Obtain Whether to display all. If true, ignore pagination.
 * @method void setAllPage(boolean $AllPage) Set Whether to display all. If true, ignore pagination.
 * @method string getModuleCollection() Obtain Role information.
 * @method void setModuleCollection(string $ModuleCollection) Set Role information.
 * @method array getModuleIdList() Obtain moduleId set.
 * @method void setModuleIdList(array $ModuleIdList) Set moduleId set.
 */
class DescribeProjectListRequest extends AbstractModel
{
    /**
     * @var integer Page capacity. The initial version defaults to 20 and may change dynamically based on screen width in the future.
     */
    public $PageSize;

    /**
     * @var integer Page marker.
     */
    public $PageNo;

    /**
     * @var string Fuzzy search field.
     */
    public $Keyword;

    /**
     * @var boolean Whether to display all. If true, ignore pagination.
     */
    public $AllPage;

    /**
     * @var string Role information.
     */
    public $ModuleCollection;

    /**
     * @var array moduleId set.
     */
    public $ModuleIdList;

    /**
     * @param integer $PageSize Page capacity. The initial version defaults to 20 and may change dynamically based on screen width in the future.
     * @param integer $PageNo Page marker.
     * @param string $Keyword Fuzzy search field.
     * @param boolean $AllPage Whether to display all. If true, ignore pagination.
     * @param string $ModuleCollection Role information.
     * @param array $ModuleIdList moduleId set.
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
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("AllPage",$param) and $param["AllPage"] !== null) {
            $this->AllPage = $param["AllPage"];
        }

        if (array_key_exists("ModuleCollection",$param) and $param["ModuleCollection"] !== null) {
            $this->ModuleCollection = $param["ModuleCollection"];
        }

        if (array_key_exists("ModuleIdList",$param) and $param["ModuleIdList"] !== null) {
            $this->ModuleIdList = $param["ModuleIdList"];
        }
    }
}
