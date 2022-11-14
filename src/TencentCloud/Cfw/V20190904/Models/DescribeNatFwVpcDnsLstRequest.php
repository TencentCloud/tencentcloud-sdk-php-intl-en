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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNatFwVpcDnsLst request structure.
 *
 * @method string getNatFwInsId() Obtain NAT firewall instance ID
 * @method void setNatFwInsId(string $NatFwInsId) Set NAT firewall instance ID
 * @method string getNatInsIdFilter() Obtain Content filtered by NAT firewall, separated with ","
 * @method void setNatInsIdFilter(string $NatInsIdFilter) Set Content filtered by NAT firewall, separated with ","
 * @method integer getOffset() Obtain Number of pages
 * @method void setOffset(integer $Offset) Set Number of pages
 * @method integer getLimit() Obtain Maximum entries per page
 * @method void setLimit(integer $Limit) Set Maximum entries per page
 */
class DescribeNatFwVpcDnsLstRequest extends AbstractModel
{
    /**
     * @var string NAT firewall instance ID
     */
    public $NatFwInsId;

    /**
     * @var string Content filtered by NAT firewall, separated with ","
     */
    public $NatInsIdFilter;

    /**
     * @var integer Number of pages
     */
    public $Offset;

    /**
     * @var integer Maximum entries per page
     */
    public $Limit;

    /**
     * @param string $NatFwInsId NAT firewall instance ID
     * @param string $NatInsIdFilter Content filtered by NAT firewall, separated with ","
     * @param integer $Offset Number of pages
     * @param integer $Limit Maximum entries per page
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
        if (array_key_exists("NatFwInsId",$param) and $param["NatFwInsId"] !== null) {
            $this->NatFwInsId = $param["NatFwInsId"];
        }

        if (array_key_exists("NatInsIdFilter",$param) and $param["NatInsIdFilter"] !== null) {
            $this->NatInsIdFilter = $param["NatInsIdFilter"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
