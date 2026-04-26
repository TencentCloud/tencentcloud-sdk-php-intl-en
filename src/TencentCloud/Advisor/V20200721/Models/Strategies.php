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
namespace TencentCloud\Advisor\V20200721\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information about assessment items
 *
 * @method integer getStrategyId() Obtain Assessment item ID
 * @method void setStrategyId(integer $StrategyId) Set Assessment item ID
 * @method string getName() Obtain Assessment item name.
 * @method void setName(string $Name) Set Assessment item name.
 * @method string getDesc() Obtain Assessment item description.
 * @method void setDesc(string $Desc) Set Assessment item description.
 * @method string getProduct() Obtain Product ID corresponding to the assessment item.
 * @method void setProduct(string $Product) Set Product ID corresponding to the assessment item.
 * @method string getProductDesc() Obtain Assessment item corresponding product name.
 * @method void setProductDesc(string $ProductDesc) Set Assessment item corresponding product name.
 * @method string getRepair() Obtain Specifies optimization suggestions for the assessment item.
 * @method void setRepair(string $Repair) Set Specifies optimization suggestions for the assessment item.
 * @method integer getGroupId() Obtain Assessment item category ID.
 * @method void setGroupId(integer $GroupId) Set Assessment item category ID.
 * @method string getGroupName() Obtain Specifies the category name of the assessment item.
 * @method void setGroupName(string $GroupName) Set Specifies the category name of the assessment item.
 * @method array getConditions() Obtain Specifies the evaluation item risk list.
 * @method void setConditions(array $Conditions) Set Specifies the evaluation item risk list.
 */
class Strategies extends AbstractModel
{
    /**
     * @var integer Assessment item ID
     */
    public $StrategyId;

    /**
     * @var string Assessment item name.
     */
    public $Name;

    /**
     * @var string Assessment item description.
     */
    public $Desc;

    /**
     * @var string Product ID corresponding to the assessment item.
     */
    public $Product;

    /**
     * @var string Assessment item corresponding product name.
     */
    public $ProductDesc;

    /**
     * @var string Specifies optimization suggestions for the assessment item.
     */
    public $Repair;

    /**
     * @var integer Assessment item category ID.
     */
    public $GroupId;

    /**
     * @var string Specifies the category name of the assessment item.
     */
    public $GroupName;

    /**
     * @var array Specifies the evaluation item risk list.
     */
    public $Conditions;

    /**
     * @param integer $StrategyId Assessment item ID
     * @param string $Name Assessment item name.
     * @param string $Desc Assessment item description.
     * @param string $Product Product ID corresponding to the assessment item.
     * @param string $ProductDesc Assessment item corresponding product name.
     * @param string $Repair Specifies optimization suggestions for the assessment item.
     * @param integer $GroupId Assessment item category ID.
     * @param string $GroupName Specifies the category name of the assessment item.
     * @param array $Conditions Specifies the evaluation item risk list.
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
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("ProductDesc",$param) and $param["ProductDesc"] !== null) {
            $this->ProductDesc = $param["ProductDesc"];
        }

        if (array_key_exists("Repair",$param) and $param["Repair"] !== null) {
            $this->Repair = $param["Repair"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new Conditions();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }
    }
}
