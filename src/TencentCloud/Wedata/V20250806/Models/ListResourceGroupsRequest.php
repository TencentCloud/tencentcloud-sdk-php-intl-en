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
 * ListResourceGroups request structure.
 *
 * @method string getType() Obtain Execution resource group type.

-Schedule --- scheduling resource group.
-Integration - integration resource group.
-DataService - data service resource group.
 * @method void setType(string $Type) Set Execution resource group type.

-Schedule --- scheduling resource group.
-Integration - integration resource group.
-DataService - data service resource group.
 * @method string getId() Obtain Resource group ID
 * @method void setId(string $Id) Set Resource group ID
 * @method string getName() Obtain Execution resource group name to search.
 * @method void setName(string $Name) Set Execution resource group name to search.
 * @method array getProjectIds() Obtain Project space id query list.
 * @method void setProjectIds(array $ProjectIds) Set Project space id query list.
 * @method integer getPageNumber() Obtain Number of pages.
 * @method void setPageNumber(integer $PageNumber) Set Number of pages.
 * @method integer getPageSize() Obtain Page size.
 * @method void setPageSize(integer $PageSize) Set Page size.
 */
class ListResourceGroupsRequest extends AbstractModel
{
    /**
     * @var string Execution resource group type.

-Schedule --- scheduling resource group.
-Integration - integration resource group.
-DataService - data service resource group.
     */
    public $Type;

    /**
     * @var string Resource group ID
     */
    public $Id;

    /**
     * @var string Execution resource group name to search.
     */
    public $Name;

    /**
     * @var array Project space id query list.
     */
    public $ProjectIds;

    /**
     * @var integer Number of pages.
     */
    public $PageNumber;

    /**
     * @var integer Page size.
     */
    public $PageSize;

    /**
     * @param string $Type Execution resource group type.

-Schedule --- scheduling resource group.
-Integration - integration resource group.
-DataService - data service resource group.
     * @param string $Id Resource group ID
     * @param string $Name Execution resource group name to search.
     * @param array $ProjectIds Project space id query list.
     * @param integer $PageNumber Number of pages.
     * @param integer $PageSize Page size.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
