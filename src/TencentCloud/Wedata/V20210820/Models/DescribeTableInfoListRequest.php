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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTableInfoList request structure.
 *
 * @method array getFilters() Obtain Table name
 * @method void setFilters(array $Filters) Set Table name
 * @method string getConnectionType() Obtain If it is hive write rpc, if it is other types do not transmit
 * @method void setConnectionType(string $ConnectionType) Set If it is hive write rpc, if it is other types do not transmit
 * @method string getCatalog() Obtain Database source type
 * @method void setCatalog(string $Catalog) Set Database source type
 */
class DescribeTableInfoListRequest extends AbstractModel
{
    /**
     * @var array Table name
     */
    public $Filters;

    /**
     * @var string If it is hive write rpc, if it is other types do not transmit
     */
    public $ConnectionType;

    /**
     * @var string Database source type
     */
    public $Catalog;

    /**
     * @param array $Filters Table name
     * @param string $ConnectionType If it is hive write rpc, if it is other types do not transmit
     * @param string $Catalog Database source type
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ConnectionType",$param) and $param["ConnectionType"] !== null) {
            $this->ConnectionType = $param["ConnectionType"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }
    }
}
