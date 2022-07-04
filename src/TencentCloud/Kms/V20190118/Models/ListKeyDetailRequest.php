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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListKeyDetail request structure.
 *
 * @method integer getOffset() Obtain This parameter has the same meaning of the `Offset` in an SQL query, indicating that this acquisition starts from the "No. Offset value" element of the array arranged in a certain order. The default value is 0.
 * @method void setOffset(integer $Offset) Set This parameter has the same meaning of the `Offset` in an SQL query, indicating that this acquisition starts from the "No. Offset value" element of the array arranged in a certain order. The default value is 0.
 * @method integer getLimit() Obtain This parameter has the same meaning of the `Limit` in an SQL query, indicating that up to `Limit` value elements can be obtained in this request. The default value is 10 and the maximum value is 200.
 * @method void setLimit(integer $Limit) Set This parameter has the same meaning of the `Limit` in an SQL query, indicating that up to `Limit` value elements can be obtained in this request. The default value is 10 and the maximum value is 200.
 * @method integer getRole() Obtain Filters by creator role. 0 (default value): the CMK is created by the user; 1: the CMK is created automatically by an authorized Tencent Cloud service.
 * @method void setRole(integer $Role) Set Filters by creator role. 0 (default value): the CMK is created by the user; 1: the CMK is created automatically by an authorized Tencent Cloud service.
 * @method integer getOrderType() Obtain Sorts by CMK creation time. 0: descending; 1: ascending
 * @method void setOrderType(integer $OrderType) Set Sorts by CMK creation time. 0: descending; 1: ascending
 * @method integer getKeyState() Obtain Filters by CMK status. 0: all CMKs; 1: CMKs in `Enabled` status only; 2: CMKs in `Disabled` status only; 3: CMKs in `PendingDelete` status only (i.e., keys with schedule deletion enabled); 4: CMKs in `PendingImport` status only; 5: CMKs in `Archived` status only.
 * @method void setKeyState(integer $KeyState) Set Filters by CMK status. 0: all CMKs; 1: CMKs in `Enabled` status only; 2: CMKs in `Disabled` status only; 3: CMKs in `PendingDelete` status only (i.e., keys with schedule deletion enabled); 4: CMKs in `PendingImport` status only; 5: CMKs in `Archived` status only.
 * @method string getSearchKeyAlias() Obtain Performs a fuzzy query by `KeyId` or `Alias`
 * @method void setSearchKeyAlias(string $SearchKeyAlias) Set Performs a fuzzy query by `KeyId` or `Alias`
 * @method string getOrigin() Obtain Filters by CMK type. "TENCENT_KMS" indicates to filter CMKs whose key materials are created by KMS; "EXTERNAL" indicates to filter CMKs of `EXTERNAL` type whose key materials are imported by users; "ALL" or empty indicates to filter CMKs of both types. This value is case-sensitive.
 * @method void setOrigin(string $Origin) Set Filters by CMK type. "TENCENT_KMS" indicates to filter CMKs whose key materials are created by KMS; "EXTERNAL" indicates to filter CMKs of `EXTERNAL` type whose key materials are imported by users; "ALL" or empty indicates to filter CMKs of both types. This value is case-sensitive.
 * @method string getKeyUsage() Obtain Filters by the `KeyUsage` field value. Valid values: `ALL` (all CMKs), `ENCRYPT_DECRYPT` (used when this field is left empty), `ASYMMETRIC_DECRYPT_RSA_2048`, `ASYMMETRIC_DECRYPT_SM2`, `ASYMMETRIC_SIGN_VERIFY_SM2`, `ASYMMETRIC_SIGN_VERIFY_RSA_2048`, and `ASYMMETRIC_SIGN_VERIFY_ECC`.
 * @method void setKeyUsage(string $KeyUsage) Set Filters by the `KeyUsage` field value. Valid values: `ALL` (all CMKs), `ENCRYPT_DECRYPT` (used when this field is left empty), `ASYMMETRIC_DECRYPT_RSA_2048`, `ASYMMETRIC_DECRYPT_SM2`, `ASYMMETRIC_SIGN_VERIFY_SM2`, `ASYMMETRIC_SIGN_VERIFY_RSA_2048`, and `ASYMMETRIC_SIGN_VERIFY_ECC`.
 * @method array getTagFilters() Obtain Tag filter condition
 * @method void setTagFilters(array $TagFilters) Set Tag filter condition
 * @method string getHsmClusterId() Obtain ID of the HSM cluster. This field is only valid for Exclusive and Managed KMS instances.
 * @method void setHsmClusterId(string $HsmClusterId) Set ID of the HSM cluster. This field is only valid for Exclusive and Managed KMS instances.
 */
