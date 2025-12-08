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
 * @method integer getOffset() Obtain Meaning matches the Offset in SQL queries, indicates the retrieval starts from the Offset-th element in a sequentially arranged array, defaults to 0.
 * @method void setOffset(integer $Offset) Set Meaning matches the Offset in SQL queries, indicates the retrieval starts from the Offset-th element in a sequentially arranged array, defaults to 0.
 * @method integer getLimit() Obtain Specifies the maximum number of elements to retrieve, same as the Limit in SQL queries. default value is 10. maximum value is 200.
 * @method void setLimit(integer $Limit) Set Specifies the maximum number of elements to retrieve, same as the Limit in SQL queries. default value is 10. maximum value is 200.
 * @method integer getRole() Obtain Filter by creator role. default 0 means data keys created by the user, 1 means data keys automatically created by authorized cloud services.
 * @method void setRole(integer $Role) Set Filter by creator role. default 0 means data keys created by the user, 1 means data keys automatically created by authorized cloud services.
 * @method integer getOrderType() Obtain Sorts according to the creation time of DataKey. 0 indicates descending sort. 1 indicates ascending sort.
 * @method void setOrderType(integer $OrderType) Set Sorts according to the creation time of DataKey. 0 indicates descending sort. 1 indicates ascending sort.
 * @method integer getKeyState() Obtain Filter based on DataKey state. 0 means all datakeys, 1 means querying only Enabled datakeys, 2 means querying only Disabled datakeys, 3 means querying datakeys in PendingDelete state (keys in scheduled deletion status).
 * @method void setKeyState(integer $KeyState) Set Filter based on DataKey state. 0 means all datakeys, 1 means querying only Enabled datakeys, 2 means querying only Disabled datakeys, 3 means querying datakeys in PendingDelete state (keys in scheduled deletion status).
 * @method string getSearchKeyAlias() Obtain Performs a fuzzy match query based on DataKeyId or DataKeyName.
 * @method void setSearchKeyAlias(string $SearchKeyAlias) Set Performs a fuzzy match query based on DataKeyId or DataKeyName.
 * @method string getOrigin() Obtain Filters data keys by DateKey type. "TENCENT_KMS" filters data keys with key material created by KMS. "EXTERNAL" filters EXTERNAL type data keys requiring user-imported key material. "ALL" or leave unset queries both types. case-sensitive.
 * @method void setOrigin(string $Origin) Set Filters data keys by DateKey type. "TENCENT_KMS" filters data keys with key material created by KMS. "EXTERNAL" filters EXTERNAL type data keys requiring user-imported key material. "ALL" or leave unset queries both types. case-sensitive.
 * @method string getHsmClusterId() Obtain HSM cluster ID corresponding to KMS advanced edition.
 * @method void setHsmClusterId(string $HsmClusterId) Set HSM cluster ID corresponding to KMS advanced edition.
 * @method string getKeyId() Obtain Specifies the globally unique identifier of the root key.
 * @method void setKeyId(string $KeyId) Set Specifies the globally unique identifier of the root key.
 * @method integer getDataKeyLen() Obtain Length of the data key.
 * @method void setDataKeyLen(integer $DataKeyLen) Set Length of the data key.
 * @method array getTagFilters() Obtain Tag filtering conditions.
 * @method void setTagFilters(array $TagFilters) Set Tag filtering conditions.
 */
class ListDataKeyDetailRequest extends AbstractModel
{
    /**
     * @var integer Meaning matches the Offset in SQL queries, indicates the retrieval starts from the Offset-th element in a sequentially arranged array, defaults to 0.
     */
    public $Offset;

    /**
     * @var integer Specifies the maximum number of elements to retrieve, same as the Limit in SQL queries. default value is 10. maximum value is 200.
     */
    public $Limit;

    /**
     * @var integer Filter by creator role. default 0 means data keys created by the user, 1 means data keys automatically created by authorized cloud services.
     */
    public $Role;

    /**
     * @var integer Sorts according to the creation time of DataKey. 0 indicates descending sort. 1 indicates ascending sort.
     */
    public $OrderType;

    /**
     * @var integer Filter based on DataKey state. 0 means all datakeys, 1 means querying only Enabled datakeys, 2 means querying only Disabled datakeys, 3 means querying datakeys in PendingDelete state (keys in scheduled deletion status).
     */
    public $KeyState;

    /**
     * @var string Performs a fuzzy match query based on DataKeyId or DataKeyName.
     */
    public $SearchKeyAlias;

    /**
     * @var string Filters data keys by DateKey type. "TENCENT_KMS" filters data keys with key material created by KMS. "EXTERNAL" filters EXTERNAL type data keys requiring user-imported key material. "ALL" or leave unset queries both types. case-sensitive.
     */
    public $Origin;

    /**
     * @var string HSM cluster ID corresponding to KMS advanced edition.
     */
    public $HsmClusterId;

    /**
     * @var string Specifies the globally unique identifier of the root key.
     */
    public $KeyId;

    /**
     * @var integer Length of the data key.
     */
    public $DataKeyLen;

    /**
     * @var array Tag filtering conditions.
     */
    public $TagFilters;

    /**
     * @param integer $Offset Meaning matches the Offset in SQL queries, indicates the retrieval starts from the Offset-th element in a sequentially arranged array, defaults to 0.
     * @param integer $Limit Specifies the maximum number of elements to retrieve, same as the Limit in SQL queries. default value is 10. maximum value is 200.
     * @param integer $Role Filter by creator role. default 0 means data keys created by the user, 1 means data keys automatically created by authorized cloud services.
     * @param integer $OrderType Sorts according to the creation time of DataKey. 0 indicates descending sort. 1 indicates ascending sort.
     * @param integer $KeyState Filter based on DataKey state. 0 means all datakeys, 1 means querying only Enabled datakeys, 2 means querying only Disabled datakeys, 3 means querying datakeys in PendingDelete state (keys in scheduled deletion status).
     * @param string $SearchKeyAlias Performs a fuzzy match query based on DataKeyId or DataKeyName.
     * @param string $Origin Filters data keys by DateKey type. "TENCENT_KMS" filters data keys with key material created by KMS. "EXTERNAL" filters EXTERNAL type data keys requiring user-imported key material. "ALL" or leave unset queries both types. case-sensitive.
     * @param string $HsmClusterId HSM cluster ID corresponding to KMS advanced edition.
     * @param string $KeyId Specifies the globally unique identifier of the root key.
     * @param integer $DataKeyLen Length of the data key.
     * @param array $TagFilters Tag filtering conditions.
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
    }
}
