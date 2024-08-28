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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBaselineRule request structure.
 *
 * @method integer getBaselineId() Obtain Baseline ID
 * @method void setBaselineId(integer $BaselineId) Set Baseline ID
 * @method integer getLimit() Obtain Pagination limit, with the maximum value being 100.
 * @method void setLimit(integer $Limit) Set Pagination limit, with the maximum value being 100.
 * @method integer getOffset() Obtain Pagination parameter
 * @method void setOffset(integer $Offset) Set Pagination parameter
 * @method array getLevel() Obtain Severity level
 * @method void setLevel(array $Level) Set Severity level
 * @method integer getStatus() Obtain Status
 * @method void setStatus(integer $Status) Set Status
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 */
class DescribeBaselineRuleRequest extends AbstractModel
{
    /**
     * @var integer Baseline ID
     */
    public $BaselineId;

    /**
     * @var integer Pagination limit, with the maximum value being 100.
     */
    public $Limit;

    /**
     * @var integer Pagination parameter
     */
    public $Offset;

    /**
     * @var array Severity level
     */
    public $Level;

    /**
     * @var integer Status
     */
    public $Status;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @param integer $BaselineId Baseline ID
     * @param integer $Limit Pagination limit, with the maximum value being 100.
     * @param integer $Offset Pagination parameter
     * @param array $Level Severity level
     * @param integer $Status Status
     * @param string $Quuid Host QUUID
     * @param string $Uuid Host UUID
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
        if (array_key_exists("BaselineId",$param) and $param["BaselineId"] !== null) {
            $this->BaselineId = $param["BaselineId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
