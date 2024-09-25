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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomainCountInfo response structure.
 *
 * @method integer getAllDomain() Obtain Total number of domain names
 * @method void setAllDomain(integer $AllDomain) Set Total number of domain names
 * @method string getUpdateTime() Obtain Last discovery time
 * @method void setUpdateTime(string $UpdateTime) Set Last discovery time
 * @method integer getWafDomainCount() Obtain Total number of connected domains
 * @method void setWafDomainCount(integer $WafDomainCount) Set Total number of connected domains
 * @method integer getLeftDomainCount() Obtain Remaining quota
 * @method void setLeftDomainCount(integer $LeftDomainCount) Set Remaining quota
 * @method integer getOpenWafDomain() Obtain Number of protected domain names
 * @method void setOpenWafDomain(integer $OpenWafDomain) Set Number of protected domain names
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeDomainCountInfoResponse extends AbstractModel
{
    /**
     * @var integer Total number of domain names
     */
    public $AllDomain;

    /**
     * @var string Last discovery time
     */
    public $UpdateTime;

    /**
     * @var integer Total number of connected domains
     */
    public $WafDomainCount;

    /**
     * @var integer Remaining quota
     */
    public $LeftDomainCount;

    /**
     * @var integer Number of protected domain names
     */
    public $OpenWafDomain;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $AllDomain Total number of domain names
     * @param string $UpdateTime Last discovery time
     * @param integer $WafDomainCount Total number of connected domains
     * @param integer $LeftDomainCount Remaining quota
     * @param integer $OpenWafDomain Number of protected domain names
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
        if (array_key_exists("AllDomain",$param) and $param["AllDomain"] !== null) {
            $this->AllDomain = $param["AllDomain"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("WafDomainCount",$param) and $param["WafDomainCount"] !== null) {
            $this->WafDomainCount = $param["WafDomainCount"];
        }

        if (array_key_exists("LeftDomainCount",$param) and $param["LeftDomainCount"] !== null) {
            $this->LeftDomainCount = $param["LeftDomainCount"];
        }

        if (array_key_exists("OpenWafDomain",$param) and $param["OpenWafDomain"] !== null) {
            $this->OpenWafDomain = $param["OpenWafDomain"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
