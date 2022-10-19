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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConditionsTemplateList request structure.
 *
 * @method string getModule() Obtain The value is fixed to `monitor`.
 * @method void setModule(string $Module) Set The value is fixed to `monitor`.
 * @method string getViewName() Obtain View name, which can be obtained via [DescribeAllNamespaces](https://intl.cloud.tencent.com/document/product/248/48683?from_cn_redirect=1). For the monitoring of Tencent Cloud services, the value of this parameter is `QceNamespacesNew.N.Id` of the output parameter of `DescribeAllNamespaces`, for example, `cvm_device`.
 * @method void setViewName(string $ViewName) Set View name, which can be obtained via [DescribeAllNamespaces](https://intl.cloud.tencent.com/document/product/248/48683?from_cn_redirect=1). For the monitoring of Tencent Cloud services, the value of this parameter is `QceNamespacesNew.N.Id` of the output parameter of `DescribeAllNamespaces`, for example, `cvm_device`.
 * @method string getGroupName() Obtain Filter by trigger condition template name.
 * @method void setGroupName(string $GroupName) Set Filter by trigger condition template name.
 * @method string getGroupID() Obtain Filter by trigger condition template ID.
 * @method void setGroupID(string $GroupID) Set Filter by trigger condition template ID.
 * @method integer getLimit() Obtain Pagination parameter, which specifies the number of returned results per page. Value range: 1-100. Default value: 20.
 * @method void setLimit(integer $Limit) Set Pagination parameter, which specifies the number of returned results per page. Value range: 1-100. Default value: 20.
 * @method integer getOffset() Obtain Pagination offset starting from 0. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset starting from 0. Default value: 0.
 * @method string getUpdateTimeOrder() Obtain Sorting method by update time. `asc`: Ascending order; `desc`: Descending order.
 * @method void setUpdateTimeOrder(string $UpdateTimeOrder) Set Sorting method by update time. `asc`: Ascending order; `desc`: Descending order.
 * @method string getPolicyCountOrder() Obtain Sorting order based on the number of associated policies. Valid values: `asc` (ascending order), `desc` (descending order).
 * @method void setPolicyCountOrder(string $PolicyCountOrder) Set Sorting order based on the number of associated policies. Valid values: `asc` (ascending order), `desc` (descending order).
 */
class DescribeConditionsTemplateListRequest extends AbstractModel
{
    /**
     * @var string The value is fixed to `monitor`.
     */
    public $Module;

    /**
     * @var string View name, which can be obtained via [DescribeAllNamespaces](https://intl.cloud.tencent.com/document/product/248/48683?from_cn_redirect=1). For the monitoring of Tencent Cloud services, the value of this parameter is `QceNamespacesNew.N.Id` of the output parameter of `DescribeAllNamespaces`, for example, `cvm_device`.
     */
    public $ViewName;

    /**
     * @var string Filter by trigger condition template name.
     */
    public $GroupName;

    /**
     * @var string Filter by trigger condition template ID.
     */
    public $GroupID;

    /**
     * @var integer Pagination parameter, which specifies the number of returned results per page. Value range: 1-100. Default value: 20.
     */
    public $Limit;

    /**
     * @var integer Pagination offset starting from 0. Default value: 0.
     */
    public $Offset;

    /**
     * @var string Sorting method by update time. `asc`: Ascending order; `desc`: Descending order.
     */
    public $UpdateTimeOrder;

    /**
     * @var string Sorting order based on the number of associated policies. Valid values: `asc` (ascending order), `desc` (descending order).
     */
    public $PolicyCountOrder;

    /**
     * @param string $Module The value is fixed to `monitor`.
     * @param string $ViewName View name, which can be obtained via [DescribeAllNamespaces](https://intl.cloud.tencent.com/document/product/248/48683?from_cn_redirect=1). For the monitoring of Tencent Cloud services, the value of this parameter is `QceNamespacesNew.N.Id` of the output parameter of `DescribeAllNamespaces`, for example, `cvm_device`.
     * @param string $GroupName Filter by trigger condition template name.
     * @param string $GroupID Filter by trigger condition template ID.
     * @param integer $Limit Pagination parameter, which specifies the number of returned results per page. Value range: 1-100. Default value: 20.
     * @param integer $Offset Pagination offset starting from 0. Default value: 0.
     * @param string $UpdateTimeOrder Sorting method by update time. `asc`: Ascending order; `desc`: Descending order.
     * @param string $PolicyCountOrder Sorting order based on the number of associated policies. Valid values: `asc` (ascending order), `desc` (descending order).
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupID",$param) and $param["GroupID"] !== null) {
            $this->GroupID = $param["GroupID"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("UpdateTimeOrder",$param) and $param["UpdateTimeOrder"] !== null) {
            $this->UpdateTimeOrder = $param["UpdateTimeOrder"];
        }

        if (array_key_exists("PolicyCountOrder",$param) and $param["PolicyCountOrder"] !== null) {
            $this->PolicyCountOrder = $param["PolicyCountOrder"];
        }
    }
}
