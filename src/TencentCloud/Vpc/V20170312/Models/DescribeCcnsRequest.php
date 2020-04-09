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
 * DescribeCcns request structure.
 *
 * @method array getCcnIds() Obtain The CCN instance ID, such as `ccn-f49l6u0z`. Each request can have a maximum of 100 instances. `CcnIds` and `Filters` cannot be specified at the same time
 * @method void setCcnIds(array $CcnIds) Set The CCN instance ID, such as `ccn-f49l6u0z`. Each request can have a maximum of 100 instances. `CcnIds` and `Filters` cannot be specified at the same time
 * @method array getFilters() Obtain Filter conditions. `CcnIds` and `Filters` cannot be specified at the same time.
<li>ccn-id - String - (Filter condition) The unique ID of the CCN, such as `vpc-f49l6u0z`.</li>
<li>ccn-name - String - (Filter condition) The CCN name.</li>
<li>ccn-description - String - (Filter condition) CCN description.</li>
<li>state - String - (Filter condition) The instance status. 'ISOLATED': Isolated (the account is in arrears and the service is suspended.) 'AVAILABLE': Running.</li>
<li>tag-key - String - Required: no - (Filter condition) Filters by tag key.</li>
<li>`tag:tag-key` - String - Required: no - (Filter condition) Filters by tag key pair. For this parameter, `tag-key` will be replaced with a specific tag key. For more information, see this example: **Querying the list of CCNs bound to tags**.</li>
 * @method void setFilters(array $Filters) Set Filter conditions. `CcnIds` and `Filters` cannot be specified at the same time.
<li>ccn-id - String - (Filter condition) The unique ID of the CCN, such as `vpc-f49l6u0z`.</li>
<li>ccn-name - String - (Filter condition) The CCN name.</li>
<li>ccn-description - String - (Filter condition) CCN description.</li>
<li>state - String - (Filter condition) The instance status. 'ISOLATED': Isolated (the account is in arrears and the service is suspended.) 'AVAILABLE': Running.</li>
<li>tag-key - String - Required: no - (Filter condition) Filters by tag key.</li>
<li>`tag:tag-key` - String - Required: no - (Filter condition) Filters by tag key pair. For this parameter, `tag-key` will be replaced with a specific tag key. For more information, see this example: **Querying the list of CCNs bound to tags**.</li>
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain The returned quantity
 * @method void setLimit(integer $Limit) Set The returned quantity
 * @method string getOrderField() Obtain Order fields support `CcnId`, `CcnName`, `CreateTime`, `State`, and `QosLevel`
 * @method void setOrderField(string $OrderField) Set Order fields support `CcnId`, `CcnName`, `CreateTime`, `State`, and `QosLevel`
 * @method string getOrderDirection() Obtain Order methods. Ascending: `ASC`, Descending: `DESC`.
 * @method void setOrderDirection(string $OrderDirection) Set Order methods. Ascending: `ASC`, Descending: `DESC`.
 */
class DescribeCcnsRequest extends AbstractModel
{
    /**
     * @var array The CCN instance ID, such as `ccn-f49l6u0z`. Each request can have a maximum of 100 instances. `CcnIds` and `Filters` cannot be specified at the same time
     */
    public $CcnIds;

    /**
     * @var array Filter conditions. `CcnIds` and `Filters` cannot be specified at the same time.
<li>ccn-id - String - (Filter condition) The unique ID of the CCN, such as `vpc-f49l6u0z`.</li>
<li>ccn-name - String - (Filter condition) The CCN name.</li>
<li>ccn-description - String - (Filter condition) CCN description.</li>
<li>state - String - (Filter condition) The instance status. 'ISOLATED': Isolated (the account is in arrears and the service is suspended.) 'AVAILABLE': Running.</li>
<li>tag-key - String - Required: no - (Filter condition) Filters by tag key.</li>
<li>`tag:tag-key` - String - Required: no - (Filter condition) Filters by tag key pair. For this parameter, `tag-key` will be replaced with a specific tag key. For more information, see this example: **Querying the list of CCNs bound to tags**.</li>
     */
    public $Filters;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer The returned quantity
     */
    public $Limit;

    /**
     * @var string Order fields support `CcnId`, `CcnName`, `CreateTime`, `State`, and `QosLevel`
     */
    public $OrderField;

    /**
     * @var string Order methods. Ascending: `ASC`, Descending: `DESC`.
     */
    public $OrderDirection;

    /**
     * @param array $CcnIds The CCN instance ID, such as `ccn-f49l6u0z`. Each request can have a maximum of 100 instances. `CcnIds` and `Filters` cannot be specified at the same time
     * @param array $Filters Filter conditions. `CcnIds` and `Filters` cannot be specified at the same time.
<li>ccn-id - String - (Filter condition) The unique ID of the CCN, such as `vpc-f49l6u0z`.</li>
<li>ccn-name - String - (Filter condition) The CCN name.</li>
<li>ccn-description - String - (Filter condition) CCN description.</li>
<li>state - String - (Filter condition) The instance status. 'ISOLATED': Isolated (the account is in arrears and the service is suspended.) 'AVAILABLE': Running.</li>
<li>tag-key - String - Required: no - (Filter condition) Filters by tag key.</li>
<li>`tag:tag-key` - String - Required: no - (Filter condition) Filters by tag key pair. For this parameter, `tag-key` will be replaced with a specific tag key. For more information, see this example: **Querying the list of CCNs bound to tags**.</li>
     * @param integer $Offset Offset
     * @param integer $Limit The returned quantity
     * @param string $OrderField Order fields support `CcnId`, `CcnName`, `CreateTime`, `State`, and `QosLevel`
     * @param string $OrderDirection Order methods. Ascending: `ASC`, Descending: `DESC`.
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
        if (array_key_exists("CcnIds",$param) and $param["CcnIds"] !== null) {
            $this->CcnIds = $param["CcnIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }
    }
}
