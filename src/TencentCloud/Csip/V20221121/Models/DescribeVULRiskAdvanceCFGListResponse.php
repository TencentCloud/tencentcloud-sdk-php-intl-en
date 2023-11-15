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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVULRiskAdvanceCFGList response structure.
 *
 * @method array getData() Obtain List of configuration items
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setData(array $Data) Set List of configuration items
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total number of results
 * @method void setTotalCount(integer $TotalCount) Set Total number of results
 * @method array getRiskLevelLists() Obtain List of risk levels
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRiskLevelLists(array $RiskLevelLists) Set List of risk levels
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getVULTypeLists() Obtain List of vulnerabilities types
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVULTypeLists(array $VULTypeLists) Set List of vulnerabilities types
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getCheckFromLists() Obtain List of check source
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setCheckFromLists(array $CheckFromLists) Set List of check source
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeVULRiskAdvanceCFGListResponse extends AbstractModel
{
    /**
     * @var array List of configuration items
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Data;

    /**
     * @var integer Total number of results
     */
    public $TotalCount;

    /**
     * @var array List of risk levels
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $RiskLevelLists;

    /**
     * @var array List of vulnerabilities types
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $VULTypeLists;

    /**
     * @var array List of check source
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $CheckFromLists;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Data List of configuration items
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total number of results
     * @param array $RiskLevelLists List of risk levels
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $VULTypeLists List of vulnerabilities types
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $CheckFromLists List of check source
Note: This field may return·null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new VULRiskAdvanceCFGList();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RiskLevelLists",$param) and $param["RiskLevelLists"] !== null) {
            $this->RiskLevelLists = [];
            foreach ($param["RiskLevelLists"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->RiskLevelLists, $obj);
            }
        }

        if (array_key_exists("VULTypeLists",$param) and $param["VULTypeLists"] !== null) {
            $this->VULTypeLists = [];
            foreach ($param["VULTypeLists"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->VULTypeLists, $obj);
            }
        }

        if (array_key_exists("CheckFromLists",$param) and $param["CheckFromLists"] !== null) {
            $this->CheckFromLists = [];
            foreach ($param["CheckFromLists"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->CheckFromLists, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
