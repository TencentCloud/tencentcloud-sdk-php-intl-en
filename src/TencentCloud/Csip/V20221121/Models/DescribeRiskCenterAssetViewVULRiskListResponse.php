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
 * DescribeRiskCenterAssetViewVULRiskList response structure.
 *
 * @method integer getTotalCount() Obtain Total number of entries
 * @method void setTotalCount(integer $TotalCount) Set Total number of entries
 * @method array getData() Obtain List of vulnerabilities
 * @method void setData(array $Data) Set List of vulnerabilities
 * @method array getStatusLists() Obtain List of status
 * @method void setStatusLists(array $StatusLists) Set List of status
 * @method array getLevelLists() Obtain List of risk levels
 * @method void setLevelLists(array $LevelLists) Set List of risk levels
 * @method array getFromLists() Obtain List of check source
 * @method void setFromLists(array $FromLists) Set List of check source
 * @method array getVULTypeLists() Obtain List of vulnerability types
 * @method void setVULTypeLists(array $VULTypeLists) Set List of vulnerability types
 * @method array getInstanceTypeLists() Obtain List of asset types
 * @method void setInstanceTypeLists(array $InstanceTypeLists) Set List of asset types
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRiskCenterAssetViewVULRiskListResponse extends AbstractModel
{
    /**
     * @var integer Total number of entries
     */
    public $TotalCount;

    /**
     * @var array List of vulnerabilities
     */
    public $Data;

    /**
     * @var array List of status
     */
    public $StatusLists;

    /**
     * @var array List of risk levels
     */
    public $LevelLists;

    /**
     * @var array List of check source
     */
    public $FromLists;

    /**
     * @var array List of vulnerability types
     */
    public $VULTypeLists;

    /**
     * @var array List of asset types
     */
    public $InstanceTypeLists;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of entries
     * @param array $Data List of vulnerabilities
     * @param array $StatusLists List of status
     * @param array $LevelLists List of risk levels
     * @param array $FromLists List of check source
     * @param array $VULTypeLists List of vulnerability types
     * @param array $InstanceTypeLists List of asset types
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new AssetViewVULRisk();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("StatusLists",$param) and $param["StatusLists"] !== null) {
            $this->StatusLists = [];
            foreach ($param["StatusLists"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->StatusLists, $obj);
            }
        }

        if (array_key_exists("LevelLists",$param) and $param["LevelLists"] !== null) {
            $this->LevelLists = [];
            foreach ($param["LevelLists"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->LevelLists, $obj);
            }
        }

        if (array_key_exists("FromLists",$param) and $param["FromLists"] !== null) {
            $this->FromLists = [];
            foreach ($param["FromLists"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->FromLists, $obj);
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

        if (array_key_exists("InstanceTypeLists",$param) and $param["InstanceTypeLists"] !== null) {
            $this->InstanceTypeLists = [];
            foreach ($param["InstanceTypeLists"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->InstanceTypeLists, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
