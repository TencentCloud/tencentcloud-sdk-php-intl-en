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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabases request structure.
 *
 * @method array getInstanceIdSet() Obtain Instance ID
 * @method void setInstanceIdSet(array $InstanceIdSet) Set Instance ID
 * @method integer getLimit() Obtain The number of returned entries per page in pagination mode. Value range: 1-100. The default value is 20.
 * @method void setLimit(integer $Limit) Set The number of returned entries per page in pagination mode. Value range: 1-100. The default value is 20.
 * @method integer getOffset() Obtain Page number in pagination mode. The default value is 0.
 * @method void setOffset(integer $Offset) Set Page number in pagination mode. The default value is 0.
 * @method string getName() Obtain Database name.
 * @method void setName(string $Name) Set Database name.
 * @method string getOrderByType() Obtain Collation rule (desc - descending order; asc - ascending order). The default value is desc.
 * @method void setOrderByType(string $OrderByType) Set Collation rule (desc - descending order; asc - ascending order). The default value is desc.
 * @method string getEncryption() Obtain Whether TDE encryption is enabled. enable - encrypted; disable - unencrypted.
 * @method void setEncryption(string $Encryption) Set Whether TDE encryption is enabled. enable - encrypted; disable - unencrypted.
 * @method string getOrderBy() Obtain Sorting field. (Name - sort by name; CreateTime - sort by creation time). The default value is CreateTime.
 * @method void setOrderBy(string $OrderBy) Set Sorting field. (Name - sort by name; CreateTime - sort by creation time). The default value is CreateTime.
 */
class DescribeDatabasesRequest extends AbstractModel
{
    /**
     * @var array Instance ID
     */
    public $InstanceIdSet;

    /**
     * @var integer The number of returned entries per page in pagination mode. Value range: 1-100. The default value is 20.
     */
    public $Limit;

    /**
     * @var integer Page number in pagination mode. The default value is 0.
     */
    public $Offset;

    /**
     * @var string Database name.
     */
    public $Name;

    /**
     * @var string Collation rule (desc - descending order; asc - ascending order). The default value is desc.
     */
    public $OrderByType;

    /**
     * @var string Whether TDE encryption is enabled. enable - encrypted; disable - unencrypted.
     */
    public $Encryption;

    /**
     * @var string Sorting field. (Name - sort by name; CreateTime - sort by creation time). The default value is CreateTime.
     */
    public $OrderBy;

    /**
     * @param array $InstanceIdSet Instance ID
     * @param integer $Limit The number of returned entries per page in pagination mode. Value range: 1-100. The default value is 20.
     * @param integer $Offset Page number in pagination mode. The default value is 0.
     * @param string $Name Database name.
     * @param string $OrderByType Collation rule (desc - descending order; asc - ascending order). The default value is desc.
     * @param string $Encryption Whether TDE encryption is enabled. enable - encrypted; disable - unencrypted.
     * @param string $OrderBy Sorting field. (Name - sort by name; CreateTime - sort by creation time). The default value is CreateTime.
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

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }
    }
}
