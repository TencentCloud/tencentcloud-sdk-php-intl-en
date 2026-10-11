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
 * Built-in workflow task run list option (only for FOR_EACH tasks)
 *
 * @method integer getPageNumber() Obtain <p>Page number. Value range: starts from 1. Optional. Default value: 1.</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number. Value range: starts from 1. Optional. Default value: 1.</p>
 * @method integer getPageSize() Obtain <p>Size per page. Optional. Default: 10. Value range: [10, 200]</p>
 * @method void setPageSize(integer $PageSize) Set <p>Size per page. Optional. Default: 10. Value range: [10, 200]</p>
 * @method array getRunStates() Obtain <p>Iterative running state, exact matching. Optional, multiple selection (multiple values are in an OR relationship).</p><p>You can enter SUCCESS / FAILED, for example. For details, refer to the return value of the InnerWorkflowTaskRunIteration.RunState field in the API output parameter.</p>
 * @method void setRunStates(array $RunStates) Set <p>Iterative running state, exact matching. Optional, multiple selection (multiple values are in an OR relationship).</p><p>You can enter SUCCESS / FAILED, for example. For details, refer to the return value of the InnerWorkflowTaskRunIteration.RunState field in the API output parameter.</p>
 */
class InnerWorkflowTaskRunListOption extends AbstractModel
{
    /**
     * @var integer <p>Page number. Value range: starts from 1. Optional. Default value: 1.</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Size per page. Optional. Default: 10. Value range: [10, 200]</p>
     */
    public $PageSize;

    /**
     * @var array <p>Iterative running state, exact matching. Optional, multiple selection (multiple values are in an OR relationship).</p><p>You can enter SUCCESS / FAILED, for example. For details, refer to the return value of the InnerWorkflowTaskRunIteration.RunState field in the API output parameter.</p>
     */
    public $RunStates;

    /**
     * @param integer $PageNumber <p>Page number. Value range: starts from 1. Optional. Default value: 1.</p>
     * @param integer $PageSize <p>Size per page. Optional. Default: 10. Value range: [10, 200]</p>
     * @param array $RunStates <p>Iterative running state, exact matching. Optional, multiple selection (multiple values are in an OR relationship).</p><p>You can enter SUCCESS / FAILED, for example. For details, refer to the return value of the InnerWorkflowTaskRunIteration.RunState field in the API output parameter.</p>
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("RunStates",$param) and $param["RunStates"] !== null) {
            $this->RunStates = $param["RunStates"];
        }
    }
}
