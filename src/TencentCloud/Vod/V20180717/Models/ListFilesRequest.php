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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListFiles request structure.
 *
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getPrefix() Obtain 
 * @method void setPrefix(string $Prefix) Set 
 * @method string getDelimiter() Obtain 
 * @method void setDelimiter(string $Delimiter) Set 
 * @method integer getMaxKeys() Obtain 
 * @method void setMaxKeys(integer $MaxKeys) Set 
 * @method string getMarker() Obtain 
 * @method void setMarker(string $Marker) Set 
 * @method array getCategories() Obtain 
 * @method void setCategories(array $Categories) Set 
 */
class ListFilesRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $Prefix;

    /**
     * @var string 
     */
    public $Delimiter;

    /**
     * @var integer 
     */
    public $MaxKeys;

    /**
     * @var string 
     */
    public $Marker;

    /**
     * @var array 
     */
    public $Categories;

    /**
     * @param integer $SubAppId 
     * @param string $Prefix 
     * @param string $Delimiter 
     * @param integer $MaxKeys 
     * @param string $Marker 
     * @param array $Categories 
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }

        if (array_key_exists("Delimiter",$param) and $param["Delimiter"] !== null) {
            $this->Delimiter = $param["Delimiter"];
        }

        if (array_key_exists("MaxKeys",$param) and $param["MaxKeys"] !== null) {
            $this->MaxKeys = $param["MaxKeys"];
        }

        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            $this->Marker = $param["Marker"];
        }

        if (array_key_exists("Categories",$param) and $param["Categories"] !== null) {
            $this->Categories = $param["Categories"];
        }
    }
}
