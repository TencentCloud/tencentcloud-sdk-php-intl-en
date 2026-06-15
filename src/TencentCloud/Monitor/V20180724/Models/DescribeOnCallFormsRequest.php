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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOnCallForms request structure.
 *
 * @method string getModule() Obtain The fixed value is monitor.
 * @method void setModule(string $Module) Set The fixed value is monitor.
 * @method integer getOffset() Obtain Pagination start offset.
 * @method void setOffset(integer $Offset) Set Pagination start offset.
 * @method integer getLimit() Obtain Number of pages for pagination query.
 * @method void setLimit(integer $Limit) Set Number of pages for pagination query.
 * @method array getOnCallFormStaffIDs() Obtain Supports searching based on user ID.
 * @method void setOnCallFormStaffIDs(array $OnCallFormStaffIDs) Set Supports searching based on user ID.
 * @method string getRotationType() Obtain Rotation type
 * @method void setRotationType(string $RotationType) Set Rotation type
 * @method string getOrder() Obtain Sorting method.
 * @method void setOrder(string $Order) Set Sorting method.
 * @method string getOnCallFormName() Obtain Supports searching bay on ID and name.
 * @method void setOnCallFormName(string $OnCallFormName) Set Supports searching bay on ID and name.
 */
class DescribeOnCallFormsRequest extends AbstractModel
{
    /**
     * @var string The fixed value is monitor.
     */
    public $Module;

    /**
     * @var integer Pagination start offset.
     */
    public $Offset;

    /**
     * @var integer Number of pages for pagination query.
     */
    public $Limit;

    /**
     * @var array Supports searching based on user ID.
     */
    public $OnCallFormStaffIDs;

    /**
     * @var string Rotation type
     */
    public $RotationType;

    /**
     * @var string Sorting method.
     */
    public $Order;

    /**
     * @var string Supports searching bay on ID and name.
     */
    public $OnCallFormName;

    /**
     * @param string $Module The fixed value is monitor.
     * @param integer $Offset Pagination start offset.
     * @param integer $Limit Number of pages for pagination query.
     * @param array $OnCallFormStaffIDs Supports searching based on user ID.
     * @param string $RotationType Rotation type
     * @param string $Order Sorting method.
     * @param string $OnCallFormName Supports searching bay on ID and name.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OnCallFormStaffIDs",$param) and $param["OnCallFormStaffIDs"] !== null) {
            $this->OnCallFormStaffIDs = $param["OnCallFormStaffIDs"];
        }

        if (array_key_exists("RotationType",$param) and $param["RotationType"] !== null) {
            $this->RotationType = $param["RotationType"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OnCallFormName",$param) and $param["OnCallFormName"] !== null) {
            $this->OnCallFormName = $param["OnCallFormName"];
        }
    }
}
