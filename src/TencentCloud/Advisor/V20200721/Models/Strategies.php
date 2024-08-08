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
namespace TencentCloud\Advisor\V20200721\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information about assessment items
 *
 * @method integer getStrategyId() Obtain Assessment item ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyId(integer $StrategyId) Set Assessment item ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Assessment item name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Assessment item name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDesc() Obtain Assessment item description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDesc(string $Desc) Set Assessment item description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProduct() Obtain Product ID corresponding to the assessment item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProduct(string $Product) Set Product ID corresponding to the assessment item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProductDesc() Obtain Product name corresponding to the assessment item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProductDesc(string $ProductDesc) Set Product name corresponding to the assessment item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRepair() Obtain Optimization suggestions for the assessment item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRepair(string $Repair) Set Optimization suggestions for the assessment item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getGroupId() Obtain Category ID of the assessment item 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupId(integer $GroupId) Set Category ID of the assessment item 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGroupName() Obtain Category name of the assessment item 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupName(string $GroupName) Set Category name of the assessment item 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getConditions() Obtain Risk list of the assessment item 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConditions(array $Conditions) Set Risk list of the assessment item 
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Strategies extends AbstractModel
{
    /**
     * @var integer Assessment item ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StrategyId;

    /**
     * @var string Assessment item name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Assessment item description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Desc;

    /**
     * @var string Product ID corresponding to the assessment item
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Product;

    /**
     * @var string Product name corresponding to the assessment item
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProductDesc;

    /**
     * @var string Optimization suggestions for the assessment item
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Repair;

    /**
     * @var integer Category ID of the assessment item 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupId;

    /**
     * @var string Category name of the assessment item 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupName;

    /**
     * @var array Risk list of the assessment item 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Conditions;

    /**
     * @param integer $StrategyId Assessment item ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Assessment item name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Desc Assessment item description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Product Product ID corresponding to the assessment item
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProductDesc Product name corresponding to the assessment item
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Repair Optimization suggestions for the assessment item
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $GroupId Category ID of the assessment item 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GroupName Category name of the assessment item 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Conditions Risk list of the assessment item 
Note: This field may return null, indicating that no valid values can be obtained.
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
