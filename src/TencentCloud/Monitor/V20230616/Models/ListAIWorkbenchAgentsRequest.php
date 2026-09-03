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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAIWorkbenchAgents request structure.
 *
 * @method integer getPerPage() Obtain <p>Number of items per page</p>
 * @method void setPerPage(integer $PerPage) Set <p>Number of items per page</p>
 * @method integer getPageNo() Obtain <p>Page number.</p>
 * @method void setPageNo(integer $PageNo) Set <p>Page number.</p>
 * @method string getStatus() Obtain <p>Status filtering</p>
 * @method void setStatus(string $Status) Set <p>Status filtering</p>
 * @method string getCategory() Obtain <p>Category filtering</p>
 * @method void setCategory(string $Category) Set <p>Category filtering</p>
 * @method string getKeyword() Obtain <p>Search keyword</p>
 * @method void setKeyword(string $Keyword) Set <p>Search keyword</p>
 * @method string getSource() Obtain <p>Filter by source</p>
 * @method void setSource(string $Source) Set <p>Filter by source</p>
 * @method array getAgentIds() Obtain <p>Agent ID list filtering</p>
 * @method void setAgentIds(array $AgentIds) Set <p>Agent ID list filtering</p>
 */
class ListAIWorkbenchAgentsRequest extends AbstractModel
{
    /**
     * @var integer <p>Number of items per page</p>
     */
    public $PerPage;

    /**
     * @var integer <p>Page number.</p>
     */
    public $PageNo;

    /**
     * @var string <p>Status filtering</p>
     */
    public $Status;

    /**
     * @var string <p>Category filtering</p>
     */
    public $Category;

    /**
     * @var string <p>Search keyword</p>
     */
    public $Keyword;

    /**
     * @var string <p>Filter by source</p>
     */
    public $Source;

    /**
     * @var array <p>Agent ID list filtering</p>
     */
    public $AgentIds;

    /**
     * @param integer $PerPage <p>Number of items per page</p>
     * @param integer $PageNo <p>Page number.</p>
     * @param string $Status <p>Status filtering</p>
     * @param string $Category <p>Category filtering</p>
     * @param string $Keyword <p>Search keyword</p>
     * @param string $Source <p>Filter by source</p>
     * @param array $AgentIds <p>Agent ID list filtering</p>
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
        if (array_key_exists("PerPage",$param) and $param["PerPage"] !== null) {
            $this->PerPage = $param["PerPage"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("AgentIds",$param) and $param["AgentIds"] !== null) {
            $this->AgentIds = $param["AgentIds"];
        }
    }
}
