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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityPolicies request structure.
 *
 * @method array getFilters() Obtain Filter condition list for filtering security policies that meet the specified conditions. Multiple filter conditions are in an "AND" relationship with each other.

**Supported filter conditions:**
- **SecurityPolicyNames**: Filter by security policy name. Fuzzy matching is supported.
- **tag:tag-key**: Filter by tag key-value pair. Replace tag-key with the actual tag key. For example, `tag:env` means filtering by the tag key `env`.

**Description:** Each filter condition supports a maximum of 10 values.

 * @method void setFilters(array $Filters) Set Filter condition list for filtering security policies that meet the specified conditions. Multiple filter conditions are in an "AND" relationship with each other.

**Supported filter conditions:**
- **SecurityPolicyNames**: Filter by security policy name. Fuzzy matching is supported.
- **tag:tag-key**: Filter by tag key-value pair. Replace tag-key with the actual tag key. For example, `tag:env` means filtering by the tag key `env`.

**Description:** Each filter condition supports a maximum of 10 values.

 * @method integer getMaxResults() Obtain Maximum number of results returned for a single request. For pagination queries, use together with NextToken.

**Value range:** from 1 to 100.

**Default value:** 20.

 * @method void setMaxResults(integer $MaxResults) Set Maximum number of results returned for a single request. For pagination queries, use together with NextToken.

**Value range:** from 1 to 100.

**Default value:** 20.

 * @method string getNextToken() Obtain Token for the paging query start. Used to obtain the result data on the next page.

**Instructions:**
-No need to set this parameter for the initial query.
- If the last query returned NextToken, it means there is more data. Input this value to retrieve the next page.
-If the last query did not return NextToken or returned empty, it means the current page is the last page.

 * @method void setNextToken(string $NextToken) Set Token for the paging query start. Used to obtain the result data on the next page.

**Instructions:**
-No need to set this parameter for the initial query.
- If the last query returned NextToken, it means there is more data. Input this value to retrieve the next page.
-If the last query did not return NextToken or returned empty, it means the current page is the last page.

 * @method array getSecurityPolicyIds() Obtain Security policy ID list. The ID format is `tls-` followed by 8 alphanumeric characters.
 * @method void setSecurityPolicyIds(array $SecurityPolicyIds) Set Security policy ID list. The ID format is `tls-` followed by 8 alphanumeric characters.
 */
class DescribeSecurityPoliciesRequest extends AbstractModel
{
    /**
     * @var array Filter condition list for filtering security policies that meet the specified conditions. Multiple filter conditions are in an "AND" relationship with each other.

**Supported filter conditions:**
- **SecurityPolicyNames**: Filter by security policy name. Fuzzy matching is supported.
- **tag:tag-key**: Filter by tag key-value pair. Replace tag-key with the actual tag key. For example, `tag:env` means filtering by the tag key `env`.

**Description:** Each filter condition supports a maximum of 10 values.

     */
    public $Filters;

    /**
     * @var integer Maximum number of results returned for a single request. For pagination queries, use together with NextToken.

**Value range:** from 1 to 100.

**Default value:** 20.

     */
    public $MaxResults;

    /**
     * @var string Token for the paging query start. Used to obtain the result data on the next page.

**Instructions:**
-No need to set this parameter for the initial query.
- If the last query returned NextToken, it means there is more data. Input this value to retrieve the next page.
-If the last query did not return NextToken or returned empty, it means the current page is the last page.

     */
    public $NextToken;

    /**
     * @var array Security policy ID list. The ID format is `tls-` followed by 8 alphanumeric characters.
     */
    public $SecurityPolicyIds;

    /**
     * @param array $Filters Filter condition list for filtering security policies that meet the specified conditions. Multiple filter conditions are in an "AND" relationship with each other.

**Supported filter conditions:**
- **SecurityPolicyNames**: Filter by security policy name. Fuzzy matching is supported.
- **tag:tag-key**: Filter by tag key-value pair. Replace tag-key with the actual tag key. For example, `tag:env` means filtering by the tag key `env`.

**Description:** Each filter condition supports a maximum of 10 values.

     * @param integer $MaxResults Maximum number of results returned for a single request. For pagination queries, use together with NextToken.

**Value range:** from 1 to 100.

**Default value:** 20.

     * @param string $NextToken Token for the paging query start. Used to obtain the result data on the next page.

**Instructions:**
-No need to set this parameter for the initial query.
- If the last query returned NextToken, it means there is more data. Input this value to retrieve the next page.
-If the last query did not return NextToken or returned empty, it means the current page is the last page.

     * @param array $SecurityPolicyIds Security policy ID list. The ID format is `tls-` followed by 8 alphanumeric characters.
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("SecurityPolicyIds",$param) and $param["SecurityPolicyIds"] !== null) {
            $this->SecurityPolicyIds = $param["SecurityPolicyIds"];
        }
    }
}
