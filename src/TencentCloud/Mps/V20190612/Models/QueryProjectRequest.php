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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryProject request structure.
 *
 * @method string getProjectId() Obtain <p>Project ID.</p>
 * @method void setProjectId(string $ProjectId) Set <p>Project ID.</p>
 * @method string getProjectName() Obtain <p>Project name.</p>
 * @method void setProjectName(string $ProjectName) Set <p>Project name.</p>
 * @method integer getPage() Obtain <p>Page number. Value range: starts from 1. Default value: 1.</p>
 * @method void setPage(integer $Page) Set <p>Page number. Value range: starts from 1. Default value: 1.</p>
 * @method integer getPageSize() Obtain <p>Number of items per page. Default value: 20.</p>
 * @method void setPageSize(integer $PageSize) Set <p>Number of items per page. Default value: 20.</p>
 */
class QueryProjectRequest extends AbstractModel
{
    /**
     * @var string <p>Project ID.</p>
     */
    public $ProjectId;

    /**
     * @var string <p>Project name.</p>
     */
    public $ProjectName;

    /**
     * @var integer <p>Page number. Value range: starts from 1. Default value: 1.</p>
     */
    public $Page;

    /**
     * @var integer <p>Number of items per page. Default value: 20.</p>
     */
    public $PageSize;

    /**
     * @param string $ProjectId <p>Project ID.</p>
     * @param string $ProjectName <p>Project name.</p>
     * @param integer $Page <p>Page number. Value range: starts from 1. Default value: 1.</p>
     * @param integer $PageSize <p>Number of items per page. Default value: 20.</p>
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

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
