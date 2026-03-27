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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBasicDeviceStatus request structure.
 *
 * @method array getIpList() Obtain List of IP resources
 * @method void setIpList(array $IpList) Set List of IP resources
 * @method array getIdList() Obtain Pass id for domain-bound resources
 * @method void setIdList(array $IdList) Set Pass id for domain-bound resources
 * @method integer getFilterRegion() Obtain region name
 * @method void setFilterRegion(integer $FilterRegion) Set region name
 * @method array getCnameWafIdList() Obtain CNAME WAF resource
 * @method void setCnameWafIdList(array $CnameWafIdList) Set CNAME WAF resource
 */
class DescribeBasicDeviceStatusRequest extends AbstractModel
{
    /**
     * @var array List of IP resources
     */
    public $IpList;

    /**
     * @var array Pass id for domain-bound resources
     */
    public $IdList;

    /**
     * @var integer region name
     */
    public $FilterRegion;

    /**
     * @var array CNAME WAF resource
     */
    public $CnameWafIdList;

    /**
     * @param array $IpList List of IP resources
     * @param array $IdList Pass id for domain-bound resources
     * @param integer $FilterRegion region name
     * @param array $CnameWafIdList CNAME WAF resource
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
        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("IdList",$param) and $param["IdList"] !== null) {
            $this->IdList = $param["IdList"];
        }

        if (array_key_exists("FilterRegion",$param) and $param["FilterRegion"] !== null) {
            $this->FilterRegion = $param["FilterRegion"];
        }

        if (array_key_exists("CnameWafIdList",$param) and $param["CnameWafIdList"] !== null) {
            $this->CnameWafIdList = $param["CnameWafIdList"];
        }
    }
}
