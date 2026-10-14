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
 * DescribeAigcTaskList request structure.
 *
 * @method integer getPageNum() Obtain <p>Start query page</p>
 * @method void setPageNum(integer $PageNum) Set <p>Start query page</p>
 * @method integer getPageSize() Obtain <p>How many data entries to retrieve on the current page</p>
 * @method void setPageSize(integer $PageSize) Set <p>How many data entries to retrieve on the current page</p>
 * @method QueryTaskFilter getQueryTaskFilter() Obtain <p>Query filter conditions.</p>
 * @method void setQueryTaskFilter(QueryTaskFilter $QueryTaskFilter) Set <p>Query filter conditions.</p>
 */
class DescribeAigcTaskListRequest extends AbstractModel
{
    /**
     * @var integer <p>Start query page</p>
     */
    public $PageNum;

    /**
     * @var integer <p>How many data entries to retrieve on the current page</p>
     */
    public $PageSize;

    /**
     * @var QueryTaskFilter <p>Query filter conditions.</p>
     */
    public $QueryTaskFilter;

    /**
     * @param integer $PageNum <p>Start query page</p>
     * @param integer $PageSize <p>How many data entries to retrieve on the current page</p>
     * @param QueryTaskFilter $QueryTaskFilter <p>Query filter conditions.</p>
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
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("QueryTaskFilter",$param) and $param["QueryTaskFilter"] !== null) {
            $this->QueryTaskFilter = new QueryTaskFilter();
            $this->QueryTaskFilter->deserialize($param["QueryTaskFilter"]);
        }
    }
}
