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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNativeGatewayServiceSources request structure.
 *
 * @method string getGatewayID() Obtain Gateway instance ID
 * @method void setGatewayID(string $GatewayID) Set Gateway instance ID
 * @method integer getLimit() Obtain Items per page. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Items per page. Maximum value: 100.
 * @method integer getOffset() Obtain Pagination offset.
 * @method void setOffset(integer $Offset) Set Pagination offset.
 * @method string getSourceID() Obtain Service Source ID
 * @method void setSourceID(string $SourceID) Set Service Source ID
 * @method string getSourceName() Obtain Service Source Instance Name, Fuzzy Search
 * @method void setSourceName(string $SourceName) Set Service Source Instance Name, Fuzzy Search
 * @method array getSourceTypes() Obtain Microservice engine type: TSE-Nacos｜TSE-Consul｜TSE-PolarisMesh｜Customer-Nacos｜Customer-Consul｜Customer-PolarisMesh
 * @method void setSourceTypes(array $SourceTypes) Set Microservice engine type: TSE-Nacos｜TSE-Consul｜TSE-PolarisMesh｜Customer-Nacos｜Customer-Consul｜Customer-PolarisMesh
 * @method string getOrderField() Obtain Sorting field data type, currently only support SourceName
 * @method void setOrderField(string $OrderField) Set Sorting field data type, currently only support SourceName
 * @method string getOrderType() Obtain Sorting type, AES/DESC
 * @method void setOrderType(string $OrderType) Set Sorting type, AES/DESC
 */
class DescribeNativeGatewayServiceSourcesRequest extends AbstractModel
{
    /**
     * @var string Gateway instance ID
     */
    public $GatewayID;

    /**
     * @var integer Items per page. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Pagination offset.
     */
    public $Offset;

    /**
     * @var string Service Source ID
     */
    public $SourceID;

    /**
     * @var string Service Source Instance Name, Fuzzy Search
     */
    public $SourceName;

    /**
     * @var array Microservice engine type: TSE-Nacos｜TSE-Consul｜TSE-PolarisMesh｜Customer-Nacos｜Customer-Consul｜Customer-PolarisMesh
     */
    public $SourceTypes;

    /**
     * @var string Sorting field data type, currently only support SourceName
     */
    public $OrderField;

    /**
     * @var string Sorting type, AES/DESC
     */
    public $OrderType;

    /**
     * @param string $GatewayID Gateway instance ID
     * @param integer $Limit Items per page. Maximum value: 100.
     * @param integer $Offset Pagination offset.
     * @param string $SourceID Service Source ID
     * @param string $SourceName Service Source Instance Name, Fuzzy Search
     * @param array $SourceTypes Microservice engine type: TSE-Nacos｜TSE-Consul｜TSE-PolarisMesh｜Customer-Nacos｜Customer-Consul｜Customer-PolarisMesh
     * @param string $OrderField Sorting field data type, currently only support SourceName
     * @param string $OrderType Sorting type, AES/DESC
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
        if (array_key_exists("GatewayID",$param) and $param["GatewayID"] !== null) {
            $this->GatewayID = $param["GatewayID"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SourceID",$param) and $param["SourceID"] !== null) {
            $this->SourceID = $param["SourceID"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("SourceTypes",$param) and $param["SourceTypes"] !== null) {
            $this->SourceTypes = $param["SourceTypes"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }
    }
}
