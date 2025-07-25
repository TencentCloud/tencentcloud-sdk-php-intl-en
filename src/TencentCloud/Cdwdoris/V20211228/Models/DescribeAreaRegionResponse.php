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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAreaRegion response structure.
 *
 * @method array getItems() Obtain Region list
 * @method void setItems(array $Items) Set Region list
 * @method array getFrontEndRules() Obtain Front-end rule description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFrontEndRules(array $FrontEndRules) Set Front-end rule description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAvailableWhiteListNames() Obtain Return available allowlist names
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAvailableWhiteListNames(array $AvailableWhiteListNames) Set Return available allowlist names
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeAreaRegionResponse extends AbstractModel
{
    /**
     * @var array Region list
     */
    public $Items;

    /**
     * @var array Front-end rule description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FrontEndRules;

    /**
     * @var array Return available allowlist names
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AvailableWhiteListNames;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Items Region list
     * @param array $FrontEndRules Front-end rule description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AvailableWhiteListNames Return available allowlist names
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new RegionAreaInfo();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("FrontEndRules",$param) and $param["FrontEndRules"] !== null) {
            $this->FrontEndRules = [];
            foreach ($param["FrontEndRules"] as $key => $value){
                $obj = new FrontEndRule();
                $obj->deserialize($value);
                array_push($this->FrontEndRules, $obj);
            }
        }

        if (array_key_exists("AvailableWhiteListNames",$param) and $param["AvailableWhiteListNames"] !== null) {
            $this->AvailableWhiteListNames = $param["AvailableWhiteListNames"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
