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
 * ListDataKeyDetail request structure.
 *
 * @method integer getOffset() Obtain <p>It means the same as the Offset in SQL queries, indicating that this retrieval starts from the Offset-th element of the sequentially arranged array. It defaults to 0.</p>
 * @method void setOffset(integer $Offset) Set <p>It means the same as the Offset in SQL queries, indicating that this retrieval starts from the Offset-th element of the sequentially arranged array. It defaults to 0.</p>
 * @method integer getLimit() Obtain <p>The meaning is consistent with the Limit in SQL queries, indicating that this time up to Limit elements can be retrieved. The default value is 10, and the maximum value is 200.</p>
 * @method void setLimit(integer $Limit) Set <p>The meaning is consistent with the Limit in SQL queries, indicating that this time up to Limit elements can be retrieved. The default value is 10, and the maximum value is 200.</p>
 * @method integer getRole() Obtain <p>Filter by creator role. Default value 0 indicates data keys created by the user, and 1 indicates data keys automatically created by authorized other Cloud services.</p>
 * @method void setRole(integer $Role) Set <p>Filter by creator role. Default value 0 indicates data keys created by the user, and 1 indicates data keys automatically created by authorized other Cloud services.</p>
 * @method integer getOrderType() Obtain <p>Sort by DataKey creation time. 0 indicates sort in descending order, and 1 indicates sort in ascending order.</p>
 * @method void setOrderType(integer $OrderType) Set <p>Sort by DataKey creation time. 0 indicates sort in descending order, and 1 indicates sort in ascending order.</p>
 * @method integer getKeyState() Obtain <p>Filter by DataKey status. 0 indicates all DataKeys, 1 indicates querying only Enabled DataKeys, 2 indicates querying only Disabled DataKeys, and 3 indicates querying DataKeys in PendingDelete state (keys in scheduled deletion status).</p>
 * @method void setKeyState(integer $KeyState) Set <p>Filter by DataKey status. 0 indicates all DataKeys, 1 indicates querying only Enabled DataKeys, 2 indicates querying only Disabled DataKeys, and 3 indicates querying DataKeys in PendingDelete state (keys in scheduled deletion status).</p>
 * @method string getSearchKeyAlias() Obtain <p>Perform a fuzzy match query by DataKeyId or DataKeyName</p>
 * @method void setSearchKeyAlias(string $SearchKeyAlias) Set <p>Perform a fuzzy match query by DataKeyId or DataKeyName</p>
 * @method string getOrigin() Obtain <p>Filter by DateKey type. "TENCENT_KMS" filters data keys with key material created by KMS. "EXTERNAL" filters EXTERNAL type data keys with key material to import. "ALL" or leave unset queries both types. Case-sensitive.</p>
 * @method void setOrigin(string $Origin) Set <p>Filter by DateKey type. "TENCENT_KMS" filters data keys with key material created by KMS. "EXTERNAL" filters EXTERNAL type data keys with key material to import. "ALL" or leave unset queries both types. Case-sensitive.</p>
 * @method string getHsmClusterId() Obtain <p>HSM Cluster ID corresponding to the KMS advanced edition. When specifying a cluster ID, query the key list within the specified cluster. When specifying default, query the key list of the public cloud shared version. If empty, query all key lists by default, including cluster and non-cluster.</p>
 * @method void setHsmClusterId(string $HsmClusterId) Set <p>HSM Cluster ID corresponding to the KMS advanced edition. When specifying a cluster ID, query the key list within the specified cluster. When specifying default, query the key list of the public cloud shared version. If empty, query all key lists by default, including cluster and non-cluster.</p>
 * @method string getKeyId() Obtain <p>Root key globally unique identifier</p>
 * @method void setKeyId(string $KeyId) Set <p>Root key globally unique identifier</p>
 * @method integer getDataKeyLen() Obtain <p>Length of the data key</p>
 * @method void setDataKeyLen(integer $DataKeyLen) Set <p>Length of the data key</p>
 * @method array getTagFilters() Obtain <p>Tag filtering condition</p>
 * @method void setTagFilters(array $TagFilters) Set <p>Tag filtering condition</p>
 * @method array getMemberAccounts() Obtain <p>Member account information array</p>
 * @method void setMemberAccounts(array $MemberAccounts) Set <p>Member account information array</p>
 */
