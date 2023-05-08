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
 * DescribeNatAcRule response structure.
 *
 * @method integer getTotal() Obtain Total number of entries.
 * @method void setTotal(integer $Total) Set Total number of entries.
 * @method array getData() Obtain NAT access control list data.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setData(array $Data) Set NAT access control list data.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAllTotal() Obtain Total number of entries returned without filtering.
 * @method void setAllTotal(integer $AllTotal) Set Total number of entries returned without filtering.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeNatAcRuleResponse extends AbstractModel
{
    /**
     * @var integer Total number of entries.
     */
    public $Total;

    /**
     * @var array NAT access control list data.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Data;

    /**
     * @var integer Total number of entries returned without filtering.
     */
    public $AllTotal;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Total Total number of entries.
     * @param array $Data NAT access control list data.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AllTotal Total number of entries returned without filtering.
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
                $obj = new DescAcItem();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("AllTotal",$param) and $param["AllTotal"] !== null) {
            $this->AllTotal = $param["AllTotal"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
