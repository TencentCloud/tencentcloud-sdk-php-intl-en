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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDspmCkafkaRouteList request structure.
 *
 * @method integer getVipType() Obtain CKafka access type.
 * @method void setVipType(integer $VipType) Set CKafka access type.
 * @method string getRegionId() Obtain CKafka instance region.
 * @method void setRegionId(string $RegionId) Set CKafka instance region.
 * @method string getInstanceId() Obtain CKafka instance ID.
 * @method void setInstanceId(string $InstanceId) Set CKafka instance ID.
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getInstanceName() Obtain CKafka instance name.
 * @method void setInstanceName(string $InstanceName) Set CKafka instance name.
 */
class DescribeDspmCkafkaRouteListRequest extends AbstractModel
{
    /**
     * @var integer CKafka access type.
     */
    public $VipType;

    /**
     * @var string CKafka instance region.
     */
    public $RegionId;

    /**
     * @var string CKafka instance ID.
     */
    public $InstanceId;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string CKafka instance name.
     */
    public $InstanceName;

    /**
     * @param integer $VipType CKafka access type.
     * @param string $RegionId CKafka instance region.
     * @param string $InstanceId CKafka instance ID.
     * @param array $MemberId <p>Group account member id</p>
     * @param string $InstanceName CKafka instance name.
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
        if (array_key_exists("VipType",$param) and $param["VipType"] !== null) {
            $this->VipType = $param["VipType"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
