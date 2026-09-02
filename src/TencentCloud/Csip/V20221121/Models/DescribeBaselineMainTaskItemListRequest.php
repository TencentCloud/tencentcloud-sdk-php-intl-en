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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBaselineMainTaskItemList request structure.
 *
 * @method integer getMainTaskID() Obtain <p>Baseline scan main task ID.</p>
 * @method void setMainTaskID(integer $MainTaskID) Set <p>Baseline scan main task ID.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method integer getLimit() Obtain <p>Number of records to be returned per page for paging query. Default value: 10. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of records to be returned per page for paging query. Default value: 10. Maximum value: 100.</p>
 * @method integer getOffset() Obtain <p>Paginated query offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Paginated query offset. Default value: 0.</p>
 */
class DescribeBaselineMainTaskItemListRequest extends AbstractModel
{
    /**
     * @var integer <p>Baseline scan main task ID.</p>
     */
    public $MainTaskID;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>Number of records to be returned per page for paging query. Default value: 10. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Paginated query offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @param integer $MainTaskID <p>Baseline scan main task ID.</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param integer $Limit <p>Number of records to be returned per page for paging query. Default value: 10. Maximum value: 100.</p>
     * @param integer $Offset <p>Paginated query offset. Default value: 0.</p>
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
        if (array_key_exists("MainTaskID",$param) and $param["MainTaskID"] !== null) {
            $this->MainTaskID = $param["MainTaskID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
