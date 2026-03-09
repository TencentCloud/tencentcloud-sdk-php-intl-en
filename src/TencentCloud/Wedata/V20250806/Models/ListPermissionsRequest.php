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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListPermissions request structure.
 *
 * @method PrivilegeResource getResource() Obtain Resource.
ResourceType: originates from the ResourceType returned by the GetGrantPrivilegesSTD API in the TCCATALOG module, and change to capitalize the first letter, such as METALAKE corresponding to METALAKE.
ResourceUri depends on ResourceType. fixed as default for Metalake. use the three-segment format of catalog for other categories, such as.
-Metalake, fixed as default.
-Catalog. specifies the catalogName.
-Schema. valid values: catalogName.SchemaName.
-Table. specifies catalogName.SchemaName.TableName.
 * @method void setResource(PrivilegeResource $Resource) Set Resource.
ResourceType: originates from the ResourceType returned by the GetGrantPrivilegesSTD API in the TCCATALOG module, and change to capitalize the first letter, such as METALAKE corresponding to METALAKE.
ResourceUri depends on ResourceType. fixed as default for Metalake. use the three-segment format of catalog for other categories, such as.
-Metalake, fixed as default.
-Catalog. specifies the catalogName.
-Schema. valid values: catalogName.SchemaName.
-Table. specifies catalogName.SchemaName.TableName.
 * @method array getFilters() Obtain Filtering conditions (this parameter is not supported).
 * @method void setFilters(array $Filters) Set Filtering conditions (this parameter is not supported).
 * @method array getOrderFields() Obtain Sorting field (this parameter is not supported).
 * @method void setOrderFields(array $OrderFields) Set Sorting field (this parameter is not supported).
 * @method Page getPage() Obtain Page parameter (this parameter is not supported).
 * @method void setPage(Page $Page) Set Page parameter (this parameter is not supported).
 */
class ListPermissionsRequest extends AbstractModel
{
    /**
     * @var PrivilegeResource Resource.
ResourceType: originates from the ResourceType returned by the GetGrantPrivilegesSTD API in the TCCATALOG module, and change to capitalize the first letter, such as METALAKE corresponding to METALAKE.
ResourceUri depends on ResourceType. fixed as default for Metalake. use the three-segment format of catalog for other categories, such as.
-Metalake, fixed as default.
-Catalog. specifies the catalogName.
-Schema. valid values: catalogName.SchemaName.
-Table. specifies catalogName.SchemaName.TableName.
     */
    public $Resource;

    /**
     * @var array Filtering conditions (this parameter is not supported).
     */
    public $Filters;

    /**
     * @var array Sorting field (this parameter is not supported).
     */
    public $OrderFields;

    /**
     * @var Page Page parameter (this parameter is not supported).
     */
    public $Page;

    /**
     * @param PrivilegeResource $Resource Resource.
ResourceType: originates from the ResourceType returned by the GetGrantPrivilegesSTD API in the TCCATALOG module, and change to capitalize the first letter, such as METALAKE corresponding to METALAKE.
ResourceUri depends on ResourceType. fixed as default for Metalake. use the three-segment format of catalog for other categories, such as.
-Metalake, fixed as default.
-Catalog. specifies the catalogName.
-Schema. valid values: catalogName.SchemaName.
-Table. specifies catalogName.SchemaName.TableName.
     * @param array $Filters Filtering conditions (this parameter is not supported).
     * @param array $OrderFields Sorting field (this parameter is not supported).
     * @param Page $Page Page parameter (this parameter is not supported).
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new PrivilegeResource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new SecurityFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = new Page();
            $this->Page->deserialize($param["Page"]);
        }
    }
}
