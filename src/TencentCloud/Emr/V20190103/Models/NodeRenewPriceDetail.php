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
 * Node renewal inquiry details.
 *
 * @method integer getChargeType() Obtain Billing mode. Valid values: 1 (monthly subscription) and 3 (committed use).
 * @method void setChargeType(integer $ChargeType) Set Billing mode. Valid values: 1 (monthly subscription) and 3 (committed use).
 * @method string getEmrResourceId() Obtain EMR resource ID.
 * @method void setEmrResourceId(string $EmrResourceId) Set EMR resource ID.
 * @method string getNodeType() Obtain Node type.
 * @method void setNodeType(string $NodeType) Set Node type.
 * @method string getIp() Obtain Node private network IP address.
 * @method void setIp(string $Ip) Set Node private network IP address.
 * @method string getExpireTime() Obtain Current expiration time.
 * @method void setExpireTime(string $ExpireTime) Set Current expiration time.
 * @method float getOriginalCost() Obtain Original price.
 * @method void setOriginalCost(float $OriginalCost) Set Original price.
 * @method float getDiscountCost() Obtain Discounted price.
 * @method void setDiscountCost(float $DiscountCost) Set Discounted price.
 * @method array getRenewPriceDetails() Obtain Node sub-item renewal inquiry details list.
 * @method void setRenewPriceDetails(array $RenewPriceDetails) Set Node sub-item renewal inquiry details list.
 */
class NodeRenewPriceDetail extends AbstractModel
{
    /**
     * @var integer Billing mode. Valid values: 1 (monthly subscription) and 3 (committed use).
     */
    public $ChargeType;

    /**
     * @var string EMR resource ID.
     */
    public $EmrResourceId;

    /**
     * @var string Node type.
     */
    public $NodeType;

    /**
     * @var string Node private network IP address.
     */
    public $Ip;

    /**
     * @var string Current expiration time.
     */
    public $ExpireTime;

    /**
     * @var float Original price.
     */
    public $OriginalCost;

    /**
     * @var float Discounted price.
     */
    public $DiscountCost;

    /**
     * @var array Node sub-item renewal inquiry details list.
     */
    public $RenewPriceDetails;

    /**
     * @param integer $ChargeType Billing mode. Valid values: 1 (monthly subscription) and 3 (committed use).
     * @param string $EmrResourceId EMR resource ID.
     * @param string $NodeType Node type.
     * @param string $Ip Node private network IP address.
     * @param string $ExpireTime Current expiration time.
     * @param float $OriginalCost Original price.
     * @param float $DiscountCost Discounted price.
     * @param array $RenewPriceDetails Node sub-item renewal inquiry details list.
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
