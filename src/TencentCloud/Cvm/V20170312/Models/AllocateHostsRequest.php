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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AllocateHosts request structure.
 *
 * @method Placement getPlacement() Obtain Instance location. This parameter is used to specify the attributes of an instance, such as its availability zone and project.
 * @method void setPlacement(Placement $Placement) Set Instance location. This parameter is used to specify the attributes of an instance, such as its availability zone and project.
 * @method string getClientToken() Obtain A string used to ensure the idempotency of the request.
 * @method void setClientToken(string $ClientToken) Set A string used to ensure the idempotency of the request.
 * @method ChargePrepaid getHostChargePrepaid() Obtain Configuration of prepaid instances. You can use the parameter to specify the attributes of prepaid instances, such as the subscription period and the auto-renewal plan. This parameter is required for prepaid instances.
 * @method void setHostChargePrepaid(ChargePrepaid $HostChargePrepaid) Set Configuration of prepaid instances. You can use the parameter to specify the attributes of prepaid instances, such as the subscription period and the auto-renewal plan. This parameter is required for prepaid instances.
 * @method string getHostChargeType() Obtain Instance billing model, only monthly or yearly subscription supported. Default value: `PREPAID'.
 * @method void setHostChargeType(string $HostChargeType) Set Instance billing model, only monthly or yearly subscription supported. Default value: `PREPAID'.
 * @method string getHostType() Obtain CDH instance model. Default value: `HS1`.
 * @method void setHostType(string $HostType) Set CDH instance model. Default value: `HS1`.
 * @method integer getHostCount() Obtain Quantity of CDH instances purchased. Default value: 1.
 * @method void setHostCount(integer $HostCount) Set Quantity of CDH instances purchased. Default value: 1.
 * @method array getTagSpecification() Obtain Tag description. You can specify the parameter to associate a tag with an instance.
 * @method void setTagSpecification(array $TagSpecification) Set Tag description. You can specify the parameter to associate a tag with an instance.
 */
class AllocateHostsRequest extends AbstractModel
{
    /**
     * @var Placement Instance location. This parameter is used to specify the attributes of an instance, such as its availability zone and project.
     */
    public $Placement;

    /**
     * @var string A string used to ensure the idempotency of the request.
     */
    public $ClientToken;

    /**
     * @var ChargePrepaid Configuration of prepaid instances. You can use the parameter to specify the attributes of prepaid instances, such as the subscription period and the auto-renewal plan. This parameter is required for prepaid instances.
     */
    public $HostChargePrepaid;

    /**
     * @var string Instance billing model, only monthly or yearly subscription supported. Default value: `PREPAID'.
     */
    public $HostChargeType;

    /**
     * @var string CDH instance model. Default value: `HS1`.
     */
    public $HostType;

    /**
     * @var integer Quantity of CDH instances purchased. Default value: 1.
     */
    public $HostCount;

    /**
     * @var array Tag description. You can specify the parameter to associate a tag with an instance.
     */
    public $TagSpecification;

    /**
     * @param Placement $Placement Instance location. This parameter is used to specify the attributes of an instance, such as its availability zone and project.
     * @param string $ClientToken A string used to ensure the idempotency of the request.
     * @param ChargePrepaid $HostChargePrepaid Configuration of prepaid instances. You can use the parameter to specify the attributes of prepaid instances, such as the subscription period and the auto-renewal plan. This parameter is required for prepaid instances.
     * @param string $HostChargeType Instance billing model, only monthly or yearly subscription supported. Default value: `PREPAID'.
     * @param string $HostType CDH instance model. Default value: `HS1`.
     * @param integer $HostCount Quantity of CDH instances purchased. Default value: 1.
     * @param array $TagSpecification Tag description. You can specify the parameter to associate a tag with an instance.
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
        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("HostChargePrepaid",$param) and $param["HostChargePrepaid"] !== null) {
            $this->HostChargePrepaid = new ChargePrepaid();
            $this->HostChargePrepaid->deserialize($param["HostChargePrepaid"]);
        }

        if (array_key_exists("HostChargeType",$param) and $param["HostChargeType"] !== null) {
            $this->HostChargeType = $param["HostChargeType"];
        }

        if (array_key_exists("HostType",$param) and $param["HostType"] !== null) {
            $this->HostType = $param["HostType"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }
    }
}
