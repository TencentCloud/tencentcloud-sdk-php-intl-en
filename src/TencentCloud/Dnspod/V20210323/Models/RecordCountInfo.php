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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Count info of the queried record list
 *
 * @method integer getSubdomainCount() Obtain The subdomain count.
 * @method void setSubdomainCount(integer $SubdomainCount) Set The subdomain count.
 * @method integer getListCount() Obtain The count of records returned in the list.
 * @method void setListCount(integer $ListCount) Set The count of records returned in the list.
 * @method integer getTotalCount() Obtain The total record count.
 * @method void setTotalCount(integer $TotalCount) Set The total record count.
 */
class RecordCountInfo extends AbstractModel
{
    /**
     * @var integer The subdomain count.
     */
    public $SubdomainCount;

    /**
     * @var integer The count of records returned in the list.
     */
    public $ListCount;

    /**
     * @var integer The total record count.
     */
    public $TotalCount;

    /**
     * @param integer $SubdomainCount The subdomain count.
     * @param integer $ListCount The count of records returned in the list.
     * @param integer $TotalCount The total record count.
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
        if (array_key_exists("SubdomainCount",$param) and $param["SubdomainCount"] !== null) {
            $this->SubdomainCount = $param["SubdomainCount"];
        }

        if (array_key_exists("ListCount",$param) and $param["ListCount"] !== null) {
            $this->ListCount = $param["ListCount"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
