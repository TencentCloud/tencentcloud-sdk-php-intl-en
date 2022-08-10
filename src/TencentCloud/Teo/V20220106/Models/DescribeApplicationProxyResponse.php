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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplicationProxy response structure.
 *
 * @method array getData() Obtain List of data
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setData(array $Data) Set List of data
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getTotalCount() Obtain Total number of records
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number of records
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getQuota() Obtain Disused
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setQuota(integer $Quota) Set Disused
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getIpCount() Obtain When `PlatType` is `ip`, it indicates the number of proxies that schedule via Anycast IP.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setIpCount(integer $IpCount) Set When `PlatType` is `ip`, it indicates the number of proxies that schedule via Anycast IP.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getDomainCount() Obtain When `PlatType` is `domain`, it indicates the number of proxies that schedule via CNAME.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDomainCount(integer $DomainCount) Set When `PlatType` is `domain`, it indicates the number of proxies that schedule via CNAME.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeApplicationProxyResponse extends AbstractModel
{
    /**
     * @var array List of data
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Data;

    /**
     * @var integer Total number of records
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var integer Disused
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Quota;

    /**
     * @var integer When `PlatType` is `ip`, it indicates the number of proxies that schedule via Anycast IP.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $IpCount;

    /**
     * @var integer When `PlatType` is `domain`, it indicates the number of proxies that schedule via CNAME.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $DomainCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Data List of data
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $TotalCount Total number of records
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Quota Disused
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $IpCount When `PlatType` is `ip`, it indicates the number of proxies that schedule via Anycast IP.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $DomainCount When `PlatType` is `domain`, it indicates the number of proxies that schedule via CNAME.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
                $obj = new ApplicationProxy();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Quota",$param) and $param["Quota"] !== null) {
            $this->Quota = $param["Quota"];
        }

        if (array_key_exists("IpCount",$param) and $param["IpCount"] !== null) {
            $this->IpCount = $param["IpCount"];
        }

        if (array_key_exists("DomainCount",$param) and $param["DomainCount"] !== null) {
            $this->DomainCount = $param["DomainCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
