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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentInstallCommand request structure.
 *
 * @method boolean getIsCloud() Obtain Whether Tencent Cloud
 * @method void setIsCloud(boolean $IsCloud) Set Whether Tencent Cloud
 * @method string getNetType() Obtain Network type: basic - basic network; private - VPC; public - public network; direct - direct connect
 * @method void setNetType(string $NetType) Set Network type: basic - basic network; private - VPC; public - public network; direct - direct connect
 * @method string getRegionCode() Obtain Region identifier, required when NetType=direct
 * @method void setRegionCode(string $RegionCode) Set Region identifier, required when NetType=direct
 * @method string getVpcId() Obtain VpcId, required when NetType=direct
 * @method void setVpcId(string $VpcId) Set VpcId, required when NetType=direct
 * @method array getTagIds() Obtain Tag ID list, effective only when IsCloud=false
 * @method void setTagIds(array $TagIds) Set Tag ID list, effective only when IsCloud=false
 * @method string getExpireDate() Obtain Command validity period, required for non-Tencent Cloud instances
 * @method void setExpireDate(string $ExpireDate) Set Command validity period, required for non-Tencent Cloud instances
 * @method string getVip() Obtain VIP Accessed via Proxy Mode
 * @method void setVip(string $Vip) Set VIP Accessed via Proxy Mode
 */
class DescribeAgentInstallCommandRequest extends AbstractModel
{
    /**
     * @var boolean Whether Tencent Cloud
     */
    public $IsCloud;

    /**
     * @var string Network type: basic - basic network; private - VPC; public - public network; direct - direct connect
     */
    public $NetType;

    /**
     * @var string Region identifier, required when NetType=direct
     */
    public $RegionCode;

    /**
     * @var string VpcId, required when NetType=direct
     */
    public $VpcId;

    /**
     * @var array Tag ID list, effective only when IsCloud=false
     */
    public $TagIds;

    /**
     * @var string Command validity period, required for non-Tencent Cloud instances
     */
    public $ExpireDate;

    /**
     * @var string VIP Accessed via Proxy Mode
     */
    public $Vip;

    /**
     * @param boolean $IsCloud Whether Tencent Cloud
     * @param string $NetType Network type: basic - basic network; private - VPC; public - public network; direct - direct connect
     * @param string $RegionCode Region identifier, required when NetType=direct
     * @param string $VpcId VpcId, required when NetType=direct
     * @param array $TagIds Tag ID list, effective only when IsCloud=false
     * @param string $ExpireDate Command validity period, required for non-Tencent Cloud instances
     * @param string $Vip VIP Accessed via Proxy Mode
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
        if (array_key_exists("IsCloud",$param) and $param["IsCloud"] !== null) {
            $this->IsCloud = $param["IsCloud"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }

        if (array_key_exists("ExpireDate",$param) and $param["ExpireDate"] !== null) {
            $this->ExpireDate = $param["ExpireDate"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }
    }
}
