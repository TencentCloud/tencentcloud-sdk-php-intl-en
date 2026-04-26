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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Monthly overview of a cost allocation bill
 *
 * @method integer getId() Obtain Cost allocation unit ID
 * @method void setId(integer $Id) Set Cost allocation unit ID
 * @method string getName() Obtain Name of a cost allocation unit
 * @method void setName(string $Name) Set Name of a cost allocation unit
 * @method string getTreeNodeUniqKey() Obtain Unique identifier of a cost allocation unit
 * @method void setTreeNodeUniqKey(string $TreeNodeUniqKey) Set Unique identifier of a cost allocation unit
 * @method integer getSymbol() Obtain Billing unit including a rule flag
0 - No rule exists.
1 - Both collection rules and allocation rules exist.
2 - Only collection rules exist.
3 - Only allocation rules exist.
 * @method void setSymbol(integer $Symbol) Set Billing unit including a rule flag
0 - No rule exists.
1 - Both collection rules and allocation rules exist.
2 - Only collection rules exist.
3 - Only allocation rules exist.
 * @method array getChildren() Obtain Detailed monthly overview of a sub-unit
 * @method void setChildren(array $Children) Set Detailed monthly overview of a sub-unit
 * @method AllocationMonthOverviewDetail getDetail() Obtain Monthly overview amount details of a cost allocation bill
 * @method void setDetail(AllocationMonthOverviewDetail $Detail) Set Monthly overview amount details of a cost allocation bill
 */
class AllocationOverviewNode extends AbstractModel
{
    /**
     * @var integer Cost allocation unit ID
     */
    public $Id;

    /**
     * @var string Name of a cost allocation unit
     */
    public $Name;

    /**
     * @var string Unique identifier of a cost allocation unit
     */
    public $TreeNodeUniqKey;

    /**
     * @var integer Billing unit including a rule flag
0 - No rule exists.
1 - Both collection rules and allocation rules exist.
2 - Only collection rules exist.
3 - Only allocation rules exist.
     */
    public $Symbol;

    /**
     * @var array Detailed monthly overview of a sub-unit
     */
    public $Children;

    /**
     * @var AllocationMonthOverviewDetail Monthly overview amount details of a cost allocation bill
     */
    public $Detail;

    /**
     * @param integer $Id Cost allocation unit ID
     * @param string $Name Name of a cost allocation unit
     * @param string $TreeNodeUniqKey Unique identifier of a cost allocation unit
     * @param integer $Symbol Billing unit including a rule flag
0 - No rule exists.
1 - Both collection rules and allocation rules exist.
2 - Only collection rules exist.
3 - Only allocation rules exist.
     * @param array $Children Detailed monthly overview of a sub-unit
     * @param AllocationMonthOverviewDetail $Detail Monthly overview amount details of a cost allocation bill
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TreeNodeUniqKey",$param) and $param["TreeNodeUniqKey"] !== null) {
            $this->TreeNodeUniqKey = $param["TreeNodeUniqKey"];
        }

        if (array_key_exists("Symbol",$param) and $param["Symbol"] !== null) {
            $this->Symbol = $param["Symbol"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new AllocationOverviewNode();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new AllocationMonthOverviewDetail();
            $this->Detail->deserialize($param["Detail"]);
        }
    }
}
