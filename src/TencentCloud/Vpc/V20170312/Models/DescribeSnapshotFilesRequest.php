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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshotFiles request structure.
 *
 * @method string getBusinessType() Obtain Type of associated resource. Values: `securitygroup`
 * @method void setBusinessType(string $BusinessType) Set Type of associated resource. Values: `securitygroup`
 * @method string getInstanceId() Obtain Service instance ID. It's corresponding to the `BusinessType`. 
 * @method void setInstanceId(string $InstanceId) Set Service instance ID. It's corresponding to the `BusinessType`. 
 * @method string getStartDate() Obtain Start time. Format: %Y-%m-%d %H:%M:%S
 * @method void setStartDate(string $StartDate) Set Start time. Format: %Y-%m-%d %H:%M:%S
 * @method string getEndDate() Obtain End time. Format: %Y-%m-%d %H:%M:%S
 * @method void setEndDate(string $EndDate) Set End time. Format: %Y-%m-%d %H:%M:%S
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100.
 */
class DescribeSnapshotFilesRequest extends AbstractModel
{
    /**
     * @var string Type of associated resource. Values: `securitygroup`
     */
    public $BusinessType;

    /**
     * @var string Service instance ID. It's corresponding to the `BusinessType`. 
     */
    public $InstanceId;

    /**
     * @var string Start time. Format: %Y-%m-%d %H:%M:%S
     */
    public $StartDate;

    /**
     * @var string End time. Format: %Y-%m-%d %H:%M:%S
     */
    public $EndDate;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @param string $BusinessType Type of associated resource. Values: `securitygroup`
     * @param string $InstanceId Service instance ID. It's corresponding to the `BusinessType`. 
     * @param string $StartDate Start time. Format: %Y-%m-%d %H:%M:%S
     * @param string $EndDate End time. Format: %Y-%m-%d %H:%M:%S
     * @param integer $Offset Offset. Default value: `0`.
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100.
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
        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
