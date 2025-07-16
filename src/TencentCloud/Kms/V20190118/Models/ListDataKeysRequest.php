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
 * ListDataKeys request structure.
 *
 * @method integer getOffset() Obtain Meaning matches the Offset in SQL queries, indicates the retrieval starts from the Offset-th element in a sequentially arranged array, defaults to 0.
 * @method void setOffset(integer $Offset) Set Meaning matches the Offset in SQL queries, indicates the retrieval starts from the Offset-th element in a sequentially arranged array, defaults to 0.
 * @method integer getLimit() Obtain Specifies the maximum number of elements to retrieve, same as the Limit in SQL queries. default value is 10. maximum value is 200.
 * @method void setLimit(integer $Limit) Set Specifies the maximum number of elements to retrieve, same as the Limit in SQL queries. default value is 10. maximum value is 200.
 * @method integer getRole() Obtain Filter criteria based on the creator role. default 0 means data key created by oneself, 1 means data key automatically created by other cloud services.
 * @method void setRole(integer $Role) Set Filter criteria based on the creator role. default 0 means data key created by oneself, 1 means data key automatically created by other cloud services.
 * @method string getHsmClusterId() Obtain HSM cluster ID corresponding to KMS advanced edition (only applicable to KMS exclusive/managed service instance).
 * @method void setHsmClusterId(string $HsmClusterId) Set HSM cluster ID corresponding to KMS advanced edition (only applicable to KMS exclusive/managed service instance).
 */
class ListDataKeysRequest extends AbstractModel
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
     * @var integer Filter criteria based on the creator role. default 0 means data key created by oneself, 1 means data key automatically created by other cloud services.
     */
    public $Role;

    /**
     * @var string HSM cluster ID corresponding to KMS advanced edition (only applicable to KMS exclusive/managed service instance).
     */
    public $HsmClusterId;

    /**
     * @param integer $Offset Meaning matches the Offset in SQL queries, indicates the retrieval starts from the Offset-th element in a sequentially arranged array, defaults to 0.
     * @param integer $Limit Specifies the maximum number of elements to retrieve, same as the Limit in SQL queries. default value is 10. maximum value is 200.
     * @param integer $Role Filter criteria based on the creator role. default 0 means data key created by oneself, 1 means data key automatically created by other cloud services.
     * @param string $HsmClusterId HSM cluster ID corresponding to KMS advanced edition (only applicable to KMS exclusive/managed service instance).
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

        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }
    }
}
