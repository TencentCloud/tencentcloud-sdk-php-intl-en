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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBs request structure.
 *
 * @method array getInstanceIdSet() Obtain Instance ID
 * @method void setInstanceIdSet(array $InstanceIdSet) Set Instance ID
 * @method integer getLimit() Obtain Number of results per page. Value range: 1-100. Default value: 20
 * @method void setLimit(integer $Limit) Set Number of results per page. Value range: 1-100. Default value: 20
 * @method integer getOffset() Obtain Page number. Default value: 0
 * @method void setOffset(integer $Offset) Set Page number. Default value: 0
 * @method string getName() Obtain Database name
 * @method void setName(string $Name) Set Database name
 * @method string getOrderByType() Obtain Sorting rule. Valid values: `desc` (descending order), `asc` (ascending order). Default value: `desc`.
 * @method void setOrderByType(string $OrderByType) Set Sorting rule. Valid values: `desc` (descending order), `asc` (ascending order). Default value: `desc`.
 * @method string getEncryption() Obtain TDE status. Valid values: `enable` (enabled), `disable` (disabled).
 * @method void setEncryption(string $Encryption) Set TDE status. Valid values: `enable` (enabled), `disable` (disabled).
 */
class DescribeDBsRequest extends AbstractModel
{
    /**
     * @var array Instance ID
     */
    public $InstanceIdSet;

    /**
     * @var integer Number of results per page. Value range: 1-100. Default value: 20
     */
    public $Limit;

    /**
     * @var integer Page number. Default value: 0
     */
    public $Offset;

    /**
     * @var string Database name
     */
    public $Name;

    /**
     * @var string Sorting rule. Valid values: `desc` (descending order), `asc` (ascending order). Default value: `desc`.
     */
    public $OrderByType;

    /**
     * @var string TDE status. Valid values: `enable` (enabled), `disable` (disabled).
     */
    public $Encryption;

    /**
     * @param array $InstanceIdSet Instance ID
     * @param integer $Limit Number of results per page. Value range: 1-100. Default value: 20
     * @param integer $Offset Page number. Default value: 0
     * @param string $Name Database name
     * @param string $OrderByType Sorting rule. Valid values: `desc` (descending order), `asc` (ascending order). Default value: `desc`.
     * @param string $Encryption TDE status. Valid values: `enable` (enabled), `disable` (disabled).
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
        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }
    }
}