class ListDataKeyDetailRequest extends AbstractModel
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
     * @var integer <p>Filter by creator role. Default value 0 indicates data keys created by the user, and 1 indicates data keys automatically created by authorized other Cloud services.</p>
     */
    public $Role;

    /**
     * @var integer <p>Sort by DataKey creation time. 0 indicates sort in descending order, and 1 indicates sort in ascending order.</p>
     */
    public $OrderType;

    /**
     * @var integer <p>Filter by DataKey status. 0 indicates all DataKeys, 1 indicates querying only Enabled DataKeys, 2 indicates querying only Disabled DataKeys, and 3 indicates querying DataKeys in PendingDelete state (keys in scheduled deletion status).</p>
     */
    public $KeyState;

    /**
     * @var string <p>Perform a fuzzy match query by DataKeyId or DataKeyName</p>
     */
    public $SearchKeyAlias;

    /**
     * @var string <p>Filter by DateKey type. "TENCENT_KMS" filters data keys with key material created by KMS. "EXTERNAL" filters EXTERNAL type data keys with key material to import. "ALL" or leave unset queries both types. Case-sensitive.</p>
     */
    public $Origin;

    /**
     * @var string <p>HSM Cluster ID corresponding to the KMS advanced edition. When specifying a cluster ID, query the key list within the specified cluster. When specifying default, query the key list of the public cloud shared version. If empty, query all key lists by default, including cluster and non-cluster.</p>
     */
    public $HsmClusterId;

    /**
     * @var string <p>Root key globally unique identifier</p>
     */
    public $KeyId;

    /**
     * @var integer <p>Length of the data key</p>
     */
    public $DataKeyLen;

    /**
     * @var array <p>Tag filtering condition</p>
     */
    public $TagFilters;

    /**
     * @var array <p>Member account information array</p>
     */
    public $MemberAccounts;

    /**
     * @param integer $Offset <p>It means the same as the Offset in SQL queries, indicating that this retrieval starts from the Offset-th element of the sequentially arranged array. It defaults to 0.</p>
     * @param integer $Limit <p>The meaning is consistent with the Limit in SQL queries, indicating that this time up to Limit elements can be retrieved. The default value is 10, and the maximum value is 200.</p>
     * @param integer $Role <p>Filter by creator role. Default value 0 indicates data keys created by the user, and 1 indicates data keys automatically created by authorized other Cloud services.</p>
     * @param integer $OrderType <p>Sort by DataKey creation time. 0 indicates sort in descending order, and 1 indicates sort in ascending order.</p>
     * @param integer $KeyState <p>Filter by DataKey status. 0 indicates all DataKeys, 1 indicates querying only Enabled DataKeys, 2 indicates querying only Disabled DataKeys, and 3 indicates querying DataKeys in PendingDelete state (keys in scheduled deletion status).</p>
     * @param string $SearchKeyAlias <p>Perform a fuzzy match query by DataKeyId or DataKeyName</p>
     * @param string $Origin <p>Filter by DateKey type. "TENCENT_KMS" filters data keys with key material created by KMS. "EXTERNAL" filters EXTERNAL type data keys with key material to import. "ALL" or leave unset queries both types. Case-sensitive.</p>
     * @param string $HsmClusterId <p>HSM Cluster ID corresponding to the KMS advanced edition. When specifying a cluster ID, query the key list within the specified cluster. When specifying default, query the key list of the public cloud shared version. If empty, query all key lists by default, including cluster and non-cluster.</p>
     * @param string $KeyId <p>Root key globally unique identifier</p>
     * @param integer $DataKeyLen <p>Length of the data key</p>
     * @param array $TagFilters <p>Tag filtering condition</p>
     * @param array $MemberAccounts <p>Member account information array</p>
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

        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("DataKeyLen",$param) and $param["DataKeyLen"] !== null) {
            $this->DataKeyLen = $param["DataKeyLen"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
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
