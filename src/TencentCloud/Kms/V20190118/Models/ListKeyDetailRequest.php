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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListKeyDetail request structure.
 *
 * @method integer getOffset() Obtain <p>It means the same as the Offset in SQL queries, indicating that this retrieval starts from the Offset-th element of the sequentially arranged array. It defaults to 0.</p>
 * @method void setOffset(integer $Offset) Set <p>It means the same as the Offset in SQL queries, indicating that this retrieval starts from the Offset-th element of the sequentially arranged array. It defaults to 0.</p>
 * @method integer getLimit() Obtain <p>The meaning is consistent with the Limit in SQL queries, indicating that this time up to Limit elements can be retrieved. The default value is 10, and the maximum value is 200.</p>
 * @method void setLimit(integer $Limit) Set <p>The meaning is consistent with the Limit in SQL queries, indicating that this time up to Limit elements can be retrieved. The default value is 10, and the maximum value is 200.</p>
 * @method integer getRole() Obtain <p>Filter by creator role. Default value 0 indicates CMKs created by the user, and 1 indicates CMKs automatically created by authorized other Cloud services.</p>
 * @method void setRole(integer $Role) Set <p>Filter by creator role. Default value 0 indicates CMKs created by the user, and 1 indicates CMKs automatically created by authorized other Cloud services.</p>
 * @method integer getOrderType() Obtain <p>Sort by CMK creation time. 0 indicates sort in descending order, and 1 indicates sort in ascending order.</p>
 * @method void setOrderType(integer $OrderType) Set <p>Sort by CMK creation time. 0 indicates sort in descending order, and 1 indicates sort in ascending order.</p>
 * @method integer getKeyState() Obtain <p>Filter by CMK status. 0 indicates all CMKs, 1 indicates querying only Enabled CMKs, 2 indicates querying only Disabled CMKs, 3 indicates querying CMKs in PendingDelete state (keys in scheduled deletion status), 4 indicates querying CMKs in PendingImport state, and 5 indicates querying CMKs in Archived state.</p>
 * @method void setKeyState(integer $KeyState) Set <p>Filter by CMK status. 0 indicates all CMKs, 1 indicates querying only Enabled CMKs, 2 indicates querying only Disabled CMKs, 3 indicates querying CMKs in PendingDelete state (keys in scheduled deletion status), 4 indicates querying CMKs in PendingImport state, and 5 indicates querying CMKs in Archived state.</p>
 * @method string getSearchKeyAlias() Obtain <p>Perform a fuzzy match query by KeyId or Alias</p>
 * @method void setSearchKeyAlias(string $SearchKeyAlias) Set <p>Perform a fuzzy match query by KeyId or Alias</p>
 * @method string getOrigin() Obtain <p>Filter by CMK type. "TENCENT_KMS" means to filter CMKs whose key material is created by KMS. "EXTERNAL" means to filter EXTERNAL type CMKs whose key material needs user import. "ALL" or unset means to query both types. Case-sensitive.</p>
 * @method void setOrigin(string $Origin) Set <p>Filter by CMK type. "TENCENT_KMS" means to filter CMKs whose key material is created by KMS. "EXTERNAL" means to filter EXTERNAL type CMKs whose key material needs user import. "ALL" or unset means to query both types. Case-sensitive.</p>
 * @method string getKeyUsage() Obtain <p>Filter by the KeyUsage of the CMK. ALL indicates filtering all. The parameters used can be: ALL, ENCRYPT_DECRYPT, ASYMMETRIC_DECRYPT_RSA_2048, ASYMMETRIC_DECRYPT_SM2, ASYMMETRIC_SIGN_VERIFY_SM2, ASYMMETRIC_SIGN_VERIFY_RSA_2048, or ASYMMETRIC_SIGN_VERIFY_ECC. If empty, it filters the ENCRYPT_DECRYPT type by default.</p>
 * @method void setKeyUsage(string $KeyUsage) Set <p>Filter by the KeyUsage of the CMK. ALL indicates filtering all. The parameters used can be: ALL, ENCRYPT_DECRYPT, ASYMMETRIC_DECRYPT_RSA_2048, ASYMMETRIC_DECRYPT_SM2, ASYMMETRIC_SIGN_VERIFY_SM2, ASYMMETRIC_SIGN_VERIFY_RSA_2048, or ASYMMETRIC_SIGN_VERIFY_ECC. If empty, it filters the ENCRYPT_DECRYPT type by default.</p>
 * @method array getTagFilters() Obtain <p>Tag filtering condition</p>
 * @method void setTagFilters(array $TagFilters) Set <p>Tag filtering condition</p>
 * @method string getHsmClusterId() Obtain <p>HSM Cluster ID corresponding to the KMS advanced edition (only applicable to KMS exclusive/managed service instances). When specifying a cluster ID, query the key list within the specified cluster. When specifying default, query the key list of the public cloud shared version. If empty, query all key lists by default, including cluster and non-cluster.</p>
 * @method void setHsmClusterId(string $HsmClusterId) Set <p>HSM Cluster ID corresponding to the KMS advanced edition (only applicable to KMS exclusive/managed service instances). When specifying a cluster ID, query the key list within the specified cluster. When specifying default, query the key list of the public cloud shared version. If empty, query all key lists by default, including cluster and non-cluster.</p>
 * @method array getMemberAccounts() Obtain <p>Array of member account information of the trusted service</p>
 * @method void setMemberAccounts(array $MemberAccounts) Set <p>Array of member account information of the trusted service</p>
 */
