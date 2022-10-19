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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFileExportUserJob request structure.
 *
 * @method string getUserStoreId() Obtain User directory ID
 * @method void setUserStoreId(string $UserStoreId) Set User directory ID
 * @method string getFormat() Obtain Exported data type

<li> **NDJSON** </li>  New-line Delimited JSON
<li> **CSV** </li>  Comma-Separated Values
 * @method void setFormat(string $Format) Set Exported data type

<li> **NDJSON** </li>  New-line Delimited JSON
<li> **CSV** </li>  Comma-Separated Values
 * @method array getFilters() Obtain Valid values of `Key`: `condition`, `userGroupId`.

<li> **condition** </li>	Values = Query condition, which can be user ID, username, mobile number, or email address.
<li> **userGroupId** </li>	Values = User group ID
 * @method void setFilters(array $Filters) Set Valid values of `Key`: `condition`, `userGroupId`.

<li> **condition** </li>	Values = Query condition, which can be user ID, username, mobile number, or email address.
<li> **userGroupId** </li>	Values = User group ID
 * @method array getExportPropertyMaps() Obtain Attributes and mapping names included in the exported user information. If this parameter is empty, all attributes will be included.
 * @method void setExportPropertyMaps(array $ExportPropertyMaps) Set Attributes and mapping names included in the exported user information. If this parameter is empty, all attributes will be included.
 */
class CreateFileExportUserJobRequest extends AbstractModel
{
    /**
     * @var string User directory ID
     */
    public $UserStoreId;

    /**
     * @var string Exported data type

<li> **NDJSON** </li>  New-line Delimited JSON
<li> **CSV** </li>  Comma-Separated Values
     */
    public $Format;

    /**
     * @var array Valid values of `Key`: `condition`, `userGroupId`.

<li> **condition** </li>	Values = Query condition, which can be user ID, username, mobile number, or email address.
<li> **userGroupId** </li>	Values = User group ID
     */
    public $Filters;

    /**
     * @var array Attributes and mapping names included in the exported user information. If this parameter is empty, all attributes will be included.
     */
    public $ExportPropertyMaps;

    /**
     * @param string $UserStoreId User directory ID
     * @param string $Format Exported data type

<li> **NDJSON** </li>  New-line Delimited JSON
<li> **CSV** </li>  Comma-Separated Values
     * @param array $Filters Valid values of `Key`: `condition`, `userGroupId`.

<li> **condition** </li>	Values = Query condition, which can be user ID, username, mobile number, or email address.
<li> **userGroupId** </li>	Values = User group ID
     * @param array $ExportPropertyMaps Attributes and mapping names included in the exported user information. If this parameter is empty, all attributes will be included.
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
        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ExportPropertyMaps",$param) and $param["ExportPropertyMaps"] !== null) {
            $this->ExportPropertyMaps = [];
            foreach ($param["ExportPropertyMaps"] as $key => $value){
                $obj = new ExportPropertyMap();
                $obj->deserialize($value);
                array_push($this->ExportPropertyMaps, $obj);
            }
        }
    }
}
