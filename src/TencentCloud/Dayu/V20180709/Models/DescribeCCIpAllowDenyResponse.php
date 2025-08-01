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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCCIpAllowDeny response structure.
 *
 * @method array getData() Obtain This field has been replaced by `RecordList` and should not be used
 * @method void setData(array $Data) Set This field has been replaced by `RecordList` and should not be used
 * @method integer getTotal() Obtain Number of records
 * @method void setTotal(integer $Total) Set Number of records
 * @method array getRecordList() Obtain Returned Blocklist/allowlist record,
If "Key":"ip", "Value": IP;
If "Key":"domain", "Value": domain name.
If "Key":"type", "Value" can be `white` (allowlist) or `black` (blocklist).
If "Key":"protocol", "Value": CC protection protocol (HTTP or HTTPS);
 * @method void setRecordList(array $RecordList) Set Returned Blocklist/allowlist record,
If "Key":"ip", "Value": IP;
If "Key":"domain", "Value": domain name.
If "Key":"type", "Value" can be `white` (allowlist) or `black` (blocklist).
If "Key":"protocol", "Value": CC protection protocol (HTTP or HTTPS);
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeCCIpAllowDenyResponse extends AbstractModel
{
    /**
     * @var array This field has been replaced by `RecordList` and should not be used
     */
    public $Data;

    /**
     * @var integer Number of records
     */
    public $Total;

    /**
     * @var array Returned Blocklist/allowlist record,
If "Key":"ip", "Value": IP;
If "Key":"domain", "Value": domain name.
If "Key":"type", "Value" can be `white` (allowlist) or `black` (blocklist).
If "Key":"protocol", "Value": CC protection protocol (HTTP or HTTPS);
     */
    public $RecordList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Data This field has been replaced by `RecordList` and should not be used
     * @param integer $Total Number of records
     * @param array $RecordList Returned Blocklist/allowlist record,
If "Key":"ip", "Value": IP;
If "Key":"domain", "Value": domain name.
If "Key":"type", "Value" can be `white` (allowlist) or `black` (blocklist).
If "Key":"protocol", "Value": CC protection protocol (HTTP or HTTPS);
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
                $obj = new KeyValue();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RecordList",$param) and $param["RecordList"] !== null) {
            $this->RecordList = [];
            foreach ($param["RecordList"] as $key => $value){
                $obj = new KeyValueRecord();
                $obj->deserialize($value);
                array_push($this->RecordList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
