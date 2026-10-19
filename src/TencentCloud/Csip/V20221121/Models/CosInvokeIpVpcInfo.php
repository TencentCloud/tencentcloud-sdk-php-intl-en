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
 * Source ip vpc information for cos calls
 *
 * @method string getUin() Obtain uin of the account to which the vpc belongs
 * @method void setUin(string $Uin) Set uin of the account to which the vpc belongs
 * @method integer getAppId() Obtain App ID of the VPC.
 * @method void setAppId(integer $AppId) Set App ID of the VPC.
 * @method string getNickName() Obtain Nickname.
 * @method void setNickName(string $NickName) Set Nickname.
 * @method string getVpcId() Obtain VPC ID information
 * @method void setVpcId(string $VpcId) Set VPC ID information
 * @method string getVpcName() Obtain VPC name
 * @method void setVpcName(string $VpcName) Set VPC name
 */
class CosInvokeIpVpcInfo extends AbstractModel
{
    /**
     * @var string uin of the account to which the vpc belongs
     */
    public $Uin;

    /**
     * @var integer App ID of the VPC.
     */
    public $AppId;

    /**
     * @var string Nickname.
     */
    public $NickName;

    /**
     * @var string VPC ID information
     */
    public $VpcId;

    /**
     * @var string VPC name
     */
    public $VpcName;

    /**
     * @param string $Uin uin of the account to which the vpc belongs
     * @param integer $AppId App ID of the VPC.
     * @param string $NickName Nickname.
     * @param string $VpcId VPC ID information
     * @param string $VpcName VPC name
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }
    }
}
