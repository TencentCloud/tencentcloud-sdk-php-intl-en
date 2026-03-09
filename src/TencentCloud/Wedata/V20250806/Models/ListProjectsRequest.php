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
 * ListProjects request structure.
 *
 * @method array getProjectIds() Obtain Project ID List
 * @method void setProjectIds(array $ProjectIds) Set Project ID List
 * @method string getProjectName() Obtain Project name or unique id, supports fuzzy search.
 * @method void setProjectName(string $ProjectName) Set Project name or unique id, supports fuzzy search.
 * @method integer getStatus() Obtain Project status, available values: 0 (disabled), 1 (normal).
 * @method void setStatus(integer $Status) Set Project status, available values: 0 (disabled), 1 (normal).
 * @method string getProjectModel() Obtain Project mode. available values: SIMPLE, STANDARD.
 * @method void setProjectModel(string $ProjectModel) Set Project mode. available values: SIMPLE, STANDARD.
 * @method integer getPageNumber() Obtain Number of requested data pages for pagination.
 * @method void setPageNumber(integer $PageNumber) Set Number of requested data pages for pagination.
 * @method integer getPageSize() Obtain Number of items per page. default value is `10`.
 * @method void setPageSize(integer $PageSize) Set Number of items per page. default value is `10`.
 */
class ListProjectsRequest extends AbstractModel
{
    /**
     * @var array Project ID List
     */
    public $ProjectIds;

    /**
     * @var string Project name or unique id, supports fuzzy search.
     */
    public $ProjectName;

    /**
     * @var integer Project status, available values: 0 (disabled), 1 (normal).
     */
    public $Status;

    /**
     * @var string Project mode. available values: SIMPLE, STANDARD.
     */
    public $ProjectModel;

    /**
     * @var integer Number of requested data pages for pagination.
     */
    public $PageNumber;

    /**
     * @var integer Number of items per page. default value is `10`.
     */
    public $PageSize;

    /**
     * @param array $ProjectIds Project ID List
     * @param string $ProjectName Project name or unique id, supports fuzzy search.
     * @param integer $Status Project status, available values: 0 (disabled), 1 (normal).
     * @param string $ProjectModel Project mode. available values: SIMPLE, STANDARD.
     * @param integer $PageNumber Number of requested data pages for pagination.
     * @param integer $PageSize Number of items per page. default value is `10`.
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
        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProjectModel",$param) and $param["ProjectModel"] !== null) {
            $this->ProjectModel = $param["ProjectModel"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
