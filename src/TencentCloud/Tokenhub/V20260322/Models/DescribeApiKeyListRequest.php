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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApiKeyList request structure.
 *
 * @method string getPlatform() Obtain Platform type. Currently supported values: maas.
 * @method void setPlatform(string $Platform) Set Platform type. Currently supported values: maas.
 * @method integer getLimit() Obtain Number of returned results, defaults to 20, maximum value 100.
 * @method void setLimit(integer $Limit) Set Number of returned results, defaults to 20, maximum value 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method array getFilters() Obtain Filter condition list. Supported filter fields: apikeyId (API Key ID), apiKeyName (name), platform (platform type), status (status), bindType (binding type).
 * @method void setFilters(array $Filters) Set Filter condition list. Supported filter fields: apikeyId (API Key ID), apiKeyName (name), platform (platform type), status (status), bindType (binding type).
 * @method array getSorts() Obtain Sorting condition list. Supported sorting field: apiKeyName
 * @method void setSorts(array $Sorts) Set Sorting condition list. Supported sorting field: apiKeyName
 */
class DescribeApiKeyListRequest extends AbstractModel
{
    /**
     * @var string Platform type. Currently supported values: maas.
     */
    public $Platform;

    /**
     * @var integer Number of returned results, defaults to 20, maximum value 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Filter condition list. Supported filter fields: apikeyId (API Key ID), apiKeyName (name), platform (platform type), status (status), bindType (binding type).
     */
    public $Filters;

    /**
     * @var array Sorting condition list. Supported sorting field: apiKeyName
     */
    public $Sorts;

    /**
     * @param string $Platform Platform type. Currently supported values: maas.
     * @param integer $Limit Number of returned results, defaults to 20, maximum value 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param array $Filters Filter condition list. Supported filter fields: apikeyId (API Key ID), apiKeyName (name), platform (platform type), status (status), bindType (binding type).
     * @param array $Sorts Sorting condition list. Supported sorting field: apiKeyName
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RequestFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Sorts",$param) and $param["Sorts"] !== null) {
            $this->Sorts = [];
            foreach ($param["Sorts"] as $key => $value){
                $obj = new RequestSort();
                $obj->deserialize($value);
                array_push($this->Sorts, $obj);
            }
        }
    }
}
