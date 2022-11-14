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
 * DescribeSecurityGroupList response structure.
 *
 * @method integer getTotal() Obtain Total rules in the list
 * @method void setTotal(integer $Total) Set Total rules in the list
 * @method array getData() Obtain Security group rule list data
 * @method void setData(array $Data) Set Security group rule list data
 * @method integer getAllTotal() Obtain Total entries excluding the filtered ones
 * @method void setAllTotal(integer $AllTotal) Set Total entries excluding the filtered ones
 * @method integer getEnable() Obtain All access control rules enabled/disabled
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setEnable(integer $Enable) Set All access control rules enabled/disabled
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSecurityGroupListResponse extends AbstractModel
{
    /**
     * @var integer Total rules in the list
     */
    public $Total;

    /**
     * @var array Security group rule list data
     */
    public $Data;

    /**
     * @var integer Total entries excluding the filtered ones
     */
    public $AllTotal;

    /**
     * @var integer All access control rules enabled/disabled
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Enable;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Total Total rules in the list
     * @param array $Data Security group rule list data
     * @param integer $AllTotal Total entries excluding the filtered ones
     * @param integer $Enable All access control rules enabled/disabled
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
                $obj = new SecurityGroupListData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("AllTotal",$param) and $param["AllTotal"] !== null) {
            $this->AllTotal = $param["AllTotal"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
