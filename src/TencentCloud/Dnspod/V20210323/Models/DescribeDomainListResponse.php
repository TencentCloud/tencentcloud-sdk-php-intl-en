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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomainList response structure.
 *
 * @method DomainCountInfo getDomainCountInfo() Obtain Statistics on the list page
 * @method void setDomainCountInfo(DomainCountInfo $DomainCountInfo) Set Statistics on the list page
 * @method array getDomainList() Obtain Domain list
 * @method void setDomainList(array $DomainList) Set Domain list
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDomainListResponse extends AbstractModel
{
    /**
     * @var DomainCountInfo Statistics on the list page
     */
    public $DomainCountInfo;

    /**
     * @var array Domain list
     */
    public $DomainList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param DomainCountInfo $DomainCountInfo Statistics on the list page
     * @param array $DomainList Domain list
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
        if (array_key_exists("DomainCountInfo",$param) and $param["DomainCountInfo"] !== null) {
            $this->DomainCountInfo = new DomainCountInfo();
            $this->DomainCountInfo->deserialize($param["DomainCountInfo"]);
        }

        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = [];
            foreach ($param["DomainList"] as $key => $value){
                $obj = new DomainListItem();
                $obj->deserialize($value);
                array_push($this->DomainList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
