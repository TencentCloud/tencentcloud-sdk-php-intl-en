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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDedicatedClusterOrder request structure.
 *
 * @method string getDedicatedClusterId() Obtain CDC id
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set CDC id
 * @method array getDedicatedClusterTypes() Obtain Array of order-related CDC types
 * @method void setDedicatedClusterTypes(array $DedicatedClusterTypes) Set Array of order-related CDC types
 * @method CosInfo getCosInfo() Obtain Order-related COS storage information
 * @method void setCosInfo(CosInfo $CosInfo) Set Order-related COS storage information
 * @method CbsInfo getCbsInfo() Obtain Order-related CBS storage information
 * @method void setCbsInfo(CbsInfo $CbsInfo) Set Order-related CBS storage information
 * @method string getPurchaseSource() Obtain Purchase source, cloudApi by default
 * @method void setPurchaseSource(string $PurchaseSource) Set Purchase source, cloudApi by default
 * @method string getDedicatedClusterOrderId() Obtain DedicatedClusterOrderId needs to be submitted when API is invoked to submit an order.
 * @method void setDedicatedClusterOrderId(string $DedicatedClusterOrderId) Set DedicatedClusterOrderId needs to be submitted when API is invoked to submit an order.
 */
class CreateDedicatedClusterOrderRequest extends AbstractModel
{
    /**
     * @var string CDC id
     */
    public $DedicatedClusterId;

    /**
     * @var array Array of order-related CDC types
     */
    public $DedicatedClusterTypes;

    /**
     * @var CosInfo Order-related COS storage information
     */
    public $CosInfo;

    /**
     * @var CbsInfo Order-related CBS storage information
     */
    public $CbsInfo;

    /**
     * @var string Purchase source, cloudApi by default
     */
    public $PurchaseSource;

    /**
     * @var string DedicatedClusterOrderId needs to be submitted when API is invoked to submit an order.
     */
    public $DedicatedClusterOrderId;

    /**
     * @param string $DedicatedClusterId CDC id
     * @param array $DedicatedClusterTypes Array of order-related CDC types
     * @param CosInfo $CosInfo Order-related COS storage information
     * @param CbsInfo $CbsInfo Order-related CBS storage information
     * @param string $PurchaseSource Purchase source, cloudApi by default
     * @param string $DedicatedClusterOrderId DedicatedClusterOrderId needs to be submitted when API is invoked to submit an order.
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
        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("DedicatedClusterTypes",$param) and $param["DedicatedClusterTypes"] !== null) {
            $this->DedicatedClusterTypes = [];
            foreach ($param["DedicatedClusterTypes"] as $key => $value){
                $obj = new DedicatedClusterTypeInfo();
                $obj->deserialize($value);
                array_push($this->DedicatedClusterTypes, $obj);
            }
        }

        if (array_key_exists("CosInfo",$param) and $param["CosInfo"] !== null) {
            $this->CosInfo = new CosInfo();
            $this->CosInfo->deserialize($param["CosInfo"]);
        }

        if (array_key_exists("CbsInfo",$param) and $param["CbsInfo"] !== null) {
            $this->CbsInfo = new CbsInfo();
            $this->CbsInfo->deserialize($param["CbsInfo"]);
        }

        if (array_key_exists("PurchaseSource",$param) and $param["PurchaseSource"] !== null) {
            $this->PurchaseSource = $param["PurchaseSource"];
        }

        if (array_key_exists("DedicatedClusterOrderId",$param) and $param["DedicatedClusterOrderId"] !== null) {
            $this->DedicatedClusterOrderId = $param["DedicatedClusterOrderId"];
        }
    }
}
