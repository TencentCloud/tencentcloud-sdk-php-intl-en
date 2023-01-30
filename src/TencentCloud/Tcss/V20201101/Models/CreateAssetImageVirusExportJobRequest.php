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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAssetImageVirusExportJob request structure.
 *
 * @method array getExportField() Obtain Export field
 * @method void setExportField(array $ExportField) Set Export field
 * @method string getImageID() Obtain Image ID
 * @method void setImageID(string $ImageID) Set Image ID
 * @method array getFilters() Obtain Number of results to be returned. Default value: `10`. Maximum value: `10000`.
 * @method void setFilters(array $Filters) Set Number of results to be returned. Default value: `10`. Maximum value: `10000`.
 * @method integer getLimit() Obtain Offset. Default value: `0`.
 * @method void setLimit(integer $Limit) Set Offset. Default value: `0`.
 * @method integer getOffset() Obtain Filter parameter. "Filters":[{"Name":"Status","Values":["2"]}]
 * @method void setOffset(integer $Offset) Set Filter parameter. "Filters":[{"Name":"Status","Values":["2"]}]
 * @method string getBy() Obtain Sorting field
 * @method void setBy(string $By) Set Sorting field
 * @method string getOrder() Obtain Valid values: `asc`, `desc`.
 * @method void setOrder(string $Order) Set Valid values: `asc`, `desc`.
 */
class CreateAssetImageVirusExportJobRequest extends AbstractModel
{
    /**
     * @var array Export field
     */
    public $ExportField;

    /**
     * @var string Image ID
     */
    public $ImageID;

    /**
     * @var array Number of results to be returned. Default value: `10`. Maximum value: `10000`.
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Limit;

    /**
     * @var integer Filter parameter. "Filters":[{"Name":"Status","Values":["2"]}]
     */
    public $Offset;

    /**
     * @var string Sorting field
     */
    public $By;

    /**
     * @var string Valid values: `asc`, `desc`.
     */
    public $Order;

    /**
     * @param array $ExportField Export field
     * @param string $ImageID Image ID
     * @param array $Filters Number of results to be returned. Default value: `10`. Maximum value: `10000`.
     * @param integer $Limit Offset. Default value: `0`.
     * @param integer $Offset Filter parameter. "Filters":[{"Name":"Status","Values":["2"]}]
     * @param string $By Sorting field
     * @param string $Order Valid values: `asc`, `desc`.
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
        if (array_key_exists("ExportField",$param) and $param["ExportField"] !== null) {
            $this->ExportField = $param["ExportField"];
        }

        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