class ListKeyDetailRequest extends AbstractModel
{
    /**
     * @var integer <p>It means the same as the Offset in SQL queries, indicating that this retrieval starts from the Offset-th element of the sequentially arranged array. It defaults to 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>The meaning is consistent with the Limit in SQL queries, indicating that this time up to Limit elements can be retrieved. The default value is 10, and the maximum value is 200.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Filter by creator role. Default value 0 indicates CMKs created by the user, and 1 indicates CMKs automatically created by authorized other Cloud services.</p>
     */
    public $Role;

    /**
     * @var integer <p>Sort by CMK creation time. 0 indicates sort in descending order, and 1 indicates sort in ascending order.</p>
     */
    public $OrderType;

    /**
     * @var integer <p>Filter by CMK status. 0 indicates all CMKs, 1 indicates querying only Enabled CMKs, 2 indicates querying only Disabled CMKs, 3 indicates querying CMKs in PendingDelete state (keys in scheduled deletion status), 4 indicates querying CMKs in PendingImport state, and 5 indicates querying CMKs in Archived state.</p>
     */
    public $KeyState;

    /**
     * @var string <p>Perform a fuzzy match query by KeyId or Alias</p>
     */
    public $SearchKeyAlias;

    /**
     * @var string <p>Filter by CMK type. "TENCENT_KMS" means to filter CMKs whose key material is created by KMS. "EXTERNAL" means to filter EXTERNAL type CMKs whose key material needs user import. "ALL" or unset means to query both types. Case-sensitive.</p>
     */
    public $Origin;

    /**
     * @var string <p>Filter by the KeyUsage of the CMK. ALL indicates filtering all. The parameters used can be: ALL, ENCRYPT_DECRYPT, ASYMMETRIC_DECRYPT_RSA_2048, ASYMMETRIC_DECRYPT_SM2, ASYMMETRIC_SIGN_VERIFY_SM2, ASYMMETRIC_SIGN_VERIFY_RSA_2048, or ASYMMETRIC_SIGN_VERIFY_ECC. If empty, it filters the ENCRYPT_DECRYPT type by default.</p>
     */
    public $KeyUsage;

    /**
     * @var array <p>Tag filtering condition</p>
     */
    public $TagFilters;

    /**
     * @var string <p>HSM Cluster ID corresponding to the KMS advanced edition (only applicable to KMS exclusive/managed service instances). When specifying a cluster ID, query the key list within the specified cluster. When specifying default, query the key list of the public cloud shared version. If empty, query all key lists by default, including cluster and non-cluster.</p>
     */
    public $HsmClusterId;

    /**
     * @var array <p>Array of member account information of the trusted service</p>
     */
    public $MemberAccounts;

    /**
     * @param integer $Offset <p>It means the same as the Offset in SQL queries, indicating that this retrieval starts from the Offset-th element of the sequentially arranged array. It defaults to 0.</p>
     * @param integer $Limit <p>The meaning is consistent with the Limit in SQL queries, indicating that this time up to Limit elements can be retrieved. The default value is 10, and the maximum value is 200.</p>
     * @param integer $Role <p>Filter by creator role. Default value 0 indicates CMKs created by the user, and 1 indicates CMKs automatically created by authorized other Cloud services.</p>
     * @param integer $OrderType <p>Sort by CMK creation time. 0 indicates sort in descending order, and 1 indicates sort in ascending order.</p>
     * @param integer $KeyState <p>Filter by CMK status. 0 indicates all CMKs, 1 indicates querying only Enabled CMKs, 2 indicates querying only Disabled CMKs, 3 indicates querying CMKs in PendingDelete state (keys in scheduled deletion status), 4 indicates querying CMKs in PendingImport state, and 5 indicates querying CMKs in Archived state.</p>
     * @param string $SearchKeyAlias <p>Perform a fuzzy match query by KeyId or Alias</p>
     * @param string $Origin <p>Filter by CMK type. "TENCENT_KMS" means to filter CMKs whose key material is created by KMS. "EXTERNAL" means to filter EXTERNAL type CMKs whose key material needs user import. "ALL" or unset means to query both types. Case-sensitive.</p>
     * @param string $KeyUsage <p>Filter by the KeyUsage of the CMK. ALL indicates filtering all. The parameters used can be: ALL, ENCRYPT_DECRYPT, ASYMMETRIC_DECRYPT_RSA_2048, ASYMMETRIC_DECRYPT_SM2, ASYMMETRIC_SIGN_VERIFY_SM2, ASYMMETRIC_SIGN_VERIFY_RSA_2048, or ASYMMETRIC_SIGN_VERIFY_ECC. If empty, it filters the ENCRYPT_DECRYPT type by default.</p>
     * @param array $TagFilters <p>Tag filtering condition</p>
     * @param string $HsmClusterId <p>HSM Cluster ID corresponding to the KMS advanced edition (only applicable to KMS exclusive/managed service instances). When specifying a cluster ID, query the key list within the specified cluster. When specifying default, query the key list of the public cloud shared version. If empty, query all key lists by default, including cluster and non-cluster.</p>
     * @param array $MemberAccounts <p>Array of member account information of the trusted service</p>
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

        if (array_key_exists("MemberAccounts",$param) and $param["MemberAccounts"] !== null) {
            $this->MemberAccounts = [];
            foreach ($param["MemberAccounts"] as $key => $value){
                $obj = new MemberAccount();
                $obj->deserialize($value);
                array_push($this->MemberAccounts, $obj);
            }
        }
    }
}
