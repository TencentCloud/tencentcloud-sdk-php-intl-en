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
 * ListVersionByFunction request structure.
 *
 * @method string getFunctionName() Obtain Function Name
 * @method void setFunctionName(string $FunctionName) Set Function Name
 * @method string getNamespace() Obtain The namespace where the function locates
 * @method void setNamespace(string $Namespace) Set The namespace where the function locates
 * @method integer getOffset() Obtain Data offset. The default value is `0`.
 * @method void setOffset(integer $Offset) Set Data offset. The default value is `0`.
 * @method integer getLimit() Obtain Return data length. The default value is `20`.
 * @method void setLimit(integer $Limit) Set Return data length. The default value is `20`.
 * @method string getOrder() Obtain It specifies whether to return the results in ascending or descending order. The value is `ASC` or `DESC`.
 * @method void setOrder(string $Order) Set It specifies whether to return the results in ascending or descending order. The value is `ASC` or `DESC`.
 * @method string getOrderBy() Obtain It specifies the sorting order of the results according to a specified field, such as `AddTime`, `ModTime`.
 * @method void setOrderBy(string $OrderBy) Set It specifies the sorting order of the results according to a specified field, such as `AddTime`, `ModTime`.
 */
class ListVersionByFunctionRequest extends AbstractModel
{
    /**
     * @var string Function Name
     */
    public $FunctionName;

    /**
     * @var string The namespace where the function locates
     */
    public $Namespace;

    /**
     * @var integer Data offset. The default value is `0`.
     */
    public $Offset;

    /**
     * @var integer Return data length. The default value is `20`.
     */
    public $Limit;

    /**
     * @var string It specifies whether to return the results in ascending or descending order. The value is `ASC` or `DESC`.
     */
    public $Order;

    /**
     * @var string It specifies the sorting order of the results according to a specified field, such as `AddTime`, `ModTime`.
     */
    public $OrderBy;

    /**
     * @param string $FunctionName Function Name
     * @param string $Namespace The namespace where the function locates
     * @param integer $Offset Data offset. The default value is `0`.
     * @param integer $Limit Return data length. The default value is `20`.
     * @param string $Order It specifies whether to return the results in ascending or descending order. The value is `ASC` or `DESC`.
     * @param string $OrderBy It specifies the sorting order of the results according to a specified field, such as `AddTime`, `ModTime`.
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }
    }
}
