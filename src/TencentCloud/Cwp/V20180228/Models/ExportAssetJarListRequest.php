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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportAssetJarList request structure.
 *
 * @method array getFilters() Obtain Filter criteria
<li>Name- string - required: no - package name</li>
<li>Type- uint - required: no - type	
1: Application
2: System library
3: Web service built-in library
4: Other dependent packages</li>
<li>Status- string - required: no - whether executable: 0 - no; 1 yes</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>Name- string - required: no - package name</li>
<li>Type- uint - required: no - type	
1: Application
2: System library
3: Web service built-in library
4: Other dependent packages</li>
<li>Status- string - required: no - whether executable: 0 - no; 1 yes</li>
 * @method string getUuid() Obtain Server UUID
 * @method void setUuid(string $Uuid) Set Server UUID
 * @method string getQuuid() Obtain Server QUUID
 * @method void setQuuid(string $Quuid) Set Server QUUID
 * @method string getOrder() Obtain Sorting method: asc for ascending order or desc for descending order
 * @method void setOrder(string $Order) Set Sorting method: asc for ascending order or desc for descending order
 * @method string getBy() Obtain Sorting method: [FirstTime]
 * @method void setBy(string $By) Set Sorting method: [FirstTime]
 */
class ExportAssetJarListRequest extends AbstractModel
{
    /**
     * @var array Filter criteria
<li>Name- string - required: no - package name</li>
<li>Type- uint - required: no - type	
1: Application
2: System library
3: Web service built-in library
4: Other dependent packages</li>
<li>Status- string - required: no - whether executable: 0 - no; 1 yes</li>
     */
    public $Filters;

    /**
     * @var string Server UUID
     */
    public $Uuid;

    /**
     * @var string Server QUUID
     */
    public $Quuid;

    /**
     * @var string Sorting method: asc for ascending order or desc for descending order
     */
    public $Order;

    /**
     * @var string Sorting method: [FirstTime]
     */
    public $By;

    /**
     * @param array $Filters Filter criteria
<li>Name- string - required: no - package name</li>
<li>Type- uint - required: no - type	
1: Application
2: System library
3: Web service built-in library
4: Other dependent packages</li>
<li>Status- string - required: no - whether executable: 0 - no; 1 yes</li>
     * @param string $Uuid Server UUID
     * @param string $Quuid Server QUUID
     * @param string $Order Sorting method: asc for ascending order or desc for descending order
     * @param string $By Sorting method: [FirstTime]
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
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
