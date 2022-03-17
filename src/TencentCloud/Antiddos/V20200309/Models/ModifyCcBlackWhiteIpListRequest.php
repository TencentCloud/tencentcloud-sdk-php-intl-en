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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCcBlackWhiteIpList request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method array getIpList() Obtain List of IPs
 * @method void setIpList(array $IpList) Set List of IPs
 * @method string getType() Obtain IP type. Valid values: `black` (blocklisted IP), `white`(allowlisted IP).
 * @method void setType(string $Type) Set IP type. Valid values: `black` (blocklisted IP), `white`(allowlisted IP).
 * @method string getPolicyId() Obtain Policy ID
 * @method void setPolicyId(string $PolicyId) Set Policy ID
 */
class ModifyCcBlackWhiteIpListRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var array List of IPs
     */
    public $IpList;

    /**
     * @var string IP type. Valid values: `black` (blocklisted IP), `white`(allowlisted IP).
     */
    public $Type;

    /**
     * @var string Policy ID
     */
    public $PolicyId;

    /**
     * @param string $InstanceId Instance ID
     * @param array $IpList List of IPs
     * @param string $Type IP type. Valid values: `black` (blocklisted IP), `white`(allowlisted IP).
     * @param string $PolicyId Policy ID
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = [];
            foreach ($param["IpList"] as $key => $value){
                $obj = new IpSegment();
                $obj->deserialize($value);
                array_push($this->IpList, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
