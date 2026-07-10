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
 * AddSpecifyPrivateZoneVpc request structure.
 *
 * @method string getZoneId() Obtain Private domain ID.
 * @method void setZoneId(string $ZoneId) Set Private domain ID.
 * @method array getVpcSet() Obtain Information about the new VPC.
 * @method void setVpcSet(array $VpcSet) Set Information about the new VPC.
 * @method array getAccountVpcSet() Obtain Information about the new VPC of the associated account.
 * @method void setAccountVpcSet(array $AccountVpcSet) Set Information about the new VPC of the associated account.
 * @method boolean getSync() Obtain Whether the operation is synchronous.
 * @method void setSync(boolean $Sync) Set Whether the operation is synchronous.
 */
class AddSpecifyPrivateZoneVpcRequest extends AbstractModel
{
    /**
     * @var string Private domain ID.
     */
    public $ZoneId;

    /**
     * @var array Information about the new VPC.
     */
    public $VpcSet;

    /**
     * @var array Information about the new VPC of the associated account.
     */
    public $AccountVpcSet;

    /**
     * @var boolean Whether the operation is synchronous.
     */
    public $Sync;

    /**
     * @param string $ZoneId Private domain ID.
     * @param array $VpcSet Information about the new VPC.
     * @param array $AccountVpcSet Information about the new VPC of the associated account.
     * @param boolean $Sync Whether the operation is synchronous.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("VpcSet",$param) and $param["VpcSet"] !== null) {
            $this->VpcSet = [];
            foreach ($param["VpcSet"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcSet, $obj);
            }
        }

        if (array_key_exists("AccountVpcSet",$param) and $param["AccountVpcSet"] !== null) {
            $this->AccountVpcSet = [];
            foreach ($param["AccountVpcSet"] as $key => $value){
                $obj = new AccountVpcInfo();
                $obj->deserialize($value);
                array_push($this->AccountVpcSet, $obj);
            }
        }

        if (array_key_exists("Sync",$param) and $param["Sync"] !== null) {
            $this->Sync = $param["Sync"];
        }
    }
}
