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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC information of a Private DNS account
 *
 * @method string getUniqVpcId() Obtain VpcId: vpc-xadsafsdasd
 * @method void setUniqVpcId(string $UniqVpcId) Set VpcId: vpc-xadsafsdasd
 * @method string getRegion() Obtain VPC region: ap-guangzhou, ap-shanghai
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set VPC region: ap-guangzhou, ap-shanghai
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getUin() Obtain VPC account: 123456789
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set VPC account: 123456789
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getVpcName() Obtain VPC name: testname
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVpcName(string $VpcName) Set VPC name: testname
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class AccountVpcInfo extends AbstractModel
{
    /**
     * @var string VpcId: vpc-xadsafsdasd
     */
    public $UniqVpcId;

    /**
     * @var string VPC region: ap-guangzhou, ap-shanghai
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string VPC account: 123456789
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var string VPC name: testname
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $VpcName;

    /**
     * @param string $UniqVpcId VpcId: vpc-xadsafsdasd
     * @param string $Region VPC region: ap-guangzhou, ap-shanghai
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Uin VPC account: 123456789
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $VpcName VPC name: testname
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }
    }
}
