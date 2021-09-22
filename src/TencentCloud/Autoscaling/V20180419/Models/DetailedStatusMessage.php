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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed description of scaling activity status
 *
 * @method string getCode() Obtain Error type
 * @method void setCode(string $Code) Set Error type
 * @method string getZone() Obtain AZ information
 * @method void setZone(string $Zone) Set AZ information
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceChargeType() Obtain Instance billing mode
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing mode
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method string getMessage() Obtain Error message
 * @method void setMessage(string $Message) Set Error message
 * @method string getInstanceType() Obtain Instance type
 * @method void setInstanceType(string $InstanceType) Set Instance type
 */
class DetailedStatusMessage extends AbstractModel
{
    /**
     * @var string Error type
     */
    public $Code;

    /**
     * @var string AZ information
     */
    public $Zone;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance billing mode
     */
    public $InstanceChargeType;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var string Error message
     */
    public $Message;

    /**
     * @var string Instance type
     */
    public $InstanceType;

    /**
     * @param string $Code Error type
     * @param string $Zone AZ information
     * @param string $InstanceId Instance ID
     * @param string $InstanceChargeType Instance billing mode
     * @param string $SubnetId Subnet ID
     * @param string $Message Error message
     * @param string $InstanceType Instance type
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
