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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getChargeType() Obtain 
 * @method void setChargeType(integer $ChargeType) Set 
 * @method string getEmrResourceId() Obtain 
 * @method void setEmrResourceId(string $EmrResourceId) Set 
 * @method string getNodeType() Obtain 
 * @method void setNodeType(string $NodeType) Set 
 * @method string getIp() Obtain 
 * @method void setIp(string $Ip) Set 
 * @method string getExpireTime() Obtain 
 * @method void setExpireTime(string $ExpireTime) Set 
 * @method float getOriginalCost() Obtain 
 * @method void setOriginalCost(float $OriginalCost) Set 
 * @method float getDiscountCost() Obtain 
 * @method void setDiscountCost(float $DiscountCost) Set 
 * @method array getRenewPriceDetails() Obtain 
 * @method void setRenewPriceDetails(array $RenewPriceDetails) Set 
 */
class NodeRenewPriceDetail extends AbstractModel
{
    /**
     * @var integer 
     */
    public $ChargeType;

    /**
     * @var string 
     */
    public $EmrResourceId;

    /**
     * @var string 
     */
    public $NodeType;

    /**
     * @var string 
     */
    public $Ip;

    /**
     * @var string 
     */
    public $ExpireTime;

    /**
     * @var float 
     */
    public $OriginalCost;

    /**
     * @var float 
     */
    public $DiscountCost;

    /**
     * @var array 
     */
    public $RenewPriceDetails;

    /**
     * @param integer $ChargeType 
     * @param string $EmrResourceId 
     * @param string $NodeType 
     * @param string $Ip 
     * @param string $ExpireTime 
     * @param float $OriginalCost 
     * @param float $DiscountCost 
     * @param array $RenewPriceDetails 
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
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("EmrResourceId",$param) and $param["EmrResourceId"] !== null) {
            $this->EmrResourceId = $param["EmrResourceId"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("OriginalCost",$param) and $param["OriginalCost"] !== null) {
            $this->OriginalCost = $param["OriginalCost"];
        }

        if (array_key_exists("DiscountCost",$param) and $param["DiscountCost"] !== null) {
            $this->DiscountCost = $param["DiscountCost"];
        }

        if (array_key_exists("RenewPriceDetails",$param) and $param["RenewPriceDetails"] !== null) {
            $this->RenewPriceDetails = [];
            foreach ($param["RenewPriceDetails"] as $key => $value){
                $obj = new RenewPriceDetail();
                $obj->deserialize($value);
                array_push($this->RenewPriceDetails, $obj);
            }
        }
    }
}
