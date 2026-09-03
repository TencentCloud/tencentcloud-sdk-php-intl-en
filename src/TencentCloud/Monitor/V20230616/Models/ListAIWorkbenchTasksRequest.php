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
 * ListAIWorkbenchTasks request structure.
 *
 * @method integer getPerPage() Obtain <p>Number of items per page</p>
 * @method void setPerPage(integer $PerPage) Set <p>Number of items per page</p>
 * @method integer getPageNo() Obtain <p>Page number.</p>
 * @method void setPageNo(integer $PageNo) Set <p>Page number.</p>
 * @method string getAgentId() Obtain <p>Filter by Agent</p>
 * @method void setAgentId(string $AgentId) Set <p>Filter by Agent</p>
 * @method string getTriggerType() Obtain <p>Filter by trigger type</p>
 * @method void setTriggerType(string $TriggerType) Set <p>Filter by trigger type</p>
 * @method string getKeyword() Obtain <p>Search keyword</p>
 * @method void setKeyword(string $Keyword) Set <p>Search keyword</p>
 * @method array getTaskIds() Obtain <p>Task ID list filter</p>
 * @method void setTaskIds(array $TaskIds) Set <p>Task ID list filter</p>
 * @method boolean getEnabled() Obtain <p>Whether to enable filter criteria</p>
 * @method void setEnabled(boolean $Enabled) Set <p>Whether to enable filter criteria</p>
 */
class ListAIWorkbenchTasksRequest extends AbstractModel
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
     * @var string <p>Filter by Agent</p>
     */
    public $AgentId;

    /**
     * @var string <p>Filter by trigger type</p>
     */
    public $TriggerType;

    /**
     * @var string <p>Search keyword</p>
     */
    public $Keyword;

    /**
     * @var array <p>Task ID list filter</p>
     */
    public $TaskIds;

    /**
     * @var boolean <p>Whether to enable filter criteria</p>
     */
    public $Enabled;

    /**
     * @param integer $PerPage <p>Number of items per page</p>
     * @param integer $PageNo <p>Page number.</p>
     * @param string $AgentId <p>Filter by Agent</p>
     * @param string $TriggerType <p>Filter by trigger type</p>
     * @param string $Keyword <p>Search keyword</p>
     * @param array $TaskIds <p>Task ID list filter</p>
     * @param boolean $Enabled <p>Whether to enable filter criteria</p>
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

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
