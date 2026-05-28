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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cost dimension periodic data
 *
 * @method string getName() Obtain <p>Function name by dimensional classification</p>
 * @method void setName(string $Name) Set <p>Function name by dimensional classification</p>
 * @method string getCode() Obtain <p>code corresponding to the function name after dimensional classification</p>
 * @method void setCode(string $Code) Set <p>code corresponding to the function name after dimensional classification</p>
 * @method string getSumCost() Obtain <p>Sum value of the current group</p>
 * @method void setSumCost(string $SumCost) Set <p>Sum value of the current group</p>
 * @method array getItemDetail() Obtain <p>Amount statistics by date grouping</p>
 * @method void setItemDetail(array $ItemDetail) Set <p>Amount statistics by date grouping</p>
 */
class DimensionPeriodData extends AbstractModel
{
    /**
     * @var string <p>Function name by dimensional classification</p>
     */
    public $Name;

    /**
     * @var string <p>code corresponding to the function name after dimensional classification</p>
     */
    public $Code;

    /**
     * @var string <p>Sum value of the current group</p>
     */
    public $SumCost;

    /**
     * @var array <p>Amount statistics by date grouping</p>
     */
    public $ItemDetail;

    /**
     * @param string $Name <p>Function name by dimensional classification</p>
     * @param string $Code <p>code corresponding to the function name after dimensional classification</p>
     * @param string $SumCost <p>Sum value of the current group</p>
     * @param array $ItemDetail <p>Amount statistics by date grouping</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("SumCost",$param) and $param["SumCost"] !== null) {
            $this->SumCost = $param["SumCost"];
        }

        if (array_key_exists("ItemDetail",$param) and $param["ItemDetail"] !== null) {
            $this->ItemDetail = [];
            foreach ($param["ItemDetail"] as $key => $value){
                $obj = new PeriodItemDetail();
                $obj->deserialize($value);
                array_push($this->ItemDetail, $obj);
            }
        }
    }
}
