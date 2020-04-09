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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTasks request structure.
 *
 * @method string getStatus() Obtain Filter: Task status. Valid values: WAITING (waiting), PROCESSING (processing), FINISH (completed).
 * @method void setStatus(string $Status) Set Filter: Task status. Valid values: WAITING (waiting), PROCESSING (processing), FINISH (completed).
 * @method integer getLimit() Obtain Number of returned entries. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned entries. Default value: 10. Maximum value: 100.
 * @method string getScrollToken() Obtain Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.
 * @method void setScrollToken(string $ScrollToken) Set Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var string Filter: Task status. Valid values: WAITING (waiting), PROCESSING (processing), FINISH (completed).
     */
    public $Status;

    /**
     * @var integer Number of returned entries. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.
     */
    public $ScrollToken;

    /**
     * @param string $Status Filter: Task status. Valid values: WAITING (waiting), PROCESSING (processing), FINISH (completed).
     * @param integer $Limit Number of returned entries. Default value: 10. Maximum value: 100.
     * @param string $ScrollToken Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ScrollToken",$param) and $param["ScrollToken"] !== null) {
            $this->ScrollToken = $param["ScrollToken"];
        }
    }
}
