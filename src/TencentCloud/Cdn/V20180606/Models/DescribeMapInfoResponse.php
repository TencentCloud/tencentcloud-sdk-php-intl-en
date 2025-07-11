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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMapInfo response structure.
 *
 * @method array getMapInfoList() Obtain Array of mappings.
 * @method void setMapInfoList(array $MapInfoList) Set Array of mappings.
 * @method array getServerRegionRelation() Obtain Mapping relationship between server region ID and sub-region ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setServerRegionRelation(array $ServerRegionRelation) Set Mapping relationship between server region ID and sub-region ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getClientRegionRelation() Obtain Mapping relationship between client region ID and sub-region ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setClientRegionRelation(array $ClientRegionRelation) Set Mapping relationship between client region ID and sub-region ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeMapInfoResponse extends AbstractModel
{
    /**
     * @var array Array of mappings.
     */
    public $MapInfoList;

    /**
     * @var array Mapping relationship between server region ID and sub-region ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ServerRegionRelation;

    /**
     * @var array Mapping relationship between client region ID and sub-region ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ClientRegionRelation;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $MapInfoList Array of mappings.
     * @param array $ServerRegionRelation Mapping relationship between server region ID and sub-region ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $ClientRegionRelation Mapping relationship between client region ID and sub-region ID
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("MapInfoList",$param) and $param["MapInfoList"] !== null) {
            $this->MapInfoList = [];
            foreach ($param["MapInfoList"] as $key => $value){
                $obj = new MapInfo();
                $obj->deserialize($value);
                array_push($this->MapInfoList, $obj);
            }
        }

        if (array_key_exists("ServerRegionRelation",$param) and $param["ServerRegionRelation"] !== null) {
            $this->ServerRegionRelation = [];
            foreach ($param["ServerRegionRelation"] as $key => $value){
                $obj = new RegionMapRelation();
                $obj->deserialize($value);
                array_push($this->ServerRegionRelation, $obj);
            }
        }

        if (array_key_exists("ClientRegionRelation",$param) and $param["ClientRegionRelation"] !== null) {
            $this->ClientRegionRelation = [];
            foreach ($param["ClientRegionRelation"] as $key => $value){
                $obj = new RegionMapRelation();
                $obj->deserialize($value);
                array_push($this->ClientRegionRelation, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
