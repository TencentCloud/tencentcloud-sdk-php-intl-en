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
 * DescribeAgentSummaryList request structure.
 *
 * @method integer getScope() Obtain <p>Query scope; 0-single application query; 1-across application query</p>
 * @method void setScope(integer $Scope) Set <p>Query scope; 0-single application query; 1-across application query</p>
 * @method string getAppId() Obtain <p>Application Id. When Scope=0, it is the target application Id (required); when Scope=1, it is not required</p>
 * @method void setAppId(string $AppId) Set <p>Application Id. When Scope=0, it is the target application Id (required); when Scope=1, it is not required</p>
 * @method array getFilterList() Obtain <p>Filter criteria (name: "SearchWord", "SpaceId", "AgentSource", "AppId")</p>
 * @method void setFilterList(array $FilterList) Set <p>Filter criteria (name: "SearchWord", "SpaceId", "AgentSource", "AppId")</p>
 * @method integer getPageSize() Obtain <p>Number of items per page.</p>
 * @method void setPageSize(integer $PageSize) Set <p>Number of items per page.</p>
 * @method integer getPageNumber() Obtain <p>Page number.</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number.</p>
 */
class DescribeAgentSummaryListRequest extends AbstractModel
{
    /**
     * @var integer <p>Query scope; 0-single application query; 1-across application query</p>
     */
    public $Scope;

    /**
     * @var string <p>Application Id. When Scope=0, it is the target application Id (required); when Scope=1, it is not required</p>
     */
    public $AppId;

    /**
     * @var array <p>Filter criteria (name: "SearchWord", "SpaceId", "AgentSource", "AppId")</p>
     */
    public $FilterList;

    /**
     * @var integer <p>Number of items per page.</p>
     */
    public $PageSize;

    /**
     * @var integer <p>Page number.</p>
     */
    public $PageNumber;

    /**
     * @param integer $Scope <p>Query scope; 0-single application query; 1-across application query</p>
     * @param string $AppId <p>Application Id. When Scope=0, it is the target application Id (required); when Scope=1, it is not required</p>
     * @param array $FilterList <p>Filter criteria (name: "SearchWord", "SpaceId", "AgentSource", "AppId")</p>
     * @param integer $PageSize <p>Number of items per page.</p>
     * @param integer $PageNumber <p>Page number.</p>
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
        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}
