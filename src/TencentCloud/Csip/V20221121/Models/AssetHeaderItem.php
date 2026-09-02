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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Asset dynamic table header
 *
 * @method string getItemType() Obtain <p>Type.</p>
 * @method void setItemType(string $ItemType) Set <p>Type.</p>
 * @method string getLabel() Obtain <p>Show</p>
 * @method void setLabel(string $Label) Set <p>Show</p>
 * @method integer getCopy() Obtain <p>Support copying</p>
 * @method void setCopy(integer $Copy) Set <p>Support copying</p>
 * @method array getValues() Obtain <p>Value corresponding to the field key</p>
 * @method void setValues(array $Values) Set <p>Value corresponding to the field key</p>
 * @method string getLinkURL() Obtain <p>Redirect URL</p>
 * @method void setLinkURL(string $LinkURL) Set <p>Redirect URL</p>
 * @method array getFilters() Obtain <p>Filter</p>
 * @method void setFilters(array $Filters) Set <p>Filter</p>
 * @method integer getSort() Obtain <p>Support sorting</p>
 * @method void setSort(integer $Sort) Set <p>Support sorting</p>
 * @method string getValueStyle() Obtain <p>Field display style</p>
 * @method void setValueStyle(string $ValueStyle) Set <p>Field display style</p>
 */
class AssetHeaderItem extends AbstractModel
{
    /**
     * @var string <p>Type.</p>
     */
    public $ItemType;

    /**
     * @var string <p>Show</p>
     */
    public $Label;

    /**
     * @var integer <p>Support copying</p>
     */
    public $Copy;

    /**
     * @var array <p>Value corresponding to the field key</p>
     */
    public $Values;

    /**
     * @var string <p>Redirect URL</p>
     */
    public $LinkURL;

    /**
     * @var array <p>Filter</p>
     */
    public $Filters;

    /**
     * @var integer <p>Support sorting</p>
     */
    public $Sort;

    /**
     * @var string <p>Field display style</p>
     */
    public $ValueStyle;

    /**
     * @param string $ItemType <p>Type.</p>
     * @param string $Label <p>Show</p>
     * @param integer $Copy <p>Support copying</p>
     * @param array $Values <p>Value corresponding to the field key</p>
     * @param string $LinkURL <p>Redirect URL</p>
     * @param array $Filters <p>Filter</p>
     * @param integer $Sort <p>Support sorting</p>
     * @param string $ValueStyle <p>Field display style</p>
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
        if (array_key_exists("ItemType",$param) and $param["ItemType"] !== null) {
            $this->ItemType = $param["ItemType"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Copy",$param) and $param["Copy"] !== null) {
            $this->Copy = $param["Copy"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("LinkURL",$param) and $param["LinkURL"] !== null) {
            $this->LinkURL = $param["LinkURL"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilterConfig();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("ValueStyle",$param) and $param["ValueStyle"] !== null) {
            $this->ValueStyle = $param["ValueStyle"];
        }
    }
}
