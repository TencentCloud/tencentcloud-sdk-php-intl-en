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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGroupDomainConfig response structure.
 *
 * @method array getAccessRegionList() Obtain Nearest access configuration list of domain name resolution.
 * @method void setAccessRegionList(array $AccessRegionList) Set Nearest access configuration list of domain name resolution.
 * @method string getDefaultDnsIp() Obtain Default accesses Ip.
 * @method void setDefaultDnsIp(string $DefaultDnsIp) Set Default accesses Ip.
 * @method string getGroupId() Obtain Connection group ID.
 * @method void setGroupId(string $GroupId) Set Connection group ID.
 * @method integer getAccessRegionCount() Obtain Total number of configuration of access regions.
 * @method void setAccessRegionCount(integer $AccessRegionCount) Set Total number of configuration of access regions.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeGroupDomainConfigResponse extends AbstractModel
{
    /**
     * @var array Nearest access configuration list of domain name resolution.
     */
    public $AccessRegionList;

    /**
     * @var string Default accesses Ip.
     */
    public $DefaultDnsIp;

    /**
     * @var string Connection group ID.
     */
    public $GroupId;

    /**
     * @var integer Total number of configuration of access regions.
     */
    public $AccessRegionCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $AccessRegionList Nearest access configuration list of domain name resolution.
     * @param string $DefaultDnsIp Default accesses Ip.
     * @param string $GroupId Connection group ID.
     * @param integer $AccessRegionCount Total number of configuration of access regions.
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
        if (array_key_exists("AccessRegionList",$param) and $param["AccessRegionList"] !== null) {
            $this->AccessRegionList = [];
            foreach ($param["AccessRegionList"] as $key => $value){
                $obj = new DomainAccessRegionDict();
                $obj->deserialize($value);
                array_push($this->AccessRegionList, $obj);
            }
        }

        if (array_key_exists("DefaultDnsIp",$param) and $param["DefaultDnsIp"] !== null) {
            $this->DefaultDnsIp = $param["DefaultDnsIp"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("AccessRegionCount",$param) and $param["AccessRegionCount"] !== null) {
            $this->AccessRegionCount = $param["AccessRegionCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
