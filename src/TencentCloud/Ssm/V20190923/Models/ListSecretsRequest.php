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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListSecrets request structure.
 *
 * @method integer getOffset() Obtain Starting position of the list, starting at 0. If not specified, 0 is used by default.
 * @method void setOffset(integer $Offset) Set Starting position of the list, starting at 0. If not specified, 0 is used by default.
 * @method integer getLimit() Obtain Maximum number of returned Secrets in a query. If not set or set to 0, 20 is used by default.
 * @method void setLimit(integer $Limit) Set Maximum number of returned Secrets in a query. If not set or set to 0, 20 is used by default.
 * @method integer getOrderType() Obtain Sorting order according to the creation time. If not set or set to 0, descending order is used; if set to 1, ascending order is used.
 * @method void setOrderType(integer $OrderType) Set Sorting order according to the creation time. If not set or set to 0, descending order is used; if set to 1, ascending order is used.
 * @method integer getState() Obtain Filter based on credential status.
The default value is 0, indicating to query all.
1: query the list of credentials in `Enabled` status.
2: query the list of credentials in `Disabled` status.
3: query the list of credentials in `PendingDelete` status.
4: query the list of credentials in `PendingCreate` status.
5: query the list of credentials in `CreateFailed` status.
The `PendingCreate` and `CreateFailed` status only take effect when `SecretType` is Tencent Cloud service credential
 * @method void setState(integer $State) Set Filter based on credential status.
The default value is 0, indicating to query all.
1: query the list of credentials in `Enabled` status.
2: query the list of credentials in `Disabled` status.
3: query the list of credentials in `PendingDelete` status.
4: query the list of credentials in `PendingCreate` status.
5: query the list of credentials in `CreateFailed` status.
The `PendingCreate` and `CreateFailed` status only take effect when `SecretType` is Tencent Cloud service credential
 * @method string getSearchSecretName() Obtain Filter according to Secret names. If left empty, this filter is not applied.
 * @method void setSearchSecretName(string $SearchSecretName) Set Filter according to Secret names. If left empty, this filter is not applied.
 * @method array getTagFilters() Obtain Tag filter.
 * @method void setTagFilters(array $TagFilters) Set Tag filter.
 * @method integer getSecretType() Obtain `0` (default): user-defined secret.
`1`: Tencent Cloud services secret.
`2`: SSH key secret.
`3`: Tencent Cloud API key secret.
 * @method void setSecretType(integer $SecretType) Set `0` (default): user-defined secret.
`1`: Tencent Cloud services secret.
`2`: SSH key secret.
`3`: Tencent Cloud API key secret.
 * @method string getProductName() Obtain This parameter only takes effect when the value of the SecretType parameter is 1.\nWhen the value of SecretType is `1`:
If the ProductName value is empty, it means querying all types of Tencent Cloud product secrets;If the ProductName value is a specific cloud product value such as MySQL, it means querying MySQL database credential;If the ProductName value is multiple cloud product values, such as: Mysql, Tdsql-mysql, Tdsql_C_Mysql (multiple values are separated by commas in English), it means querying the secrets of three cloud product types;To query the list of supported cloud products, use the interface: `DescribeSupportedProducts`.
 * @method void setProductName(string $ProductName) Set This parameter only takes effect when the value of the SecretType parameter is 1.\nWhen the value of SecretType is `1`:
If the ProductName value is empty, it means querying all types of Tencent Cloud product secrets;If the ProductName value is a specific cloud product value such as MySQL, it means querying MySQL database credential;If the ProductName value is multiple cloud product values, such as: Mysql, Tdsql-mysql, Tdsql_C_Mysql (multiple values are separated by commas in English), it means querying the secrets of three cloud product types;To query the list of supported cloud products, use the interface: `DescribeSupportedProducts`.
 */
class ListSecretsRequest extends AbstractModel
{
    /**
     * @var integer Starting position of the list, starting at 0. If not specified, 0 is used by default.
     */
    public $Offset;

    /**
     * @var integer Maximum number of returned Secrets in a query. If not set or set to 0, 20 is used by default.
     */
    public $Limit;

    /**
     * @var integer Sorting order according to the creation time. If not set or set to 0, descending order is used; if set to 1, ascending order is used.
     */
    public $OrderType;

    /**
     * @var integer Filter based on credential status.
The default value is 0, indicating to query all.
1: query the list of credentials in `Enabled` status.
2: query the list of credentials in `Disabled` status.
3: query the list of credentials in `PendingDelete` status.
4: query the list of credentials in `PendingCreate` status.
5: query the list of credentials in `CreateFailed` status.
The `PendingCreate` and `CreateFailed` status only take effect when `SecretType` is Tencent Cloud service credential
     */
    public $State;

    /**
     * @var string Filter according to Secret names. If left empty, this filter is not applied.
     */
    public $SearchSecretName;

    /**
     * @var array Tag filter.
     */
    public $TagFilters;

    /**
     * @var integer `0` (default): user-defined secret.
`1`: Tencent Cloud services secret.
`2`: SSH key secret.
`3`: Tencent Cloud API key secret.
     */
    public $SecretType;

    /**
     * @var string This parameter only takes effect when the value of the SecretType parameter is 1.\nWhen the value of SecretType is `1`:
If the ProductName value is empty, it means querying all types of Tencent Cloud product secrets;If the ProductName value is a specific cloud product value such as MySQL, it means querying MySQL database credential;If the ProductName value is multiple cloud product values, such as: Mysql, Tdsql-mysql, Tdsql_C_Mysql (multiple values are separated by commas in English), it means querying the secrets of three cloud product types;To query the list of supported cloud products, use the interface: `DescribeSupportedProducts`.
     */
    public $ProductName;

    /**
     * @param integer $Offset Starting position of the list, starting at 0. If not specified, 0 is used by default.
     * @param integer $Limit Maximum number of returned Secrets in a query. If not set or set to 0, 20 is used by default.
     * @param integer $OrderType Sorting order according to the creation time. If not set or set to 0, descending order is used; if set to 1, ascending order is used.
     * @param integer $State Filter based on credential status.
The default value is 0, indicating to query all.
1: query the list of credentials in `Enabled` status.
2: query the list of credentials in `Disabled` status.
3: query the list of credentials in `PendingDelete` status.
4: query the list of credentials in `PendingCreate` status.
5: query the list of credentials in `CreateFailed` status.
The `PendingCreate` and `CreateFailed` status only take effect when `SecretType` is Tencent Cloud service credential
     * @param string $SearchSecretName Filter according to Secret names. If left empty, this filter is not applied.
     * @param array $TagFilters Tag filter.
     * @param integer $SecretType `0` (default): user-defined secret.
`1`: Tencent Cloud services secret.
`2`: SSH key secret.
`3`: Tencent Cloud API key secret.
     * @param string $ProductName This parameter only takes effect when the value of the SecretType parameter is 1.\nWhen the value of SecretType is `1`:
If the ProductName value is empty, it means querying all types of Tencent Cloud product secrets;If the ProductName value is a specific cloud product value such as MySQL, it means querying MySQL database credential;If the ProductName value is multiple cloud product values, such as: Mysql, Tdsql-mysql, Tdsql_C_Mysql (multiple values are separated by commas in English), it means querying the secrets of three cloud product types;To query the list of supported cloud products, use the interface: `DescribeSupportedProducts`.
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("SearchSecretName",$param) and $param["SearchSecretName"] !== null) {
            $this->SearchSecretName = $param["SearchSecretName"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("SecretType",$param) and $param["SecretType"] !== null) {
            $this->SecretType = $param["SecretType"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }
    }
}
