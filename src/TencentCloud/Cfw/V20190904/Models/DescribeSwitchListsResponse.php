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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSwitchLists response structure.
 *
 * @method integer getTotal() Obtain Total entries
 * @method void setTotal(integer $Total) Set Total entries
 * @method array getData() Obtain List data
 * @method void setData(array $Data) Set List data
 * @method array getAreaLists() Obtain Region list
 * @method void setAreaLists(array $AreaLists) Set Region list
 * @method integer getOnNum() Obtain Number of enabled firewalls
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setOnNum(integer $OnNum) Set Number of enabled firewalls
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getOffNum() Obtain Number of disabled firewalls
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setOffNum(integer $OffNum) Set Number of disabled firewalls
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSwitchListsResponse extends AbstractModel
{
    /**
     * @var integer Total entries
     */
    public $Total;

    /**
     * @var array List data
     */
    public $Data;

    /**
     * @var array Region list
     */
    public $AreaLists;

    /**
     * @var integer Number of enabled firewalls
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $OnNum;

    /**
     * @var integer Number of disabled firewalls
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $OffNum;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Total Total entries
     * @param array $Data List data
     * @param array $AreaLists Region list
     * @param integer $OnNum Number of enabled firewalls
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $OffNum Number of disabled firewalls
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new SwitchListsData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("AreaLists",$param) and $param["AreaLists"] !== null) {
            $this->AreaLists = $param["AreaLists"];
        }

        if (array_key_exists("OnNum",$param) and $param["OnNum"] !== null) {
            $this->OnNum = $param["OnNum"];
        }

        if (array_key_exists("OffNum",$param) and $param["OffNum"] !== null) {
            $this->OffNum = $param["OffNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
