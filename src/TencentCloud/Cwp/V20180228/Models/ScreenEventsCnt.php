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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Intrusion detection statistics
 *
 * @method string getTitle() Obtain Displayed content: Total number of pending risks and total number of affected assets
 * @method void setTitle(string $Title) Set Displayed content: Total number of pending risks and total number of affected assets
 * @method integer getTotal() Obtain Total number of events
 * @method void setTotal(integer $Total) Set Total number of events
 * @method array getCategory() Obtain name: Specific type of the displayed content, including attack event, potential risk, compromised asset, and potentially risky asset
Value: event count after statistics
 * @method void setCategory(array $Category) Set name: Specific type of the displayed content, including attack event, potential risk, compromised asset, and potentially risky asset
Value: event count after statistics
 */
class ScreenEventsCnt extends AbstractModel
{
    /**
     * @var string Displayed content: Total number of pending risks and total number of affected assets
     */
    public $Title;

    /**
     * @var integer Total number of events
     */
    public $Total;

    /**
     * @var array name: Specific type of the displayed content, including attack event, potential risk, compromised asset, and potentially risky asset
Value: event count after statistics
     */
    public $Category;

    /**
     * @param string $Title Displayed content: Total number of pending risks and total number of affected assets
     * @param integer $Total Total number of events
     * @param array $Category name: Specific type of the displayed content, including attack event, potential risk, compromised asset, and potentially risky asset
Value: event count after statistics
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = [];
            foreach ($param["Category"] as $key => $value){
                $obj = new ScreenNameValue();
                $obj->deserialize($value);
                array_push($this->Category, $obj);
            }
        }
    }
}
