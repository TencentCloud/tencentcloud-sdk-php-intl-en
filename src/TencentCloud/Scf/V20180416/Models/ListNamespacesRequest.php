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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListNamespaces request structure.
 *
 * @method integer getLimit() Obtain Return data length. The default value is `20`.
 * @method void setLimit(integer $Limit) Set Return data length. The default value is `20`.
 * @method integer getOffset() Obtain Data offset. The default value is `0`.
 * @method void setOffset(integer $Offset) Set Data offset. The default value is `0`.
 * @method string getOrderby() Obtain It specifies the sorting order of the results according to a specified field, such as `Name` and `Updatetime`.
 * @method void setOrderby(string $Orderby) Set It specifies the sorting order of the results according to a specified field, such as `Name` and `Updatetime`.
 * @method string getOrder() Obtain It specifies whether to return the results in ascending or descending order. The value is `ASC` or `DESC`.
 * @method void setOrder(string $Order) Set It specifies whether to return the results in ascending or descending order. The value is `ASC` or `DESC`.
 * @method array getSearchKey() Obtain Specifies the range and keyword for search. The value of `Key` can be `Namespace` or `Description`. Multiple AND conditions can be specified.
 * @method void setSearchKey(array $SearchKey) Set Specifies the range and keyword for search. The value of `Key` can be `Namespace` or `Description`. Multiple AND conditions can be specified.
 */
class ListNamespacesRequest extends AbstractModel
{
    /**
     * @var integer Return data length. The default value is `20`.
     */
    public $Limit;

    /**
     * @var integer Data offset. The default value is `0`.
     */
    public $Offset;

    /**
     * @var string It specifies the sorting order of the results according to a specified field, such as `Name` and `Updatetime`.
     */
    public $Orderby;

    /**
     * @var string It specifies whether to return the results in ascending or descending order. The value is `ASC` or `DESC`.
     */
    public $Order;

    /**
     * @var array Specifies the range and keyword for search. The value of `Key` can be `Namespace` or `Description`. Multiple AND conditions can be specified.
     */
    public $SearchKey;

    /**
     * @param integer $Limit Return data length. The default value is `20`.
     * @param integer $Offset Data offset. The default value is `0`.
     * @param string $Orderby It specifies the sorting order of the results according to a specified field, such as `Name` and `Updatetime`.
     * @param string $Order It specifies whether to return the results in ascending or descending order. The value is `ASC` or `DESC`.
     * @param array $SearchKey Specifies the range and keyword for search. The value of `Key` can be `Namespace` or `Description`. Multiple AND conditions can be specified.
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Orderby",$param) and $param["Orderby"] !== null) {
            $this->Orderby = $param["Orderby"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = [];
            foreach ($param["SearchKey"] as $key => $value){
                $obj = new SearchKey();
                $obj->deserialize($value);
                array_push($this->SearchKey, $obj);
            }
        }
    }
}
