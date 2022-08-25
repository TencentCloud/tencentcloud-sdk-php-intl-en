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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveDomains response structure.
 *
 * @method integer getAllCount() Obtain Total number of results.
 * @method void setAllCount(integer $AllCount) Set Total number of results.
 * @method array getDomainList() Obtain List of domain name details.
 * @method void setDomainList(array $DomainList) Set List of domain name details.
 * @method integer getCreateLimitCount() Obtain The number of domain names that can be added
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreateLimitCount(integer $CreateLimitCount) Set The number of domain names that can be added
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getPlayTypeCount() Obtain The number of domains accelerated in the Chinese mainland, globally, and outside the Chinese mainland respectively.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPlayTypeCount(array $PlayTypeCount) Set The number of domains accelerated in the Chinese mainland, globally, and outside the Chinese mainland respectively.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeLiveDomainsResponse extends AbstractModel
{
    /**
     * @var integer Total number of results.
     */
    public $AllCount;

    /**
     * @var array List of domain name details.
     */
    public $DomainList;

    /**
     * @var integer The number of domain names that can be added
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CreateLimitCount;

    /**
     * @var array The number of domains accelerated in the Chinese mainland, globally, and outside the Chinese mainland respectively.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PlayTypeCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $AllCount Total number of results.
     * @param array $DomainList List of domain name details.
     * @param integer $CreateLimitCount The number of domain names that can be added
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $PlayTypeCount The number of domains accelerated in the Chinese mainland, globally, and outside the Chinese mainland respectively.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("AllCount",$param) and $param["AllCount"] !== null) {
            $this->AllCount = $param["AllCount"];
        }

        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = [];
            foreach ($param["DomainList"] as $key => $value){
                $obj = new DomainInfo();
                $obj->deserialize($value);
                array_push($this->DomainList, $obj);
            }
        }

        if (array_key_exists("CreateLimitCount",$param) and $param["CreateLimitCount"] !== null) {
            $this->CreateLimitCount = $param["CreateLimitCount"];
        }

        if (array_key_exists("PlayTypeCount",$param) and $param["PlayTypeCount"] !== null) {
            $this->PlayTypeCount = $param["PlayTypeCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
