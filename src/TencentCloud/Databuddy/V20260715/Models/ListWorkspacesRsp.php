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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * to the query for the workspace list
 *
 * @method array getItems() Obtain <p>Workspace list.</p>
 * @method void setItems(array $Items) Set <p>Workspace list.</p>
 * @method integer getPageNumber() Obtain <p>Current page</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Current page</p>
 * @method integer getPageSize() Obtain <p>Page Size</p>
 * @method void setPageSize(integer $PageSize) Set <p>Page Size</p>
 * @method integer getTotalCount() Obtain <p>Total number of records</p>
 * @method void setTotalCount(integer $TotalCount) Set <p>Total number of records</p>
 * @method integer getTotalPageNumber() Obtain <p>Total number of pages</p>
 * @method void setTotalPageNumber(integer $TotalPageNumber) Set <p>Total number of pages</p>
 * @method boolean getIsConsoleAdmin() Obtain <p>Console administrator or not</p>
 * @method void setIsConsoleAdmin(boolean $IsConsoleAdmin) Set <p>Console administrator or not</p>
 */
class ListWorkspacesRsp extends AbstractModel
{
    /**
     * @var array <p>Workspace list.</p>
     */
    public $Items;

    /**
     * @var integer <p>Current page</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Page Size</p>
     */
    public $PageSize;

    /**
     * @var integer <p>Total number of records</p>
     */
    public $TotalCount;

    /**
     * @var integer <p>Total number of pages</p>
     */
    public $TotalPageNumber;

    /**
     * @var boolean <p>Console administrator or not</p>
     */
    public $IsConsoleAdmin;

    /**
     * @param array $Items <p>Workspace list.</p>
     * @param integer $PageNumber <p>Current page</p>
     * @param integer $PageSize <p>Page Size</p>
     * @param integer $TotalCount <p>Total number of records</p>
     * @param integer $TotalPageNumber <p>Total number of pages</p>
     * @param boolean $IsConsoleAdmin <p>Console administrator or not</p>
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new WorkspaceInfo();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalPageNumber",$param) and $param["TotalPageNumber"] !== null) {
            $this->TotalPageNumber = $param["TotalPageNumber"];
        }

        if (array_key_exists("IsConsoleAdmin",$param) and $param["IsConsoleAdmin"] !== null) {
            $this->IsConsoleAdmin = $param["IsConsoleAdmin"];
        }
    }
}
