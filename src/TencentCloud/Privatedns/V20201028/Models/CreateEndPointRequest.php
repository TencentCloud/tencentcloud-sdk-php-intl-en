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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEndPoint request structure.
 *
 * @method string getEndPointName() Obtain Endpoint name.
 * @method void setEndPointName(string $EndPointName) Set Endpoint name.
 * @method string getEndPointServiceId() Obtain Endpoint service ID (namely, VPC endpoint service ID).
 * @method void setEndPointServiceId(string $EndPointServiceId) Set Endpoint service ID (namely, VPC endpoint service ID).
 * @method string getEndPointRegion() Obtain Endpoint region, which should be consistent with the region of the endpoint service.
 * @method void setEndPointRegion(string $EndPointRegion) Set Endpoint region, which should be consistent with the region of the endpoint service.
 * @method integer getIpNum() Obtain Number of endpoint IP addresses.
 * @method void setIpNum(integer $IpNum) Set Number of endpoint IP addresses.
 */
class CreateEndPointRequest extends AbstractModel
{
    /**
     * @var string Endpoint name.
     */
    public $EndPointName;

    /**
     * @var string Endpoint service ID (namely, VPC endpoint service ID).
     */
    public $EndPointServiceId;

    /**
     * @var string Endpoint region, which should be consistent with the region of the endpoint service.
     */
    public $EndPointRegion;

    /**
     * @var integer Number of endpoint IP addresses.
     */
    public $IpNum;

    /**
     * @param string $EndPointName Endpoint name.
     * @param string $EndPointServiceId Endpoint service ID (namely, VPC endpoint service ID).
     * @param string $EndPointRegion Endpoint region, which should be consistent with the region of the endpoint service.
     * @param integer $IpNum Number of endpoint IP addresses.
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
        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("EndPointRegion",$param) and $param["EndPointRegion"] !== null) {
            $this->EndPointRegion = $param["EndPointRegion"];
        }

        if (array_key_exists("IpNum",$param) and $param["IpNum"] !== null) {
            $this->IpNum = $param["IpNum"];
        }
    }
}
