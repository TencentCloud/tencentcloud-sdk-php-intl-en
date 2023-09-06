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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomAccounts request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method boolean getAll() Obtain All custom accounts
 * @method void setAll(boolean $All) Set All custom accounts
 * @method boolean getEmbedPermission() Obtain Whether to enter the policy
 * @method void setEmbedPermission(boolean $EmbedPermission) Set Whether to enter the policy
 * @method array getFilters() Obtain Filters
 * @method void setFilters(array $Filters) Set Filters
 * @method integer getOffset() Obtain Offset. Default value: `0`
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`
 * @method integer getLimit() Obtain Maximum number of output entries. Default value: `20`. Maximum value: 100`.
 * @method void setLimit(integer $Limit) Set Maximum number of output entries. Default value: `20`. Maximum value: 100`.
 */
class DescribeCustomAccountsRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var boolean All custom accounts
     */
    public $All;

    /**
     * @var boolean Whether to enter the policy
     */
    public $EmbedPermission;

    /**
     * @var array Filters
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: `0`
     */
    public $Offset;

    /**
     * @var integer Maximum number of output entries. Default value: `20`. Maximum value: 100`.
     */
    public $Limit;

    /**
     * @param string $RegistryId Instance ID
     * @param boolean $All All custom accounts
     * @param boolean $EmbedPermission Whether to enter the policy
     * @param array $Filters Filters
     * @param integer $Offset Offset. Default value: `0`
     * @param integer $Limit Maximum number of output entries. Default value: `20`. Maximum value: 100`.
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("EmbedPermission",$param) and $param["EmbedPermission"] !== null) {
            $this->EmbedPermission = $param["EmbedPermission"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
