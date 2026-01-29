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
 * Source IP of the call public account information.
 *
 * @method string getName() Obtain Account name
 * @method void setName(string $Name) Set Account name
 * @method integer getAppID() Obtain App ID of the VPC.
 * @method void setAppID(integer $AppID) Set App ID of the VPC.
 * @method string getVpcID() Obtain vpc id
 * @method void setVpcID(string $VpcID) Set vpc id
 * @method string getVpcName() Obtain vpc name.
 * @method void setVpcName(string $VpcName) Set vpc name.
 */
class SourceIPVpcInfo extends AbstractModel
{
    /**
     * @var string Account name
     */
    public $Name;

    /**
     * @var integer App ID of the VPC.
     */
    public $AppID;

    /**
     * @var string vpc id
     */
    public $VpcID;

    /**
     * @var string vpc name.
     */
    public $VpcName;

    /**
     * @param string $Name Account name
     * @param integer $AppID App ID of the VPC.
     * @param string $VpcID vpc id
     * @param string $VpcName vpc name.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("VpcID",$param) and $param["VpcID"] !== null) {
            $this->VpcID = $param["VpcID"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }
    }
}
