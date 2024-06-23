<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetOfflineInstanceList request structure.
 *
 * @method string getPageIndex() Obtain Which Page
 * @method void setPageIndex(string $PageIndex) Set Which Page
 * @method integer getPageSize() Obtain Number of Items per Page
 * @method void setPageSize(integer $PageSize) Set Number of Items per Page
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method SearchCondition getSearchCondition() Obtain No
 * @method void setSearchCondition(SearchCondition $SearchCondition) Set No
 */
class GetOfflineInstanceListRequest extends AbstractModel
{
    /**
     * @var string Which Page
     */
    public $PageIndex;

    /**
     * @var integer Number of Items per Page
     */
    public $PageSize;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var SearchCondition No
     */
    public $SearchCondition;

    /**
     * @param string $PageIndex Which Page
     * @param integer $PageSize Number of Items per Page
     * @param string $ProjectId Project ID
     * @param SearchCondition $SearchCondition No
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
        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SearchCondition",$param) and $param["SearchCondition"] !== null) {
            $this->SearchCondition = new SearchCondition();
            $this->SearchCondition->deserialize($param["SearchCondition"]);
        }
    }
}