class ListKeyDetailRequest extends AbstractModel
{
    /**
     * @var integer This parameter has the same meaning of the `Offset` in an SQL query, indicating that this acquisition starts from the "No. Offset value" element of the array arranged in a certain order. The default value is 0.
     */
    public $Offset;

    /**
     * @var integer This parameter has the same meaning of the `Limit` in an SQL query, indicating that up to `Limit` value elements can be obtained in this request. The default value is 10 and the maximum value is 200.
     */
    public $Limit;

    /**
     * @var integer Filters by creator role. 0 (default value): the CMK is created by the user; 1: the CMK is created automatically by an authorized Tencent Cloud service.
     */
    public $Role;

    /**
     * @var integer Sorts by CMK creation time. 0: descending; 1: ascending
     */
    public $OrderType;

    /**
     * @var integer Filters by CMK status. 0: all CMKs; 1: CMKs in `Enabled` status only; 2: CMKs in `Disabled` status only; 3: CMKs in `PendingDelete` status only (i.e., keys with schedule deletion enabled); 4: CMKs in `PendingImport` status only; 5: CMKs in `Archived` status only.
     */
    public $KeyState;

    /**
     * @var string Performs a fuzzy query by `KeyId` or `Alias`
     */
    public $SearchKeyAlias;

    /**
     * @var string Filters by CMK type. "TENCENT_KMS" indicates to filter CMKs whose key materials are created by KMS; "EXTERNAL" indicates to filter CMKs of `EXTERNAL` type whose key materials are imported by users; "ALL" or empty indicates to filter CMKs of both types. This value is case-sensitive.
     */
    public $Origin;

    /**
     * @var string Filters by the `KeyUsage` field value. Valid values: `ALL` (all CMKs), `ENCRYPT_DECRYPT` (used when this field is left empty), `ASYMMETRIC_DECRYPT_RSA_2048`, `ASYMMETRIC_DECRYPT_SM2`, `ASYMMETRIC_SIGN_VERIFY_SM2`, `ASYMMETRIC_SIGN_VERIFY_RSA_2048`, and `ASYMMETRIC_SIGN_VERIFY_ECC`.
     */
    public $KeyUsage;

    /**
     * @var array Tag filter condition
     */
    public $TagFilters;

    /**
     * @var string ID of the HSM cluster. This field is only valid for Exclusive and Managed KMS instances.
     */
    public $HsmClusterId;

    /**
     * @param integer $Offset This parameter has the same meaning of the `Offset` in an SQL query, indicating that this acquisition starts from the "No. Offset value" element of the array arranged in a certain order. The default value is 0.
     * @param integer $Limit This parameter has the same meaning of the `Limit` in an SQL query, indicating that up to `Limit` value elements can be obtained in this request. The default value is 10 and the maximum value is 200.
     * @param integer $Role Filters by creator role. 0 (default value): the CMK is created by the user; 1: the CMK is created automatically by an authorized Tencent Cloud service.
     * @param integer $OrderType Sorts by CMK creation time. 0: descending; 1: ascending
     * @param integer $KeyState Filters by CMK status. 0: all CMKs; 1: CMKs in `Enabled` status only; 2: CMKs in `Disabled` status only; 3: CMKs in `PendingDelete` status only (i.e., keys with schedule deletion enabled); 4: CMKs in `PendingImport` status only; 5: CMKs in `Archived` status only.
     * @param string $SearchKeyAlias Performs a fuzzy query by `KeyId` or `Alias`
     * @param string $Origin Filters by CMK type. "TENCENT_KMS" indicates to filter CMKs whose key materials are created by KMS; "EXTERNAL" indicates to filter CMKs of `EXTERNAL` type whose key materials are imported by users; "ALL" or empty indicates to filter CMKs of both types. This value is case-sensitive.
     * @param string $KeyUsage Filters by the `KeyUsage` field value. Valid values: `ALL` (all CMKs), `ENCRYPT_DECRYPT` (used when this field is left empty), `ASYMMETRIC_DECRYPT_RSA_2048`, `ASYMMETRIC_DECRYPT_SM2`, `ASYMMETRIC_SIGN_VERIFY_SM2`, `ASYMMETRIC_SIGN_VERIFY_RSA_2048`, and `ASYMMETRIC_SIGN_VERIFY_ECC`.
     * @param array $TagFilters Tag filter condition
     * @param string $HsmClusterId ID of the HSM cluster. This field is only valid for Exclusive and Managed KMS instances.
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

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("KeyState",$param) and $param["KeyState"] !== null) {
            $this->KeyState = $param["KeyState"];
        }

        if (array_key_exists("SearchKeyAlias",$param) and $param["SearchKeyAlias"] !== null) {
            $this->SearchKeyAlias = $param["SearchKeyAlias"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("KeyUsage",$param) and $param["KeyUsage"] !== null) {
            $this->KeyUsage = $param["KeyUsage"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }
    }
}
