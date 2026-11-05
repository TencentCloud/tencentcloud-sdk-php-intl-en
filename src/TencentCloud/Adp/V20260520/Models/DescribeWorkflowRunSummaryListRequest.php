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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWorkflowRunSummaryList request structure.
 *
 * @method string getAppId() Obtain <p>Application ID. For how to obtain it, see <a href="https://www.tencentcloud.com/document/product/1759/109469?from_cn_redirect=1#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
 * @method void setAppId(string $AppId) Set <p>Application ID. For how to obtain it, see <a href="https://www.tencentcloud.com/document/product/1759/109469?from_cn_redirect=1#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
 * @method integer getPageSize() Obtain <p>Number of items per page (value ranges from 1 to 200)</p>
 * @method void setPageSize(integer $PageSize) Set <p>Number of items per page (value ranges from 1 to 200)</p>
 * @method integer getPageNumber() Obtain <p>Page number (must be greater than 0)</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number (must be greater than 0)</p>
 * @method integer getDomain() Obtain <p>Execution environment. 1: Development domain, 2: Production domain -</p>
 * @method void setDomain(integer $Domain) Set <p>Execution environment. 1: Development domain, 2: Production domain -</p>
 * @method array getFilterList() Obtain <p>Parameter filtering</p>
 * @method void setFilterList(array $FilterList) Set <p>Parameter filtering</p>
 */
class DescribeWorkflowRunSummaryListRequest extends AbstractModel
{
    /**
     * @var string <p>Application ID. For how to obtain it, see <a href="https://www.tencentcloud.com/document/product/1759/109469?from_cn_redirect=1#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
     */
    public $AppId;

    /**
     * @var integer <p>Number of items per page (value ranges from 1 to 200)</p>
     */
    public $PageSize;

    /**
     * @var integer <p>Page number (must be greater than 0)</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Execution environment. 1: Development domain, 2: Production domain -</p>
     */
    public $Domain;

    /**
     * @var array <p>Parameter filtering</p>
     */
    public $FilterList;

    /**
     * @param string $AppId <p>Application ID. For how to obtain it, see <a href="https://www.tencentcloud.com/document/product/1759/109469?from_cn_redirect=1#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
     * @param integer $PageSize <p>Number of items per page (value ranges from 1 to 200)</p>
     * @param integer $PageNumber <p>Page number (must be greater than 0)</p>
     * @param integer $Domain <p>Execution environment. 1: Development domain, 2: Production domain -</p>
     * @param array $FilterList <p>Parameter filtering</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }
    }
}
