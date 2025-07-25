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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetRecentMachineInfo response structure.
 *
 * @method array getTotalList() Obtain List of total assets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalList(array $TotalList) Set List of total assets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLiveList() Obtain List of online assets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLiveList(array $LiveList) Set List of online assets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getOfflineList() Obtain List of offline assets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOfflineList(array $OfflineList) Set List of offline assets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRiskList() Obtain List of risky assets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskList(array $RiskList) Set List of risky assets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeAssetRecentMachineInfoResponse extends AbstractModel
{
    /**
     * @var array List of total assets
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalList;

    /**
     * @var array List of online assets
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LiveList;

    /**
     * @var array List of offline assets
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OfflineList;

    /**
     * @var array List of risky assets
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskList;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $TotalList List of total assets
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $LiveList List of online assets
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $OfflineList List of offline assets
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RiskList List of risky assets
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("TotalList",$param) and $param["TotalList"] !== null) {
            $this->TotalList = [];
            foreach ($param["TotalList"] as $key => $value){
                $obj = new AssetKeyVal();
                $obj->deserialize($value);
                array_push($this->TotalList, $obj);
            }
        }

        if (array_key_exists("LiveList",$param) and $param["LiveList"] !== null) {
            $this->LiveList = [];
            foreach ($param["LiveList"] as $key => $value){
                $obj = new AssetKeyVal();
                $obj->deserialize($value);
                array_push($this->LiveList, $obj);
            }
        }

        if (array_key_exists("OfflineList",$param) and $param["OfflineList"] !== null) {
            $this->OfflineList = [];
            foreach ($param["OfflineList"] as $key => $value){
                $obj = new AssetKeyVal();
                $obj->deserialize($value);
                array_push($this->OfflineList, $obj);
            }
        }

        if (array_key_exists("RiskList",$param) and $param["RiskList"] !== null) {
            $this->RiskList = [];
            foreach ($param["RiskList"] as $key => $value){
                $obj = new AssetKeyVal();
                $obj->deserialize($value);
                array_push($this->RiskList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
